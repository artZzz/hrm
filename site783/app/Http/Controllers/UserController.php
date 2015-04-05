<?php namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Request;
use App\User;
use App\AddNews;
use App\Comment;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class UserController extends Controller 
{	
	public function index()
	{
		if (Session::get('login')) {
			
			$userData = User::where('login', '=', Session::get('login')) -> first();
			return view('index',compact('userData'));

		}

		return view('index', array('CSRF_token' => csrf_token() ));
	}

	public function signUp() 
	{
		
		$formFields = Request::all();

		$hash = Crypt::encrypt($formFields['uEmail']);

		$hobbies = null;

		foreach($formFields['uHobb'] as $hobbie) {
			if ($hobbies == null) {
				$hobbies = $hobbies . $hobbie;
			}
			else {
				$hobbies = $hobbies . ',' . $hobbie;
			}
		}

		$userData = array(

	      'fname'      			 =>  $formFields['fName'],
	      'lname'      			 =>  $formFields['lName'],
	      'login'      			 =>  $formFields['uLogin'],
	      'email'     			 =>  $formFields['uEmail'],
	      'pass'       			 =>  $formFields['uPass'],
	      'pass_confirm'    	 =>  $formFields['uRPass'],
	      'ageD'     			 =>  $formFields['uAgeD'],
	      'ageM'     			 =>  $formFields['uAgeM'],
	      'ageY'     			 =>  $formFields['uAgeY'],
	      'aducation'     		 =>  $formFields['uAduc'],
	      'hobbies'     		 =>  $hobbies,
	      'hash'				 =>	 $hash,
	      'activated'			 =>	 0,
	      'captcha' 			 =>	 $formFields['captcha_text'],
	      
	    );

		$userDataFile = $userData;

		if ($file = Request::file('image')) {
			$fileName = $file->getClientOriginalName();
			$fileExt  = $file->getClientOriginalExtension();
			$fileSize = $file->getClientSize();
			$userData['image'] = $fileName;
			$userDataFile['imageExt']  = $fileExt;
			$userDataFile['imageSize'] = $fileSize;
		}

		$rules = array(

	        'fname'      	        =>  'required|min:2',
	        'lname'      	        =>  'required|min:2',
	        'login'      	  	    =>  'required|min:6|unique:users',
	        'email'      	  	    =>  'required|min:6|email|unique:users',
	        'pass'       	  	 	=>  'required|min:6',
	        'pass_confirm'     		=>  'same:pass',
	        'captcha'				=> 	'required|captcha',
	        'imageExt'				=>  'in:png,jpg,jpeg,gif',
	        'imageSize'				=> 	'max:1024*1024*2',

	    );


	    $validator = Validator::make($userDataFile,$rules);

	    

	    if($validator->fails())
	        return response() -> json(array(
	            'fail' => true,
	            'errors' => $validator->getMessageBag()->toArray()
	        ));
	    else {
	    //hash it now
	    	$userEmail = $userData['email'];
	        $userData['pass'] =    Crypt::encrypt($userData['pass']);
	        unset($userData['pass_confirm']);
	    //save to DB user details
	        if($user = User::create($userData)) {  

	        	Mail::send('emails.activate', array('hashCode' => $hash), function($message) use ($userEmail) 
	        	{
		            $message->to($userEmail)->subject('Activation Account');
		        });

 				if ($file) {
 					$destinationPath = public_path() . '/uImages/' . $user['id'];
	        		Request::file('image')->move($destinationPath, $fileName);
 				}

		        return response() -> json(array(
		          'success' => 'Thanks for registration! Checkout you email and activate account!',
		        ));
	        }

		}
	    
	}

	public function signIn() 
	{

		$formFields = Request::all();

		$userData = array(

	      'login' => $formFields['login'],
	      'pass'  =>  $formFields['password']
	      
	    );

		$rules = array(

	        'login' =>  'required|min:6',
	        'pass'  =>  'required|min:6'

	    );

	    $validator = Validator::make($userData,$rules);

	    if($validator->fails()) {
	        return response() -> json(array(
	            'fail' => true,
	            'errors' => $validator->getMessageBag()->toArray()
	        ));
	    }

	    else {

	   		$user = User::where('login', '=', $userData['login']) -> first();

		   	if($user == null) {
		        return response() -> json(array(
		            'fail' => true,
		            'errors' => ['User not found']
		        ));
		    }
		    else {

		    	if (Crypt::decrypt($user['pass']) !== $userData['pass']) {
		    		
		    		return response() -> json(array(
			            'fail' => true,
			            'errors' => ['User password is invalid!']
			        ));

		    	}
		    	else {
		    		Session::put('login', $userData['login']);

		    		return response() -> json(array(
			          'success' => 'Thanks for registration! Checkout you email and activate account!',
			        ));
		    	}

		    }
	   	}
	}

	public function logout()
	{

		Session::flush();

	}

	public function addNews()
	{

		$formFields = Request::all();
		 

		$newsData = array(

	      'title' =>  $formFields['title'],
	      'text'  =>  $formFields['text'],
	      'date'  =>  date('d\.m\.Y')
	      
	    );

		$rules = array(

	        'title' =>  'required|min:6',
	        'text'  =>  'required|min:6'

	    );

		$validator = Validator::make($newsData,$rules);

	    if($validator->fails())
	        return response() -> json(array(
	            'fail' => true,
	            'errors' => $validator->getMessageBag()->toArray()
	        ));
	    else {

			AddNews::create($newsData);

		}
	}

	public function getNews()
	{
		$news = AddNews::orderBy('id', 'desc') -> get();
		return view('news',compact('news'));
	}

	public function addComment()
	{

		$formFields = Request::all();
		 

		$commentData = array(

		  'author'  =>  Session::get('name'),
		  'post_id' =>  $formFields['post_id'],
	      'comment'  	=>  $formFields['commentText'],
	      'date'  	=>  date('d\.m\.Y')
	      
	    );

		$rules = array(

	        'comment'  =>  'required|min:6'

	    );

		$validator = Validator::make($commentData,$rules);

	    if($validator->fails())
	        return response() -> json(array(
	            'fail' => true,
	            'errors' => $validator->getMessageBag()->toArray()
	        ));
	    else {

	    	Comment::create($commentData);
			
		}

	}

	public function accountInfo()
	{

		$months = ['January','February','March','April','May','June','July','August','September','Octember','November','December'];

		$getUser = User::where('login', '=', Session::get('login')) -> firstOrFail();

		$hobbies = explode(',', $getUser['hobbies']); 

		return view('settings', compact('getUser','hobbies','months'));

	}

	public function updateInfo() 
	{
		$formFields = Request::all(); 

		$hobbies = null;

		foreach($formFields['uHobb'] as $hobbie) {
			if ($hobbies == null) {
				$hobbies = $hobbies . $hobbie;
			}
			else {
				$hobbies = $hobbies . ',' . $hobbie;
			}
		}
		
		$userData = array(

		  'id'					 =>	 $formFields['userId'],
	      'fname'      			 =>  $formFields['fName'],
	      'lname'      			 =>  $formFields['lName'],
	      'login'      			 =>  $formFields['uLogin'],
	      'email'     			 =>  $formFields['uEmail'],
	      'pass'       			 =>  $formFields['uPass'],
	      'pass_confirm'    	 =>  $formFields['uRPass'],
	      'ageD'     			 =>  $formFields['uAgeD'],
	      'ageM'     			 =>  $formFields['uAgeM'],
	      'ageY'     			 =>  $formFields['uAgeY'],
	      'aducation'     		 =>  $formFields['uAduc'],
	      'hobbies'     		 =>  $hobbies,
	      'oldPass'				 =>  $formFields['uOldPass'],    
	    );

	    $userDataFile = $userData;

		if ($file = Request::file('image')) {
			$fileName = $file->getClientOriginalName();
			$fileExt  = $file->getClientOriginalExtension();
			$fileSize = $file->getClientSize();
			$userData['image'] = $fileName;
			$userDataFile['imageExt']  = $fileExt;
			$userDataFile['imageSize'] = $fileSize;
		}

		$rules = array(

			'oldPass'				=> 	'min:6|required',
	        'pass'       	  	 	=>  'min:6',
	        'pass_confirm'     		=>  'same:pass',
	        'imageExt'				=>  'in:png,jpg,jpeg,gif',
	        'imageSize'				=> 	'max:1024*1024*2',

	    );

	    $validator = Validator::make($userDataFile,$rules);

	    

	    if($validator->fails())
	        return response() -> json(array(
	            'fail' => true,
	            'errors' => $validator->getMessageBag()->toArray()
	        ));
	    else {

	    	$user = User::find($userData['id']);

	    	if ($userData['oldPass'] == Crypt::decrypt($user['pass'])) {
	    	
		    	if ($file) {
					$destinationPath = public_path() . '/uImages/' . $userData['id'];
	        		Request::file('image')->move($destinationPath, $fileName);
				}

				if ($userData['pass']) {
					$userData['pass'] = Crypt::encrypt($userData['pass']);	
				}
				else {
					unset($userData['pass']);
				}
				
				unset($userData['pass_confirm']);
				unset($userData['oldPass']);

		        DB::table('users')
			            ->where('id', $userData['id'])
			            ->update($userData);

			    return response() -> json(array(
		            'success' => 'User data was successfuly updated!'
		        ));

	    	}
	    	else {
		    	return response() -> json(array(
		            'fail' => true,
		            'errors' => ['Old password is invalid!']
		        ));
	    	}
	        	

		}
	    
	}
	public function activateEmail()
	{

		$userHash = $_GET['h'];
		$activateTrue = User::where('hash', '=', $userHash) -> first(); 

		if ($activateTrue) {
			
			if ($activateTrue ->activated == '1') {
				
				return response() -> json(array(
	            'fail' => true,
	            'errors' => ['You are already activated']
	        ));

			}
			else {

				$activateTrue ->activated = '1';
				$activateTrue ->save();

			}

		}

	}


}
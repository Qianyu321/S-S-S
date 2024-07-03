<?php

namespace App\Http\Controllers;

use App\Models\Bbs;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
	public $url='';
    public function index(){

   		return view('login.index');
   }
   public function reg(){

      return view('login.reg');
   }

 public function userlogin(){

      return view('login.userlogin');
   }
   public function userreg(){

      return view('login.userreg');
   }


   public function dologin(Request $request){
   		$data=$request->all();
   		
    	$user=User::where('username',$data['username'])->first();
    	
    	if(empty($user)){
    			  echo "<script>alert('Account does not exist');</script>";
			  echo "<script>location.href='{$this->url}/login'</script>";
    	}
    	if($user->password != $request['password']){
    		 
    		     echo "<script>alert('Password error');</script>";
			  echo "<script>location.href='{$this->url}/login'</script>";
    	}
     

    	   echo "<script>alert('success');</script>";
          
             session(['user'=>$user]);
            echo "<script>location.href='{$this->url}/user/userindex'</script>";
         
			  

   }

   public function dologin2(Request $request){
      $data=$request->all();
      
      $user=User::where('username',$data['username'])->first();
      
      if(empty($user)){
            echo "<script>alert('Account does not exist');</script>";
        echo "<script>location.href='{$this->url}/userlogin'</script>";
      }
      if($user->password != $request['password']){
         
             echo "<script>alert('Password error');</script>";
        echo "<script>location.href='{$this->url}/userlogin'</script>";
      }
     

         echo "<script>alert('success');</script>";
         
             session(['cus'=>$user]);

            echo "<script>location.href='{$this->url}/center'</script>";
          
        

   }
    public function doreg(Request $request){
      $data=$request->all();
      
      $user=User::where('username',$data['username'])->first();
      
      if(!empty($user)){
            echo "<script>alert('The username already exists');</script>";
        echo "<script>location.href='{$this->url}/reg'</script>";
      }
      
        $data['type']=2;
        $res=User::create($data);
         echo "<script>alert('success');</script>";
         
            echo "<script>location.href='{$this->url}/login'</script>";
          
        

   }



    public function doreg2(Request $request){
      $data=$request->all();
      
      $user=User::where('username',$data['username'])->first();
      
      if(!empty($user)){
            echo "<script>alert('The username already exists');</script>";
        echo "<script>location.href='{$this->url}/userreg'</script>";
      }
   
        $data['type']=2;
        $res=User::create($data);
         echo "<script>alert('Success');</script>";
         
            echo "<script>location.href='{$this->url}/userlogin'</script>";
          
        

   }
   public function logout(){
     session(['user'=>'']);
 echo "<script>alert('Success');</script>";
         
            echo "<script>location.href='{$this->url}/login'</script>";

   }


}

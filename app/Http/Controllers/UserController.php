<?php
namespace App\Http\Controllers;
use App\Models\Account;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
class UserController extends Controller
{
	public $url='';


	 public function index(){

	 $data = Account::paginate(10);

   		return view('user.index',['data'=>$data]);
   }


   
  public function new(Request $request){
      $input=$request->all();
      $t=$input['t'];

      $input=$request->except('_token');
      $input=$request->except('t');

      $input['status']=1;
         $arr = $_FILES["file"];
         if(($arr["type"]=="image/jpeg" || $arr["type"]=="image/png" ) && $arr["size"]<10241000 )
{

$arr["tmp_name"];

$filename =  './images/'.date('YmdHis').$arr["name"];
$fn =  date('YmdHis').$arr["name"];

  if(file_exists($filename))
  {
    echo "false";
  }
  else
  {
  move_uploaded_file($arr["tmp_name"],$filename);
  }
}
else
{
  echo "error";
}
         $input['times']=$fn;
         unset($input['_token']);
   
          $res=Account::create($input);
         
      
      
     
       if($res){
        return redirect('user/index');
       }else{
         return back();
       }
   }
    public function userindex(){
    $u=session('user'); 
   

      return view('user.userindex',['u'=>$u]);
   }
   public function index5(){

    $data=User::where('type','2')->paginate(100);

      return view('user.index5',['data'=>$data]);
   }
    

   

   public function add(){
      return view('user.add',['t'=>$_GET['t']]);
   } 
     public function fadd(){
      return view('user.fadd',['t'=>$_GET['t']]);
   } 
       public function kadd(){
      return view('user.kadd',['t'=>$_GET['t']]);
   } 

      
    public function uuedit($id){
      $data=User::find($id);
      return view('user.uuedit',['data'=>$data]);
   }
     
       public function sf(){
      $data=DB::table("fee")->find(1);
    
      return view('user.sf',['data'=>$data]);
   }
    public function checkin(){
         return view('user.checkin');
   }
    public function edit($id){
    	$data=Account::find($id);
   		return view('user.edit',['data'=>$data]);
   }
   
 public function upd(Request $request){
      $input=$request->all();
      
      $u=[
        'title'=>$input['title'],
        'content'=>$input['content'],
      ];
      $res=DB::table("Account")->where('id',$input['id'])->update($u);
       if($res){
        return redirect('user/index');
       }else{
         return back();
       }
   }

       public function dedit($id){
      $data=Good::find($id);
           $datas=News::paginate(100);
              $c=Customers::paginate(100);
      return view('user.dedit',['data'=>$data,'d'=>$datas,'c'=>$c]);
   }
public function doadu(Request $request){
      $data=$request->all();
      
      $user=User::where('username',$data['username'])->first();
      
      if(!empty($user)){
            echo "<script>alert('User name already exists');</script>";
        echo "<script>location.href='{$this->url}/user/index5'</script>";
      }
        $data['type']=2;
        $data['email']=$data['email'];
 
        $res=User::create($data);
         echo "<script>alert('success');</script>";
         echo "<script>location.href='{$this->url}/user/index5'</script>";
          
        

   }

   
   public function editu(){
      return view('user.editu');
   }
  public function upp(Request $request){
      $input=$request->all();
       $uu=session('user');
     
       if($input['ym']!=$uu->password){
         echo "<script>alert('The original password is incorrect');</script>";
          echo "<script>location.href='{$this->url}/user/editu'</script>";die;
       }
      /*$input=$request->except('_token');*/
      $u=[
        'password'=>$input['xm'],
        
      ];
      $res=DB::table("user")->where('id',$uu->id)->update($u);
       if($res){
        echo "<script>alert('Success');</script>";
          echo "<script>location.href='{$this->url}/user/editu'</script>";die;
       }else{
         return back();
       }
   } 

    public function delete($id){
   		
   	  $res=DB::table("Account")->where('id',$id)->delete();
   	   if($res){
   	   	return redirect('user/index');
   	   }else{
   	   	 return back();
   	   }
   }
       
         public function ddelete($id){
      
      $res=DB::table("goods")->where('id',$id)->delete();
       if($res){
        return redirect('user/index3');
       }else{
         return back();
       }
   }

  public function udelete($id){
      
      $res=DB::table("users")->where('id',$id)->delete();
       if($res){
        return redirect('user/index5');
       }else{
         return back();
       }
   }
  
    public function deleteall(Request $request){
    	$input=$request->except('_token');
   		foreach ($input['id'] as  $v) {
   		 $res=DB::table("stclass")->where('id',$v)->delete();
   		}
   	 
   	   if($res){
   	   	return redirect('user/index');
   	   }else{
   	   	 return back();
   	   }
   }


    

}

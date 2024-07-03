<?php

namespace App\Http\Controllers;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class IndexController extends Controller
{

    public function index(){
    
  
    $data = Account::paginate(20);

   		return view('index.index',['data'=>$data]);
   
   	
   }
  
public function detail($id){  
    $data=Account::find($id);
     
      return view('index.detail',['data'=>$data]);
   
   }
  
  
}

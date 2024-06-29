<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   public function __construct()
   {
      $userInfo = User::where('id_user', session('id_user'))->first();
      if(!$userInfo){
         $this->logout();
      }
   }

   public function berandauser()
   {      
      $data = [
         'title' => 'Beranda User',         
      ];
      return view('user.beranda.index', $data);
   }


   public function logout()
   {
      Session::flush();
      Session::regenerate();      
      return redirect('/');
   }
}
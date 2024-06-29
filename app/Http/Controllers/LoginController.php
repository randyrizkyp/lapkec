<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
   function auth(Request $request)
   {
      $request->validate([
         'email'    => 'required|email',
         'password' => 'required'
      ]);

      $user = User::where([
         'email' => strip_tags($request->email),      
      ])->first();         
      
      if($user){
         if (Hash::check($request->password, $user->password)) {            

            if($user->role == 0){
               $sessdata['loggedAdmin'] = 'yes';
               $sessdata['id_user'] = $user->id_user;
               $sessdata['nama'] = $user->nama;
               $sessdata['email'] = $user->email;
               $sessdata['role'] = $user->role;
               $request->session()->put($sessdata);
               return redirect('/admin');
            }elseif($user->role == 1){
               $sessdata['loggedPsikolog'] = 'yes';
               $sessdata['id_user'] = $user->id_user;
               $sessdata['nama'] = $user->nama;
               $sessdata['email'] = $user->email;
               $sessdata['role'] = $user->role;
               $request->session()->put($sessdata);
               return redirect('/psikolog');
            }elseif($user->role == 2){
               $sessdata['loggedUser'] = 'yes';
               $sessdata['id_user'] = $user->id_user;
               $sessdata['nama'] = $user->nama;
               $sessdata['email'] = $user->email;
               $sessdata['role'] = $user->role;
               $request->session()->put($sessdata);
               return redirect('/user');
            }                        

         } else {
            return back()->with('fail', 'Username atau Password salah!');
         }
      }else {      
         return back()->with('fail', 'Username atau Password salah!');
      }
   }

   public function logout()
   {
      Session::flush();
      Session::regenerate();      
      return redirect('/');
   }

}
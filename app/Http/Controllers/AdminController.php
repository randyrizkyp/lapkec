<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
   public function __construct()
   {
      $userInfo = User::where('id_user', session('id_user'))->first();
      if(!$userInfo){
         $this->logout();
      }
   }

   public function berandaadmin()
   {                    
      $data = [   
         'title' => 'Beranda Admin',
      ];
      return view('admin.beranda.index', $data);
   }

   public function psikolog()
   {                    
      $psikolog = User::where('role', 1)->get();

      $data = [   
         'title' => 'Daftar Psikolog',
         'psikolog' => $psikolog
      ];

      return view('admin.psikolog.index', $data);
   }

   function insertpsikolog(Request $request)
   {
      $this->validate($request, [
         'nama'   => 'required',
         'jabatan'     => 'required',
         'umur'     => 'required',
         'telepon'     => 'required',
         'email'     => 'required',
         'password'     => 'required'
      ]);            

      $data = [        
         'nama'     => $request->nama,
         'jabatan'       => $request->jabatan,
         'umur'       => $request->umur,
         'telepon'       => $request->telepon,
         'email'       => $request->email,
         'password'       => Hash::make($request->password),
         'role'      => 1
      ];

      User::create($data);
      return back()->with('success', 'Data User Psikolog Berhasil Dibuat');
   }

   function updatepsikolog(Request $request)
   {
      $this->validate($request, [
         'nama'   => 'required',
         'jabatan'     => 'required',
         'umur'     => 'required',
         'telepon'     => 'required',         
         'password'     => 'nullable'
      ]);  

      $id_user = $request->id_user;

      if($request->password){         

         $data = [        
            'nama'     => $request->nama,
            'jabatan'       => $request->jabatan,
            'umur'       => $request->umur,
            'telepon'       => $request->telepon,            
            'password'       => Hash::make($request->password),            
            'role'      => 1
         ];

         User::where('id_user', $id_user)->update($data);
         return back()->with('update', 'Data User Psikolog Berhasil Diupdate');

      }else{

         $data = [        
            'nama'     => $request->nama,
            'jabatan'       => $request->jabatan,
            'umur'       => $request->umur,
            'telepon'       => $request->telepon,            
            'role'      => 1
         ];
         
         User::where('id_user', $id_user)->update($data);
         return back()->with('update', 'Data User Psikolog Berhasil Diupdate');
      }      
   }

   public function deleteuser($id_user)
   {
      $user = User::where('id_user', $id_user);
      $user->delete();        
      return back()->with('delete', 'Data User Psikolog Berhasil Dihapus');
   }

   public function logout()
   {
      Session::flush();
      Session::regenerate();      
      return redirect('/');
   }
}
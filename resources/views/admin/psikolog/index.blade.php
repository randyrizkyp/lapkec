@extends('admin.templates.main')
@section('content')

<!--app-content open-->
<div class="main-content app-content mt-5">
   <div class="side-app">      
      <div class="main-container container-fluid">                                 
         <div class="row">                                 
            <div class="card">
               <div class="card-header">
                  <button type="button" class="btn btn-primary btn-sm float-end" data-bs-toggle="modal" data-bs-target="#addPsikolog"><i class="fa fa-plus-circle"></i> Tambah Psikolog</button>                     
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table class="table table-bordered border-bottom" id="basic-datatable">
                        <thead>
                           <tr>
                              <th style="vertical-align: middle" width="10px">No</th>
                              <th style="vertical-align: middle" width="150px">Nama</th>
                              <th style="vertical-align: middle" width="150px">Jabatan</th>
                              <th style="vertical-align: middle" width="100px">Umur</th>
                              <th style="vertical-align: middle" width="130px">Telepon</th>
                              <th style="vertical-align: middle" width="100px">Email</th>
                              <th style="vertical-align: middle" width="30px">Opsi</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($psikolog as $dt)
                           <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $dt->nama }}</td>
                              <td>{{ $dt->jabatan }}</td>
                              <td>{{ $dt->umur }}</td>
                              <td>{{ $dt->telepon }}</td>
                              <td>{{ $dt->email }}</td>
                              <td class="text-center"><button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#update{{ $dt->id_user }}"><i class="fa fa-edit"></i></button> <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete{{ $dt->id_user }}"><i class="fa fa-trash"></i></button></td>
                           </tr>
                           @endforeach
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>                     
         </div>                     
      </div>      
   </div>
</div>
<!--app-content closed-->

<div class="modal fade" id="addPsikolog">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Tambah Psikolog</h5>
            <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">×</span>
            </button>
         </div>
         <form class="form-horizontal form-bordered" action="/insertpsikolog" method="POST" enctype="multipart/form-data">
         @csrf
         <div class="modal-body">
            <div class="row">
               <div class="col-sm-6">
                  <div class="form-group">
                     <label>Nama Lengkap</label>
                     <input type="text" name="nama" class="form-control" required oninvalid="this.setCustomValidity('Mohon isi Nama Lengkap')" oninput="setCustomValidity('')">
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="form-group">
                     <label>Jabatan</label>
                     <input type="text" name="jabatan" class="form-control" required oninvalid="this.setCustomValidity('Mohon isi Jabatan')" oninput="setCustomValidity('')">
                  </div>           
               </div>
            </div>

            <div class="row">
               <div class="col-sm-6">
                  <div class="form-group">
                  <label>Umur</label>
                  <input type="text" name="umur" class="form-control" required oninvalid="this.setCustomValidity('Mohon isi Umur')" oninput="setCustomValidity('')">
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="form-group">
                  <label>Telepon</label>
                  <input type="number" name="telepon" class="form-control" required oninvalid="this.setCustomValidity('Mohon isi Telepon')" oninput="setCustomValidity('')">
                  </div>
               </div>
            </div>
            
            <div class="row">
               <div class="col-sm-6">
                  <div class="form-group">
                     <label>Email</label>
                     <input type="email" name="email" class="form-control" required oninvalid="this.setCustomValidity('Mohon isi Email')" oninput="setCustomValidity('')">
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="form-group">
                     <label>Password</label>
                     <input type="text" name="password" class="form-control" required oninvalid="this.setCustomValidity('Mohon isi Password')" oninput="setCustomValidity('')">
                  </div>
               </div>
            </div>                  
         </div>
         <div class="modal-footer">               
            <button class="btn btn-default" data-bs-dismiss="modal" type="button">Batal</button>
            <button type="submit" class="btn btn-primary" type="button">Simpan</button>
         </div>
         </form>
      </div>
   </div>
</div>

@foreach($psikolog as $up)
<div class="modal fade" id="update{{ $up->id_user }}" tabindex="-1" role="dialog">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Ubah Data Psikolog</h5>
            <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">×</span>
            </button>
         </div>
         <form class="form-horizontal form-bordered" action="/updatepsikolog" method="POST" enctype="multipart/form-data">
         @csrf
         <input type="hidden" class="form-control" name="id_user" value="{{ $up->id_user }}" readonly>
         <div class="modal-body">
            
            <div class="row">
               <div class="col-sm-6">
                  <div class="form-group">
                     <label>Nama Lengkap</label>
                     <input type="text" name="nama" value="{{ $up->nama }}" class="form-control" required oninvalid="this.setCustomValidity('Mohon isi Nama Lengkap')" oninput="setCustomValidity('')">
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="form-group">
                     <label>Jabatan</label>
                     <input type="text" name="jabatan" value="{{ $up->jabatan }}" class="form-control" required oninvalid="this.setCustomValidity('Mohon isi Jabatan')" oninput="setCustomValidity('')">
                  </div>           
               </div>
            </div>

            <div class="row">
               <div class="col-sm-6">
                  <div class="form-group">
                  <label>Umur</label>
                  <input type="text" name="umur" value="{{ $up->umur }}" class="form-control" required oninvalid="this.setCustomValidity('Mohon isi Umur')" oninput="setCustomValidity('')">
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="form-group">
                  <label>Telepon</label>
                  <input type="number" name="telepon" value="{{ $up->telepon }}" class="form-control" required oninvalid="this.setCustomValidity('Mohon isi Telepon')" oninput="setCustomValidity('')">
                  </div>
               </div>
            </div>
            
            <div class="row">
               <div class="col-sm-6">
                  <div class="form-group">
                     <label>Email</label>
                     <input type="email" value="{{ $up->email }}" class="form-control" readonly>
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="form-group">
                     <label>Password</label>
                     <input type="text" name="password" class="form-control">
                     <span class="text-danger" style="font-size: 11px">*Silahkan isi Password jika ingin mengubah Password</span>
                  </div>
               </div>
            </div>   

         </div>
         <div class="modal-footer">
            <button class="btn btn-default" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Ubah</button>
         </div>
         </form>
      </div>
   </div>
</div>

<div class="modal fade" id="delete{{ $up->id_user }}" tabindex="-1" role="dialog">
   <div class="modal-dialog" role="document">
      <div class="modal-content">      
         <div class="modal-body text-center">
            <i class="icon icon-close fs-50 text-danger lh-1 my-4 d-inline-block"></i>            
            <h4 class="text-danger mb-20">Anda Yakin Menghapus Data Psikolog ini?</h4>
            <button class="btn btn-default" data-bs-dismiss="modal">Batal</button>&emsp; <a type="submit" class="btn btn-danger pd-x-25" href="/deleteuser/{{ $up->id_user }}">Hapus</a>
         </div>         
      </div>
   </div>
</div>
@endforeach



@endsection
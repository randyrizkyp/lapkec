@extends('psikolog.templates.main')
@section('content')

<!--app-content open-->
<div class="main-content app-content mt-5">
   <div class="side-app">
      <!-- CONTAINER -->
      <div class="main-container container-fluid">                        
         <!-- Row -->
         <div class="row">
            
            <div class="col-sm-6 col-lg-6 col-md-12 col-xl-3">
               <div class="card">
                  <div class="row">
                     <div class="col-4">
                        <div class="card-img-absolute circle-icon bg-primary text-center align-self-center box-primary-shadow bradius">
                           <img src="/storage/assets/images/svgs/circle.svg" alt="img" class="card-img-absolute">
                           <i class="fa fa-users fs-30 text-white mt-4"></i>
                        </div>
                     </div>
                     <div class="col-8">
                        <div class="card-body p-4">
                           <h2 class="mb-2 fw-normal mt-2">30</h2>
                           <h5 class="fw-normal mb-0">Daftar Psikolog</h5>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-sm-6 col-lg-6 col-md-12 col-xl-3">
               <div class="card">
                  <div class="row">
                     <div class="col-4">
                        <div class="card-img-absolute circle-icon bg-secondary align-items-center text-center box-secondary-shadow bradius">
                           <img src="/storage/assets/images/svgs/circle.svg" alt="img" class="card-img-absolute">
                           <i class="fa fa-envelope fs-30 text-white mt-4"></i>
                        </div>
                     </div>
                     <div class="col-8">
                        <div class="card-body p-4">
                           <h2 class="mb-2 fw-normal mt-2">10</h2>
                           <h5 class="fw-normal mb-0" style="font-size: 13px;">Pesan</h5>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-sm-6 col-lg-6 col-md-12 col-xl-3">
               <div class="card">
                  <div class="row">
                     <div class="col-4">
                        <div class="card-img-absolute  circle-icon bg-success align-items-center text-center box-success-shadow bradius">
                           <img src="/storage/assets/images/svgs/circle.svg" alt="img" class="card-img-absolute">
                           <i class="fa fa-calendar-check-o fs-30 text-white mt-4"></i>
                        </div>
                     </div>
                     <div class="col-8">
                        <div class="card-body p-4">
                           <h2 class="mb-2 fw-normal mt-2">10</h2>
                           <h5 class="fw-normal mb-0">Jadwal Konsul</h5>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-sm-6 col-lg-6 col-md-12 col-xl-3">
               <div class="card">
                  <div class="row">
                     <div class="col-4">
                        <div class="card-img-absolute circle-icon bg-danger align-items-center text-center box-danger-shadow bradius">
                           <img src="/storage/assets/images/svgs/circle.svg" alt="img" class="card-img-absolute">
                           <i class="fa fa-list-alt fs-30 text-white mt-4"></i>
                        </div>
                     </div>
                     <div class="col-8">
                        <div class="card-body p-4">
                           <h2 class="mb-2 fw-normal mt-2">10</h2>
                           <h5 class="fw-normal mb-0" style="font-size: 13px;">Informasi</h5>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-sm-6 col-lg-6 col-md-12 col-xl-3">
               <div class="card">
                  <div class="row">
                     <div class="col-4">
                        <div class="card-img-absolute circle-icon bg-info align-items-center text-center box-danger-shadow bradius">
                           <img src="/storage/assets/images/svgs/circle.svg" alt="img" class="card-img-absolute">
                           <i class="fa fa-file-text fs-30 text-white mt-4"></i>
                        </div>
                     </div>
                     <div class="col-8">
                        <div class="card-body p-4">
                           <h2 class="mb-2 fw-normal mt-2">10</h2>
                           <h5 class="fw-normal mb-0" style="font-size: 13px;">Dokumen Kesehatan</h5>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-sm-6 col-lg-6 col-md-12 col-xl-3">
               <div class="card">
                  <div class="row">
                     <div class="col-4">
                        <div class="card-img-absolute circle-icon bg-warning align-items-center text-center box-danger-shadow bradius">
                           <img src="/storage/assets/images/svgs/circle.svg" alt="img" class="card-img-absolute">
                           <i class="fa fa-search fs-30 text-white mt-4"></i>
                        </div>
                     </div>
                     <div class="col-8">
                        <div class="card-body p-4">
                           <h2 class="mb-2 fw-normal mt-2">10</h2>
                           <h5 class="fw-normal mb-0" style="font-size: 13px;">Pemantauan</h5>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

         </div>
                     
      </div>
      <!-- CONTAINER CLOSED -->

   </div>
</div>
<!--app-content closed-->


@endsection
<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
<meta name="author" content="Spruko Technologies Private Limited">
<meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">
<link rel="shortcut icon" type="image/x-icon" href="/storage/assets/images/brand/favicon.ico">
<title>Emobalance</title>
<link id="style" href="/storage/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="/storage/assets/css/style.css" rel="stylesheet">
<link href="/storage/assets/css/plugins.css" rel="stylesheet">
<link href="/storage/assets/css/icons.css" rel="stylesheet">
<link href="/storage/assets/switcher/css/switcher.css" rel="stylesheet">
<link href="/storage/assets/switcher/demo.css" rel="stylesheet">

</head>

<body class="app sidebar-mini ltr login-img">

   <!-- BACKGROUND-IMAGE -->
   <div class="">

      <!-- GLOABAL LOADER -->
      <div id="global-loader">
         <img src="../assets/images/loader.svg" class="loader-img" alt="Loader">
      </div>
      <!-- /GLOABAL LOADER -->

      <!-- PAGE -->
      <div class="page">
         <div class="">
               <!-- Theme-Layout -->
               <!-- CONTAINER OPEN -->
               <div class="col col-login mx-auto mt-7">
                  <div class="text-center">
                     
                  </div>
               </div>

               <div class="container-login100">
                  <div class="wrap-login100 p-6">                        
                     <span class="login100-form-title pb-2">
                        <a href="/"><img src="/storage/assets/images/emobalance.png" style="width: 150px" class="header-brand-img" alt=""></a>
                     </span>
                     <div class="panel panel-primary text-center">                                            
                        <span style="font-size: 12px;">Silahkan masukkan Username dan Password Anda</span>
                        <form class="form-horizontal form-label-left" action="/signin" method="POST">
                        @csrf                        
                        <div class="panel-body p-0 pt-5">                                                                                                    
                           <div class="wrap-input100 validate-input input-group">                                    
                              <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                 <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                              </a>
                              <input class="input100 border-start-0 form-control ms-0" type="email" placeholder="Email" name="email" required oninvalid="this.setCustomValidity('Mohon isi Email Anda')" oninput="setCustomValidity('')">
                           </div>
                           <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                              <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                 <i class="zmdi zmdi-lock text-muted" aria-hidden="true"></i>
                              </a>
                              <input class="input100 border-start-0 form-control ms-0" type="password" placeholder="Password" name="password" required oninvalid="this.setCustomValidity('Mohon isi Password Anda')" oninput="setCustomValidity('')">
                           </div>                                                                                    
                           <div class="container-login100-form-btn">
                              <button type="submit" class="btn btn-primary mt-4 mb-0 btn-block">LOGIN</button>
                           </div>
                        </div>
                        </form>                        

                        <div class="container-login100-form-btn">
                           <span style="font-size: 12px;">Belum Punya Akun ? Silahkan Klik Sign Up</span>
                           <a href="/signup" class="btn btn-warning mt-4 mb-0 btn-block">SIGN UP</a>
                        </div>

                     </div>                     
                  </div>
               </div>
               <!-- CONTAINER CLOSED -->
         </div>
      </div>
      <!-- End PAGE -->

   </div>
   <!-- BACKGROUND-IMAGE CLOSED -->

<script src="/storage/assets/js/jquery.min.js"></script>
<script src="/storage/assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="/storage/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="/storage/assets/js/show-password.min.js"></script>
<script src="/storage/assets/js/generate-otp.js"></script>
<script src="/storage/assets/plugins/p-scroll/perfect-scrollbar.js"></script>
<script src="/storage/assets/js/themeColors.js"></script>
<script src="/storage/assets/js/custom.js"></script>
<script src="/storage/assets/js/custom-swicher.js"></script>
<script src="/storage/assets/switcher/js/switcher.js"></script>

</body>
</html>
<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="theme-color" content="#1da1f2">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BBS</title>
    <link rel="icon" href="https://www.17sucai.com/2020/8/6bd528687/images/icons/favicon.png">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('')); ?>static/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('')); ?>static/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('')); ?>static/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('')); ?>static/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('')); ?>static/css/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('')); ?>static/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('')); ?>static/css/util.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('')); ?>static/css/stylesheet.css">
  </head>
  <body>
    <div class="animsition-preloader">
      <div>
        <div class="utf-spinner-one"></div>
      </div>
    </div>
    <header>
      <div class="utf-container-menu-block">
        <div class="topbar">
          <div class="utf-content-topbar container h-100">
            <div class="utf-left-topbar">
              <a href="<?php echo e(url('login')); ?>" class="utf-left-topbar-item">Admin</a>
             
            </div>
           
          </div>
        </div>
        <div class="utf-wrap-header-mobile">
          <div class="logo-mobile">
            <a href="">
              <img src="<?php echo e(asset('')); ?>static/picture/logo-01.png" alt="Logo">
            </a>
          </div>
          <div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </div>
        </div>
             <div class="menu-mobile">
          <ul class="main-menu-m">
            <li>
              <a href="">Home</a>
              
              
            </li>

            <li>
              <a href="category-1.html">Home</a>
            </li>
            
              <span class="arrow-main-menu-m">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
              </span>
            </li>
          </ul>
        </div>
        <div class="wrap-logo container">
          <div class="logo">
            <a href="">
              <img src="static/picture/logo-01.png" alt="LOGO" style="width:150px"> 
            </a>
          </div>
          <div class="utf-ad-banner-header">
            <a href="#">
              <img src="static/picture/banner-01.jpg" alt="IMG">
            </a>
          </div>
        </div>
        <div class="utf-wrap-main-nav">
          <div class="main-nav">
            <nav class="utf-menu-desktop">
              <a class="logo-stick" href="">
                <img src="static/picture/logo-01.png" alt="LOGO">
              </a>
              <ul class="main-menu">
                 <li class="main-menu-active">
                  <a href="<?php echo e(url('')); ?>">Home</a>
                 
                </li>
                
            <li class="main-menu-active">
                  <a href="<?php echo e(url('userlogin')); ?>">Login</a>
                 
                </li>
                 <li class="main-menu-active">
                  <a href="<?php echo e(url('userreg')); ?>">Register</a>
                 
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <div class="container">
      <div class="flex-wr-sb-c trending-nows-aera">
        <div class="f2-s-1 p-r-30 trending-news size-w-0 m-tb-6 flex-wr-s-c">
          <span class="cl2 p-r-8 tranding-title">BBS:</span>
          <span class="dis-inline-block cl6 slide100-txt pos-relative size-w-0" data-in="fadeInUp" data-out="fadeOutDown">
            <span class="tranding-item-list dis-inline-block slide100-txt-item animated visible-false">Welcome:</span>
            <span class="tranding-item-list dis-inline-block slide100-txt-item animated visible-false">Welcome:</span>
            <span class="tranding-item-list dis-inline-block slide100-txt-item animated visible-false">Welcome:</span>
          </span>
        </div>
        <div class="pos-relative news-search-aera size-a-2 bo-1-rad-4 of-hidden bocl11">
        
        </div>
      </div>
    </div>
    <section class="bg0 m-t-20">
      <div class="container">
        
      </div>
    </section>
    <section class="bg0 p-t-25 p-b-0">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-12 p-b-30"><div class="p-r-0-sr991"><div class="p-b-30 bad-bor1 m-b-40">
          <h3 class="f1-l-3 cl2 p-b-16 p-t-15 respon2"><?php echo e($data->title); ?></h3>
          <div class="flex-wr-s-s p-b-30"><span class="f1-s-3 cl8 m-r-15"><a href="#" class="f1-s-4 cl8 hov-cl10 trans-03"><?php echo e($data->user->name); ?> </a>
            <span class="m-rl-3">-</span><span><?php echo e($data->created); ?> </span></span><span class="f1-s-3 cl8 m-r-15"> </span>
           
            </div>

              <p class="f1-s-11 cl6 p-b-25"></p>

              <blockquote><?php echo e($data->content); ?></blockquote>




         </section>
    <footer>
   
      <div class="bg11">
        <div class="container size-h-4 flex-c-c p-tb-15">
          <span class="f1-s-1 cl0 txt-center">.</span>
        </div>
      </div>
    </footer>
    <div class="utf-back-to-top" id="myBtn">
      <span class="symbol-utf-back-to-top">
        <span class="fas fa-angle-up"></span>
      </span>
    </div>
    <div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document" data-dismiss="modal">
        <div class="close-mo-video-01 trans-0-4" data-dismiss="modal">&times;</div>
        <div class="wrap-video-mo-01">
          <div class="video-mo-01"></div>
        </div>
      </div>
    </div>
    <script src="<?php echo e(asset('')); ?>static/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo e(asset('')); ?>static/js/animsition.min.js"></script>
    <script src="<?php echo e(asset('')); ?>static/js/popper.js"></script>
    <script src="<?php echo e(asset('')); ?>static/js/bootstrap.min.js"></script>
    <script src="<?php echo e(asset('')); ?>static/js/custom_jquery.js"></script>
    <a  style="display:none;"> </a>
  </body>
</html><?php /**PATH D:\wamp\www\77\la8\blog\resources\views/index/detail.blade.php ENDPATH**/ ?>
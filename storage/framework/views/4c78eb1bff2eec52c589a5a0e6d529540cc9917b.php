<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="theme-color" content="#1da1f2">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BBS</title>

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('')); ?>/static/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('')); ?>/static/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('')); ?>/static/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('')); ?>/static/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('')); ?>/tatic/css/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('')); ?>/static/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('')); ?>/static/css/util.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('')); ?>/static/css/stylesheet.css">
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
              <img src="static/picture/logo-01.png" alt="Logo">
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
  
    <br>
    <div class="container">
  <div class="row">
    
    <div class="col-sm-12">
      <h1 style="font-size:25px;margin-bottom:10px">List</h1>
    <div class="container mt-5">

    <ul class="list-group mt-3">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <li class="list-group-item">
            <a href="<?php echo e(url('/detail/'.$post->id)); ?>"><?php echo e($post->title); ?></a>
            <div class="text-muted mt-2">Author: <?php echo e($post->user->name); ?></div>
            <div class="text-muted">Time: <?php echo e($post->created); ?></div>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
     <?php echo e($posts->links()); ?>

</div>
    </div>
  </div>
</div>
    <section class="bg0 p-t-70">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10 col-lg-8">
            <div class="p-b-10">
              <div class="tab01 p-b-20">
            <div class="container mt-5">
    <h1>New</h1>
    <form action="<?php echo e(url('/posts')); ?>" method="post" class="mt-3">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="title" class="form-label">Tile</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content" rows="16" cols="30"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">提交</button>
    </form>
                
                 
                </div>
              </div>
             
            </div>

          </div>

          
              
            </div>
          </div>
        </div>
      </div>
    </section>
   
    <footer>
   
      <div class="bg11">
        <div class="container size-h-4 flex-c-c p-tb-15">
          <span class="f1-s-1 cl0 txt-center"><a href="https://www.17sucai.com"></a>.</span>
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
    <script src="static/js/jquery-3.2.1.min.js"></script>
    <script src="static/js/animsition.min.js"></script>
    <script src="static/js/popper.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
    <script src="static/js/custom_jquery.js"></script>
   
  </body>
</html><?php /**PATH D:\wamp\www\77\la8\blog\resources\views/index/index.blade.php ENDPATH**/ ?>
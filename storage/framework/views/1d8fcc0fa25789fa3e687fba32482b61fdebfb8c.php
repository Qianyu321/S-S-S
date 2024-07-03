
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"> 
  <title>Mouse</title>
  <link rel="stylesheet" href="https://cdn.staticfile.net/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
  <script src="https://cdn.staticfile.net/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdn.staticfile.net/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
  <style>
  body{background:white !important}
    .fakeimg {
        height: 200px;
         background: #aaa;
    }
    .navbar{margin-bottom: 0px;}
  .bt3{border:1px solid rgb(200,200,200);padding-top: 5px !important;padding-bottom: 5px !important;margin-left: 10px;margin-top: 10px;border-radius: 30px}
  .bt1{border:1px solid rgb(200,200,200);padding:8px 20px;border-radius: 40px;color: black;font-weight: 600}
  .bt1{border:1px solid rgb(200,200,200);padding:8px 20px;border-radius: 40px;color: black;font-weight: 600}
  .bt2:hover{border:1px solid rgb(200,200,200);padding:8px 20px;border-radius: 40px;color: black;font-weight: 600}
  h3{font-weight: 600}
  .cs{border:1px solid rgb(200,200,200);padding:30px 30px;border-radius: 20px;margin-left: 30px;width: 30%}
  .cs:hover{border:1px solid rgb(100,100,100);}
  .smt{text-align:left;font-weight:600;font-size:20px;}
  .cs p{text-align: left}
  .col-sm-12 p{text-align: left}
  .cc ul{ list-style: none }
    .cc ul li {margin-top: 20px;text-align: left;font-size: 16px}
    .search_input input[type='text']{
        display: inline-block;
        width: 250px;
        border-radius: 15px;
        height: 30px;
        text-indent: 30px;
        border: 1px solid ;
    }
    .search_input input[type='text']:focus{
        border: 0px;
        border-color: white;
    }
    .search_input {
        margin-top: 10px;
    }
    .search_input i{
        position: relative;
        left: 30px;
        top: 1px;
         color: #B2B2B2;
    }
  </style>
</head>
<body style="background:white !important">


<nav class="navbar navbar-inverse" style="background:white;border:1px solid rgb(200,200,200);border-top:1px solid white;padding:10px 40px">

  <div class="container-fluid" >
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#" style="color:rgb(32,190,255);font-size:30px">Mouse</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" >
      <ul class="nav navbar-nav" >
        
         <li><a href="index.php">Home </a></li>
      
       
        <li>

                               
<div class="search_input">


</li>
       <li><a href="/login" class="bt3" >Sign In</a></li> 
       <li><a href="/reg" class="bt3" style="background:black;color:white">Register</a></li> 
      </ul>
    </div>
  </div>
</nav>
<center> <h2 style="font-size:50px;margin-top:130px">Mouse</h2></center>
<div class="container">
  <div class="row">
 
 
    <div class="row">
     <div class="col-sm-12" style>
     <img src="../images/<?php echo e($data->times); ?>" alt="" style="width:100%;height:550px;border-radius:20px 20px 0px 0px ">  
     <table class="table table-bordered table-striped" style="">
  
  <thead>
    <tr>
     
      <th>Details</th>  
    </tr>
  </thead>
  <tbody>
    <tr>
      <td> Name：<?php echo e($data->title); ?></td> 
    </tr>
   
      <td>Tag：<?php echo e($data->fen); ?></td> 
    </tr>
     
       <td>Content：<?php echo e($data->content); ?></td>
    </tr>
   
  </tbody>
</table> 

</center>


    </div>
 

</div>

<h1>Price:<?php echo e($data->semester); ?></h1>

</div>

</div>


<br>
<div class=" text-center" style="margin-bottom:0;line-height:30px;padding:10px;margin:0;background:rgb(70,70,70);color:white">
  <p style="margin:0;text-align:left">Mouse</p>
</div>
</body>
</html>



    
  


<?php /**PATH D:\phpstudy_pro\WWW\la\blog\resources\views/index/detail.blade.php ENDPATH**/ ?>
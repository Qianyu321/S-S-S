<!doctype html>
<html class="x-admin-sm">
    <head>
        <meta charset="UTF-8">
        <title>Admin</title>
        <meta name="renderer" content="webkit|ie-comp|ie-stand">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
        <link rel="stylesheet" href="{{asset('index/css/xadmin.css')}}">
        <link rel="stylesheet" href="{{asset('index/css/login.css')}}">
        <!-- <link rel="stylesheet" href="./css/theme5.css"> -->
        <script src="{{asset('index/lib/layui/layui.js')}}" charset="utf-8"></script>
        <script type="text/javascript" src="{{asset('index/js/xadmin.js')}}"></script>
        <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
        <!--[if lt IE 9]>
            <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
            <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.js">
       
        </script>
    </head>
    <body class="index">
        <!-- 顶部开始 -->
        <div class="container">
            <div class="logo">
                <a href="./index.html">Admin</a></div>
            <div class="left_open">
                <a><i title="展开左侧栏" class="iconfont">&#xe699;</i></a>
            </div>
            
            <ul class="layui-nav right" lay-filter="">
                <li class="layui-nav-item">
                    <a href="javascript:;">Person</a>
                    <dl class="layui-nav-child">
                        <!-- 二级菜单 -->
                        <dd>
                            <a onclick="xadmin.open('Person','{{url('user/editu')}}')">Edit Password</a></dd>
                          
                        <dd>
                            <a href="{{url('logout')}}">Logout</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item to-index">
                    <a href="{{url('')}}">Index</a></li>
            </ul>
        </div>
     
        <div class="left-nav">
            <div id="side-nav">
                <ul id="nav">
                @guest
                
                   
                     <li>
                        <a href="javascript:;">
                            <i class="iconfont left-nav-li" lay-tips="User">&#xe6b8;</i>
                            <cite>User</cite>
                            <i class="iconfont nav_right">&#xe697;</i></a>
                        <ul class="sub-menu">
                            
                            <li>
                                <a onclick="xadmin.add_tab('User','{{url('user/index5')}}')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>User</cite></a>
                            </li>
                           
                           
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="iconfont left-nav-li" lay-tips="Account">&#xe6b8;</i>
                            <cite>Mouse</cite>
                            <i class="iconfont nav_right">&#xe697;</i></a>
                        <ul class="sub-menu">
                            
                            <li>
                                <a onclick="xadmin.add_tab('Account','{{url('user/index')}}')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>List</cite></a>
                            </li>
                           
                           
                        </ul>
                    </li>
                  @endguest
                 
                </ul>

                    
                </ul>

            </div>
               <li style="position: absolute;bottom: 20px">
                       
                   </li>
        </div>
       
        <div class="page-content">
            <div class="layui-tab tab" lay-filter="xbs_tab" lay-allowclose="false">
                <ul class="layui-tab-title">
                    <li class="home">
                        <i class="layui-icon">&#xe68e;</i>Home</li></ul>
                <div class="layui-unselect layui-form-select layui-form-selected" id="tab_right">
                    <dl>
                    
                </div>
                <div class="layui-tab-content">
                    <div class="layui-tab-item layui-show">
                       
                       
                    </div>
                </div>
                <div id="tab_show"></div>
            </div>
        </div>
        <div class="page-content-bg"></div>
        <style id="theme_style"></style>
        
    </body>

</html>
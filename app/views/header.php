<html>
    <head>
        <title></title>
        <script language="javascript" src="/js/jquery-1.11.2.min.js"></script>
        <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="/css/bootstrap-theme.min.css" type="text/css">
        <script language="javascript" src="/js/bootstrap.min.js"></script>

    </head>
<body>
<div class="container bs-docs-container">
    <div class="bs-example">
        <ul class="nav nav-pills">

            <li ><a href="/index.php/activity/admin/statistics">退出</a></li>

<!--            <li ><a href="/index.php/activity/admin/phonelist">手机彩信统计</a></li>-->
            <li class="dropdown">
                <a id="drop4" role="button" data-toggle="dropdown" href="#">借阅管理 <b class="caret"></b></a>
                <ul id="menu1" class="dropdown-menu" role="menu" aria-labelledby="drop4">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="/borrow/add">添加借阅</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="/borrow/listinfo"> 借阅信息管理</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a id="drop4" role="button" data-toggle="dropdown" href="#">图书管理 <b class="caret"></b></a>
                <ul id="menu1" class="dropdown-menu" role="menu" aria-labelledby="drop4">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="/book/add">添加图书</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="/book/listinfo">图书列表</a></li>
                </ul>
            </li>
            <li class="dropdown" style="display:none;">
                <a id="drop5" role="button" data-toggle="dropdown" href="#">用户管理 <b class="caret"></b></a>
                <ul id="menu2" class="dropdown-menu" role="menu" aria-labelledby="drop5">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="/user/list">开卡用户</a></li>
<!--                    <li role="presentation"><a role="menuitem" tabindex="-1" href="/index.php/activity/admin/imagelist">开卡管理</a></li>-->

                </ul>
            </li>
            <li class="dropdown">
                <a id="drop5" role="button" data-toggle="dropdown" href="#">借书卡管理 <b class="caret"></b></a>
                <ul id="menu2" class="dropdown-menu" role="menu" aria-labelledby="drop5">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="/card/listinfo">借阅卡管理</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="/card/add">添加借阅卡</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a id="drop5" role="button" data-toggle="dropdown" href="#">图书类别管理 <b class="caret"></b></a>
                <ul id="menu2" class="dropdown-menu" role="menu" aria-labelledby="drop5">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="/book/addtype">添加类别</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="/book/typelist">类别列表</a></li>

                </ul>
            </li>
        </ul> <!-- /tabs -->
    </div>

</div>

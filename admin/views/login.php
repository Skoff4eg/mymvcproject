<!DOCTYPE html>
<html lang="en">
<head>
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    <meta charset="utf-8">
    <title>Free HTML5 Bootstrap Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="/admin/template/css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href='/admin/template/css/charisma-app.css' rel='stylesheet'>
    <link href='/admin/template/css/jquery.noty.css' rel='stylesheet'>
    <link href='/admin/template/css/noty_theme_default.css' rel='stylesheet'>
    <link href='/admin/template/css/elfinder.min.css' rel='stylesheet'>
    <link href='/admin/template/css/elfinder.theme.css' rel='stylesheet'>
    <link href='/admin/template/css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='/admin/template/css/uploadify.css' rel='stylesheet'>
    <link href='/admin/template/css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->


    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>
<div class="ch-container">
    <div class="row">
        
    <div class="row">
        <div class="col-md-12 center login-header">
            <h2>Welcome to Charisma</h2>
        </div>
        <!--/span-->
    </div><!--/row-->

    <div class="row">
        <div class="well col-md-5 center login-box">
            <div class="alert alert-info">
                Please login with your Username and Password.
            </div>
            <form class="form-horizontal" action="" method="post">
                <fieldset>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="text" class="form-control" placeholder="Username" name="login">
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <div class="clearfix"></div>



                    <p class="center col-md-5">
                        <button type="submit" name="submit" class="btn btn-primary">Login</button>
                    </p>
                </fieldset>
            </form>
        </div>
        <!--/span-->
    </div><!--/row-->
</div><!--/fluid-row-->

</div><!--/.fluid-container-->

<!-- external javascript -->



<!-- library for cookie management -->
<script src="/admin/template/js/jquery.cookie.js"></script>

<!-- data table plugin -->
<script src='/admin/template/js/jquery.dataTables.min.js'></script>


<!-- notification plugin -->
<script src="/admin/template/js/jquery.noty.js"></script>

<!-- star rating plugin -->
<script src="/admin/template/js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="/admin/template/js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="/admin/template/js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="/admin/template/js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="/admin/template/js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="/admin/template/js/charisma.js"></script>


</body>
</html>
<?php
    if(isset($_POST['submit'])){
        include "models/Database.php";
        include "models/Select.php";
        $params = array();
        $params['login'] = $_POST['login'];
        $params['password'] = $_POST['password'];
        $data = new Select("users");
        $result = $data->getDataWithParametrs($params);
        if(count($result)>0){
            $_SESSION['admin']= $result[0]['login'];
        }
        /*echo "<pre>";
        print_r ($_POST);
        echo "</pre>";*/
    }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>MagRocket Admin</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="USZBOQ0" >

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/magrocket/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/magrocket/stylesheets/theme.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/magrocket/lib/font-awesome/css/font-awesome.css">

    <script src="<?php echo base_url(); ?>assets/magrocket/lib/jquery-1.7.2.min.js" type="text/javascript"></script>

    <!-- Demo page code -->

    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .brand { font-family: georgia, serif; }
        .brand .first {
            color: #ccc;
            font-style: italic;
        }
        .brand .second {
            color: #fff;
            font-weight: bold;
        }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/magrocket/images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/magrocket/images/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/magrocket/images/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/magrocket/images/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/magrocket/images/apple-touch-icon-57-precomposed.png">
  </head>

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
  <body class=""> 
  <!--<![endif]-->
    
    <div class="navbar">
        <div class="navbar-inner">
                <ul class="nav pull-right">
                    
                </ul>
                <a href="/"><img src="<?php echo base_url(); ?>assets/magrocket/images/logo.png" width="168" height="40"></a>
        </div>
    </div>
        
	<div class="row-fluid">
	    <div class="dialog">
	        <div class="block">
	            <p class="block-heading">Sign In</p>
	            <div class="block-body">
	            	 <?php echo $message;?>
	                <form method="post" action="/auth/login" id="form-login">
	                    <label>Username</label>
	                    <input type="text" name="identity" id="identity" value="" class="span12" placeholder="Email" autocomplete="off">
	                    <label>Password</label>
	                    <input type="password" name="password" id="password" value="" class="span12" placeholder="Password" autocomplete="off">
	                    <button type="submit" class="btn btn-primary pull-right">Sign In</button>
	                    <!--<label class="remember-me"><input type="checkbox"> Remember me</label>-->
	                    <div class="clearfix"></div>
	                </form>
	            </div>
	        </div>
	        <p><a href="/auth/forgot_password">Forgot your password?</a></p>
	    </div>
	</div>

    <script src="<?php echo base_url(); ?>assets/magrocket/lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  </body>
</html>

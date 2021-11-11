<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
        <meta content="utf-8" http-equiv="encoding">
 	    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
 	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
 	   	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" >
 	   	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="<?= base_url() ?>assets/core/bootstrap-3.3.2/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url() ?>assets/core/font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url() ?>assets/core/ionicons.min.css" rel="stylesheet" type="text/css">
         <link href="<?= base_url() ?>assets/css/new_css.css" rel="stylesheet" type="text/css">

        <script src="<?= base_url() ?>assets/core/jquery.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/core/jquery-ui.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/core/bootstrap-3.3.2/dist/js/bootstrap.min.js" type="text/javascript"></script>
		<script type="text/javascript">
            function base_url()	{ return "<?= base_url()?>"; }
            function site_url(uri) { return base_url() + "index.php/" + uri; }
        </script>
	    <?php if(isset($javascript)) echo $javascript; ?>
	<title>Home Page</title>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	<style type="text/css">
		h5.card-title{
			font-size: 250%;
			margin-bottom: 20px;
		}
		.card-body h6{
			margin-top: 10px;
			font-size: 150%;
		}
		a.btn.btn-primary{
			align-items: center;
			margin-top: 15px;
			font-size: 150%;

		}
		a.navbar-brand{
			margin-top: 2px;
			padding-top: 0;
			margin-left: 500px;
			font-size: 30px;
			font-family: Georgia, serif;
		}
		.text-right{
			font-size: 25px;
		}
		a.fa{
			color: #0f0d0d;
			margin-right: 10px;
			margin-top: 10px;
		}
		.btn{
			background-color: #4e73df;
		}
		li.a{
			color: blue;
		}
		label{
			float: left;
			margin-left: 5px;
			margin-top: 3px;
			margin-bottom: 3px;
		}
		.form-control{
			margin-left: 5px;
			/*width: 600px;*/
			float: left;
		}
		div.card.text-center{
			margin-top: 25px;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-light sticky-top flex-md-nowrap p-0" style="background: #4e73df;">
	    <a class="navbar-brand" href="" style="color: white;">
	      <img src="<?= base_url() ?>assets/images/mis-logo-big.png" alt="" style="width: 9%; display: inline" class="d-inline-block align-text-top">
	                Thesis Online Portal
	    </a>
	  	<div class="text-right text-white"><a class="fa fa-sign-out" href="<?php echo base_url().'index.php/thesis_portal/logout'?>" class="nav-item text-white">Logout</a> </div>
        </div>
	</nav>
    <div class="row" style="margin-right: 10px;">
    	<div class="col-sm-2">
    		<!--  <nav class="col-md-2 d-none d-md-block bg-light sidebar"> -->
          		<div class="sidebar-sticky" style="background: white">
            		<ul class="nav flex-column">
              			<li class="nav-item">
                			<a class="nav-link" href="./home"><i class="fa fa-home"></i><span > Home</span></a>
                		</li>
                		<li class="nav-item">
                			<a class="nav-link" href="./evaluation_form"><i class="fab fa-wpforms"></i><span class="ms-2"> Evaluation Form</span></a>
                		</li>
                		<li class="nav-item">
                			<a class="nav-link" href="./honararium_form"><i class="fab fa-wpforms"></i><span class="ms-2"> Honararium Form</span></a>
                		</li>
            </ul>
    
          </div>
        <!-- </nav> -->
    </div>
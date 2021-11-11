<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css" type="text/css" />
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/login.css" type="text/css" />
    <style type="text/css">
        html,
        body {
            height: 100%;
            background-color: #4e73df;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }
        strong{
            font-size: 30px;
            font-style: normal;
        }
        label{
            font-size: 20px;
        }
        .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }
        .form-signin .checkbox {
            font-weight: 400;
        }
        .form-signin .form-control {
            position: relative;
            box-sizing: border-box;
            height: auto;
            padding: 10px;
            font-size: 16px;
        }
        .form-signin .form-control:focus {
            z-index: 2;
        }
        .form-signin input[type="text"] {
            margin: 0 auto;
            margin-bottom: -1px;
        }
        .form-signin input[type="password"] {
            margin-bottom: 10px;
            margin: 0 auto;
        }
        #username, #password, #submit{
            width: 300px;
            margin: 6px auto;
            border-radius: 10rem;
        }
    </style>
</head>
<body>
    <div class="card" style="margin: auto;">
        <div class="card-body">
    <div class="row">
        <div class="col-lg-5">
            <img src="<?= base_url() ?>assets/images/mis-logo-big.png">
            <strong>IIT(ISM) Dhanbad</strong>
        </div>
        <div class="col-lg-7">
            <form class="form-signin" action="<?php echo base_url().'index.php/thesis_portal/login';?>" method="post" name="frm" id="frm">
   
            <h1 class="h4 text-gray-900 mb-4 text-center"><strong>Online Thesis Portal</strong></h1>
            <label for="username" class="sr-only">Username</label>
            <input type="text" id="username" name="username" class="form-control <?php echo (form_error('username') != "") ? 'is-invalid' : '';?>" placeholder="Username" value="<?php echo set_value('username')?>" >
            <p class="invalid-feedback"><?php echo strip_tags(form_error('username'));?></p>

            <label for="password" class="sr-only">Password</label>
            <input type="password"  id="password" name="password" class="form-control <?php echo (form_error('password') != "") ? 'is-invalid' : '';?>" placeholder="Password">
            <p class="invalid-feedback"><?php echo strip_tags(form_error('password'));?></p>

            <input id="submit" class="btn btn-lg btn-primary btn-block" type="submit" value="Login">


        </form>
        </div>
    </div>
    </div>


</div>
</body>
</html>
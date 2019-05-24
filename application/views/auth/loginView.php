<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo site_url() ?> | Login</title>

    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url()?>sc/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>sc/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="<?php echo base_url()?>sc/css/sb-admin.css" rel="stylesheet">

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">
                    <form role="form" action="<?php echo base_url().'index.php/login/auth'?>">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="username" type="username"  >
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <div class="checkbox" >
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                </label>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <input placeholder="Login" type="submit" >
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Core Scripts - Include with every page -->
<script src="<?php echo base_url()?>sc/js/jquery-1.10.2.js"></script>
<script src="<?php echo base_url()?>sc/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>sc/js/plugins/metisMenu/jquery.metisMenu.js"></script>

<!-- SB Admin Scripts - Include with every page -->
<script src="<?php echo base_url()?>sc/js/sb-admin.js"></script>

</body>

</html>

<html>
<head>
    <link href="<?php echo base_url();?>assets/css/login1.css" rel="stylesheet" id="bootstrap-css">
    <script src="<?php echo base_url();?>assets/js/login1.js"></script>
    <script src="<?php echo base_url();?>assets/js/login2.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #17a2b8;
            height: 100vh;
        }
        #login .container #login-row #login-column #login-box {
            margin-top: 120px;
            max-width: 600px;
            height: 320px;
            border: 1px solid #9C9C9C;
            background-color: #EAEAEA;
        }
        #login .container #login-row #login-column #login-box #login-form {
            padding: 20px;
        }
        #login .container #login-row #login-column #login-box #login-form #register-link {
            margin-top: -85px;
        }
        </style>
</head>
<body>
<div id="login">
    <h3 class="text-center text-white pt-5">Log In</h3>
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <?php echo form_open('welcome/login'); ?>
                    <form id="login-form" class="form" action="" method="post">
                        <h3 class="text-center text-info">Patel And Sons Krishi Sewa Kendra<br></h3>
                        <div class="form-group">
                            <label for="username" class="text-info">Username:</label><br>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">Password:</label><br>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                        </div>
                       <?php if($valid==false)
                           echo "Invalid username or password"?>
                    </form>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
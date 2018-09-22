<html>
<head>
    <style>
        body{
            background: url(http://localhost/admin/assets/images/ashu.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            font-family:'HelveticaNeue','Arial', sans-serif;

        }
        a{color:#58bff6;text-decoration: none;}
        a:hover{color:#aaa; }
        .pull-right{float: right;}
        .pull-left{float: left;}
        .clear-fix{clear:both;}
        div.logo{text-align: center; margin: 20px 20px 30px 20px; fill: #566375;}
        .head{padding:40px 0px; 10px 0}
        .logo-active{fill: #44aacc !important;}
        #formWrapper{
            background: rgba(0,0,0,.2);
            width:100%;
            height:100%;
            position: absolute;
            top:0;
            left:0;
            transition:all .3s ease;}
        .darken-bg{background: rgba(0,0,0,.5) !important; transition:all .3s ease;}

        div#form{
            position: absolute;
            width:360px;
            height:320px;
            height:auto;
            background-color: #fff;
            margin:auto;
            border-radius: 5px;
            padding:20px;
            left:50%;
            top:50%;
            margin-left:-180px;
            margin-top:-200px;
        }
        div.form-item{position: relative; display: block; margin-bottom: 40px;}
        input{transition: all .2s ease;}
        input.form-style{
            color:#8a8a8a;
            display: block;
            width: 90%;
            height: 44px;
            padding: 5px 5%;
            border:1px solid #ccc;
            -moz-border-radius: 27px;
            -webkit-border-radius: 27px;
            border-radius: 27px;
            -moz-background-clip: padding;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            background-color: #fff;
            font-family:'HelveticaNeue','Arial', sans-serif;
            font-size: 105%;
            letter-spacing: .8px;
        }
        div.form-item .form-style:focus{outline: none; border:1px solid #58bff6; color:#58bff6; }
        div.form-item p.formLabel {
            position: absolute;
            left:26px;
            top:10px;
            transition:all .4s ease;
            color:#bbb;}
        .formTop{top:-22px !important; left:26px; background-color: #fff; padding:0 5px; font-size: 14px; color:#58bff6 !important;}
        .formStatus{color:#8a8a8a !important;}
        input[type="submit"].login{
            float:right;
            width: 112px;
            height: 37px;
            -moz-border-radius: 19px;
            -webkit-border-radius: 19px;
            border-radius: 19px;
            -moz-background-clip: padding;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            background-color: #55b1df;
            border:1px solid #55b1df;
            border:none;
            color: #fff;
            font-weight: bold;
        }
        input[type="submit"].login:hover{background-color: #fff; border:1px solid #55b1df; color:#55b1df; cursor:pointer;}
        input[type="submit"].login:focus{outline: none;}

    </style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://code.jquery.com/jquery-2.1.0.min.js" ></script>
    <script>
        $(document).ready(function(){
            var formInputs = $('input[type="email"],input[type="password"]');
            formInputs.focus(function() {
                $(this).parent().children('p.formLabel').addClass('formTop');
                $('div#formWrapper').addClass('darken-bg');
                $('div.logo').addClass('logo-active');
            });
            formInputs.focusout(function() {
                if ($.trim($(this).val()).length == 0){
                    $(this).parent().children('p.formLabel').removeClass('formTop');
                }
                $('div#formWrapper').removeClass('darken-bg');
                $('div.logo').removeClass('logo-active');
            });
            $('p.formLabel').click(function(){
                $(this).parent().children('.form-style').focus();
            });
        });
        </script>
</head>
<body>
<div id="formWrapper">

    <div id="form">
        <div class="logo">
            <h1 class="text-center head">Log In</h1>
        </div>
        <?php echo form_open('welcome/login'); ?>
        <form  action="welcome/login" method="post">
        <div class="form-item">
            <input type="text" placeholder="Username" name="username"  class="form-style" autocomplete="off"/>
        </div>
        <div class="form-item">
            <input type="password" placeholder="Password" name="password" id="password" class="form-style" />
            <!-- <div class="pw-view"><i class="fa fa-eye"></i></div> -->
        </div>
        <div class="form-item">
            <p class="pull-left">Powered by Retronix Technology Pvt. Ltd.</p>
            <?php if($valid==false)
                echo "Invalid username or password"?>
            <input type="submit" class="login pull-right" value="Log In">
            <div class="clear-fix"></div>
        </div>
        </form>
        <?php echo form_close(); ?>
    </div>
</div>
</body>
</html>
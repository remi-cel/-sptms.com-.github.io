<?php include_once("header.php");
if (isset($_POST['submit']))
{

}
?>
<html>
<head>
    <title>www.risegroup.com</title>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css"
    <link rel="stylesheet" href="bootstrap4/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap4/vendors/font-awesome/fonts/fontawesome-webfont.ttf">
    <link rel="stylesheet" href="bootstrap4/vendors/font-awesome/fonts/fontawesome-webfont.woff">
    <link rel="stylesheet" href="bootstrap4/vendors/font-awesome/fonts/fontawesome-webfont.svg">
    <link href="bootstrap4/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap4/vendors/font-awesome/css/font-awesome.css">
    <script src="bootstrap4/js/jquery-3.2.1.min.js"></script>
    <!-- Popper -->
<!--    <script src="bootstrap4/js/popper.js"></script>-->
<!--    <script src="bootstrap4/js/mail-script.js"></script>-->
<!---->
<!--    <!-- Bootstrap js -->-->
<!--    <script src="bootstrap4/js/bootstrap.min.js"></script>-->
</head>

<body>
<div class="container col-5 mt-2">
    <div class="card mb-1">
        <div class="card-header">
            <h3 class="text-center text-info">REGISTER PANEL</h3>
        </div>
        <div class="card-body">
            <form action="register_form.php" method="post">
                <div class="form-group">
                    <input type="text" name="username" required class="form-control fa fa-user" id="usr" placeholder="Enter your full-name">
                </div>
                <div class="form-group">
                    <input type="email" name="email" required class="form-control fa fa-user" id="usr" placeholder="Enter your Email">
                </div>
                <div class="form-group">
                    <input type="password" name="pwd" required id="usr" placeholder="Enter Password" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" name="pwd" required id="usr" placeholder="Confirm Password" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" name="pwd" required id="usr" placeholder="Confirm Password" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-sm btn-info btn-outline-info rounded float-right">
                </div>
                <p class="nav-link">Have account<a href="login_form.php"> Login?</a></p>
            </form>
        </div>
    </div>
</div>
</body>
</html>

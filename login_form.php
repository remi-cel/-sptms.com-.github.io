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
    <script src="bootstrap4/js/bootstrap.min.js"></script>
</head>
<body>
<?php include_once("header.php"); ?>
<div class="container col-4 mt-5">
    <div class="card">
        <div class="card-header">
            <h3 class="text-center text-info">LOGIN PANEL</h3>
        </div>
        <div class="card-body">
            <form action="#" method="post">
                <div class="form-group">
                    <input type="text" name="username" required class="form-control small" id="usr" placeholder="Enter User name">
                </div>
                <div class="form-group">
                    <input type="password" name="pwd" required id="usr" placeholder="Enter Password" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-sm btn-info btn-outline-info rounded float-right">
                </div>
                <p class="nav-link">Forgot<a href="#"> Password?</a></p>
            </form>
        </div>
    </div>
</div>
</body>
</html>

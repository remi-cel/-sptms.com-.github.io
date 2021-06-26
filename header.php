<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        *
        {
            font-family: Cambria;
        }
        .dropdown:hover .dropdown-menu{
            display: block;
        }
        .dropdown-me{
            margin-top: 0;
        }




    </style>
</head>
<body>

<?php
$con=mysqli_connect("localhost","root","","risegroup");
if (isset($_POST['submit']))
{
    $orgid=$_POST['orgId'];
    $uname=$_POST['username'];
    $email=$_POST['email'];
    $tel= $_POST['tel'];
    $pass=md5($_POST['pwd']);
    $squl=mysqli_query($con,"insert into user_tbl(memberId,userName,Email,phoneNo,password) VALUES ('$orgid','$uname','$email','$tel','$pass')");
    if ($squl)
    {
        echo "<script>alert('$uname Info Registered Successfully!!');</script>";
        ?>
        <script language="javascript">

            document.location="index.php";
        </script>
        <?php
    }
    else
    {
        echo mysqli_error($con);
    }

}

if (isset($_POST['login']))
{
    $orgid=$_POST['orgId'];
    $pwd=md5($_POST['pwd']);
    $query=mysqli_query($con,"select *from user_tbl WHERE memberId='$orgid' and password='$pwd'");
    if ($row=mysqli_fetch_array($query))
    {
        ?>
        <script language="JavaScript">
            document.location="managementdashboard.php"
        </script>
    <?php
    }
    else
    {
    echo "<script>alert('Incorrect username or password!!')</script>"
    ?>
        <script type="text/javascript">
            document.location="index.php";
        </script>
        <?php
    }
}

?>

<script src="bootstrap4/js/jquery-3.2.1.min.js"></script>
<script src="bootstrap4/js/popper.js"></script>
<script src="bootstrap4/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
<!-- <link rel="stylesheet" href="bootstrap4/css/font-awesome.min.css"> -->
<!-- <link rel="stylesheet" href="bootstrap4/vendors/font-awesome/fonts/fontawesome-webfont.ttf">
<link rel="stylesheet" href="bootstrap4/vendors/font-awesome/fonts/fontawesome-webfont.woff">
<link rel="stylesheet" href="bootstrap4/vendors/font-awesome/fonts/fontawesome-webfont.svg"> -->
<!-- <link href="bootstrap4/vendors/font-awesome/css/font-awesome.min.css"> -->
<!-- <link rel="stylesheet" href="bootstrap4/vendors/font-awesome/css/font-awesome.css"> -->

<div class="sticky-top bg-secondary navbar navbar-expand-sm navbar-default ">
    <div class="navbar-header ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand text-light" href="index.php" style="font-size: 25px"><img src="logos/RGL_logo.PNG" class="navbar-toggler-icon  rounded-circle"> RISE-GROUP COMPANY L.T.D</a>
    </div>
    <div id="main-menu" class="main-menu collapse navbar-collapse">
        <div class="nav " style="position: relative;margin-left: 20%">
            <div class="nav-item">
                <a class="text-warning nav-link" href="index.php">HOME</a>
            </div>
            <div class="nav-item">
                <a class="text-warning nav-link" href="about-us.php">About-Us</a>
            </div>
            <div class="nav-item">
                <div class="dropdown">
                    <a class="nav-link text-warning dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" >Services</a>
                    <div class="dropdown-menu  border-success ">
                        <a class="dropdown-item text-primary" href="agriculture.php">Agriculture</a>
                        <a class="dropdown-item text-primary" href="tecnology.php">Technologies</a>
                        <a class="dropdown-item text-primary" href="creativity.php">Creativity</a>
                        <a class="dropdown-item text-primary" href="business.php">Business</a>
                    </div>

                </div>
            </div>
            <div class="nav-item">
                <a class="text-warning nav-link " href="https://www.bbc.com/news">News</a>
            </div>

            <div class="nav-item">
                <div class="dropdown">
                    <a class="nav-link text-warning dropdown-toggle" data-toggle="dropdown" href="#" >Management</a>
                    <div class="dropdown-menu  border-success">
                        <a href="login_form.php" data-target="#login" data-toggle="modal" class="dropdown-item text-primary">Login<b class="fa fa-sign-in"></b></a>
                        <a href="register_form.php" data-target="#register" data-toggle="modal" class="dropdown-item text-primary">Register<b></b></a>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <!--START OF REGISTRATION FORM-->

</div>
<div class="modal fade" id="login" data-toggle="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <!--                form header-->
                <a href="#" data-dismiss="modal" class=" nav-link fa fa-close text-warning font-weight-bold text-lg-right"></a>
            </div>
            <div class="modal-body">
                <!--                form-->
                <div class="container">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center text-info">LOGIN PANEL</h3>
                        </div>
                        <div class="card-body">
                            <form action="header.php" method="post" name="loginform">
                                <div class="form-group">
                                    <input type="text" name="orgId" required class="form-control small" id="usr" placeholder="Enter Your MemberID">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="pwd" required id="usr" placeholder="Enter Password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="login" class="btn btn-sm btn-info btn-outline-info rounded float-right">
                                </div>
                                <p class="nav-link">Forgot<a href="#" class="card-link"> Password?</a></p>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>

</div>
<div class="modal fade float-right" id="register" data-toggle="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <!--                form header-->
                <a href="#" data-dismiss="modal" class=" nav-link fa fa-close text-warning font-weight-bold " style="font"></a>
            </div>
            <div class="modal-body">
                <!--                form-->
                <div class="container">
                    <div class="card ">
                        <div class="card-header">
                            <h3 class="text-center text-info">REGISTER PANEL</h3>
                        </div>
                        <div class="card-body">
                            <form action="header.php" method="post" name="regform" onsubmit="return(validateinput());">
                                <div class="form-group">
                                    <input type="text" name="orgId" required class="form-control small" id="usr" placeholder="Enter Member ID">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="username" required class="form-control fa fa-user" id="usr" placeholder="Enter your full-name">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" required class="form-control fa fa-user" id="usr" placeholder="Enter your Email">
                                </div>
                                <div class="form-group">
                                    <input type="tel" name="tel" required id="usr" placeholder="Enter Your Phone Number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="pwd" required id="usr" placeholder="Enter Password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="pwd1" required id="usr" placeholder="Confirm Password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" class="btn btn-sm btn-info btn-outline-info rounded float-right">
                                </div>
                                <p class="nav-link">Have account<a href="login_form.php" data-toggle="modal" data-target="#login" class="card-link"> Login?</a></p>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>

</div>
</body>
</html>

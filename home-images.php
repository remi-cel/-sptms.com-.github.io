
<?php
include_once ('header.php');
if (isset($_POST['sub']))
{
    $capt=$_POST['caption'];
    $pic=$_FILES["pic"]["name"];
    $for=$_POST['for'];
    $extension = substr($pic,strlen($pic)-4,strlen($pic));
$allowed_extensions = array(".jpg","jpeg",".png",".gif");
if(!in_array($extension,$allowed_extensions))
{
    echo "<script>alert('Profile Pics has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
    ?>
    <script type="text/javascript">
        document.location="home-images.php"
    </script>
    <?php
}
else
    {
    $pic = md5($pic) . time() . $extension;
    move_uploaded_file($_FILES["pic"]["tmp_name"], "images/" . $pic);
    
    $con = mysqli_connect('localhost', 'root', '', 'risegroup');

    $sql = mysqli_query($con, "insert into image_tbl(image,postedfor,caption) values ('$pic','$for','$capt')");
    if ($sql)
    {

        echo "<p class='text-success'>image uploaded successfully!</p>";
        ?>
        <script type="text/javascript">
            document.location = "home-images.php"
        </script>
        <?php
             }
             else
             {
                 echo mysqli_error($con);
             }
}



}


if (isset($_GET['id']))
{
    $id=$_GET['id'];
    $con=mysqli_connect('localhost','root','','riseGroup');
    $sql=mysqli_query($con,"delete from image_tbl where id='$id'");

    ?>
    <script type="text/javascript">
        document.location="home-images.php"
    </script>
    <?php
}

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css"
    <link rel="stylesheet" href="bootstrap4/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap4/vendors/font-awesome/css/font-awesome.css">
    <!--    <script src="bootstrap4/js/jquery-3.2.1.min.js"></script>-->
    <!-- Popper -->
    <!--    <script src="bootstrap4/js/popper.js"></script>-->
    <!-- Bootstrap js -->
    <!--    <script src="bootstrap4/js/bootstrap.min.js"></script>-->
</head>
<body>
<div class="container mt-1 mb-5" >
    <div class="card">
        <div class="card-header">
            <h3 class="text-primary text-center">RiseGroup COMPANY LTD, MANAGE HOME IMAGES</h3>
        </div>
        <div class="card-body">
            <form action="home-images.php" method="post" enctype="multipart/form-data">

                <div class="form-group ">
                    <label class="form-label-group">Select Picture To be uploaded: </label>
                    <input type="file" name="pic" required >
                </div>
                <div class="form-group ">
                    <select name="for" class="form-control">
                        <option value="">Select image is posted for</option>
                        <option value="Home">Home</option>
                        <option value="it">Information Technologies (IT)</option>
                        <option value="news">News</option>
                        <option value="agriculture">Agriculture</option>
                        <option value="creativity">Creativity</option>
                        <option value="business">Business</option>

                    </select>
                </div>

                <div class="form-group ">
                    <input type="text" class="form-control" placeholder="Enter Picture's Caption" name="caption" required>
                </div>
                <input type="submit" name="sub" class="btn btn-sm btn-info" value="Upload" style="margin-left: 95%">
            </form>
            <div class="form-group">
                <!--                display announcements-->
                <p class="text-danger text-center">Posted Images</p>
                <table class=" table table-bordered " style="font-size: 12px" >
                    <tbody>
                    <tr class="table-row text-center">
                        <th>SN</th>
                        <th class="">Image</th>
                        <th class="">Picture's Site</th>
                        <th>Pic-Caption</th>
                        <th>POSTED ON</th>
                        <th>ACTION</th>
                    </tr>

                    <?php $con=mysqli_connect('localhost','root','','risegroup');
                    $sql=mysqli_query($con, "select *from image_tbl ORDER  by uploadDay DESC");
                    $i=1;
                    while ($row=mysqli_fetch_array($sql))
                    {
                        ?>

                        <tr class="table-row">
                            <td><?php echo $i; ?></td>
                            <td class=""> <img src="images/<?php echo $row['image'];?>" height="40" width="40"></td>
                            <td><?php echo $row['postedfor']; ?> </td>
                            <td><?php echo $row['caption']; ?> </td>
                            <td> <?php echo $row['uploadDay']; ?> </td>
                            <td><a href="home-images.php?id=<?php echo $row['id'];?> &del"  class="text-light btn-sm btn-danger card-link">Delete</a></td>
                        </tr>
                        <?php
                        $i++;
                    }

                    ?>
                    </tbody>
                </table>
                <!--                end of table displaying privious announcement-->
            </div>


        </div>
    </div>
</body>
</html>
<?php include_once ('footer.php') ?>
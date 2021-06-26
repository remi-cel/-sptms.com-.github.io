
<?php
include_once ('header.php');
if (isset($_POST['sub']))
{
    $title=$_POST['title'];
    $msg=$_POST['msg'];
    $con=mysqli_connect('localhost','root','','riseGroup');
    $sql=mysqli_query($con,"insert into announcement_tbl(announcementName,usertitle) VALUES ('$msg','$title')");
    if ($sql)
    {
        echo "<p class='text-success'>Anouncement Posted successfully!</p>";
        ?>
        <script type="text/javascript">
        document.location="announce.php"
        </script>
<?php
    }
}


if (isset($_GET['id']))
{
    $id=$_GET['id'];
    $con=mysqli_connect('localhost','root','','riseGroup');
    $sql=mysqli_query($con,"delete from announcement_tbl where id='$id'");

    ?>
    <script type="text/javascript">
        document.location="announce.php"
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
<div class="container mt-1" >
    <div class="card">
        <div class="card-header">
            <h3 class="text-primary text-center">RiseGroup COMPANY LTD, ORGANIZATIONAL ANNOUNCEMENTS</h3>
        </div>
        <div class="card-body">
        <form action="announce.php" method="post">

                <div class="form-group ">
                    <input type="text" class="form-control" placeholder="Your Title" aria-label="Username" aria-describedby="basic-addon1" name="title">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="msg" rows="" required>
                   </textarea>
                </div>

                <input type="submit" name="sub" class="btn btn-sm btn-info" value="Post" style="margin-left: 95%">
        </form>
<div class="form-group">
    <!--                display announcements-->
    <p class="text-danger text-center">Previous Announcements</p>
    <table class=" table table-bordered " style="font-size: 12px">
        <tbody>
        <tr class="table-row">
            <th class="">ANNOUNCEMENT</th>
            <th>POSTED BY</th>
            <th>POSTED ON</th>
            <th>ACTION</th>
        </tr>

        <?php $con=mysqli_connect('localhost','root','','riseGroup');
        $sql=mysqli_query($con, "select *from announcement_tbl ORDER  by Adate DESC");
        $i=1;
        while ($row=mysqli_fetch_array($sql))
        {
            ?>

            <tr class="table-row">
                <td><?php echo $row['announcementName']; ?></td>
                <td><?php echo $row['usertitle']; ?> </td>
                <td> <?php echo $row['Adate']; ?> </td>
                <td><a href="announce.php?id=<?php echo $row['id'];?> &del"  class="text-light btn-sm btn-danger card-link">Delete</a></td>
            </tr>
            <?php
        }
        $i++;
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


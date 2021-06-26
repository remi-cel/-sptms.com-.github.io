<?php
include_once ('header.php');
if (isset($_GET['id']))
{
    $id=$_GET['id'];
    $con=mysqli_connect('localhost','root','','riseGroup');
    $sql=mysqli_query($con,"delete from announcement_tbl where id='$id'");

}
?>
<html>
<head>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
</head>
<body>
<div class="container mt-2">
    <div class="card">
        <div class="card-header">
            <h3 class="text-primary text-center">RiseGroup COMPANY LTD, MANAGE ANNOUNCEMENT</h3>
        </div>
        <div class="card-body mt-2">
            <table class=" table table-hover table-bordered shadow">
                <tbody class="table-hover">
                <tr>
                    <th>ANNOUNCEMENT</th>
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

                    <tr>
                        <td><?php echo $row['announcementName']; ?></td>
                        <td><?php echo $row['usertitle']; ?> </td>
                        <td> <?php echo $row['Adate']; ?> </td>
                        <td><a href="manage-announcement.php?id=<?php echo $row['id'];?> &del" onclick="return confirm('Are you sure you want to delete Announcement?')" class="text-light btn-sm btn-danger card-link">Delete</a></td>
                    </tr>
                    <?php
                }
                $i++;
                ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
</body>
</html>
<?php include_once ('footer.php') ?>


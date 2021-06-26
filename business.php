<?php
include_once ('header.php')
?>
<html>
<head>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap4/vendors/font-awesome/css/font-awesome.css">
</head>
<body>
<div class="card mb-5">
    <div class="card border-primary mt-2  float-left mb-2">
        <div class=" card-header bg-white fa fa-desktop text-primary">
            <h3 class=" text-center ">Rise-Group Company Limited, Our Vision In Business</h3>
        </div>
        <div class="card-body">
            <p ><li class="fa fa-hand-o-right"> Making Rise-group as the Business Hub <i class="fa fa-database text-primary"></i>, by 2025. </li>
            </p>
            <p><li class="fa fa-hand-o-right"> By creating strong business team with competence in marketing care and providing service <i class="fa fa-hand-grab-o text-primary"></i> of
                the highest standard.
            </li></p>
        </div>

    </div>

    <?php $con=mysqli_connect('localhost','root','','riseGroup');
    $sql=mysqli_query($con, "select *from image_tbl WHERE postedfor= 'business' ORDER  by uploadDay DESC");
    $i=0;
    while ($result=mysqli_fetch_array($sql))
    {

        ?>
        <div class="card border-primary col-lg-12 float-left">
            <div class=" card-header bg-white fa fa-desktop text-primary">
                <div class="card-body">

                    <img src="images/<?php echo $result['image']?>" alt="Los Angeles" class="w-100 h-75">
                    <div class="carousel-caption fa fa-hand-o-right">
                        <?php echo $result['caption']; ?>
                    </div>
                </div>
            </div>

        </div>
        <?php
    }
    ?>



</div>
</body>
</html>
<?php include_once ('footer.php') ?>


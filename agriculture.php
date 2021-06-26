<?php
include_once ('header.php')
?>
<html>
<head>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css"
    <link rel="stylesheet" href="bootstrap4/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap4/vendors/font-awesome/fonts/fontawesome-webfont.ttf">
    <link rel="stylesheet" href="bootstrap4/vendors/font-awesome/fonts/fontawesome-webfont.woff">
    <link rel="stylesheet" href="bootstrap4/vendors/font-awesome/fonts/fontawesome-webfont.svg">
    <link href="bootstrap4/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap4/vendors/font-awesome/css/font-awesome.css">
</head>
<body class="bg-success">

    <div class="card mb-5">
        <div class="card border-success mt-2 col-lg-12 float-left ">
            <div class=" card-header bg-white fa fa-tree text-success"><i class="fa fa-tree"></i>
                <h3 class=" text-center">Rise-Group COMPANY LTD, OUR VISION IN AGRICULTURE</h3>
            </div>
            <div class="card-body">
                    <p><li>By the end of 2025, to create employment chances not less than 100 for youth.</li>
                    </p>
                    <p><li>To have strong and smart team, with innovative and creative mind, who have ability to convert, commnity problems to opportunity,
                        and saves the society effectively.
                    </li></p>

                <p><li>To create generation of independent youth, by training them with intreprenuerial skill and prepering them to good investors fo future.
                </li></p>
            </div>

        </div>

        <?php $con=mysqli_connect('localhost','root','','riseGroup');
        $sql=mysqli_query($con, "select *from image_tbl WHERE postedfor= 'agriculture' ORDER  by uploadDay DESC");
        $i=0;
        while ($result=mysqli_fetch_array($sql))
        {

            ?>
            <div class="card border-success col-lg-12 float-left">
                <div class=" card-header bg-white fa fa-tree text-success">
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

    <?php include_once ('footer.php') ?>
</body>
</html>



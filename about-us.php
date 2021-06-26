<?php
include_once ('header.php')
?>
<html>
<head>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap4/vendors/font-awesome/css/font-awesome.css">
</head>
<body>
<div class="modal-content mt-3 col-6 float-right mr-1 mb-5 border-0">
    <div class="card border-0 mt-2 mb-2">
        <div class="card-header bg-white">
<h4 class="text-center text-primary">OUR BACKGROUND & HISTORY</h4>
        </div>
        <div class="card-body">
            <p><li class="fa fa-hand-o-right"> Rise-Group, is the company which was founded in 2020 by Remigius Kabandwa, a student at the university of
                Dodoma. .</li></p>

            <p><li class="fa fa-hand-o-right">
                The company become developed more and more soon after Mr Remigius become graduate with the bachelor in Health
                Information System (BSC-HIS), This because he was finding enough time to practice company activities
            </li></p>
            <p><li class="fa fa-hand-o-right">
                In late 2021, He found his two brothers and join with him to run the company, th speed of development in company increased
                exponantially, as the efforts increased.
            </li></p>
            <p><li class="fa fa-hand-o-right">
In few months after the join of his brothers, the company become the arm of three soldiers with less exprience but with high
                affinity to learn more.
            </li></p>
            <p><li class="fa fa-hand-o-right">
As the time goes the company grow-up and start employing different workers, they worked very well and the company become populler
                in the region.
            </li></p>

        </div>

    </div>
</div>

<div class="modal-content mb-5 mt-3 col-5 ml-2 border-0">
    <div class="card border-0 mt-2  float-right mb-2">
        <div class=" card-header bg-white text-primary">
            <h4 class=" text-center ">Rise-Group Company Limited, Slogan and contacts!</h4>
        </div>
        <div class="card-body">
            <h5 class="text-center"><li class="fa fa-info-circle text-dark "> "We are Rise-Group  <i class="fa fa-users text-success"></i>
                    because of you <i class="text-warning fa fa-user"></i> !." </li>
            </h5>
            <p class="fa fa-dot-circle-o"> <b>The company is located in Nyaishozi village in karagwe District Kagera Tanzania.</b></p>

<p class="text-primary text-center"><u class=" text-center fa fa-hand-o-down">CONTACTS</u></p>
            <p><li class="fa fa-hand-o-right"></li> Email: <a href="#">remixkabandwa@gmail.com</a></p>
            <p><li class="fa fa-hand-o-right"></li> Phone No: <a href="#">0753427137</a></p>
            <p><li class="fa fa-hand-o-right"></li> Website: <a href="http://localhost/www.risegroup.com/">https://www.risegroup.com</a></p>
            <p><li class="fa fa-hand-o-right"></li> Facebook: <a href="#">remix kabandwa</a></p>
            <p><li class="fa fa-hand-o-right"></li> Instagram: <a href="#">Remigius Kabandwa</a></p>


        </div>

    </div>

</div>
<div class="modal-content mb-5">
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


<?php
include 'inc/slider.php';


$page='transparent_header';

if(!isset($_GET['id']) || !isset ($places[$_GET['id']])){
    header("Location:places.php");
    exit();
    }
    
$id=$_GET['id'];
$place=$places[$id];
    
$pageTitle=$place['title'];
include 'inc/header.php';

?>


<article class="place-details my-3 py-2">
    <div class="container">
        <h2 class="text-center mb-5"><?=$place['title']?></h2>
        <div class="row">
            <div class="col-lg-6">
               <div class="text-center">
                <img class="mb-5 img-fluid"  src="<?=$place["img"]?>" alt="<?=$place["title"]?>">
               </div>
            </div><!-- col -->
            <div class="col-lg-6">
                <p class="pt-2"><?=$place['desc']?></p>
                <a class="float-left" href="places.php">عودة للأماكن <i class="fa fa-arrow-circle-left"></i></a> 
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->
</article>

<?php
include 'inc/footer.php';
?>
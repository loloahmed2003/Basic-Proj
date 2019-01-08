
<?php
    $pageTitle='places';
    $page='transparent_header';
    include 'inc/header.php';
    include 'inc/slider.php';
?>

<section class="all_places py-4">
  <div class="container">
    <div class="row">
    <?php foreach($places as $place_id => $place){?>
      <div class="col-md-3">
        <div class="place text-center my-3">
          <!-- <h2 class="pb-2"><?=$place['title']?></h2> -->

          <a href="place.php?id=<?=$place_id?>">
            <img class="img-fluid place-img" src="<?=$place["img"]?>" alt="<?=$place["title"]?>">
          </a>
          <div class="overlay">
          <a href="place.php?id=<?=$place_id?>"><span class="text"><?=$place["title"]?></span></a>
          </div>
              <!-- <a href="place.php?id=<?=$place_id?>">التفاصيل ..</a> -->
        </div><!-- place -->
      </div><!-- col --> <?php }?>
    </div><!-- row -->
  </div><!-- container -->
</section>
<?php
    include 'inc/footer.php';
?>

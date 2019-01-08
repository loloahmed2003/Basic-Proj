
<?php
$pageTitle='home';
    include 'inc/header.php';
    include 'inc/slider.php';
?>


<div id="carousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <?php foreach($slider as $slide){?>
    <div class="carousel-item <?php if($slide==$slider[0]) echo'active';?>">
      <img class="d-block w-100" src="<?=$slide;?>" alt="First slide">
    </div>
    <?php } ?>
  </div>
  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<section class="top_places py-4">
  <div class="container text-center">
    <h2 class="text-center my-4">أفضل الأماكن</h2>

    <div class="row">
      <?php foreach(array_slice($places,0,4,true) as $place_id => $place){?>
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

    <a class="btn btn-lg btn-outline my-3" href="places.php">عرض الكل</a>
  </div><!-- container -->
</section>

<!--
  <div class="bottom">
    	<h2 class="text-right mb-4">قرية النورس السياحية </h2>
		<p class="mr-3 text-right">يوفر الفندق حمام سباحة في الهواء الطلق وشاطئ خاص، ويقع في بورسعيد. كما تتوفر خدمة الواي فاي المجانية في جميع أنحاء مكان الإقامة.

تحتوي أماكن الإقامة المكيفة على جهاز تلفزيون ذي شاشة مسطحة ونظام تكييف، تتوفرأيضا غلاية كهربائية. ويضم الحمام الخاص دش.

وتشمل المرافق الأخرى المتوفرة في مكان الإقامة صالة مشتركة وملعبًا للأطفال ومتجر في الموقع ومركز للياقة البدنية. تتوفر الأنشطة مثل الاسكواش والبولينج عند الطلب.

نحن نتكلم لغتك!   </p>
</div><!-- bottom -->

<?php
    include 'inc/footer.php';
?>

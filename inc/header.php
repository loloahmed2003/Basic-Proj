<?php $title='tourism';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?> | <?php echo $pageTitle; ?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">    
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lateef" rel="stylesheet">

  <?php if(isset($page)) {?>

  <link rel="stylesheet" href="css/custom.css"> 
  <?php } ?>

  <?php if($pageTitle=='contact us') {?>

  <link rel="stylesheet" href="css/contact.css"> 
  <?php } ?>
  


</head>
<body>
        
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top p-0 ">
  <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto mr-5"> 
      <li class="nav-item  ml-auto">
        <a class="nav-link py-3 <?php if($pageTitle=="home") echo 'active'; ?>" href="index.php" href="index.php">الرئيسية <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item  ml-auto">
        <a class="nav-link py-3 <?php if($pageTitle=="places") echo 'active'; ?>" href="places.php">الأماكن</a>
      </li>
      <li class="nav-item  ml-auto">
        <a class="nav-link py-3 <?php if($pageTitle=="contact us") echo 'active'; ?>" href="contact.php">أتصل بنا</a>
      </li>
    </ul>

   <div class="social_icons">
      <a class="facebookBtn smGlobalBtn" href="#" ></a>
			<a class="twitterBtn smGlobalBtn" href="#" ></a>
			<a class="googleplusBtn smGlobalBtn" href="#" ></a>
			<a class="linkedinBtn smGlobalBtn" href="#" ></a>
			<a class="pinterestBtn smGlobalBtn" href="#" ></a>
			<a class="tumblrBtn smGlobalBtn" href="#" ></a>
			<a class="rssBtn smGlobalBtn" href="#" ></a>
   </div>
  
</nav>
    <header class="">
        <div class="container">
            <div class="row">

              <div class="col-md-6  text-center">
                <!-- <img src="images/logo2.png" alt="logo" class="float-md-right"> -->
                <h1 class="float-md-right mt-3 mt-sm-4">Travel in Egypt</h1>
                <div class="clearfix"></div>
              </div><!-- col  -->
              <div class="col-md-6 ">
                <div class="form ">
                  <form class="form-inline float-md-left mb-4 mt-4 text-center">
                    <input class="form-control ml-2 mr-sm-2" type="search" placeholder="ابحث في المدن" aria-label="Search">
                    <button class="btn mx-auto my-2 my-sm-0 " type="submit">Search</button>
                  </form>
                </div>
              </div><!-- col  -->
            </div><!-- row  -->
        </div><!-- container  -->
    </header>

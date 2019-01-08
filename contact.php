
<?php
    $page='transparent_header';
    $pageTitle='contact us';
    include 'inc/header.php';
?>

<section class="contact py-5">
    <div class="container">
        <h3 class="text-center mb-5">ارسل رسالة</h3>
        <div class="row">
            <div class="col-md-6">
                <form class="">
                    <div class="form-group">
                        <input type="email" class="form-control mb-4" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ادخل البريد الإلكتروني">
                       
                    </div>
                    <div class="form-group ">
                        <input type="password" class="form-control " id="exampleInputPassword1" placeholder="كلمه السر">
                    </div>
            </div><!-- col -->
            <div class="col-md-6 text-center">
                <textarea class="form-control mb-2" id="exampleFormControlTextarea1" rows="4"  placeholder="اكتب رسالتك"></textarea>
                    <button type="submit" class="btn btn-primary btn-lg">إرسال</button>
                </form>
          </div><!-- col -->  
        </div><!-- row -->
    </div><!-- container -->
</section>
<?php
    include 'inc/footer.php';
?>

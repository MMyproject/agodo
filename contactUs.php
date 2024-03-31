<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGODO-CONTACTUS</title>
    <?php require('inc/link.php')?>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

  </head>
<body class = "bg-light">
<?php require('nav.php')?>


<div class="my-5 px-4">
  <h2 class = "fw-bold h-font text-center">CONTACT US</h2>
  <div class="h-line bg-dark"></div>
  <p class="text-center mt-3">
    ติดต่อเรา </p>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4">
      <iframe class ="w-100 rounded mb-4" height = "320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.331165951877!2d100.51171287573221!3d13.819142195729558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29b877800c9af%3A0xd754c571fc7177b!2z4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4LmA4LiX4LiE4LmC4LiZ4LmC4Lil4Lii4Li14Lie4Lij4Liw4LiI4Lit4Lih4LmA4LiB4Lil4LmJ4Liy4Lie4Lij4Liw4LiZ4LiE4Lij4LmA4Lir4LiZ4Li34Lit!5e0!3m2!1sth!2sth!4v1711610136717!5m2!1sth!2sth" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <h5>Adrress</h5>
      <i class="bi bi-geo-alt-fill"></i>
      <a href = "https://maps.app.goo.gl/iGGrpPkDwr6CJaxE7">KMUTNB</a><br>
      <h5 class = "mt-4">Call us</h5>
      <a href="tel +00000000" class = "d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+025552000</a><br>
     


      </div>
    </div>

    <div class="col-lg-6 col-md-6  px-4">
      <div class="bg-white rounded shadow p-4">
        <form>
          <h5>Send a Message</h5>
          <div class="mt-3">
            <label class="form-label" style="font-weight : 500px;">Name</label>
            <input type="text" class="form-control shadow-none">
          </div>
          <div class="mt-3">
            <label class="form-label" style="font-weight : 500px;">Email</label>
            <input type="email" class="form-control shadow-none">
          </div>
          <div class="mt-3">
            <label class="form-label" style="font-weight : 500px;">Subject</label>
            <input type="text" class="form-control shadow-none">
          </div>
          <div class="mt-3">
            <label class="form-label" style="font-weight : 500px;">Message</label>

            <textarea class="form-control shadow-none" rows="1" style="resize:none;"></textarea>
          </div>
          <button type="submit" class="btn text-white custom-bg mt-3">SEND</button>
        </form>
        
      </div>
    </div>

  </div>
</div>

<?php require('inc/footer.php') ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop :true,autoplay : {delay : 3500,disableOnInteraction:false,}
      });
      var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView :"3",
      loop:true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints:{
        320:{
          slidesPerView:1,
        },
        640:{
          slidesPerView:1,
        },
        768:{
          slidesPerView:2,
        },
        1024:{
          slidesPerView:3,
        },
      }
    });
</script> -->
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGODO-FACILITIES</title>
    <?php require('inc/link.php')?>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

  </head>
<body class = "bg-light">
<?php require('nav.php')?>
<style>
  .pop:hover{
    border-top-color: var(--teal) !important;
    transform: scale(1.03);
    transition: all 0.3s;
  }
</style>

<div class="my-5 px-4">
  <h2 class = "fw-bold h-font text-center">OUR FACILITIES</h2>
  <div class="h-line bg-dark"></div>
  <p class="text-center mt-3">
    สิ่งอำนวยความสะดวกโรงเเรมภายใต้เครือ AGODO มีดังนี้ </p>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
        <img src="img/facilities/1.svg" width="40px">
        <h5 class="m-0 ms-3">wifi</h5></div>
        <p>
          ไวไฟอินเตอร์เน็นความเร็วสูง ที่ให้บริการในทุกๆพื้นที่ของโรงแรม</p>
          
      </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
        <img src="img/facilities/2.svg" width="40px">
        <h5 class="m-0 ms-3">heater</h5></div>
        <p>สิ่งอำนวยความสะดวก เพิ่มความอบอุ่นให้แก่ลูกค้าที่เข้าใช้บริการในช่วงฤดูหนาว(?)</p>
          
      </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
        <img src="img/facilities/3.svg" width="40px">
        <h5 class="m-0 ms-3">television</h5></div>
        <p>
          อุปกรณ์เพิ่มความบันเทิง และ เพลิดเพลินให้แก่ลูกค้า</p>
          
      </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
        <img src="img/facilities/4.svg" width="40px">
        <h5 class="m-0 ms-3">air-condition</h5></div>
        <p>
          สิ่งอำนวยความสะดวกสบาย1</p>
          
      </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
        <img src="img/facilities/5.svg" width="40px">
        <h5 class="m-0 ms-3">fan</h5></div>
        <p>
          สิ่งอำนวยความสะดวกสบาย2</p>
          
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
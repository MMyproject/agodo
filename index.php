<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGODO-HOME</title>
    <?php require('inc/link.php')?>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <style>
      .availability-form {
        margin-top: -50px;
        z-index: 2;
        position: relative;
     }
     @media screen and (max-width:575px) {
    .availability-form {
        margin-top: 25px;
        padding: 0 35px;
    }
}

    </style>

</head>
<body class = "bg-light">
<?php require('nav.php')?>


<!-- Hotelpic -->
<div class="container-fluid px-lg-4 mt-4">
<div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="img/hotel/1.png" class = "w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="img/hotel/2.png" class = "w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="img/hotel/3.png" class = "w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="img/hotel/4.png" class = "w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="img/hotel/5.png" class = "w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="img/hotel/6.png" class = "w-100 d-block">
      </div>
    </div>
    
  </div>

</div>


<!-- check availability form -->
<div class="container availability-form">
  <div class="row">
    <div class="col-lgl12 bg-white shadow p-4 rounded">
      <h5 class="mb-4">Check Booking Availability</h5>
      <form>
        <div class="row align-items-end">
          <div class="col-lg-3 mb-3">
          <label class="form-label" style="font-weight: 500;">Check-in</label>
              <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3 mb-3">
          <label class="form-label" style="font-weight: 500;">Check-out</label>
              <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3 mb-3">
            <label class="form-label" style="font-weight: 500;">Adult</label>
              <select class="form-select shadow-none">
              <option selected>Open this select menu</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
              </select>
          </div>
          <div class="col-lg-2 mb-3">
            <label class="form-label" style="font-weight: 500;">Children</label>
              <select class="form-select shadow-none">
              <option selected>Open this select menu</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
              </select>
          </div>
          <div class="col-lg-1 mb-lg-3 mt-2">
            <button type="submit" class="btn text-white shadow-none custom-bg">Submit </button>
          </div>
        </div>
      </form>
    </div>

  </div>
</div>
<!-- Our room -->
<h2 class="mt-5 pt-4 text-center fw-bold h-font">OUR ROOM</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-4 xol-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
        <img src="img/room/1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5>Simple Room</h5>
            <h6 class="mb-4">฿3500 per night</h6>
            <div class="features mb-4">
              <h6 class ="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Bathroom
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 sofa
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class ="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
               Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Television
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                AC
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Room heater
              </span>
              
            </div>
            <div class="guests mb-4">
              <h6 class ="mb-1">Guestss</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
               2 Adults
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Children
              </span>
             
              
            </div>
            <div class="rating mb-4">
              <h6 class ="mb-1">Rating</h6>
              <span class = "badge rounded-pill bg-light">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>

              </span>
             
            </div>

            <div class="d-flex justify-content-evenly mb-2">
              <a href="booking_simple.php" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
            
            </div>
            
          </div>
      </div>
    </div>
    <div class="col-lg-4 xol-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
        <img src="img/room/2.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5>Deluxe Room</h5>
            <h6 class="mb-4">฿5000 per night</h6>
            <div class="features mb-4">
              <h6 class ="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Bathroom
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 sofa
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class ="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
               Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Television
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                AC
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Air-condition
              </span>
             
              
            </div>
            <div class="guests mb-4">
              <h6 class ="mb-1">Guestss</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
               3 Adults
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Children
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class ="mb-1">Rating</h6>
              <span class = "badge rounded-pill bg-light">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>

              </span>
             
            </div>

            <div class="d-flex justify-content-evenly mb-2">
              <a href="booking_deluxe.php" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
             
            </div>
            
          </div>
      </div>
    </div><div class="col-lg-4 xol-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
        <img src="img/room/3.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5>Luxury Room</h5>
            <h6 class="mb-4">฿8500 per night</h6>
            <div class="features mb-4">
              <h6 class ="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                3 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Bathroom
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                3 sofa
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class ="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
               Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Television
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                AC
              </span>
             
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Air-condition
              </span>
              
            </div>
            <div class="guests mb-4">
              <h6 class ="mb-1">Guestss</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
               4 Adults
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                3 Children
              </span>
             
              
            </div>
            <div class="rating mb-4">
              <h6 class ="mb-1">Rating</h6>
              <span class = "badge rounded-pill bg-light">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>

              </span>
             
            </div>

            <div class="d-flex justify-content-evenly mb-2">
              <a href="booking_luxury.php" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
             
            </div>
            
          </div>
      </div>
    </div>
    <!-- <div class="col-lgl12 text-center mt-5">
      <a href="#" class="btn btn=sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms>></a>

    </div> -->

  </div>
</div>
<!-- Our Facilities -->
<h2 class="mt-5 pt-4 text-center fw-bold h-font">OUR FACILITIES</h2>
<div class="container">
  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="img/facilities/1.svg" width="80px">
      <h5 class="mt-3">Wifi</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="img/facilities/2.svg"  width="80px">
      <h5 class="mt-3">Heater</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="img/facilities/3.svg"  width="80px">
      <h5 class="mt-3">Television</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="img/facilities/4.svg"  width="80px">
      <h5 class="mt-3">Air conditioned</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="img/facilities/5.svg"  width="80px">
      <h5 class="mt-3">Fan</h5>
    </div>
   
  </div>
</div>
<!-- review -->
<h2 class="mt-5 pt-4 text-center fw-bold h-font">Review</h2>
<!-- Swiper -->
<div class = "container mt-5">
<div class="swiper swiper-testimonials">
    <div class="swiper-wrapper mb-5">

      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="img/features/star-fill.svg" width="30px">
          <h6 class="m-0 ms-2">สมศรี(Deluxe Room)</h6>
        </div>
        <p>
        พัก 3 คืน ชอบที่นี่ที่สุด วิวสวยมาก ประทับใจ ยืนมองเพลินๆเลย ห้องพักขนาดกลางๆไม่ใหญ่มาก แต่สิ่งอำนวยความสะดวกครบ อ่างน้ำอุ่นแช่น้ำได้จริงในหน้าหนาว Staff น่ารักมาก ช่วยเหลือดี แนะนำที่นี่ วิวดี ทุกอย่างดี แสงสวยทุกช่วงเวลา ได้รูปสวยแน่นอน
    
        </p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>

        </div>
      </div>
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="img/features/star-fill.svg" width="30px">
          <h6 class="m-0 ms-2">สมชาย(Simple room)</h6>
        </div>
        <p>บรรยากาศห้องรับประทานอาหารดีมาก
        </p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>

        </div>
      </div>
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="img/features/star-fill.svg" width="30px">
          <h6 class="m-0 ms-2">สมหมาย(simple room)</h6>
        </div>
        <p>
          พนักงานกระตือรือร้น อัธยาศัยดี ให้คำแนะนำดี บริเวณที่พักมีแมว แมวน่ารัก
        </p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>

        </div>
      </div>
      
      
    </div>
    <div class="swiper-pagination"></div>
</div>


</div>

<!-- Reach us -->
<h2 class="mt-5 pt-4 text-center fw-bold h-font">Rech us</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
    <iframe class ="w-100 rounded" height = "320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.331165951877!2d100.51171287573221!3d13.819142195729558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29b877800c9af%3A0xd754c571fc7177b!2z4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4LmA4LiX4LiE4LmC4LiZ4LmC4Lil4Lii4Li14Lie4Lij4Liw4LiI4Lit4Lih4LmA4LiB4Lil4LmJ4Liy4Lie4Lij4Liw4LiZ4LiE4Lij4LmA4Lir4LiZ4Li34Lit!5e0!3m2!1sth!2sth!4v1711610136717!5m2!1sth!2sth" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
    <div class="col-lg-4 col-md-4">
      <div class="bg-white p-4 rounded mb-4">
        <h5>Call us</h5>
        <a href="tel +00000000" class = "d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+00000000</a><br>
        <a href="tel +00000000" class = "d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+00000000</a>
      </div>
      <div class="bg-white p-4 rounded mb-3">
        <h5>Follow us</h5>
        <a href="https://twitter.com/" class = "d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2"><i class="bi bi-twitter me-1"></i>twitter</span>
        </a><br>

        <a href="https://www.facebook.com/" class = "d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2"><i class="bi bi-facebook me-1"></i></i>Facebook</span>
        </a><br>

        <a href="https://www.instagram.com/" class = "d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2"><i class="bi bi-instagram me-1"></i></i>Instargram</span>
        </a><br>
     
      </div>

    </div>
  </div>
</div>

<div class="container-fluid bg-white mt-5">
  <div class="row">
    <div class="col-lg-4 p-4">
      <h3 class="h-font fw-bold fs-3 mb-2">ADODO</h3>
      <p>จองโรงแรม ที่พัก ห้องพัก ที่ตกแต่งอย่างสวยงามลงตัว ในสไตล์ร่วมสมัยพรั่งพร้อมไปด้วยสิ่งออำนวยความสะดวกสบายอย่างครบครัน รวมไปถึงบริการอินเตอร์เน็ตไร้สายในทุกๆพื้นที่ฟรี! เราพร้อมให้บริการห้องพักคุณภาพ โดยมุ่งมั่นความเป็นส่วนตัว และ คามสะดวกสบายของลูกค้าในทุกการเดิน
      </p>
    </div>
    <div class="col-lg-4 p-4">
      <h5 class ="mb-3">Links</h5>
      <a href="#" class="d-inline-block mb-3 text-dark text-decoration-none">Home</a> <br>
      <a href="#" class="d-inline-block mb-3 text-dark text-decoration-none">Rooms</a> <br>
      <a href="#" class="d-inline-block mb-3 text-dark text-decoration-none">Facilities</a> <br>
      <a href="#" class="d-inline-block mb-3 text-dark text-decoration-none">Contacr us</a> <br>
      <a href="#" class="d-inline-block mb-3 text-dark text-decoration-none">About</a>
    </div>
   

  </div>

</div>
<h6 class = "text-center bg-dark text-white p-3 m-0"  ></h6>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
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
</script>
</body>
</html>
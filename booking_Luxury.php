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
  <h2 class = "fw-bold h-font text-center">BOOKING</h2>
  <div class="h-line bg-dark"></div>
  <p class="text-center mt-3">
    จองโรงเเรม </p>
</div>
<div class="container">
  <div class="row">
  <div class="col-lg-6 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4">
      <img src="img/room/3.png" class="card-img-top" alt="...">
      <br><br>
      
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
            
      
     


      </div>

    
    </div>

    <div class="col-lg-6 col-md-9  px-4">
      <div class="bg-white rounded shadow p-4">
        <form>
          <h5>Booking</h5>
          <div class="mt-3">
            <label class="form-label" style="font-weight: 250px;">Type</label>
              <select class="form-select shadow-none" required>
              <option selected>Open this select menu</option>
              <option value="1">Simple</option>
              <option value="2">Deluxe</option>
              <option value="3">Luxury</option>
              </select>
          </div>
          <div class="mt-3">
            <label class="form-label" style="font-weight : 250px;">Check-in</label>
            <input type="date" class="form-control shadow-none" required>
          </div>
          <div class="mt-3">
            <label class="form-label" style="font-weight : 250px;">Check-Out</label>
            <input type="date" class="form-control shadow-none" required>
          </div>
          
          <div class="mt-3">
            <label class="form-label" style="font-weight : 500px;">Note</label>
            <textarea class="form-control shadow-none" rows="1" style="resize:none;"></textarea>
          </div>
          <a href="index.php"><button type="submit" class="btn text-white custom-bg mt-3">booking</button></a>
          
        </form>
        
      </div>
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
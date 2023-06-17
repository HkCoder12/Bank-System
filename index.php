<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- external css bootstrap  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to Money Bank</title>
</head>


<body class=body>
  <!-- header with connection and sql code -->
  <?php require_once './include/header.php' ?>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>


  <section id="services" class="services">
    <div class="container my-5">
      <h1 class=text-center>Welcome to HK Bank</h1>
      <!-- <h1 class="text-dark text-center my-5">Welcome to HK Bank</h1> -->
      <p>
        <marquee direction="left" style="border:BLACK 2px SOLID"> HK Bank never asks for your Card/PIN/OTP/CVV details
          on phone, message or email. Please do not click on links received on your email or mobile asking your
          Bank/Card details. </marquee>
      </p>
      <p margin=20px>
        <h2>Our Customer and Transactions Details</h2>
      </p>
      <div class="container">
        <div class="row row-cols-2">

          <!-- <div class="col "> -->


            <!-- <div class="container col my-5"> -->
              <p class="lead"> Customer Details</p>
              <a href="customer.php"><button type="button">Click Here</button></a>
            </div>

            <!-- <div class="container"> -->
        <div class="row row-cols-2">

            <!-- <div class="container col my-5"> -->
              <p class="lead"> Transaction Details</p>
              <a href="transaction.php"><button type="button">Click Here</button></a>
            </div>

          </div>

  </section>

  <section id="about" class="about">
    <div class="container">

      <div class="section-title ">
        <h1>About Us</h1>
      </div>

      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil soluta nam perspiciatis sint voluptate nulla
        aspernatur cumque? Assumenda impedit est, similique laudantium vel, a vero deleniti voluptas doloremque rem
        ipsam.
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil soluta nam perspiciatis sint voluptate nulla
        aspernatur cumque? Assumenda impedit est, similique laudantium vel, a vero deleniti voluptas doloremque rem
        ipsam.

      </p>
      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat, rerum numquam. Eius amet perferendis fuga
        maxime debitis aut. Quia provident at magni quidem quibusdam. Dolores corporis voluptates beatae eos odit.
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat, rerum numquam. Eius amet perferendis fuga
        maxime debitis aut. Quia provident at magni quidem quibusdam. Dolores corporis voluptates beatae eos odit.
      </p>
      <a href="#">Learn More</a>
    </div>
    </div>
  </section>

  </div>
  </div>
  <!-- middle container end -->

  <!-- footer  -->
  <?php require_once './include/footer.php' ?>
</body>

<!-- bootstrap js script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</html>

<style>
  body {
    font-family: 'Ubuntu', sans-serif;
    display: abstract;
    margin: 0px;
    padding: 0px;
    background-image: url('C:\xampp\htdocs\bank\images\bank1.jpg');
  }
</style>
<?php
include("header.php");
include("config/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--=============== ICON PAGE ===============-->
    <link rel="icon" type="image" href="img/LG-YELLOW.png" width=25px height=25px>
    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="css/styles.css" media="screen">
    <title>Home • FurFect Match</title>
</head>

<body>
<section class="home">
      <div class="container">
            <div class="accomplishments">
                  <h3 style="font-size: 23px;">Monthly Accomplishment</h3>
                  <br>
                  <div class="item">
                        <img src="https://via.placeholder.com/150" alt="Castration/ Spaying">
                        <p>Castration/ Spaying</p>
                  </div>
                  <div class="item">
                        <img src="https://via.placeholder.com/150" alt="Animal Treatment">
                        <p>Animal Treatment</p>
                  </div>
                  <div class="item">
                        <img src="https://via.placeholder.com/150" alt="Rabies Vaccination/ Deworming">
                        <p>Rabies Vaccination/ <br>Deworming</p>
                  </div>
                  <div class="item">
                        <img src="https://via.placeholder.com/150" alt="Rabies Vaccination/ Deworming">
                        <p>Vitamins</p>
                  </div>
            </div>
            <div class="services">
                  <h2>Service Offered</h2>
                  <ul>
                        <li><i class="fas fa-paw" style="color: var(--mid-blue);"></i> Animal Treatment</li>
                        <li><i class="fas fa-paw" style="color: var(--mid-blue);"></i> Anti Rabies Vaccination 5 in 1 Vaccination</li>
                        <li><i class="fas fa-paw" style="color: var(--mid-blue);"></i> Animal Healthcare Program</li>
                        <li><i class="fas fa-paw" style="color: var(--mid-blue);"></i> Veterinary Medical Mission</li>
                        <li><i class="fas fa-paw" style="color: var(--mid-blue);"></i> Impounding</li>
                        <li><i class="fas fa-paw" style="color: var(--mid-blue);"></i> Pet Travel Permit</li>
                  </ul>
                  <div class="info-box">
                        <h3>Learn About Animal Rights</h3>
                        <p>Republic Act No. 8485 – Animal Welfare Act of 1998</p>
                        <p>Republic Act No. 9482 – Anti-Rabies Act, 2007</p>
                        <button class="learn-more-btn" onclick="window.location.href='faqs.php#laws'">Learn More</button>
                  </div>
                  <div class="buttons">
                        <button onclick="window.location.href='#'">Report Cruelty</button>
                        <button onclick="window.location.href='#'">Lost & Found</button>
                  </div>
            </div>
      </div>
      <div class="container">
            <div class="blogs">
                  <h2>Blogs</h2>
                  <br>
                  <div class="item">
                        <img src="https://via.placeholder.com/150" alt="Castration/ Spaying">
                        <p>Meet our Dogs</p>
                  </div>
                  <div class="item">
                        <img src="https://via.placeholder.com/150" alt="Animal Treatment">
                        <p>Meet our Cats</p>
                  </div>
                  <div class="item">
                        <img src="https://via.placeholder.com/150" alt="Rabies Vaccination/ Deworming">
                        <p>Cruelty/Neglect</p>
                  </div>
                  <div class="item">
                        <img src="https://via.placeholder.com/150" alt="Rabies Vaccination/ Deworming">
                        <p>Spay/Neuter Programs</p>
                  </div>
            </div>
      </div>
      <div class="container3">
            <div class="aboutUs">
                  <h3>ABOUT US</h3>
                  <p>PEOPLE HELPING ANIMALS. ANIMALS HELPING PEOPLE</p>
            </div>
            <div class="aboutUs">
                  <h3>MANDATE</h3>
                  <p>Protect the health of both animals and people and 
                  promote the development of livestock industries</p>
            </div>
            <div class="aboutUs">
                  <h3>VISION</h3>
                  <p>Provide better quality of life for Tomasinos by continually 
                  improving animal welfare, promoting a healthy animal 
                  population as source of food, providing Veterinary Services, 
                  Livestock/Poultry Livelihood Services, Regulatory Services, and 
                  Administrative Support Services.</p>
            </div>
            <div class="aboutUs">
                  <h3>MISSION</h3>
                  <p>Continuous improvement on animal welfare program and 
                  provide excellent veterinary service by utilizing the highest 
                  standards of animal care.</p>
            </div>
      </div>

      <div class="bannerHome">
            <div class="bannerImg">
                  <img src="img/LG.png" alt="">
            </div>
         <div class="aboutContent">
            <h4>ABOUT US</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione qui, odio architecto veritatis ullam cumque id vitae deserunt laboriosam praesentium accusantium reiciendis eum animi consequuntur odit minima nemo dignissimos reprehenderit.</p>
            <a href="about.php" class="button">Read more</a>
         </div>
      </div>
      <hr>
      <div class="contactHome">
            <div class="contactContent">
                  <h3>Have Any Questions?</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias veniam labore tempore cupiditate numquam ea nihil totam aliquid reiciendis temporibus. Omnis iste ducimus dolor in aperiam nemo voluptates officiis ab?</p>
                  <a href="contact.php" class="button">Contact US</a>
                  <a href="about.php #reviews" class="button">Write a Review</a>
            </div>
      </div>
      
</section>
<?php
include("footer.php");
?>
</body>
</html>
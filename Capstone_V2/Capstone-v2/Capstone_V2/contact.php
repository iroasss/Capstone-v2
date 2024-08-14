<?php
include("header.php");
include("config/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us • FurFect Match</title>
</head>
<body>

<!-- <section class="contact" style="background: var(--mid-blue); margin-top: 3.5rem;">
   <form action="" method="post">
      <h3>Hello, How can we help you?</h3>
      <p>Any questions? We would be Happy to Help you!</p>
      <input type="text" name="name" required placeholder="Your Name" class="box">
      <input type="email" name="email" required placeholder="Your Email Address" class="box">
      <input type="number" name="number" required placeholder="Your Number" class="box">
      <textarea name="message" class="box" placeholder="Your Message" id="" cols="20" rows="5"></textarea>
      <input type="submit" value="send message" name="send" class="button">
   </form>
</section> -->

<section class="contact">
<!-- <h2>Contact US!</h2> -->
   <div class="flex">
   
      <div class="image">
         <img src="img/LG.png" alt="">
      </div>
      
      <section class="content">
         <form action="" method="post">
            <h3>Hello, How can we help you?</h3>
            <p>Any concerns or suggestions? We would be Happy to Help you!</p>
            <input type="text" name="name" required placeholder="Your Name" class="box">
            <input type="email" name="email" required placeholder="Your Email Address" class="box">
            <input type="number" name="number" required placeholder="Your Number" class="box">
            <textarea name="message" class="box" placeholder="Your Message" id="" cols="20" rows="5"></textarea>
            <button type="submit" value="send message" name="send" class="button" style="cursor: pointer;"> Send Message <i class="fas fa-paper-plane"></i> </button>
         </form>
      </section>

   </div>

</section>

<?php
include("footer.php");
?>
</body>
</html>
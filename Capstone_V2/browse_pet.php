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
    <title>Browse Pets • FurFect Match</title>
</head>
<body>
<?php
include("header.php");
include("config/config.php");
?>
<div class="container">
<div class="sidebar">
  <div class="top">
    <div class="logo">
      <i class='bx bx-filter'></i>
      <span>Filter</span>
    </div>
  </div>
  <hr>
  <ul>
    <li>
      <a href="#">
        <span class="nav-item">
          <!-- <label for="species">Species</label> -->
          <select id="species">
            <option value="">Species</option>
            <option value="sample1">sample1</option>
            <option value="sample2">sample2</option>
            <option value="sample3">sample3</option>
            <option value="sample4">sample4</option>
          </select>
        </span>
      </a>
    </li>

    <li>
      <a href="#">
        <span class="nav-item">
          <!-- <label for="breed">Breed</label> -->
          <select id="breed">
            <option value="">Breed</option>
            <option value="sample1">sample1</option>
            <option value="sample2">sample2</option>
            <option value="sample3">sample3</option>
            <option value="sample4">sample4</option>
          </select>
        </span>
      </a>
    </li>

    <li>
      <a href="#">
        <span class="nav-item">
          <!-- <label for="color">Color</label> -->
          <select id="color">
            <option value="">Color</option>
            <option value="sample1">sample1</option>
            <option value="sample2">sample2</option>
            <option value="sample3">sample3</option>
            <option value="sample4">sample4</option>
          </select>
        </span>
      </a>
    </li>

    <li>
      <a href="#">
        <span class="nav-item"><label for="age-range">Age Range</label>
          <div id="age-range">
            <input type="number" placeholder="yrs." min="0">
            to
            <input type="number" placeholder="yrs." min="0">
          </div>
        </span>
      </a>
    </li>

    <li>
      <a href="#">
        <span class="nav-item">
          <!-- <label for="location">Location</label> -->
          <select id="location">
            <option value="">Location</option>
            <option value="sample1">sample1</option>
            <option value="sample2">sample2</option>
            <option value="sample3">sample3</option>
            <option value="sample4">sample4</option>
          </select>
          <button id="current">Use Current Location</button>
        </span>
      </a>
    </li>

    <li>
      <a href="#">
        <span class="nav-item">
          <div class="checkbox-group">
            <label><input type="checkbox"> Good with Dogs</label>
            <label><input type="checkbox"> Good with Cats</label>
          </div>
        </span>
      </a>
    </li>

    <li>
      <a href="#">
      <span class="nav-item buttons-row">
          <button style="flex:1;">Reset</button>
          <button style="flex:1;">Search</button>
      </span>
      </a>
    </li>

  </ul>
</div>

<section class="home">
<div class="grid">
<a href="#" class="animal-card-link" data-modal="modal1">
    <div class="animal-card">
        <div class="image-container">
            <div class="loader">
                <svg viewBox="25 25 50 50">
                    <circle r="20" cy="50" cx="50"></circle>
                </svg>
            </div>
            <img src="https://via.placeholder.com/150" alt="Animal">
        </div>
        <p>Name</p>
        <p>Age</p>
        <p>Animal Compound</p>
    </div>
</a>

  <a href="#" class="animal-card-link" data-modal="modal1">
    <div class="animal-card">
      <img src="https://via.placeholder.com/150" alt="Animal">
      <p>Name</p>
      <p>Age</p>
      <p>Animal Compound</p>
    </div>
  </a>
  <a href="#" class="animal-card-link" data-modal="modal1">
    <div class="animal-card">
      <img src="https://via.placeholder.com/150" alt="Animal">
      <p>Name</p>
      <p>Age</p>
      <p>Animal Compound</p>
    </div>
  </a>
  <a href="#" class="animal-card-link" data-modal="modal1">
    <div class="animal-card">
      <img src="https://via.placeholder.com/150" alt="Animal">
      <p>Name</p>
      <p>Age</p>
      <p>Animal Compound</p>
    </div>
  </a>
  <a href="#" class="animal-card-link" data-modal="modal1">
    <div class="animal-card">
      <img src="https://via.placeholder.com/150" alt="Animal">
      <p>Name</p>
      <p>Age</p>
      <p>Animal Compound</p>
    </div>
  </a>
  <a href="#" class="animal-card-link" data-modal="modal1">
    <div class="animal-card">
      <img src="https://via.placeholder.com/150" alt="Animal">
      <p>Name</p>
      <p>Age</p>
      <p>Animal Compound</p>
    </div>
  </a>
  <a href="#" class="animal-card-link" data-modal="modal1">
    <div class="animal-card">
      <img src="https://via.placeholder.com/150" alt="Animal">
      <p>Name</p>
      <p>Age</p>
      <p>Animal Compound</p>
    </div>
  </a>
  <a href="#" class="animal-card-link" data-modal="modal1">
    <div class="animal-card">
      <img src="https://via.placeholder.com/150" alt="Animal">
      <p>Name</p>
      <p>Age</p>
      <p>Animal Compound</p>
    </div>
  </a>
  <a href="#" class="animal-card-link" data-modal="modal1">
    <div class="animal-card">
      <img src="https://via.placeholder.com/150" alt="Animal">
      <p>Name</p>
      <p>Age</p>
      <p>Animal Compound</p>
    </div>
  </a>
  <a href="#" class="animal-card-link" data-modal="modal1">
    <div class="animal-card">
      <img src="https://via.placeholder.com/150" alt="Animal">
      <p>Name</p>
      <p>Age</p>
      <p>Animal Compound</p>
    </div>
  </a>
  <a href="#" class="animal-card-link" data-modal="modal1">
    <div class="animal-card">
      <img src="https://via.placeholder.com/150" alt="Animal">
      <p>Name</p>
      <p>Age</p>
      <p>Animal Compound</p>
    </div>
  </a>
  <a href="#" class="animal-card-link" data-modal="modal1">
    <div class="animal-card">
      <img src="https://via.placeholder.com/150" alt="Animal">
      <p>Name</p>
      <p>Age</p>
      <p>Animal Compound</p>
    </div>
  </a>
  <a href="#" class="animal-card-link" data-modal="modal1">
    <div class="animal-card">
      <img src="https://via.placeholder.com/150" alt="Animal">
      <p>Name</p>
      <p>Age</p>
      <p>Animal Compound</p>
    </div>
  </a>
</div>
  <!-- Repeat for other cards -->

  <!-- MODAL OR POPUP FORMS -->
<div id="modal1" class="modal">
<div class="modal-content">
    <span class="close">&times;</span>
    <div class="image-section">
        <div class="images-grid">
            <a href="https://via.placeholder.com/500" class="image" data-lg-size="1200,800">
                <img src="https://via.placeholder.com/170" alt="image 1">
            </a>
            <a href="https://via.placeholder.com/500" class="image" data-lg-size="1200,800">
                <img src="https://via.placeholder.com/170" alt="Image 2">
            </a>
            <a href="https://via.placeholder.com/500" class="image" data-lg-size="1200,800">
                <img src="https://via.placeholder.com/170" alt="Image 3">
            </a>
            <a href="https://via.placeholder.com/500" class="image" data-lg-size="1200,800">
                <img src="https://via.placeholder.com/170" alt="Image 4">
            </a>
        </div>
        <div class="info-section">
            <div class="pet-info">
                <h2>Pet Information</h2>
                <ul>
                    <li><strong>Name:</strong></li>
                    <li><strong>Age:</strong></li>
                    <li><strong>Breed:</strong></li>
                    <li><strong>Color:</strong></li>
                    <li><strong>Distinctive features:</strong></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="medical-history">
        <h2><i class="fas fa-angle-right" style="color: var(--black);"></i> Medical History</h2>
        <p id="medical-history-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="description-section">
        <h2><i class="fas fa-angle-right" style="color: var(--black);"></i> Pet Description</h2>
        <p id="description-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="button-section">
        <button class="back-button">Back</button>
        <button class="apply-button" onclick="window.location.href='adoption.php'">Apply</button>
      </div>
</div>
</div>

  <!-- Repeat for other modals -->
<?php
include("footer.php");
?>
</section>
</div>

<script src="js/script.js"></script>
</body>
</html>
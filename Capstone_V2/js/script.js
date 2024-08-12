// Function to load external scripts
function loadScripts(scripts, callback) {
  var index = 0;

  function next() {
      if (index < scripts.length) {
          var script = document.createElement('script');
          script.src = scripts[index++];
          script.onload = next;
          document.head.appendChild(script);
      } else if (callback) {
          callback();
      }
  }

  next();
}

// Load necessary external scripts and then run your main script
loadScripts([
  'https://code.jquery.com/jquery-3.6.0.min.js',
  'https://cdn.jsdelivr.net/npm/lightgallery/dist/js/lightgallery.min.js',
  'https://cdn.jsdelivr.net/npm/lg-thumbnail/dist/lg-thumbnail.min.js',
  'https://cdn.jsdelivr.net/npm/lg-fullscreen/dist/lg-fullscreen.min.js'
], function() {
  // Main JS code

  /*=============== SHOW MENU ===============*/
  const navMenu = document.getElementById('nav-menu'),
      navToggle = document.getElementById('nav-toggle'),
      navClose = document.getElementById('nav-close');

  if (navToggle) {
      navToggle.addEventListener('click', () => {
          navMenu.classList.add('show-menu');
      });
  }

  if (navClose) {
      navClose.addEventListener('click', () => {
          navMenu.classList.remove('show-menu');
      });
  }

  /*=============== SEARCH ===============*/
  const search = document.getElementById('search'),
      searchBtn = document.getElementById('search-btn'),
      searchClose = document.getElementById('search-close');

  if (searchBtn) {
      searchBtn.addEventListener('click', () => {
          search.classList.add('show-search');
      });
  }

  if (searchClose) {
      searchClose.addEventListener('click', () => {
          search.classList.remove('show-search');
      });
  }

  /*=============== LOGIN ===============*/
  const login = document.getElementById('login'),
      loginBtn = document.getElementById('login-btn'),
      loginClose = document.getElementById('login-close');

  if (loginBtn) {
      loginBtn.addEventListener('click', () => {
          login.classList.add('show-login');
      });
  }

  if (loginClose) {
      loginClose.addEventListener('click', () => {
          login.classList.remove('show-login');
      });
  }

  // SIDE BAR
  const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");

  if (toggle) {
      toggle.addEventListener("click", () => {
          sidebar.classList.toggle("close");
      });
  }

  if (searchBtn) {
      searchBtn.addEventListener("click", () => {
          sidebar.classList.remove("close");
      });
  }

  if (modeSwitch) {
      modeSwitch.addEventListener("click", () => {
          body.classList.toggle("dark");

          if (body.classList.contains("dark")) {
              modeText.innerText = "Light mode";
          } else {
              modeText.innerText = "Dark mode";
          }
      });
  }

  document.addEventListener("DOMContentLoaded", function() {
      var modals = document.getElementById('loginModals');
      var loginLink = document.getElementById('loginLink');
      var closeButton = document.getElementsByClassName('close')[0];

      if (loginLink) {
          loginLink.onclick = function() {
              modals.style.display = 'block';
          };
      }

      if (closeButton) {
          closeButton.onclick = function() {
              modals.style.display = 'none';
          };
      }

      window.onclick = function(event) {
          if (event.target == modals) {
              modals.style.display = 'none';
          }
      };
  });

  // MODAL POPUP FORM
const cardLinks = document.querySelectorAll('.animal-card-link');

cardLinks.forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault();
        const modalId = this.getAttribute('data-modal');
        const modal = document.getElementById(modalId);

        if (modal) {
            modal.style.display = 'block';

            const closeButton = modal.querySelector('.close');
            const backButton = modal.querySelector('.back-button');

            const closeModal = () => {
                modal.style.display = 'none';
            };

            closeButton.addEventListener('click', closeModal);
            backButton.addEventListener('click', closeModal);

            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = 'none';
                }
            };
        }
    });
});

  

  // FOR ZOOM PIC IN MODAL VIEW PETS INFORMATION 
  $(document).ready(function() {
      function closeModal() {
          $('#modal1').hide();
      }

      $('#modal1 .images-grid').lightGallery({
          selector: '.image',
          download: false,
          counter: false,
          zoom: true,
          onCloseAfter: function() {
              closeModal();
          }
      });

      $('#modal1 .close').click(function() {
          closeModal();
      });

      $('.animal-card-link').click(function(e) {
          e.preventDefault();
          var modalId = $(this).data('modal');
          $('#' + modalId).show();
      });

      $(document).keyup(function(e) {
          if (e.key === "Escape") {
              closeModal();
          }
      });
  });
});


//Experiment 
document.addEventListener("DOMContentLoaded", function() {
    const images = document.querySelectorAll(".image-container img");
    images.forEach(img => {
        img.onload = function() {
            const loader = this.previousElementSibling;
            if (loader) {
                loader.style.display = 'none';
                this.style.display = 'block';
            }
        };
    });
});


//Media Queries





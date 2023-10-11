<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>IJ_Motors</title>
    <script>
      // On page load or when changing themes, best to add inline in `head` to avoid FOUC
      if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
          document.documentElement.classList.add('dark');
      } else {
          document.documentElement.classList.remove('dark')
      }
  </script>
</head>
<body>
    <header>
      <!-- NAVBAR -->
      <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand"><img src="./img/IJ.png" style="width: 80px;" alt=""></a>
          <form class="d-flex" role="search">
            <input id="searchInput" class="form-control me-2" type="text" placeholder="Search" aria-label="Search">
            <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
              <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
              <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
          </button>
          </form>
        </div>
      </nav>
<!-- PAGE D'ACCEUIL -->

<ul class="nav bg-body-tertiary justify-content-center">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="#">Active</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Cars</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Piece</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#contact">About us</a>
    </li>
  </ul>

  
<!-- CAROUSEL ACCEUIL -->
<!-- <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/cars/automobile-5330343_1280.jpg" class="d-block w-100" alt="De belles voitures">
      </div>
      <div class="carousel-item">
        <img src="img/cars/mclaren-4223024_1280.jpg" class="d-block w-100" alt="Des prix incroyables">
      </div>
      <div class="carousel-item">
        <img src="img/cars/lamborghini-2137815_1280.jpg" class="d-block w-100" alt="Votre prochain bolide">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div> -->
<!-- FIN ACCEUIL -->

</header>

<div class="products">
     <!-- Produit card-->

  <h4 style="text-align: center;">Nous avons une large gamme de produit </h4><br><Br>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100">
                <img src="img/cars/auto-788747_1280.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Cadillac 1990</h5>
                    <p class="card-text">Marque: <strong>Caillac</strong></p><br>
                    <p class="card-text">Prix: <strong style="color: blue;">1000000.00€</strong></p><br>
                    <p class="card-text">Couleur: <strong style="color: wheat;">Creme</strong></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="img/cars/lamborghini-2137815_1280.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Lamborghini Huracan</h5>
                    <p class="card-text">Marque: <strong>Lamborghini</strong></p><br>
                    <p class="card-text">Prix: <strong style="color: blue;">200000.00€</strong></p><br>
                    <p class="card-text">Couleur: <strong style="color: orange;">Orange</strong></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="img/cars/automobile-5330343_1280.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Porsche 911 turbo S</h5>
                    <p class="card-text">Marque: <strong>Porsche</strong></p><br>
                    <p class="card-text">Prix: <strong style="color: blue;">100000.00€</strong></p><br>
                    <p class="card-text">Couleur: <strong style="color: darkslategray;">Charbon</strong></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="img/cars/mclaren-4223024_1280.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Mclaren P1</h5>
                    <p class="card-text">Marque: <strong>McLaren</strong></p><br>
                    <p class="card-text">Prix: <strong style="color: blue;">100000.00€</strong></p><br>
                    <p class="card-text">Couleur: <strong style="color: orange;">Orange</strong></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="img/cars/automobile-5330343_1280.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">911 Turbo</h5>
                    <p class="card-text">Marque: <strong>Porsche</strong></p><br>
                    <p class="card-text">Prix: <strong style="color: blue;">100000.00€</strong></p><br>
                    <p class="card-text">Couleur: <strong style="color: gray;">Gris Métalisé</strong></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="img/cars/bugatti-la-voiture-noire.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">La voiture noire</h5>
                    <p class="card-text">Marque: <strong>Bugatti</strong></p><br>
                    <p class="card-text">Prix: <strong style="color: blue;">10000000.00€</strong></p><br>
                    <p class="card-text">Couleur: <strong style="color: black;">Noire</strong></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="img/cars/ford-mustang-gt.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Ford Mustang GT V12</h5>
                    <p class="card-text">Marque: <strong>Ford</strong></p><br>
                    <p class="card-text">Prix: <strong style="color: blue;">122000.00€</strong></p><br>
                    <p class="card-text">Couleur: <strong style="color: gray;">Gris custom ligne rouge</strong></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="img/cars/Mercedes-classe-a.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Mercedes Classe A</h5>
                    <p class="card-text">Marque: <strong>Mercedes Benz</strong></p><br>
                    <p class="card-text">Prix: <strong style="color: blue;">30000.00€</strong></p><br>
                    <p class="card-text">Couleur: <strong style="color: red;">Rouge</strong></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="img/cars/Lamborghini_Huracan_evo.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Lamborghini Huracan EVO</h5>
                    <p class="card-text">Marque: <strong>Lamborghini</strong></p><br>
                    <p class="card-text">Prix: <strong style="color: blue;">150000.00€</strong></p><br>
                    <p class="card-text">Couleur: rouge <strong style="color: orangered;">Rouge Orangé</strong></p>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- FOOTER -->
<!-- 
<footer class="bg-white dark:bg-gray-900">
  <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
      <div class="md:flex md:justify-between">
        <div class="mb-6 md:mb-0">
            <a href="#" class="flex items-center">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-blue">IJ MOTORS</span>
            </a>
        </div>
        <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
            <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                <ul class="text-gray-500 dark:text-gray-400 font-medium">
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Flowbite</a>
                    </li>
                    <li>
                        <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                <ul class="text-gray-500 dark:text-gray-400 font-medium">
                    <li class="mb-4">
                        <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                    </li>
                    <li>
                        <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                <ul class="text-gray-500 dark:text-gray-400 font-medium">
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
    <div id="contact" class="sm:flex sm:items-center sm:justify-between">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="#" class="hover:underline">Flowbite™</a>. All Rights Reserved.
        </span>
        <div class="flex mt-4 space-x-5 sm:justify-center sm:mt-0">
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                      <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                  </svg>
                <span class="sr-only">Facebook page</span>
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                      <path d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"/>
                  </svg>
                <span class="sr-only">Discord community</span>
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                  <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
              </svg>
                <span class="sr-only">Twitter page</span>
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
                </svg>
                <span class="sr-only">GitHub account</span>
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z" clip-rule="evenodd"/>
              </svg>
                <span class="sr-only">Dribbble account</span>
            </a>
        </div>
    </div>
  </div>
</footer>
 -->



<!-- **************************footer 2******************************************** -->
<footer class="footer-59391">
    <div class="border-bottom pb-5 mb-4">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-3">
            <form action="#" class="subscribe mb-4 mb-lg-0">
              <div class="form-group">
              <input type="email" class="form-control" placeholder="Enter your email">
              <button><span class="icon-keyboard_backspace"></span></button>
              </div>
            </form>
          </div>
          <div class="col-lg-6 text-lg-center">
            <ul class="list-unstyled nav-links nav-left mb-4 mb-lg-0">
              <li><a href="#">Features</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Pricing</a></li>
              <li><a href="#">Services</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
            <ul class="list-unstyled nav-links social nav-right text-lg-right">
              <li><a href="#"><span class="icon-twitter"></span></a></li>
              <li><a href="#"><span class="icon-instagram"></span></a></li>
              <li><a href="#"><span class="icon-facebook"></span></a></li>
              <li><a href="#"><span class="icon-pinterest"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4 text-lg-center site-logo order-1 order-lg-2 mb-3 mb-lg-0">
          <a href="#" class="m-0 p-0">IJ MOTORS</a>
        </div>
        <div class="col-lg-4 order-2 order-lg-1 mb-3 mb-lg-0">
          <ul class="list-unstyled nav-links m-0 nav-left">
            <li><a href="#">Terms</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
        
        <div class="col-lg-4 text-lg-right order-3 order-lg-3">
          <p class="m-0 text-muted"><small>&copy; 2023. All Rights Reserved.</small></p>
        </div>
      </div>
    </div>

</footer>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- **************************footer 2******END************************************** -->



<!-- FOOTER END -->
 
  <!-- POP UP -->
  
</body>
<script src="script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
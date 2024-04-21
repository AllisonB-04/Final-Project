<?php 
    // Check if the recipe query parameter is set to "buttermilk_pancakes"
        if (isset($_GET['recipe']) && $_GET['recipe'] === 'buttermilk_pancakes') {
            // Call the function to get the buttermilk pancakes recipe
            $buttermilkPancakesRecipe = getButtermilkPancakesRecipe();
}
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Home - Flavorful Bites</title>

<link href="<?=ROOT?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<style>
    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    
    .bi {
        vertical-align: -.125em;
        fill: currentColor;
    }
</style>
    
<!--header-->
<link href="<?=ROOT?>/assets/css/headers.css" rel="stylesheet">
</head>
    <body>
        <main>
            <nav class="py-2 bg-body-tertiary border-bottom">
                <div class="container d-flex flex-wrap">
                <ul class="nav me-auto">
                    <li class="nav-item"><a href="<?=ROOT?>/home" class="nav-link link-body-emphasis px-2 active" aria-current="page">Home</a></li>
                    <ul class="nav">
                    <style>
                        .nav-link.dropdown-toggle {
                            color: black; /* Change the color to black */
                            text-decoration: none; /* Remove underline */
                        }           
                    </style>
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Recipes</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Breakfast</a></li>
                        <li><a class="dropdown-item" href="#">Lunch</a></li>
                        <li><a class="dropdown-item" href="#">Dinner</a></li>
                        <li><a class="dropdown-item" href="#">Dessert</a></li>
                    </ul>
                    <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">Contact Us</a></li>
                </ul>
                <ul class="nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Settings</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?=ROOT?>/login">Login</a></li>
                            <li><a class="dropdown-item" href="<?=ROOT?>/signup">Sign Up</a></li>
                            <li><a class="dropdown-item" href="<?=ROOT?>/login">Log Out</a></li>
                            <li><a class="dropdown-item" href="<?= ROOT ?>/users">Users</a></li>
                        </ul>
                    </li>
                </ul>
                </div>
            </nav>
            <header class="py-3 border-bottom">
                <div class="container d-flex flex-wrap justify-content-center">
                    <a href="/" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
                        <img class="rounded bi me-2" src="<?=ROOT?>/assets/images/logo.png" alt="" width="400" height="175" style="object-fit: cover;">
                     </a>
                    <form class="col-12 col-lg-auto mb-3 mb-lg-0" role="search">
                        <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                    </form>
                </div>
            </header>
<!-- header--> 

<!--slider -->
        <style>
            body { background-color: #fff; color: #000; padding: 0; margin: 0; }
            .container { width: 900px; margin: auto; padding-top: 1em; }
            .container .ism-slider { margin-left: auto; margin-right: auto; }
        </style>

        <link rel="stylesheet" href="<?=ROOT?>/assets/slider/ism/css/my-slider.css"/>
        <script src="<?=ROOT?>/assets/slider/ism/js/ism-2.2.min.js"></script>

        <div class='container mb-2'>
        <div class="ism-slider" data-play_type="loop" id="my-slider">
            <ol>
                <li>
                    <img src="<?=ROOT?>/assets/slider/ism/image/slides/soup.png">
                </li>
                <li>
                    <img src="<?=ROOT?>/assets/slider/ism/image/slides/pizza.png">
                </li>
                <li>
                    <img src="<?=ROOT?>/assets/slider/ism/image/slides/spaghetti.png">
                </li>
                <li>
                    <img src="<?=ROOT?>/assets/slider/ism/image/slides/steak.png">
                </li>
            </ol>
        </div>
<!-- end slider --> 

<!-- featured recipes -->
<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
    }

    .bi {
        vertical-align: -.125em;
        fill: currentColor;
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }

    .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
    }

    .bd-mode-toggle {
        z-index: 1500;
    }

    .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
    }

</style>

        <div class="p-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
                <symbol id="aperture" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10"/>
                    <path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/>
                </symbol>
                <symbol id="cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </symbol>
                <symbol id="chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </symbol>
            </svg>

            <h2 class="mx-1">Featured Recipes</h2> 
            <div class="row my-4">
            <!-- post 1 -->
            <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success-emphasis">Breakfast</strong>
                <h3 class="mb-0">Buttermilk Pancakes</h3>
                <div class="mb-1 text-body-secondary">April 2</div>
                <?php if ($_GET['recipe'] === 'buttermilk_pancakes') : ?>
                    <?= getButtermilkPancakesRecipe() ?>
                <?php else : ?>
                    <p class="mb-auto">The Buttermilk Pancakes recipe provides step-by-step instructions for making fluffy and delicious pancakes.</p>
                    <a href="<?=ROOT?>/pancakes" class="icon-link gap-1 icon-link-hover stretched-link">
                        Continue to recipe
                        <svg class="bi"><use xlink:href="#chevron-right"/></svg>
                    </a>
                <?php endif; ?>
                </div>
                <div class="col-lg-auto d-none d-lg-block">
                <img class="bd-placeholder-img h-100" width="200" height="250" src="<?=ROOT?>/assets/images/pancakes.png">
            </div>
            </div>
            </div>
            <!-- end post 1 --> 

            <!-- post 2 --> 
            <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success-emphasis">Lunch</strong>
                <h3 class="mb-0">Chicken Sandwich</h3>
                <div class="mb-1 text-body-secondary">Dec 24</div>
                    <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                        Continue to recipe 
                        <svg class="bi"><use xlink:href="#chevron-right"/></svg>
                    </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                <img class="bd-placeholder-img h-100" width="200" height="250" src="<?=ROOT?>/assets/images/chickensandwich.png">
             </div>
            </div>
            </div>
            <!-- end post 2 --> 

            <!-- post 3 -->
            <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success-emphasis">Dinner</strong>
                <h3 class="mb-0">Christmas Dinner</h3>
                <div class="mb-1 text-body-secondary">Dec 24</div>
                    <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                        Continue to recipe 
                        <svg class="bi"><use xlink:href="#chevron-right"/></svg>
                    </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                <img class="bd-placeholder-img h-100" width="200" height="250" src="<?=ROOT?>/assets/images/xmasdinner.png">
             </div>
            </div>
            </div>
            <!-- end post 3 -->

            <!-- post 4 -->
            <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success-emphasis">Dessert</strong>
                <h3 class="mb-0"> Vanilla Cheesecake</h3>
                <div class="mb-1 text-body-secondary">Dec 24</div>
                    <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                        Continue to recipe 
                        <svg class="bi"><use xlink:href="#chevron-right"/></svg>
                    </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                <img class="bd-placeholder-img h-100" width="200" height="250" src="<?=ROOT?>/assets/images/cheesecake.png">
             </div>
            </div>
            </div>
            <!-- end post 4 -->

        </div>
<!-- end of featured posts--> 

<!-- footer --> 
  <div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="<?=ROOT?>/home" class="nav-link px-2 text-body-secondary">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Recipes</a></li>
      <li class="nav-item"><a href="<?=ROOT?>/login" class="nav-link px-2 text-body-secondary">Login</a></li>
      <li class="nav-item"><a href="<?=ROOT?>/signup" class="nav-link px-2 text-body-secondary">Signup</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Contact Us</a></li>
    </ul>
    <p class="text-center text-body-secondary">&copy; 2024 Flavorful Bites</p>
  </footer>
</div>
<!-- end of footer --> 

</main>
<script src="<?=ROOT?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    />
    <?php   wp_head();   ?>
  </head>

  <body>
  <header class="header py-5">
      <!-- Top Navbar -->
      <div class="container">
        <!-- Init display flex with class row -->
        <div class="row justify-content-center align-items-center">
          <div id="logo" class="col-md-4 col-8 mb-4 mb-md-0">
            <a class="navbar-brand" href="index.html">
              <img src="img/logo.svg" class="img-fluid" />
            </a>
          </div>
          <!-- logo -->
          <div id="menu" class="col-md-8">
            <nav
              class="navbar navbar-expand-md navbar-light justify-content-center"
            >
              <button
                class="navbar-toggler mb-4"
                data-toggle="collapse"
                data-target="#mainNavbar"
              >
                <!-- responsive menu -->
                <span class="navbar-toggler-icon"></span>
              </button>
              <!-- <div
                id="mainNavbar"
                class="collapse navbar-collapse justify-content-center justify-content-lg-end text-center text-uppercase"
              >
                <a href="nosotros.html" class="nav-link">Nosotros</a>
                <a href="blog.html" class="nav-link active">Blog</a>
                <a href="clases.html" class="nav-link">Clases</a>
                <a href="galeria.html" class="nav-link">Galería</a>
                <a href="contacto.html" class="nav-link">Contacto</a>
              </div> -->
              <!-- mainNavbar -->

              <?php
              $args = array(
                  'menu_class' => 'nav nav-justified flex-column flex-md-row text-center',
                  'container_id' => 'mainNavbar',
                  'container_class' => 'collapse navbar-collapse justify-content-center justify-content-lg-end text-uppercase text-center',
                  'theme_location' => 'main_menu'
              );
                wp_nav_menu($args)
              ?>

            </nav>
            <!-- navbar -->
          </div>
          <!-- menu -->
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </header>
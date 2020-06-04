<?php get_header(); 
  if (have_posts() ) :
    while (have_posts()) : the_post();
    /* printf ('<pre>%s</pre>', var_export(get_post_custom( get_the_ID()), true) ); debugging*/
    $textHero1 = get_post_meta( get_the_ID(), 'homepage_top_text_1', true);
    $textHero2 = get_post_meta( get_the_ID(), 'homepage_top_text_2', true);
    $imageHero1 = get_post_meta( get_the_ID(), 'homepage_image_1', true);
    $imageHero2 = get_post_meta( get_the_ID(), 'homepage_image_2', true);
    $bottomText = get_post_meta( get_the_ID(), 'homepage_bottom_text', true);
    $bottomImage = get_post_meta( get_the_ID(), 'homepage_bottom_image', true);
    $contacto = get_page_by_title('Contacto');
?>
    <div class="container-fluid main-images">
      <div class="row top-image image">
        <div class="col-md-6 bg-primary">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-sm-8 col-md-6">
              <div class="content text-center text-light py-3">
                <?php echo $textHero1; ?>
              </div>
              <!-- content -->
            </div>
            <!-- content col-sm-8 -->
          </div>
          <!-- content row -->
        </div>
        <!-- col-md-6 -->
        <div class="col-md-6 images-hero" style="background-image: url(<?php echo $imageHero1; ?>)">
        </div>
      </div>
      <!-- main top row -->
      <div class="row bottom-image image">
        <div class="col-md-6 bg-secondary">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-sm-8 col-md-6">
              <div class="content text-center py-3">
                <?php echo $textHero2; ?>
              </div>
              <!-- content -->
            </div>
            <!-- content col-sm-8 -->
          </div>
          <!-- content row -->
        </div>
        <!-- col-md-6 -->
        <div class="col-md-6 images-hero" style="background-image: url(<?php echo $imageHero2; ?>)"></div>
      </div>
      <!-- main bottom row -->
    </div>
    <!-- main container-fluid -->

    <div class="container">
      <section class="us mt-5">
        <h2 class="text-center mb-5 divider">
          ¿Por qué estudiar con nosotros?
        </h2>
        <div class="row">
          <div class="col-md-4 text-center information">
            <img
              src="img/icono_chef.png"
              alt="icono chef"
              class="img-fluid mb-3"
            />
            <h3>Chef's especialistas</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
          </div>
          <!-- First col-md-4 -->
          <div class="col-md-4 text-center information">
            <img
              src="img/icono_vino.png"
              alt="icono chef"
              class="img-fluid mb-3"
            />
            <h3>Incluye todo sobre bebidas</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
          </div>
          <!-- Second col-md-4 -->
          <div class="col-md-4 text-center information">
            <img
              src="img/icono_menu.png"
              alt="icono chef"
              class="img-fluid mb-3"
            />
            <h3>Siempre actualizado</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
          </div>
          <!-- Third col-md-4 -->
        </div>
      </section>
    </div>
    <!-- Us container -->

    <section class="classes mt-5 py-5">
      <h1 class="divider text-center mb-3">Próximas clases</h1>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="card mb-4">
              <img src="img/clase1.jpg" alt="clase1" class="card-img-top" />
              <div
                class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center"
              >
                <p class="m-0">20/Mayo/2020 18:00 hrs</p>
                <span class="badge badge-secondary p-2">$300</span>
              </div>
              <!-- card-meta -->
              <div class="card-body">
                <h3 class="card-title">Comida Italiana para principiantes</h3>
                <p class="card-subtitle mb-2">
                  Aprende las bases de la comida italiana con este curso
                </p>
                <p class="card-ext">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum
                  ex quis quasi veritatis officia, sed consectetur ea, alias
                  laboriosam.
                </p>
                <a href="clase.html" class="btn btn-primary d-block d-md-inline"
                  >Más información</a
                >
              </div>
            </div>
            <!-- card -->
          </div>
          <!-- grid col-md-6-->
          <div class="col-md-6 col-lg-4">
            <div class="card mb-4">
              <img src="img/clase2.jpg" alt="clase2" class="card-img-top" />
              <div
                class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center"
              >
                <p class="m-0">20/Mayo/2020 18:00 hrs</p>
                <span class="badge badge-secondary p-2">$300</span>
              </div>
              <!-- card-meta -->
              <div class="card-body">
                <h3 class="card-title">Comida Italiana para principiantes</h3>
                <p class="card-subtitle mb-2">
                  Aprende las bases de la comida italiana con este curso
                </p>
                <p class="card-ext">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum
                  ex quis quasi veritatis officia, sed consectetur ea, alias
                  laboriosam.
                </p>
                <a href="clase.html" class="btn btn-primary d-block d-md-inline"
                  >Más información</a
                >
              </div>
            </div>
            <!-- card -->
          </div>
          <!-- grid col-md-6-->
          <div class="col-md-6 col-lg-4">
            <div class="card mb-4">
              <img src="img/clase3.jpg" alt="clase3" class="card-img-top" />
              <div
                class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center"
              >
                <p class="m-0">20/Mayo/2020 18:00 hrs</p>
                <span class="badge badge-secondary p-2">$300</span>
              </div>
              <!-- card-meta -->
              <div class="card-body">
                <h3 class="card-title">Comida Italiana para principiantes</h3>
                <p class="card-subtitle mb-2">
                  Aprende las bases de la comida italiana con este curso
                </p>
                <p class="card-ext">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum
                  ex quis quasi veritatis officia, sed consectetur ea, alias
                  laboriosam.
                </p>
                <a href="clase.html" class="btn btn-primary d-block d-md-inline"
                  >Más información</a
                >
              </div>
            </div>
            <!-- card -->
          </div>
          <!-- grid col-md-6-->
          <div class="col-md-6 col-lg-4">
            <div class="card mb-4">
              <img src="img/clase4.jpg" alt="clase4" class="card-img-top" />
              <div
                class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center"
              >
                <p class="m-0">20/Mayo/2020 18:00 hrs</p>
                <span class="badge badge-secondary p-2">$300</span>
              </div>
              <!-- card-meta -->
              <div class="card-body">
                <h3 class="card-title">Comida Italiana para principiantes</h3>
                <p class="card-subtitle mb-2">
                  Aprende las bases de la comida italiana con este curso
                </p>
                <p class="card-ext">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum
                  ex quis quasi veritatis officia, sed consectetur ea, alias
                  laboriosam.
                </p>
                <a href="clase.html" class="btn btn-primary d-block d-md-inline"
                  >Más información</a
                >
              </div>
            </div>
            <!-- card -->
          </div>
          <!-- grid col-md-6-->
          <div class="col-md-6 col-lg-4">
            <div class="card mb-4">
              <img src="img/clase5.jpg" alt="clase5" class="card-img-top" />
              <div
                class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center"
              >
                <p class="m-0">20/Mayo/2020 18:00 hrs</p>
                <span class="badge badge-secondary p-2">$300</span>
              </div>
              <!-- card-meta -->
              <div class="card-body">
                <h3 class="card-title">Comida Italiana para principiantes</h3>
                <p class="card-subtitle mb-2">
                  Aprende las bases de la comida italiana con este curso
                </p>
                <p class="card-ext">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum
                  ex quis quasi veritatis officia, sed consectetur ea, alias
                  laboriosam.
                </p>
                <a href="clase.html" class="btn btn-primary d-block d-md-inline"
                  >Más información</a
                >
              </div>
            </div>
            <!-- card -->
          </div>
          <!-- grid col-md-6-->
          <div class="col-md-6 col-lg-4">
            <div class="card mb-4">
              <img src="img/clase6.jpg" alt="clase6" class="card-img-top" />
              <div
                class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center"
              >
                <p class="m-0">20/Mayo/2020 18:00 hrs</p>
                <span class="badge badge-secondary p-2">$300</span>
              </div>
              <!-- card-meta -->
              <div class="card-body">
                <h3 class="card-title">Comida Italiana para principiantes</h3>
                <p class="card-subtitle mb-2">
                  Aprende las bases de la comida italiana con este curso
                </p>
                <p class="card-ext">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum
                  ex quis quasi veritatis officia, sed consectetur ea, alias
                  laboriosam.
                </p>
                <a href="clase.html" class="btn btn-primary d-block d-md-inline"
                  >Más información</a
                >
              </div>
            </div>
            <!-- card -->
          </div>
          <!-- grid col-md-6-->
        </div>
        <!-- row -->
      </div>
      <!-- container classes -->
    </section>
    <!-- section classes -->

    <div class="school-subject" style="background-image: url(<?php echo $bottomImage ?>)">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-8">
            <div class="content text-center text-light">
              <?php echo $bottomText; ?>
              <a href="<?php echo get_permalink($contacto->ID)?>" class="btn btn-primary text-light">Más información</a>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php
  endwhile;
endif;
get_footer();

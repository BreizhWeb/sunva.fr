<?php wp_footer() ?>
<!-- Footer -->
<footer class="bg-dark  text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">

    <!-- Section: Text -->
    <section>
        <div class="row">
            <div class="col-6">
              <a class="navbar-brand" href="<?php echo home_url(); ?>">   <?php 
                $image = get_field('logoFooter');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" class="logoFooter" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
              </a>   
            </div>
            <div class="col-6">
                <p><a class="text-white" href="http://localhost/Sunva/contact/">02 99 01 03 22</a></p>
                <p><a class="text-white" href="http://localhost/Sunva/contact/">contact@sunva.fr</a></p>
                <p><a class="text-white" href="https://www.google.fr/maps/place/MyDigitalSchool+Vannes/@47.6777925,-2.8066197,17z/data=!3m1!4b1!4m5!3m4!1s0x48101fbbefdb17df:0xb65781705dcb27e5!8m2!3d47.677789!4d-2.802135">Rue des Dolimites - 56000 VANNES</p>
            </div>
        </div>
    </section>
    <!-- Section: Text -->


    <!-- Section: Social media -->
    <section class="mb-2">
       <!-- Facebook -->
       <a class="iconeHome" href="https://www.facebook.com/sunva.fr" role="button"><i class="fab fa-facebook-f"></i></a>

      <!-- Instagram -->
      <a class="iconeHome" href="https://www.instagram.com/sunva.fr/" role="button"><i class="fab fa-instagram"></i></a>

    </section>
    <!-- Section: Social media -->



    
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    © 2022 - Site créé par Adventure-studio -
    <a class="text-white" href="#">Mentions légales</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</body>
</html>
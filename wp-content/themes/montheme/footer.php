<?php wp_footer() ?>
<!-- Footer -->
<footer class="bg-dark  text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">

    <!-- Section: Text -->
    <section class="d-flex justify-content-center align-items-center">
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
                <p><a class="text-white" href="#">02 99 01 03 22</a></p>
                <p><a class="text-white" href="#">contact@sunva.fr</a></p>
                <p>35 Rue des Dolimites - 56000 VANNES</p>
            </div>
        </div>
    </section>
    <!-- Section: Text -->


    <!-- Section: Social media -->
    <section class="mb-2">
       <!-- Facebook -->
       <a class="btn btn-floating m-1 iconeHome" href="https://www.facebook.com/sunva.fr" role="button"><i class="fab fa-facebook-f"></i></a>

      <!-- Instagram -->
      <a class="btn btn-floating m-1 iconeHome" href="https://www.instagram.com/sunva.fr/" role="button"><i class="fab fa-instagram"></i></a>

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
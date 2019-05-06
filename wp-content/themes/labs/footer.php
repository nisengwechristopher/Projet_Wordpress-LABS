
    <!-- Contact section -->
    <div class="contact-section spad fix">
      <div class="container">
        <div class="row">
          <!-- contact info -->
          <div class="col-md-5 col-md-offset-1 contact-info col-push">
            <div class="section-title left">
              <h2><?= get_theme_mod('setting-footer-title'); ?></h2>
            </div>
            <p><?= get_theme_mod('setting-footer-us'); ?></p>
            <h3 class="mt60">Main Office</h3>
            <p class="con-item">C/ Libertad, 34 <br> 05200 Arévalo </p>
            <p class="con-item">0034 37483 2445 322</p>
            <button class="customize-partial-edit-shortcut-button"></button>
            <p class="con-item"><?= get_theme_mod('setting-footer-mail'); ?></p>
          </div>
          <!-- contact form -->
          <div class="col-md-6 col-pull">
            <form class="form-class" id="con_form">
              <div class="row">
                <div class="col-sm-6">
                  <input type="text" name="name" placeholder="Your name">
                </div>
                <div class="col-sm-6">
                  <input type="text" name="email" placeholder="Your email">
                </div>
                <div class="col-sm-12">
                  <input type="text" name="subject" placeholder="Subject">
                  <textarea name="message" placeholder="Message"></textarea>
                  <button class="site-btn">send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact section end-->


    <!-- Footer section -->
    <footer class="footer-section">
      <h2>2017 All rights reserved. Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></h2>
    </footer>
    <!-- Footer section end -->

    <?php
      wp_footer();
    ?>
  </body>
</html>
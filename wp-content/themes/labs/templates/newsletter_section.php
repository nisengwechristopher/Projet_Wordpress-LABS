  <!-- newsletter section -->
  <div class="newsletter-section spad">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h2>Newsletter</h2>
        </div>
        <div class="col-md-9">
          <!-- newsletter form -->
          <form class="nl-form" >
            <input type="text" placeholder="Your e-mail here" name="email_address">
            <!-- <button class="site-btn btn-2" type="submit">Newsletter</button> -->
          </form>
          <a class="site-btn btn-2" href="<?= get_permalink( get_page_by_path( 'subscribers' ) ) ?>">Newsletter</a>
        </div>
      </div>
    </div>
  </div>
  <!-- newsletter section end-->
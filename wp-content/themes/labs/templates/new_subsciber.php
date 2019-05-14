<!-- New subscriber section -->
<div class="subscriber-section">
    <span class="congrats"><i class="fas fa-check fa-10x"></i></span>
    <h2><?= __('Congratulations !! You are now subscribed to our newsletter.') ?></h2>
    <p><?= __('For more informations check your inbox') ?></p>
    <p><?= $_GET['newsletter_email']; ?></p>
    <a class="site-btn" href="<?= get_permalink( get_page_by_path( 'services' ) ) ?>"><span><i class="fas fa-hand-point-left"></i></span><?= __(' ..Back to site') ?></a>
</div>
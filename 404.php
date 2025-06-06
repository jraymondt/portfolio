<?php include('includes/header.php'); ?>

<main class="error-page">
  <section class="container">
    <div class="dialog">
      <h1 class="text-red">404</h1>
      <h2>Page Not Found</h2>
      <p>Oops! The page you're looking for seems to have wandered off.</p>
      <div class="service-icon">
        <i class="fas fa-error"></i>
      </div>
      <div class="error-actions">
        <a href="<?php echo $baseUrl; ?>" class="bb-button orange rounded">
          <i class="fas fa-home"></i>
          <span>Return Home</span>
        </a>
        <br><br>
        <a href="contact.php" class="bb-button orange rounded">
          <i class="fas fa-envelope"></i>
          <span>Contact Me</span>
        </a>
      </div>
      
      <div class="error-illustration">
        <!-- You could add an SVG or image here that matches your portfolio style -->
      </div>
    </div>
  </section>
</main>

<?php include('includes/footer.php'); ?>
<?php
 
// Get current page filename
$current_page = basename($_SERVER['PHP_SELF']); 
?>
<nav class="navbar">
  <div class="logo-container">
    <a href="index.php">
      <img src="images/buddy.png" alt="buddha logo" class="logo-image">
    </a>
  </div>
  <h1 class="mobile-title">JamesRThompson</h1>
  <ul class="nav-links">
    <?php foreach ($nav_items as $item): ?>
      <li>
        <a href="<?php echo $item['url']; ?>"
           <?php if ($current_page == $item['url']) echo 'class="active"'; ?>>
          <?php echo $item['title']; ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
  
  <div class="burger">
    <div class="line1"></div>
    <div class="line2"></div>
    <div class="line3"></div>
  </div>
</nav>
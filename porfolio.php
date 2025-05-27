<?php
$page_title = "JRT - portfolio";
$page_description = "Portfolio projects by James Raymond Thompson";
$page_keywords = "web development, portfolio, projects, HTML, CSS, JavaScript";
include 'includes/header.php';
include 'includes/navbar.php';
?>
<main>
  <div class="wrapper">
    <h2>👾 so far so good 🌖</h2>
    <div class="gallery">
      <?php
      // Array of portfolio items
      $portfolio_items = [
        ['img' => 'images/kittyvelourweb.png', 'url' => 'https://jraymondt.com/blog', 'title' => 'Kitty Velour', 'alt' => 'website'],
        ['img' => 'images/Herald.png', 'url' => 'https://jraymondt.com/blog', 'title' => 'Herald', 'alt' => 'website'],
        ['img' => 'images/JRToys.png', 'url' => 'https://jraymondt.com/blog', 'title' => 'JR Toys', 'alt' => 'JR toy website'],
        ['img' => 'images/Strawberry.png', 'url' => 'https://jraymondt.com/blog', 'title' => 'Strawberry', 'alt' => 'website'],
        ['img' => 'images/jrt.png', 'url' => 'https://jraymondt.com/blog', 'title' => 'JRT', 'alt' => 'website'],
        ['img' => 'images/windsor_hotel.png', 'url' => 'https://jraymondt.com/blog', 'title' => 'Windsor Hotel', 'alt' => 'website']
      ];
      
      // Generate portfolio cards
      foreach ($portfolio_items as $item) {
        echo '<div class="container">';
        echo '<a href="' . $item['url'] . '" target="_blank" rel="noopener" title="' . $item['title'] . '">';
        echo '<img src="' . $item['img'] . '" alt="' . $item['alt'] . '">';
        echo '</a>';
        echo '</div><!--end container -->';
      }
      ?>
    </div><!--end gallery-->
    
    <!-- Additional content here -->
  </div><!--end wrapper-->
</main>
<?php include 'includes/footer.php'; ?>
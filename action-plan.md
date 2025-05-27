# conversion rights

## Migrating HTML Portfolio to PHP Website

To migrate your HTML portfolio to a PHP website, you'll need to:

1. Restructure your files to leverage PHP's templating capabilities
2. Convert static HTML to dynamic PHP components
3. Maintain your existing CSS and JavaScript functionality

Here's a comprehensive approach to migrate your portfolio:

## 1. Create a PHP Structure

Start by setting up a basic PHP structure:

/portfolio/
├── includes/         # For reusable components
│   ├── header.php
│   ├── navbar.php
│   ├── footer.php
│   └── config.php    # Site configuration
├── assets/           # Static assets
│   ├── css/
│   ├── js/
│   └── images/
├── index.php         # Home page
├── about.php
├── portfolio.php
├── contact.php
└── .htaccess         # URL rewriting (optional)

## 2. Create a Configuration File

First, create a `config.php` file to store site-wide variables:

```php
<?php
// Site configuration
$site_title = "James Raymond Thompson";
$site_description = "Personal Portfolio";
$site_author = "James Raymond Thompson";
$site_url = "https://jraymondt.com";

// Page metadata (can be overridden per page)
$page_title = "JRT - home";
$page_description = "Personal Portfolio";
$page_keywords = "Personal portfolio, front end, web development";

// Navigation items
$nav_items = [
    ['url' => 'index.php', 'title' => 'Home'],
    ['url' => 'about.php', 'title' => 'About'],
    ['url' => 'portfolio.php', 'title' => 'Portfolio'],
    ['url' => 'contact.php', 'title' => 'Contact']
];
?>
```

## 3. Create Reusable Components

### Header Component

```php
<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title><?php echo $page_title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=B612:wght@400;700&display=swap" rel="stylesheet">
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="keywords" content="<?php echo $page_keywords; ?>">
    <meta name="author" content="<?php echo $site_author; ?>">
    <meta name="robots" content="index,follow">
    <link rel="icon" href="images/logo.svg">
    <meta property="og:title" content="<?php echo $site_title; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $site_url; ?>">
    <meta property="og:image" content="<?php echo $site_url; ?>/images/best_can.png">
    <meta property="og:description" content="<?php echo $site_title; ?>: Personal Portfolio">
    <meta property="og:locale" content="en_AU">
    <meta property="og:locale:alternate" content="en_GB">
    <meta property="og:site_name" content="<?php echo $site_title; ?>">
  </head>
  <body>
```

### Navigation Component

```php
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
```

### Footer Component

```php
<?php

<div id="footer-wrap"><!--start footer-wrap-->
  <footer>
    <div class="footer-column footer-profile">
      <p>
        <a href="mailto:james@jraymondt.com">james</a></p>
      <p>
      <div class="avatar bg-pale-red">
        <a href="https://jraymondt.com/blog" target="_blank" rel="noopener">
          <img src="images/avatar2025-sml.png" alt="bob a tar">
        </a>  
      </div>
      <p>
        <a href="mailto:james@jraymondt.com">jraymondt.com</a></p>
      <p>
    </div><!-- ugly dial-->
    <div class="footer-column footer-social"><!-- socials -->
        <a href="https://jraymondt.com/blog" target="_blank" rel="noopener"><h3>Follow me</h3></a>
        <div class="social-icons">
          <a href="https://github.com/jraymondt" target="_blank" rel="noopener" title="GitHub">
          <i class="fa fa-github"></i></a>
          <a href="https://linkedin.com/in/jraymondt" target="_blank" rel="noopener" title="LinkedIn">
          <i class="fa fa-linkedin"></i></a>
          <a href="https://instagram.com/jraymondt" target="_blank" rel="noopener" title="Instagram">
          <i class="fa fa-instagram"></i></a>
        </div>
      </div>
    <!-- ontact olumn -->
    <div class="footer-column footer-contact">
      <a href="contact.php"><h3>Contact</h3></a>
      <p>James Raymond Thompson</p>
      <p>Morley, Western Australia</p>
      <a href="tel:+61406642114">
      <i class="fa fa-phone"></i> 040 66 42 114</a>
    </div>
  </footer>
</div><!-- end footer-wrap-->
<script src="js/navbar.js"></script>
<script src="js/copydate.js"></script>
<script src="js/errorMessages.js"></script>
<script src="js/register.js"></script>
<script src="js/validation.js"></script>
<script src="https://kit.fontawesome.com/18d6f5b67f.js" crossorigin="anonymous"></script>
</body>
</html>
```

## 4. Convert Main Pages

### Index Page

```php

<?php
$page_title = "JRT - home";
$page_description = "Personal Portfolio of James Raymond Thompson";
$page_keywords = "Personal portfolio, front end, web development, HTML, CSS, JavaScript";
include 'includes/header.php';
include 'includes/navbar.php';
?>

<main>
  <div class="wrapper">
    <h2 class="title">🚎 Welcome Earth Humanoids 🚎</h2>        
    <div class="welcome">
      <div class="profile-card">
        <div id="mug"></div>
        <p id="name">JimBob</p>
        <p id="title">Front End Web Student</p>
        <div id="descParent">
          <div class="desc">Makes stuff with code 👨🏻‍💻</div>
          <div class="desc">Makes stuff with hands 🤘🏻</div>
          <div class="desc">Web tech enthusiast</div>
        </div>
        <a id="btn" href="resources/2025_APRIL_JRT-web.pdf" target="_blank"><i class="fa fa-download"></i> resume </a>
      </div>
      
      <h2 class="skills-head">Skills</h2>
      <div class="services-grid">
        <?php
        // Array of skill cards for easier maintenance
        $skills = [
          ['icon' => '🎨', 'title' => 'Web Design', 'description' => 'Coding my tits off like a champ'],
          ['icon' => '💻', 'title' => 'Development', 'description' => 'Clean, things take time!'],
          ['icon' => '👾', 'title' => 'HTML', 'description' => 'HTML5, CSS3, JavaScript, SASS, Bootstrap, Wordpress, PHP, MySQL, Astro, Laravel'],
          ['icon' => '🧘🏻‍♂️', 'title' => 'Tools', 'description' => 'VSCode, Git, GitHub, Figma, Gimp, Photoshop, Excel, Power-BI'],
          ['icon' => '🚀', 'title' => 'Languages', 'description' => 'English (getting there), Japanese (barely)'],
          ['icon' => '🐝', 'title' => 'Soft Skills', 'description' => 'Problem-work, Comms with talk box, People Solving'],
          ['icon' => '💰', 'title' => 'Hobbies', 'description' => 'Real world activities, Art - misc, Cooking, Bloggins / webDev'],
          ['icon' => '🚎', 'title' => 'Education', 'description' => 'Cert IV of FrontEnd Web Dev (2021)<br>Diploma of FrontEnd Web Dev (2025)']
        ];
        
        // Generate skill cards dynamically
        foreach ($skills as $skill) {
          echo '<div class="service-card">';
          echo '<div class="service-icon">' . $skill['icon'] . '</div>';
          echo '<h3>' . $skill['title'] . '</h3>';
          echo '<p>' . $skill['description'] . '</p>';
          echo '</div>';
        }
        ?>
      </div><!--end skills-->  
      
      <div class="box-black">
        <p>
          <h3>Episode IX: In progress</h3>
          <br>
        <p>
          Diploma of Front End Web Development, versed in many things master of none. I have dabbled in some IT help desk and many other professions, since the courier times, I am dedicated to web development, I am keen to push my creative potential to a non-logical extreme. 🚀👾🌖👨🏻‍🚀
        </p>
      </div>
    </div><!--end welcome-->
  </div><!--end wrapper-->  
</main>

<?php include 'includes/footer.php'; ?>
```

### Portfolio Page Example

```php
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
```

## 5. Create .htaccess File (Optional)

For clean URLs without `.php` extension:

```apache
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^([^\.]+)$ $1.php [NC,L]

# Handle 404 errors
ErrorDocument 404 /err404.php
```

## 6. Additional PHP Features to Consider

1. **Contact Form Processing**:
   Convert your contact form to use PHP for processing submissions:

```php
// In contact.php
<?php
$success_message = '';
$error_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
    $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
    
    if (!empty($name) && !empty($email) && !empty($subject)) {
        // Email content
        $to = "james@jraymondt.com";
        $email_subject = "Portfolio Contact: $subject";
        $email_body = "You have received a message from your website.\n\n";
        $email_body .= "Name: $name $lastname\n";
        $email_body .= "Email: $email\n\n";
        $email_body .= "Message:\n$subject\n";
        
        // Send email
        if (mail($to, $email_subject, $email_body)) {
            $success_message = "Thank you! Your message has been sent.";
            // Clear form values after successful submission
            $_POST = array();
        } else {
            $error_message = "Sorry, there was an error sending your message.";
        }
    } else {
        $error_message = "Please fill in all required fields.";
    }
}
?>
```

## 7. **Dynamic Projects Page**

   Store projects in an array or database for easier management:

```php
<?php
// Project data could be stored in a database or separate PHP file
$projects = [
    [
        'id' => 'kitty-velour',
        'title' => 'Kitty Velour',
        'image' => 'images/kittyvelourweb.png',
        'url' => 'https://kittyvelour.com.au',
        'description' => 'E-commerce website for a cat accessories brand.',
        'technologies' => ['HTML5', 'CSS3', 'JavaScript', 'PHP']
    ],
    // More projects...
];

// You could then have individual project pages:
// project.php?id=kitty-velour
if (isset($_GET['id'])) {
    $project_id = $_GET['id'];
    $current_project = null;
    
    foreach ($projects as $project) {
        if ($project['id'] === $project_id) {
            $current_project = $project;
            break;
        }
    }
    
    if ($current_project) {
        // Display project details
    } else {
        // Project not found, redirect
        header('Location: portfolio.php');
        exit;
    }
}
?>
```

## Implementation Tips

1. Start by converting one page at a time, testing thoroughly before moving to the next
2. Keep all your existing CSS, JavaScript, and image files in their current locations
3. Use PHP includes for repeated elements to make maintenance easier
4. Add dynamic features gradually to ensure everything works as expected
5. Consider using a simple CMS like Kirby or Grav if you want more advanced content management

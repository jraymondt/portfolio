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
      
      <div class="dialog">
        <h3>Episode IX: In progress</h3>
          <br>
        <p>
          Diploma of Front End Web Development, versed in many things master of none. I have dabbled in some IT help desk and many other professions, since the courier times, I am dedicated to web development, I am keen to push my creative potential to a non-logical extreme. 🚀👾🌖👨🏻‍🚀
        </p>  
      </div><!--end dialog-->
    </div><!--end welcome-->
  </div><!--end wrapper-->  
</main>

<?php include 'includes/footer.php'; ?>
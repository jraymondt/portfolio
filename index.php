<?php
$page_title = "JRT - home";
$page_description = "Personal Portfolio of James Raymond Thompson";
$page_keywords = "Personal portfolio, front end, web development, HTML, CSS, JavaScript";
include 'includes/header.php';
include 'includes/navbar.php';
?>

<main>
    <section id="welcome" class="wrapper">
        <div class="geometric-separator"></div>

        <h1>🚎 WELCOME 👾 HUMANOIDS</h1>
        <p class="subtitle">jimBob</p>
        <p class="subtitle">frontEnd webDev</p>

        <div class="description">
            <p>MAKES STUFF WITH 01</p>
            <p>MAKES STUFF WITH HANDS</p>
            <p>LIFE ENTHUSIAST</p>
        </div>

        <a href="#" class="button">DOWNLOAD RESUME</a>

        <div class="geometric-separator"></div>
    </section>

    <section class="skills">
        <?php 
        // Array of skill cards with geometric icons
        $skills = [
            ['icon_class' => 'design', 'title' => 'Web Design', 'description' => 'Coding my tits off like a champ'],
            ['icon_class' => 'development', 'title' => 'Development', 'description' => 'Clean, things take time!'],
            ['icon_class' => 'html', 'title' => 'HTML', 'description' => 'HTML5, CSS3, JavaScript, SASS, Bootstrap, Wordpress, PHP, MySQL, Astro, Laravel, React, NEXTjs'],
            ['icon_class' => 'tools', 'title' => 'Tools', 'description' => 'VSCode, Git, GitHub, Figma, Gimp, Photoshop, Excel, Power-BI'],
            ['icon_class' => 'languages', 'title' => 'Languages', 'description' => 'English (getting there), Japanese (barely)'],
            ['icon_class' => 'soft', 'title' => 'Soft Skills', 'description' => 'Problem-work, Comms with talk box, People Solving'],
            ['icon_class' => 'hobbies', 'title' => 'Hobbies', 'description' => 'Real world activities, Art - misc, Cooking, Bloggins / webDev'],
            ['icon_class' => 'education', 'title' => 'Education', 'description' => 'Cert IV of FrontEnd Web Dev (2021)<br>Diploma of FrontEnd Web Dev (2025)']
        ];

        // Generate skill cards dynamically
        foreach ($skills as $skill) {
            echo '<div class="skill-box">';
            echo '<div class="skill-icon ' . $skill['icon_class'] . '"></div>';
            echo '<h3>' . $skill['title'] . '</h3>';
            echo '<p>' . $skill['description'] . '</p>';
            echo '</div>';
        }
        ?>
    </section>

    <div class="geometric-separator"></div>

    <section id="starwar">
        <h3>Episode IX: In Progress</h3>
        <p>
            Diploma of Front End Web Development, versed in many things master of none. I have dabbled in some IT help desk and many other professions, since the courier times, I am dedicated to web development, I am keen to push my creative potential to a non-logical extreme.
        </p>
    </section>

    <div class="geometric-separator"></div>
</main>

<?php include 'includes/footer.php'; ?>
<?php

$page_title = "JRT - contact";
$page_description = "Contact Jimbob for front-end development opportunities or collaborations.";
$page_keywords = "Personal portfolio, front end, web development, HTML, CSS, JavaScript, Tailwind CSS, contact, email, opportunities";
include 'includes/header.php';
include 'includes/navbar.php';
?>
    <main>
        <div class="wrapper">
            <h2>🚀  contact 5x5  🚀</h2>
            <div class="dialog">
                <p>I'm always open to new opportunities and collaborations. Whether you're looking for a front-end developer, a web designer, or just want to chat about tech, feel free to reach out!</p>
                <br><br>
                <p>I'm currently studying but looking for a new role, so if you have any leads or opportunities, please let me know!</p>
                <br>
                <p>Contact me via the form below or</p> 
                <br><br>
                    <a href="mailto:james@jraymondt.com" class="bb-button orange rounded"></a>
                <br><br>            
                <p>Alternatively, you can fill out the privacy friendly form that definitely doesn't harvest all your souls and make you start at the begining of the map. Form below:↓ ↓ ↓</p>              
                <div class="form-container">
                    <form method="post" action="process_contact.php">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input class="bb-input orange" type="text" id="name" name="name" minlength="2" required title="Please enter at least 2 characters">
                            <span class="input-hint">* Min 2 characters</span>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="bb-input orange" type="email" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="message">Message for the 🐍 server 🍄🍄 </label>
                            <textarea class="bb-input orange" id="message" name="message" minlength="2" required title="Please enter at least 10 characters"></textarea>
                            <span class="input-hint">* Min 10 characters</span>
                        </div>
                        <input class="bb-button orange rounded" type="submit" value="Send Message">
                    </form>
                </div>
                <br>
                <section class="qr-gallery">
                    <h2>Graduation QR Gallery</h2>
                    <div class="qr-grid">
                        <!-- Card 1: LinkedIn -->
                        <article class="qr-card" data-real="LinkedIn profile">
                            <img src="assets/images/qr-linkedin.png" alt="LinkedIn QR">
                            <h3 class="qr-caption">Final Boss Fight: LinkedIn</h3>
                            <p class="qr-meta">Career mode · +10 anxiety</p>
                        </article>

                        <!-- Card 2: Portfolio home -->
                        <article class="qr-card" data-real="Portfolio home page">
                            <img src="assets/images/qr-portfolio.png" alt="Portfolio QR">
                            <h3 class="qr-caption">Enter the Skill Dungeon</h3>
                            <p class="qr-meta">Loot: projects, case studies</p>
                        </article>

                        <!-- Card 3: Demo reel -->
                        <article class="qr-card" data-real="Demo reel">
                            <img src="assets/images/qr-reel.png" alt="Demo reel QR">
                            <h3 class="qr-caption">Unskippable Cutscene</h3>
                            <p class="qr-meta">Runtime: short, promise</p>
                        </article>
                    </div>

                    <!-- optional tiny legend -->
                    <p class="qr-legend">
                        These are the same QR codes used at my grad showcase. Click to open,
                        or scan them on your phone for the “real” experience. 
                        <sub>**real experience is subjective and may be contigent on astrological objects ruining your day</sub>
                    </p>
                </section>

                <br>
                <p>Or connect with me on social media:</p>
                <div class="social-links">
                    <a href="https://linkedin.com/in/jraymondt" target="_blank" rel="noopener noreferrer" class="bb-button blue rounded">LinkedIn</a>
                    
                    <a href="https://github.com/jraymondt" target="_blank" rel="noopener noreferrer" class="bb-button blue rounded">GitHub</a>
                    
                    <a href="https://x.com/jraymondt" target="_blank" rel="noopener noreferrer" class="bb-button orange rounded">Cooked</a>
                    
                    <a href="https://www.instagram.com/jraymondt" target="_blank" rel="noopener noreferrer" class="bb-button pink rounded">Insta</a>
                    
                    <a href="https://www.tiktok.com/@jraymondt" target="_blank" rel="noopener noreferrer" class="bb-button purple rounded">TokTok</a>
                    
                    <a href="https://www.youtube.com/@jraymondt" target="_blank" rel="noopener noreferrer" class="bb-button red rounded">Tubes</a>
                    
                    <a href="https://www.twitch.tv/jraymondt" target="_blank" rel="noopener noreferrer" class="bb-button purple rounded">Twitch</a>
                    
                    <a href="https://www.facebook.com/jraymondt" target="_blank" rel="noopener noreferrer" class="bb-button blue rounded">Facecook</a>
                </div>
            </div><!--end dialog-->       
        </div><!--end wrapper-->
    </main>
<?php include 'includes/footer.php'; ?>
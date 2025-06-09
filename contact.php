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
                    <a href="mailto:james@jraymondt.com">
                    <button class="bb-button orange rounded"> email </button>
                    </a>
                <br><br>            
                <p>Alternatively, you can fill out the privacy friendly form that definitely doesn't harvest all your souls and make you start at the begining of the map. Form below:↓ ↓ ↓</p>              
                <div class="form-container">
                    <form method="post" action="process_contact.php">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input class="bb-input orange" type="text" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="bb-input orange" type="email" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="bb-input orange" id="message" name="message"></textarea>
                        </div>
                        <input class="bb-button orange rounded" type="submit" value="Send Message">
                    </form>
                </div>
                <br><br>
                <p>Or connect with me on social media:</p>
                <div class="social-links">
                    <a href="https://linkedin.com/in/jraymondt" target="_blank" rel="noopener noreferrer">
                        <button class="bb-button blue rounded">LinkedIn</button>
                    </a>
                    <a href="https://github.com/jraymondt" target="_blank" rel="noopener noreferrer">
                        <button class="bb-button blue rounded">GitHub</button>
                    </a>
                    <a href="https://x.com/flatlinejim" target="_blank" rel="noopener noreferrer">
                        <button class="bb-button orange rounded">Cooked</button>
                    </a>
                    <a href="https://www.instagram.com/jraymondt/" target="_blank" rel="noopener noreferrer">
                        <button class="bb-button pink rounded">Insta</button>
                    </a>
                    <a href="https://www.tiktok.com/@jraymondt" target="_blank" rel="noopener noreferrer">
                        <button class="bb-button purple rounded">TokTok</button>
                    </a>
                    <a href="https://www.youtube.com/@jraymondt" target="_blank" rel="noopener noreferrer">
                        <button class="bb-button red rounded">Tubes</button>
                    </a>
                    <a href="https://www.twitch.tv/jraymondt" target="_blank" rel="noopener noreferrer">
                        <button class="bb-button purple rounded">Twitch</button>
                    </a>
                    <a href="https://www.facebook.com/jraymondt" target="_blank" rel="noopener noreferrer">
                        <button class="bb-button blue rounded">Facecook</button>
                    </a>    
                </div>
            </div><!--end dialog-->       
        </div><!--end wrapper-->
    </main>
<?php include 'includes/footer.php'; ?>
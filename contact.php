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
                <div class="form-container">
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input class="bb-input orange" type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="bb-input orange" type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="bb-input orange" id="message" name="message" required></textarea>
                        </div>
                        <input class="bb-button orange rounded" type="submit" value="Send Message">
                    </form>
                </div><!--end form-container-->    
            </div><!--end dialog-->    
        </div><!--end wrapper-->
    </main>
<?php include 'includes/footer.php'; ?>
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
                            <label for="firstName">First Name</label>
                            <input class="bb-input orange" type="text" id="firstName" name="firstName" class="bb-input orange" required>
                            <div id="firstName_error" class="error-message"></div>
                            <div id="firstName_correct" class="success-message"></div>
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input class="bb-input orange" type="text" id="lastName" name="lastName" class="bb-input orange" required>
                            <div id="lastName_error" class="error-message"></div>
                            <div id="lastName_correct" class="success-message"></div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input class="bb-input orange" type="email" id="email" name="email" class="bb-input orange" required>
                            <div id="email_error" class="error-message"></div>
                            <div id="email_correct" class="success-message"></div>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input class="bb-input orange" type="tel" id="phone" name="phone" class="bb-input orange" 
                                   title="Enter your phone number (e.g., 123-456-7890)" required>
                            <div id="phone_error" class="error-message"></div>
                            <div id="phone_correct" class="success-message"></div>
                        </div>
                        <div class="form-group">
                            <label for="city">City/Suburb</label>
                            <input class="bb-input orange" type="text" id="city" name="city" class="bb-input orange" required>
                            <div id="city_error" class="error-message"></div>
                            <div id="city_correct" class="success-message"></div>
                        </div>
                        <div class="form-group">
                            <label for="state">State</label>
                            <select id="state" name="state" class="bb-input orange" required>
                                <option value="">Select your state</option>
                                <option value="NSW">New South Wales</option>
                                <option value="VIC">Victoria</option>
                                <option value="QLD">Queensland</option>
                                <option value="WA">Western Australia</option>
                                <option value="SA">South Australia</option>
                                <option value="TAS">Tasmania</option>
                                <option value="ACT">Australian Capital Territory</option>
                                <option value="NT">Northern Territory</option>
                            </select>
                            <div id="state_error" class="error-message"></div>
                            <div id="state_correct" class="success-message"></div>
                        </div>
                        <div class="form-group">
                            <label for="zip">Post Code</label>
                            <input class="bb-input orange" type="text" id="zip" name="zip" class="bb-input orange" 
                                   pattern="[2-7][0-9]{3}" maxlength="4" required>
                            <div id="zip_error" class="error-message"></div>
                            <div id="zip_correct" class="success-message"></div>
                        </div>
                        <div class="form-progress">
                            <div id="formProgress" class="progress-fill" data-progress="0%"></div>
                        </div>
                        <div class="form-group checkbox-group">
                            <label for="terms" class="checkbox-label">
                                <input type="checkbox" id="terms" name="terms" required>
                                <span class="checkmark"></span>
                                I agree to the terms and conditions
                            </label>
                            <div id="terms_error" class="error-message"></div>
                        </div>
                        <input class="bb-button orange rounded" type="submit" value="Send Message">
                    </form>
                </div><!--end form-container-->    
            </div><!--end dialog-->    
        </div><!--end wrapper-->
    </main>
<?php include 'includes/footer.php'; ?>
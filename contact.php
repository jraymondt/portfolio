<?php

$page_title = "JRT - home";
$page_description = "Personal Portfolio of James Raymond Thompson";
$page_keywords = "Personal portfolio, front end, web development, HTML, CSS, JavaScript";
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
            <a href="mailto:james@jraymondt.com"><button class="nb-button orange rounded"> email </button></a>
        </div>
          <form class="dialog" action="/action_page.php">
            <h4><b>Testing porpoises only</b></h4>
            <label for="fname">First Name</label>
            <input class="nb-input orange" type="text" id="fname" name="firstname" placeholder="Your name..">
            <label for="lname">Last Name</label>
            <input class="nb-input orange" type="text" id="lname" name="lastname" placeholder="Your last name..">
            <label for="country">Country</label>
            <select id="country" name="country">
              <option value="australia">Australia</option>
              <option value="canada">Canada</option>
              <option value="usa">USA</option>
              <option value="space">Space the final frontier</option>
            </select>
            <label for="subject">Subject</label>
            <textarea class="nb-input orange" id="subject" name="subject" placeholder="Write something.."></textarea>
            <input class="nb-button orange rounded" type="submit" value="Submit">
          </form>
      </div><!--end wrapper-->
    </main>
<?php include 'includes/footer.php'; ?>
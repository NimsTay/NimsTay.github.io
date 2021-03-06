<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="images/cam.png" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      id="header-font"
      href="https://fonts.googleapis.com/css2?family=KoHo:ital,wght@1,300&display=swap"
      rel="stylesheet"
    />
    <meta name="robots" content="index, follow" />
</head>

<body>
    <div class="contact_page_container">
        <h1 class="contact_title">Contact Page</h1>
        <div class="contact_boxes">
            <form class="contact_form" method="post" action="contact.php">
                <?php include ("contact.php"); ?> 
                <input id="Name" type="text" class="form_entry" placeholder="Your Names" required>
                <br> <!-- line break -->
                <input name="Email" type="email" class="form_entry" placeholder="youremail@domain.com" required>
                <br>
                <input name="Subject" type="text" class="form_entry" placeholder="Subject" required>
                <br>
                <textarea name="Message" class="form_entry" placeholder="Your Message" rows="4" required></textarea>
                <br>
                <button name="Submit" class="main_btn">
                    <a href="">Send Message</a>
                </button>
            </form>
        </div>
    </div>
</body>
</html>

<!-- ERROR 404. please do not provide any sensititive information until i respond to this message -->
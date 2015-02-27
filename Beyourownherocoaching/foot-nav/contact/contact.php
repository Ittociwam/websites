<!DOCTYPE html>
<html>

    <head>
        <title>Contact - Beyourownherocoaching.com</title>
        <?php
        session_start();
        ?>
        <meta charset="UTF-8">
        <meta name="author" content="Be Your Own Hero Coaching">
        <meta name="description" content="Nutrition Fitness coaching Rexburg Idaho">
        <link href="/css/screen.css" type="text/css" rel="stylesheet" media="screen">
    </head>

    <body>
        <div class="container">
            <header id="page_header">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>      
            </header>
            <!--Content Starts-->
             <?php
session_start();
?>
        
        <?php if( !empty($errors)){
            echo '<ul class="notify">';
            foreach($errors as $error){
                echo "<li>$error</li>";
            }
            echo '</ul>';
            unset($errors);
        } 
        ?>
            <h1> Contact Page </h1>
        <p> All Fields are required </p>
        <form method="post" action="." id="contactform">
            <label for="name"> Name:</label> <br>
            <input type="text" name="name" id="name" size="40"
                   value="<?php echo $name; ?>" required ><br>
            <label for="email"> Email</label> <br>
            <input type="email" name="email" id="email" size="50" value="<?php echo $email; ?>" required > <br>
            <label for="subject"> Subject </label> <br>
            <input type="text" name="subject" id="subject" size="50" value="<?php echo $subject; ?>" required > <br>
            <label for="message"> Message </label> <br>
            <textarea name="message" id="message" cols="50" rows="10" required > <?php echo $message; ?> </textarea><br>
            
            
<!-- This displays the captcha image -->
<label>&nbsp;</label><img id="captcha" src="captcha_images.php?width=100&amp;height=40&amp;characters=5" alt="captcha image"> (Type these characters into the text box below)
<!-- This allows the user to type in what they see -->
<label for="cap_code">Security Code:</label><input id="cap_code" name="cap_code" type="text" size="6" required >
<br>
<label for='action'> &nbsp; </label>
            <input type='submit' name="action" id='action' value="Send"> <br>
        </form>
            </main>
            <footer id="page_footer">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?> 

                }
            </footer>
            <script src="/javascript/analytics.js"></script>

        </div>



    </body>
</html>
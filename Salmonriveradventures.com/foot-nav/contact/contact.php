<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
        <title>Brian - Salmon River Adventures</title>
        <meta charset="UTF-8">
        <meta name="author" content="Robbie Bise">
        <meta content="Fun rafting adventures for people of all skill levels" name="description">

    </head>
    <body>
        <div class="container">
            <header  id="page_header">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/modules/head.php'; ?>      
            </header>
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
        <p> All Fields are required </p>
        <form method="post" action="." id="contactform">
            <label for="name"> Name:</label> <br>
            <input type="text" name="name" id="name" size="40"
                   value="<?php echo $name; ?>" required ><br>
            <label for="email"> Email</label> <br>
            <input type="email" name="email" id="email" size="50" value="<?php echo $email; ?>" required > <br>
            <label for="subject"> Subject </label> <br>
            <input type="text" name="subject" id="subject" size="50" value="<?php echo $subject; ?>" required > <br>
            <label for="message"> Message </label>
            <textarea name="message" id="message" cols="50" rows="10" required > <?php echo $message; ?> </textarea><br>
            <label for='action'> &nbsp; </label>
            <input type='submit' name="action" id='action' value="Send"> <br>
            
<!-- This displays the captcha image -->
<label>&nbsp;</label><img id="captcha" src="captcha_images.php?width=100&amp;height=40&amp;characters=5" alt="captcha image"> (Type these characters into the text box below)
<!-- This allows the user to type in what they see -->
<label for="cap_code">Security Code:</label><input id="cap_code" name="cap_code" type="text" size="6" required >
        </form>
                       <footer id="page_footer" class='grid'>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/modules/foot.php'; ?> 

            </footer>

            <script src="/javascript/analytics.js"></script>
              <div class="grid bottom" >
                <p class='unit half'> Copyright &copy; 2014 Salmon River Adventures </p>
    <p class='unit half' > Last updated: <?php echo date('F j Y', getlastmod()) ?> </p>
        </div>
</div>
    </body>
            </html>

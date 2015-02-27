<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

    <head>
        <title>Home - Salmon River Adventures</title>
        <meta charset="UTF-8">
        <meta name="author" content="Robbie Bise">
        <meta content="Fun rafting adventures for people of all skill levels" name="description">

    </head>
    <body>
        <div class="container">
            <header  id="page_header">


                <?php include(dirname(__FILE__) . "/modules/head.php");?>  
            </header>
            <!--Content Starts-->


            <main class='grid'> 
                <h1 class="bigEntrance" >Welcome to Salmon River Adventures</h1>
                <p> 
Salmon River Adventures has been the leading rafting adventure company since it was founded in 1985. We specialize in not only providing a great rafting adventure but in teaching neat survival skill and abilities. Our guides are highly qualified to help bring you a great whitewater rafting experience. 
</p>

                <div class="unit half" >
                    <h2>Our Guides</h2>
                        <h3>Burley Brian</h3>
                    <a href="head-nav/guides/guide-1.php" >     <img class="tossing" src="media/images/guide1.jpg" alt="Guide 1"> </a>
               

                      <h3>Wild Wendy</h3>
                    <a href="head-nav/guides/guide-2.php" >     <img class="tossing" src="media/images/guide2.jpg" alt="Guide 2"> </a>
                  

                     <h3>Stinky Steve</h3>
                    <a href="head-nav/guides/guide-3.php" >     <img class="tossing" src="media/images/guide3.jpg" alt="Guide 3"> </a>
                  

</div>


                <div class="unit half" >
                    <h2>Adventures</h2>
                    <h3>Canary Cannon Ball</h3>
                    <a href="head-nav/adventures/adventure-easy.php" >     <img class="pulse"  src="media/images/gauge-easy.jpg" alt="Easy"> </a>
                    
 <h3>Torrent Tumble</h3>
                    <a href="head-nav/adventures/adventure-moderate.php" >     <img class="pulse" src="media/images/gauge-moderate.jpg" alt="Moderate"> </a>
                   
  <h3>Devil's Dive</h3>
                    <a href="head-nav/adventures/adventure-difficult.php" >     <img class="pulse" src="media/images/gauge-difficult.jpg" alt="Difficult"> </a>
                  

                </div>

            </main>

            <footer id="page_footer" class='grid'>
                <?php include(dirname(__FILE__) . "/modules/foot.php");?> 

            </footer>

            <script src="/javascript/analytics.js"></script>
            <div class="grid bottom" >
                <p class='unit half'> Copyright &copy; 2014 Salmon River Adventures </p>
    <p class='unit half' > Last updated: <?php echo date('F j Y', getlastmod()) ?> </p>
        </div>
        </div>
    </body>

</html>

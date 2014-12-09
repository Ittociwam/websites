<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

    <head>
        <title>Devil's Dive - Salmon River Adventures</title>
        <meta charset="UTF-8">
        <meta name="author" content="Robbie Bise">
        <meta content="Fun rafting adventures for people of all skill levels" name="description">
        <script src='/salmon/js/quiz.js'>
        </script>
 
        <div class="container">
            <header  id="page_header">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/modules/head.php'; ?>      
            </header>
            <!--Content Starts-->
        </head>
        

            <main class='grid'> 

                <div class="unit half" >
                    <h1>Devil's Dive</h1>
                    <h2> Difficulty </h2>
                    <img src="/salmon/media/images/gauge-difficult.jpg" alt="Difficult" >
                    <h2> Map </h2>
                    <img src="/salmon/media/images/adventure3.jpg" alt="Adventure 3"> 
                    
                        <ul>
                            <li>Length: Unknown   </li>
                            <li>Guide: Stinky Steve </li>
                            <li>Cost: Free (with signature of death waiver) </li>
                            <li>Age: 18+ </li>
                        </ul>
                </div>
                    <div class='unit half'>
                        <h2>Description</h2>
                        <p>Devil’s Dive was never meant to be a river adventure. By all means it is considered unmanageable by the most professional rafters. 90% of the route is pure <a href='http://en.wikipedia.org/wiki/International_Scale_of_River_Difficulty' target="blank"> class VI rapids. </a> There are sharp logs and rocks hidden in every rapid. Only one guide has ever been known to take adventurers through this treacherous part of the river: <a href="/salmon/head-nav/guides/guide-3.php"> Stinky Steve </a>. Because of the remoteness of the area and harshness of the environment we have no way of knowing how Steve manages to navigate this part of the river with minimal casualties. We warn any who come to Salmon River Adventures to stay off this part of the river. The only reason it is still advertised is so that any who wish to attempt this deadly voyage will know that Stinky Steve is the only guide who has ever made it through alive. </p>

                </div>

               

            </main>

            <footer id="page_footer" class='grid'>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/modules/foot.php'; ?> 

            </footer>

            <script src="/javascript/analytics.js"></script>
              <div class="grid bottom" >
                <p class='unit half'> Copyright &copy; 2014 Salmon River Adventures </p>
    <p class='unit half' > Last updated: <?php echo date('F j Y', getlastmod()) ?> </p>
        </div>
</div>
    
    <h1> Are you Ready? </h1>
    <h2> This quiz will help you know if you are ready to take on Devil's Dive! </h2>
    <h3> On a scale of one to five rate how comfortable you are with the following: </h3>
    
    <p> 1. Crapping yourself due to pure fear. </p>
    <form onsubmit='quiz()' action=''>
        1. <input type='radio' name='q1' value='1'> That does not sound fun. <br>
        2. <input type='radio' name='q1' value='2'> Not too fun... But I think I have what it takes. <br>
        3. <input type='radio' name='q1' value='3'> I'd consider it... but only on the weekends. <br>
        4. <input type='radio' name='q1' value='4'> I think I might like that a little.  <br>
        5. <input type='radio' name='q1' value='5'> AWW YEAH! <br>
    </form>
    
    <p> 2. Discovering that Stinky Steve tried to grow a squash patch in your belly button over-night. </p>
    <form id='squash' action=''>
        1. <input type='radio' name='q1' value='1'> Eww! What?! <br>
        2. <input type='radio' name='q1' value='2'> Not super into that... <br>
        3. <input type='radio' name='q1' value='3'> I don't think it works like that but he can give it a try. <br>
        4. <input type='radio' name='q1' value='4'> It dosn't work... I've tried. <br>
        5. <input type='radio' name='q1' value='5'> I like squash. <br>
        <input type='submit' value='submit'>
    </form>
    

    
    <div id='output'>
        
    </div>
    <br>
    <br>
    </body>

</html>
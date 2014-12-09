<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

    <head>
        <title>Site Plan - Salmon River Adventures</title>
        <meta charset="UTF-8">
        <meta name="author" content="Robbie Bise">
        <meta name="description" content="Site plan for Salmon River Adventures">
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/modules/head.php'; ?>     
   
        <div class="container">
            <header id="page_header">
                 
            </header>
            <!--Content Starts-->
            <main class="grid" > 
                <h1> Resource Page
                </h1>
                
                <ul>
                    <li>
                        
                        <img alt="rafting image" class="unit half" src="/salmon/media/images/rafting.jpg"> <p class="unit half" >Source: <a> http://www.freeimages.com/ </a></p>
                        
                       
                    </li>
                    <li> <p class="unit whole" >All other images are property of Robbie Bise</p></li>
                </ul>
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
    
    </body>

</html>


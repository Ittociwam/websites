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
            <!--Content Starts-->


            <main class='grid'> 

                <div class="unit" >
                    <h1>Burley Brian</h1>
                    <img src="/salmon/media/images/guide1.jpg" alt="Guide 1"> 
                    <ul>
                        
                        <li>Professional River Guide Certification  </li>
                        <li>Years Experience: </li>
                        <li> <ul>
                                <li>2 years as a river guide in Colorado.
                                </li>
                                <li>
                                    3 years as Amazon river guide for Navy SEALs tracking down drug lords. 

                                </li>
                                <li>
                                    3 years as a kayaking vigilante pirate hunter on the Indian Ocean. 

                                </li>
                            </ul>
                        </li>
                        <li>Contact info: ihatepirates@yahoo.com </li>
                    </ul>
                    <h2>Bio</h2>
                    <p>Brian is the roughest toughest guide we have. He is our only guide with military training, a black-belt in kung-fu and an appetite for danger. He is  heroic, talented and just about the manliest man on the face of the earth. You won't feel safer with anyone other guide.  </p>

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
    </body>

</html>
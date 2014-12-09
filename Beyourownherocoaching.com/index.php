

<!DOCTYPE html>
<!-- To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor. -->
<html>

    <head>
        <title>Home - Beyourownherocoaching.com</title>
        <script src="javascript/preload.js">
        </script>
        <meta charset="UTF-8">
        <meta name="author" content="Be Your Own Hero Coaching">
        <meta content="Free fitness and life coaching for women Rexburg Idaho" name="description">

    </head>
    <body>
        <div class="container">
            <header  id="page_header">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>      
            </header>
            <!--Content Starts-->


            <main class='grid'> 
                <h1>
                   Be Your Own Hero Fitness and Wellness Coaching
                </h1>

<!--                <div class="unit half"> <video   preload="metadata" 
                                                 controls >
                        <source src="/media/video/place-holder.mp4" type="video/mp4" />
                        <source src="media/video/placeholder.webm" type=video/webm />
                        Introductory Video
                        <p>This browser does not support our video format.</p></video>
                </div>-->


                <div class="unit half"> <a  href="javascript:gotoshow()">
                        <img  src="" alt="Body Image, Fitness, Nutrition, Weight Loss" id="slide" >
                    </a>

                    <script src="javascript/slideshow.js">
                    </script>

                </div>

                <a href='/head-nav/coaching/coaching.php' class="unit half"> <img src="/media/image/coaching/coachingb.jpg" alt='coaching'> <a/>
                    <!-- SnapWidget -->
<iframe src="http://snapwidget.com/bd/?u=YmV5b3Vyb3duaGVyb2s4fGlufDIwMHwzfDN8fHllc3wyMHxmYWRlT3V0fG9uU3RhcnR8eWVz&v=8414" title="Instagram Widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:700px; height:1041px"></iframe>

            </main>

            <footer id="page_footer" class='grid'>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?> 

            </footer>

            <script src="/javascript/analytics.js"></script>
 <?php echo date ('F j Y',  getlastmod())?>
        </div>
       
    </body>
</html>

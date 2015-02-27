<!DOCTYPE html>
<html>

    <head>
        <title>Calorie Tracking Chart|Diet Help|Rexburg Idaho|Be Your Own Hero</title>
        <meta charset="UTF-8">
        <meta name="author" content="Be Your Own Hero Coaching">
        <meta name="description" content="Chart for tracking calories. Table to help count calories. Rexburg Idaho">
        <link href="/css/screen.css" type="text/css" rel="stylesheet" media="screen">
    </head>

    <body>
        <div class="container">
            <header id="page_header">
                <script src="/javascript/newjavascript.js" > </script>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>      
            </header>
            <!--Content Starts-->
            <main class="grid" >
                <h1>Calorie Tracker</h1>
                <p>This table is to help you calculate your total calories for the week. At the end of each week enter in your daily calorie amount for each meal and hit the "Show total calories!" button to see what your total daily calorie intake was for each day. Check out our calorie calculator to find out how much you should be eatint to maintain a healthy weight. <a href="/head-nav/nutrition/caloriecalculator.php" target='blank' Title="Calculate your daily calorie allowence"> Calorie Calculator </a></p>
                
                
              <table class="unit">
                    <tr>
                        <td><button type="button" onclick="computeCalories()"> Show total calories!</button></td>
                        <th>Breakfast</th>
                        <th>Lunch</th>
                        <th>Dinner</th>
                        <th>Total</th>
                    </tr>
                    <tr>
                        <th>Monday</th>
                        <td><input type="text" id="monbrk"></td>
                        <td><input type="text" id="monlun"></td>
                        <td><input type="text" id="mondin"></td>
                        <td><div id="mon"></div></td>
                    </tr>
                    <tr>
                        <th>Tuesday</th>
                        <td><input type="text" id="tuebrk"></td>
                        <td><input type="text" id="tuelun"></td>
                        <td><input type="text" id="tuedin"></td>
                        <td><div id="tues"></div></td>
                    </tr>
                    <tr>
                        <th>Wednesday</th>
                        <td><input type="text" id="wedbrk"></td>
                        <td><input type="text" id="wedlun"></td>
                        <td><input type="text" id="weddin"></td>
                        <td><div id="wed"></div></td>
                    </tr>
                    <tr>
                        <th>Thursday</th>
                        <td><input type="text" id="thubrk"></td>
                        <td><input type="text" id="thulun"></td>
                        <td><input type="text" id="thudin"></td>
                        <td><div id="thurs"></div></td>
                    </tr>
                    <tr>
                        <th>Fridays</th>
                        <td><input type="text" id="fribrk"></td>
                        <td><input type="text" id="frilun"></td>
                        <td><input type="text" id="fridin"></td>
                        <td><div id="fri"></div></td>
                    </tr>
                    <tr>
                        <th>Saturday</th>
                        <td><input type="text" id="satbrk"></td>
                        <td><input type="text" id="satlun"></td>
                        <td><input type="text" id="satdin"></td>
                        <td><div id="sat"></div></td>
                    </tr>
                    <tr>
                        <th>Sunday</th>
                        <td><input type="text" id="sunbrk"></td>
                        <td><input type="text" id="sunlun"></td>
                        <td><input type="text" id="sundin"></td>
                        <td><div id="sun"></div></td>
                    </tr>


                </table>
                
                
                
                
            </main>
            <footer id="page_footer">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?> 

            </footer>
            <script src="/javascript/analytics.js"></script>

        </div>



    </body>
</html>

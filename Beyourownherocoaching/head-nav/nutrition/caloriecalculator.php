<!DOCTYPE html>
<html>

    <head>
        <title>Calorie Calculator|Be Your Own Hero|Diet Coaching</title>
        <meta charset="UTF-8">
        <meta name="author" content="Be Your Own Hero Coaching">
        <meta name="description" content="Calorie Calculator">
        <link href="/css/screen.css" type="text/css" rel="stylesheet" media="screen">
    </head>

    <body>
        <div class="container">
            <header id="page_header">
                <script src="/javascript/miffilin.js" ></script>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>      
            </header>
            <!--Content Starts-->
            <main>
                <h1>Calorie Calculator</h1>

                <p> Please enter the following information </p>
                <ul>
                    <li> Weight (lbs) <input type="text" id="weight" size="3"> </li>

                    <li>Height (in)  <input type="text" id="height" size="3"> </li>

                    <li> Age          <input type="text" id="age" size="2"> </li>

                    <li>  Sex (M or F) <input type="text" id="sex" size="2"> </li>

                    <li>  Activity Level 1-5 (1 = lowest)* <input type="text" id="activity" size="2"> </li>
                </ul>
                <button type="button" onclick="miffilinFormula()" > Calculate Calories </button>

                <p id="calories"> </p> 
                <p id="minusPound"></p> 
                <p id="minusTwoPound"></p> 

                <p> WARNING: Remember to never eat less than 1200 calories a day to keep 
                    your body from going into starvation mode and holding onto 
                    fat while losing muscle and lean body mass!</p>

                <p>
                    *Wondering what your Activity Level is?
                <ol>
                    <li>Sedentary- Little or no daily exercise</li>
                    <li>Lightly Active- Light exercise or sports 1-3 days a week</li>
                    <li>Moderately Active- Moderate exercise or sports 3-5 days a week</li>
                    <li>Very Active- Hard exercise or sports 6-7 days a week </li>
                    <li>Extremely Active- Hard daily exercise or sports, physically demanding job</li>
                </ol>
                </p>




            </main>
            <footer id="page_footer">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?> 

            </footer>
            <script src="/javascript/analytics.js"></script>

        </div>



    </body>
</html>
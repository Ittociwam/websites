<!DOCTYPE html>
<html>

    <head>
        <title>CIT 230 Presentation</title>
        <meta charset="UTF-8">
        <meta name="author" content="Be Your Own Hero Coaching">
        <meta name="description" content="Information on HTML entities">
        <link href="/css/screen.css" type="text/css" rel="stylesheet" media="screen">
    </head>

    <body>
        <div class="container">
            <header id="page_header">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>      
            </header>
            <!--Content Starts-->
            <main>
                <h1>HTML Entities Presentation</h1>
                <p>I chose to do my presentation on HTML Entities. To explain the function of HTML entities I began my presentation with a scenario. </p>
                <h2> Example of the Frustrated Math Tutor </h2>
                <p> Say a math tutor, trying to appeal to a younger generation, sets up a webpage for his students. He understands HTML to an extent and has already built a significant portion of his site. He gets to a specific page and runs into a problem. Lets take a look. </p>
                <hr />
                <p> He begins the page like he always does. A title, subtitle and paragraph describing the page </p>
                <img src="/media/image/presentation/badhead.JPG">
                <p>He then starts to write the content. The content for this particular page contains mathematical symbols and their explanation.</p>
                <img src="/media/image/presentation/badbody.JPG">
                <p>As he uploads the page he runs into trouble. He has placed extra spaces between the symbols and the explanations but they are not showing up in the text on the page. He cannot find out how to make other symbols either such as the division symbol and he realizes that the browser thinks his equals and less than greater than sign are part of the code! He is getting very frustrated </p>
                <img src="/media/image/presentation/badend.JPG">
                <p> OK so things are not going so good for our friend. He sounds like he needs some help through the use of HTML entities! This tutor is about to get tutored. </p>
                <h2>HTML Entities Demystified</h2>
                <p> HTML contains what are called &quot;reserved characters&quot;. These consist of the following&dash;</p>
                <ul>
                    <li>&gt;</li>
                    <li>&lt;</li>
                    <li>&equals;</li>
                    <li>&QUOT;&quot;</li>
                    <li>&bsol;</li>
                </ul>
                <p>Using these symbols as part of the text is considered bad practice.</p>
                <p>Instead we use groups of these reserved characters and letters and numbers to tell the browser what symbol or entity we are trying to use.</p>
                <p>The format for this group can be represented in 2 ways</p>
                <h3>Name Format</h3>
                <p>&AMP;entity&UnderBar;name&semi;</p>
                <p>or</p>
                <h3>Number Format</h3>
                <p>&amp;entity&UnderBar;number&semi;</p>

                <p>Entities have either a name or a number or both. Here is a table displaying examples of some HTML entities</p>
                <img src="/media/image/presentation/table.JPG">
                <p>These few entities represent a small fraction of the total number of entities that can be implemented. Check out w3 schools <a href="http://www.w3schools.com/charsets/ref_html_symbols.asp">entity reference guide </a> to find hundreds more</p>
                <p>Lets see how our math tutor friend is doing with his new knowledge on HTML entities.</p>
                <h2>Happy Math Tutor</h2>
                <img src="/media/image/presentation/goodfinal.JPG">
                <p>Well! He finally has a handle on things! He was able to figure out his non&dash;breaking space&comma; equals sign&comma; and even the less&dash;than greater&dash;than signs&excl; Why&comma; he even left us a surprise entity at the end. What could it be? Lets view the final result and see.</p>
                <img src="/media/image/presentation/result.JPG">
                <p>It's a happy face&excl; Looks like our work here is done. Way to go Mr. Math Tutor! Have a wonderful day! &#128007;</p> 

            </main>
            <footer id="page_footer">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?> 

            </footer>
            <script src="/javascript/analytics.js"></script>

        </div>

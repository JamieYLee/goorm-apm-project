<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Yeonjung Lee - Q&A Answer</title>
        <link rel="stylesheet" type="text/css" href="style.php"/>
    </head>
    <body>
        <?php include 'header.php'; ?>

        <section>
            <?php include 'menu.php'; ?>
            <article>
                <div class="main">
                    <h1>Let's Answer to the Question!</h1>

                    <form method="post" action="updateques.php">
                        <label for="Number">Question No.</label>
                        <input type="text" id="Number" name="num"><br>

                        <label for="Answer">How do yo wanna reply?</label>
                        <input type="text" id="Answer" name="answer"><br><br>

                        <input type="submit" value="Submit">
                    </form>
                </div>
            </article>
        </section>
        
        <?php include 'footer.php'; ?>
    </body>
</html>
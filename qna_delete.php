<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Yeonjung Lee - Q&A Delete</title>
        <link rel="stylesheet" type="text/css" href="style.php"/>
    </head>
    <body>
        <?php include 'header.php'; ?>

        <section>
            <?php include 'menu.php'; ?>
            <article>
                <div class="main">
                    <h1>Which one to delete?</h1>

                    <form method="post" action="deleteques.php">
                        <label for="Number">Question No.</label>
                        <input type="text" id="Number" name="num"><br>

                        <input type="submit" value="Submit">
                    </form>
                </div>
            </article>
        </section>
        
        <?php include 'footer.php'; ?>
    </body>
</html>
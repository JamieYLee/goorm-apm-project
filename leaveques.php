<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Yeonjung Lee - Q&A</title>
        <link rel="stylesheet" type="text/css" href="style.php"/>
    </head>
    <body>
        <?php include 'header.php'; ?>

        <section>
            <?php include 'menu.php'; ?>
            <article>
                <div class="main">
                    <h1>Feel free to ask me anything!</h1>

                    <form method="post" action="insertques.php">
                        <label for="Name">Name</label>
                        <input type="text" id="Name" name="name"><br>

                        <label for="Question">Question</label>
                        <input type="text" id="Question" name="question"><br><br>

                        <input type="submit" value="Submit">
                    </form>
                </div>
            </article>
        </section>
        
        <?php include 'footer.php'; ?>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Yeonjung Lee - Profile Page</title>
        <link rel="stylesheet" type="text/css" href="style.php"/>
        <style>
            #home img {
                width: 65%;
            }

            #home h1 {
                text-align: center;
                font-size: 45px;
            }
        </style>
    </head>
    <body>
        <?php include 'header.php'; ?>

        <section>
            <?php include 'menu.php'; ?>
            <article>
                <div id="home">
                    <img src="sample1.png">
                    <h1>Welcome!</h1>
                </div>
            </article>
        </section>
        
        <?php include 'footer.php'; ?>
    </body>
</html>
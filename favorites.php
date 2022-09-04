<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Yeonjung Lee - Favorites</title>
        <link rel="stylesheet" type="text/css" href="style.php"/>
        <style>
            table {
                border: 1px solid #a39485;
                font-size: 0.9em;
                box-shadow: 0 2px 5px rgba(0,0,0,0.25);
                border-collapse: collapse;
                border-radius: 5px;
                width: 80%;
            }

            th {
                background: #a39485;
                text-shadow: 0 1px 0 #a39485;
                color: #fff;
                border: 1px solid #a39485;
                box-shadow: inset 0px 1px 2px #a39485;
            }

            tr {
                border-bottom: 1px solid #ccc;
            }

            td {
                border-right: 1px solid #ccc;
                padding: 10px;
            }

            .favorites {
                box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            }
        </style>
    </head>
    <body>
        <?php include 'header.php'; ?>

        <section>
            <?php include 'menu.php'; ?>
            <article>
                <div class="main">
                    <h1>Favorites : Things I Like</h1>

                    <?php
                        include 'conn.php';

                        if(!$conn){
                            die('Could not connect: '.mysql_error());
                        }

                        echo "<table class='favorites'>";
                        echo "<thead><tr><th>Category</th><th>Things</th><th>Released Year</th></tr></thead>";

                        $q = mysqli_query($conn, "SELECT * FROM favorites;");

                        echo "<tbody>";

                        for($c=0;$c<mysqli_num_rows($q);$c++){
                            echo "<tr>";
                            $f = mysqli_fetch_array($q);
                            echo "<td>$f[0]</td><td>$f[1]</td><td>$f[2]</td>";
                            echo "</tr>";
                        }

                        echo "</tbody>";
                        echo "</table>";

                        mysqli_close($conn);
                    ?>
                </div>
            </article>
        </section>
        
        <?php include 'footer.php'; ?>
    </body>
</html>
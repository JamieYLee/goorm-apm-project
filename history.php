<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Yeonjung Lee - History</title>
        <link rel="stylesheet" type="text/css" href="style.php"/>
        <style>
            table.history {
                line-height: 1.5;
            }

            table.history thead th {
                padding: 10px;
                font-weight: bold;
                vertical-align: top;
                color: #369;
                border-bottom: 3px solid #036;
            }

            table.history tbody th {
                width: 150px;
                padding: 10px;
                font-weight: bold;
                vertical-align: top;
                border-bottom: 1px solid #ccc;
                color: #5c85d6;
            }

            table.history td {
                padding: 10px;
                vertical-align: top;
                border-bottom: 1px solid #ccc;
            }
        </style>
    </head>
    <body>
        <?php include 'header.php'; ?>

        <section>
            <?php include 'menu.php'; ?>
            <article>
                <div class="main">
                    <h1>History : This is how I lived so far</h1>

                    <?php
                        include 'conn.php';

                        if(!$conn){
                            die('Could not connect: '.mysql_error());
                        }

                        echo "<table class='history'>";
                        echo "<thead><tr><th>Year</th><th>Month</th><th>What Happened</th></tr></thead>";

                        $q = mysqli_query($conn, "SELECT * FROM history ORDER BY YEAR, MONTH;");

                        echo "<tbody>";

                        for($c=0;$c<mysqli_num_rows($q);$c++){
                            echo "<tr>";
                            $f = mysqli_fetch_array($q);
                            echo "<th>$f[0]</th><td>$f[1]</td><td>$f[2]</td>";
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
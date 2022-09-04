<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Yeonjung Lee - Q&A</title>
        <link rel="stylesheet" type="text/css" href="style.php"/>
        <style>
            table {
                border-collapse: separate;
                border-spacing: 0;
                width: 100%;
            }

            th, td {
                padding: 6px 15px;
            }

            th {
                background: #42444e;
                color: #fff;
                text-align: left;
            }

            tr:nth-child(even) td {
                background: #eaeaed;
            }
        </style>
    </head>
    <body>
        <?php include 'header.php'; ?>

        <section>
            <?php include 'menu.php'; ?>
            <article>
                <div class="main">
                    <h1>Q&A Lists</h1>

                    <?php
                        include 'conn.php';

                        if(!$conn){
                            die('Could not connect: '.mysql_error());
                        }

                        echo "<table class='qna'>";
                        echo "<thead><tr><th>No.</th><th>Name</th><th>Question</th><th>Answer</th></tr></thead>";

                        $q = mysqli_query($conn, "SELECT * FROM questions;");

                        echo "<tbody>";

                        for($c=0;$c<mysqli_num_rows($q);$c++){
                            echo "<tr>";
                            $f = mysqli_fetch_array($q);
                            echo "<td>$f[0]</td><td>$f[1]</td><td>$f[2]</td><td>$f[3]</td>";
                            echo "</tr>";
                        }

                        echo "</tbody>";
                        echo "</table>";

                        mysqli_close($conn);

                        include 'qna_menu.php';
                    ?>
                </div>
            </article>
        </section>
        
        <?php include 'footer.php'; ?>
    </body>
</html>
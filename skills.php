<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Yeonjung Lee - Skills</title>
        <link rel="stylesheet" type="text/css" href="style.php"/>
        <style>
            table {
                width: 500px;
                border-collapse: collapse;
                overflow: hidden;
                box-shadow: 0 0 20px rgba(0,0,0,0.1);
            }

            th, td {
                padding: 15px;
                background-color: rgba(255,255,255,0.2);
            }

            thead th {
                background-color: #55608f;
                color: rgba(255,255,255,0.5);
            }
        </style>
    </head>
    <body>
        <?php include 'header.php'; ?>

        <section>
            <?php include 'menu.php'; ?>
            <article>
                <div class="main">
                    <h1>Skills : What I've learned and know</h1>

                    <?php
                        include 'conn.php';

                        if(!$conn){
                            die('Could not connect: '.mysql_error());
                        }

                        echo "<table class='skills'>";
                        echo "<thead><tr><th>Category</th><th>Skill Name</th><th>Learned When</th></tr></thead>";

                        $q = mysqli_query($conn, "SELECT * FROM skills;");

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
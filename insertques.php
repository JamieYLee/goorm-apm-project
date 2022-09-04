<!DOCTYPE html>
<html>
    <body>
        <?php
            include 'conn.php';

            if(!$conn){
                die('Could not connect: '.mysql_error());
            }

            $name = $_POST["name"];
            $question = $_POST["question"];

            $sql = "INSERT INTO questions(NAME, QUESTION) VALUES('$name', '$question');";
            $q = mysqli_query($conn, $sql);

            mysqli_close($conn);

            echo "
                <script>
                    location.href = 'queslist.php';
                </script>
            ";
        ?>
    </body>
</html>
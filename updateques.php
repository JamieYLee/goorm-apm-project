<!DOCTYPE html>
<html>
    <body>
        <?php
            include 'conn.php';

            if(!$conn){
                die('Could not connect: '.mysql_error());
            }

            $num = $_POST["num"];
            $answer = $_POST["answer"];

            $sql = "UPDATE questions SET ANSWER='$answer' WHERE NUM=$num;";
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
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            include './connection.php';
            
               

            session_start();
            $mail = $_POST['email'];
            $password = $_POST['password'];
            $sql = "select * ";
            $sql .= "from docente ";
            $sql .= "where mail = '$mail' and password = '$password'";

            
            $result = $conn->query($sql);
            //$result->num_rows
            $row_cnt = $result->num_rows;
        
            $n = 1;
            
            
            if ($_POST['captcha'] == $_SESSION['captcha'] && $row_cnt > 0) { 
                header("Location: ../profHome.html");
            } else {
                
                header("Location: ../loginProf.html");
                echo "<script>alert('credenziali sbagliate');</script>";
            }
        ?>
    </body>
</html>

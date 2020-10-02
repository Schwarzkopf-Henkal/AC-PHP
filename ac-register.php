<!doctype html>
<head>
    <meta charset="utf-8">
    <style>
        .headbar{
            width: 50%;
            margin: 2em auto;
            padding: 10px;
            border: 2px solid #000000;
            position: relative;
        }
        .center {
            margin: auto;
            width: 50%;
            padding: 10px;
            text-align: center;
        }
        .plaincontent{
            font-size: large;
        }
    </style>
</head>
<body>
    <?php
    // $user=$passwd="";
    // echo "<form action='ac-register.php' method='post'><input type='text' name='user'><br><input type='text' name='passwd'><input type='submit'></form>";
    $ConSQL=mysqli_connect("localhost","sql49_234_17_22","FzeDJWnWkn","sql49_234_17_22");
    if(!$ConSQL){
        echo "<div class='.headbar' style='width: 40em;margin: 2em auto'>\n";
        echo "<h1 class='center'>Fatal Error</h1>";
        echo "<p class='center plaincontent'>Failed establishing a database connection.</p>";
        echo "</div>";
        die();
    }
    
    function safe_input($data) {
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    ?>
</body>
<html>
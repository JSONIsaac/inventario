<?php require "./inc/session_start.php";?>

<!DOCTYPE html>
<html lang="es">
<head>
<?php include "./inc/head.php";?>

</head>
<body>
    <?php 

        if(!isset($_GET['vista']) || $_GET['vista'] == "" ){
            $_GET['vista'] = "login";
        }

        if (is_file("./vistas/".$_GET['vista'].".php")) {
            
        }else{
            
        }

        include "./inc/navbar.php";
        include "./inc/script.php";
    ?>
</body>
</html>
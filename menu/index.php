<!DOCTYPE html>
<html lang="fr">
    <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Page 1</title>
            <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <?php  
            $page = $_GET['page'];
            include("header.php");
            include("main.php");
            include("footer.php"); 
        ?>
    </body>
    <foot>

    </foot>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="books">
        <input type="text" name="author">
        <input type="submit">
    </form>

    <?php
    
    $buku = $_POST["books"];
    echo $buku

    ?>

</body>
</html>
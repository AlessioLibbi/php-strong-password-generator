<?php session_start();
$password = $_SESSION["password"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="titles">
        <h1 class="title-big">Strong Password Generator</h1>
        <h2 class="title-small">Genera una password sicura</h2>
    </div>
    <div class="generated-psw" style="width: 50%; margin: 0 auto; ">
        <p> <?php echo $_SESSION["password"] ?></p>
        <a href="index.php"> Torna al generatore</a>
    </div>
</body>

</html>
<?php include_once __DIR__ . "/function.php"; ?>
<?php session_start();
$_SESSION["password"] = $password;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div id="app">
        <div class="titles">
            <h1 class="title-big">Strong Password Generator</h1>
            <h2 class="title-small">Genera una password sicura</h2>
        </div>
        <div class="generated-psw">
            <p> <?php echo $password ?></p>
        </div>
        <div class="psw-generator">
            <form method="GET" action="index.php">
                <div class="lenght">
                    <label for="psw-lenght">Lunghezza Password:</label>
                    <input name="limit" type="number">
                </div>
                <div class="style">
                    <div>

                        <label for="psw-style">Consenti ripetizioni di uno o più caratteri:</label>
                    </div>
                    <div class="check">
                        <div>
                            <input class="check-bt" type="radio" name="repeat" id="repeat" value="si">
                            <label for="repeat">Si</label>
                        </div>
                        <div>
                            <input class="check-bt" type="radio" name="repeat" id="repeat" checked="true" value="no">
                            <label for="repeat">No</label>
                        </div>
                        <div>
                            <input class="check-b" type="checkbox" name="let" id="let" ref="let">
                            <label for="let">Lettere</label>
                        </div>
                        <div>
                            <input class="check-b" type="checkbox" name="num" id="num" ref="num">
                            <label for="num">Numeri</label>
                        </div>
                        <div>
                            <input class="check-b" type="checkbox" name="sim" id="sim" ref="sim">
                            <label for="sim">Simboli</label>
                        </div>
                    </div>
                    <div class="buttons">
                        <button type="submit" class="btn send">Invia</button>
                        <button class="btn nul">Annulla</button>
                    </div>
            </form>
        </div>
        <a href="logout.php">Logout</a>
        <a href="generated.php"> Vai alla tua password</a>
    </div>
    </div>

</body>

</html>
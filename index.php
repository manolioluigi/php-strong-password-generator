<?php 
    include __DIR__ . '/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="container height-full">
        <div class="row height-full">
            <div class="col-12 d-flex flex-column align-items-center justify-content-center">
                <div class="content d-flex flex-column align-items-center justify-content-center">
                    <h1>Strong Password Generator</h1>
                    <form action="index.php" method="get">
                        <input class="my-3" name="length" id="length" type="number" placeholder="Inserisci la lunghezza della password">
                        <button type="submit">Genera password</button>
                    </form>
                    <div>
                        <h2>La tua password è: <?php echo $userPassword ?></h2>
                    </div>
                </div>

            </div>
        </div>
    </div>
     

</body>
</html>
<?php
$paragrafo = $_GET ["paragrafo"];
$censurare = $_GET ["censurare"];
$nuovo_paragrafo = str_replace($censurare, "***", $paragrafo,)
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Paragrafo:</h2>
                <span><?php echo $paragrafo?> </span>
                <div class="my-4">
                    <h6>Lunghezza paragrafo:</h6>
                    <span><?php echo strlen($paragrafo)?></span>
                </div>
            </div>
            <div class="col-12">
                <h2>Paragrafo nuovo:</h2>
                <span><?php echo $nuovo_paragrafo?> </span>
                <div class="my-4">
                    <h6>Lunghezza paragrafo nuovo</h6>
                    <span><?php echo strlen($nuovo_paragrafo)?></span>
                </div>
            </div>

        </div>
    </div>
</body>
</html>
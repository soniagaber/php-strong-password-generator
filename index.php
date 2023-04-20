<?php
include './partials/functions.php'
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
</head>

<body>

    <form action="" method="GET">
        <div>Da quanti caratteri deve essere composta la password?</div>
        <input type="number" id="num-lettere" name="num-lettere" min=1 ><br>
        <button type="submit">ok</button>
    </form>
    <div>
        <?php 
        if (isset ($_GET['num-lettere']) && $_GET['num-lettere']>=1) {
            echo generaPass($_GET['num-lettere']);
        }
        ?>
    </div>

</body>

</html>
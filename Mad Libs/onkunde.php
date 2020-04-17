<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Mad Libs.css">
</head>
<body>
    <img class="logo" src="logo.jpg" alt="">
    <div id="redbox">
        <a class="paniek-link" href="paniek.php">Paniek</a>
        <a class="onkunde-link" href="onkunde.php">Onkunde</a>
    </div>

    <div id="whitebox">
    <form action="submit-onkunde.php" method="POST">
        <label for="wzjgwk" class="labels">Wat zou je graag willen kunnen?</label>
        <input class="invoer" type="text" name="wzjgwk" id="wzjgwk"> <?php echo $nameErr; ?>
        <br>
        <br>

        <label for="mwpkjgo" class="labels">Met welke persoon kun je goed opschieten?</label>
        <input class="invoer"type="text" name="mwpkjgo" id="mwpkjgo">
        <br>
        <br>

        <label for="wisjef" class="labels">Wat is je favoriete getal?</label>
        <input class="invoer"type="text" name="wisjef" id="wisjef">
        <br>
        <br>

        <label for="voorwerp" class="labels">noem een random voorwerp:</label>
        <input class="invoer"type="text" name="voorwerp" id="voorwerp">
        <br>
        <br>

        <label for="wijbpe" class="labels">Wat is je beste persoonlijke eigenschap?</label>
        <input class="invoer"type="text" name="wijbpe" id="wijbpe">
        <br>
        <br>

        <label for="wijspe" class="labels">Wat is je slechste persoonlijke eigenschap?</label>
        <input class="invoer"type="text" name="wijspe" id="wijspe">
        <br>
        <br>

        <label for="wihedjko" class="labels">Wat is het ergste dat je kan overkomen?</label>
        <input class="invoer"type="text" name="wihedjko" id="wihedjko">
        <br>
        <br>
        <input class="send" id="versturen" type="submit" value="Send">
    </div>
    
</body>



</form>

</body>
</html>
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
    <form action="submit-paniek.php" method="POST">
        <label for="wdzjnahwh" class="labels">Welk dier zou je nou als huisdier willen hebben?</label>
        <input class="invoer" type="text" name="wdzjnahwh" id="wdzjnahwh"> <?php echo $nameErr; ?>
        <br>
        <br>

        <label for="widbpijl" class="labels">Wie is de belangrijkste persoon in je leven?</label>
        <input class="invoer"type="text" name="widbpijl" id="widbpijl">
        <br>
        <br>

        <label for="iwlzjgww" class="labels">In welk land zou je graag willen wonen?</label>
        <input class="invoer"type="text" name="iwlzjgww" id="iwlzjgww">
        <br>
        <br>

        <label for="wzjdajjv" class="labels">Wat zou je doen als je je verveelde?</label>
        <input class="invoer"type="text" name="wzjdajjv" id="wzjdajjv">
        <br>
        <br>

        <label for="mwssjakhm" class="labels">Met welk speelgoed speelde je als kind het meest?</label>
        <input class="invoer"type="text" name="mwssjakhm" id="mwssjakhm">
        <br>
        <br>

        <label for="bwdsjhl" class="labels">Bij welke docent spijbelde je het liefst?</label>
        <input class="invoer"type="text" name="bwdsjhl" id="bwdsjhl">
        <br>
        <br>

        <label for="ajhwzjdk" class="labels">Als je €100.000,- had, wat zou je dan kopen?</label>
        <input class="invoer"type="text" name="ajhwzjdk" id="ajhwzjdk">
        <br>
        <br>

        <label for="wijfb" class="labels">Wat is je favoriete bezigheid?</label>
        <input class="invoer"type="text" name="wijfb" id="wijfb">
        <br>
        <br>

        <input class="send" id="versturen" type="submit" value="Send">
    </div>
    
</body>



</form>

</body>
</html>
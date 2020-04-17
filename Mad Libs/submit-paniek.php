<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $wdzjnahwh = $_POST["wdzjnahwh"];
        $widbpijl = $_POST["widbpijl"];
        $iwlzjgww = $_POST["iwlzjgww"];
        $wzjdajjv = $_POST["wzjdajjv"];
        $mwssjakhm = $_POST["mwssjakhm"];
        $bwdsjhl = $_POST["bwdsjhl"];
        $ajhwzjdk = $_POST["ajhwzjdk"];
        $wijfb = $_POST["wijfb"];
    }

    if(empty($wdzjnahwh) || empty($widbpijl) || empty($iwlzjgww) || empty($wzjdajjv) || empty($mwssjakhm) || empty($bwdsjhl) || empty($ajhwzjdk) || empty($wijfb)){
        header("Location: paniek.php");
    }
?>


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
        <a href="paniek.php">Paniek</a>
        <a href="onkunde.php">Onkunde</a>
    </div>

    <div id="whitebox"> 

    <h1>Er heerst paniek...</h1>  

    Er heerst paniek in het koninkrijk <?php echo $_POST["iwlzjgww"]; ?>.
    Koning <?php echo $_POST['bwdsjhl'];?> 
    is ten einde raad en als koning  <?php echo $_POST["bwdsjhl"]; ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $_POST["widbpijl"]; ?>
    <br>
    <br>

    "<?php echo $_POST["bwdsjhl"]; ?> Het is een ramp! Het is een schande!"
    <br>
    <br>

    "Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"
    <br>
    <br>

    "Mijn <?php echo $_POST['wdzjnahwh'];?>  is verdwenen! Zomaar, zonder waarschuwing. 
    En ik had net een <?php echo $_POST["mwssjakhm"]; ?> voor hem gekocht!"
    <br>
    <br>
    "Majesteit <?php echo $_POST["wijbpe"]; ?>, uw schildpad komt vast vazelf weer terug?"
    <br>
    <br>
    "Ja, da's leuk en aardig,maar hoe moet ik in de tussentijd <?php echo $_POST["wijfb"]; ?> leren?"
    <br>
    <br>
    "Maar Sire, daar kunt u toch uw <?php echo $_POST["ajhwzjdk"]; ?> voor gebruiken?"
    <br>
    <br>
    "<?php echo $_POST["widbpijl"]; ?> , je heb helemaal gelijk! Wat zou ik doen als ik jou niet had."
    <br>
    "<?php echo $_POST["wzjdajv"]; ?>Mij vervelen, Sire".
    </div>
    
</body>


</html>
























    
</body>
</html>
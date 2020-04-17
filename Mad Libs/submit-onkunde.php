<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $wzjgwk = $_POST["wzjgwk"];
        $mwpkjgo = $_POST["mwpkjgo"];
        $wisjef = $_POST["wisjef"];
        $voorwerp = $_POST["voorwerp"];
        $wijbpe = $_POST["wijbpe"];
        $wijspe = $_POST["wijspe"];
        $wihedjko = $_POST["wihedjko"];
    }

    if(empty($wzjgwk) || empty($mwpkjgo) || empty($wisjef) || empty($voorwerp) || empty($wijbpe) || empty($wijspe) || empty($wihedjko)){
        header("Location: Mad Libs.php");
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
        <h1>Onkunde</h1>
        Er zijn veel mensen die goed kunnen <?php echo $_POST["wzjgwk"] ?>.  
        Neem nou <?php echo $_POST['mwpkjgo'];?>. 
        Zelfs met hulp van een <?php echo $_POST["voorwerp"]; ?> 
        of zelfs <?php echo $_POST["wisjef"]; ?> 
        kan <?php echo $_POST['mwpkjgo'];?>  
        niet <?php echo $_POST["wzjgwk"]; ?>. 
        Dat heeft niet te maken met gebrek aan <?php echo $_POST["wijbpe"]; ?> 
    </div>
</body>
</html>
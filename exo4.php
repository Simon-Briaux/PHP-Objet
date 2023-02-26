<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo4</title>
</head>
<body>
    <?php
        include("Personnage.php");

        $Perso1 = new Personnage2("Simon");
        $Perso2 = new Personnage2("Mathias");

        $Perso1->afficherInfos();
        $Perso2->afficherInfos();

        $Perso1->attaquer($Perso2);

        $Perso1->afficherInfos();
        $Perso2->afficherInfos();

    ?>
</body>
</html>
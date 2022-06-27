<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // exercice 1

    echo date("d/m/Y");

    // exercice 2

    echo  "<br>" . date("d-m-Y");

    // exercice 3

    // date en anglais au format lundi 01 janvier 2022
    echo "<br>" . date('l j F Y');
    // date en français au format lundi 01 janvier 2022

    setlocale(LC_ALL, "fr_FR", "french");
    echo "<br>" . utf8_decode(strftime('%A %d %B %G'));


    // exercice 4
    // timestamp du jour a l'instant T
    echo "<br>" . time();
    // timestamp du 2 aout 2016 à 15h:mktime(heures,minutes,secondes,mois,jours,années)
    echo "<br>" . mktime(15, 0, 0, 8, 2, 2016);

    // exercice 5
    // je calcule le timestamp du 16 mai 2016
    $date1 = mktime(0, 0, 0, 5, 16, 2016);
    // je calcule le timestamp du 27 juin 2022
    $date2 = mktime(0, 0, 0, 6, 27, 2022);
    // je fais la difference entre les deux dates et je divise par le nombre de seconde dans une journée
    echo "<br>" . ($date2 - $date1) / (60 * 60 * 24);

    // exercice 6
    // j'utilise la fonction cal days in month pour calculer le nombre de jours dans le mois : (calendrier gregorian,mois , année)
    echo "<br>" . cal_days_in_month(CAL_GREGORIAN, 2, 2016);

    // exercice 7
// j'utilise la fonction strtotime pour ajouter 20 jours 
    echo "<br>" .  date('d-m-Y', strtotime('+20 days'));

    // exercice 8
// j'utilise la fonction strtotime pour soustraire 22 jours 
    echo "<br>" .  date('d-m-Y', strtotime('-22 days'));

    ?>




</body>

</html>
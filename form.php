<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="assets/pages/formresponse.php" method="get">
        <input name="password" placeholder="1 à 100" type="number">
        <label>
        <input name="caps" type="checkbox">
        Utiliser des Majuscules</label>
        <label>
        <input name="number" type="checkbox">
        Utiliser des chiffres</label>
        <label>
        <input name="spacechars" type="checkbox">
        caractères spéciaux</label>
        <label>
            <input type="radio" name="disabled" value="enable">
        Utiliser tous les caractères</label>
        <label>
            <input type="radio" name="disabled" value="disable">
        Enlever les caractères trompeurs (0,O,0,I,i,l,1)</label>

        <input type="submit">
    </form>

</body>
</html>
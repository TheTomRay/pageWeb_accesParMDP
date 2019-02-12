<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>formulaire</title>
</head>
<body>
    hello;
    <?php
        $mdp = $_POST['motdepasse'];
        if(isset($mdp))
        {
            if($mdp=='kangourou')
            {
               echo '<p>Bravo, vous êtes bien connecté au serveur de la NASA</p>';
            }
            else
            {
                echo '<p> Voulez qu\'on vous aide a trouver le mot de passe</p>';
            }
        }
    ?>

</body>
</html>
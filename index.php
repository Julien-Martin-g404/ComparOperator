<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>ComparOperator</title>
</head>

<body>

    <?php
    include('partials/navbar.php');
    include('utils/bdd.php');
    ?>

    <section id="animation"></section>
    <section id="voyages">


        <?php
        // Requête SQL pour récupérer les lieux de destination distincts
        $query = 'SELECT DISTINCT location, photo FROM destination';

        // Exécution de la requête
        $stmt = $db->query($query);

        // Compteur pour savoir combien de divs ont été affichées
        $count = 0;

        // Affichage des résultats sous forme de divs
        echo '<div style="text-align:center;">'; // ajout de la propriété CSS

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $location = $row['location'];
            $photo = $row['photo'];

            // Si on a affiché 3 divs, on passe à la ligne suivante
            if ($count % 3 == 0) {
                echo '<br />';
            }

            echo '<div class="card">';
            echo '<img class="img-card" src="images/' . $photo . '" />';
            echo '<br />';
            echo $location;
            echo '</div>';

            $count++;
        }

        echo '</div>'; // fin de la balise "div" contenant les divs générées
        ?>




    </section>


</body>

</html>
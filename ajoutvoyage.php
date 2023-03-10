<?php
include('utils/bdd.php');
include('classes/Manager.php');

$manager = new Manager($db);
$tos = $manager->selectionOperator();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout Voyage</title>
</head>

<body>

    <h1>Ajouter une destination</h1>
    <form method="post" action="process/ajoutdestination.php" enctype="multipart/form-data">
        <table>
            <tr>
                <th>Colonne 1</th>
                <th>Colonne 2</th>
            </tr>
            <tr>
                <td><label for="agence">Agence:</label></td>
                <td><select name="agence" id="agence">
                        <?php foreach ($tos as $to) : ?>
                            <option value="<?php echo $to['id']; ?>"><?php echo $to['name']; ?></option>
                        <?php endforeach; ?>
                    </select> </td>
            </tr>
            <tr>
                <td> <label for="destination">Destination:</label></td>
                <td> <input type="text" name="destination" id="destination"></td>
            </tr>
            <tr>
                <td><label for="tarif">Tarif:</label></td>
                <td><input type="number" name="tarif" id="tarif"></td>
            </tr>
            <tr>
                <td><label for="image">Image:</label></td>
                <td><input type="text" name="image" id="image"></td>
            </tr>
            <tr>
                <td>
                    <button type="submit"> Valider </button>
                </td>

            </tr>
        </table>


    </form>


</body>

</html>
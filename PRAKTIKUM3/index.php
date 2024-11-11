<?php
include "orang.php";
include "visibility.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratikum 2</title>
</head>
<body>
    <h1>Pratikum 2</h1>
    <div>
        <?php
            $james = new orang ();
            $james->nama = " James Smith";

            $james->ucapsalam();

            echo "<br>";

            $nova = new orang();
            $nova->nama = " Nova Wijaya";

            $nova->ucapsalam();

            echo "<br>";

            $visibility = new Visibility();
            $visibility->tampilkanproperty();

            echo "Ini akses di luar kelas  <br>";
            echo "Public :" . $visibility->public . "<br>";
            echo "Protected :" . $visibility->protected . "<br>";
            echo "Private :" . $visibility->protected . "<br>";



        ?>
    </div>


</body>
</html>
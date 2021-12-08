<?php
include("./controller.php");
include("./functions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Produktoversigt</title>
</head>
<body>
<h1 style="color:WHITE;">Produktoversigt</h1>
<hr>
</body>
<html>
<style type="text/css">
    body,td,th {
    font-size: 28px;
    color: #FFFFFF;
    background: #363535;
}
</style>
</html>
<pre>
<?php
    $lanestol1array=["Nobel 8900", 14.995, "Egetræ", "Bredde: 69 cm", "Dybde: 72 cm", "Højde 116 cm"];
    $lanestol2array=["Cantate 6010", 14.445, "Bøgetræ", "Bredde: 68 cm", "Dybde: 78 cm", "Højde 114 cm"];
    $lanestol3array=["Plus 5900", 11.260, "Bøgetræ", "Bredde: 71 cm", "Dybde: 72 cm", "Højde 116 cm"];
    $lanestol4array=["Plus 5910", 11.260, "Egetræ", "Bredde: 71 cm", "Dybde: 72 cm", "Højde 116 cm"];
    $lanestol5array=["Plus 5980", 15.550, "Egetræ", "Bredde: 71 cm", "Dybde: 72 cm", "Højde 110 cm"];
    $lanestol6array=["5610 Applaus", 7.200, "Bøgetræ", "Bredde: 64.5 cm", "Dybde: 68 cm", "Højde 119 cm"];
    print_r($lanestol1array);
    echo "<br>";
    ?>
    <html>
    <img src= "8900 nobel.PNG" alt="chair one" width="350" height="350"
    align="middle">
    </html>
    <a href="./basket.php"><p style="color:red;">Tilføj til kurv</p> </a>
    <hr>

    <?php
    print_r($lanestol2array);
    echo "<br>";
    ?>
    <html>
    <img src= "cantate 6010.PNG" alt="chair two" width="350" height="350"
    align="middle">
    </html>
    <a href="./basket.php"><p style="color:red;">Tilføj til kurv</p> </a>
    <hr>

    <?php
    print_r($lanestol3array);
    echo "<br>";
    ?>
    <html>
    <img src= "plus 5900.PNG" alt="chair three" width="350" height="350"
    align="middle">
    </html>
    <a href="./basket.php"><p style="color:red;">Tilføj til kurv</p> </a>
    <hr>

    <?php
    print_r($lanestol4array);
    echo "<br>";
    ?>
    <html>
    <img src= "plus 5910.PNG" alt="chair four" width="350" height="350"
    align="middle">
    </html>
    <a href="./basket.php"><p style="color:red;">Tilføj til kurv</p> </a>
    <hr>

    <?php
    print_r($lanestol5array);
    echo "<br>";
    ?>
    <html>
    <img src= "plus 5980.PNG" alt="chair five" width="350" height="350"
    align="middle">
    </html>
    <a href="./basket.php"><p style="color:red;">Tilføj til kurv</p> </a>
    <hr>

    <?php
    print_r($lanestol6array);
    ?>
    <html>
    <img src= "5610 applaus.PNG" alt="chair six" width="350" height="350"
    align="middle">
    </html>
    <a href="./basket.php"><p style="color:red;">Tilføj til kurv</p> </a>
    <hr>

<pre>
</body>
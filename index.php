<?php
include 'includes/class-autoload.inc.php';
echo '<link rel="stylesheet" type="text/css" href="style.css">';

// $cow  = new Cow('Herbivore', 'Grass');
// $lion = new Lion('Canirval', 'Meat');
// echo '<div>';
// echo '<b>Cow Object</b> <br>';
// echo '<p>The Cow belongs to the ' . $cow->get_family() . ' family and eats ' . $cow->get_food() . '<br><br>';
// echo '<b>Lion Object</b> <br>';
// echo '<p>The Lion belongs to the ' . $lion->get_family() . ' family and eats ' . $lion->get_food();
// echo '</div>';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    $usersObj = new UsersView();
    $usersObj->showUser("Fahd");

    // $usersObj2 = new UsersContr();
    // $usersObj2->createUser("Jane", "Doe", "1899-05-10");

    ?>
</body>

</html>
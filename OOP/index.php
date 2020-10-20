<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="index.php">
    <input placeholder="масса животного" type="number" name="massa"/>
    <input placeholder="кого съесть" type="text" name="eat"/>
    <button type="submit">подтвердить</button>
</form>
<?php require "Animal.php"; ?>
<?php
require "Igor.php";
require "Bear.php";
$animal = new Animal('Медведь');
$animal2 = new Animal('Игорь');

$animal->move();
$animal2->move();

$animal->massa();
$animal2->massa();

$animal->eat();
$animal2->eat();

?>
<hr size="2px" color="black">
<form action="index.php">
    <input placeholder="Название животного" type="text" name="anim"/>
    <input placeholder="масса животного" type="number" name="massaa"/>
    <input placeholder="кого съесть" type="text" name="eatt"/>
    <button type="submit">подтвердить</button>
</form>
</body>
</html>

<?php
require "Wolf.php";
$wolf = new An($_GET['anim']);
$wolf->movee();
$wolf->massaa();
$wolf->eatt();
?>
<hr color="black" size="2px">
<?php
require "Fish.php";
$animal = new Fish('рыба');
$animal = move();
$animal = massa();
$animal = eat();
?>

<html>
<?php
print_r($_POST);

$name = htmlentities($_POST['HeroName']);
$name = strtolower($name);
$name = ucwords($name);
$race = $_POST['Race'];
$class = $_POST['Class'];
$age = $_POST['Age'];
$gender = $_POST['gender'];
$kingdom = $_POST['KingdomName'];

require "CharacterArrays.php";

$characterport = "<img src=' images/";
$charactersheet = "<header><h4> $name  from $kingdom</h4><br>"."<b>$race $class</b><br> At the age of $age</header>";


switch ($race) {
    case "Human":
        $characterport = $characterport."Hu";
        break;
    case"Elf":
        $characterport = $characterport."El";
        break;
    case"Dwarf":
        $characterport = $characterport."Dw";
        break;
    case "Halfling":
        $characterport = $characterport."Ha";
        break;
    default:
        $characterport = $characterport."";
        }

switch ($class) {
    case "Fighter":
        $characterport = $characterport."Fi";
        break;
    case"Cleric":
        $characterport = $characterport."Cl";
        break;
    case"Thief":
        $characterport = $characterport."Th";
        break;
    case "Magic-User":
        $characterport = $characterport."Ma";
        break;
    default:
        $characterport = $characterport."";
}
if($gender=="Male"){
    $characterport .="Ma.jpg'>";
}else{
    $characterport .="Fe.jpg'>";
}
        ?>
<head>
    <meta charset="UTF-8">
    <title> Made an Adventure</title>
    <link href="view.css" rel="stylesheet" type="text/css">
    <link href="/view.css" rel="stylesheet" type="text/css">
    <style>
        img{
            height: 250px;
            padding: 3pt;
            float: right;
        }
    </style>
</head>
<body>
<div id="form_container">
    <h3 class="Content">The Brave Adventurer</h3>
    <?php
    print ($characterport);
    print ($charactersheet);
    ?>
</div>
</body>
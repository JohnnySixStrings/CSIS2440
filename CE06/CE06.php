<?php
/**
 * Created by PhpStorm.
 * User: JohnB
 * Date: 10/2/2018
 * Time: 6:04 PM
 *
 */
    require_once 'DataBaseConnection.php';
$newMob = array(
    array("Giant Ant", 17, 4, 1, "2d6", 60, "U", 240),
    array("Ape", 14, 4, 2, "1d4", 40, "N", 240),
    array("Assassin Vine", 15, 6, 1, "1d8", 5, "U", 500),
    array("Basilisk", 16, 6, 2,"1d10", 20, "F", 610),
    array("Dire Bear", 15, 7, 3, "2d8", 40, "N", 670),
    array("Fire Beetle", 16, 2,1, "2d4", 40, "N", 25),
    array("Blink Dog", 15, 4, 1, "1d6", 40, "C", 280),
    array("Dragon", 18, 7, 4, "2d10", 80, "H", 800),
    array("Dryad", 15, 2, 1, "1d4", 40, "D", 100),
    array("Elemental", 18, 8, 1, "1d12", 20, "N", 945),
    array("Gelatinous Cube", 12, 4, 1, "2d4", 20, "V", 280)
);

foreach($newMob as $insertArray){
     $insert = "Insert into 'Library'.'Monsters'('MonsterName','MonsterAC','HitDice','MonsterAttack','MonsterDamage','MonsterMove','MonsterTreasure','MonsterXP','Active')".
         "VALUES ('$insertArray[0]','$insertArray[1]',$insertArray[2]','$insertArray[3]','$insertArray[4]','$insertArray[5]','$insertArray[6]','$insertArray[7]','Y');";
}
for($i =0;$i< sizeof($newMob); $i+=2) {
    $update = "UPDATE 'Library'.'Monsters' SET 'Active'='N' WHERE 'MonsterName'='" . $newMob[$i][0] . "'";


    $success = $con->query($update);
    if ($success == FALSE) {
        $failmess = "Whole query" . $update . "<br>";
        echo $failmess;
        die('Invalid query: ' . mysqli_error($con));
    } else {
        echo $newMob[$i][0] . " was removed<br>";
    }
}

echo "<br>This is who is left<hr>";
$search = "SELECT * FROM Library.Monsters WHERE Active = 'Y' ORDER BY MonsterName";
$return = $con->query($search);


if(!$return) {
    $message = "Whole Query" . $search;
    echo $message;
    die('Invalid query:' . mysqli_error($con));
}
echo "<Table><th>Name</th><th>AC</th><th>Hit Dice</th><th>XP</th>";
while ($row = $return->fetch_assoc()){
    echo "<tr><td>Name: ".$row['MonsterName']
        ."</td><td> AC: ".$row['MonsterAC']
        ."</td><td> HD: ".$row['MonsterXP']
        ."</td></tr>";
}
echo"</Table>";
mysqli_close($con);

<?php
/**
 * Created by PhpStorm.
 * User: JohnB
 * Date: 9/4/2018
 * Time: 5:53 PM
 */

$d = date("D");
echo  "<p>$d</p>";
if( $d =="Fri" or $d == "Sat" || $d == "Sun" ){
    $message = "Have a nice weekend";
}elseif ($d == "Mon"){
    $message ="Oh no it's Monday";
}else{
    $message ="Have nice day!";
}
echo $message;

echo "<p> The switch caseprogram</p>";

switch ($d){
    case "Mon":
        echo "<p> Back to work I go!</p>";
        break;
    case "Tue":
        echo "<p>Don't forget you have Web Programming today also don't forget to put the turkey in the oven</p>";
        break;
    case "Wed":
        echo "<p>Break from the school but still have home work...</p>";
        break;
    case "Thu":
        echo "<p>A dreaded day of american music</p>";
        break;
    case "Fri":
        echo "<p>Day to meet national partners </p>";
        break;
    case "Sat":
        echo "<p>Time to work on the server and r&r</p>";
        break;
    case "Sun":
        echo "<p>You made it through a whole week! way to go...</p>";
        break;

}

$a = 0;
$b = 0;
echo '<table width=\'50px\' class = "table" <tr><th>$a</th><th>$b</th></tr>';
for ($i; $i<5;$i++){
    $a += 10;
    $b += 5;
    print ("<tr><td>$a</td><td>$b</td></tr>");

}

echo ("</Table><br>At the end of the loop a = $a b = $b and i= $i </br>");


$i = rand(0,50);
$num = rand(51,100);

do{
    $num--;
    $i++;

}while($i < $num);

echo "<br>Loop Stopped at i = $i and num = $num";


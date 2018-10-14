<?php
Print_r($_POST);
/**
 * Created by PhpStorm.
 * User: JohnB
 * Date: 9/23/2018
 * Time: 7:59 PM
 */ $name =  ucwords(strtolower(htmlentities($_POST['Name'])));
$age = $_POST['Age'];
$address =ucwords(strtolower(htmlentities( $_POST['Address'])));
$state = $_POST['State'];
$sex = $_POST['Sex'];
if ($sex=='F') {

    echo '<body style="background-color:pink">';
}
else {
    echo '<body style="background-color:deepskyblue">';
}

printf("<br><p2>name: %s age: %d address: %s state: %s sex: %s</p2><br>", $name,$age,$address,$state,$sex);
//date(Y) grabs the 4 digit year and in the for each loop
$year = date(Y);
for($i=0;$i<$age;$i++){
    $year-=1;
    print("<p1>".$year."</p1><br>");
}
$file = explode("\n",file_get_contents('PostPage.txt'));
for ($j =0;$j<sizeof($file)-1;$j++){
    Printf("<p1>%s</p1><br>",$file[$j]);
}
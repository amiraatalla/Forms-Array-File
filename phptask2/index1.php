<?php
echo "********************Amira Atalla*******************<br><br>";

$arr = ["PHP","Open Source","ITI","Day2","Arrays"];

echo "arry way one :"."<br><br>";
for ($i=0; $i <count($arr) ; $i++) { 
   // print_r($arr[$i]);
    echo $arr[$i]."<br>";
}

echo "***************************************";
echo "<br><br>";
echo "arry way two :"."<br><br>";

foreach ($arr as $key => $value) {
    
    echo " value ".$key." : ".$value."<br>";
}

echo "***************************************";
echo "<br><br>";
echo "Associative array :"."<br><br>";

$info =array(
    "Name"=>"Amira Reda",
    "Age"=>22,
    "Email"=>"amiraatalla63@gmail.com",
    "Collage"=>"Faculty of Computer and Information"
);

foreach ($info as $key => $value) {
    echo $key."  :  ".$value."<br>";
}
echo "***************************************";
echo "<br><br>";
echo "sorting associative array way one:"."<br><br>";

     asort($info);
    foreach ($info as $key => $value) {
        echo $value."<br>";
    }
echo "***************************************";
echo "<br><br>";
echo "sorting associative array way two:"."<br><br>";

    ksort($info);
    foreach ($info as $key => $value) {
        echo $value."<br>";
    }
echo "***************************************";
echo "<br><br>";
echo "array_key() Info : "."<br><br>";

var_dump(array_keys($info));

echo"<br><br>";
array_keys($info);
foreach ($info as $key => $value) {
    echo $key." : ".$value."<br>";
}

echo "<br><br>";
echo "*****************End of part 1**********************";
echo "<br><br>";
echo "*******************thank you***********************";
echo "<br><br>";

?>
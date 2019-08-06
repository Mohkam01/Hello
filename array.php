<?php 
    $price = array("merc"=>40000,"bmw"=>90000,"volvo"=>10000);
    $array = array("php","java","js","python","c","c++");
    $u_sort = array(0,5,4,6,8,9,3,1,7);
   sort($array);
    ksort($price);
    echo "processing on arrays";
    echo "<br>";
    echo "<br>";
    echo "checking usort function";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo "before sorting through u-sort";
    echo "<br>";
    foreach($u_sort as $key => $value){
        echo $key.":".$value;
        echo "<br>";

    }
    echo "<br>";
    echo "after sorting through u-sort";
    echo "<br>";
    usort($u_sort,"cmp");
    foreach($u_sort as $key => $value){
        echo $key.":".$value;
        echo "<br>";

    }    
    echo "<br>";
    foreach($array as $value){
        echo $value;
        echo "<br>";
    }
    echo "<br>";
    echo "updating the value of php to core-php";
    update_value($array,"php","core-php");
    echo "<br>";
    echo "processing on associative arrays";
    echo "<br>";
    foreach($price as $key=>$value){
        echo "name: ".$key."-> price: ".$value;
        echo "<br>";
    }
    echo "<br>";
    echo "<br>";
    echo "pushing a new element in an array at end";
    echo "<br>";
    echo "<br>";
    array_push($array,"c-sharp");
    var_dump($array);
    echo "<br>";
    echo "<br>";
    echo "pushing a new element in an array at start";
    echo "<br>";
    echo "<br>";
    array_unshift($array,"j-query");
    echo "<br>";
    var_dump($array);
    function update_value($array,$replace,$string){
        for($i = 0; $i < count($array) ; $i++){
            if($array[$i] === $replace){
                $array[$i] = $string;
                
            }
            echo $array[$i];
            echo "<br>";
        }
    }
    function cmp($a,$b){
        if($a == $b) return 0;
        return ($a<$b)?-1:1;
    }

?>
<?php 

    $resulted = 0;

    function showType($var){
        return gettype($var);
    }

    do{
        
    $cont = 0;

    echo "\n==============================MODIFYING-DATA-TYPES==============================";
        
    echo "\nPress 0 to exit the program...\n\n";

    echo "ENTER SOMETHING: ";
    
    $var = readline();
    
    $my_array = str_split($var);

    /*
    for ($i = 0; $i < count($my_array); $i++) {
        echo "\n" . $my_array[$i];
    }*/

    if(count($my_array) == 1 && ($var == 1 || $var == 0)){
        echo "\n" . $var . " is a boolean!";
        $resulted = 1;
        $my_array = [];
    }
    else{
        $resulted = 0;
    }
    
    $alphabet_array = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

    if($resulted == 0){
        for ($i = 0; $i < strlen($var); $i++){
        for($j = 0; $j < count($alphabet_array); $j++){
                if($my_array[$i] == $alphabet_array[$j]){
                    
                    echo "\n" . $var ." is a string!";
                    $resulted = 1;
                    $my_array = [];
                    break 2;
                }
                else{
                    $resulted = 0;
                }
            }
        }

        if($resulted == 0){
            for($i = 0; $i < count($my_array); $i++){
                if($my_array[$i] == '.'){
                    $resulted = 0;
                    $cont++;
                }  
            }
            if($cont > 1 || $my_array[0] == "." || $my_array[count($my_array) - 1] == "."){
                    echo "\n" . $var . " is a string!";
                    $resulted = 1;
                    $my_array = [];
                }
            else if($cont == 1 && $resulted == 0 && count($my_array) > 1 && $var != 1 && $var != 0 && $my_array[0] != "." && $my_array[count($my_array) - 1] != "."){
                    echo "\n" . $var . " is a float!";
                    $resulted = 1;
                    $my_array = [];
                }
                try{
                if($cont == 0 && $resulted == 0 && $var != 1 && $var != 0 && $var/2 == true){
                    echo "\n" . $var . " is an integer!";    
                    $resulted = 1;
                    $my_array = [];
            }}
            catch(TypeError $e){
                    echo "\n" . $var . " is a string!";
                    $resulted = 1;
                    $my_array = [];
                }
           
        }
    }
    
    //echo "\n================================================================================\n";

    } while($var != 0);
    
    echo "\n\nGOODBYE\n:)\n";
?>

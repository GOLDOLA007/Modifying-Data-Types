//substr(string $string, int $offset, ?int $length = null): string

<?php 

    $resulted = 0;

    function showType($var){
        return gettype($var);
    }

    do{
        
    $cont = 0;

    echo "\n========================================================";
        
    echo "\nPress 0 to exit the program...\n";

    
    echo "VALUE: ";

    
    $var = readline();
    
    /*
    for ($i = 0; $i < strlen($var); $i++){
        //$j = (strlen($var) - 1) - $i;
        
        if($j == 0){
            $my_array[$i] = substr($var, $i);    
        }
        else{
            $my_array[$i] = substr($var, $i, $j * (-1));
        }

        echo "\n" . $my_array[$i];
    }*/

    
    $my_array = str_split($var);

    for ($i = 0; $i < count($my_array); $i++) {
        echo "\n" . $my_array[$i];
    }


    $alphabet_array = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    //$extra_array = [',', '-', '+', '.', '~', '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '_', '=', '?', '/', '|', '\\', '"', "'", ':', ';', '<', '>', '`', '[', ']', '{', '}'];

    // $i will represent index of $my_array, and $j will represent the index of $extra_array
    
    if(count($my_array) == 1 && ($var == 1 || $var == 0)){
        echo "\nThe value is a boolean!";
        $resulted = 1;
        $my_array = [];
    }
    else{
        $resulted = 0;
    }

    if($resulted == 0){
        for ($i = 0; $i < strlen($var); $i++){
        for($j = 0; $j < count($alphabet_array); $j++){
                if($my_array[$i] == $alphabet_array[$j]){
                    
                    echo "\nThe value is a string!";
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
                    echo "\nThe value is a string!";
                    $resulted = 1;
                    $my_array = [];
                    //break;
                }
            else if($cont == 1 && $resulted == 0 && count($my_array) > 1 && $var != 1 && $var != 0 && $my_array[0] != "." && $my_array[count($my_array) - 1] != "."){
                    echo "\nThe value is a float!";
                    $resulted = 1;
                    $my_array = [];
                    //break;
                }
                try{
                if($cont == 0 && $resulted == 0 && $var != 1 && $var != 0 && $var/2 == true){
                    echo "\nThe value is an integer!";    
                    $resulted = 1;
                    $my_array = [];
                    //break;
            }}
            catch(TypeError $e){
                    echo "\nThe value is a string!";
                    $resulted = 1;
                    $my_array = [];
                    //break;
                }
           
        }
    }
    
    echo "\n========================================================\n";

    } while($var != 0)

    // $my_array = [$var];
    //echo "The variable is a " . showType($var) . "\n";
    //echo "FIRST ELEMENT: " . $my_array[0];
    //echo substr($var, 0, -3);
    // $i will be our offset and $j will be our length
?>

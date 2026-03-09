<?php 


    function is_a_boolean($my_array, $var, &$boolean_marker){
        if(count($my_array) == 1 && ($my_array[0] == 1 || $my_array[0] == 0)){
            echo "\n" . $var . " is a boolean!";
            $boolean_marker=true;
        }
    }


    function count_dots($my_array){
        $cont = 0;    
        for ($i = 0; $i < count($my_array); $i++){
            if ($my_array[$i] == '.'){
                $cont++;
            }
        }
        return $cont;
    }

    function is_a_string($my_array, $var, &$boolean_marker){
        $characters = [
        'a','b','c','d','e','f','g','h','i','j','k','l','m',
        'n','o','p','q','r','s','t','u','v','w','x','y','z',
        'A','B','C','D','E','F','G','H','I','J','K','L','M',
        'N','O','P','Q','R','S','T','U','V','W','X','Y','Z',
        '!','@','#','$','%','^','&','*','(',')',
        '-','_','=','+','[',']','{','}',';',':',
        '"',"'",'<','>','?','/','\\','|',','
        ];
    
        // $i is for $my_array and $j is for $characters
        for ($i=0; $i < strlen($var); $i++){
            for ($j = 0; $j < count($characters); $j++){
                if ($my_array[$i] == $characters[$j] || count_dots($my_array) > 1){
                    echo "\n" . $var ." is a string!";
                    $boolean_marker=true;
                    break 2;
                }
            }
        }
    }

    function is_a_float($my_array, $var, &$boolean_marker){
        if(count_dots($my_array) == 1){
            echo "\n" . $var . " is a float!";
            $boolean_marker=true;
        }
    }
    
    function _init_(){
        
        do{
            echo "\n==============================MODIFYING-DATA-TYPES==============================";
        
            echo "\nPress 0 to exit the program...\n\n";

            echo "ENTER SOMETHING: ";

            $var = readline();

            $my_array = str_split($var);

            $boolean_marker=false;

            is_a_boolean($my_array, $var, $boolean_marker);

            if(!$boolean_marker){
                is_a_string($my_array, $var, $boolean_marker);
            }

            if(!$boolean_marker){
                is_a_float($my_array, $var, $boolean_marker);
            }

            if(!$boolean_marker){
                echo "\n" . $var . " is an integer!";
            }
            
        } while($var != 0);

        echo "\n\nGOODBYE\n:)\n";
    }

    _init_();

?>
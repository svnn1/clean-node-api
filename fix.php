The code in line 7 could be fixed as follows: 

 if(is_array($input)){
     echo processArray($input);
 } else if (is_string($input)){
     echo processArray([$input]);
 }
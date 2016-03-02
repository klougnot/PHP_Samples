<?php
  
 /*
flat_array makes the $_FILES[ much more user friendly
Array ( [0] => Array ( [name] => cat1.jpg [type] => image/jpeg [tmp_name] => C:\Windows\Temp\phpEF73.tmp [error] => 0 		[size] => 9511 ) 
*/
 function flat_array($vector) { 
    $result = array(); 
    foreach($vector as $key1 => $value1) 
        foreach($value1 as $key2 => $value2) 
            $result[$key2][$key1] = $value2; 
    return $result; 
} 

function insert_image($html_file_array){
	if(isset($_FILES[$html_file_array])){
	
	$f_array = flat_array($_FILES[$html_file_array]);
	foreach ($f_array as $key => $value){
			//insert $value['name'];	
			$tmp_name= $value['tmp_name'];
			$size=$value['size'];
			$name=$value['name'];
			$data= file_get_contents($tmp_name);
		}
}
	
}


echo insert_image('files');



?>


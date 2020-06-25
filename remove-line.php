<?php
// $remove = [];    // chứa các cặp bị  xóa
// $remove[] = [96,104];    // xóa từ dòng 96->104, Xem hình minh họa để biết cách lấy số 
// $remove[] = [123,127];    // Number of the line we are deleting

$file_out = file("nguon-tho.txt"); // Read the whole file into an array
$remove = file("xoadong.txt"); // Read the whole file into an array
file_put_contents("file-chua-dung.css", '' );	
foreach( $remove as $_cap ){
	echo $_cap . "\n";
	$cap = explode(",", $_cap );
	foreach (range($cap[0], $cap[1] ) as $i){
		echo $i ." - " . $file_out[$i] . "\n";
		file_put_contents("file-chua-dung.css", $file_out[$i], FILE_APPEND );		
		unset($file_out[$i]);
	}
	
	// print_r($cap);
	// for ( $i = $cap[0]; $i < $cap[1]; $i++ ) {
		
	// 	echo $i;
	// 	echo $file_out[$i];
	
	// }
}
//Recorded in a file
file_put_contents("file-sach.txt", implode("", $file_out));
?>

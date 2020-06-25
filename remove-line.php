<?php
$remove = [];    // chứa các cặp bị  xóa
$remove[] = [96,104];    // xóa từ dòng 96->104, Xem hình minh họa để biết cách lấy số 
$remove[] = [123,127];    // Number of the line we are deleting

$file_out = file("nguon-tho.txt"); // Read the whole file into an array

foreach( $remove as $cap ){
//Delete the recorded line
	for ( $i = $cap[0]; $i <= $cap[1]; $i++ ) {
		unset($file_out[$i]);
	}
}
//Recorded in a file
file_put_contents("file-sach.txt", implode("", $file_out));
?>
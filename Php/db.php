<?php
require "lib/rb.php";

R::setup('mysql:host=localhost;dbname=news','root','');

function get_time($id){
	$time = R::findAll('news');
	$all_time = array();

	foreach ($time as $row) {
		if ($row['idate'] == $id) {
				$all_time[] = $row;
		}
	}
}

?>
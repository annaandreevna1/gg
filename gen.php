<?php
    function gen_table() {
		$connection = new mysqli("localhost", "root", "");
		if (!$connection) {
		    echo "DB connection error!";
			return;
		}
		$response = $connection->query("SELECT * from gg.hh;");
		$str = "<table>";
		foreach ($response as $item){
			$str .= "<tr>";
			$str .= "<td>";
			$str .= $item["MuSQL"];
			$str .= "</td>";
			$str .= "</tr>";

		
		}
		$str .= "</table>";
		echo $str;
	}
?>
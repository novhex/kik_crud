<?php
 
echo "<table border=1>";
foreach($products as $product_info):
	echo "<tr>"; 
	echo "<td>".$product_info->id."</td>";
	echo "<td>".$product_info->item_code."</td>";
	echo "<td>".$product_info->item_name."</td>";
	echo "<td>".$product_info->price."</td>";
	echo "</tr>";
endforeach;
echo "</table>";
?>
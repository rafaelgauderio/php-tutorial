<?php

$arr = [1,3,9,7,13];

echo "<table>";
foreach ($arr as $value) {

	echo '<td style="border:1px solid">' . $value . "</td>";
	echo '<td style="border:1px dotted">' . $value . "</td>";
	echo '<td style="border:2px groove">' . $value . "</td>";	
}
echo "</table>";


//nova tabela
echo "<br><br>";
$arr2 = ["Rafael","Juliana","Paula","Ana","Claudia"];

echo "<table>";
 echo "<tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
	<th>Quantity</th>
    <th>Price</th>
  </tr>";
foreach ($arr as $value) {

	echo '<td style="border:1px solid">' . $value . "</td>";
		
}
echo "</table>";



//nova tabela
echo "<br><br>";
echo "<table>";
foreach ($arr2 as $value) {

	echo '<tr><td style="border:2px double">' . $value . "</tr></td>";	
	
}
echo "</table>";

?>
<?php
#####
function select_menu($name, $array, $sticky) {
	echo "<select name=\'$name\' required='required'>";
	foreach ($array as $value){
		if ($value == $sticky)
		{
			echo "<option value=\"$value\" selected='selected'>$value</option>\n";
		}
		else
		{
			echo "<option value=\"$value\">$value</option>\n";
		}
	}
}
echo '</select>';
######
?>
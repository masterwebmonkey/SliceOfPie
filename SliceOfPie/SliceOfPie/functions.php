<?PHP
	function dumpArray($array) {
		echo "<table border=1 cellpadding=2 cellspacing=1>\n";
		echo "<tr><th bgcolor=\"#6B86BD\">Variable</th>\n";
		echo "<th bgcolor=\"#6B86BD\">Value</th></tr>\n";
		while (list($key, $val) = each($array)) {
			echo "<tr><td bgcolor=\"#EEEEEE\">$key</td>\n";
			if (is_array($val)) {
				echo "    <td bgcolor=\"#CCCCCC\">\n";
				dumpArray($val);
				echo "</td></tr>";
			} else {
				echo "    <td bgcolor=\"#CCCCCC\"><pre>".htmlspecialchars($val)."</pre></td></tr>\n";
			}
		}
		echo "</table>";
	}
?>
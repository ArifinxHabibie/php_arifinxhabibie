<?php 
$jml = $_GET['jml']; 
echo "<table border=1>"; 
for ($a = $jml; $a > 0; $a--) { 
    $sum = 0;

    for ($b = $a; $b > 0; $b--) { 
        $sum += $b;
    }
    echo "<tr><td colspan='4'>TOTAL: $sum </td></tr>";

    for ($b = $a; $b > 0; $b--) { 
        echo "<td width='20px'>$b</td>"; 
    }
} 
echo "</table>"; 
?>

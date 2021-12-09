<?php
$a = array(3);
$a[0] = "sato";
$a[1] = "suzuki";
$a[2] = "takahashi";

echo ($a[0])."\n";
echo ($a[1])."\n";
echo ($a[2])."\n";
?>

<?php
$a = ["sato", "suzuki", "takahashi" ];

echo ($a[0])."\n";
echo ($a[1])."\n";
echo ($a[2])."\n";
?>

<?php
$a = ["sato", "suzuki", "takahashi" ];

$a[1] = "tanaka";

echo ($a[0])."\n";
echo ($a[1])."\n";
echo ($a[2])."\n";
?>

<?php
$a = [ ["sato","suzuki"],["takahashi","tanaka"] ];

echo ($a[0][0])."\n";
echo ($a[0][1])."\n";
echo ($a[1][0])."\n";
echo ($a[1][1])."\n";

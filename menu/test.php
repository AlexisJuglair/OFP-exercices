Hello world !!!

<?php
$a = 1;
$b = "<h1>test</h1>";

print($a);
print($b);
$c = $_GET["c"];

while($a<=$c) {
    print($a . $b);
    $a++;
}
?>
<?php
//Creating array with 1 000 000 elements
$a = array();
for ($i = 0; $i < 1000000; ++$i)
{
    $a[] = 100;
}

//Measure
$time = time();
for ($i = 0; $i < 1000000000; ++$i)
{
    $b = count($a);
}
print("1 000 000 000 iteration of count() took ".(time()-$time)." sec\n");

$time = time();
for ($i = 0; $i < 1000000000; ++$i)
{
    $b = sizeof($a);
}
print("1 000 000 000 iteration of sizeof() took ".(time()-$time)." sec\n");
?>
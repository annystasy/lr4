<?php
$NUM_E = 2.71828;
print ("Число е равно $NUM_E<br>");
$num_e1 = $NUM_E;
print('$num_e1 =');
print("$num_e1 - ");
print(gettype($num_e1));
settype ($num_e1, 'string');
print('<br>$num_e1 =');
print("$num_e1 - ");
print(gettype($num_e1));
settype ($num_e1, 'int');
print('<br>$num_e1 =');
print("$num_e1 - ");
print(gettype($num_e1));
settype ($num_e1, 'bool');
print('<br>$num_e1 =');
print("$num_e1 - ");
print(gettype($num_e1));
?>

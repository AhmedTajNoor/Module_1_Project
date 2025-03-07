<?php
//C/5 = F-32/9
define("FACTOR",9/5);
define("OFFSET",32);

echo"Temparature Value: ";
$temparature = (float)readline();
echo"Convert to (1: Fahrenheit, 2: Celcius) : ";
$choice = (int)readline();

switch( $choice ) {
    case 1:
        $result = $temparature * FACTOR + OFFSET;
        echo "Temparature in Fahreneit : $result\n";
        break;
    
    case 2:
        $result = ($temparature-OFFSET) / FACTOR;
        echo "Temparature in Celcius : $result\n";
    break;

    default:
        echo"Invalid choice!!";
        break;

}
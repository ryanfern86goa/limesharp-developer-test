<?php
/**
 * task 1, array iterator
 */

$contents = array("rocky","rambo", "terminator");

for ($i=0; $i<3; $i++) {

    foreach($contents as $val) {
        echo "<br/>".$val;
    }
}

?>
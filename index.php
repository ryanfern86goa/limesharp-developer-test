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

/**
 * task 2, remove vowel
 */

// convert to lower case
$word = strtolower("liMeSHArp DeveLoper TEST");

echo '<br/><br/>';

// remove vowel from string, upper case first character of word
echo ucwords(preg_replace("/([aeiou]+)/i", "", $word));

?>
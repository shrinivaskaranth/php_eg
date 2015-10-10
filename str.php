<?php
$input_word = "Chandrashekhara";
$count_vowels=0;
$vowels = array('a', 'A', 'e', 'E', 'i', 'I', 'o', 'O', 'u', 'U');
$vowels_key_value = array('a' => 'A', 'e' => 'E', 'i' => 'I', 'o' => 'O', 'u' => 'U');
$len=strlen($input_word);
$i=0;
while($i<$len) {
    $char=substr($input_word,$i,1);
    echo $char; 
	if (array_key_exists($char, $vowels_key_value) || in_array($char, $vowels_key_value))
    //if(in_array($char,$vowels))
        $count_vowels = $count_vowels + 1;
    $i = $i + 1;
}

echo '<br>Total number of vowels in word, ', $input_word, ' of length ', $len, ' = ', $count_vowels;
?>

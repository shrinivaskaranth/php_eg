<?php
$शब्दः = 'वेदान्ता';
$अचां_संख्या=0;
$अच् = array('अ', 'ौ', ' ै', 'ा', 'ी', ' ू', ' ि', ' ु', ' े ', 'ो ', ' ॉ', 'ृ ', 'आ', 'इ', 'ई', 'उ', 'ऊ ', 'ऋ', 'ॠ', 'ए', 'ऐ', 'ओ', 'औ', 'ं','ः' );
$अच्पर्यायाः = array(	'अ' => 'x',
					'आ' => 'ा',
					'इ' => 'ि',
					'ई' => 'ी',
					'उ' => 'ु',
					'ऊ ' => 'ू',
					'ऋ' => 'ृ',
					'ए' => 'े',
					'ऐ' =>'ै',
					'ओ' => 'ो',
					'औ' =>'ौ'	);
$आयामः = strlen($शब्दः);
$i=0;
while($i<$आयामः) {
    $वर्णः=substr($शब्दः,$i,1);
    echo $वर्णः; 
	if (array_key_exists($वर्णः, $अच्पर्यायाः) || in_array($वर्णः, $अच्पर्यायाः))
    //if(in_array($char,$vowels))
        $अचां_संख्या = $अचां_संख्या + 1;
    $i = $i + 1;
}

echo '<br>Total number of vowels in word, ', $शब्दः, ' of length ', $आयामः, ' = ', $अचां_संख्या ;
?>

<?php

 class spel {

 public $letters = array();
 public $gekozenwoord;

  function randomWoord() {
    $woorden = array(
      'appel',
      'boom',
      'auto',
      'school',
      'tafel',
      'laptop',
      'huis',
      'zomer',
    );
    $this->gekozenwoord = $woorden[rand ( 0 , count($woorden) -1)];
    return $this->gekozenwoord;
  }

  function addLetter($letter){
    array_push($this->letters, $letter);
  }

  function showWoord(){
    return "string";
  }

 }


$spel = new spel ();
echo $spel ->randomWoord();
$spel->addLetter('a');
$spel->addLetter('r');
echo "<br>";
print_r($spel->letters);
$spel2 = new spel();
$spel2->addLetter('t');
echo "<br>";
print_r($spel->letters);
echo "<br>";
print_r($spel2->letters);
echo "<br>";
echo $spel->gekozenwoord;
echo "<br>";

$word = $spel->gekozenwoord;
$lettersGuessed = array('b','a','e');
$pattern = '/[^' . implode('', $lettersGuessed) . ']/';   // results in '/[^ba]/
$maskedWord = preg_replace($pattern, '-', $word);
echo $maskedWord;
?>

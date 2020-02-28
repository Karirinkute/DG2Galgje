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
      $pattern = '/[^' . implode('', $this->letters) . ']/';   // results in '/[^ba]/
      return preg_replace($pattern, '-', $this->gekozenwoord);
  }

  function isWoord($woord){

  }

 }


$spel = new spel ();
echo $spel ->randomWoord();
$spel->addLetter('a');
$spel->addLetter('o');
$spel->addLetter('s');
echo "<br>";
echo $spel->showWoord();
// $word = $spel->gekozenwoord;
// $lettersGuessed = array('b','a','e');
// $pattern = '/[^' . implode('', $lettersGuessed) . ']/';   // results in '/[^ba]/
// $maskedWord = preg_replace($pattern, '-', $word);
// echo $maskedWord;
?>

<?php

 class spel {

 public $letters = [];
 public $gekozenwoord;
 public $woorden = [
      'appel',
      'boom',
      'auto',
      'school',
      'tafel',
      'laptop',
      'huis',
      'zomer',
    ];

  function randomWoord() {

    $this->gekozenwoord = $this->woorden[rand ( 0 , count($this->woorden) -1)];

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
      if (in_array($woord, $this->woorden)) {
          return "Found";
      }

      return "Not Found";
  }
 }


$spel = new spel ();
echo $spel ->randomWoord();
$spel->addLetter('a');
$spel->addLetter('o');
$spel->addLetter('s');
echo "<br>";
echo $spel->showWoord();
echo "<br>";
echo $spel->isWoord('appel', $spel->randomWoord());
?>

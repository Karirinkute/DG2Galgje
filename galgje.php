<?php

 class game {

 public $letters = [];
 public $chosenword;
 public $words = [
      'apple',
      'tree',
      'car',
      'school',
      'table',
      'laptop',
      'house',
      'summer',
    ];

  function randomWord() {

    $this->chosenword = $this->words[rand ( 0 , count($this->words) -1)];

    return $this->chosenword;
  }

  function addLetter($letter){
    array_push($this->letters, $letter);
  }

  function ShowWord(){
      $pattern = '/[^' . implode('', $this->letters) . ']/';
      return preg_replace($pattern, '-', $this->chosenword);
  }

  function isWord($woord, $randomRandom){
      if ($woord == $randomRandom) {
          return "Found";
      }

      return "Not Found";
  }
 }


$game = new game ();
$randomRandom = $game ->randomWord();
echo $randomRandom;
$game->addLetter('a');
$game->addLetter('o');
$game->addLetter('s');
echo "<br>";
echo $game->ShowWord();
echo "<br>";
echo $game->isWord('apple', $randomRandom);
?>

<?php

// your game class
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

// init a new game
$game = new game();

// if the form is not sent before, show the form
if( !isset( $_POST['chosenword'] ) )  { ?>

<form action="" method="post">
  <select name="chosenword">
    <?php foreach( $game->words as $word ) { ?>
      <option value="<?= $word; ?>"><?= $word; ?></option>
    <?php } ?>
  </select>
  <button type="submit">Submit</button>
</form>

<?php } else {
  // this will be executed if the form was sent before

  // set the chosenword from the post data
  $game->chosenword = $_POST['chosenword'];

  // do the rest of your code
  //$randomRandom = $game->randomWord();
  //echo $randomRandom;
  echo $game->chosenword;
  $game->addLetter('a');
  echo "<br>";
  echo $game->ShowWord();
  echo "<br>";
  echo $game->isWord('apple', $game->chosenword);
}
?>



<?php
$words = [
    'this',
    'is',
    'a',
    'list',
    'of',
    'words'
];

function isWoord($woord, $words){
    if (in_array($woord, $words)) {
        echo "Found";

    }
}

isWoord('words', $words);

 ?>

<?php
class Movie {
  // private properties are only accessible within the class
  // to be directly accessible outside of class, use public
  public $title;
  private $rating;

  // constructor
  function __construct($title, $rating) {
    $this->title = $title;
    $this->rating = $rating;
  }

  // getter - view movie rating
  function getRating() {
    return $this->rating;
  }

  // setter - allow a user to add rating only under certain conditions
  function setRating($rating) {
    if($rating == 'G' || $rating == 'PG' || $rating == 'PG-13' || $rating == 'R' || $rating == 'NR') {
      return $this->rating = $rating;
    }
    return $this->rating = 'NR';
  }
}

$movie1 = new Movie('Avengers Endgame', 'PG');

echo $movie1->getRating().'<br>';
echo $movie1->setRating('dog').'<br>';
echo gettype($movie1);
echo print_r($movie1);
echo $movie1->title;
echo $movie1->rating; // error
?>
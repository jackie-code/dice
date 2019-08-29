<?php

class Dice
{
  private $face_value; // A number from 1 to 6
  private $num_sides;

  // Roll the die:
  function roll()
  {
    $this->face_value = rand(1, $this->num_sides); // set face value to a random number from 1 to 6
  }

  // Return the face value (i.e. the number facing up):
  function get_face_value()
  {
    return $this->face_value; // Return the current face value
  }

  function __construct($num_sides = 6)
  {
    $this->num_sides = $num_sides;
    // $this->face_value = 6; // Dice always start with 6 facing up
    $this->roll(); // Dice always start with 6 facing up
  }
}
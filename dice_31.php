<?php
​
include "dice_class_31.php";
​
$p1 = empty($_GET['player1']) ? "Player 1" : $_GET['player1'] ;
$p2 = empty($_GET['player2']) ? "Player 2" : $_GET['player2'] ;
$sides = empty($_GET['sides']) ? 6 : $_GET['sides'] ;
$rolls = empty($_GET['rolls']) ? 10 : $_GET['rolls'] ;
​
function winner() {
  global $d1, $d2, $p1, $p2;
  if ($d1->get_face_value() > $d2->get_face_value()) {
    return $p1;
  }  
  if ($d2->get_face_value() > $d1->get_face_value()) {
    return $p2;
  }  
  return "Tie";
}
​
$d1 = new Dice($sides);
$d2 = new Dice($sides);
?>
<style>
  table, tr, td, th {
    border: 1px solid gray;
    border-collapse: collapse;
  }
  table {
    width: 100%;
  }
</style>
<table>
  <tr>
    <th>Roll #</th>
    <th>Dice 1</th>
    <th>Dice 2</th>
    <th>Winner</th>
  </tr>
<?php
for ($i = 1; $i <= $rolls; $i++) {
  $d1->roll();
  $d2->roll();
  ?>
  <tr>
    <td><?= $i ?></td>
    <!-- "skinny arrow" used to access methods in an object. -->
    <td><?= $d1->get_face_value() ?></td>
    <td><?= $d2->get_face_value() ?></td>
    <td><?= winner() ?></td>
  </tr>
  <?php
}
?>
</table>
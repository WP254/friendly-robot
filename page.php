<?php
/**
 * 
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); 

?>

<main id="site-content" role="main">
  <div class="entry-content" style="margin: 200px !important;">

<?php

$open = get_field('loket');
$today = date('w');
$days = array(
  0 => 'Zo',
  1 => 'Ma',
  2 => 'Di',
  3 => 'Wo',
  4 => 'Do',
  5 => 'Vr',
  6 => 'Za'
);

echo "<div class='open'>";
  foreach($open['days'] as $key => $openDay) {
    echo "<div class='day".($openDay == $today ? ' today' : '')."'>";
      echo "<span class='weekday'>".$days[$openDay]." </span>";
      echo "<span class='time'>";
        // Voormiddag
        if($open['hours'][$openDay]['enkel_op_afspraak'] == 1){
          if($open['hours_afternoon'][$openDay]['enkel_op_afspraak'] == 1){
            echo "Op afspraak";
          }else{
            echo "Voormiddag op afspraak";
          }
        }else{
          echo cleanTime($open['hours'][$openDay]['start']);
          echo " - ";
          echo cleanTime($open['hours'][$openDay]['end']);
          echo "u";
        }

        // Namiddag
        if($open['hours_afternoon'][$openDay]['enkel_op_afspraak'] == 1 && $open['hours'][$openDay]['enkel_op_afspraak'] != 1){
          if(isset($open['hours'][$openDay]['start']) && !empty($open['hours'][$openDay]['start'])){
            echo ", namiddag op afspraak";
          }else{
            echo "Namiddag op afspraak";
          }
        }else{
          if(isset($open['hours_afternoon'][$openDay]['start']) && !empty($open['hours_afternoon'][$openDay]['start'])){
            echo ", ";
            echo cleanTime($open['hours_afternoon'][$openDay]['start']);
            echo " - ";
            echo cleanTime($open['hours_afternoon'][$openDay]['end']);
            echo "u";
          }
        }
      echo "</span>";
    echo "</div>";
  }
echo "</div>";


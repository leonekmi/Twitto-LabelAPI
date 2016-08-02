<?php
class TLAI {

/*
Cette classe est destinée à l'utilisation de l'API de Twitto'Label
*/

function getLabel($user) {
  $label = file_get_contents("https://www.twittolabel.tech/api/getuserlabel.php?user=" . $user);
  return $label;
}

function getVisits($user) {
  $label = file_get_contents("https://www.twittolabel.tech/api/getuservisits.php?user=" . $user);
  return $label;
}

function getUsers($label) {
  // Précisez un string vide pour tous les utilisateurs
  if ($label == '') {
   $users = file_get_contents("https://www.twittolabel.tech/api/getusers.php");
   $result = json_decode($users, true);
   return $result;
  } elseif ($label == 'labeled' OR $label == 'escroc' OR $label == 'potential') {
    $users = file_get_contents("https://www.twittolabel.tech/api/getusers.php?label=" . $label);
    $result = json_decode($users, true);
    return $result;
  }
}

}
?>

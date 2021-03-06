<?php
class TLAI {

/**
 * API Twitto'Label
 *
 * @license CC Attribution 4.0 International
 * @author leonekmi
 */

function getInfo($user) {
  /* 
  https://github.com/leonekmi/Twitto-LabelAPI/wiki/getuserinfo
  GetUserInfo
  */
  return json_decode(file_get_contents("https://twittolabel.tech/api/getinfo/" . $user), true);
}

// Ne rien préciser si vous voulez obtenir la liste entière
function getUsers($label = '') {
  /*
  https://github.com/leonekmi/Twitto-LabelAPI/wiki/getusers
  GetUsers
  */
  // API SUSPENDUE (au 20/02/17)
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

function search($user) {
  /*
  https://github.com/leonekmi/Twitto-LabelAPI/wiki/search
  Search
  */
  return json_decode(file_get_contents("https://twittolabel.tech/api/search/" . $user), true);
}

function postRating($user, $rate) {
  /*
  https://github.com/leonekmi/Twitto-LabelAPI/wiki/postrating
  PostRating
  */
  return json_decode(file_get_contents("https://www.twittolabel.tech/api/postrating.php/" . $user . "/" . $rate), true);
}

}


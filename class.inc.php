<?php
class TLAI {

/**
 * API Twitto'Label
 *
 * @license CC Attribution 3.0
 */

function getInfo($user) {
  /* 
  https://github.com/leonekmi/Twitto-LabelAPI/wiki/getuserinfo
  GetUserInfo
  */
  return json_decode(file_get_contents("https://www.twittolabel.tech/api/getuserinfo.php?user=" . $user), true);
}

// Ne rien préciser si vous voulez obtenir la liste entière
function getUsers($label = '') {
  /*
  https://github.com/leonekmi/Twitto-LabelAPI/wiki/getusers
  GetUsers
  */
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
  return json_decode(file_get_contents("https://www.twittolabel.tech/api/search.php?user=" . $user), true);
}

}


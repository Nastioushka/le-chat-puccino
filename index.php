<?php

$page = "presentation.phtml";
$headings = [["presentation" => "Présentation"],
              ["menu" => "La carte"],
              // ["chats" => "Nos protégés"],
              ["adresse" => "Nous contacter"],];

//array_push($headings, ["presentation" => "Présentation"]);

function print_nav($headings) {
  for ($i=0; $i < sizeof($headings); $i++) {
    foreach ($headings[$i] as $key => $value) {
      print '<li><a href=index.php?page='.$key.'>'.$value.'</a></li>';
    }
  }
};

function includ_content() {

}


include "header.phtml";

if ($_GET!=null) {
  switch ($_GET['page']) {
    case 'menu':
      include "carte.phtml";
    break;
    // case 'chats':
    //   include  "chats.phtml";
    // break;
    case 'adresse':
      include  'contact.phtml';
    break;
    default:
      include "presentation.phtml";
    break;
  };
    $page = "presentation.phtml";
}

include "footer.phtml";

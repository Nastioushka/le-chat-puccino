<?php

$page = "presentation.phtml";
$headings = [["presentation" => "Présentation"],
              ["menu" => "La carte"],
              ["chats" => "Nos chats"],
              ["adresse" => "Nous contacter"],];

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
    case 'adresse':
      include  'contact.phtml';
    break;
    case 'chats':
      include  'chats.phtml';
    break;
    default:
      include "presentation.phtml";
    break;
  };
} else {
    include "presentation.phtml";
}

include "footer.phtml";

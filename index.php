<?php
$headings = [];
array_push($headings, ["content_index" => "presentation"]);

function print_nav($headings) {
  for ($i=0; $i < sizeof($headings); $i++) {
    foreach ($headings[$i] as $key => $value) {
      echo '<li><a href="#">'.$value.'</a></li>';
    }
  }
};

include 'master.phtml';

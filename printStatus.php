<?php
// Print Current Status
function printStatus(){
    global $location, $wearing_glasses, $wearing_contacts, $has_mushrooms, $has_soup, $is_hungry, $needs_to_pee;
  
    echo "<p>You are in: $location</p>\n";
  
    // Write your code here:
    if ($wearing_contacts){
      echo "You are wearing contacts.<br>\n";
    }
    if ($wearing_glasses){
      echo "You are wearing glasses.<br>\n";
    }
    if ($has_mushrooms){
        echo "You are holding mushrooms.<br>\n";
    }
    if ($has_soup){
        echo "You are holding a scalding-hot bowl of mushroom soup.<br>\n";
    }
    if ($needs_to_pee){
        echo "You need to pee!<br>\n";
    }
    if ($is_hungry){
        echo "You are hungry.<br>\n";
    } else {
        echo "You are well-fed and energetic.<br>\n";
    }

}

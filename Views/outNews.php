<?php

namespace Views;


$news = \App\Models\News::getNLatestNews(4);

echo("<br>");
echo("<br>");

foreach($news as $new) {
    foreach($new as $key => $value) {
        if($key == 'id') {
            echo("<b>$value) </b>");            
        }elseif($key == 'headline') {
            echo("<b>$value</b>");
            echo("<br>");
        } elseif ($key == 'content') {
            echo("<u>$value</u>");
            echo("<br>");
        }
    }
    echo("<br>");
    echo("<br>");

}
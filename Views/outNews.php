<?php

namespace Views;


$news = \App\Models\News::getNLatestNews(4);

echo("<br>");
echo("<br>");

foreach($news as $new) {
    foreach($new as $key => $value) {
        if($key == 'id') {
            echo(" <a href=" . 'Views/article.php' . "> <b>$value) </b> </a>");
        }elseif($key == 'headline') {
            echo(" <a href=" . 'Views/article.php' . "> <b>$value </b> </a>");
            echo("<br>");
        } elseif ($key == 'content') {
            echo("<u>$value</u>");
            echo("<br>");
        }
    }
    echo("<br>");
    echo("<br>");

}
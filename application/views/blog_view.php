  <?php

  $left_sb_name = 'standart';
  $right_sb_name = 'standart';
   ?>

<div id="wrapper">

  <div id="page">
<?php
$i=COUNT($data['articles']);
if ($i == 0) {
  echo "No articles yet.";
} else {
  $i--;
  while ($i >= 0) {
    $row = $data['articles'][$i];

    echo '<div class="article-output">
    <img class="article-image" src="'.$row['poster'].'" width="100%">

    <div class="article-name"><a href="/blog/article/'.$row['id'].'" style="text-decoration:none;">'.$row['name'].'</a></div>
    </div>';
    $i--;
  }
}
?>
  <br class="clearfix" />
  </div>
</div>

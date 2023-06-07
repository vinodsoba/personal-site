<?php

while(have_posts()){
  the_post();
  ?>
    <div id="home"><?php echo the_content(); ?></div>
  <?php
}
?>

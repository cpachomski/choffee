<?php
/*
# =================================================
# newsletter subscribe.php
#
# The theme's newsletter subscription block
# =================================================
*/
?>

<div class='newsletter-subscription'>
  <div class='container'>
      <div class='row'>
        <div class='col-sm-12'>
          <?php if (function_exists('newsletter_form')) newsletter_form(); ?>
        </div>
      </div>
  </div>
</div>


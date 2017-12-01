<?php
if (!empty($errors)) { ?>
<div class="errors">
  <ul>
  <?php
  foreach ($errors as $ausgabe) {
    echo ('<li>' . $ausgabe . '</li>');
  }
  ?>
  </ul>
</div>
  <?php } ?>

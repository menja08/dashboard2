<a href="display_playlist2.php" target="_blank">Back to display page</a>
<?php
require_once 'display_playlist2.php';
foreach ($array_of_submits as $submit) {
  if(isset($_POST[$submit])) {// check submit value
    $delete = $_POST[$submit];
      $filename2 = $array_of_filenames_and_indexes[$delete];
      echo "$filename2 is now deleted";
      $old = getcwd(); // save current working directory
      chdir("images_after/playlist2"); // path to file
      unlink($filename2);
      chdir($old); // restore the old working directory
  }
}
?>
<br>
<a href="display_playlist2.php" target="_blank">Back to display page</a>

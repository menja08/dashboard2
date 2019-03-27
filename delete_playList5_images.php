<a href="display_playlist5.php" target="_blank">Back to display page</a>

<?php
require_once 'display_playlist5.php';
foreach ($array_of_submits as $submit) {
  if(isset($_POST[$submit])) {// check submit value
    $delete = $_POST[$submit];
      $filename5 = $array_of_filenames_and_indexes[$delete];
      echo "$filename5 is now deleted";
      $old = getcwd(); // save current working directory
      chdir("images_after/playlist5"); // path to file
      unlink($filename5);
      chdir($old); // restore the old working directory
  }
}
?>
<br>
<a href="display_playlist5.php" target="_blank">Back to display page</a>

<a href="display_playlist1.php" target="_blank">Back to display page</a>
<?php
require_once 'display_playlist1.php';
foreach($array_of_submits as $submit) {
  if(isset($_POST[$submit])){
      $delete = $_POST[$submit];
        $filename1 = $array_of_filenames_and_indexes[$delete];
        echo "$filename1 is now deleted";

        $old = getcwd(); // save current working directory
        chdir("images_after/playlist1"); // path to file
        unlink($filename1);
        chdir($old); // restore the old working directory
  }
}

 ?>
<br>
 <a href="display_playlist1.php" target="_blank">Back to display page</a>

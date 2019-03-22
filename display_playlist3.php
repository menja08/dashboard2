<div><a href="dashboard_display3.html">Go to dashboard of playlist3</a></div>
<?php
// store all files in directory in an array

$files_in_playlist3 = scandir("images_after/playlist3/");
//print_r($files_in_playlist2);
$length = count($files_in_playlist3) - 2 ;
//echo $length;
echo "<section id='playlist3'>";
//create array() to be used in the for loop
$array_of_filenames_and_indexes =  array();
// $i starts at 2, because scandir() returns the current directory and parent directory
$delete = '';

for($i = 2; $i < $length + 2; $i++) {
    $filename = "images_after/playlist2/".$files_in_playlist2[$i];
    $delete = "delete" . $i;
    $submit = "submit" . $i;

    echo "<img src='$filename'>

    <form method='post' action=''>
    <input type='hidden' name='$delete'>
      <input type='submit' value='delete' name='submit'>
    </form>";

    // store $delete and filename in n associative array
    $array_of_filenames_and_indexes[$delete] = $files_in_playlist2[$i];
    }

echo "</section>";

if(isset($_POST['submit'])) {

    $filename2 = $array_of_filenames_and_indexes[$delete];
    echo "$filename2 = " . $filename2;

    $old = getcwd(); // save current working directory
    chdir("images_after/playlist2"); // path to file
    unlink($filename2);

    chdir($old); // restore the old working directory
    echo "delete is now = " . $delete;
  //}

}

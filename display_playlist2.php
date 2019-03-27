<div><a href="dashboard_display2.html" target="_blank">Go to dashboard of playlist2</a></div>
<div><a href="admin_1.php">Go to admin start </a></div>
<?php
// store all files in directory in an array
$files_in_playlist2 = scandir("images_after/playlist2/");
$length = count($files_in_playlist2) - 2 ;
//echo $length;
echo "<section id='playlist2'>";
//create array() to be used in the for loop
$array_of_filenames_and_indexes =  array();
$array_of_submits = array();
$array_of_deletes = array();
// $i starts at 2, because scandir() returns the current directory and parent directory
$delete = '';
$submit = '';

for($i = 2; $i < $length + 2; $i++) {
    $filename = "images_after/playlist2/".$files_in_playlist2[$i];
    $delete = "delete" . $i;
    $submit = "submit" . $i;

    echo "<img src='$filename'>

    <form method='post' action='delete_playList2_images.php'>
    <input type='hidden' name='$delete'>
      <input type='submit' value='$delete' name='$submit'>
    </form>";

    // store $delete and filename in n associative array
    $array_of_filenames_and_indexes[$delete] = $files_in_playlist2[$i];
    $array_of_submits[$i] = $submit;
    $array_of_deletes[$i] = $delete;
    }

echo "</section>";

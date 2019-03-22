<html>
<head>
  <link rel="stylesheet" href="css/styles_5.min.css">
</head>
<body>
<!--playlist1-->
<?php
if(isset($_POST["submit"])) {
  $length_of_array = count($_FILES['userfile']['name']);
  //echo $length_of_array;

  // loop over files
  for($i = 0; $i < $length_of_array; $i++) {
    $userfile =  $_FILES['userfile']['name'][$i];
    $uploaddir = "images_after/playlist1/";
    $uploadfile = $uploaddir.basename($userfile);
    $temp_file = $_FILES['userfile']['tmp_name'][$i];
    move_uploaded_file($temp_file, $uploadfile);
  }
}

?>

<!--playlist2-->
<?php
if(isset($_POST["submit1"])) {
  $length_of_array1 = count($_FILES['userfile1']['name']);
  //echo $length_of_array;

  // loop over files
  for($i = 0; $i < $length_of_array1; $i++) {
    $userfile1 =  $_FILES['userfile1']['name'][$i];
    $uploaddir1 = "images_after/playlist2/";
    $uploadfile1 = $uploaddir1.basename($userfile1);
    $temp_file1 = $_FILES['userfile1']['tmp_name'][$i];
    move_uploaded_file($temp_file1, $uploadfile1);
  }
}
?>


<!--playlist3-->
<?php
if(isset($_POST["submit2"])) {
  $length_of_array2 = count($_FILES['userfile2']['name']);
  //echo $length_of_array;

  // loop over files
  for($i = 0; $i < $length_of_array2; $i++) {
    $userfile2 =  $_FILES['userfile2']['name'][$i];
    $uploaddir2 = "images_after/playlist3/";
    $uploadfile2 = $uploaddir2.basename($userfile2);
    $temp_file2 = $_FILES['userfile2']['tmp_name'][$i];
    move_uploaded_file($temp_file2, $uploadfile2);
  }
}
?>

<!--playlist4 -->
<?php
if(isset($_POST["submit3"])) {
  $length_of_array3 = count($_FILES['userfile3']['name']);
  //echo $length_of_array;

  // loop over files
  for($i = 0; $i < $length_of_array3; $i++) {
    $userfile3 =  $_FILES['userfile3']['name'][$i];
    $uploaddir3 = "images_after/playlist4/";
    $uploadfile3 = $uploaddir3.basename($userfile3);
    $temp_file3 = $_FILES['userfile3']['tmp_name'][$i];
    move_uploaded_file($temp_file3, $uploadfile3);
  }
}
?>

<!--playlist5-->
<?php
if(isset($_POST["submit4"])) {
  $length_of_array4 = count($_FILES['userfile4']['name']);
  //echo $length_of_array;

  // loop over files
  for($i = 0; $i < $length_of_array4; $i++) {
    $userfile4 =  $_FILES['userfile4']['name'][$i];
    $uploaddir4 = "images_after/playlist5/";
    $uploadfile4 = $uploaddir4.basename($userfile4);
    $temp_file4 = $_FILES['userfile4']['tmp_name'][$i];
    move_uploaded_file($temp_file4, $uploadfile4);
  }
}
?>

<select id="playlists">
<option value="playlist1">PLAYLIST1</option>
<option value="playlist2">PLAYLIST2</option>
<option value="playlist3">PLAYLIST3</option>
<option value="playlist4">PLAYLIST4</option>
<option value="playlist5">PLAYLIST5</option>
<option value="showAll">SHOW ALL</option>
</select>

<!--file upload form playlist1-->
<section id="playlist1">
  PLAYLIST1
<form enctype="multipart/form-data" action="" method="post" >
  <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
  File to Upload: <input name="userfile[]" type="file" multiple/>
  <input type="submit" value="Upload File" name="submit" />
</form>
<a href = "display_playlist1.php">See Playlist1</a>
</section>


<section id="playlist2">
  PLAYLIST2
<form enctype="multipart/form-data" action="" method="post">
  <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
  File to Upload: <input name="userfile1[]" type="file" />
  <input type="submit" value="Upload File" name="submit1" />
</form>
<a href = "display_playlist2.php">See Playlist2</a>
</section>

<section id="playlist3">
  PLAYLIST3
<form enctype="multipart/form-data" action="" method="post">
  <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
  File to Upload: <input name="userfile2[]" type="file" />
  <input type="submit" value="Upload File" name="submit2" />
</form>
<a href = "display_playlist3.php">See Playlist3</a>
</section>

<section id="playlist4">
PLAYLIST4
<form enctype="multipart/form-data" action="" method="post">
  <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
  File to Upload: <input name="userfile3[]" type="file" />
  <input type="submit" value="Upload File" name="submit3" />
</form>
<a href = "display_playlist4.php">See Playlist4</a>
</section>

<section id="playlist5">
PLAYLIST5
<form enctype="multipart/form-data" action="" method="post">
  <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
  File to Upload: <input name="userfile4[]" type="file" />
  <input type="submit" value="Upload File" name="submit4" />
</form>
<a href = "display_playlist5.php">See Playlist5</a>
</section>
<script src="js/admin_1.js"></script>
</body>
</html>

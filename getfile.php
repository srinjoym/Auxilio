<?php include('nav.php'); ?>
 <html>
 <body>
<div class="container">
  <h2> Speech to Text Analysis </h2>
  <h3> Please enter a .FLAC file that you would like to analyze </h3>
 <form action="chooseFile.php" method="post" enctype="multipart/form-data">
  <input type="file" name="myFile">
  <br>
  <input type="submit" value="Upload">
 </form>
 </div>
 </body>
</html>

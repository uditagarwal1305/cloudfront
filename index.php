<html>
<body background= "grey">
  <center><h1>This page is created by Udit Agarwal</h1></center>
  <center><h3>Welcome to my cloud page</h3></center>
  <p>This my task to integrate Terraform with AWS</p>
  <br>
  <p> This below picture indicate our new startup regarding Covid-19.</p>
<?php
  $cloudfront_url = `head -n1 myimg.txt`;
  $img_path = "https://".$cloudfront_url."/image.png";
  echo "<br>";
  echo "<img src='${img_path}' />";
?>
</body>
</html>

<html>
<body>
<h1>Udit Agarwal</h1>
<h3>Welcome to my cloud page</h3>

<p>Terraform integrated with AWS</p>
<br>
<?php
  $cloudfront_url = `head -n1 myimg.txt`;
  $img_path = "https://".$cloudfront_url."/image.png";
  echo "<br>";
  echo "<img src='${img_path}' />";
?>
</body>
</html>

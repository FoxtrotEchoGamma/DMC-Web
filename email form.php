<?php if($_POST["message"]) {mail("ian.brooks1066@gmail.com", "Here is the subject line",$_POST["insert your message here"]. "From: an@email.address");}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Email Form</title>
    <style>
        body {
  margin: auto;
  width: 640px;
  padding: 50px;

  color: #33475b;
}
h1 {
  text-align: center;
}
h2 {
  text-align: left;
}
h3 {
text-align: left;
  }
    </style>
</head>
<body>
<form method="post" action="subscriberform.php">
<textarea name="message">
</textarea>
<input type="submit">
</form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
<title>Last Sentence</title>
</head>
<body>
<h2>Problem: Display last sentence.</h2>
  <form method="POST">
    <input type="text" placeholder="String" name="string" />
      <input type="submit"/>
    </form>
<?php require_once('mylib.php');
myLastSentence();
?>

</body>
</html>

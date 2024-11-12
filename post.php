<html>
<body>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['fname']);
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>

<script type="text">
    function myfunction() {
        const xhttp = new XMLHttpRequest();
        xhttp.open("POST", "demo_phpfile.php");
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.onload = function() {
            document.getElementById("demo").innerHTML = this.responseText;
        }
        xhttp.send("fname=Mary");
    }
</script>

</body>
</html>
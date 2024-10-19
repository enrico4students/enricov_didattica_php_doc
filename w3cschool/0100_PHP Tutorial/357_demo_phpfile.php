
<!DOCTYPE html>
<html>
<body>

<?php
echo '<a href="' . $_SERVER['SCRIPT_NAME'] . '?subject=PHP&web=W3schools.com">Test $GET</a><br/>';
?>


<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // collect value of input field
    echo "<br/>Study ";
    echo $_REQUEST['subject']; 
    echo " at ";
    echo $_REQUEST['web'];
} else {
    echo "il metodo era: " . $_SERVER["REQUEST_METHOD"];
}
?>


</body>
</html>
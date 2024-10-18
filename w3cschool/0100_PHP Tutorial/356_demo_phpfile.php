<html>
<body>

<a href="356_demo_phpfile.php?subject=PHP&web=W3schools.com">Test $GET</a><br/>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['subject']);
    echo "il subject è $name";
} else {
    echo "il metodo era: " . $_SERVER["REQUEST_METHOD"];
}
?>

</body>
</html>

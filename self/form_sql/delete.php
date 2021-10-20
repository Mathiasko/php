<?php
require 'auth.inc.php';
require 'config.inc.php';

readfile('header.tmpl.html');

if (isset($_GET['id']) && ctype_digit($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header('Location: select.php');
}
;

$db = new mysqli(
    MYSQL_HOST,
    MYSQL_USER,
    MYSQL_PASSWORD,
    MYSQL_DATABASE
);
$sql = "DELETE FROM user WHERE id=$id";
$db->query($sql);
echo '<p>User deleted.</p>';
$db->close();

readfile('footer.tmpl.html');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
echo "Hello World";
echo nl2br("\nSome text 1111\r");
echo "Hello World";

// Create a shorthand version of the variable names:
$file = $_SERVER['SCRIPT_FILENAME'];
$user = $_SERVER['HTTP_USER_AGENT'];
$server = $_SERVER['SERVER_SOFTWARE'];

// Print the name of this script:
echo "<p>You are running the file:<br /><b>$file</b>.</p>\n";

// Print the user's information:
echo "<p>You are viewing this page using:<br /><b>$user</b></p>\n";

// Print the server's information:
echo "<p>This server is running: <br /><b>$server</b>.</p>\n";

echo "$_SERVER";
echo nl2br("\n");
$var = "Define \"platitude\", please.";
echo $var;
echo nl2br("\n");
$var = 'Define "platitude", please.';
echo $var;
echo nl2br("\n");
$first_name = 'Haruki';
$last_name = 'Murakami';
$book = 'Kafka on the Shore';
echo "<p>The book <em>$book</em> was written by $first_name $last_name.</p>";
echo nl2br("\n");
//date_default_timezone_set('PRC');
echo date("Y\\\m\\\d \d \\l\o\i H:i:s");
echo nl2br("\n");
$sum = 12 + '15';
echo $sum;
echo nl2br("\n");
unset($sum);
if (isset($sum)) {
    echo '存在';
} else {
    echo '不存在，或为空';
}
echo nl2br("\n");
//phpinfo();
?>
</body>
</html>
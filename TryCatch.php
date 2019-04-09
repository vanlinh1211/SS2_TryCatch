<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hiển thị thông báo nếu người dùng nhập số bất hợp lệ</title>
</head>
<body>
<h3>Hiển thị thông báo nếu người dùng nhập số bất hợp lệ</h3>
<form action="" method="post">
    <h3>Simple Calculator</h3>
    First Operand:
    <input type="text" name="firstNumber"><br>
    Operator:
    <select name="operator">
        <option value="addition">Addtion</option>
        <option value="minus">Minus</option>
        <option value="multiple">Multiple</option>
        <option value="division">Division</option>
    </select> <br>
    Second Operand:
    <input type="text" name="secondNumber"><br>
    <input type="submit" value="Calculate">
</form>

<?php
$number1 = $_POST['firstNumber'];
$number2 = $_POST['secondNumber'];
$result = 0;
function calculate($number1, $number2)
{
    if ($_POST['operator'] == 'addition') {
        $result = $number1 + $number2;
        echo $number1 . " + " . $number2 . " = " . $result;
    } else if ($_POST['operator'] == 'minus') {
        $result = $number1 - $number2;
        echo $number1 . " - " . $number2 . " = " . $result;
    } else if ($_POST['operator'] == 'multiple') {
        $result = $number1 * $number2;
        echo $number1 . " * " . $number2 . " = " . $result;
    } else if ($_POST['operator'] == 'division') {
        if ($number2 == 0) {
            throw new Exception('Division by zero.');
        }
        $result = $number1 / $number2;
        echo $number1 . " / " . $number2 . " = " . $result;
    }
}
try {
    calculate($number1, $number2);
} catch (Exception $e) {
    echo 'Caught exception: ', $e->getMessage();
}
?>

</body>
</html>
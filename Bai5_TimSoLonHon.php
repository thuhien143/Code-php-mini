<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm số lớn hơn</title>
</head>
<body>
    <?php
        if (isset($_POST['tim'])) {
            $a = $_POST['a'];
            $b = $_POST['b'];
            if($a > $b)
            {
                $tim = $a;
            }
            else
            {
                $tim = $b;
            }
        }      
    ?>
<form action="" method="POST">
    <center>
    <table  border="1" bordercolor="#feebcb">
        <tr class="center">
            <td colspan="2" align="center" bgcolor="#fecc69">Tìm số lớn hơn</td>
        </tr>
        <tr  bgcolor = "#feebcb">
            <td>Số A</td>
            <td><input type="text" name="a" size="50"></td>
        </tr>
        <tr  bgcolor = "#feebcb">
            <td>Số B</td>
            <td><input type="text" name="b" size="50"></td>
        </tr>
        <tr  bgcolor = "#feebcb">
            <td>Số lớn hơn</td>
            <td><input type="text" name="tim" size="50" value="<?php echo $tim;?>" readonly="true"></td>
        </tr>
        <tr  bgcolor = "#feebcb">
            <td colspan="2" align="center"><input type="submit" name="tim" value="Tìm" bgcolor="cdccce" style="cursor: pointer"></td>
        </tr>
    </table>
    </center>
</form>
</body>
</html>
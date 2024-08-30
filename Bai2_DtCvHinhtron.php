<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính chu vi và diện tích hình tròn</title>
</head>
<body>
<?php
        if (isset($_POST["tinh"])) {
            $bk = $_POST["bk"];
            $cv = $bk * 2 * 3.14;
            $dt = $bk * $bk *3.14; 
        }      
    ?>
<form action="" method="POST">
    <center>
    <table  border="1" bordercolor="#feebcb">
        <tr class="center">
            <td colspan="2" align="center" bgcolor="#fecc69" >Diện tích chu vi hình tròn</td>
        </tr>
        <tr bgcolor = "#feebcb">
            <td>Bán kính</td>
            <td><input type="text" name="bk" size="50"></td>
        </tr>
        <tr bgcolor = "#feebcb">
            <td>Chu vi</td>
            <td><input type="text" name="chuvi" size="50" value="<?php echo $cv;?>" readonly="true"></td>
        </tr>
        <tr bgcolor = "#feebcb">
            <td>Diện tích</td>
            <td><input type="text" name="dientich" size="50" value="<?php echo $dt;?>" readonly="true"></td>
        </tr>
        <tr bgcolor = "#feebcb">
            <td colspan="2" align="center"><input type="submit" name="tinh" value="tính" bgcolor="cdccce" style="cursor: pointer"></td>
        </tr>
    </table>
    </center>
</form>
</body>
</html>
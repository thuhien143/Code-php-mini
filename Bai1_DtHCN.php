<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diện tích Hình Chữ Nhật</title>
</head>
<body>
<?php
        if (isset($_POST['tinh'])) {
            $dai = $_POST['dai'];
            $rong = $_POST['rong'];
            $tich = $dai * $rong; 
        }      
    ?>
<form action="tinh dien tich hcn" method="POST">
<center>
    <table border="1" bordercolor="#feebcb">
        <tr class="center">
            <td colspan="2" align="center" bgcolor="#fecc69" >Diện tích hình chữ nhật</td>
        </tr>
        <tr bgcolor = "#feebcb">
            <td>Chiều dài</td>
            <td><input type="text" name="dai" size="50"></td>
        </tr>
        <tr bgcolor = "#feebcb">
            <td>Chiều rộng</td>
            <td><input type="text" name="rong" size="50"></td>
        </tr>
        <tr bgcolor = "#feebcb">
            <td>Diện tích</td>
            <td><input type="text" name="tich" size="50" value="<?php echo $tich;?>" readonly = "true"></td>
        </tr>
        <tr bgcolor = "#feebcb">
            <td colspan="2" align="center"><input type="submit" name="tinh" value="Tính" bgcolor="cdccce" style="cursor: pointer"></td>
        </tr>
    </table>
</center>
</form>
</body>
</html>
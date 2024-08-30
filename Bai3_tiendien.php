<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính tiền điện hàng tháng</title>
</head>
<body>
<?php
        if (isset($_POST['sub'])) {
            $socu = $_POST['cu'];
            $somoi = $_POST['moi'];
            $dongia = $_POST['dongia'];
            $tongtien = ($somoi - $socu)*$dongia; 
        }      
    ?>
    <form action="" method="post">
        <center>
        <table  border="1" bordercolor="#feebcb">
            <tr class="center">
                <td colspan="2" align="center" bgcolor="#fecc69">Thanh toán tiền điện</td>
                <td bgcolor = "#feebcb"></td>
            </tr>
            <tr bgcolor = "#feebcb">
                <td>Tên chủ hộ</td>
                <td><input type="text" name="chu" size="50"></td>
                <td bgcolor = "#feebcb"></td>
            </tr>
            <tr  bgcolor = "#feebcb">
                <td>Chỉ số cũ</td>
                <td><input type="text" name="cu" size="50"></td>
                <td>(Kw)</td>
            </tr>
            <tr  bgcolor = "#feebcb">
                <td>Chỉ số mới</td>
                <td><input type="text" name="moi" size="50"></td>
                <td>(Kw)</td>
            </tr>
            <tr  bgcolor = "#feebcb">
                <td>Đơn giá</td>
                <td><input type="text" name="dongia" size="50"></td>
                <td>(VNĐ)</td>
            </tr>
            <tr  bgcolor = "#feebcb">
                <td>Số tiền thanh toán</td>
                <td><input type="text" name="tongtien" value="<?php echo $tongtien ;?>" size="50" readonly="true"></td>
                <td>(VNĐ)</td>
            </tr>
            <tr class="center"  bgcolor = "#feebcb">
                <td colspan="2" align = "center"><button type="submit" name="sub" bgcolor="cdccce" style="cursor: pointer">TÍNH</button>
                <td bgcolor = "#feebcb"></td>
             </td>
            </tr>
        </table>
        </center>
    </form>
</body>
</html>
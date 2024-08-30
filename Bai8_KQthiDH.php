<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả thi Đại Học</title>
</head>
<body>
    <?php
        if(isset($_POST['toan']) && isset($_POST['ly']) && isset($_POST['hoa']) && isset($_POST['dc']))
        {
            $toan = $_POST['toan'];
            $ly = $_POST['ly'];
            $hoa = $_POST['hoa'];
            $dc = $_POST['dc'];
            $tong = $toan + $ly + $hoa;

            if($tong >= $dc && $toan > 0 && $ly > 0 && $hoa > 0)
                $ketqua = "Đậu đại học";
            else $ketqua = "Trượt đại học";
        }
    ?>
<form action="" method="POST">
        <center>
        <table>
            <tr class="center">
                <td colspan="2" align="center" bgcolor="#d94868">KẾT QUẢ HỌC TẬP</td>
            </tr>
            <tr bgcolor = "#e19db7">
                <td>Toán: </td>
                <td><input name = "toan" type="number" id="toan" value="<?php echo $toan;?>" size="50"></td>
            </tr>
            <tr  bgcolor = "#e19db7">
                <td>Lý: </td>
                <td><input name = "ly" type="number" id="ly" value="<?php echo $ly;?>" size="50"></td>
            </tr>
            <tr  bgcolor = "#e19db7">
                <td>Hoá: </td>
                <td><input name = "hoa" type="number" id="hoa" value="<?php echo $hoa;?>" size="50"></td>
            </tr>
            <tr  bgcolor = "#e19db7">
                <td>Điểm chuẩn: </td>
                <td><input type="number" name="dc" size="50" value="<?php echo $dc;?>" ></td>
            </tr>
            <tr  bgcolor = "#e19db7">
                <td>Tổng điểm: </td>
                <td><input type="text" name="tong" size="50" value="<?php echo $tong;?>" readonly="true"></td>
            </tr>
            <tr  bgcolor = "#e19db7">
                <td>Kết quả: </td>
                <td><input type="text" name="ketqua" size="50" value="<?php echo $ketqua;?>" readonly="true"></td>
            </tr>
            <tr class="center"  bgcolor = "#e19db7">
                <td colspan="2" align = "center"><button type="submit" name="sub" bgcolor="cdccce" style="cursor: pointer">Xem kết quả</button>
             </td>
            </tr>
        </table>
        </center>
    </form>
</body>
</html>
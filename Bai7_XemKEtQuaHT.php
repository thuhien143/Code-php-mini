<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả học tập</title>
</head>
<body>
<?php
        if (isset($_POST['hk1']) && isset($_POST['hk2'])) {
            $hk1 = $_POST['hk1'];
            $hk2 = $_POST['hk2'];
            $dtb = ($hk1 + $hk2 * 2)/3;
            $dtb = round($dtb,2);

            if($dtb >= 5)
                $ketqua = "Được lên lớp";
            else $ketqua = "Ở lại lớp";

            if($dtb >= 8)
                $xeploai = "Giỏi";
            elseif ($dtb >= 6.5 && $dtb < 8 ) 
                $xeploai = "Khá";
            elseif($dtb >= 5 && $dtb <6.5)
                $xeploai = "Trung bình";
            else $xeploai = "Yếu";
        }      
    ?>
    <form action="" method="POST">
        <center>
        <table>
            <tr class="center">
                <td colspan="2" align="center" bgcolor="#d94868">KẾT QUẢ HỌC TẬP</td>
            </tr>
            <tr bgcolor = "#e19db7">
                <td>Điểm HK1: </td>
                <td><input name = "hk1"type="number" id="hk1" value="<?php echo $hk1;?>" size="50"></td>
            </tr>
            <tr  bgcolor = "#e19db7">
                <td>Điẻm HK2: </td>
                <td><input name = "hk2" type="number" id="hk2" value="<?php echo $hk2;?>" size="50"></td>
            </tr>
            <tr  bgcolor = "#e19db7">
                <td>Điểm trung bình: </td>
                <td><input type="text" name="dtb" size="50" value="<?php echo $dtb;?>" readonly="true"></td>
            </tr>
            <tr  bgcolor = "#e19db7">
                <td>Kết quả: </td>
                <td><input type="text" name="ketqua" size="50" value="<?php echo $ketqua;?>" readonly="true"></td>
            </tr>
            <tr  bgcolor = "#e19db7">
                <td>Xếp loại học lực</td>
                <td><input type="text" name="xeploai" size="50" value="<?php echo $xeploai;?>" readonly="true"></td>
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
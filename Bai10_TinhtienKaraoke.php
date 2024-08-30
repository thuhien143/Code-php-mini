<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính tiền Karaoke</title>
</head>
<body >
<?php
    if(isset($_POST['bd']) && isset($_POST['kt']))
    {
        $bd = $_POST['bd'];
        $kt = $_POST['kt'];
        
        if($bd>=10 && $kt>10 && $bd<24 &&  $kt<=24)
        {
            if($bd < $kt)
            {
                if($kt <= 17)
                    $tongtien = ($kt - $bd)*20000;
                elseif($bd > 17)
                    $tongtien = ($kt - $bd)*45000;
                else {
                    $t1 = (17 - $bd)*20000;
                    $t2 = ($kt -17)*45000;
                    $tongtien = $t1 + $t2;
                }
            }
            elseif ($bd >= $kt) {
                $kq = "Giờ bắt đầu phải nhỏ hơn giờ kết thúc";
            }
            else 
                $kq = "Chúng tôi đang trong giờ nghỉ";
        }
    }
?>
    <form action="" method = "POST" >
        <center>
        <table border = "1" bordercolor = "#92cbfc">
        <tr class="center">
            <td colspan="2" align="center" bgcolor="#92cbfc" forecolor="8a3d03">TÍNH TIỀN KARAOKE</td>
            <td bgcolor = "#92cbfc"></td>

        </tr>
        <tr bgcolor = "#c4eaeb">
            <td>Giờ bắt đầu: </td>
            <td><input type="number" name="bd" id="bd" size="50" value="<?php echo $bd;?>"></td>
            <td>(h)</td>

        </tr>
        <tr bgcolor = "#c4eaeb">
            <td>Giờ kết thúc: </td>
            <td><input type="number" name="kt" id="kt" size="50" value="<?php echo $kt;?>"></td>
            <td>(h)</td>

        </tr>
        <tr bgcolor = "#c4eaeb">
            <td>Tiền thanh toán: </td>
            <td><input type="text" name="tongtien" size="50" value="<?php echo $tongtien;?>" readonly="true"></td>
            <td>(VNĐ)</td>

        </tr>
        <tr bgcolor = "#92cbfc">
            <td colspan="2" align="center"><input type="submit" name="Submit" value="Tính tiền" bgcolor="cdccce" style="cursor: pointer"></td>
            <td bgcolor = "#c4eaeb"></td>

        </tr>
        </table>
        </center>
    </form>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính toán trên dãy số</title>
</head>
<body>
<?php
    if(isset($_POST['bd']) && isset($_POST['kt']))
    {
        $bd = $_POST['bd'];
        $kt = $_POST['kt'];

        $le = 0;
        $chan = 0;
        $tich = 1;
        $tong = 0;
        for($i = $bd; $i <= $kt; $i++)
        {
            $tong = $tong + $i;
            $tich = $tich * $i;
            {
                if($i % 2 == 0)
                    $chan = $chan + $i;
                
                if($i % 2 != 0)
                    $le = $le + $i;
            }
        }
    }
?>
    <form action="" method="post">
        <center>
        <table  border="1" bordercolor="#feebcb">
            <tr class="center">
                <td colspan="2" align="center" bgcolor="#fecc69">TÍNH TOÁN TRÊN DÃY SỐ</td>
            </tr>
            <tr bgcolor = "#feebcb">
                <td>Giới hạn của dãy số</td>
                <td>Số bắt đầu: 
                    <label for="bd"></label>
                    <input type="text" name="bd" id="bd" value="<?php echo $bd ;?>" size ="5">
                    Số kết thúc:
                    <label for="kt"></label>
                    <input type="text" name="kt" id="kt" value="<?php echo $ky ;?>" size ="5">
                </td>
            </tr>
            <tr bgcolor = "#feebcb">
                <td colspan="2"><strong>Kết quả:</strong></td>
            </tr>
            <tr  bgcolor = "#feebcb">
                <td>Tổng các số</td>
                <td>
                    <label for="tong"></label>
                    <input type="text" name="tong" id="tong" class="mau" size="25" readonly="true" value="<?php echo $tong ;?>">
                </td>
            </tr>
            <tr  bgcolor = "#feebcb">
                <td>Tích các số</td>
                <td>
                    <label for="tich"></label>
                    <input type="text" name="tich" id="tich" class="mau" size="25" readonly="true" value="<?php echo $tich ;?>">
                </td>
            </tr> 
            <tr  bgcolor = "#feebcb">
                <td>Tổng các số chẵn</td>
                <td>
                    <label for="chan"></label>
                    <input type="text" name="chan" id="chan" class="mau" size="25" readonly="true" value="<?php echo $chan ;?>">
                </td>
            </tr>
            <tr  bgcolor = "#feebcb">
                <td>Tổng các số lẻ</td>
                <td>
                    <label for="le"></label>
                    <input type="text" name="le" id="le" class="mau" size="25" readonly="true" value="<?php echo $le ;?>">
                </td>
            </tr>
            <tr class="center"  bgcolor = "#feebcb">
                <td colspan="2" align = "center"><button type="submit" name="button" bgcolor="cdccce" style="cursor: pointer">Tính toán</button>
             </td>
            </tr>
        </table>
        </center>
    </form>
</body>
</html>
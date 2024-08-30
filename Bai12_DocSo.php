<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đọc Số</title>
</head>
<body>
<?php
    if(isset($_POST['so']))
    {
        $so = $_POST['so'];
        if(is_numeric($so))
        {
            switch($so)
            {
                case 0:
                    $chu = "Không";
                    break;
                case 1:
                    $chu = "Một";
                    break;
                case 2:
                    $chu = "Hai";
                    break;
                case 3:
                    $chu = "Ba";
                    break;
                case 4:
                    $chu = "Bốn";
                    break;
                case 5:
                    $chu = "Năm";
                    break;
                case 6:
                    $chu = "Sáu";
                    break;
                case 7:
                    $chu = "Bảy";
                    break;
                case 8:
                    $chu = "Tám";
                    break;
                case 9:
                    $chu = "Chín";
                    break;
                default: 
                    $chu = "Không hợp lệ";
                    break;
            }
        }
    }
?>
<form action="" method = "POST" >
        <center>
        <table border = "1" bordercolor = "#92cbfc">
        <tr class="center">
            <td colspan="2" align="center" bgcolor="#92cbfc" forecolor="8a3d03">ĐỌC SỐ</td>
            <td bgcolor="#92cbfc"></td>
        </tr>
        <tr bgcolor = "#c4eaeb">
            <td width = "127">Nhập số (0 - &gt; 9)</td>
            <td width = "103">&nbsp;</td>
            <td width = "156">Bằng chữ: </td>
        </tr>
        <tr bgcolor = "#c4eaeb">
            <td>
                <label ><input name="so" type="text" id="so" value="<?php echo $so;?>" size="15"></label>
            </td>
            <td align="center"> 
                <label ><input type="submit" name="Submit" value="=&gt"></label>
            </td>
            <td>
                <label ><input name="chu" type="text" id="chu" value="<?php echo $chu;?>" size="15" readonly="true" style="background-color:#ffcccc"></label>
            </td>
        </tr>
        </table>
        </center>
</form>
</body>
</html>
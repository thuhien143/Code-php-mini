<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính năm âm lịch</title>
</head>
<body>
<?php
    if(isset($_POST['duong']))
    {
        $duong = $_POST['duong'];
        if (is_numeric($duong)) 
        {
            $nam = ($duong - 3) % 10;
            switch($nam)
            {
                case 0:
                    $can = "Quý";
                    break;
                case 1:
                    $can = "Giáp";
                    break;
                case 2:
                    $can = "Ất";
                    break;
                case 3:
                    $can = "Bính";
                    break;
                case 4:
                    $can = "Đinh";
                    break;
                 case 5:
                    $can = "Mậu";
                    break;
                case 6:
                    $can = "Kỷ";
                    break;
                case 7:
                    $can = "Canh";
                    break;
                case 8:
                    $can = "Tân";
                    break;
                case 9:
                    $can = "Nhâm";
                    break;
            }
            $nam = ($duong - 3) % 12;
            switch($nam)
            {
                case 0: 
                    $chi = "Hợi";
                    break;
                case 1: 
                    $chi = "Tý";
                    break;
                case 2: 
                    $chi = "Sửu";
                    break;
                case 3: 
                    $chi = "Dần";
                    break;
                case 4: 
                    $chi = "Mão";
                    break;
                case 5: 
                    $chi = "Thìn";
                    break;
                case 6: 
                    $chi = "Tỵ";
                    break;
                case 7: 
                    $chi = "Ngọ";
                    break;
                case 8: 
                    $chi = "Mùi";
                    break;
                case 9: 
                    $chi = "Thân";
                    break;
                case 10: 
                    $chi = "Dậu";
                    break;
                case 11: 
                    $chi = "Tuất";
                    break;       
            }
            $am = $can ." ".$chi;
        }
    }
?>
<form action="" method = "POST" >
        <center>
        <table border = "1" bordercolor = "#92cbfc">
        <tr class="center">
            <td colspan="2" align="center" bgcolor="#92cbfc" forecolor="8a3d03">TÍNH NĂM ÂM LỊCH</td>
            <td bgcolor="#92cbfc"></td>
        </tr>
        <tr bgcolor = "#c4eaeb">
            <td width = "127">Năm dương lịch</td>
            <td width = "103">&nbsp;</td>
            <td width = "156">Năm âm lịch </td>
        </tr>
        <tr bgcolor = "#c4eaeb">
            <td>
                <label ><input name="duong" type="text" id="duong" value="<?php echo $duong;?>" size="15"></label>
            </td>
            <td align="center"> 
                <label ><input type="submit" name="Submit" value="=&gt"></label>
            </td>
            <td>
                <label ><input name="am" type="text" id="am" value="<?php echo $am;?>" size="15" readonly="true" style="background-color:#ffcccc"></label>
            </td>
        </tr>
        </table>
        </center>
    </form>
</body>
</html>
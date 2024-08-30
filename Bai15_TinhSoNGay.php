<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính số ngày trong tháng</title>
</head>
<body>
<?php
    if(isset($_POST['thang']) && isset($_POST['nam']))
    {
        $thang = $_POST['thang'];
        $nam = $_POST['nam'];
        
        switch($thang)
        {
            case 1:
                case 3:
                case 5:
                case 7:
                case 8:
                case 10:
                case 12:
                    $ngay = 31;
                    break;
                case 4:
                case 6:
                case 9:
                case 11:
                    $ngay = 30;
                    break;
                case 2:
                    if ($nam % 400 == 0 || ($nam % 4 == 0 && $nam % 100 != 0 ))
                        $ngay = 29;
                    else
                        $ngay = 28;
                    break;
        }
        $ketqua = "Tháng $thang Năm $nam có $ngay ngày";
    }
?>
<form action="" method="POST">
    <center>
        <table>
            <tr class="center">
                <td colspan="2" align="center" bgcolor="#d94868">TÍNH NGÀY TRONG THÁNG</td>
            </tr>
            <tr bgcolor = "#e19db7">
                <td width ="150"> Tháng / Năm: </td>
                <td ><label>
                    <input name= "thang" type="text" id="thang" value ="<?php echo $thang;?>" size="5">
                    /
                    <input name= "nam" type="text" id="nam" value ="<?php echo $nam;?>" size="5">
                </label>
                </td>
            </tr>
            <tr  bgcolor = "#e19db7">
                <td colspan="2" width="150" align="center"><label for = "thang"></label>
                    <input type="submit" name="button" id="button" value="Tính số ngày" >
                </td>
            </tr>
            <tr  bgcolor = "#e19db7">
                <td colspan="3" align="center" >
                    <label for="ketqua">  </label>
                    <input type="text" name="ketqua" size="50" value="<?php echo $ketqua;?>" readonly="true" style="background-color:#FFFF99">
                </td>
            </tr>
            
        </table>
    </center>
</form>
</body>
</html>
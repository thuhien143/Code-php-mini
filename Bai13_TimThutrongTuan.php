<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm thứ trong tuần</title>
</head>
<body>
<?php
if(isset($_POST['ngay']) && isset($_POST['thang']) && isset($_POST['nam']))
{
    $ngay = $_POST['ngay'];
    $thang = $_POST['thang'];
    $nam = $_POST['nam'];

    $giatri = cal_to_jd(CAL_GREGORIAN, $thang, $ngay, $nam);
    $day = jddayofweek($giatri, 0);
    switch($day)
    {
        case 0:
            $thu = "Chủ nhật";
            break;
        case 1:
            $thu = "Thứ hai";
            break;
        case 2:
            $thu = "Thứ ba";
            break;
        case 3:
            $thu = "Thứ tư";
            break;
        case 4:
            $thu = "Thứ năm";
            break;
        case 5:
            $thu = "Thứ sáu";
            break;
        case 6:
            $thu = "Thứ bảy";
            break;
    }
    $ketqua = "Ngày $ngay Tháng $thang Năm $nam : Là $thu";
}
?>
<form action="" method="POST">
    <center>
        <table>
            <tr class="center">
                <td colspan="2" align="center" bgcolor="#d94868">TÌM THỨ TRONG TUẦN</td>
                <td bgcolor="#d94868"> </td>
            </tr>
            <tr bgcolor = "#e19db7">
                <td width ="150">Ngày / Tháng / Năm </td>
                <td ><label>
                    <input name= "ngay" type="text" id="ngay" value ="<?php echo $ngay;?>" size="5">
                    /
                    <input name= "thang" type="text" id="thang" value ="<?php echo $thang;?>" size="5">
                    /
                    <input name= "nam" type="text" id="nam" value ="<?php echo $nam;?>" size="5">
                </label>
                </td>
                <td width="55"><label>
                    <input type="submit" name="Submit" value="Tìm thứ trong tuần">
                </label>
                </td>
            </tr>
            
            <tr  bgcolor = "#e19db7">
                <td colspan="3" align="center" >
                    <label>
                    <input type="text" name="ketqua" size="50" value="<?php echo $ketqua;?>" readonly="true" style="background-color:#FFFF99">
                    </label>
                </td>
            </tr>
            
        </table>
    </center>
</form>
</body>
</html>
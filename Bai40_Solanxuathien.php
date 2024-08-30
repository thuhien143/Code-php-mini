<?php
if(isset($_POST['submit']))
{
    $mang=$_POST['mang'];
    $array=explode(",",$mang);
    $so=array_count_values($array);
    $so = implode(",", $so);
    $kq = implode(",", array_unique($array));
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tạo mảng duy nhất</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form method="post" action="">
        <center>
            <table>
                <tr bgcolor="#fdcb66">
                    <td colspan="2" align="center" style="color:red">ĐẾM SỐ LẦN XUẤT HIỆN VÀ TẠO MẢNG DUY NHẤT</td>
                </tr>
                <tr bgcolor="#feebca">
                    <td>Mảng:</td>
                    <td><input type="text" name="mang" value="<?php if(isset($_POST['mang'])) echo $_POST['mang']; ?>" size="50"></td>
                </tr>
                <tr bgcolor="#feebca">
                    <td>Số lần xuất hiện:</td>
                    <td><input type="text" name="so" value="<?php echo  $so; ?>" size="50" readonly style="background-color:#feccd0;color:#722426"></td>
                </tr>
                <tr bgcolor="#feebca">
                    <td>Mảng duy nhất:</td>
                    <td><input type="text" name="kq" value="<?php echo $kq; ?>" size="50" readonly style="background-color:#feccd0;color:#722426"></td>
                </tr>
                <tr bgcolor="#feebca">
                    <td colspan="2" align="center"><input type="submit" value="Thực hiện" name="submit"  style="background-color:#f8cdcb;cursor: pointer"></td>
                </tr>
                <tr bgcolor="#feebca">
                    <td colspan="2" align="center">(Ghi chú: các phần tử trong mảng cách nhau bởi dấu ",")</td>
                </tr>
            </table>
        </center>
    </form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $a=$_POST['a'];
    $b=$_POST['b'];
    $mang1=explode(",",$a);
    $mang2=explode(",",$b);
    $nhat=implode(",",array_diff($mang1,$mang2));
    $nhi=implode(",",array_diff($mang2,$mang1));
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tìm phần tử khác nhau</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form method="post" action="">
        <center>
            <table>
                <tr bgcolor="#309896">
                    <td colspan="2" align="center" style="color:white">TÌM PHẦN TỬ KHÁC NHAU TRONG 2 MẢNG</td>
                </tr>
                <tr bgcolor="#d1ded4">
                    <td>Mảng chuỗi thứ nhất:</td>
                    <td><input type="text" name="a" value="<?php if(isset($_POST['a'])) echo $_POST['a']; ?>" size="50"></td>
                </tr>
                <tr bgcolor="#d1ded4">
                    <td>Mảng chuỗi thứ hai:</td>
                    <td><input type="text" name="b" value="<?php if(isset($_POST['b'])) echo $_POST['b']; ?>" size="50"></td>
                </tr>
                <tr bgcolor="#d1ded4"> 
                    <td></td>
                    <td align="left"><input type="submit" value="Phân tích hai mảng" name="submit" style="background-color:#3a9696;cursor: pointer"></td>
                </tr>
                <tr bgcolor="#d1ded4">
                    <td>Phần tử chỉ có trong mảng 1:</td>
                    <td><input type="text" name="nhat" value="<?php echo $nhat; ?>" size="50" readonly style="background-color:#fdfec7;color:#6347b9"></td>
                </tr>
                <tr bgcolor="#d1ded4">
                    <td>Phần tử chỉ có trong mảng 2:</td>
                    <td><input type="text" name="nhi" value="<?php echo $nhi; ?>" size="50" readonly style="background-color:#fdfec7;color:#6347b9"></td>
                </tr>
                <tr bgcolor="#a0d9de">
                    <td colspan="2" align="center">(Ghi chú: các phần tử trong mảng cách nhau bởi dấu ",")</td>
                </tr>
            </table>
        </center>
    </form>
</body>
</html>
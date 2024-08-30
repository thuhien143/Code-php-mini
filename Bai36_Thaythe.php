<?php
if(isset($_POST['submit']))
{
    $mang=$_POST['mang'];
    $cu='';
    $moi='';
    if(trim($mang)=='') 
    {
        echo "<script>alert('Vui lòng nhập các phần tử trong mảng!');</script>";
    }
    else
    {
        $a=$_POST['a'];
        $b=$_POST['b'];
        $arr=explode(",",$mang);
        $cu=$mang;
        for($i=0;$i<count($arr);$i++)
        {
            if($arr[$i]==$a) $arr[$i]=$b;
        }
        $moi=implode(",",$arr);
    }
}
function thay_the($mang,$cu,$moi)
{
    $arr=explode(",",$mang);
    for($i=0;$i<count($arr);$i++)
    {
        if($arr[$i]==$cu) $arr[$i]=$moi;
    }
    $moi=implode(",",$arr);
    return $moi;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Thay thế</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form method="post" action="">
        <center>
            <table>
                <tr bgcolor="#980065">
                    <td colspan="2" align="center" style="color:white">THAY THẾ</td>
                </tr>
                <tr bgcolor="#fecce3">
                    <td>Nhập các phần tử:</td>
                    <td><input type="text" name="mang" value="<?php if(isset($_POST['mang'])) echo $_POST['mang']; ?>" size="50"></td>
                </tr>
                <tr bgcolor="#fecce3">
                    <td>Giá trị cần thay thế</td>
                    <td><input type="text" name="a" value="<?php if(isset($_POST['a'])) echo $_POST['a']; ?>" size="50"></td>
                </tr>
                <tr bgcolor="#fecce3">
                    <td>Giá trị thay thế</td>
                    <td><input type="text" name="b" value="<?php if(isset($_POST['b'])) echo $_POST['b']; ?>" size="50"></td>
                </tr>
                <tr bgcolor="#fecce3">
                    <td></td>
                    <td colspan="2" align="left"><input type="submit" value="Thay thế" name="submit" style="background-color:#fbff93;cursor: pointer"></td>
                </tr>
                <tr bgcolor="#feecf8">
                    <td>Mảng cũ</td>
                    <td><input type="text" name="cu" value="<?php echo $cu; ?>" size="50" readonly  style="background-color:#fd9899"></td>
                </tr>
                <tr bgcolor="#feecf8">
                    <td>Mảng sau khi thay thế</td>
                    <td><input type="text" name="moi" value="<?php if(isset($_POST['submit'])) echo thay_the($mang,$a,$b); ?>" size="50" readonly style="background-color:#fd9899"></td>
                </tr>
                <tr bgcolor="#feecf8">
                    <td colspan="2" align="center">(Ghi chú: các phần tử trong mảng cách nhau bởi dấu ",")</td>
                </tr>
            </table>
        </center>
    </form>
</body>
</html>
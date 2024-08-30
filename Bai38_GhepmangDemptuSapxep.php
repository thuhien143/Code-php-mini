<?php
if(isset($_POST['submit']))
{
    $a=$_POST['a'];
    $b=$_POST['b'];
    $manga=explode(",",$a);
    $mangb=explode(",",$b);
    $soa=count($manga);
    $sob=count($mangb);
    $c=array_merge($manga,$mangb);
    $cChuaSapXep = $c;
    sort($c);
    $tang=implode(",",$c);
    rsort($c);
    $giam=implode(",",$c);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Đếm phần tử,ghép mảng và sắp xếp</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form method="post" action="">
        <center>
            <table>
                <tr bgcolor="#990166">
                    <td colspan="2" align="center" style="color:white">ĐẾM PHẦN TỬ,GHÉP MẢNG VÀ SẮP XẾP</td>
                </tr>
                <tr bgcolor="#fecce7">
                    <td>Mảng A:</td>
                    <td><input type="text" name="a" value="<?php if(isset($_POST['a'])) echo $_POST['a']; ?>" size="50"></td>
                </tr>
                <tr bgcolor="#fecce7">
                    <td>Mảng B:</td>
                    <td><input type="text" name="b" value="<?php if(isset($_POST['b'])) echo $_POST['b']; ?>" size="50"></td>
                </tr>
                <tr bgcolor="#fecce7">
                    <td></td>
                    <td align="left"><input type="submit" value="Thực hiện" name="submit" style="background-color:#fcff8f;cursor: pointer"></td>
                </tr>
                <tr bgcolor="#feecf8">
                    <td>Số phần tử mảng A:</td>
                    <td><input type="text" name="soa" value="<?php echo $soa; ?>" size="50" readonly style="background-color:#fd9899"></td>
                </tr>
                <tr bgcolor="#feecf8">
                    <td>Số phần tử mảng B:</td>
                    <td><input type="text" name="sob" value="<?php echo $sob; ?>" size="50" readonly style="background-color:#fd9899"></td>
                </tr>
                <tr bgcolor="#feecf8">
                    <td>Mảng C:</td>
                    <td><input type="text" name="c" value="<?php echo implode(",",$cChuaSapXep); ?>" size="50" readonly style="background-color:#fd9899"></td>
                </tr>
                <tr bgcolor="#feecf8">
                    <td>Mảng C tăng dần:</td>
                    <td><input type="text" name="tang" value="<?php echo $tang; ?>" size="50" readonly style="background-color:#fd9899"></td>
                </tr>
                <tr bgcolor="#feecf8">
                    <td>Mảng C giảm dần:</td>
                    <td><input type="text" name="giam" value="<?php echo $giam; ?>" size="50" readonly style="background-color:#fd9899"></td>
                </tr>
                <tr bgcolor="#feecf8">
                    <td colspan="2" align="center">(Ghi chú: các phần tử trong mảng cách nhau bởi dấu ",")</td>
                </tr>
            </table>
        </center>
    </form>
</body>
</html>
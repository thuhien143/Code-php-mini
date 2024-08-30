<?php
function hoan_vi(&$a,&$b) {
    $temp=$a;
    $a=$b;
    $b=$temp;
}
// sắp mảng tăng dần
function sap_tang(&$mang) {
    for($i=0;$i<count($mang)-1;$i++) {
        for($j=$i+1;$j<count($mang);$j++) {
            if($mang[$i]>$mang[$j]) {
                hoan_vi($mang[$i],$mang[$j]);
            }
        }
    }
}
// sắp mảng giảm dần
function sap_giam(&$mang) {
    for($i=0;$i<count($mang)-1;$i++) {
        for($j=$i+1;$j<count($mang);$j++) {
            if($mang[$i]<$mang[$j]) {
                hoan_vi($mang[$i],$mang[$j]);
            }
        }
    }
}
if(isset($_POST['submit'])) {
    $mang=$_POST['mang'];
    $arr=explode(",",$mang);
    $tang='';
    $giam='';
    if(count($arr)==1) {
        $tang=$arr[0];
        $giam=$arr[0];
        echo "<script>alert('Mảng chỉ có một phần tử, không cần sắp xếp!');</script>";
    }
    else {
        sap_tang($arr);
        $tang=implode(",",$arr);
        sap_giam($arr);
        $giam=implode(",",$arr);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sắp xếp mảng</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form method="post" action="">
        <center>
            <table>
                <tr bgcolor="#339a99">
                    <td colspan="3" align="center" style="color:white">SẮP XẾP MẢNG</td>
                </tr>
                <tr bgcolor="#d1ded4">
                    <td>Nhập mảng:</td>
                    <td><input type="text" name="mang" value="<?php if(isset($_POST['mang'])) echo $_POST['mang']; ?>" size="50"></td>
                    <td>(*)</td>
                </tr>
                <tr  bgcolor="#d1ded4">
                    <td></td>
                    <td colspan="3" align="left"><input type="submit" value="Sắp xếp mảng tăng/giảm" name="submit"></td>
                </tr>
                <tr bgcolor = "#cae6e7">
                    <td style="color:red" align="center">Sau khi sắp xếp</td>
                    <td colspan="3"></td>
                    
                </tr>
                <tr  bgcolor = "#cae6e7">
                    <td>Tăng dần:</td>
                    <td colspan="3"><input type="text" name="tang" value="<?php echo $tang; ?>" size="50" readonly></td>
                </tr>
                <tr  bgcolor = "#cae6e7">
                    <td>Giảm dần:</td>
                    <td colspan="3"><input type="text" name="giam" value="<?php echo $giam; ?>" size="50" readonly></td>
                </tr>
                <tr  bgcolor="#d1ded4">
                    <td colspan="3" align="center">(*) Các số được nhập cách nhau bởi dấu ","</td>
                </tr>
            </table>
        </center>
    </form>
</body>
</html>
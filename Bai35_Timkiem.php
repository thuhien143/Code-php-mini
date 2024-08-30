<?php
if(isset($_POST['submit']))
{
    // Lấy giá trị mảng và số cần tìm từ form
    $mang = $_POST['mang'];
    $so = $_POST['so'];
    
    // Tạo mảng từ giá trị nhập vào
    $arr = explode(",",$mang);
    
    // Gọi hàm tìm kiếm
    $vi_tri = tim_kiem($arr,$so);
    
    // In mảng và kết quả tìm kiếm
    $mg = implode(",",$arr);
    if($vi_tri >= 0)
    {
        $kq = "Số ".$so." được tìm thấy tại vị trí ".$vi_tri." trong mảng";
    }
    else
    {
        $kq = "Số ".$so." không có trong mảng";
    }
}

function tim_kiem($mang,$gia_tri)
{
    for($i=0;$i<count($mang);$i++)
    {
        if($mang[$i] == $gia_tri)
        {
            return $i;
        }
    }
    return -1;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tìm kiếm</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <form method="post" action="">
        <center>
            <table>
                <tr bgcolor="#339a99">
                    <td colspan="2" align="center">TÌM KIẾM</td>
                </tr>
                <tr bgcolor="#d1ded4">
                    <td>Nhập mảng:</td>
                    <td><input type="text" name="mang" value="<?php if(isset($_POST['mang'])) echo $_POST['mang']; ?>" size="50"></td>
                </tr>
                <tr bgcolor="#d1ded4">
                    <td>Nhập số cần tìm</td>
                    <td><input type="text" name="so" value="<?php if(isset($_POST['so'])) echo $_POST['so']; ?>" size="50"></td>
                </tr>
                <tr bgcolor="#d1ded4">
                    <td></td>
                    <td colspan="2" align="left"><input type="submit" value="tìm kiếm" name="submit" style="background-color:#8fb6e1;cursor: pointer"></td>
                </tr>
                <tr bgcolor="#d1ded4">
                    <td>Mảng</td>
                    <td><input type="text" name="mg" value="<?php echo $mg; ?>" size="50" readonly></td>
                </tr>
                <tr bgcolor="#d1ded4">
                    <td>Kết quả tìm kiếm</td>
                    <td><input type="text" name="kq" value="<?php echo $kq; ?>" size="50" readonly style="background-color:#ccfcff;color:red"></td>
                </tr>
                <tr  bgcolor="#339a99">
                    <td colspan="2" align="center">(Ghi chú: các phần tử trong mảng cách nhau bởi dấu ",")</td>
                </tr>
            </table>
        </center>
    </form>
</body>
</html>
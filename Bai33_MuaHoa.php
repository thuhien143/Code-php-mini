<!DOCTYPE html>
<html>
<head>
	<title>Mua hoa</title>
	<meta charset="UTF-8">
	<meta name="viewport" type="text/css" content="width=device-width, initial-scale=1.0">
    <style >
        .text{
            color = red;
        }
    </style>
</head>

<body>
<?php
    function tim_hoa($ten_hoa, $mang_hoa)
    {
        $so_phan_tu = count($mang_hoa);
        $kq = 0;
        for ($i = 0; $i < $so_phan_tu; $i++) {
            if (strcasecmp($ten_hoa, $mang_hoa[$i]) == 0) {
                $kq = 1;
            }
        }
        return $kq;
    }

    $mang_hoa = array();
    if (isset($_POST['gio'])) {
        $gio = $_POST['gio'];
        $mang_hoa = explode(',', $gio);
    }

    if (isset($_POST['submit'])) {
        $ten_hoa = $_POST['hoa'];
        if (tim_hoa($ten_hoa, $mang_hoa) == 1) {
            echo "Hoa đã có trong giỏ";
        } else {
            $gio .= $ten_hoa . ',';
            echo "<script>alert('Thêm hoa vào giỏ thành công')</script>";
        }
    }
    ?>
	<form method="post" action="">
		<center>
			<table>
				<tr bgcolor="#fdcb68">
					<td colspan="2" align="center" style="color:red">MUA HOA</td>
				</tr>
				<tr bgcolor="#fd9999">
					<td ">Loại hoa bạn chọn:</td>
					<td>
                        <input type="text" name="hoa" value="<?php if(isset($_POST['hoa'])) echo $_POST['hoa']; ?>" size="40">
                        <input type="submit" value="Thêm vào giỏ hoa" name="submit" style="cursor: pointer">

					</td>
                    
				</tr>
                <tr bgcolor="#fd9999">
                    <td >Giỏ hoa của bạn có</td>
                    <td></td>
                </tr>
                <tr bgcolor="#fd9999">
                    <td colspan="2" align="center">
                        <input type="text" name="gio" value="<?php if(isset($gio)) { echo $gio; } ?>" size="80" readonly>
                    </td>
                </tr>
			</table>
		</center>
	</form>
</body>
</html>
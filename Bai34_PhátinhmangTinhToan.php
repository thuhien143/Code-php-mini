<!DOCTYPE html>
<html>
<head>
	<title>Phát sinh mảng và tính toán</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
	    function tao_mang($n)
	    {
	        $mang = array();
	        for ($i = 0; $i < $n; $i++) {
	            $mang[$i] = rand(0, 20);
	        }
	        return $mang;
	    }

	    function xuat_mang($mang)
	    {
	        return implode(',', $mang);
	    }

	    function tinh_tong($mang)
	    {
	        return array_sum($mang);
	    }

	    function tim_max($mang)
	    {
            if (count($mang) > 0) {
	            return max($mang);
            }
            return 0;
	    }

	    function tim_min($mang)
	    {
            if (count($mang) > 0) {
	            return min($mang);
            }
            return 0;
	    }

	    if (isset($_POST['submit'])) {
	        $n = $_POST['pt'];
	        $mang = tao_mang($n);
	        $mang_kq = xuat_mang($mang);
	        $tong = tinh_tong($mang);
	        $max = tim_max($mang);
	        $min = tim_min($mang);
	    }
	?>
	<form method="post" action="">
		<center>
			<table>
				<tr bgcolor="#980065">
					<td colspan="2" align="center" style="color:white">PHÁT SINH MẢNG VÀ TÍNH TOÁN</td>
				</tr>
				<tr bgcolor="#facde8">
					<td>Nhập số phần tử:</td>
					<td>
                        <input type="text" name="pt" value="<?php if(isset($_POST['pt'])) echo $_POST['pt']; ?>" size="50">
					</td>
				</tr>
                <tr bgcolor="#facde8"> 
					<td></td>
                	<td colspan="2" align="left">
                        <input type="submit" value="Phát sinh và tính toán" name="submit" style="background-color:#fdfe96;cursor: pointer">
                    </td>
                </tr>
                <?php if (isset($_POST['submit'])) { ?>
                <tr bgcolor="#feecf8">
                    <td>Mảng</td>
                    <td><input type="text" name="mang" value="<?php echo $mang_kq; ?>" size="50" readonly style="background-color:#ff969b"></td>
                </tr>
                <tr bgcolor="#feecf8">
                    <td>MAX trong mảng</td>
                    <td><input type="text" name="max" value="<?php echo $max; ?>" size="50" readonly style="background-color:#ff969b"></td>
                </tr>
                <tr bgcolor="#feecf8">
                    <td>MIN trong mảng</td>
                    <td><input type="text" name="min" value="<?php echo $min; ?>" size="50" readonly style="background-color:#ff969b"></td>
                </tr>
                <tr bgcolor="#feecf8">
                    <td>Tổng mảng</td>
                    <td><input type="text" name="tong" value="<?php echo $tong; ?>" size="50" readonly style="background-color:#ff969b"></td>
                </tr>
                <?php } ?>
                <tr bgcolor="#feecf8">
                    <td colspan="2" align="center">(Ghi chú: các phần tử trong mảng sẽ có giá trị từ 0 đến 20)</td>
                </tr>
			</table>
		</center>
	</form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Tính số ngày</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
        // Hàm kiểm tra năm nhuận
        function nam_nhuan($nam)
        {
            if ($nam % 400 == 0 || ($nam % 4 == 0 && $nam % 100 != 0)) {
                return 1;
            } else {
                return 0;
            }
        }

        if(isset($_POST['submit'])){
            $thang = $_POST['thang'];
            $nam = $_POST['nam'];

            // Dùng hàm thời gian để tính số ngày trong tháng
            $d = cal_days_in_month(CAL_GREGORIAN, $thang, $nam);

            // Gọi hàm nam_nhuan($nam) để xét năm nhuận
            $kq = nam_nhuan($nam);
            if($kq == 1){
                $chuoi = "Tháng $thang năm $nam có $d ngày (năm nhuận)";
            } else {
                $chuoi = "Tháng $thang năm $nam có $d ngày";
            }
        }
    ?>
	<form method="post" action="">
		<center>
			<table>
				<tr bgcolor="#d94868">
					<td colspan="2" align="center">TÍNH SỐ NGÀY TRONG THÁNG</td>
				</tr>
				<tr bgcolor = "#e19db7">
					<td>Tháng/năm:</td>
					<td>
						<input type="text" name="thang" value="<?php if(isset($_POST['thang'])) echo $_POST['thang']; ?>" size="5">
                        /
                        <input type="text" name="nam" value="<?php if(isset($_POST['nam'])) echo $_POST['nam']; ?>" size="5">
					</td>
				</tr>
				<tr bgcolor = "#e19db7">
					<td colspan="2" align="center">
						<input type="submit" value="Tính số ngày" name="submit" style="cursor: pointer">
					</td>
				</tr>
                <tr bgcolor = "#e19db7">
					<td colspan="2" align="center">
                        <input type="text" name="kq" value="<?php if(isset($kq)) { echo $chuoi; } ?>" size="40" readonly style="background-color:#FFFF99">
					</td>
				</tr>
			</table>
		</center>
	</form>
</body>
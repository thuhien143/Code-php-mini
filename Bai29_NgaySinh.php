<!DOCTYPE html>
<html>
<head>
	<title>Ngày sinh</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
        if(isset($_POST['submit'])){
            $ngay = $_POST['ngay'];
            $thang = $_POST['thang'];
            $nam = $_POST['nam'];

            $ngay_sinh = mktime(0, 0, 0, $thang, $ngay, $nam);

            $ngay_ht = time();

            $diff_seconds = $ngay_sinh - $ngay_ht;
            $diff_days = round($diff_seconds / (24*60*60));

            if($diff_days < 0){
                $thongbao = "Ngày sinh nhật của bạn đã qua " . abs($diff_days) . " ngày.";
            } elseif ($diff_days > 0) {
                $thongbao = "Còn " . $diff_days . " ngày nữa là đến ngày sinh nhật của bạn.";
            } else {
                $thongbao = "Chúc mừng sinh nhật!";
            }

            $nam_ht = date('Y');
            $tuoi = $nam_ht - $nam;
            $chuoi = "Năm nay bạn $tuoi tuổi";
        }
    ?>
	<form method="post" action="">
		<center>
			<table>
				<tr bgcolor="#cc3467">
					<td colspan="2" align="center">NGÀY SINH</td>
				</tr>
				<tr bgcolor="#dd94b9">
					<td>Tháng/năm:</td>
					<td>
                        <input type="text" name="ngay" value="<?php if(isset($_POST['ngay'])) echo $_POST['ngay']; ?>" size="5">
                        /
						<input type="text" name="thang" value="<?php if(isset($_POST['thang'])) echo $_POST['thang']; ?>" size="5">
                        /
                        <input type="text" name="nam" value="<?php if(isset($_POST['nam'])) echo $_POST['nam']; ?>" size="5">

                        <input type="submit" value="Thông báo" name="submit" style="cursor: pointer">
					</td>
				</tr>
                <tr bgcolor="#f2ccd9"> 
                    <td colspan="3" align="center">
                        <input type="text" name="chuoi" value="<?php if(isset($chuoi)) { echo $chuoi; } ?>" size="60" readonly style="background-color:#f2ccd9;text-align:center">
                    </td>
                </tr>
                <tr bgcolor="#f2ccd9">
                    <td colspan="3" align="center">
                        <input type="text" name="thongbao" value="<?php if(isset($thongbao)) { echo $thongbao; } ?>" size="60" readonly style="background-color:#f2ccd9;text-align:center">
                    </td>
                </tr>
                
			</table>
		</center>
	</form>
</body>
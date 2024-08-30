<!DOCTYPE html>
<html>
<head>
	<title>số chia hết cho a và b</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
        if (isset($_POST['submit'])) {
            // lấy giá trị N, A, B từ form
            $so = $_POST['so'];
            $a = $_POST['a'];
            $b = $_POST['b'];
            // định nghĩa hàm kiểm tra số chia hết cho A và B
            function kt_so($so, $a, $b) {
                if ($so % $a == 0 && $so % $b == 0) {
                    return true;
                } else {
                    return false;
                }
            }
            // tạo chuỗi kết quả
            $chuoi = "";
            for ($i = 1; $i <= $so; $i++) {
                if (kt_so($i, $a, $b)) {
                    $chuoi .= $i . " ";
                }
            }
        }
    ?>
	<form method="post" action="">
		<center>
			<table border="1" bordercolor="#feebcb">
				<tr bgcolor="#fecc69">
					<td colspan="2" align="center">SỐ CHIA HẾT CHO A VÀ B</td>
				</tr>
				<tr bgcolor="#feebcb">
					<td>Nhập N:</td>
					<td>
						<input type="text" name="so" value="<?php if(isset($_POST['so'])) echo $_POST['so']; ?>" size="10">
					</td>
				</tr>
				<tr bgcolor="#feebcb">
					<td>Nhập A:</td>
					<td>
						<input type="text" name="a" value="<?php if(isset($_POST['a'])) echo $_POST['a']; ?>" size="10">
					</td>
				</tr>
                <tr bgcolor="#feebcb">
					<td>Nhập B:</td>
					<td>
						<input type="text" name="b" value="<?php if(isset($_POST['b'])) echo $_POST['b']; ?>" size="10">
					</td>
				</tr>
				<tr bgcolor="#feebcb">
					<td colspan="2" align="center">
						<input type="submit" value="Tính" name="submit">
					</td>
				</tr>
                <tr bgcolor="#feebcb">
					<td>kết quả:</td>
					<td>
                        <input type="text" name="chuoi" value="<?php if(isset($chuoi)) { echo $chuoi; } ?>" size="10" style="background-color:#f8cfd8">
					</td>
				</tr>
			</table>
		</center>
	</form>
</body>
</html>
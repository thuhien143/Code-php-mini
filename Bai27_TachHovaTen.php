<!DOCTYPE html>
<html>
<head>
	<title>Tách họ và tên</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <style>
        h2{
            color = white;
        }
    </style>
    <?php
        if(isset($_POST['submit'])) {
            $a = $_POST['a'];
            $b = $_POST['b'];
            $c = $_POST['c'];

            // Lấy thông tin chuỗi, bỏ các khoảng trắng ở đầu và cuối chuỗi
	        $hoten = trim($_POST["chuoi"]);
            // Tách chuỗi thành mảng theo khoảng trắng
	        $mang = explode(" ", $hoten);

	        if(count($mang) == 1){ // Trường hợp có 1 từ
		        $a = $hoten;
		        $b = "";
		        $c = "";
	        }
	        else if(count($mang) == 2){ // Trường hợp có 2 từ
		        $a = $mang[0];
		        $b = "";
		        $c = $mang[1];
	        }
	        else{ // Trường hợp có 3 từ trở lên
		        $a = $mang[0];
		        $c = $mang[count($mang)-1];
		        $b = "";
		        for($i = 1; $i < count($mang)-1; $i++){
			        $b .= $mang[$i] . " ";
		        }
		        // Bỏ các khoảng trắng ở đầu và cuối chuỗi tên đệm
		        $b = trim($b);
	        }
        }
    ?>
	<form method="post" action="">
		<center>
			<table>
				<tr bgcolor="#350099">
					<td colspan="2" align="center"><h2>TÁCH HỌ VÀ TÊN</h2></td>
				</tr>
				<tr bgcolor="#b0c0fe">
					<td>Họ và Tên:</td>
					<td>
						<input type="text" name="chuoi" value="<?php if(isset($_POST['chuoi'])) echo $_POST['chuoi']; ?>" size="20">
					</td>
				</tr>
				<tr bgcolor="#b0c0fe">
					<td>Họ:</td>
					<td>
						<input type="text" name="a" value="<?php if(isset($_POST['a'])) echo $a; ?>" size="20" readonly style ="background-color:#cffcf5">
					</td>
				</tr>
                <tr bgcolor="#b0c0fe">
					<td>Tên đệm:</td>
					<td>
						<input type="text" name="b" value="<?php if(isset($_POST['b'])) echo $b; ?>" size="20" readonly style ="background-color:#cffcf5">
					</td>
				</tr>
                <tr bgcolor="#b0c0fe">
					<td>Tên:</td>
					<td>
						<input type="text" name="c" value="<?php if(isset($_POST['c'])) echo $c; ?>" size="20" readonly style ="background-color:#cffcf5">
					</td>
				</tr>
				<tr bgcolor="#b0c0fe">
					<td colspan="2" align="center">
						<input type="submit" value="Tách Họ Tên" name="submit" style ="background-color:#c9ffc7;cursor: pointer" >
					</td>
				</tr>
			</table>
		</center>
	</form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đọc Số</title>
</head>
<body>
<?php
    if (isset($_POST['submit'])) {
        $so = $_POST['so'];
        // viết hàm đọc một số từ 1 đến 9
        function doc_1_so($so)
        {
            switch($so) {
                case 1: return "Một"; break;
                case 2: return "Hai"; break;
                case 3: return "Ba"; break;
                case 4: return "Bốn"; break;
                case 5: return "Năm"; break;
                case 6: return "Sáu"; break;
                case 7: return "Bảy"; break;
                case 8: return "Tám"; break;
                case 9: return "Chín"; break;
            }
        }

        // lần lượt tách số ra thành 3 phần
        $tram = floor($so/100);
        $chuc = floor(($so%100)/10);
        $dv = $so%10;
        // khởi tạo giá trị ban đầu cho các phần 
        $doc_tram = '';
        $doc_chuc = '';
        $doc_dv = '';

        // xét từng trường hợp của các phần
        if ($tram != 0) {
            $doc_tram = doc_1_so($tram) . " Trăm";
        }

        if ($chuc == 0 && $dv != 0) {
            $doc_chuc = "Lẻ";
        } elseif ($chuc == 1 && $dv != 0) {
            $doc_chuc = "Mười";
        } elseif ($chuc > 1 && $dv == 1) {
            $doc_chuc = doc_1_so($chuc) . " Mươi mốt";
        } elseif ($chuc > 1 && $dv == 5) {
            $doc_chuc = doc_1_so($chuc) . " Mươi lăm";
        } elseif ($chuc > 1 && $dv > 1) {
            $doc_chuc = doc_1_so($chuc) . " Mươi " . doc_1_so($dv);
        } elseif ($chuc > 1 && $dv == 0) {
            $doc_chuc = doc_1_so($chuc) . " Mươi";
        } elseif ($chuc == 0 && $dv == 0) {
            $doc_chuc = "";
        }

        if ($dv != 0 && $chuc != 1) {
            $doc_dv = doc_1_so($dv);
        } elseif ($dv == 0 && $chuc == 0 && $tram == 0) {
            $doc_dv = "Không";
        } elseif ($dv == 5 && $chuc == 0) {
            $doc_dv = "Năm";
        } elseif ($dv == 1 && $chuc == 0 && $tram == 0) {
            $doc_dv = "Một";
        } elseif ($dv == 1 && $chuc > 1) {
            $doc_dv = "Mốt";
        }

        // ghép 3 phần lại tạo thành chuỗi đọc số
        $chu = $doc_tram . " " . $doc_chuc . " " . $doc_dv;
    } else {
        // nếu form chưa được submit thì đặt giá trị mặc định cho số và chuỗi đọc được
        $so = '';
        $chu = '';
    }
?>
<form action="" method = "POST" >
    <center>
        <table width="350">
                <tr class="center" bgcolor= "#005bc0">
                    <td colspan="3" align="center">ĐỌC SỐ 3 CHỮ SỐ</td>
                </tr>
                <tr bgcolor="#aee4ff">
                    <td width ="120">Nhập số: </td>
                    <td width="200"> 
                        <label>
                            <input name= "so" type="text" id="so" value ="<?php echo $so;?>" size="5">
                        </label>
                    </td>
                    <td width="100">
                        <label>
                            <input type="submit" name="submit" value="Thực hiện" bgcolor="#cff8f9" style="cursor: pointer">
                        </label>
                    </td>
                </tr>
                <tr bgcolor="#aee4ff">
                    <td width ="120"> Bằng chữ: </td>
                    <td colspan= "2"> 
                        <input name= "chu" type="text" id="chu" value ="<?php echo $chu;?>" color="#bb2b29" size="20" style="background-color:#fefdcb">
                    </td>
                </tr>
            </table>
    </center>
</form>
</body>
</html>
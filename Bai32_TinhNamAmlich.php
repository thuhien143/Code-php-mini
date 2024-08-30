<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính năm âm lịch</title>
</head>
<body>
    <?php
        //Khai báo các mảng chứa thông tin về can, chi và hình ảnh
        $mang_can = array("Quý", "Giáp", "Ất","Bính", "Đinh", "Mậu", "Kỷ", "Canh", "Tân","Nhâm");
        $mang_chi = array("Hợi", "Tý", "Sửu","Dần", "Mão", "Thìn","Tỵ", "Ngọ", "Mùi","Thân", "Dậu", "Tuất");
        $mang_hinh = array ("hoi.jpg", "ty.jpg","suu.jpg", "dan.jpg", "mao.jpg", "thin.jpg","ti.jpg", "ngo.jpg", "mui.jpg", "than.jpg","dau.jpg", "tuat.jpg");

        if(isset($_POST["submit"])){ //Xử lý thông tin khi form được submit
            $nam = $_POST["a"]; //Lấy giá trị năm từ form
            
            //Tính toán can, chi và lấy hình ảnh
            $nam = $nam - 3;
            $can = $nam%10;
            $chi = $nam%12;
            $nam_al = $mang_can[$can];
            $nam_al = $nam_al . " " .$mang_chi[$chi];
            $hinh = $mang_hinh[$chi];
            $hinh_anh = "<img src ='images/$hinh'>";
            //Gán giá trị can và chi vào biến để hiển thị trên form
            $so = $nam;
            $chu = $nam_al;
        }
        else //Nếu form chưa được submit thì giá trị trên form là trống
        {
            $so = "";
            $chu = "";
        }
    ?>
    <form action="" method="POST">
        <center>
        <table>
            <tr class="center" bgcolor="#0658ba">
                <td colspan="3" align="center">TÍNH NĂM ÂM LỊCH</td>
            </tr>
            <tr bgcolor="#aee4ff">
                <td width="200">
                    <label>Năm dương lịch :</label> 
                </td>
                <td></td>
                <td width="200">
                    <label>Năm âm lịch :</label>
                </td>
            </tr>
            <tr bgcolor="#aee4ff">
                <td width="100">
                    <label for= "a"><label>
                    <input name="a" type ="text" id="so" value="<?php echo $so;?>" size = "20">
                    
                </td>
                <td align="center">
                    <input type="submit" name="submit" value="=>" style="background-color:#fffccd;cursor: pointer;color:red">
                </td>
                <td width="100">
                    <label for = "b"></label>
                    <input name="b" type="text" id="chu" value="<?php echo $chu; ?>" size = "20" style="background-color:#fffccd;color:red">
                </td>
            </tr>
            <tr bgcolor="#aee4ff">
                <td colspan="3" align="center">
                    <img src="images/<?php echo $hinh; ?>" alt="Hình ảnh" />
                </td>
            </tr>
        </table>
        </center>
    </form>
</body>
</html>
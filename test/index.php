<!doctype html>
<html>
    <head>
        <title>BTVN</title>

    </head>
    <body>

        <h1>BÀI TẬP VỀ NHÀ</h1>
        <form  method="POST" action="">
            Mã sách:<input type="text" name="MaSach" placeholder="Mã sách là..."> <br>
            Tên sách:<input type="text" name="TenSach" placeholder="Tên sách là..."> <br> 
            Tác giả:<input type="text" name="TacGia" placeholder="Tác giả là..."> <br>
            Nhà xuất bản:<input type="text" name="NhaXuatBan" placeholder="Nhà xuất bản là..."> <br>
            Giá:<input type="text" name="Gia" placeholder="Giá là..."> <br>
            Thể loại:
            <select name="TheLoai" id="">
            <option value="1">Tin học</option>
            <option value="2">Toán</option>
            <option value="3">Ngoại ngữ</option> 
            </select><br/>
            <button>Thêm mới</button> 
        </form>
       
    

    
     <table border=2px>
        <tr>
            <th class="stt"><label for="register_name" class="label">STT</label></th>
            <th class="MaSach"><label for="register_name" class="label">Mã sách</label></th>
            <th class="TenSach"><label for="register_name" class="label">Tên sách</label></th>
            <th class="TacGia"><label for="register_name" class="label">Tác giả</label></th>
            <th class="NhaXuatBan"><label for="register_name" class="label">Nhà xuất bản</label></th>
            <th class="Gia"><label for="register_name" class="label">Giá</label></th>
            <th class="TheLoai"><label for="register_name" class="label">Thể loại</label></th>
            
        </tr>
        <tr>
            <td name="stt"></td>
            <td name="MaSach">
                <?php
                if(!empty($_POST)) {
                 $MaSach=$_POST["MaSach"];
                 echo $MaSach;
                //  echo $_POST["MaSach"];
                }
                ?>
            </td>
            <td name="TenSach">
            <?php
                if(!empty($_POST)) {
                 $TenSach=$_POST["TenSach"];
                 echo $TenSach;
                //  echo $_POST["TenSach"];
                }
                ?>
            </td>
            <td name="TacGia">
            <?php
                if(!empty($_POST)) {
                 $TacGia=$_POST["TacGia"];
                 echo $TacGia;
                //  echo $_POST["TacGia"];
                }
                ?>
            </td>
            <td name="NhaXuatBan">
            <?php
                if(!empty($_POST)) {
                 $NhaXuatBan=$_POST["NhaXuatBan"];
                 echo $NhaXuatBan;
                //  echo $_POST["NhaXuatBan"];
                }
                ?>
            </td>
            <td name="Gia">
            <?php
                if(!empty($_POST)) {
                 $Gia=$_POST["Gia"];
                 echo $Gia;
                //  echo $_POST["Gia"];
                }
                ?>
            </td>
            <td name="TheLoai">
            <?php
                if(!empty($_POST)) {
                 $TheLoai=$_POST["TheLoai"];
                 echo $TheLoai;
                //  echo $_POST["TheLoai"];
                }
                ?>
            </td>
        </tr>
       
    
        </table> 
        <?php
    $username='root';
    $password='';
    $servername='127.0.0.1:3308';
    $dbname='baivenha';
    $connect= new mysqli($servername,$username, $password,$dbname);
    if($connect->connect_error){
        die("khong ket noi:".$connect->connect_error);
        exit();
    }
    // echo "KẾT NỐI THÀNH CÔNG VỚI MYSQL!"."<br>";

    // Lệnh SQL để tạo bảng
    $sql = "CREATE TABLE sach (
        MaSach INT AUTO_INCREMENT PRIMARY KEY,
        TenSach VARCHAR(50),
        TacGia VARCHAR(50),
        NhaXuatBan VARCHAR(50),
        Gia INT,
        TheLoai VARCHAR(50)
    )";

// Thực thi lệnh SQL để tạo bảng
if ($connect->query($sql)===TRUE) {
    echo "Bảng đã được tạo thành công";
} else {
    echo "Lỗi khi tao bảng: " . $connect->error;
}

// them data
    if ($SERVER["REQUEST_METHOD"]=="POST") {
         if(isset($_POST["MaSach"])) {$MaSach=$_POST["MaSach"];}
         if(isset($_POST["TenSach"])) {$MaSach=$_POST["TenSach"];}
         if(isset($_POST["TacGia"])) {$MaSach=$_POST["TacGia"];}
         if(isset($_POST["NhaXuatBan"])) {$MaSach=$_POST["NhaXuatBan"];}
         if(isset($_POST["TheLoai"])) {$MaSach=$_POST["TheLoai"];}
        if(isset($_POST["Gia"])) {$MaSach=$_POST["Gia"];}
        
     }
        $sql="insert into sach (MaSach, TenSach,TacGia,NhaXuatBan,TheLoai,Gia)
        values ('$MaSach','$TenSach','$TacGia','$NhaXuatBan','$TheLoai','$Gia')";
        // if(mysqli_query($connect,$sql)){
        if($connect->query($sql)===true) {
            echo "Thêm dữ liệu thành công!";
        }
        else {
            echo "error:". $sql."<br>". $connect->error;
        }
        $connect->close();
    ?> 

    </body>
</html>
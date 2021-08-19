<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php require_once 'connectDB.php' ?>
    <?php
    if (isset($_POST['add'])) {
        $path = "../uploads/";
        $fileName = "";
        if (isset($_FILES["uploadFile"])) {
            if ($_FILES["uploadFile"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" || $_FILES["uploadFile"]["type"] == "application/msword" || $_FILES["uploadFile"]["type"] == "application/pdf" || $_FILES["uploadFile"]["type"] == "application/octet-stream") {
                if ($_FILES["uploadFile"]["error"] == 0) {
                    //dua file vao server
                    $filename = $_FILES["uploadFile"]["tmp_name"];
                    move_uploaded_file($filename, $path . $_FILES["uploadFile"]["name"]);
                    $fileName .= "uploads/" . $_FILES["uploadFile"]["name"];
                } else {
                    echo "Loi file";
                }
            } else {
                echo "<script>alert('File không đúng định dạng');</script>";
            }
            // echo "<pre>";
            // print_r($_FILES);
            // die;
        }

        $mabtl = $_POST['mabtl'];
        $tenfile = $_POST['tenfile'];
        $mota = $_POST['mota'];
        $gvhd = $_POST['gvhd'];
        if($mabtl==null || $tenfile== null || $mota== null|| $gvhd==null||$fileName==null){
            echo "<script>alert('bạn phải nhập đủ thông tin');</script>";
        }else{
            if ($conn->query("INSERT INTO quanly(MaBTL,Ten,Mota,GVHD,Tailieu) VALUES (N'$mabtl',N'$tenfile',N'$mota',N'$gvhd',N'$fileName')")) {
                echo "<script>alert('them thanh cong');  window.location='library.php';</script>";
            } else {
                echo "<script>alert('them that bai');</script>";
            }
        }
        
        
    }
    $conn->close();
    ?>
    <div class="home-project">
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-2">
                <label for="mabtl">Mã BTL</label>
                <input name="mabtl" class="form-control">

            </div>
            <div class="mb-2">
                <label for="tenfile">Tên Môn</label>
                <input name="tenfile" class="form-control">

            </div>
            <div class="mb-2">
                <label for="mota">Mô tả</label>
                <input name="mota" class="form-control">

            </div>
            <div class="mb-2">
                <label for="gvhd">GVHD</label>
                <input name="gvhd" class="form-control">

            </div>
            <div class="mb-2">

                chọn File:<input type="file" name="uploadFile" id="uploadFile"><br>

            </div>
            <button type="submit" class="btn-sub" name="add">Thêm</button>
        </form>
    </div>
</body>

</html>
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
          if(isset($_GET['mabtl'])){
            $mabtl= $_GET['mabtl'];
            $query = "SELECT * FROM quanly WHERE MaBTL= $mabtl";
            $result = mysqli_query($conn,$query);
             
                    $row = $result -> fetch_array();
                    $mabtl = $row['MaBTL'];
                    $tenfile = $row['Ten'];
                    $mota = $row['Mota'];
                    $gvhd = $row['GVHD'];   
                    $file = $row['Tailieu'];
        }
        if(isset($_POST['edit'])){
            $mabtlup = $_POST['mabtl'];
            $tenfileup = $_POST['tenfile'];
            $motaup = $_POST['mota'];
            $gvhdup = $_POST['gvhd'];
            $fileup =$_POST['uploadFile'];
            $sql = "UPDATE quanly SET MaBTL='$mabtlup',Ten='$tenfileup',Mota='$motaup',GVHD='$gvhdup', Tailieu= '$fileup' WHERE MaBTL=$mabtl";
                if(mysqli_query($conn,$sql)){
                    echo "<script>alert('sua thanh cong'); window.location='library.php';</script>"; 
                }else{
                    echo "<script>alert('sua khong thanh cong');</script>";
                }
        }
    ?>
    <div class="home-project">
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-2">
                <label for="mabtl">Mã BTL</label>
                <input name="mabtl" class="form-control"  value="<?php echo $mabtl ?>">

            </div>
            <div class="mb-2">
                <label for="tenfile">Tên Môn</label>
                <input name="tenfile" class="form-control"  value="<?php echo $tenfile ?>">

            </div>
            <div class="mb-2">
                <label for="mota">Mô tả</label>
                <input name="mota" class="form-control"  value="<?php echo $mota ?>">

            </div>
            <div class="mb-2">
                <label for="gvhd">GVHD</label>
                <input name="gvhd" class="form-control"  value="<?php echo $gvhd ?>">

            </div>
            <div class="mb-2">

                Tên File:<input type="text" name="uploadFile" id="uploadFile"  value="<?php echo $file?>"><br>

            </div>
            <button type="submit" class="btn-sub" name="edit">Sửa</button>
        </form>
    </div>
</body>

</html>
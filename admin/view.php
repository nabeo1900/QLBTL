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
    <?php
    // error_reporting(0); 
    require_once 'connectDb.php'
    ?>
    <?php
    
    if(isset($_GET['mon'])){
        $mon= $_GET['mon'];
        $query = "SELECT * FROM quanly WHERE Ten = '$mon'";
        $resultmon = mysqli_query($conn,$query);           
    }
    
  ?>
    <div class="home-project ">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Mã BTL</th>
                    <th scope="col">Tên Môn</th>
                    <th scope="col">Mô tả</th>
                    <th scope="col">GVHD</th>
                    <th scope="col">Tài Liệu</th>
                    <th scope="col">Chức năng</th>
                </tr>

            </thead>
            <tbody>

                <?php while ($row = mysqli_fetch_assoc($resultmon)) { ?>
                    <tr>
                        <td><?php echo $row['MaBTL']; ?></td>
                        <td><?php echo $row['Ten']; ?></td>
                        <td><?php echo $row['Mota']; ?></td>
                        <td><?php echo $row['GVHD']; ?></td>
                        <td><?php echo $row['Tailieu']; ?></td>
                        <td> <a class ="btn-sub" href="connectDb.php?delete=<?php echo $row['MaBTL'];  ?>">Xóa</a> - <a class="btn-sub" href="editBTL.php?mabtl=<?php echo $row['MaBTL'];  ?>">Sửa</a> </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <form class =" button"method="post" action="addBTL.php">
            <button type="submit" class="btn-sub ">Thêm bài tập lớn</button>
        </form>
    </div>
</body>

</html>
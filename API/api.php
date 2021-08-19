<?php 
    require_once '../admin/connectDb.php';
    $response = array();
    $sql = "SELECT * FROM quanly";
    $result = mysqli_query($conn,$sql);
    if($result){
        header("Content-Type: JSON");
        $i=0;
        while($row = mysqli_fetch_assoc($result)){
            $response[$i]['MaBTL'] = $row ['MaBTL'];
            $response[$i]['Ten'] = $row ['Ten'];
            $response[$i]['Mota'] = $row ['Mota'];
            $response[$i]['GVHD'] = $row ['GVHD'];
            $response[$i]['Tailieu'] = $row ['Tailieu'];
            $i++;
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
?>

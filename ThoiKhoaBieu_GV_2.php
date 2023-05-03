<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database ="qlsinhvien";
    $_SESSION['mgv']="CNTT.01";
    
    
    
    // Create connection
    $conn = new mysqli($servername, $username, $password,$database);
    
    

    if(isset($_POST['tuan'])){
        if(isset($_POST['year']) && isset($_POST['hoc_ki'])){
            $year = $_POST['year'];
            $hoc_ki=$_POST['hoc_ki'];
            $tuan=$_POST['tuan'];
            $sql_3 = "SELECT TKB.Thu,TKB.MaPhong,TKB.TietHocBD,TKB.TietHocKT,LHP.TenHP,LHP.MaHP
            FROM thoikhoabieu TKB, lophocphan LHP
            WHERE TKB.HocKi = " . $hoc_ki . " AND YEAR(TKB.NamHoc) = " . $year . " AND TKB.TuanBD <= '" . $tuan . "' AND TKB.TuanKT >= '" . $tuan . "' AND MaGV = '".$_SESSION['mgv']."' AND TKB.MaHP=LHP.MaHP";
            $result_3=$conn->query($sql_3);
            while($row=$result_3->fetch_assoc()){
                echo $row['Thu'].$row['MaPhong'].PHP_EOL.$row['MaHP'].PHP_EOL.$row['TenHP'].PHP_EOL."Tiết:".$row['TietHocBD']."-".$row['TietHocKT'].",";
            }   
        }
    }


?>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database ="qlsinhvien";
    $_SESSION['mssv']="47.01.104.043";
    
    
    
    // Create connection
    $conn = new mysqli($servername, $username, $password,$database);
    
    

    if(isset($_POST['tuan'])){
        if(isset($_POST['year']) && isset($_POST['hoc_ki'])){
            $year = $_POST['year'];
            $hoc_ki=$_POST['hoc_ki'];
            $tuan=$_POST['tuan'];
            $sql_3 = "SELECT * 
            FROM thoikhoabieu
            WHERE HocKi = " . $hoc_ki . " AND YEAR(NamHoc) = " . $year . " AND TuanBD <= '" . $tuan . "' AND TuanKT >= '" . $tuan . "' AND MSSV = '".$_SESSION['mssv']."'";
            $result_3=$conn->query($sql_3);
            while($row=$result_3->fetch_assoc()){
                echo $row['Thu'].$row['MaHP'].PHP_EOL.$row['TenHP'].PHP_EOL.$row['TietHocBD']."-".$row['TietHocKT'].".";
            }   
        }
    }


?>

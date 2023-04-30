<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database ="qlsinhvien";    
    // Create connection
    $conn = new mysqli($servername, $username, $password,$database);
    
    session_start();
    
        if(isset($_POST['tuan'])){
            if(isset($_POST['year']) && isset($_POST['hoc_ki'])){
                $year = $_POST['year'];
                $hoc_ki=$_POST['hoc_ki'];
                $tuan=$_POST['tuan'];
                $sql_3 = "SELECT * 
                FROM thoikhoabieu
                WHERE HocKi = " . $hoc_ki . " AND YEAR(NamHoc) = " . $year . " AND TuanBD <= '" . $tuan . "' AND TuanKT >= '" . $tuan . "' AND MSSV = '".$_SESSION['mssv_tkb']."'";
                $result_3=$conn->query($sql_3);
                while($row=$result_3->fetch_assoc()){
                    echo $row['Thu'].$row['MaHP'].PHP_EOL.$row['TenHP'].PHP_EOL.$row['TietHocBD']."-".$row['TietHocKT'].".";
                }   
            }
            var_dump($_POST);
        }
    
        
    if(isset($_POST['mssv'])){
       
        unset($_SESSION['mssv_tkb']);
        $_SESSION['mssv_tkb'] = $_POST['mssv'];
        
    }
    
    echo "<pre>";
    var_dump($_SESSION);
    echo "</pre>";
    

?>

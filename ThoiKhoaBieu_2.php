<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database ="qlsinhvien";

    // Create connection
    $conn = new mysqli($servername, $username, $password,$database);
    
    //Truy vấn SQL
    // $sql="SELECT TKB.MSSV,LHP.MaHP,LHP.TuanBD,LHP.TuanKT,LHP.HocKi,YEAR(LHP.NamHoc) as year,LHP.TenHP,TKB.TietHocBD,TKB.TietHocKT,TKB.Thu,TKB.CoSo,GV.HoTen,PH.MaPhong,PH.SucChua,MH.SoTinChi
    // FROM lophocphan LHP,thoikhoabieu TKB,phonghoc PH,monhoc MH, giangvien GV
    // WHERE LHP.MaHP=TKB.MaHP and TKB.MaPhong=PH.MaPhong and MH.MaMH=LHP.MaMH and LHP.MaGV=GV.MaGV";
    // $result =$conn->query($sql);

    if(isset($_POST['tuan'])){
        if(isset($_POST['year']) && isset($_POST['hoc_ki'])){
            $year = $_POST['year'];
            $hoc_ki=$_POST['hoc_ki'];
            $tuan=$_POST['tuan'];
            $sql_3 = "SELECT * 
            FROM thoikhoabieu
            WHERE HocKi = " . $hoc_ki . " AND YEAR(NamHoc) = " . $year . " AND TuanBD <= '" . $tuan . "' AND TuanKT >= '" . $tuan . "'";
            $result_3=$conn->query($sql_3);
            while($row=$result_3->fetch_assoc()){
                echo $row['Thu'].$row['MaHP'].PHP_EOL.$row['TenHP'].PHP_EOL.$row['TietHocBD']."-".$row['TietHocKT']." ";
            }   
        }
    }
?>

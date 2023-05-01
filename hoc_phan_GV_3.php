<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database ="qlsinhvien";
    

    $conn = new mysqli($servername, $username, $password,$database);

    if(isset($_POST['year']) && isset($_POST['hoc_ki'])&& isset($_POST['ma_hp'])){
        $year = $_POST['year'];
        $hoc_ki=$_POST['hoc_ki'];
        $ma_hp=$_POST['ma_hp'];

        $sql="SELECT SV.HoTen,TKB.MaHP,TKB.TenHP,TKB.HocKi,Year(TKB.NamHoc) as nam,SV.MSSV
        FROM thoikhoabieu TKB,sinhvien SV
        WHERE HocKi= '".$hoc_ki."' AND Year(NamHoc)='".$year."' AND MaHP='".$ma_hp."' AND SV.MSSV=TKB.MSSV";

        $result=$conn->query($sql);
        while($row=$result->fetch_assoc()){
          echo $row['HoTen']."-".$row['MSSV'].",";
        }  
    }

?>
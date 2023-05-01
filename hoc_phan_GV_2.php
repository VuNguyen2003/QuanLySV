<?Php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database ="qlsinhvien";
    $_SESSION['ma_gv']="CNTT.01";

    $conn = new mysqli($servername, $username, $password,$database);
    
    $name=array();
    $ma=array();

    if(isset($_POST['year']) && isset($_POST['hoc_ki'])){
        $year = $_POST['year'];
        $hoc_ki=$_POST['hoc_ki'];
        $sql="SELECT * 
        FROM lophocphan
        WHERE MaGV='".$_SESSION['ma_gv']."' AND HocKi= '".$hoc_ki."' AND Year(NamHoc)=".$year;
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc()){
           $name[]=$row['TenHP'];
           $ma[]=$row['MaHP'];
        }  
    }

    $name_ma = array_combine($name, $ma);
    $GLOBALS['name_ma'] = $name_ma;
    foreach($name_ma as $key => $value){
        echo $key."-".$value.".";
    }
    $conn->close();
    
    
   
?>
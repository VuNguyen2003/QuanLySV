<?Php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database ="qlsinhvien";

    $conn = new mysqli($servername, $username, $password,$database);
    
    if(isset($_POST['mssv']) && isset($_POST['mhp']) && isset($_POST['gk']) && isset($_POST['ck']) && isset($_POST['hsck'])&& isset($_POST['hsgk'])){
        $mssv = $_POST['mssv'];
        $mhp=$_POST['mhp'];
        $gk=$_POST['gk'];
        $ck=$_POST['ck'];
        $hsck=$_POST['hsck'];
        $hsgk=$_POST['hsgk'];
        $sql="SELECT * 
        FROM diem
        WHERE MSSV='".$mssv."' AND MaHP ='".$mhp."'";
        $tk= $gk*$hsgk/10+$ck*$hsck/10;
        $result=$conn->query($sql);
        if($result->num_rows > 0){
            $sql="UPDATE diem SET DiemGK=".$gk.",DiemCK=".$ck.",DiemTK=".$tk." WHERE MSSV='".$mssv."' AND MaHP='".$mhp."'";
            $conn->query($sql);
        }
        else {
            $sql="INSERT INTO diem (MSSV,MaHP,DiemGK,DiemCK,DiemTK) VALUES ('".$mssv."','".$mhp."',".$gk.",".$ck.",".$tk.");";
            $conn->query($sql);
        }
        echo $tk;
        

    }

    $conn->close();
?>
<?Php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database ="qlsinhvien";

    $conn = new mysqli($servername, $username, $password,$database);
    
    if(isset($_POST['mssv']) && isset($_POST['mhp'])){
        $mssv = $_POST['mssv'];
        $mhp=$_POST['mhp'];
        $sql="SELECT * 
        FROM diem
        WHERE MSSV='".$mssv."' AND MaHP ='".$mhp."'";
        $result=$conn->query($sql);
        if($result->num_rows > 0){
            while($row=$result->fetch_assoc()){
            echo $row['DiemGK']."-".$row['DiemCK']."-".$row['DiemTK'].",";
            }  
        }
    }

    $conn->close();
?>
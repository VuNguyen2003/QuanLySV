<?php

    $_SESSION['Ma_GV']='CNTT.01';

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database ="qlsinhvien";

    $conn = new mysqli($servername, $username, $password,$database);
    $conn_2 = new mysqli($servername, $username, $password,$database);
    $sql="SELECT SV.HoTen,SV.MSSV,GV.MaGV
        FROM giangvien GV, sinhvien SV
        WHERE GV.MaLop = SV.MaLop AND GV.MaGV = '".$_SESSION['Ma_GV']."'";
    $result=$conn->query($sql);
    $name=array();
    $mssv=array();
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $name[]=$row['HoTen'];
            $mssv[]=$row['MSSV'];
        }
    }

    $name_mssv = array_combine($name, $mssv);
   


    $conn->close();
?>



<!-- Coding by CodingLab | www.codinglabweb.com -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang cá nhân</title>
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="danhSachSv_GV_3.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <title>Dashboard Sidebar Menu</title> 
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="/image/LOGO.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">HCMUE</span>
                    <span class="fullName">Đại học Sư Phạm</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="information_GV.html">
                            <i class='bx bx-user-circle icon' ></i>
                            <span class="text nav-text">Thông tin cá nhân</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="ThoiKhoaBieu_GV.html">
                            <i class='bx bx-time-five icon' ></i>
                            <span class="text nav-text">Lịch dạy học</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Lịch gác thi</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="hoc_phan_GV.html">
                            <i class='bx bx-group icon' ></i>
                            <span class="text nav-text">lớp học phần</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="ThongBao_GV.html">
                            <i class='bx bx-receipt icon' ></i>
                            <span class="text nav-text">Thông báo</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="danhSachSv_GV.html">
                            <i class='bx bx-list-ul icon' ></i>
                            <span class="text nav-text">Lớp cố vấn</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                        
                    </div>
                </li>
                
            </div>

            

    </nav>

    <section class="home">
        <header>
            <div class="left-content"><img src="image/menu.png"></div>
            <div class="right-content">
                <img class="avata" src="image/me.jpg">
                <p>Nguyễn Lê Uy Vũ <br>47.01.104.242</p>
                <div class="nav-link">
                    <i class='bx bxs-bell bell' ></i>
                </div>

            </div>
        </header>
        
        
        <div class="container">
            <table>
            
                <thead>
                    <th>Tên SV</th> 
                    <th>Mã số SV</th>
                    <th>Kết quả học tập</th>
                    <th class="tkb">Thời khóa biểu</th>
                </thead>
                <tbody id="table">
                   
                </tbody>
            </table>
        </div>
        <div class="container-sub">
            <div class="butoon">x</div>
            <div class = "header">
                <div class="namhoc">
                    <h3>Năm học</h3>
                    <select id="year" class="combobox">
                        <option value="0" >0</option>
                        <option value="2022">2022</option>
                        <option value="2023" selected >2023</option>
                    </select>
                </div>
                <div class="hocky">
                    <h3>Học kỳ</h3>
                    <select id="hoc_ki" class="combobox">
                        <option value="1" >1</option>
                        <option value="2" selected>2</option>
                    </select>
                </div>
                <div class="tuan">
                    <h3>Tuần</h3>
                    <select id="tuan"  class="combobox" onChange='onChange()'>
                        <option value="0" selected></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3" >3</option>
                        <option value="4">4</option>
                        <option value="5" >5</option>
                        <option value="6">6</option>
                        <option value="7" >7</option>
                        <option value="8">8</option>
                        <option value="9" >9</option>
                        <option value="10">10</option>
                        <option value="11" >11</option>
                        <option value="12">12</option>
                        <option value="13" >13</option>
                        <option value="14">14</option>
                    </select>
                </div>
            </div>
            <table>
                    <thead>
                        <th>Thứ 2</th>
                        <th>Thứ 3</th>
                        <th>Thứ 4</th>
                        <th>Thứ 5</th>
                        <th>Thứ 6</th>
                        <th>Thứ 7</th>
                      
                    </thead>
                    <tbody>
                        <tr>
                            <td id="T2"></td>
                            <td id="T3"></td>
                            <td id="T4"></td>
                            <td id="T5"></td>
                            <td id="T6"></td>
                            <td id="T7"></td>
                        </tr>
                        
                    </tbody>
                </table>
        </div>
        
                   

        
        
    </section>


    <script>    
        document.querySelector('#table').innerHTML ="<?php 
            foreach($name_mssv as $key => $value){
                $sql_2="SELECT Round(AVG(DiemTK),2) as diem FROM diem 
                        WHERE MSSV='".$value."'";
                $result_2=$conn_2->query($sql_2);
                while($row=$result_2->fetch_assoc()){
                    echo "<tr> <td>".$key."</td> <td>".$value."</td>  <td>".$row['diem']."</td> <td><button class='butoon'  data-mssv='".$value."'>Xem chi tiết</button></td></tr>";
                }  
            }
        ?>";
        
        const onChange=()=>{
            document.querySelector('#T2').innerHTML = "";
            document.querySelector('#T3').innerHTML = "";
            document.querySelector('#T4').innerHTML = "";
            document.querySelector('#T5').innerHTML = "";
            document.querySelector('#T6').innerHTML = "";
            document.querySelector('#T7').innerHTML = "";
            
            const Svalue_hk= document.querySelector("#hoc_ki").value;
            const Svalue_year =document.querySelector('#year').value;
            const Svalue_tuan=document.querySelector('#tuan').value;
            const xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.responseText);
                    const string=this.responseText;
                    const va=string.split('.');
                    for(let x of va){
                        if(x[0]=='2'){
                            document.querySelector('#T2').innerText = x.slice(1);
                        }
                        if(x[0]=='3'){
                            document.querySelector('#T3').innerText = x.slice(1);
                        }
                        if(x[0]=='4'){
                            document.querySelector('#T4').innerText = x.slice(1);
                        }
                        if(x[0]=='5'){
                            document.querySelector('#T5').innerText = x.slice(1);
                        }
                        if(x[0]=='6'){
                            document.querySelector('#T6').innerText = x.slice(1);
                        }
                        if(x[0]=='7'){
                            document.querySelector('#T7').innerText = x.slice(1);
                        }
                    }
                }
            };
            xhr.open("POST","danh_Sach_Sv_GV_2.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.send("tuan=" + Svalue_tuan +"&year=" + Svalue_year + "&hoc_ki=" + Svalue_hk );
        }

        
    </script>
    
    
    <script src="Responsive-DarkMode.js">
    <script src="Hide-Menu.js"></script>
    <script src="danh_sachSv_GV.js"></script>

</body>
</html>
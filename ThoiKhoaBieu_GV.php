

<!-- Coding by CodingLab | www.codinglabweb.com -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang cá nhân</title>
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style-inf.css">
    <link rel="stylesheet" href="style-ThoiKhoaBieu.css">
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
                        <a href="./information.html">
                            <i class='bx bx-user-circle icon' ></i>
                            <span class="text nav-text">Thông tin cá nhân</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="ThoiKhoaBieu.html">
                            <i class='bx bx-time-five icon' ></i>
                            <span class="text nav-text">Lịch học</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="Lichthi.html">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Lịch thi</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="./learning-outcomes.html">
                            <i class='bx bx-pie-chart-alt icon' ></i>
                            <span class="text nav-text">Kết quả</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="CongNo.html">
                            <i class='bx bx-wallet icon' ></i>
                            <span class="text nav-text">Công nợ</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="ThongBao.html">
                            <i class='bx bx-receipt icon' ></i>
                            <span class="text nav-text">Thông báo</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="ChuongTrinhHoc.html">
                            <i class='bx bx-list-ul icon' ></i>
                            <span class="text nav-text">Chương trình học</span>
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
        <div class = 'container'>
            <div class = "header">
                <div class="namhoc">
                    <h3>Năm học</h3>
                    <select id="year" class="combobox" onChange="onChange()">
                        <option value="0" >0</option>
                        <option value="2022">2022</option>
                        <option value="2023" selected >2023</option>
                    </select>
                </div>
                <div class="hocky" onChange="onChange()">
                    <h3>Học kỳ</h3>
                    <select id="hoc_ki" class="combobox">
                        <option value="1" >1</option>
                        <option value="2" selected>2</option>
                    </select>
                </div>
                <div class="tuan">
                    <h3>Tuần</h3>
                    <select id="tuan"  class="combobox" onChange="onChange()">
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
            <div class="bang">
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
        </div>
    </section>

    <script src="Responsive-DarkMode.js"></script>
    <script src="Hide-Menu.js"></script>
    <script>
         
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
                    const va=string.split(',');
                    for(let x of va){
                        if(x[0]=='2'){
                            document.querySelector('#T2').innerHTML = x.slice(1);
                        }
                        if(x[0]=='3'){
                            document.querySelector('#T3').innerHTML = x.slice(1);
                        }
                        if(x[0]=='4'){
                            document.querySelector('#T4').innerHTML = x.slice(1);
                        }
                        if(x[0]=='5'){
                            document.querySelector('#T5').innerHTML = x.slice(1);
                        }
                        if(x[0]=='6'){
                            document.querySelector('#T6').innerHTML = x.slice(1);
                        }
                        if(x[0]=='7'){
                            document.querySelector('#T7').innerHTML = x.slice(1);
                        }
                    }
                }
            };
            xhr.open("POST","ThoiKhoaBieu_GV_2.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.send("tuan=" + Svalue_tuan +"&year=" + Svalue_year + "&hoc_ki=" + Svalue_hk );
        }
        onChange();
    </script>
</body>
</html>
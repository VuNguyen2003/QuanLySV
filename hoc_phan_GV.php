
<!-- Coding by CodingLab | www.codinglabweb.com -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang cá nhân</title>
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="hoc_phan_GV_2.css">
    
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
                        <a href="#">
                            <i class='bx bx-user-circle icon' ></i>
                            <span class="text nav-text">Thông tin cá nhân</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
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
            <div class="title">
                Danh sách lớp hp
            </div>
            <div class = "header">
                <div class="namhoc">
                    <h3>Năm học</h3>
                    <select id="year" class="combobox" onchange="onChange()">
                        <option value="2022">2022</option>
                        <option value="2023" selected >2023</option>
                    </select>
                </div>
                <div class="hocky">
                    <h3>Học kỳ</h3>
                    <select id="hoc_ki" class="combobox" onchange="onChange()">
                        <option value="1" >1</option>
                        <option value="2" selected>2</option>
                    </select>
                </div>
               
            </div>
            <table>
                
                <thead>
                    <th>Tên môn</th>
                    <th>Mã lớp</th>
                    <th>Danh sách sv</th>
                </thead>
                <tbody id="lop_hoc_phan">
                </tbody>
            </table>
        </div>

        <div class="container-sub">
            <div class="butoon">x</div>
            <table>

                <thead>
                    <th>Tên SV</th>
                    <th>Mã số SV   </th>
                    <th>Kết quả</th>
                    <th>Thêm điểm</th>
                </thead>
                <tbody id="danh_sach_sv">
                   
                </tbody>
            </table>
        </div>

        <div class="container-sub_kq">
            <div class="butoon_kq">x</div>
            <table>

                <thead>
                    <th>Điểm gIữa kì</th>
                    <th>Điểm cuối kì  </th>
                    <th>Điểm tổng kết</th>
                </thead>
                <tbody id="danh_sach_kq">
                   
                </tbody>
            </table>
        </div>

        <div class="container-sub_them_diem">
            <div class="butoon_them_diem">x</div>
            <form id="them_diem">
                <div class="form">

                    <label class="lb" for="gk">Nhập điểm giữa kì: </label>
                    <input type="text" name="gk" id="gk">
                    <select id="he_so_gk">
                        <option value="1">10%</option>
                        <option value="2">20%</option>
                        <option value="3">30%</option>
                        <option value="4">40%</option>
                        <option value="5" selected>50%</option>
                        <option value="6">60%</option>
                        <option value="7">70%</option>
                        <option value="8">80%</option>
                        <option value="9">90%</option>
                    </select>
                </div>
                <div class="form">

                    <label class="lb" for="ck">Nhập điểm cuối kì: </label>
                    <input type="text" name="ck" id="ck">
                    <select id="he_so_ck">
                        <option value="1">10%</option>
                        <option value="2">20%</option>
                        <option value="3">30%</option>
                        <option value="4">40%</option>
                        <option value="5" selected>50%</option>
                        <option value="6">60%</option>
                        <option value="7">70%</option>
                        <option value="8">80%</option>
                        <option value="9">90%</option>
                    </select>
                </div>
                <button id="bt" type="submit">Nhập</button>
                <div class="noite"></div>
            </form>
        </div>

    </section>

    <script>
        const onChange=()=>{
            const Svalue_hk= document.querySelector("#hoc_ki").value;
            const Svalue_year =document.querySelector('#year').value;
            const tableBody = document.querySelector('#lop_hoc_phan'); 
            const tableBody_2 = document.querySelector('#danh_sach_sv'); 
            const tableBody_3 = document.querySelector('#danh_sach_kq'); 
            tableBody.innerHTML = "";
            tableBody_2.innerHTML="";
            tableBody_3.innerHTML="";
            const xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    const string=xhr.responseText;
                    const name_id=string.split('.');

                    for(let x of name_id.slice(0, -1)){
                        let s =x.split('-');
                        const name =s[0];
                        const id =s[1];
                      
                        const row = document.createElement('tr');
                        const nameCell = document.createElement('td');
                        const idCell = document.createElement('td');
                        const dsCell = document.createElement('td');
                        const div = document.createElement('div');
                        nameCell.textContent = name;
                        idCell.textContent = id;

                        div.textContent="Xem chi tiết";
                        div.onclick=()=>{
                            container_sub.style.display='block';
                            container.style.opacity=0.1;
                            full.style.opacity=0.1;
                            const xhr2 = new XMLHttpRequest();
                            xhr2.onreadystatechange = function() {
                                if (this.readyState == 4 && this.status == 200) {
                                    const name_id_2=xhr2.responseText.split(',');
                                    for(let x_2 of name_id_2.slice(0, -1)){
                                        let s_2 =x_2.split('-');
                                        const name_2 =s_2[0];
                                        const id_2=s_2[1];
                                    
                                        const row_2 = document.createElement('tr');
                                        const nameCell_2 = document.createElement('td');
                                        const idCell_2 = document.createElement('td');
                                        const kq = document.createElement('td');
                                        const div_2 = document.createElement('div');
                                        const them_diem = document.createElement('td');
                                        const div_3 = document.createElement('div');
                                        
                                        nameCell_2.textContent = name_2;
                                        idCell_2.textContent = id_2;
                                        //Div_2 xem diem
                                        //Div_3 them diem
                                        div_2.textContent="Xem chi tiết";
                                        div_2.onclick=()=>{
                                            container_sub_kq.style.display='block';
                                            container_sub.style.opacity=0.1;
                                            const xhr3 = new XMLHttpRequest();
                                            xhr3.onreadystatechange = function() {
                                                if (this.readyState == 4 && this.status == 200) {
                                                    const diems=xhr3.responseText.split(',');
                                                    for(let diem of diems.slice(0, -1)){
                                                        let d=diem.split('-');
                                                        const gk=d[0];
                                                        const ck=d[1];
                                                        const tk=d[2];

                                                        const row_3 = document.createElement('tr');
                                                        const gkCell = document.createElement('td');
                                                        const ckCell = document.createElement('td');
                                                        const tkCell = document.createElement('td');

                                                        gkCell.textContent=gk;
                                                        ckCell.textContent=ck;
                                                        tkCell.textContent=tk;
                                                        row_3.appendChild(gkCell);
                                                        row_3.appendChild(ckCell);
                                                        row_3.appendChild(tkCell);
                                                       
                                                        tableBody_3.innerHTML="";
                                                        tableBody_3.appendChild(row_3);
                                                    }
                                                }
                                            }
                                            xhr3.open("POST","hoc_phan_GV_4.php", true);
                                            xhr3.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                                            xhr3.send("mssv="+ id_2 +"&mhp="+id );
                                        };  
                                        


                                        div_3.textContent="Thêm điểm";
                                        div_3.onclick=()=>{
                                            container_sub_them.style.display='block';
                                            container_sub.style.opacity=0.1;
                                            document.querySelector('.container-sub_them_diem #gk').value="";
                                            document.querySelector('.container-sub_them_diem #ck').value="";
                                            
                                            const bt=document.querySelector('.container-sub_them_diem #them_diem #bt');
                                            bt.onclick=(event)=>{

                                                event.preventDefault(); 
                                                const gk = document.querySelector('.container-sub_them_diem #gk').value;
                                                const ck = document.querySelector('.container-sub_them_diem #ck').value;
                                                const hsgk = document.querySelector('.container-sub_them_diem #he_so_gk').value;
                                                const hsck = document.querySelector('.container-sub_them_diem #he_so_ck').value;
                                                const note =document.querySelector('.container-sub_them_diem .noite');
                                                
                                                if(isNaN(gk)||isNaN(ck)||gk.trim()==''||ck.trim()==''){
                                                    note.textContent="Vui lòng nhập đúng dữ liệu";
                                                    bool=false;
                                                }
                                                else if( Number(hsgk) + Number(hsck) >10){
                                                    note.textContent="Hệ số tính điểm đã vượt quá 100%";
                                                    console.log(hsgk, hsck);
                                                    
                                                }
                                                else if( Number(hsgk) + Number(hsck) <10){
                                                    note.textContent="Hệ số tính điểm chưa đủ 100%";
                                                    console.log(hsgk, hsck);
                                                    
                                                }
                                                
                                                else {
                                                    const xhr4 = new XMLHttpRequest();
                                                    xhr4.onreadystatechange = function() {
                                                        if (this.readyState == 4 && this.status == 200) {
                                                            
                                                            console.log(xhr4.responseText);
                                                        }
                                                    }
                                                    xhr4.open("POST","hoc_phan_GV_5.php", true);
                                                    xhr4.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                                                    xhr4.send("mssv="+ id_2 +"&mhp="+id+"&gk="+gk+"&ck="+ck+"&hsgk="+hsgk+"&hsck="+hsck );
                                                    note.textContent="Đã thêm hoặc sửa điểm thành công";
                                                }
                                            }
                                            
                                        };  


                                        // thêm các ô vào hàng
                                        kq.appendChild(div_2);
                                        them_diem.appendChild(div_3);
                                        row_2.appendChild(nameCell_2);
                                        row_2.appendChild(idCell_2);
                                        row_2.appendChild(kq);
                                        row_2.appendChild(them_diem);
                                        // thêm hàng vào bảng
                                        tableBody_2.innerHTML="";
                                        tableBody_2.appendChild(row_2);

                                    }
                                }
                            };
                            xhr2.open("POST","hoc_phan_GV_3.php", true);
                            xhr2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                            xhr2.send("year=" + Svalue_year + "&hoc_ki=" + Svalue_hk+ "&ma_hp=" + id );
                        };
                        // thêm các ô vào hàng
                        dsCell.appendChild(div);
                        row.appendChild(nameCell);
                        row.appendChild(idCell);
                        row.appendChild(dsCell);
                        // thêm hàng vào bảng
                        tableBody.appendChild(row);

                        
                    }
                    
                }
            };
            xhr.open("POST","hoc_phan_GV_2.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.send("year=" + Svalue_year + "&hoc_ki=" + Svalue_hk );
        }
        onChange();

       
        
    </script>


    <script src="Responsive-DarkMode.js"></script>
    <script src="Hide-Menu.js"></script>
    <script src="hoc_phan_2.js"></script>
</body>
</html>
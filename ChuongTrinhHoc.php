<?php
$mssv = "47.01.104.043";
$conn = new mysqli("localhost", "root", "", "qlsinhvien");
$sql = "SELECT TenMH,SoTinChi FROM nganhhoc,monhoc,sinhvien WHERE nganhhoc.MaNganh = monhoc.MaNganh AND sinhvien.MaNganh = nganhhoc.MaNganh AND sinhvien.MSSV = '{$mssv}'";
$kq = $conn->query($sql);

$truyvan = "SELECT TenNganh,TenKhoa FROM sinhvien,nganhhoc,monhoc,khoa WHERE sinhvien.MaNganh = nganhhoc.MaNganh AND nganhhoc.MaNganh = monhoc.MaNganh AND monhoc.MaKhoa = khoa.MaKhoa AND monhoc.LoaiMH = 'chuyen' AND sinhvien.MSSV = '{$mssv}'";
$nganhkhoa = $conn->query($truyvan);
if($nganhkhoa->num_rows > 0){
    $dong = $nganhkhoa->fetch_assoc();
}
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
    <link rel="stylesheet" href="style-inf.css">
    <link rel="stylesheet" href="style-ChuongTrinhHoc.css">
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
                            <i class='bx bx-user-circle icon'></i>
                            <span class="text nav-text">Thông tin cá nhân</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="ThoiKhoaBieu.html">
                            <i class='bx bx-time-five icon'></i>
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
                            <i class='bx bx-pie-chart-alt icon'></i>
                            <span class="text nav-text">Kết quả</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="CongNo.html">
                            <i class='bx bx-wallet icon'></i>
                            <span class="text nav-text">Công nợ</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="./ThongBao.html">
                            <i class='bx bx-receipt icon'></i>
                            <span class="text nav-text">Thông báo</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="ChuongTrinhHoc.html">
                            <i class='bx bx-list-ul icon'></i>
                            <span class="text nav-text">Chương trình học</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="./Login.html">
                        <i class='bx bx-log-out icon'></i>
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
                    <i class='bx bxs-bell bell'></i>
                </div>

            </div>
        </header>
        <div class='container'>
            <div class="header">
                <div class="khoa">
                    <h1>Khoa</h1>
                    <h1><?php
                        echo $dong["TenKhoa"];
                    ?></h1>
                </div>
                <div class="chuyennganh">
                    <h1>Chuyên ngành</h1>
                    <h1><?php
                        echo $dong["TenNganh"];
                    ?></h1>
                </div>
            </div>
            <div class="table">
                <table>
                    <thead>
                        <th>STT</th>
                        <th>Tên môn học</th>
                        <th>Tín chỉ</th>
                        <th>Kết quả</th>
                    </thead>
                    <tbody>
                        <?php foreach ($kq as $key => $value) { ?>
                            <tr>
                                <td style="text-align: center;"> <?php echo $key + 1 ?></td>
                                <td> <?php echo $value["TenMH"] ?></td>
                                <td style="text-align: center;"><?php echo $value["SoTinChi"] ?></td>
                                <td style="text-align: center;">
                                    <?php $sql2 = "SELECT DiemTK FROM diem,lophocphan,monhoc WHERE MSSV = '{$mssv}' AND diem.MaHP = lophocphan.MaHP AND monhoc.MaMH = lophocphan.MaMH AND monhoc.TenMH = '{$value["TenMH"]}'";
                                    $kq2 = $conn->query($sql2);
                                    if($kq2->num_rows > 0){
                                        while($row = $kq2->fetch_assoc()){
                                            if($row["DiemTK"] >=4) echo "Đ";
                                            else echo "R";
                                        }
                                    }
                                    else{
                                        echo "Chưa có";
                                    }
                                    ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <?php $conn->close() ?>
    <script src="Responsive-DarkMode.js"></script>
    <script src="Hide-Menu.js"></script>
</body>

</html>
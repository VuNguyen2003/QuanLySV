<?php
$mssv = "47.01.104.043";
$conn = new mysqli("localhost", "root", "", "qlsinhvien");
$query = "SELECT diem.MaHP,TenMH,SoTinChi,LoaiMH,DiemGK,DiemCK,DiemTK,HocKi FROM diem,lophocphan,monhoc WHERE MSSV = '{$mssv}' AND diem.MaHP = lophocphan.MaHP AND monhoc.MaMH = lophocphan.MaMH";
$kq = $conn->query($query);
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
    <link rel="stylesheet" href="style-learning-outcomes.css">

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
                        <a href="#">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Lịch thi</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="learning-outcomes.html">
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
                        <a href="ThongBao.html">
                            <i class='bx bx-receipt icon'></i>
                            <span class="text nav-text">Thông báo</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="./ChuongTrinhHoc.html">
                            <i class='bx bx-list-ul icon'></i>
                            <span class="text nav-text">Chương trình học</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#">
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

        <div class="container">
            <div class="wrapper">
                <div class="right">
                    <h3 class="txt">Học Kỳ 1</h3>
                    <table>
                        <tr>
                            <th>STT</th>
                            <th>Mã học phần</th>
                            <th>Tên môn học</th>
                            <th>Tín chỉ</th>
                            <th>Loại môn học</th>
                            <th>Điểm</th>
                            <!-- <th>Điểm chữ</th> -->
                            <th>Kết quả</th>
                            <th>Chi tiết</th>
                        </tr>

                        <?php foreach ($kq as $key => $value) {
                            if ($value["HocKi"] == 1) { ?>
                                <tr class="color">
                                    <td><?php echo $key + 1 ?></td>
                                    <td><?php echo $value['MaHP'] ?></td>
                                    <td><?php echo $value['TenMH'] ?></td>
                                    <td><?php echo $value['SoTinChi'] ?></td>
                                    <td><?php echo $value['LoaiMH'] ?></td>
                                    <td><?php echo $value['DiemTK'] ?></td>
                                    <td><?php echo $value['DiemTK'] >= 4 ? "Đ" : "R" ?></td>
                                    <td class="color2"  TenMH = "<?php echo $value['TenMH'] ?>" DiemGK = "<?php echo $value['DiemGK'] ?>" DiemCK = "<?php echo $value['DiemCK'] ?>">Xem chi tiết</td>
                                </tr>
                        <?php }
                        } ?>


                    </table>
                </div>

                <div class="right">
                    <h3 class="txt">Học Kỳ 2</h3>
                    <table>
                        <tr>
                            <th>STT</th>
                            <th>Mã học phần</th>
                            <th>Tên môn học</th>
                            <th>Tín chỉ</th>
                            <th>Loại môn học</th>
                            <th>Điểm</th>
                            <!-- <th>Điểm chữ</th> -->
                            <th>Kết quả</th>
                            <th>Chi tiết</th>
                        </tr>
                        <?php foreach ($kq as $key => $value) {
                            if ($value["HocKi"] == 2) { ?>
                                <tr class="color">
                                    <td><?php echo $key + 1 ?></td>
                                    <td><?php echo $value['MaHP'] ?></td>
                                    <td><?php echo $value['TenMH'] ?></td>
                                    <td><?php echo $value['SoTinChi'] ?></td>
                                    <td><?php echo $value['LoaiMH'] ?></td>
                                    <td><?php echo $value['DiemTK'] ?></td>
                                    <td><?php echo $value['DiemTK'] >= 4 ? "Đ" : "R" ?></td>
                                    <td class="color2"  TenMH = "<?php echo $value['TenMH'] ?>" DiemGK = "<?php echo $value['DiemGK'] ?>" DiemCK = "<?php echo $value['DiemCK'] ?>">Xem chi tiết</td>
                                </tr>
                        <?php }
                        } ?>
                    </table>
                </div>
            </div>


        </div>

    </section>
    <div class="background-sub-container">
        <div class="sub-container">
            <div class="close-sub-container">
                <i class='bx bx-x'></i>
            </div>
            <div class="noi-dung-sub-container">
                <div class="tieu-de"></div>
                <p></p>
                <p></p>
            </div>
        </div>
    </div>
    <?php $conn->close() ?>
    <script src="Responsive-DarkMode.js"></script>
    <script src="Hide-Menu.js"></script>
    <script>
        var backgroundSubContainer = document.querySelector('.background-sub-container')
        var xemChiTiet = document.querySelectorAll('.color2')
        var tieuDe= document.querySelector('.tieu-de')
        var diem = document.querySelectorAll('.noi-dung-sub-container p')
        var close = document.querySelector('.close-sub-container')
        close.onclick = function() {
            backgroundSubContainer.classList.remove('open-sub-container')
        }
        xemChiTiet.forEach(function(value) {
            value.onclick = function() {
                backgroundSubContainer.classList.add('open-sub-container')
                console.log(value.getAttribute("TenMH"))
                console.log(value.getAttribute("DiemGK"))
                console.log(value.getAttribute("DiemCK"))
                tieuDe.innerText ="Môn: "+ value.getAttribute("TenMH");
                diem[0].innerText = "Điểm giữa kì: " + value.getAttribute("DiemGK");
                diem[1].innerText = "Điểm cuối kì: " + value.getAttribute("DiemCK");

            }
        })
    </script>
</body>

</html>
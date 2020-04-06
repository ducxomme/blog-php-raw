<?php

function addTopNav()
 {
    echo '
	<div class="top-nav group">
        <section>
            <div class="social-top-nav">
                <a class="fa fa-facebook"></a>
                <a class="fa fa-twitter"></a>
                <a class="fa fa-google"></a>
                <a class="fa fa-youtube"></a>
            </div> <!-- End Social Topnav -->

            <ul class="top-nav-quicklink flexContain">
                <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                <li><a href=""><i class="fa fa-newspaper-o"></i> News</a></li>
                <li><a href=""><i class="fa fa-handshake-o"></i> Recruit</a></li>
                <li><a href=""><i class="fa fa-info-circle"></i> Introdution</a></li>
                <li><a href=""><i class="fa fa-wrench"></i> Quarantee</a></li>
                <li><a href=""><i class="fa fa-phone"></i> Contact</a></li>
            </ul> <!-- End Quick link -->
        </section><!-- End Section -->
    </div> 
    ';
 }

 function addHeader()
{
    echo '        
	<div class="header group">
        <div class="smallmenu" id="openmenu" onclick="smallmenu(1)">≡</div>
        <div style="display: none;" class="smallmenu" id="closemenu" onclick="smallmenu(0)">×</div>
        <div class="logo">
            <a href="index.php">
                <img src="assets/images/logo.jpg" alt="Trang chủ Smartphone Store" title="Trang chủ Smartphone Store">
            </a>
        </div> <!-- End Logo -->

        <div class="content">
            <div class="search-header">
                <form class="input-search" method="get" action="index.php">
                    <div class="autocomplete">
                        <input id="search-box" name="search" autocomplete="off" type="text" placeholder="Input your search...">
                        <button type="submit">
                            <i class="fa fa-search"></i>
                            Search
                        </button>
                    </div>
                </form> <!-- End Form search -->
                <div class="tags">
                    <strong>Keywords: </strong>
                </div>
            </div> <!-- End Search header -->

            <div class="tools-member">
                <div class="member">
                    <a onclick="checkTaiKhoan()" id="btnTaiKhoan">
                        <i class="fa fa-user"></i>
                        Account
                    </a>
                    <div class="menuMember hide">
                        <a href="nguoidung.php">Trang người dùng</a>
                        <a onclick="checkDangXuat();">Signout</a>
                    </div>
                </div> <!-- End Member -->

                <div class="cart">
                    <a href="giohang.php">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Cart</span>
                        <span class="cart-number"></span>
                    </a>
                </div> <!-- End Cart -->

                <!-- <div class="check-order">
                    <a>
                        <i class="fa fa-truck"></i>
                        <span>Orders</span>
                    </a>
                </div>  -->
            </div><!-- End Tools Member -->
        </div> <!-- End Content -->
    </div> <!-- End Header -->';
}

function addHome()
{
    echo '
    <div class="banner">
        <div class="owl-carousel owl-theme"></div>
    </div> <!-- End Banner -->
    
    <div class="smallbanner" style="width: 100%;"></div>

    <div class="companysFilter">
        <button class="companysButton" onclick="setCompanysMenu()">
            <p>Hãng</p>
            <div id="iconOpenMenu">▷</div>
            <div id="iconCloseMenu" style="display: none;">▽</div>
        </button>
    </div>
    <div class="companyMenu group flexContain"></div>

    <div class="timNangCao">
        <div class="flexContain">
            <div class="pricesRangeFilter dropdown">
                <button class="dropbtn">Giá tiền</button>
                <div class="dropdown-content"></div>
            </div>

            <div class="promosFilter dropdown">
                <button class="dropbtn">Khuyến mãi</button>
                <div class="dropdown-content"></div>
            </div>

            <div class="starFilter dropdown">
                <button class="dropbtn">Số lượng sao</button>
                <div class="dropdown-content"></div>
            </div>

            <div class="sortFilter dropdown">
                <button class="dropbtn">Sắp xếp</button>
                <div class="dropdown-content"></div>
            </div>            
        </div>
        
        <div>
            <input type="text" class="js-range-slider" id="demoSlider">
        </div>

    </div> <!-- End khung chọn bộ lọc -->

    <div class="choosedFilter flexContain"></div> <!-- Những bộ lọc đã chọn -->
    <hr>

    <!-- Mặc định mới vào trang sẽ ẩn đi, nế có filter thì mới hiện lên -->
    <div class="contain-products" style="display:none">
    <div class="filterName">
        <div id="divSoLuongSanPham"></div>
        <input type="text" placeholder="Lọc trong trang theo tên..." onkeyup="filterProductsName(this)">
        <div class="loader" style="display: none"></div>
    </div> <!-- End FilterName -->

    <ul id="products" class="homeproduct group flexContain">
        <div id="khongCoSanPham">
            <i class="fa fa-times-circle"></i>
            Không có sản phẩm nào
        </div> <!-- End Khong co san pham -->
    </ul><!-- End products -->

    <div class="pagination"></div>
    </div>

    <!-- Div hiển thị khung sp hot, khuyến mãi, mới ra mắt ... -->
    <div class="contain-khungSanPham"></div>';
}

function addFooter()
{
    echo '
    <!-- ============== Alert Box ============= -->
    <div id="alert">
        <span id="closebtn">&otimes;</span>
    </div>

    <!-- ============== Footer ============= -->
    <div class="copy-right">
        <p>
            All rights reserved © ' . date("Y") . ' - Designed by
            <span style="color: #eee; font-weight: bold">Duc Nguyen</span>
        </p>
    </div>';
}
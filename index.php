<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once './assets/php/common.php'?>
    </head>
    <body>
        /* minh test commit */
        <header class="only-pc">
            <div class="responsive">
                <div class="menu">
                    <div class="menu-branch">
                        <div class="menu-branch__logo">
                            <img src="./assets/img/logo-coral.svg" alt="HOME">
                        </div>
                        <div class="menu-branch__search">
                            <input class="menu-branch__search-input" type="text" placeholder="Tìm kiếm khóa học.....">
                            <div class="menu-branch__search-select ">
                                <span class="js-searchSelect menu-branch__search-select-txt">Trong shop </span><i class="menu-branch__search-select-icon fas fa-angle-down "></i>
                                <div class="menu-branch__search-select-option">
                                    <p class="js-searchOption">IT</p>
                                    <p class="js-searchOption">Business</p>
                                    <p class="js-searchOption">Design</p>
                                </div>
                            </div>
                            <button class="menu-branch__search-btn" type="submit"><i class="menu-branch__search-btnIcon fas fa-search"></i></button>
                        </div>
                    </div>
                    <div class="menu-list">
                        <ul class="menu-list-item">
                            <li class="menu-list-item__link"><a href="#"> Trang chủ</a></li>
                            <li class="menu-list-item__link"> <a href="#">Khóa học</a></li>
                            <li class="menu-list-item__link menu-list-item__link--hasNotify ">
                                <a href="#"><i class="menu-list-item__icon far fa-bell"></i>Thông báo</a>
                                <!-- notification -->
                                <div class="menu-list-item__notify">
                                    <div class="notify-title">
                                        <h3>Thông báo của bạn</h3>
                                    </div>
                                    <ul class="notify-list">
                                        <li class="notify-list-item">
                                            <a href="#" class="notify-list-item__link">
                                                <img src="./assets/img/notifi_1.jpg" alt="" class="notify-list-item__img">
                                                <div class="notify-info">
                                                    <span class="notify-info__txt">Bạn mua khóa học abc thành công</span>
                                                    <span class="notify-info__seeDetail">Đừng bỏ lỡ đợt sale khủng lên tới 1tr đ</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="notify-list">
                                        <li class="notify-list-item">
                                            <a href="#" class="notify-list-item__link">
                                                <img src="./assets/img/notifi_1.jpg" alt="" class="notify-list-item__img">
                                                <div class="notify-info">
                                                    <p class="notify-info__txt">Khóa học Reactjs cơ bản đến nâng cao</p>
                                                    <p class="notify-info__seeDetail">Hot! Đừng bỏ lỡ đợt sale khủng lên tới 1tr đ</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="notify-list">
                                        <li class="notify-list-item">
                                            <a href="#" class="notify-list-item__link">
                                                <img src="./assets/img/notify_2.jpg" alt="" class="notify-list-item__img">
                                                <div class="notify-info">
                                                    <p class="notify-info__txt">Làm chủ python trong vonng 3 thang</p>
                                                    <p class="notify-info__seeDetail">Xem chi tiết</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="notify-list">
                                        <li class="notify-list-item">
                                            <a href="#" class="notify-list-item__link">
                                                <img src="./assets/img/notifi_1.jpg" alt="" class="notify-list-item__img">
                                                <div class="notify-info">
                                                    <p class="notify-info__txt">Bạn mua khóa học abc thành công</p>
                                                    <p class="notify-info__seeDetail">Xem chi tiết</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="notify-footer">Xem tất cả</div>
                                </div>
                            </li>
                            <li class="menu-list-item__link menu-list-item__link--hashv">
                                <a href="#"><i class="menu-list-item__icon fas fa-download"></i>Ứng dụng</a>
                                <!-- qr code  -->
                                <div class="menu-list-item__qr">
                                    <img class="menu-list-item__qr-img" src="./assets/img/qr-header.png" alt="">
                                    <div class="menu-list-item__qr-app">
                                        <a href="#"><img class="menu-list-item__qr-app-gg" src="./assets/img/gg-play.png" alt=""></a>
                                        <a href="#"><img class="menu-list-item__qr-app-appstore" src="./assets/img/app-store.png" alt=""></a>
                                    </div>
                                </div>
                            </li>
                            <!-- <li class="menu-list-item__link"><a href="#"><i class="fas fa-phone"></i>Liên hệ</a></li> -->
                            <li class="menu-list-item__link"><a href="">Đăng nhập</a></li>
                            <!-- <li class="menu-list-item__link--square"></li> -->
                            <li class="menu-list-item__link"><a href="">Đăng kí</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- *****************SP********************* -->
        <header class="only-sp">
            <div class="js-nav nav">
                <div class="realative">
                    <div class="nav-content">
                        <div class="nav-left">
                            <div class="js-clicktoggler nav-btntoggler ">
                                <i class="fas fa-bars"></i>
                            </div>
                            <div class="nav-search">
                                <div class="nav-search__icon"><i class="fas fa-search"></i></div>
                            </div>
                        </div>
                        <div class="nav-logo">
                            <img src="./assets/img/logo-coral.svg" alt="">
                        </div>
                        <div class="nav-cart">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                    </div>
                    <label class="js-clickClosemenu nav-menu__overlay"></label>
                    <div class="nav-menu ">
                        <div class="nav-menu__main">
                            <nav class="mobile-nav">
                                <div class="mobile-nav__main">
                                    <ul class="mobile-nav__main-auth mobile-nav__main-bd">
                                        <li>
                                            <a class="mobile-nav-list-item mobile-nav-item--pub mobile-nav_btnLogin">Đăng nhập</a>
                                        </li>
                                        <li><a class="mobile-nav-list-item mobile-nav-item--pub mobile-nav_btnSignup">Đăng kí</a></li>
                                    </ul>
                                    <div class="mobile-nav__main--tittle"><span >Danh mục</span></div>
                                    <ul class="mobile-nav__main-auth mobile-nav__main-bd">
                                        <li><label class=" mobile-nav-item--pub"><a class="mobile-nav-list-item mobile-nav-list-item-content " href="#">Web Development</a><i class="fas fa-chevron-right"></i> </label></li>
                                        <li><label class=" mobile-nav-item--pub"><a class="mobile-nav-list-item mobile-nav-list-item-content " href="#">Mobile App</a><i class="fas fa-chevron-right"></i></label></li>
                                        <li><label class=" mobile-nav-item--pub"><a class="mobile-nav-list-item mobile-nav-list-item-content " href="#">Game Development</a><i class="fas fa-chevron-right"></i></label></li>
                                        <li><label class=" mobile-nav-item--pub"><a class="mobile-nav-list-item mobile-nav-list-item-content " href="#">Data & Analytics</a><i class="fas fa-chevron-right"></i></label></li>
                                        <li><label class=" mobile-nav-item--pub"><a class="mobile-nav-list-item mobile-nav-list-item-content " href="#">Digital Marketing</a><i class="fas fa-chevron-right"></i></label></li>
                                        <li><label class=" mobile-nav-item--pub"><a class="mobile-nav-list-item mobile-nav-list-item-content " href="#">Graphic Design </a><i class="fas fa-chevron-right"></i></label></li>
                                        <li><label class=" mobile-nav-item--pub"><a class="mobile-nav-list-item mobile-nav-list-item-content " href="#">All categoties</a><i class="fas fa-chevron-right"></i></label></li>
                                    </ul>
                                    <div class="mobile-nav__main--tittle"><span >Các mục khác</span></div>
                                    <ul class="mobile-nav__main-auth">
                                        <li><label class=" mobile-nav-item--pub"><a class="mobile-nav-list-item mobile-nav-list-item-content " href="#">Kinh doanh trên website</a></label></li>
                                        <li><label class=" mobile-nav-item--pub"><a class="mobile-nav-list-item mobile-nav-list-item-content " href="#">Tải ứng dụng</a> </label></li>
                                        <li><label class=" mobile-nav-item--pub"><a class="mobile-nav-list-item mobile-nav-list-item-content " href="#">Mời bạn bè</a></label></li>
                                        <li><label class=" mobile-nav-item--pub"><a class="mobile-nav-list-item mobile-nav-list-item-content " href="#">Trợ giúp</a></label></li>
                                    </ul>
                                </div>
                            </nav>
                            <div class="js-clickClosemenu mobile-nav-close-wraper">
                                <label ><i class="fas fa-times"></i></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- *****************Carousel********************* -->
        <div class="responsive">
            <div class="banner">
                <div class="carousel-slider">
                    <div class="carousel-cell">
                        <img src="./assets/img/slider.jpg" alt="">
                    </div>
                    <div class="carousel-cell">
                        <img src="./assets/img/slider1.jpg" alt="">
                    </div>
                    <div class="carousel-cell">
                        <img src="./assets/img/slider2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- *****************Main content********************* -->
        <div class="responsive ">
            <div class="headline ">
                <div class="headline__tittle-text">
                    Lựa chọn những khóa học hay nhất thế giới
                </div>
                <div class="headline__content-text">
                    Chọn từ 100.000 khóa học video trực tuyến, bổ sung và cập nhật hàng tháng
                </div>
            </div>
            <div class="categories">
                <div class="categories__tabs">
                    <div class="tabs__sidebar">
                        <ul class="tabs__sidebar-btn">
                            <li class="js--tabClick tab-link tab-link--active current" data-tab="tab-1">Design</li>
                            <li class="js--tabClick tab-link" data-tab="tab-2">Photography</li>
                            <li class="js--tabClick tab-link" data-tab="tab-3">Development</li>
                            <li class="js--tabClick tab-link" data-tab="tab-4">IT & Software</li>
                            <li class="js--tabClick tab-link" data-tab="tab-4">Marketing</li>
                        </ul>
                    </div>
                    <div class="tabs__content">
                        <!-- tab content Design -->
                        <div id="tab-1" class="js--tabContent tabs__content--item current">
                            <div class="course-design">
                                <div class="carousel-course">
                                    <div class="carousel-cell">
                                        <div class="course-card">
                                            <div class="course-card--image">
                                                <img class="carousel-cell-image" src="./assets/img/course/Design/De_course1.jpg"  alt="">
                                            </div>
                                            <div class="course-card--content">
                                                <div class="course-card--content-tittle">Adobe Photoshop CC: Your Complete Beginner to Advanced Class</div>
                                                <div class="course-card--content-description">Phil Ebiner, Video School Online Inc</div>
                                                <div class="stars" data-stars="1">
                                                    <svg height="20" width="18" class="star rating" data-rating="1">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="2">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="3">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="4">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="5">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <span  class="rating">4.5</span>
                                                    <span class="cout_course">(6,333)</span>
                                                </div>
                                                <div class="price_course">
                                                    <span class="price_course_now">10.99 $</span>
                                                    <span class="price_course_old">10.99 $</span>
                                                </div>
                                            </div>
                                            <div class="mask">
                                                <a href="#"></a>
                                            </div>
                                            <div class="addcart">
                                                <a class="addtocartBtn" class="addtocartBtn" href="">Add to cart</a>
                                                <a href=""><i class="fas fa-heart cus_heartIco cus_heartIco"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-cell">
                                        <div class="course-card">
                                            <div class="course-card--image">
                                                <img src="./assets/img/course/Design/De_course2.jpg" class="carousel-cell-image"  alt="">
                                            </div>
                                            <div class="course-card--content">
                                                <div class="course-card--content-tittle">Adobe Photoshop CC: Your Complete Beginner to Advanced Class</div>
                                                <div class="course-card--content-description">Phil Ebiner, Video School Online Inc</div>
                                                <div class="stars" data-stars="1">
                                                    <svg height="20" width="18" class="star rating" data-rating="1">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="2">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="3">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="4">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="5">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <span class="rating">4.5</span>
                                                    <span class="cout_course">(6,333)</span>
                                                </div>
                                                <div class="price_course">
                                                    <span class="price_course_now">10.99 $</span>
                                                    <span class="price_course_old">10.99 $</span>
                                                </div>
                                            </div>
                                            <div class="mask">
                                                <a href="#"></a>
                                            </div>
                                            <div class="addcart">
                                                <a class="addtocartBtn" class="addtocartBtn" href="">Add to cart</a>
                                                <a href=""><i class="fas fa-heart cus_heartIco cus_heartIco"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-cell">
                                        <div class="course-card">
                                            <div class="course-card--image">
                                                <img src="./assets/img/course/Design/De_course2.jpg" class="carousel-cell-image"  alt="">
                                            </div>
                                            <div class="course-card--content">
                                                <div class="course-card--content-tittle">Adobe Photoshop CC: Your Complete Beginner to Advanced Class</div>
                                                <div class="course-card--content-description">Phil Ebiner, Video School Online Inc</div>
                                                <div class="stars" data-stars="1">
                                                    <svg height="20" width="18" class="star rating" data-rating="1">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="2">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="3">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="4">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="5">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <span class="rating">4.5</span>
                                                    <span class="cout_course">(6,333)</span>
                                                </div>
                                                <div class="price_course">
                                                    <span class="price_course_now">10.99 $</span>
                                                    <span class="price_course_old">10.99 $</span>
                                                </div>
                                            </div>
                                            <div class="mask">
                                                <a href="#"></a>
                                            </div>
                                            <div class="addcart">
                                                <a class="addtocartBtn" class="addtocartBtn" href="">Add to cart</a>
                                                <a href=""><i class="fas fa-heart cus_heartIco cus_heartIco"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-cell">
                                        <div class="course-card">
                                            <div class="course-card--image">
                                                <img class="carousel-cell-image" src="./assets/img/course/Design/De_course4.jpg" alt="">
                                            </div>
                                            <div class="course-card--content">
                                                <div class="course-card--content-tittle">Adobe Photoshop CC: Your Complete Beginner to Advanced Class</div>
                                                <div class="course-card--content-description">Phil Ebiner, Video School Online Inc</div>
                                                <div class="stars" data-stars="1">
                                                    <svg height="20" width="18" class="star rating" data-rating="1">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="2">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="3">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="4">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="5">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <span class="rating">4.5</span>
                                                    <span class="cout_course">(6,333)</span>
                                                </div>
                                                <div class="price_course">
                                                    <span class="price_course_now">10.99 $</span>
                                                    <span class="price_course_old">10.99 $</span>
                                                </div>
                                            </div>
                                            <div class="mask">
                                                <a href="#"></a>
                                            </div>
                                            <div class="addcart">
                                                <a class="addtocartBtn" class="addtocartBtn" href="">Add to cart</a>
                                                <a href=""><i class="fas fa-heart cus_heartIco cus_heartIco"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-cell">
                                        <div class="course-card">
                                            <div class="course-card--image">
                                                <img src="./assets/img/course/Design/De_course5.jpg" class="carousel-cell-image"  alt="">
                                            </div>
                                            <div class="course-card--content">
                                                <div class="course-card--content-tittle">Adobe Photoshop CC: Your Complete Beginner to Advanced Class</div>
                                                <div class="course-card--content-description">Phil Ebiner, Video School Online Inc</div>
                                                <div class="stars" data-stars="1">
                                                    <svg height="20" width="18" class="star rating" data-rating="1">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="2">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="3">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="4">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="5">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <span class="rating">4.5</span>
                                                    <span class="cout_course">(6,333)</span>
                                                </div>
                                                <div class="price_course">
                                                    <span class="price_course_now">10.99 $</span>
                                                    <span class="price_course_old">10.99 $</span>
                                                </div>
                                            </div>
                                            <div class="mask">
                                                <a href="#"></a>
                                            </div>
                                            <div class="addcart">
                                                <a class="addtocartBtn" class="addtocartBtn" href="">Add to cart</a>
                                                <a href=""><i class="fas fa-heart cus_heartIco cus_heartIco"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-cell">
                                        <div class="course-card">
                                            <div class="course-card--image">
                                                <img src="./assets/img/course/Design/De_course6.jpg" class="carousel-cell-image"  alt="">
                                            </div>
                                            <div class="course-card--content">
                                                <div class="course-card--content-tittle">Adobe Photoshop CC: Your Complete Beginner to Advanced Class</div>
                                                <div class="course-card--content-description">Phil Ebiner, Video School Online Inc</div>
                                                <div class="stars" data-stars="1">
                                                    <svg height="20" width="18" class="star rating" data-rating="1">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="2">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="3">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="4">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="5">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <span class="rating">4.5</span>
                                                    <span class="cout_course">(6,333)</span>
                                                </div>
                                                <div class="price_course">
                                                    <span class="price_course_now">10.99 $</span>
                                                    <span class="price_course_old">10.99 $</span>
                                                </div>
                                            </div>
                                            <div class="mask">
                                                <a href="#"></a>
                                            </div>
                                            <div class="addcart">
                                                <a class="addtocartBtn" class="addtocartBtn" href="">Add to cart</a>
                                                <a href=""><i class="fas fa-heart cus_heartIco cus_heartIco"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-cell">
                                        <div class="course-card">
                                            <div class="course-card--image">
                                                <img class="carousel-cell-image" src="./assets/img/course/Design/De_course7.jpg"   alt="">
                                            </div>
                                            <div class="course-card--content">
                                                <div class="course-card--content-tittle">Adobe Photoshop CC: Your Complete Beginner to Advanced Class</div>
                                                <div class="course-card--content-description">Phil Ebiner, Video School Online Inc</div>
                                                <div class="stars" data-stars="1">
                                                    <svg height="20" width="18" class="star rating" data-rating="1">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="2">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="3">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="4">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="5">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <span class="rating">4.5</span>
                                                    <span class="cout_course">(6,333)</span>
                                                </div>
                                                <div class="price_course">
                                                    <span class="price_course_now">10.99 $</span>
                                                    <span class="price_course_old">10.99 $</span>
                                                </div>
                                            </div>
                                            <div class="mask">
                                                <a href="#"></a>
                                            </div>
                                            <div class="addcart">
                                                <a class="addtocartBtn" class="addtocartBtn" href="">Add to cart</a>
                                                <a href=""><i class="fas fa-heart cus_heartIco cus_heartIco"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-cell">
                                        <div class="course-card">
                                            <div class="course-card--image">
                                                <img class="carousel-cell-image" src="./assets/img/course/Design/De_course3.jpg"  alt="">
                                            </div>
                                            <div class="course-card--content">
                                                <div class="course-card--content-tittle">Adobe Photoshop CC: Your Complete Beginner to Advanced Class</div>
                                                <div class="course-card--content-description">Phil Ebiner, Video School Online Inc</div>
                                                <div class="stars" data-stars="1">
                                                    <svg height="20" width="18" class="star rating" data-rating="1">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="2">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="3">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="4">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="5">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <span class="rating">4.5</span>
                                                    <span class="cout_course">(6,333)</span>
                                                </div>
                                                <div class="price_course">
                                                    <span class="price_course_now">10.99 $</span>
                                                    <span class="price_course_old">10.99 $</span>
                                                </div>
                                            </div>
                                            <div class="mask">
                                                <a href="#"></a>
                                            </div>
                                            <div class="addcart">
                                                <a class="addtocartBtn" class="addtocartBtn" href="">Add to cart</a>
                                                <a href=""><i class="fas fa-heart cus_heartIco cus_heartIco"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-cell">
                                        <div class="course-card">
                                            <div class="course-card--image">
                                                <img src="./assets/img/course/Design/De_course5.jpg" class="carousel-cell-image" alt="">
                                            </div>
                                            <div class="course-card--content">
                                                <div class="course-card--content-tittle">Adobe Photoshop CC: Your Complete Beginner to Advanced Class</div>
                                                <div class="course-card--content-description">Phil Ebiner, Video School Online Inc</div>
                                                <div class="stars" data-stars="1">
                                                    <svg height="20" width="18" class="star rating" data-rating="1">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="2">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="3">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="4">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="5">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <span class="rating">4.5</span>
                                                    <span class="cout_course">(6,333)</span>
                                                </div>
                                                <div class="price_course">
                                                    <span class="price_course_now">10.99 $</span>
                                                    <span class="price_course_old">10.99 $</span>
                                                </div>
                                            </div>
                                            <div class="mask">
                                                <a href="#"></a>
                                            </div>
                                            <div class="addcart">
                                                <a class="addtocartBtn" class="addtocartBtn" href="">Add to cart</a>
                                                <a href=""><i class="fas fa-heart cus_heartIco cus_heartIco"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tab content Photography -->
                        <div id="tab-2" class="js--tabContent tabs__content--item ">
                            <div class="course-photography">
                                <div class="carousel-course">
                                    <div class="carousel-cell">
                                        <div class="course-card">
                                            <div class="course-card--image">
                                                <img class="carousel-cell-image" src="./assets/img/course/Photography/pt_course1.jpg"  alt="">
                                            </div>
                                            <div class="course-card--content">
                                                <div class="course-card--content-tittle">Adobe Photoshop CC: Your Complete Beginner to Advanced Class</div>
                                                <div class="course-card--content-description">Phil Ebiner, Video School Online Inc</div>
                                                <div class="stars" data-stars="1">
                                                    <svg height="20" width="18" class="star rating" data-rating="1">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="2">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="3">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="4">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="5">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <span class="rating">4.5</span>
                                                    <span class="cout_course">(6,333)</span>
                                                </div>
                                                <div class="price_course">
                                                    <span class="price_course_now">10.99 $</span>
                                                    <span class="price_course_old">10.99 $</span>
                                                </div>
                                            </div>
                                            <div class="mask">
                                                <a href="#"></a>
                                            </div>
                                            <div class="addcart">
                                                <a class="addtocartBtn" class="addtocartBtn" href="">Add to cart</a>
                                                <a href=""><i class="fas fa-heart cus_heartIco cus_heartIco"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-cell">
                                        <div class="course-card">
                                            <div class="course-card--image">
                                                <img src="./assets/img/course/Photography/pt_course2.jpg" class="carousel-cell-image"  alt="">
                                            </div>
                                            <div class="course-card--content">
                                                <div class="course-card--content-tittle">Adobe Photoshop CC: Your Complete Beginner to Advanced Class</div>
                                                <div class="course-card--content-description">Phil Ebiner, Video School Online Inc</div>
                                                <div class="stars" data-stars="1">
                                                    <span class="rating">4.5</span>
                                                    <svg height="20" width="18" class="star rating" data-rating="1">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="2">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="3">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="4">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="5">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <span class="cout_course">(6,333)</span>
                                                </div>
                                                <div class="price_course">
                                                    <span class="price_course_now">10.99 $</span>
                                                    <span class="price_course_old">10.99 $</span>
                                                </div>
                                            </div>
                                            <div class="mask">
                                                <a href="#"></a>
                                            </div>
                                            <div class="addcart">
                                                <a class="addtocartBtn" class="addtocartBtn" href="">Add to cart</a>
                                                <a href=""><i class="fas fa-heart cus_heartIco cus_heartIco"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-cell">
                                        <div class="course-card">
                                            <div class="course-card--image">
                                                <img src="./assets/img/course/Photography/pt_course3.jpg" class="carousel-cell-image"  alt="">
                                            </div>
                                            <div class="course-card--content">
                                                <div class="course-card--content-tittle">Adobe Photoshop CC: Your Complete Beginner to Advanced Class</div>
                                                <div class="course-card--content-description">Phil Ebiner, Video School Online Inc</div>
                                                <div class="stars" data-stars="1">
                                                    <span class="rating">4.5</span>
                                                    <svg height="20" width="18" class="star rating" data-rating="1">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="2">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="3">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="4">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="5">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <span class="cout_course">(6,333)</span>
                                                </div>
                                                <div class="price_course">
                                                    <span class="price_course_now">10.99 $</span>
                                                    <span class="price_course_old">10.99 $</span>
                                                </div>
                                            </div>
                                            <div class="mask">
                                                <a href="#"></a>
                                            </div>
                                            <div class="addcart">
                                                <a class="addtocartBtn" class="addtocartBtn" href="">Add to cart</a>
                                                <a href=""><i class="fas fa-heart cus_heartIco cus_heartIco"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-cell">
                                        <div class="course-card">
                                            <div class="course-card--image">
                                                <img class="carousel-cell-image" src="./assets/img/course/Photography/pt_course4.jpg" alt="">
                                            </div>
                                            <div class="course-card--content">
                                                <div class="course-card--content-tittle">Adobe Photoshop CC: Your Complete Beginner to Advanced Class</div>
                                                <div class="course-card--content-description">Phil Ebiner, Video School Online Inc</div>
                                                <div class="stars" data-stars="1">
                                                    <span class="rating">4.5</span>
                                                    <svg height="20" width="18" class="star rating" data-rating="1">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="2">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="3">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="4">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="5">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <span class="cout_course">(6,333)</span>
                                                </div>
                                                <div class="price_course">
                                                    <span class="price_course_now">10.99 $</span>
                                                    <span class="price_course_old">10.99 $</span>
                                                </div>
                                            </div>
                                            <div class="mask">
                                                <a href="#"></a>
                                            </div>
                                            <div class="addcart">
                                                <a class="addtocartBtn" class="addtocartBtn" href="">Add to cart</a>
                                                <a href=""><i class="fas fa-heart cus_heartIco cus_heartIco"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-cell">
                                        <div class="course-card">
                                            <div class="course-card--image">
                                                <img src="./assets/img/course/Photography/pt_course5.jpg" class="carousel-cell-image"  alt="">
                                            </div>
                                            <div class="course-card--content">
                                                <div class="course-card--content-tittle">Adobe Photoshop CC: Your Complete Beginner to Advanced Class</div>
                                                <div class="course-card--content-description">Phil Ebiner, Video School Online Inc</div>
                                                <div class="stars" data-stars="1">
                                                    <span class="rating">4.5</span>
                                                    <svg height="20" width="18" class="star rating" data-rating="1">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="2">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="3">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="4">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="5">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <span class="cout_course">(6,333)</span>
                                                </div>
                                                <div class="price_course">
                                                    <span class="price_course_now">10.99 $</span>
                                                    <span class="price_course_old">10.99 $</span>
                                                </div>
                                            </div>
                                            <div class="mask">
                                                <a href="#"></a>
                                            </div>
                                            <div class="addcart">
                                                <a class="addtocartBtn" class="addtocartBtn" href="">Add to cart</a>
                                                <a href=""><i class="fas fa-heart cus_heartIco cus_heartIco"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-cell">
                                        <div class="course-card">
                                            <div class="course-card--image">
                                                <img src="./assets/img/course/Photography/pt_course6.jpg" class="carousel-cell-image"  alt="">
                                            </div>
                                            <div class="course-card--content">
                                                <div class="course-card--content-tittle">Adobe Photoshop CC: Your Complete Beginner to Advanced Class</div>
                                                <div class="course-card--content-description">Phil Ebiner, Video School Online Inc</div>
                                                <div class="stars" data-stars="1">
                                                    <span class="rating">4.5</span>
                                                    <svg height="20" width="18" class="star rating" data-rating="1">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="2">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="3">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="4">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="5">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <span class="cout_course">(6,333)</span>
                                                </div>
                                                <div class="price_course">
                                                    <span class="price_course_now">10.99 $</span>
                                                    <span class="price_course_old">10.99 $</span>
                                                </div>
                                            </div>
                                            <div class="mask">
                                                <a href="#"></a>
                                            </div>
                                            <div class="addcart">
                                                <a class="addtocartBtn" class="addtocartBtn" href="">Add to cart</a>
                                                <a href=""><i class="fas fa-heart cus_heartIco cus_heartIco"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-cell">
                                        <div class="course-card">
                                            <div class="course-card--image">
                                                <img class="carousel-cell-image" src="./assets/img/course/Photography/pt_course7.jpg"   alt="">
                                            </div>
                                            <div class="course-card--content">
                                                <div class="course-card--content-tittle">Adobe Photoshop CC: Your Complete Beginner to Advanced Class</div>
                                                <div class="course-card--content-description">Phil Ebiner, Video School Online Inc</div>
                                                <div class="stars" data-stars="1">
                                                    <span class="rating">4.5</span>
                                                    <svg height="20" width="18" class="star rating" data-rating="1">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="2">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="3">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="4">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="5">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <span class="cout_course">(6,333)</span>
                                                </div>
                                                <div class="price_course">
                                                    <span class="price_course_now">10.99 $</span>
                                                    <span class="price_course_old">10.99 $</span>
                                                </div>
                                            </div>
                                            <div class="mask">
                                                <a href="#"></a>
                                            </div>
                                            <div class="addcart">
                                                <a class="addtocartBtn" class="addtocartBtn" href="">Add to cart</a>
                                                <a href=""><i class="fas fa-heart cus_heartIco cus_heartIco"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-cell">
                                        <div class="course-card">
                                            <div class="course-card--image">
                                                <img class="carousel-cell-image" src="./assets/img/course/Photography/pt_course8.jpg"  alt="">
                                            </div>
                                            <div class="course-card--content">
                                                <div class="course-card--content-tittle">Adobe Photoshop CC: Your Complete Beginner to Advanced Class</div>
                                                <div class="course-card--content-description">Phil Ebiner, Video School Online Inc</div>
                                                <div class="stars" data-stars="1">
                                                    <span class="rating">4.5</span>
                                                    <svg height="20" width="18" class="star rating" data-rating="1">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="2">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="3">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="4">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="5">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <span class="cout_course">(6,333)</span>
                                                </div>
                                                <div class="price_course">
                                                    <span class="price_course_now">10.99 $</span>
                                                    <span class="price_course_old">10.99 $</span>
                                                </div>
                                            </div>
                                            <div class="mask">
                                                <a href="#"></a>
                                            </div>
                                            <div class="addcart">
                                                <a class="addtocartBtn" class="addtocartBtn" href="">Add to cart</a>
                                                <a href=""><i class="fas fa-heart cus_heartIco cus_heartIco"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-cell">
                                        <div class="course-card">
                                            <div class="course-card--image">
                                                <img src="./assets/img/course/Photography/pt_course6.jpg" class="carousel-cell-image" alt="">
                                            </div>
                                            <div class="course-card--content">
                                                <div class="course-card--content-tittle">Adobe Photoshop CC: Your Complete Beginner to Advanced Class</div>
                                                <div class="course-card--content-description">Phil Ebiner, Video School Online Inc</div>
                                                <div class="stars" data-stars="1">
                                                    <span class="rating">4.5</span>
                                                    <svg height="20" width="18" class="star rating" data-rating="1">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="2">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="3">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="4">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="5">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <span class="cout_course">(6,333)</span>
                                                </div>
                                                <div class="price_course">
                                                    <span class="price_course_now">10.99 $</span>
                                                    <span class="price_course_old">10.99 $</span>
                                                </div>
                                            </div>
                                            <div class="mask">
                                                <a href="#"></a>
                                            </div>
                                            <div class="addcart">
                                                <a class="addtocartBtn" class="addtocartBtn" href="">Add to cart</a>
                                                <a href=""><i class="fas fa-heart cus_heartIco cus_heartIco"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tab content Development -->
                        <div id="tab-3" class="js--tabContent tabs__content--item ">
                            <div class="course-development">
                                <div class="carousel-course">
                                    <div class="carousel-cell">
                                        <div class="course-card">
                                            <div class="course-card--image">
                                                <img class="carousel-cell-image" src="./assets/img/course/Dev/Dev_course1.jpg"  alt="">
                                            </div>
                                            <div class="course-card--content">
                                                <div class="course-card--content-tittle">Adobe Photoshop CC: Your Complete Beginner to Advanced Class</div>
                                                <div class="course-card--content-description">Phil Ebiner, Video School Online Inc</div>
                                                <div class="stars" data-stars="1">
                                                    <span class="rating">4.5</span>
                                                    <svg height="20" width="18" class="star rating" data-rating="1">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="2">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="3">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="4">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="5">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <span class="cout_course">(6,333)</span>
                                                </div>
                                                <div class="price_course">
                                                    <span class="price_course_now">10.99 $</span>
                                                    <span class="price_course_old">10.99 $</span>
                                                </div>
                                            </div>
                                            <div class="mask">
                                                <a href="#"></a>
                                            </div>
                                            <div class="addcart">
                                                <a class="addtocartBtn" class="addtocartBtn" href="">Add to cart</a>
                                                <a href=""><i class="fas fa-heart cus_heartIco cus_heartIco"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-cell">
                                        <div class="course-card">
                                            <div class="course-card--image">
                                                <img src="./assets/img/course/Dev/Dev_course2.jpg" class="carousel-cell-image"  alt="">
                                            </div>
                                            <div class="course-card--content">
                                                <div class="course-card--content-tittle">Adobe Photoshop CC: Your Complete Beginner to Advanced Class</div>
                                                <div class="course-card--content-description">Phil Ebiner, Video School Online Inc</div>
                                                <div class="stars" data-stars="1">
                                                    <span class="rating">4.5</span>
                                                    <svg height="20" width="18" class="star rating" data-rating="1">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="2">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="3">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="4">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="5">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <span class="cout_course">(6,333)</span>
                                                </div>
                                                <div class="price_course">
                                                    <span class="price_course_now">10.99 $</span>
                                                    <span class="price_course_old">10.99 $</span>
                                                </div>
                                            </div>
                                            <div class="mask">
                                                <a href="#"></a>
                                            </div>
                                            <div class="addcart">
                                                <a class="addtocartBtn" class="addtocartBtn" href="">Add to cart</a>
                                                <a href=""><i class="fas fa-heart cus_heartIco cus_heartIco"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-cell">
                                        <div class="course-card">
                                            <div class="course-card--image">
                                                <img src="./assets/img/course/Dev/Dev_course3.jpg" class="carousel-cell-image"  alt="">
                                            </div>
                                            <div class="course-card--content">
                                                <div class="course-card--content-tittle">Adobe Photoshop CC: Your Complete Beginner to Advanced Class</div>
                                                <div class="course-card--content-description">Phil Ebiner, Video School Online Inc</div>
                                                <div class="stars" data-stars="1">
                                                    <span class="rating">4.5</span>
                                                    <svg height="20" width="18" class="star rating" data-rating="1">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="2">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="3">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="4">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="5">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <span class="cout_course">(6,333)</span>
                                                </div>
                                                <div class="price_course">
                                                    <span class="price_course_now">10.99 $</span>
                                                    <span class="price_course_old">10.99 $</span>
                                                </div>
                                            </div>
                                            <div class="mask">
                                                <a href="#"></a>
                                            </div>
                                            <div class="addcart">
                                                <a class="addtocartBtn" class="addtocartBtn" href="">Add to cart</a>
                                                <a href=""><i class="fas fa-heart cus_heartIco cus_heartIco"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-cell">
                                        <div class="course-card">
                                            <div class="course-card--image">
                                                <img class="carousel-cell-image" src="./assets/img/course/Dev/Dev_course4.jpg" alt="">
                                            </div>
                                            <div class="course-card--content">
                                                <div class="course-card--content-tittle">Adobe Photoshop CC: Your Complete Beginner to Advanced Class</div>
                                                <div class="course-card--content-description">Phil Ebiner, Video School Online Inc</div>
                                                <div class="stars" data-stars="1">
                                                    <span class="rating">4.5</span>
                                                    <svg height="20" width="18" class="star rating" data-rating="1">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="2">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="3">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="4">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="5">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <span class="cout_course">(6,333)</span>
                                                </div>
                                                <div class="price_course">
                                                    <span class="price_course_now">10.99 $</span>
                                                    <span class="price_course_old">10.99 $</span>
                                                </div>
                                            </div>
                                            <div class="mask">
                                                <a href="#"></a>
                                            </div>
                                            <div class="addcart">
                                                <a class="addtocartBtn" class="addtocartBtn" href="">Add to cart</a>
                                                <a href=""><i class="fas fa-heart cus_heartIco cus_heartIco"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-cell">
                                        <div class="course-card">
                                            <div class="course-card--image">
                                                <img src="./assets/img/course/Dev/Dev_course5.jpg" class="carousel-cell-image"  alt="">
                                            </div>
                                            <div class="course-card--content">
                                                <div class="course-card--content-tittle">Adobe Photoshop CC: Your Complete Beginner to Advanced Class</div>
                                                <div class="course-card--content-description">Phil Ebiner, Video School Online Inc</div>
                                                <div class="stars" data-stars="1">
                                                    <span class="rating">4.5</span>
                                                    <svg height="20" width="18" class="star rating" data-rating="1">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="2">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="3">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="4">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="5">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <span class="cout_course">(6,333)</span>
                                                </div>
                                                <div class="price_course">
                                                    <span class="price_course_now">10.99 $</span>
                                                    <span class="price_course_old">10.99 $</span>
                                                </div>
                                            </div>
                                            <div class="mask">
                                                <a href="#"></a>
                                            </div>
                                            <div class="addcart">
                                                <a class="addtocartBtn" class="addtocartBtn" href="">Add to cart</a>
                                                <a href=""><i class="fas fa-heart cus_heartIco cus_heartIco"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-cell">
                                        <div class="course-card">
                                            <div class="course-card--image">
                                                <img src="./assets/img/course/Dev/Dev_course6.jpg" class="carousel-cell-image"  alt="">
                                            </div>
                                            <div class="course-card--content">
                                                <div class="course-card--content-tittle">Adobe Photoshop CC: Your Complete Beginner to Advanced Class</div>
                                                <div class="course-card--content-description">Phil Ebiner, Video School Online Inc</div>
                                                <div class="stars" data-stars="1">
                                                    <span class="rating">4.5</span>
                                                    <svg height="20" width="18" class="star rating" data-rating="1">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="2">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="3">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="4">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="5">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <span class="cout_course">(6,333)</span>
                                                </div>
                                                <div class="price_course">
                                                    <span class="price_course_now">10.99 $</span>
                                                    <span class="price_course_old">10.99 $</span>
                                                </div>
                                            </div>
                                            <div class="mask">
                                                <a href="#"></a>
                                            </div>
                                            <div class="addcart">
                                                <a class="addtocartBtn" class="addtocartBtn" href="">Add to cart</a>
                                                <a href=""><i class="fas fa-heart cus_heartIco cus_heartIco"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-cell">
                                        <div class="course-card">
                                            <div class="course-card--image">
                                                <img class="carousel-cell-image" src="./assets/img/course/Dev/Dev_course3.jpg"   alt="">
                                            </div>
                                            <div class="course-card--content">
                                                <div class="course-card--content-tittle">Adobe Photoshop CC: Your Complete Beginner to Advanced Class</div>
                                                <div class="course-card--content-description">Phil Ebiner, Video School Online Inc</div>
                                                <div class="stars" data-stars="1">
                                                    <span class="rating">4.5</span>
                                                    <svg height="20" width="18" class="star rating" data-rating="1">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="2">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="3">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="4">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="5">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <span class="cout_course">(6,333)</span>
                                                </div>
                                                <div class="price_course">
                                                    <span class="price_course_now">10.99 $</span>
                                                    <span class="price_course_old">10.99 $</span>
                                                </div>
                                            </div>
                                            <div class="mask">
                                                <a href="#"></a>
                                            </div>
                                            <div class="addcart">
                                                <a class="addtocartBtn" class="addtocartBtn" href="">Add to cart</a>
                                                <a href=""><i class="fas fa-heart cus_heartIco cus_heartIco"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-cell">
                                        <div class="course-card">
                                            <div class="course-card--image">
                                                <img class="carousel-cell-image" src="./assets/img/course/Dev/Dev_course6.jpg"  alt="">
                                            </div>
                                            <div class="course-card--content">
                                                <div class="course-card--content-tittle">Adobe Photoshop CC: Your Complete Beginner to Advanced Class</div>
                                                <div class="course-card--content-description">Phil Ebiner, Video School Online Inc</div>
                                                <div class="stars" data-stars="1">
                                                    <span class="rating">4.5</span>
                                                    <svg height="20" width="18" class="star rating" data-rating="1">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="2">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="3">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="4">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="5">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <span class="cout_course">(6,333)</span>
                                                </div>
                                                <div class="price_course">
                                                    <span class="price_course_now">10.99 $</span>
                                                    <span class="price_course_old">10.99 $</span>
                                                </div>
                                            </div>
                                            <div class="mask">
                                                <a href="#"></a>
                                            </div>
                                            <div class="addcart">
                                                <a class="addtocartBtn" class="addtocartBtn" href="">Add to cart</a>
                                                <a href=""><i class="fas fa-heart cus_heartIco cus_heartIco"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-cell">
                                        <div class="course-card">
                                            <div class="course-card--image">
                                                <img src="./assets/img/course/Dev/Dev_course2.jpg" class="carousel-cell-image" alt="">
                                            </div>
                                            <div class="course-card--content">
                                                <div class="course-card--content-tittle">Adobe Photoshop CC: Your Complete Beginner to Advanced Class</div>
                                                <div class="course-card--content-description">Phil Ebiner, Video School Online Inc</div>
                                                <div class="stars" data-stars="1">
                                                    <span class="rating">4.5</span>
                                                    <svg height="20" width="18" class="star rating" data-rating="1">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="2">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="3">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="4">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <svg height="20" width="18" class="star rating" data-rating="5">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                                    </svg>
                                                    <span class="cout_course">(6,333)</span>
                                                </div>
                                                <div class="price_course">
                                                    <span class="price_course_now">10.99 $</span>
                                                    <span class="price_course_old">10.99 $</span>
                                                </div>
                                            </div>
                                            <div class="mask">
                                                <a href="#"></a>
                                            </div>
                                            <div class="addcart">
                                                <a class="addtocartBtn" class="addtocartBtn" href="">Add to cart</a>
                                                <a href=""><i class="fas fa-heart cus_heartIco cus_heartIco"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-4" class="js--tabContent tabs__content--item ">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- *****************course top trending********************* -->
        <div class="responsive ">
            <div class="headline ">
                <div class="headline__tittle-text">
                    Top khóa học
                </div>
            </div>
            <div class="course_trending">
                <div class="carousel-course">
                    <div class="carousel-cell">
                        <div class="course-card">
                            <div class="course-card--image">
                                <img class="carousel-cell-image" src="./assets/img/course/Dev/Dev_course4.jpg"  alt="">
                            </div>
                            <div class="course-card--content">
                                <div class="course-card--content-tittle">Adobe Photoshop CC: Your Complete Beginner to Advanced Class</div>
                                <div class="course-card--content-description">Phil Ebiner, Video School Online Inc</div>
                                <div class="stars" data-stars="1">
                                    <svg height="20" width="18" class="star rating" data-rating="1">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <svg height="20" width="18" class="star rating" data-rating="2">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <svg height="20" width="18" class="star rating" data-rating="3">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <svg height="20" width="18" class="star rating" data-rating="4">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <svg height="20" width="18" class="star rating" data-rating="5">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <span class="rating">4.5</span>
                                    <span class="cout_course">(6,333)</span>
                                </div>
                                <div class="price_course">
                                    <span class="price_course_now">10.99 $</span>
                                    <span class="price_course_old">10.99 $</span>
                                </div>
                            </div>
                            <div class="mask">
                                <a href="#"></a>
                            </div>
                            <div class="addcart">
                                <a class="addtocartBtn" class="addtocartBtn" href="">Add to cart</a>
                                <a href=""><i class="fas fa-heart cus_heartIco cus_heartIco"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell">
                        <div class="course-card">
                            <div class="course-card--image">
                                <img src="./assets/img/course/IT/It_course1.jpg" class="carousel-cell-image" alt="">
                            </div>
                            <div class="course-card--content">
                                <div class="course-card--content-tittle">Adobe Photoshop CC: Your Complete Beginner to Advanced Class</div>
                                <div class="course-card--content-description">Phil Ebiner, Video School Online Inc</div>
                                <div class="stars" data-stars="1">
                                    <svg height="20" width="18" class="star rating" data-rating="1">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <svg height="20" width="18" class="star rating" data-rating="2">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <svg height="20" width="18" class="star rating" data-rating="3">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <svg height="20" width="18" class="star rating" data-rating="4">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <svg height="20" width="18" class="star rating" data-rating="5">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <span class="rating">4.5</span>
                                    <span class="cout_course">(6,333)</span>
                                </div>
                                <div class="price_course">
                                    <span class="price_course_now">10.99 $</span>
                                    <span class="price_course_old">10.99 $</span>
                                </div>
                            </div>
                            <div class="mask">
                                <a href="#"></a>
                            </div>
                            <div class="addcart">
                                <a class="addtocartBtn" class="addtocartBtn" href="">Add to cart</a>
                                <a href=""><i class="fas fa-heart cus_heartIco cus_heartIco"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell">
                        <div class="course-card">
                            <div class="course-card--image">
                                <img class="carousel-cell-image" src="./assets/img/course/Dev/Dev_course2.jpg"  alt="">
                            </div>
                            <div class="course-card--content">
                                <div class="course-card--content-tittle">Adobe Photoshop CC: Your Complete Beginner to Advanced Class</div>
                                <div class="course-card--content-description">Phil Ebiner, Video School Online Inc</div>
                                <div class="stars" data-stars="1">
                                    <svg height="20" width="18" class="star rating" data-rating="1">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <svg height="20" width="18" class="star rating" data-rating="2">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <svg height="20" width="18" class="star rating" data-rating="3">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <svg height="20" width="18" class="star rating" data-rating="4">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <svg height="20" width="18" class="star rating" data-rating="5">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <span class="rating">4.5</span>
                                    <span class="cout_course">(6,333)</span>
                                </div>
                                <div class="price_course">
                                    <span class="price_course_now">10.99 $</span>
                                    <span class="price_course_old">10.99 $</span>
                                </div>
                            </div>
                            <div class="mask">
                                <a href="#"></a>
                            </div>
                            <div class="addcart">
                                <a class="addtocartBtn" class="addtocartBtn" href="">Add to cart</a>
                                <a href=""><i class="fas fa-heart cus_heartIco cus_heartIco"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell">
                        <div class="course-card">
                            <div class="course-card--image">
                                <img class="carousel-cell-image" src="./assets/img/course/Dev/Dev_course2.jpg"  alt="">
                            </div>
                            <div class="course-card--content">
                                <div class="course-card--content-tittle">Adobe Photoshop CC: Your Complete Beginner to Advanced Class</div>
                                <div class="course-card--content-description">Phil Ebiner, Video School Online Inc</div>
                                <div class="stars" data-stars="1">
                                    <svg height="20" width="18" class="star rating" data-rating="1">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <svg height="20" width="18" class="star rating" data-rating="2">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <svg height="20" width="18" class="star rating" data-rating="3">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <svg height="20" width="18" class="star rating" data-rating="4">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <svg height="20" width="18" class="star rating" data-rating="5">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <span class="rating">4.5</span>
                                    <span class="cout_course">(6,333)</span>
                                </div>
                                <div class="price_course">
                                    <span class="price_course_now">10.99 $</span>
                                    <span class="price_course_old">10.99 $</span>
                                </div>
                            </div>
                            <div class="mask">
                                <a href="#"></a>
                            </div>
                            <div class="addcart">
                                <a class="addtocartBtn" class="addtocartBtn" href="">Add to cart</a>
                                <a href=""><i class="fas fa-heart cus_heartIco cus_heartIco"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell">
                        <div class="course-card">
                            <div class="course-card--image">
                                <img src="./assets/img/course/IT/It_course6.jpg" class="carousel-cell-image"  alt="">
                            </div>
                            <div class="course-card--content">
                                <div class="course-card--content-tittle">Adobe Photoshop CC: Your Complete Beginner to Advanced Class</div>
                                <div class="course-card--content-description">Phil Ebiner, Video School Online Inc</div>
                                <div class="stars" data-stars="1">
                                    <svg height="20" width="18" class="star rating" data-rating="1">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <svg height="20" width="18" class="star rating" data-rating="2">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <svg height="20" width="18" class="star rating" data-rating="3">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <svg height="20" width="18" class="star rating" data-rating="4">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <svg height="20" width="18" class="star rating" data-rating="5">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <span class="rating">4.5</span>
                                    <span class="cout_course">(6,333)</span>
                                </div>
                                <div class="price_course">
                                    <span class="price_course_now">10.99 $</span>
                                    <span class="price_course_old">10.99 $</span>
                                </div>
                            </div>
                            <div class="mask">
                                <a href="#"></a>
                            </div>
                            <div class="addcart">
                                <a class="addtocartBtn" class="addtocartBtn" href="">Add to cart</a>
                                <a href=""><i class="fas fa-heart cus_heartIco cus_heartIco"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell">
                        <div class="course-card">
                            <div class="course-card--image">
                                <img src="./assets/img/course/IT/It_course6.jpg" class="carousel-cell-image"  alt="">
                            </div>
                            <div class="course-card--content">
                                <div class="course-card--content-tittle">Adobe Photoshop CC: Your Complete Beginner to Advanced Class</div>
                                <div class="course-card--content-description">Phil Ebiner, Video School Online Inc</div>
                                <div class="stars" data-stars="1">
                                    <svg height="20" width="18" class="star rating" data-rating="1">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <svg height="20" width="18" class="star rating" data-rating="2">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <svg height="20" width="18" class="star rating" data-rating="3">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <svg height="20" width="18" class="star rating" data-rating="4">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <svg height="20" width="18" class="star rating" data-rating="5">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <span class="rating">4.5</span>
                                    <span class="cout_course">(6,333)</span>
                                </div>
                                <div class="price_course">
                                    <span class="price_course_now">10.99 $</span>
                                    <span class="price_course_old">10.99 $</span>
                                </div>
                            </div>
                            <div class="mask">
                                <a href="#"></a>
                            </div>
                            <div class="addcart">
                                <a class="addtocartBtn" class="addtocartBtn" href="">Add to cart</a>
                                <a href=""><i class="fas fa-heart cus_heartIco cus_heartIco"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell">
                        <div class="course-card">
                            <div class="course-card--image">
                                <img class="carousel-cell-image" src="./assets/img/course/Dev/Dev_course3.jpg"   alt="">
                            </div>
                            <div class="course-card--content">
                                <div class="course-card--content-tittle">Adobe Photoshop CC: Your Complete Beginner to Advanced Class</div>
                                <div class="course-card--content-description">Phil Ebiner, Video School Online Inc</div>
                                <div class="stars" data-stars="1">
                                    <svg height="20" width="18" class="star rating" data-rating="1">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <svg height="20" width="18" class="star rating" data-rating="2">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <svg height="20" width="18" class="star rating" data-rating="3">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <svg height="20" width="18" class="star rating" data-rating="4">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <svg height="20" width="18" class="star rating" data-rating="5">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <span class="rating">4.5</span>
                                    <span class="cout_course">(6,333)</span>
                                </div>
                                <div class="price_course">
                                    <span class="price_course_now">10.99 $</span>
                                    <span class="price_course_old">10.99 $</span>
                                </div>
                            </div>
                            <div class="mask">
                                <a href="#"></a>
                            </div>
                            <div class="addcart">
                                <a class="addtocartBtn" class="addtocartBtn" href="">Add to cart</a>
                                <a href=""><i class="fas fa-heart cus_heartIco cus_heartIco"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell">
                        <div class="course-card">
                            <div class="course-card--image">
                                <img class="carousel-cell-image" src="./assets/img/course/Dev/Dev_course3.jpg"  alt="">
                            </div>
                            <div class="course-card--content">
                                <div class="course-card--content-tittle">Adobe Photoshop CC: Your Complete Beginner to Advanced Class</div>
                                <div class="course-card--content-description">Phil Ebiner, Video School Online Inc</div>
                                <div class="stars" data-stars="1">
                                    <svg height="20" width="18" class="star rating" data-rating="1">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <svg height="20" width="18" class="star rating" data-rating="2">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <svg height="20" width="18" class="star rating" data-rating="3">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <svg height="20" width="18" class="star rating" data-rating="4">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <svg height="20" width="18" class="star rating" data-rating="5">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <span class="rating">4.5</span>
                                    <span class="cout_course">(6,333)</span>
                                </div>
                                <div class="price_course">
                                    <span class="price_course_now">10.99 $</span>
                                    <span class="price_course_old">10.99 $</span>
                                </div>
                            </div>
                            <div class="mask">
                                <a href="#"></a>
                            </div>
                            <div class="addcart">
                                <a class="addtocartBtn" class="addtocartBtn" href="">Add to cart</a>
                                <a href=""><i class="fas fa-heart cus_heartIco cus_heartIco"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell">
                        <div class="course-card">
                            <div class="course-card--image">
                                <img src="./assets/img/course/IT/It_course6.jpg" class="carousel-cell-image"  alt="">
                            </div>
                            <div class="course-card--content">
                                <div class="course-card--content-tittle">Adobe Photoshop CC: Your Complete Beginner to Advanced Class</div>
                                <div class="course-card--content-description">Phil Ebiner, Video School Online Inc</div>
                                <div class="stars" data-stars="1">
                                    <svg height="20" width="18" class="star rating" data-rating="1">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <svg height="20" width="18" class="star rating" data-rating="2">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <svg height="20" width="18" class="star rating" data-rating="3">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <svg height="20" width="18" class="star rating" data-rating="4">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <svg height="20" width="18" class="star rating" data-rating="5">
                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                                    </svg>
                                    <span class="rating">4.5</span>
                                    <span class="cout_course">(6,333)</span>
                                </div>
                                <div class="price_course">
                                    <span class="price_course_now">10.99 $</span>
                                    <span class="price_course_old">10.99 $</span>
                                </div>
                            </div>
                            <div class="mask">
                                <a href="#"></a>
                            </div>
                            <div class="addcart">
                                <a class="addtocartBtn" class="addtocartBtn" href="">Add to cart</a>
                                <a href=""><i class="fas fa-heart cus_heartIco cus_heartIco"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="responsive only-pc">
            <div class="topcategories">
                <div class="topcategories-headline ">
                    <div class="headline__tittle-text">
                        Top danh mục
                    </div>
                </div>
                <div class="topcategories-wraper">
                    <div class="topcategories-wraper-item">
                        <div class="topcategories-card">
                            <div class="topcategories-card--image">
                                <img src="./assets/img/course/category-design.jpg" alt="">
                            </div>
                            <div class="topcategories-card--info">
                                <span>Design</span>
                            </div>
                        </div>
                    </div>
                    <div class="topcategories-wraper-item">
                        <div class="topcategories-card">
                            <div class="topcategories-card--image">
                                <img src="./assets/img/course/category-development.jpg" alt="">
                            </div>
                            <div class="topcategories-card--info">
                                <span>Development</span>
                            </div>
                        </div>
                    </div>
                    <div class="topcategories-wraper-item">
                        <div class="topcategories-card">
                            <div class="topcategories-card--image">
                                <img src="./assets/img/course/category-marketing.jpg" alt="">
                            </div>
                            <div class="topcategories-card--info">
                                <span>Marketing</span>
                            </div>
                        </div>
                    </div>
                    <div class="topcategories-wraper-item">
                        <div class="topcategories-card">
                            <div class="topcategories-card--image">
                                <img src="./assets/img/course/category-it-and-software.jpg" alt="">
                            </div>
                            <div class="topcategories-card--info">
                                <span> IT and Software</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="topcategories-wraper">
                    <div class="topcategories-wraper-item">
                        <div class="topcategories-card">
                            <div class="topcategories-card">
                                <div class="topcategories-card--image">
                                    <img src="./assets/img/course/category-personal-development.jpg" alt="">
                                </div>
                                <div class="topcategories-card--info">
                                    <span>Personal Development</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="topcategories-wraper-item">
                        <div class="topcategories-card">
                            <div class="topcategories-card--image">
                                <img src="./assets/img/course/category-business.jpg" alt="">
                            </div>
                            <div class="topcategories-card--info">
                                <span>Business</span>
                            </div>
                        </div>
                    </div>
                    <div class="topcategories-wraper-item">
                        <div class="topcategories-card">
                            <div class="topcategories-card--image">
                                <img src="./assets/img/course/category-photography.jpg" alt="">
                            </div>
                            <div class="topcategories-card--info">
                                <span>Photography</span>
                            </div>
                        </div>
                    </div>
                    <div class="topcategories-wraper-item">
                        <div class="topcategories-card">
                            <div class="topcategories-card--image">
                                <img src="./assets/img/course/category-music.jpg" alt="">
                            </div>
                            <div class="topcategories-card--info">
                                <span>Music</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="responsive">
            <div class="study">
                <div class="study-headline">
                    <p>Lợi ích khi học tập tại Blackpink</p>
                </div>
                <div class="study-wraper">
                    <div class="study-wraper-col">
                        <div class="study-item">
                            <div class="study-item--image">
                                <img src="./assets/img/wifi-icon.png" alt="">
                            </div>
                            <div class="study-item--content">
                                <p class="study-item--content-tittle">Học online mọi lúc mọi nơi</p>
                                <p class="study-item--content-text">Chỉ cần có kết nối internet và các thiết bị truy cập mạng, bạn có thể học mọi lúc, mọi nơi.</p>
                            </div>
                        </div>
                    </div>
                    <div class="study-wraper-col">
                        <div class="study-item">
                            <div class="study-item--image">
                                <img src="./assets/img/Internet-icon.png" alt="">
                            </div>
                            <div class="study-item--content">
                                <p class="study-item--content-tittle">Học mãi mãi</p>
                                <p class="study-item--content-text">Bạn chỉ cần mua 1 lần và học mãi mãi. Bạn có thể học đi học lại nhiều lần, tuỳ vào mong muốn và thời gian của bạn.</p>
                            </div>
                        </div>
                    </div>
                    <div class="study-wraper-col">
                        <div class="study-item">
                            <div class="study-item--image">
                                <img src="./assets/img/price.png" alt="">
                            </div>
                            <div class="study-item--content">
                                <p class="study-item--content-tittle">Chi phí học tập thấp</p>
                                <p class="study-item--content-text">Chỉ từ 280,000Đ cho một khóa học chất lượng. Đăng ký ngay bạn sẽ nhận được nhiều hơn những gì bạn bỏ ra.</p>
                            </div>
                        </div>
                    </div>
                    <div class="study-wraper-col">
                        <div class="study-item">
                            <div class="study-item--image">
                                <img src="./assets/img/protect.png" alt="">
                            </div>
                            <div class="study-item--content">
                                <p class="study-item--content-tittle">Bảo hành trọn đời</p>
                                <p class="study-item--content-text">Cam kết bảo hành khóa học trọn đời, học viên nếu không hài lòng sẽ được hoàn lại học phí.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="">
            <div class="responsive footer">
                <div class="footer-wraper-col">
                    <div class="footer-aboutUs">
                        <p class="footer-aboutUs__tittle">About us</p>
                        <p class="footer-aboutUs__content">
                            We are a young company always looking for new and creative ideas to help you with our products in your everyday work.
                        </p>
                        <p class="footer-aboutUs__link"><a href="#">Out Team</a></p>
                    </div>
                </div>
                <div class="footer-wraper-col">
                    <div class="footer-contact">
                        <p class="footer-contact__tittle">Contact</p>
                        <p class="footer-contact__content">
                            <i  class="fas fa-map-marker-alt footer-contact__content--icon"></i>
                            <a>Chung cư 282 Lĩnh nam, HN</a>
                        </p>
                        <p class="footer-contact__content">
                            <i  class="fas fa-phone footer-contact__content--icon"></i>
                            <a>+84 345915454</a>
                        </p>
                        <p class="footer-contact__content">
                            <i  class="fas fa-envelope footer-contact__content--icon"></i>
                            <a>tbinhminh1109@gmail.com</a>
                        </p>
                        <p class="footer-contact__content">
                            <i  class="fas fa-arrow-down footer-contact__content--icon"></i>
                            <a>Tải xuống ứng dụng</a>
                        </p>
                    </div>
                </div>
                <div class="footer-wraper-col">
                    <div class="footer-follow">
                        <p class="footer-follow__tittle">Follow me</p>
                        <div class="footer-follow_socialMedia">
                            <p class="footer-follow__content">
                                <i class="fab fa-facebook footer-follow__content--icon"></i>
                                <a>Facebook</a>
                            </p>
                            <p class="footer-follow__content">
                                <i class="fab fa-twitter footer-follow__content--icon"></i>
                                <a>twitter</a>
                            </p>
                            <p class="footer-follow__content">
                                <i class="fab fa-skype footer-follow__content--icon"></i>
                                <a>skype</a>
                            </p>
                            <p class="footer-follow__content">
                                <i class="fab fa-slack footer-follow__content--icon"></i>
                                <a>slack</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="footer-bottom">
            <p class="footer-bottom__content">Bản quyền &copy; 2020 Udemy. Đã đăng kí bản quyền</p>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript" src="./assets/js/slick.min.js"></script>
        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
        <script src="./assets/js/script.js"></script>
    </body>
</html>
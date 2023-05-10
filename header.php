<?php
$url=basename(__DIR__) ;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Company List</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="assets/images/header/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="./assets/plugins/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/plugins/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./assets/plugins/css/modal-video.min.css" />
    <link rel="stylesheet" href="./assets/plugins/css/magnific-popup.css" />
    <link rel="stylesheet" href="./assets/plugins/css/nice-select.css" />
    <link rel="stylesheet" href="./assets/plugins/css/select2.min.css" />
    <link rel="stylesheet" href="./assets/plugins/css/summernote-lite.min.css" />
    <link rel="stylesheet" href="./assets/plugins/css/rangeslider.css" />
    <link rel="stylesheet" href="./assets/sass/style.css" />
</head>

<body>
    <!-- Scroll To Top -->
    <div class="scrolltop" onclick="scrollUp();">
        <i class="fas fa-chevron-up"></i>
    </div>

    <!-- Header Section  -->
    <header class="header_wrapper">
        <div class="header_area d-flex align-items-center justify-content-between flex-wrap g-sm">
            <div class="logo_search_grid">
                <div class="logo">
                    <a href="#">
                        <img src="assets/images/header/logo.png" alt="logo" />
                        <span class="logo_text">My Cool Store</span>
                    </a>
                </div>
                <div class="header_search_grid">
                    <div class="menu_bar_icon" id="menubarToggleBtn">
                        <button type="button" class="bar_icon">
                            <img src="assets/images/icon/menu_bar.svg" alt="menu bar" />
                        </button>
                    </div>
                    <button type="button" class="mobile_search_btn" id="mobileSearchBtn">
                        <img src="assets/images/icon/search_black_icon.svg" alt="search bar" />
                    </button>
                    <form action="" class="search_form_area" id="searchFormArea">
                        <div class="search_icon">
                            <button type="submit">
                                <img src="assets/images/icon/search_black_icon.svg" alt="search bar" />
                            </button>
                        </div>
                        <div class="search_input_area">
                            <input type="text" placeholder="Search....." />
                        </div>
                    </form>
                    <div class="overlay" id="searchOverlay"></div>
                </div>
            </div>
            <div class="header_right_area">
                <ul class="user_info_list d-flex align-items-center flex-wrap">
                    <li>
                        <a href="#" class="user_info_area">
                            <img src="assets/images/icon/message_icon.svg" alt="message icon" />
                            <div class="message_number">5</div>
                        </a>
                    </li>
                    <li>
                        <button class="user_info_area" id="notificationDropdownBtn">
                            <img src="assets/images/icon/notification_icon.svg" alt="notificaion icon" />
                            <div class="circle_shape"></div>
                        </button>
                        <div class="dropdown_area notification_dropdown_area" id="notificationDropdownArea">
                            <div
                                class="notification_header_area d-flex align-items-center justify-content-between flex-wrap g-sm">
                                <h5>Notification</h5>
                                <button type="button">Mark all as read</button>
                            </div>
                            <div class="notification_tab_area">
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-all" type="button" role="tab"
                                            aria-controls="pills-all" aria-selected="true">
                                            All <span class="badge">4</span>
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-project-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-project" type="button" role="tab"
                                            aria-controls="pills-project" aria-selected="false">
                                            Project
                                            <span class="badge">4</span>
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-task-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-task" type="button" role="tab"
                                            aria-controls="pills-task" aria-selected="false">
                                            Task
                                            <span class="badge">4</span>
                                        </button>
                                    </li>
                                </ul>
                                <div class="tab-content mt-2" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-all" role="tabpanel"
                                        aria-labelledby="pills-all-tab">
                                        <ul class="notification_list">
                                            <li>
                                                <a href="#">
                                                    <div class="user_img">
                                                        <img src="assets/images/others/notification_avatar.jpg"
                                                            alt="user image" />
                                                    </div>
                                                    <div>
                                                        <h5><b>Maria Ross</b> add you in a project</h5>
                                                        <h6>
                                                            2h ago <span> • UI for Admin Dashboard</span>
                                                        </h6>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="user_img">
                                                        <img src="assets/images/others/notification_avatar.jpg"
                                                            alt="user image" />
                                                    </div>
                                                    <div>
                                                        <h5><b>Maria Ross</b> add you in a project</h5>
                                                        <h6>
                                                            2h ago <span> • UI for Admin Dashboard</span>
                                                        </h6>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="user_img">
                                                        <img src="assets/images/others/notification_avatar.jpg"
                                                            alt="user image" />
                                                    </div>
                                                    <div>
                                                        <h5><b>Maria Ross</b> add you in a project</h5>
                                                        <h6>
                                                            2h ago <span> • UI for Admin Dashboard</span>
                                                        </h6>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="user_img">
                                                        <img src="assets/images/others/notification_avatar.jpg"
                                                            alt="user image" />
                                                    </div>
                                                    <div>
                                                        <h5><b>Maria Ross</b> add you in a project</h5>
                                                        <h6>
                                                            2h ago <span> • UI for Admin Dashboard</span>
                                                        </h6>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="user_img">
                                                        <img src="assets/images/others/notification_avatar.jpg"
                                                            alt="user image" />
                                                    </div>
                                                    <div>
                                                        <h5><b>Maria Ross</b> add you in a project</h5>
                                                        <h6>
                                                            2h ago <span> • UI for Admin Dashboard</span>
                                                        </h6>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="user_img">
                                                        <img src="assets/images/others/notification_avatar.jpg"
                                                            alt="user image" />
                                                    </div>
                                                    <div>
                                                        <h5><b>Maria Ross</b> add you in a project</h5>
                                                        <h6>
                                                            2h ago <span> • UI for Admin Dashboard</span>
                                                        </h6>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="user_img">
                                                        <img src="assets/images/others/notification_avatar.jpg"
                                                            alt="user image" />
                                                    </div>
                                                    <div>
                                                        <h5><b>Maria Ross</b> add you in a project</h5>
                                                        <h6>
                                                            2h ago <span> • UI for Admin Dashboard</span>
                                                        </h6>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="user_img">
                                                        <img src="assets/images/others/notification_avatar.jpg"
                                                            alt="user image" />
                                                    </div>
                                                    <div>
                                                        <h5><b>Maria Ross</b> add you in a project</h5>
                                                        <h6>
                                                            2h ago <span> • UI for Admin Dashboard</span>
                                                        </h6>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="text-center mt-2">
                                            <a href="#">View all</a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-project" role="tabpanel"
                                        aria-labelledby="pills-project-tab">
                                        <ul class="notification_list">
                                            <li>
                                                <a href="#">
                                                    <div class="user_img">
                                                        <img src="assets/images/others/notification_avatar.jpg"
                                                            alt="user image" />
                                                    </div>
                                                    <div>
                                                        <h5><b>Maria Ross</b> add you in a project</h5>
                                                        <h6>
                                                            2h ago <span> • UI for Admin Dashboard</span>
                                                        </h6>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="user_img">
                                                        <img src="assets/images/others/notification_avatar.jpg"
                                                            alt="user image" />
                                                    </div>
                                                    <div>
                                                        <h5><b>Maria Ross</b> add you in a project</h5>
                                                        <h6>
                                                            2h ago <span> • UI for Admin Dashboard</span>
                                                        </h6>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="user_img">
                                                        <img src="assets/images/others/notification_avatar.jpg"
                                                            alt="user image" />
                                                    </div>
                                                    <div>
                                                        <h5><b>Maria Ross</b> add you in a project</h5>
                                                        <h6>
                                                            2h ago <span> • UI for Admin Dashboard</span>
                                                        </h6>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="user_img">
                                                        <img src="assets/images/others/notification_avatar.jpg"
                                                            alt="user image" />
                                                    </div>
                                                    <div>
                                                        <h5><b>Maria Ross</b> add you in a project</h5>
                                                        <h6>
                                                            2h ago <span> • UI for Admin Dashboard</span>
                                                        </h6>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="user_img">
                                                        <img src="assets/images/others/notification_avatar.jpg"
                                                            alt="user image" />
                                                    </div>
                                                    <div>
                                                        <h5><b>Maria Ross</b> add you in a project</h5>
                                                        <h6>
                                                            2h ago <span> • UI for Admin Dashboard</span>
                                                        </h6>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="text-center mt-2">
                                            <a href="#">View all</a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-task" role="tabpanel"
                                        aria-labelledby="pills-task-tab">
                                        <ul class="notification_list">
                                            <li>
                                                <a href="#">
                                                    <div class="user_img">
                                                        <img src="assets/images/others/notification_avatar.jpg"
                                                            alt="user image" />
                                                    </div>
                                                    <div>
                                                        <h5><b>Maria Ross</b> add you in a project</h5>
                                                        <h6>
                                                            2h ago <span> • UI for Admin Dashboard</span>
                                                        </h6>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="user_img">
                                                        <img src="assets/images/others/notification_avatar.jpg"
                                                            alt="user image" />
                                                    </div>
                                                    <div>
                                                        <h5><b>Maria Ross</b> add you in a project</h5>
                                                        <h6>
                                                            2h ago <span> • UI for Admin Dashboard</span>
                                                        </h6>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="user_img">
                                                        <img src="assets/images/others/notification_avatar.jpg"
                                                            alt="user image" />
                                                    </div>
                                                    <div>
                                                        <h5><b>Maria Ross</b> add you in a project</h5>
                                                        <h6>
                                                            2h ago <span> • UI for Admin Dashboard</span>
                                                        </h6>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="user_img">
                                                        <img src="assets/images/others/notification_avatar.jpg"
                                                            alt="user image" />
                                                    </div>
                                                    <div>
                                                        <h5><b>Maria Ross</b> add you in a project</h5>
                                                        <h6>
                                                            2h ago <span> • UI for Admin Dashboard</span>
                                                        </h6>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="user_img">
                                                        <img src="assets/images/others/notification_avatar.jpg"
                                                            alt="user image" />
                                                    </div>
                                                    <div>
                                                        <h5><b>Maria Ross</b> add you in a project</h5>
                                                        <h6>
                                                            2h ago <span> • UI for Admin Dashboard</span>
                                                        </h6>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="text-center mt-2">
                                            <a href="#">View all</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="overlay" id="notificationOverlay"></div>
                    </li>
                    <li>
                        <a href="#" class="user_info_area">
                            <img src="assets/images/icon/satting.svg" alt="setting icon" />
                        </a>
                    </li>
                    <li>
                        <button type="button" class="header_user_area" id="userDropdownBtn">
                            <div class="user_img_area">
                                <img src="assets/images/header/user.png" alt="user image" />
                            </div>
                            <div class="user_name">Oliver Kan</div>
                            <div class="arrow_icon">
                                <img src="assets/images/icon/bottom_arrow.svg" alt="arrow icon" />
                            </div>
                        </button>
                        <div class="dropdown_area user_dropdown_area" id="userDropdownArea">
                            <ul>
                                <li>
                                    <a href="<?=$url.('/../user-profile.php')?>">
                                        <div class="profile_icon">
                                            <i class="fa-regular fa-user"></i>
                                        </div>
                                        <span>Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=$url.('/../user-transaction.php')?>">
                                        <div class="profile_icon">
                                            <i class="fa-solid fa-gear"></i>
                                        </div>
                                        <span>Acount</span>
                                    </a>
                                </li>
                                <li>
                                    <button type="button">
                                        <div class="profile_icon">
                                            <i class="fa-solid fa-right-from-bracket"></i>
                                        </div>
                                        <span>Log Out</span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="overlay" id="userOverlay"></div>
                    </li>
                    <li>
                        <a href="#" class="login_text">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!-- Sidebar Section -->
    <section class="sidebar_wrapper">
        <div class="accordion" id="accordionMenu">
            <div class="accordion-item">
                <h2>
                    <a href="<?=$url.('/../index.php')?>">
                        <div class="dashboard_icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20.42 10.1799L12.71 2.29995C12.617 2.20622 12.5064 2.13183 12.3846 2.08106C12.2627 2.03029 12.132 2.00415 12 2.00415C11.868 2.00415 11.7373 2.03029 11.6154 2.08106C11.4936 2.13183 11.383 2.20622 11.29 2.29995L3.57999 10.1899C3.39343 10.378 3.24609 10.6013 3.14652 10.8468C3.04695 11.0922 2.99715 11.3551 2.99999 11.6199V19.9999C2.99922 20.5119 3.19477 21.0046 3.54637 21.3766C3.89797 21.7487 4.37885 21.9718 4.88999 21.9999H19.11C19.6211 21.9718 20.102 21.7487 20.4536 21.3766C20.8052 21.0046 21.0008 20.5119 21 19.9999V11.6199C21.0008 11.0829 20.7928 10.5665 20.42 10.1799ZM9.99999 19.9999V13.9999H14V19.9999H9.99999ZM19 19.9999H16V12.9999C16 12.7347 15.8946 12.4804 15.7071 12.2928C15.5196 12.1053 15.2652 11.9999 15 11.9999H8.99999C8.73478 11.9999 8.48042 12.1053 8.29289 12.2928C8.10535 12.4804 7.99999 12.7347 7.99999 12.9999V19.9999H4.99999V11.5799L12 4.42995L19 11.6199V19.9999Z"
                                    fill="#333333" />
                            </svg>
                        </div>                        
                        <span class="label_text" >Home</span>
                    </a>
                </h2>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headerDropdown1">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        <div class="dashboard_icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 13.5H10.5V15H6V13.5Z" fill="#333333" />
                                <path d="M6 16.5H13.5V18H6V16.5Z" fill="#333333" />
                                <path
                                    d="M19.5 3H4.5C4.1023 3.0004 3.721 3.15856 3.43978 3.43978C3.15856 3.721 3.0004 4.1023 3 4.5V19.5C3.0004 19.8977 3.15856 20.279 3.43978 20.5602C3.721 20.8414 4.1023 20.9996 4.5 21H19.5C19.8977 20.9996 20.279 20.8414 20.5602 20.5602C20.8414 20.279 20.9996 19.8977 21 19.5V4.5C20.9996 4.1023 20.8414 3.721 20.5602 3.43978C20.279 3.15856 19.8977 3.0004 19.5 3ZM13.5 4.5V7.5H10.5V4.5H13.5ZM4.5 19.5V4.5H9V9H15V4.5H19.5L19.5007 19.5H4.5Z"
                                    fill="#333333" />
                            </svg>
                        </div>
                        <span class="label_text">Products</span>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headerDropdown1"
                    data-bs-parent="#accordionMenu">
                    <div class="accordion-body">
                        <ul class="dropdown_menu_area">
                            <li>
                                <a href="<?=$url.'/../product-overview.php'?>">Overview</a>
                            </li>
                            <li>
                                <a href="<?=$url.'/../add-product.php'?>">All Products</a>
                            </li>
                            <li>
                                <a href="<?=$url.'/../product-overview.php'?>">Inventory</a>
                            </li>
                            <li>
                                <a href="#">Collections</a>
                            </li>
                            <li>
                                <a href="#">Categories</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headerDropdown1">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <div class="dashboard_icon">
                            <svg stroke="#333333" fill="#333333" stroke-width="0" viewBox="0 0 24 24" height="24"
                                width="24" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M21 11h-3V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v14c0 1.654 1.346 3 3 3h14c1.654 0 3-1.346 3-3v-6a1 1 0 0 0-1-1zM5 19a1 1 0 0 1-1-1V5h12v13c0 .351.061.688.171 1H5zm15-1a1 1 0 0 1-2 0v-5h2v5z">
                                </path>
                                <path d="M6 7h8v2H6zm0 4h8v2H6zm5 4h3v2h-3z"></path>
                            </svg>
                        </div>
                        <span class="label_text">Invoice</span>
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headerDropdown1"
                    data-bs-parent="#accordionMenu">
                    <div class="accordion-body">
                        <ul class="dropdown_menu_area">
                            <li>
                                <a href="<?=$url.'/../invoice-deatils.php'?>">Invoice Details</a>
                            </li>
                            <li>
                                <a href="<?=$url.'/../invoice-grid.php'?>">Invoice Grid</a>
                            </li>
                            <li>
                                <a href="<?=$url.'/../invoice-list.php'?>">Invoice List</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headerDropdown1">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        <div class="dashboard_icon">
                            <svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_69_226)">
                                    <path
                                        d="M9.88391 15.999C7.24862 15.999 4.61367 15.999 1.97906 15.999C0.6886 15.999 0.00413993 15.3298 0.0020752 14.0721C0.0020752 13.1636 0.0020752 12.2632 0.0020752 11.3598C0.0123989 9.68321 1.25847 8.45982 2.9784 8.45881C3.78571 8.45881 4.59406 8.50525 5.40137 8.51433C5.45944 8.51098 5.51612 8.49566 5.56772 8.46939C5.61931 8.44313 5.66465 8.4065 5.70075 8.36191C6.33566 7.42115 7.22866 6.99115 8.37356 7.00831C9.38941 7.02244 10.4053 7.02042 11.4201 7.00831C12.5557 6.99518 13.427 7.43326 14.0609 8.35484C14.127 8.44973 14.3283 8.49313 14.4676 8.49515C15.4412 8.50928 16.4291 8.41642 17.3872 8.53149C18.7582 8.69602 19.7358 9.8861 19.7554 11.2407C19.7699 12.2198 19.7637 13.2 19.7554 14.1791C19.7492 15.2894 19.0328 15.996 17.8972 15.996C15.2288 16.0014 12.5577 16.0024 9.88391 15.999ZM13.2752 14.8503C13.2969 14.8069 13.3165 14.7847 13.3165 14.7635C13.3165 13.1041 13.3547 11.4446 13.3052 9.78819C13.2742 8.76365 12.5371 8.15599 11.4748 8.14994C10.4589 8.14388 9.44309 8.14994 8.42724 8.14994C7.112 8.14994 6.43167 8.8121 6.42857 10.0981C6.42857 11.5556 6.42857 13.0136 6.42857 14.4718C6.42857 14.5939 6.43993 14.7161 6.44613 14.8513L13.2752 14.8503ZM5.26716 14.8685C5.26716 13.1596 5.26716 11.5032 5.26716 9.84573C5.26716 9.59439 5.08443 9.60044 4.92338 9.59943C4.21724 9.59237 3.508 9.57117 2.80289 9.60448C1.90783 9.64789 1.20375 10.3111 1.17278 11.1701C1.13355 12.2118 1.15317 13.2555 1.16143 14.2992C1.16143 14.6323 1.35964 14.8594 1.70858 14.8635C2.88032 14.8715 4.04896 14.8635 5.27026 14.8635L5.26716 14.8685ZM14.4883 14.8685C15.7189 14.8685 16.9113 14.8847 18.1016 14.8584C18.4443 14.8513 18.5961 14.5788 18.5961 14.2477C18.5961 13.2555 18.6116 12.2622 18.5899 11.271C18.5903 10.838 18.418 10.4219 18.1095 10.1113C17.801 9.8006 17.3808 9.61987 16.9381 9.60751C16.2454 9.57622 15.5496 9.60751 14.8548 9.59842C14.5822 9.59842 14.4821 9.69937 14.4852 9.982C14.5017 11.2003 14.4924 12.4187 14.4924 13.637L14.4883 14.8685Z"
                                        fill="#333333" />
                                    <path
                                        d="M13.3145 3.35828C13.3143 4.0225 13.1125 4.67173 12.7348 5.22383C12.3572 5.77593 11.8205 6.20607 11.1927 6.45984C10.5649 6.71361 9.87418 6.7796 9.20801 6.64945C8.54185 6.51931 7.93014 6.19887 7.45028 5.72871C6.97043 5.25854 6.644 4.65976 6.51229 4.00815C6.38059 3.35653 6.44953 2.68136 6.7104 2.06806C6.97126 1.45477 7.41233 0.930917 7.97778 0.56279C8.54324 0.194663 9.20766 -0.00119273 9.887 5.46499e-06C10.7958 0.00452857 11.666 0.360022 12.308 0.989044C12.95 1.61807 13.3117 2.46965 13.3145 3.35828ZM9.89009 1.1376C9.44129 1.13602 9.00207 1.26448 8.62788 1.50676C8.25369 1.74905 7.9613 2.09431 7.78763 2.49894C7.61396 2.90357 7.56679 3.34944 7.65208 3.78026C7.73737 4.21109 7.95129 4.60755 8.26683 4.91959C8.58238 5.23164 8.98541 5.44528 9.42504 5.53355C9.86467 5.62182 10.3212 5.58076 10.737 5.41556C11.1528 5.25035 11.5092 4.9684 11.7612 4.6053C12.0132 4.24221 12.1496 3.81424 12.153 3.37544C12.1571 3.08234 12.1016 2.79136 11.9898 2.51941C11.8779 2.24746 11.7118 1.99995 11.5013 1.79128C11.2907 1.5826 11.0399 1.41691 10.7633 1.30383C10.4867 1.19074 10.1899 1.13252 9.89009 1.13255V1.1376Z"
                                        fill="#333333" />
                                    <path
                                        d="M1.29977 5.57292C1.3129 5.0782 1.47553 4.59836 1.76714 4.19388C2.05876 3.7894 2.46632 3.47838 2.93845 3.30002C3.41058 3.12167 3.92614 3.08396 4.42015 3.19167C4.91416 3.29937 5.3645 3.54765 5.71441 3.90522C6.06432 4.26279 6.29814 4.71364 6.38639 5.20094C6.47464 5.68824 6.41337 6.19018 6.2103 6.64348C6.00724 7.09679 5.67147 7.48117 5.24532 7.74818C4.81917 8.01518 4.32171 8.15286 3.81566 8.14386C3.47778 8.13665 3.14468 8.06442 2.83536 7.9313C2.52605 7.79818 2.24659 7.60678 2.01295 7.36803C1.77931 7.12928 1.59608 6.84786 1.47371 6.53985C1.35134 6.23184 1.29223 5.90327 1.29977 5.57292ZM2.46015 5.62743C2.461 5.89929 2.54444 6.16478 2.69989 6.39019C2.85533 6.6156 3.07578 6.79077 3.33324 6.89345C3.59069 6.99613 3.87355 7.0217 4.14589 6.96691C4.41824 6.91212 4.66779 6.77944 4.86287 6.58571C5.05795 6.39199 5.18976 6.14596 5.24156 5.87885C5.29337 5.61175 5.26283 5.33561 5.15383 5.08551C5.04482 4.8354 4.86227 4.62261 4.62934 4.47414C4.39642 4.32567 4.12363 4.24821 3.8456 4.25161C3.47661 4.25822 3.12497 4.40598 2.86615 4.6632C2.60732 4.92042 2.46194 5.26659 2.46119 5.62743H2.46015Z"
                                        fill="#333333" />
                                    <path
                                        d="M18.4629 5.62439C18.4617 6.11935 18.3107 6.60288 18.0289 7.01406C17.7471 7.42523 17.3471 7.74567 16.8794 7.93498C16.4116 8.12429 15.8971 8.17402 15.4005 8.07789C14.9039 7.98177 14.4475 7.74409 14.0888 7.3948C13.7302 7.04551 13.4853 6.60024 13.385 6.1151C13.2846 5.62995 13.3334 5.12663 13.5252 4.66856C13.7169 4.21048 14.0431 3.81813 14.4625 3.54096C14.8819 3.26378 15.3758 3.11418 15.882 3.11099C16.2205 3.10952 16.5559 3.17346 16.8691 3.29913C17.1822 3.4248 17.4668 3.60972 17.7067 3.84327C17.9465 4.07682 18.1368 4.3544 18.2665 4.66006C18.3963 4.96572 18.4631 5.29344 18.4629 5.62439ZM17.3005 5.63449C17.2996 5.36299 17.2164 5.09785 17.0612 4.87269C16.9061 4.64753 16.686 4.47248 16.429 4.36975C16.172 4.26701 15.8895 4.24122 15.6175 4.29564C15.3455 4.35006 15.0961 4.48224 14.901 4.67542C14.7059 4.86859 14.5738 5.11407 14.5216 5.38072C14.4693 5.64737 14.4993 5.92318 14.6076 6.17317C14.7159 6.42317 14.8976 6.6361 15.1299 6.78495C15.3621 6.93381 15.6343 7.01189 15.9119 7.00929C16.2816 7.00374 16.6342 6.85661 16.894 6.59952C17.1539 6.34244 17.3002 5.99593 17.3015 5.63449H17.3005Z"
                                        fill="#333333" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_69_226">
                                        <rect width="19.7647" height="16" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <span class="label_text">Customers</span>
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headerDropdown1"
                    data-bs-parent="#accordionMenu">
                    <div class="accordion-body">
                        <ul class="dropdown_menu_area">
                            <li>
                                <a href="<?=$url.'/../customer-overview.php'?>">Overview</a>
                            </li>
                            <li>
                                <a href="<?=$url.'/../customer-list.php'?>">Customers List</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headerDropdown1">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        <div class="dashboard_icon">
                            <svg stroke="#333333" fill="#333333" stroke-width="0" viewBox="0 0 24 24" height="24"
                                width="24" xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" d="M7 20h10v1H7zM7 3h10v1H7z"></path>
                                <path
                                    d="M21.81 12.74l-.82-.63v-.22l.8-.63c.16-.12.2-.34.1-.51l-.85-1.48a.395.395 0 00-.35-.2c-.05 0-.1.01-.15.03l-.95.38c-.08-.05-.11-.07-.19-.11l-.15-1.01a.408.408 0 00-.4-.36h-1.71c-.2 0-.37.15-.4.34l-.14 1.01c-.03.02-.07.03-.1.05l-.09.06-.95-.38a.401.401 0 00-.5.17l-.85 1.48c-.1.17-.06.39.1.51l.8.63v.23l-.8.63a.39.39 0 00-.1.51l.85 1.48c.07.13.21.2.35.2.05 0 .1-.01.15-.03l.95-.37c.08.05.12.07.2.11l.15 1.01c.03.2.2.34.4.34h1.71c.2 0 .37-.15.4-.34l.15-1.01c.03-.02.07-.03.1-.05l.09-.06.95.38a.401.401 0 00.5-.17l.85-1.48a.39.39 0 00-.1-.51zM18 13.5c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM17 18H7V6h10v1h2V3c0-1.1-.9-2-2-2H7c-1.1 0-2 .9-2 2v18c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2v-4h-2v1zM7 3h10v1H7V3zm10 18H7v-1h10v1z">
                                </path>
                            </svg>
                        </div>
                        <span class="label_text">Projects</span>
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headerDropdown1"
                    data-bs-parent="#accordionMenu">
                    <div class="accordion-body">
                        <ul class="dropdown_menu_area">
                            <li>
                                <a href="<?=$url.'/../project-grid.php'?>">Project Grid</a>
                            </li>
                            <li>
                                <a href="<?=$url.'/../project-list.php'?>">Project List</a>
                            </li>
                            <li>
                                <a href="<?=$url.'/../project-overview.php'?>">Project Overview</a>
                            </li>
                            <li>
                                <a href="<?=$url.'/../project-create.php'?>">Create Project</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headerDropdown1">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        <div class="dashboard_icon">
                            <svg stroke="#333333" fill="#333333" stroke-width="0" viewBox="0 0 512 512" height="24"
                                width="24" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M139.61 35.5a12 12 0 0 0-17 0L58.93 98.81l-22.7-22.12a12 12 0 0 0-17 0L3.53 92.41a12 12 0 0 0 0 17l47.59 47.4a12.78 12.78 0 0 0 17.61 0l15.59-15.62L156.52 69a12.09 12.09 0 0 0 .09-17zm0 159.19a12 12 0 0 0-17 0l-63.68 63.72-22.7-22.1a12 12 0 0 0-17 0L3.53 252a12 12 0 0 0 0 17L51 316.5a12.77 12.77 0 0 0 17.6 0l15.7-15.69 72.2-72.22a12 12 0 0 0 .09-16.9zM64 368c-26.49 0-48.59 21.5-48.59 48S37.53 464 64 464a48 48 0 0 0 0-96zm432 16H208a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h288a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm0-320H208a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h288a16 16 0 0 0 16-16V80a16 16 0 0 0-16-16zm0 160H208a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h288a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16z">
                                </path>
                            </svg>
                        </div>
                        <span class="label_text">Tasks</span>
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headerDropdown1"
                    data-bs-parent="#accordionMenu">
                    <div class="accordion-body">
                        <ul class="dropdown_menu_area">
                            <li>
                                <a href="<?=$url.'/../task-list.php'?>">Task List</a>
                            </li>
                            <li>
                                <a href="<?=$url.'/../task-create.php'?>">Create Task</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headerDropdown1">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        <div class="dashboard_icon">
                            <svg stroke="#333333" fill="#333333" stroke-width="0" viewBox="0 0 24 24" height="20"
                                width="20" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </div>
                        <span class="label_text">Users</span>
                    </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headerDropdown1"
                    data-bs-parent="#accordionMenu">
                    <div class="accordion-body">
                        <ul class="dropdown_menu_area">
                            <li>
                                <a href="<?=$url.'/../user-grid.php'?>">Users Grid</a>
                            </li>
                            <li>
                                <a href="<?=$url.'/../user-list.php'?>">Users List</a>
                            </li>
                            <li>
                                <a href="<?=$url.'/../user-profile.php'?>">Users Profile</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2>
                    <a href="<?=$url.'/../anaytics.php'?>">
                        <div class="dashboard_icon">
                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.375 10.5C4.14294 10.5 3.92038 10.5922 3.75628 10.7563C3.59219 10.9204 3.5 11.1429 3.5 11.375V18.375C3.5 18.6071 3.59219 18.8296 3.75628 18.9937C3.92038 19.1578 4.14294 19.25 4.375 19.25C4.60706 19.25 4.82962 19.1578 4.99372 18.9937C5.15781 18.8296 5.25 18.6071 5.25 18.375V11.375C5.25 11.1429 5.15781 10.9204 4.99372 10.7563C4.82962 10.5922 4.60706 10.5 4.375 10.5ZM8.75 1.75C8.51794 1.75 8.29538 1.84219 8.13128 2.00628C7.96719 2.17038 7.875 2.39294 7.875 2.625V18.375C7.875 18.6071 7.96719 18.8296 8.13128 18.9937C8.29538 19.1578 8.51794 19.25 8.75 19.25C8.98206 19.25 9.20462 19.1578 9.36872 18.9937C9.53281 18.8296 9.625 18.6071 9.625 18.375V2.625C9.625 2.39294 9.53281 2.17038 9.36872 2.00628C9.20462 1.84219 8.98206 1.75 8.75 1.75ZM17.5 14C17.2679 14 17.0454 14.0922 16.8813 14.2563C16.7172 14.4204 16.625 14.6429 16.625 14.875V18.375C16.625 18.6071 16.7172 18.8296 16.8813 18.9937C17.0454 19.1578 17.2679 19.25 17.5 19.25C17.7321 19.25 17.9546 19.1578 18.1187 18.9937C18.2828 18.8296 18.375 18.6071 18.375 18.375V14.875C18.375 14.6429 18.2828 14.4204 18.1187 14.2563C17.9546 14.0922 17.7321 14 17.5 14ZM13.125 7C12.8929 7 12.6704 7.09219 12.5063 7.25628C12.3422 7.42038 12.25 7.64294 12.25 7.875V18.375C12.25 18.6071 12.3422 18.8296 12.5063 18.9937C12.6704 19.1578 12.8929 19.25 13.125 19.25C13.3571 19.25 13.5796 19.1578 13.7437 18.9937C13.9078 18.8296 14 18.6071 14 18.375V7.875C14 7.64294 13.9078 7.42038 13.7437 7.25628C13.5796 7.09219 13.3571 7 13.125 7Z"
                                    fill="#333333" />
                            </svg>
                        </div>
                        <span class="label_text">Analytics</span>
                    </a>
                </h2>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headerDropdown2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <div class="dashboard_icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.5 21H22.5V22.5H1.5V21Z" fill="#333333" />
                                <path
                                    d="M20.25 8.25005C20.4489 8.25005 20.6397 8.17103 20.7803 8.03038C20.921 7.88972 21 7.69896 21 7.50005V5.25005C20.9999 5.09591 20.9524 4.94554 20.8638 4.81939C20.7752 4.69325 20.65 4.59745 20.505 4.54505L12.255 1.54505C12.0902 1.48547 11.9098 1.48547 11.745 1.54505L3.495 4.54505C3.35005 4.59745 3.22476 4.69325 3.13619 4.81939C3.04762 4.94554 3.00007 5.09591 3 5.25005V7.50005C3 7.69896 3.07902 7.88972 3.21967 8.03038C3.36032 8.17103 3.55109 8.25005 3.75 8.25005H4.5V18H3V19.5H21V18H19.5V8.25005H20.25ZM4.5 5.77505L12 3.04505L19.5 5.77505V6.75005H4.5V5.77505ZM13.5 18H10.5V8.25005H13.5V18ZM6 8.25005H9V18H6V8.25005ZM18 18H15V8.25005H18V18Z"
                                    fill="#333333" />
                            </svg>
                        </div>
                        <span class="label_text">Finances</span>
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headerDropdown2"
                    data-bs-parent="#accordionMenu">
                    <div class="accordion-body">
                        <ul class="dropdown_menu_area">
                            <li class="dropdown_item_list">
                                <a href="#">Overview</a>
                            </li>
                            <li>
                                <a href="#">Balance</a>
                            </li>
                            <li>
                                <a href=""> Transfers </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headerDropdown1">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThird" aria-expanded="false" aria-controls="collapseThird">
                        <div class="dashboard_icon">
                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.5 11.9167V14.0834H23.8333V11.9167H19.5ZM17.3333 19.0775C18.3733 19.8467 19.7275 20.865 20.8 21.6667C21.2333 21.0925 21.6666 20.5075 22.1 19.9334C21.0275 19.1317 19.6733 18.1134 18.6333 17.3334C18.2 17.9184 17.7666 18.5034 17.3333 19.0775ZM22.1 6.06671C21.6666 5.49254 21.2333 4.90754 20.8 4.33337C19.7275 5.13504 18.3733 6.15337 17.3333 6.93337C17.7666 7.50754 18.2 8.09254 18.6333 8.66671C19.6733 7.88671 21.0275 6.87921 22.1 6.06671ZM4.33329 9.75004C3.14163 9.75004 2.16663 10.725 2.16663 11.9167V14.0834C2.16663 15.275 3.14163 16.25 4.33329 16.25H5.41663V20.5834H7.58329V16.25H8.66663L14.0833 19.5V6.50004L8.66663 9.75004H4.33329ZM9.78246 11.6025L11.9166 10.3242V15.6759L9.78246 14.3975L9.26246 14.0834H4.33329V11.9167H9.26246L9.78246 11.6025ZM16.7916 13C16.7916 11.5592 16.1633 10.2592 15.1666 9.37087V16.6184C16.1633 15.7409 16.7916 14.4409 16.7916 13Z"
                                    fill="#333333" />
                            </svg>
                        </div>
                        <span class="label_text">Marketing</span>
                    </button>
                </h2>
                <div id="collapseThird" class="accordion-collapse collapse" aria-labelledby="headerDropdown1"
                    data-bs-parent="#accordionMenu">
                    <div class="accordion-body">
                        <ul class="dropdown_menu_area">
                            <li><a href="#">Overview </a></li>
                            <li><a href="#">Campaign </a></li>
                            <li><a href="#"> Social Media</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2>
                    <a href="#">
                        <div class="dashboard_icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 15L15 9" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M9.5 10C9.77614 10 10 9.77614 10 9.5C10 9.22386 9.77614 9 9.5 9C9.22386 9 9 9.22386 9 9.5C9 9.77614 9.22386 10 9.5 10Z"
                                    fill="#333333" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M14.5 15C14.7761 15 15 14.7761 15 14.5C15 14.2239 14.7761 14 14.5 14C14.2239 14 14 14.2239 14 14.5C14 14.7761 14.2239 15 14.5 15Z" fill="#333333" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M4.99997 7.19997C4.99997 6.6165 5.23176 6.05692 5.64434 5.64434C6.05692 5.23176 6.6165 4.99997 7.19997 4.99997H8.19997C8.78087 4.99964 9.33806 4.76957 9.74997 4.35997L10.45 3.65997C10.6544 3.45437 10.8975 3.29121 11.1652 3.17988C11.4329 3.06855 11.72 3.01123 12.01 3.01123C12.2999 3.01123 12.587 3.06855 12.8547 3.17988C13.1225 3.29121 13.3655 3.45437 13.57 3.65997L14.27 4.35997C14.6819 4.76957 15.2391 4.99964 15.82 4.99997H16.82C17.4034 4.99997 17.963 5.23176 18.3756 5.64434C18.7882 6.05692 19.02 6.6165 19.02 7.19997V8.19997C19.0203 8.78087 19.2504 9.33806 19.66 9.74997L20.36 10.45C20.5656 10.6544 20.7287 10.8975 20.8401 11.1652C20.9514 11.4329 21.0087 11.72 21.0087 12.01C21.0087 12.2999 20.9514 12.587 20.8401 12.8547C20.7287 13.1225 20.5656 13.3655 20.36 13.57L19.66 14.27C19.2504 14.6819 19.0203 15.2391 19.02 15.82V16.82C19.02 17.4034 18.7882 17.963 18.3756 18.3756C17.963 18.7882 17.4034 19.02 16.82 19.02H15.82C15.2391 19.0203 14.6819 19.2504 14.27 19.66L13.57 20.36C13.3655 20.5656 13.1225 20.7287 12.8547 20.8401C12.587 20.9514 12.2999 21.0087 12.01 21.0087C11.72 21.0087 11.4329 20.9514 11.1652 20.8401C10.8975 20.7287 10.6544 20.5656 10.45 20.36L9.74997 19.66C9.33806 19.2504 8.78087 19.0203 8.19997 19.02H7.19997C6.6165 19.02 6.05692 18.7882 5.64434 18.3756C5.23176 17.963 4.99997 17.4034 4.99997 16.82V15.82C4.99964 15.2391 4.76957 14.6819 4.35997 14.27L3.65997 13.57C3.45437 13.3655 3.29121 13.1225 3.17988 12.8547C3.06855 12.587 3.01123 12.2999 3.01123 12.01C3.01123 11.72 3.06855 11.4329 3.17988 11.1652C3.29121 10.8975 3.45437 10.6544 3.65997 10.45L4.35997 9.74997C4.76957 9.33806 4.99964 8.78087 4.99997 8.19997V7.19997" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <span class="label_text">Discount</span>
                    </a>
                </h2>
            </div>

            <div class="accordion-item">
                <h2>
                    <a href="#">
                        <div class="dashboard_icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18.36 9L18.96 12H5.04L5.64 9H18.36ZM20 4H4V6H20V4ZM20 7H4L3 12V14H4V20H14V14H18V20H20V14H21V12L20 7ZM6 18V14H12V18H6Z"
                                    fill="#333333" />
                            </svg>
                        </div>
                        <span class="label_text">Store Front</span>
                    </a>
                </h2>
            </div>
            <div class="accordion-item">
                <h2>
                    <a href="<?=$url.'/../company-list.php'?>" class="sidebar_active_menu">
                        <div class="dashboard_icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.25 0H1.75C1.28587 0 0.840752 0.167393 0.512563 0.465353C0.184374 0.763314 0 1.16744 0 1.58882V23.8322C0 24.2536 0.184374 24.6577 0.512563 24.9557C0.840752 25.2537 1.28587 25.4211 1.75 25.4211H19.25C19.7141 25.4211 20.1592 25.2537 20.4874 24.9557C20.8156 24.6577 21 24.2536 21 23.8322V1.58882C21 1.16744 20.8156 0.763314 20.4874 0.465353C20.1592 0.167393 19.7141 0 19.25 0ZM6.125 19.0658H4.375V17.477H6.125V19.0658ZM6.125 15.8882H4.375V14.2993H6.125V15.8882ZM6.125 12.7105H4.375V11.1217H6.125V12.7105ZM6.125 9.53289H4.375V7.94408H6.125V9.53289ZM6.125 6.35526H4.375V4.76645H6.125V6.35526ZM16.625 19.0658H7.875V17.477H16.625V19.0658ZM16.625 15.8882H7.875V14.2993H16.625V15.8882ZM16.625 12.7105H7.875V11.1217H16.625V12.7105ZM16.625 9.53289H7.875V7.94408H16.625V9.53289ZM16.625 6.35526H7.875V4.76645H16.625V6.35526Z"
                                    fill="#9FA4A6" />
                            </svg>
                        </div>
                        <span class="label_text">Company Lists</span>
                    </a>
                </h2>
            </div>
            <div class="accordion-item">
                <h2>
                    <a href="<?=$url.'/../user-list.php'?>">
                        <div class="dashboard_icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_84_759)">
                                    <path
                                        d="M8.75 10.5C11.5117 10.5 13.75 8.14939 13.75 5.25C13.75 2.35061 11.5117 0 8.75 0C5.98828 0 3.75 2.35061 3.75 5.25C3.75 8.14939 5.98828 10.5 8.75 10.5ZM10.7305 12.4688H6.76953C3.03008 12.4688 0 15.6516 0 19.5768C0 20.3643 0.60625 21 1.35391 21H16.1445C16.8945 21 17.5 20.3643 17.5 19.5768C17.5 15.6516 14.4688 12.4688 10.7305 12.4688ZM18.7148 13.125H15.8301C17.625 14.6713 18.75 16.9846 18.75 19.5768C18.75 20.1018 18.6016 20.5857 18.3594 21H23.75C24.4414 21 25 20.4094 25 19.6506C25 16.0617 22.2031 13.125 18.7148 13.125ZM16.875 10.5C19.293 10.5 21.25 8.44512 21.25 5.90625C21.25 3.36738 19.293 1.3125 16.875 1.3125C15.8941 1.3125 14.9984 1.66339 14.2688 2.23576C14.7188 3.14303 15 4.15898 15 5.25C15 6.70687 14.534 8.0448 13.766 9.13459C14.5586 9.975 15.6562 10.5 16.875 10.5Z"
                                        fill="#9FA4A6" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_84_759">
                                        <rect width="25" height="21" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <span class="label_text">User Lists</span>
                    </a>
                </h2>
            </div>
            <div class="accordion-item">
                <h2>
                    <a href="<?=$url.'/../transaction-list.php'?>">
                        <div class="dashboard_icon">
                            <svg width="24" height="24" viewBox="0 0 26 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.64286 0C3.41149 0 2.23057 0.500445 1.35986 1.39124C0.489157 2.28204 0 3.49022 0 4.75V5.7H26V4.75C26 3.49022 25.5108 2.28204 24.6401 1.39124C23.7694 0.500445 22.5885 0 21.3571 0H4.64286ZM26 7.6H0V14.25C0 15.5098 0.489157 16.718 1.35986 17.6088C2.23057 18.4996 3.41149 19 4.64286 19H21.3571C22.5885 19 23.7694 18.4996 24.6401 17.6088C25.5108 16.718 26 15.5098 26 14.25V7.6ZM17.6429 13.3H21.3571C21.6034 13.3 21.8396 13.4001 22.0137 13.5782C22.1879 13.7564 22.2857 13.998 22.2857 14.25C22.2857 14.502 22.1879 14.7436 22.0137 14.9218C21.8396 15.0999 21.6034 15.2 21.3571 15.2H17.6429C17.3966 15.2 17.1604 15.0999 16.9863 14.9218C16.8121 14.7436 16.7143 14.502 16.7143 14.25C16.7143 13.998 16.8121 13.7564 16.9863 13.5782C17.1604 13.4001 17.3966 13.3 17.6429 13.3Z"
                                    fill="#9FA4A6" />
                            </svg>
                        </div>
                        <span class="label_text">Transactions</span>
                    </a>
                </h2>
            </div>
            <div class="accordion-item">
                <h2>
                    <a href="<?=$url.'/../pending-list.php'?>">
                        <div class="dashboard_icon">
                            <svg width="24" height="24" viewBox="0 0 29 29" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M26.2812 15.2672V6.28328C26.2812 5.96281 26.1539 5.65547 25.9273 5.42886C25.7007 5.20226 25.3934 5.07495 25.0729 5.07495H3.92708C3.60661 5.07495 3.29927 5.20226 3.07266 5.42886C2.84606 5.65547 2.71875 5.96281 2.71875 6.28328V22.7166C2.71875 23.0371 2.84606 23.3444 3.07266 23.571C3.29927 23.7976 3.60661 23.925 3.92708 23.925H20.3997M2.71875 9.4467H26.2812H2.71875Z" fill="#9FA4A6" />
                                <path d="M26.2813 15.2672V6.28328C26.2813 5.96281 26.1539 5.65547 25.9273 5.42886C25.7007 5.20226 25.3934 5.07495 25.0729 5.07495H3.92708C3.60661 5.07495 3.29927 5.20226 3.07266 5.42886C2.84606 5.65547 2.71875 5.96281 2.71875 6.28328V22.7166C2.71875 23.0371 2.84606 23.3444 3.07266 23.571C3.29927 23.7976 3.60661 23.925 3.92708 23.925H20.3997M2.71875 9.4467H26.2813" stroke="black" stroke-opacity="0.2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M22.649 25.1333C23.908 24.7485 25.029 24.0081 25.8771 23.0012C26.7253 21.9944 27.2644 20.7639 27.4298 19.4578C27.5111 18.2973 27.5042 17.1324 27.4092 15.973C27.3965 15.7903 27.3162 15.6189 27.1839 15.4922C27.0517 15.3655 26.877 15.2927 26.6939 15.2878C25.3643 15.3461 24.0639 14.8863 23.0665 14.0052C22.9552 13.8957 22.8054 13.8343 22.6493 13.8343C22.4932 13.8343 22.3433 13.8957 22.2321 14.0052C21.2347 14.8863 19.9343 15.3461 18.6047 15.2878C18.4216 15.2927 18.2469 15.3655 18.1146 15.4922C17.9824 15.6189 17.9021 15.7903 17.8894 15.973C17.7944 17.1324 17.7875 18.2973 17.8688 19.4578C18.0341 20.7638 18.5732 21.9942 19.4212 23.0011C20.2692 24.008 21.3901 24.7484 22.649 25.1333ZM22.649 25.1333V13.8336V25.1333Z" fill="#9FA4A6" />
                                <path d="M22.649 25.1333V13.8336M22.649 25.1333C23.908 24.7485 25.029 24.0081 25.8771 23.0012C26.7253 21.9944 27.2644 20.7639 27.4298 19.4578C27.5111 18.2973 27.5042 17.1324 27.4092 15.973C27.3965 15.7903 27.3162 15.6189 27.1839 15.4922C27.0517 15.3655 26.877 15.2927 26.6939 15.2878C25.3643 15.3461 24.0639 14.8863 23.0665 14.0052C22.9552 13.8957 22.8054 13.8343 22.6493 13.8343C22.4932 13.8343 22.3433 13.8957 22.2321 14.0052C21.2347 14.8863 19.9343 15.3461 18.6047 15.2878C18.4216 15.2927 18.2469 15.3655 18.1146 15.4922C17.9824 15.6189 17.9021 15.7903 17.8894 15.973C17.7944 17.1324 17.7875 18.2973 17.8688 19.4578C18.0341 20.7638 18.5732 21.9942 19.4212 23.0011C20.2692 24.008 21.3901 24.7484 22.649 25.1333V25.1333Z" stroke="black" stroke-opacity="0.2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <span class="label_text">Pending Transactions</span>
                    </a>
                </h2>
            </div>
        </div>
    </section>
    <div class="overlay sidebar_overlay" id="sidebarOverlay"></div>
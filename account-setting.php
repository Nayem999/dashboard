<?php require_once dirname(__FILE__) . '/header.php'; ?>

<main class="main_content_area">
  <!-- Add Product Section  -->
  <section class="add_product_wrapper">
    <div class="product_pagination_area">
      <a href="#">
        <span class="page_title">Account</span>
      </a>
    </div>
    <ul class="nav nav-pills mt-3 mb-3" id="pills-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <button
          class="nav-link active"
          id="pills-general-tab"
          data-bs-toggle="pill"
          data-bs-target="#pills-general"
          type="button"
          role="tab"
          aria-controls="pills-general"
          aria-selected="true"
        >
          <svg
            width="18"
            height="18"
            viewBox="0 0 18 18"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g clip-path="url(#clip0_259_167)">
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M12 6.75C12 7.54565 11.6839 8.30871 11.1213 8.87132C10.5587 9.43393 9.79565 9.75 9 9.75C8.20435 9.75 7.44129 9.43393 6.87868 8.87132C6.31607 8.30871 6 7.54565 6 6.75C6 5.95435 6.31607 5.19129 6.87868 4.62868C7.44129 4.06607 8.20435 3.75 9 3.75C9.79565 3.75 10.5587 4.06607 11.1213 4.62868C11.6839 5.19129 12 5.95435 12 6.75ZM10.5 6.75C10.5 7.14783 10.342 7.52936 10.0607 7.81066C9.77936 8.09197 9.39782 8.25 9 8.25C8.60218 8.25 8.22064 8.09197 7.93934 7.81066C7.65804 7.52936 7.5 7.14783 7.5 6.75C7.5 6.35218 7.65804 5.97064 7.93934 5.68934C8.22064 5.40804 8.60218 5.25 9 5.25C9.39782 5.25 9.77936 5.40804 10.0607 5.68934C10.342 5.97064 10.5 6.35218 10.5 6.75Z"
                fill="#333333"
              />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M9 0.75C4.44375 0.75 0.75 4.44375 0.75 9C0.75 13.5562 4.44375 17.25 9 17.25C13.5562 17.25 17.25 13.5562 17.25 9C17.25 4.44375 13.5562 0.75 9 0.75ZM2.25 9C2.25 10.5675 2.78475 12.0105 3.681 13.1565C4.31042 12.3299 5.12243 11.6601 6.05357 11.1992C6.98472 10.7384 8.00981 10.4991 9.04875 10.5C10.0742 10.499 11.0864 10.7321 12.0082 11.1816C12.93 11.631 13.737 12.2849 14.3678 13.0935C15.0176 12.2412 15.4551 11.2464 15.6442 10.1914C15.8332 9.13647 15.7683 8.05165 15.4549 7.02674C15.1414 6.00183 14.5884 5.06629 13.8416 4.29753C13.0948 3.52877 12.1757 2.94889 11.1603 2.60588C10.1449 2.26287 9.0624 2.16658 8.00239 2.32498C6.94239 2.48338 5.93534 2.89192 5.06458 3.51679C4.19381 4.14166 3.48436 4.9649 2.99492 5.9184C2.50549 6.87189 2.25014 7.92823 2.25 9ZM9 15.75C7.45046 15.7523 5.9477 15.2193 4.746 14.241C5.2297 13.5486 5.8735 12.9832 6.62264 12.593C7.37179 12.2028 8.20409 11.9994 9.04875 12C9.88287 11.9993 10.7051 12.1977 11.4472 12.5786C12.1893 12.9595 12.8298 13.5119 13.3155 14.19C12.1045 15.2 10.5769 15.7522 9 15.75Z"
                fill="#333333"
              />
            </g>
            <defs>
              <clipPath id="clip0_259_167">
                <rect width="18" height="18" fill="#333333" />
              </clipPath>
            </defs>
          </svg>
          <span>General</span>
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button
          class="nav-link"
          id="pills-billing-tab"
          data-bs-toggle="pill"
          data-bs-target="#pills-billing"
          type="button"
          role="tab"
          aria-controls="pills-billing"
          aria-selected="false"
        >
          <svg
            width="18"
            height="18"
            viewBox="0 0 18 18"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M6.75 5.25H11.25M3.75 2.25C3.75 2.05109 3.82902 1.86032 3.96967 1.71967C4.11032 1.57902 4.30109 1.5 4.5 1.5H13.5C13.6989 1.5 13.8897 1.57902 14.0303 1.71967C14.171 1.86032 14.25 2.05109 14.25 2.25V16.5L11.625 14.625L9 16.5L6.375 14.625L3.75 16.5V2.25ZM6.75 8.25H11.25H6.75ZM6.75 11.25H11.25H6.75Z"
              stroke="#333333"
              stroke-width="1.5"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
          <span>Billing</span>
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button
          class="nav-link"
          id="pills-notification-tab"
          data-bs-toggle="pill"
          data-bs-target="#pills-notification"
          type="button"
          role="tab"
          aria-controls="pills-notification"
          aria-selected="false"
        >
          <svg
            width="20"
            height="20"
            viewBox="0 0 20 20"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M8.45512 2.7066C8.57964 2.39886 8.79321 2.13532 9.06848 1.94975C9.34374 1.76418 9.66815 1.66504 10.0001 1.66504C10.3321 1.66504 10.6565 1.76418 10.9318 1.94975C11.207 2.13532 11.4206 2.39886 11.5451 2.7066C12.7774 3.04551 13.8644 3.77957 14.6391 4.79605C15.4138 5.81253 15.8334 7.05522 15.8335 8.33327V12.2474L17.3601 14.5374C17.4439 14.6629 17.492 14.8088 17.4993 14.9595C17.5066 15.1102 17.4729 15.26 17.4017 15.3931C17.3305 15.5261 17.2246 15.6373 17.0951 15.7148C16.9657 15.7924 16.8177 15.8333 16.6668 15.8333H12.8876C12.7873 16.5275 12.4402 17.1624 11.9099 17.6216C11.3796 18.0807 10.7016 18.3335 10.0001 18.3335C9.29866 18.3335 8.62067 18.0807 8.09037 17.6216C7.56007 17.1624 7.21296 16.5275 7.11262 15.8333H3.33346C3.18259 15.8333 3.03454 15.7924 2.90512 15.7148C2.77569 15.6373 2.66974 15.5261 2.59856 15.3931C2.52739 15.26 2.49366 15.1102 2.50098 14.9595C2.5083 14.8088 2.55639 14.6629 2.64012 14.5374L4.16679 12.2474V8.33327C4.16679 5.6466 5.98346 3.38327 8.45512 2.7066ZM8.82179 15.8333C8.90786 16.0771 9.06745 16.2883 9.27856 16.4377C9.48968 16.5871 9.74193 16.6673 10.0005 16.6673C10.2592 16.6673 10.5114 16.5871 10.7225 16.4377C10.9336 16.2883 11.0932 16.0771 11.1793 15.8333H8.82096H8.82179ZM10.0001 4.1666C8.89506 4.1666 7.83525 4.60559 7.05385 5.38699C6.27245 6.16839 5.83346 7.2282 5.83346 8.33327V12.4999C5.8335 12.6645 5.78478 12.8255 5.69346 12.9624L4.89096 14.1666H15.1085L14.306 12.9624C14.2149 12.8254 14.1665 12.6645 14.1668 12.4999V8.33327C14.1668 7.2282 13.7278 6.16839 12.9464 5.38699C12.165 4.60559 11.1052 4.1666 10.0001 4.1666Z"
              fill="#333333"
            />
          </svg>
          <span>Notifications</span>
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button
          class="nav-link"
          id="pills-social-links-tab"
          data-bs-toggle="pill"
          data-bs-target="#pills-social-links"
          type="button"
          role="tab"
          aria-controls="pills-social-links"
          aria-selected="false"
        >
          <svg
            width="16"
            height="16"
            viewBox="0 0 16 16"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M11.9999 10.0002C11.4761 10.0006 10.9735 10.2064 10.5999 10.5735L5.33319 8.22682V7.78016L10.5999 5.42682C10.9297 5.75017 11.3614 5.94936 11.8215 5.99057C12.2815 6.03177 12.7417 5.91245 13.1238 5.65287C13.5059 5.39329 13.7863 5.00945 13.9175 4.56655C14.0487 4.12365 14.0225 3.64899 13.8435 3.22319C13.6644 2.7974 13.3434 2.44671 12.9351 2.2307C12.5268 2.01469 12.0563 1.94667 11.6036 2.03819C11.1508 2.12971 10.7437 2.37514 10.4514 2.73278C10.159 3.09043 9.99949 3.53824 9.99986 4.00016V4.22682L4.73319 6.57349C4.4521 6.29733 4.09569 6.11035 3.7087 6.03604C3.32172 5.96173 2.9214 6.00339 2.55801 6.1558C2.19462 6.30821 1.88435 6.56457 1.66615 6.8927C1.44795 7.22083 1.33154 7.6061 1.33154 8.00016C1.33154 8.39421 1.44795 8.77949 1.66615 9.10762C1.88435 9.43575 2.19462 9.69211 2.55801 9.84451C2.9214 9.99692 3.32172 10.0386 3.7087 9.96427C4.09569 9.88996 4.4521 9.70299 4.73319 9.42682L9.99986 11.7802V12.0002C9.99986 12.3957 10.1172 12.7824 10.3369 13.1113C10.5567 13.4402 10.869 13.6965 11.2345 13.8479C11.5999 13.9993 12.0021 14.0389 12.39 13.9617C12.778 13.8846 13.1344 13.6941 13.4141 13.4144C13.6938 13.1347 13.8843 12.7783 13.9614 12.3903C14.0386 12.0024 13.999 11.6002 13.8476 11.2348C13.6962 10.8693 13.4399 10.557 13.111 10.3372C12.7821 10.1175 12.3954 10.0002 11.9999 10.0002Z"
              fill="#333333"
            />
          </svg>

          <span>Social Links</span>
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button
          class="nav-link"
          id="pills-change-password-tab"
          data-bs-toggle="pill"
          data-bs-target="#pills-change-password"
          type="button"
          role="tab"
          aria-controls="pills-change-password"
          aria-selected="false"
        >
          <svg
            width="18"
            height="18"
            viewBox="0 0 18 18"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M13.5 6H15C15.1989 6 15.3897 6.07902 15.5303 6.21967C15.671 6.36032 15.75 6.55109 15.75 6.75V15.75C15.75 15.9489 15.671 16.1397 15.5303 16.2803C15.3897 16.421 15.1989 16.5 15 16.5H3C2.80109 16.5 2.61032 16.421 2.46967 16.2803C2.32902 16.1397 2.25 15.9489 2.25 15.75V6.75C2.25 6.55109 2.32902 6.36032 2.46967 6.21967C2.61032 6.07902 2.80109 6 3 6H4.5V5.25C4.5 4.05653 4.97411 2.91193 5.81802 2.06802C6.66193 1.22411 7.80653 0.75 9 0.75C10.1935 0.75 11.3381 1.22411 12.182 2.06802C13.0259 2.91193 13.5 4.05653 13.5 5.25V6ZM3.75 7.5V15H14.25V7.5H3.75ZM8.25 10.5H9.75V12H8.25V10.5ZM5.25 10.5H6.75V12H5.25V10.5ZM11.25 10.5H12.75V12H11.25V10.5ZM12 6V5.25C12 4.45435 11.6839 3.69129 11.1213 3.12868C10.5587 2.56607 9.79565 2.25 9 2.25C8.20435 2.25 7.44129 2.56607 6.87868 3.12868C6.31607 3.69129 6 4.45435 6 5.25V6H12Z"
              fill="#333333"
            />
          </svg>

          <span>Change Password</span>
        </button>
      </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div
        class="tab-pane fade show active"
        id="pills-general"
        role="tabpanel"
        aria-labelledby="pills-general-tab"
      >
        <form action="" class="form_area">
          <div class="product_outer_grid13 product_outer_exchange_grid13">
            <div class="product_outer_left_wrapper">
              <div class="production_area dashboard_card">
                <div class="profile_user_area">
                  <div class="user_img_area">
                    <img
                      src="assets/images/others/profile_img.png"
                      alt="prifle img"
                    />
                  </div>
                  <div class="profile_description">
                    <h5>Allowed *.jpeg, *.jpg, *.png, *.gif</h5>
                    <h5>max size of 3.1 MB</h5>
                  </div>

                  <div class="form-check form-switch">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      id="flexSwitchCheckChecked"
                      checked
                    />
                    <label
                      class="form-check-label"
                      for="flexSwitchCheckChecked"
                      >Public Profile</label
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="product_outer_right_wrapper mt-0">
              <div class="production_area dashboard_card">
                <div class="row">
                  <div class="col-xl-6">
                    <div class="input_row mt-3">
                      <label for="">Name</label>
                      <input
                        type="text"
                        placeholder="Enter Name"
                        class="input_field"
                      />
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="input_row mt-3">
                      <label for="">Email Address</label>
                      <input
                        type="email"
                        placeholder="Enter Email Address"
                        class="input_field"
                      />
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="input_row mt-3">
                      <label for="">Phone Number</label>
                      <input
                        type="number"
                        placeholder="Enter Phone Number"
                        class="input_field"
                      />
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="input_row mt-3">
                      <label for="">Address</label>
                      <input
                        type="text"
                        placeholder="Enter Address"
                        class="input_field"
                      />
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="input_row mt-3">
                      <label for="">Country</label>
                      <input
                        type="text"
                        placeholder="Enter Country"
                        class="input_field"
                      />
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="input_row mt-3">
                      <label for="">State/Region</label>
                      <input
                        type="text"
                        placeholder="Enter State/Region"
                        class="input_field"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="add_product_area_btn text-end">
            <button type="button" class="add_product_btn">
              Save Changes
            </button>
          </div>
        </form>
      </div>
      <div
        class="tab-pane fade"
        id="pills-billing"
        role="tabpanel"
        aria-labelledby="pills-billing-tab"
      >
        <h4>Billing</h4>
        <div class="billing_card_grid">
          <div
            class="bliing_card_item"
            style="background-image: url(assets/images/account/cardBG3.png)"
          >
            <div class="user_info_area">
              <h4>Your Card</h4>
              <h3><b>Mr. Simon Sinek</b></h3>
            </div>
            <div class="card_number_area d-flex-between">
              <h4>**** **** **** 1289</h4>
              <h4><b>09/25</b></h4>
            </div>
            <img
              src="assets/images/account/mc_symbol.svg"
              alt="card icon"
              class="card_icon"
            />
          </div>
          <div
            class="bliing_card_item"
            style="background-image: url(assets/images/account/cardBG2.png)"
          >
            <div class="user_info_area">
              <h4>Current Subscription Plan</h4>
              <h3><b>$25.00</b></h3>
              <h4>Company Plus</h4>
            </div>
            <div class="card_number_area d-flex-between">
              <div>
                <a href="#" class="change_btn">Change Plan</a>
              </div>
            </div>
          </div>
          <div
            class="bliing_card_item"
            style="background-image: url(assets/images/account/cardBG2.png)"
          >
            <div class="user_info_area">
              <h4>Next Subscription Plan</h4>
              <h3><b>$50.00</b></h3>
              <h4>Ultimate</h4>
            </div>
            <div class="card_number_area d-flex-between">
              <div>
                <a href="#" class="change_btn">Upgrade</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Product Table Section  -->
        <div class="product_table_wrapper dashboard_card mt-30">
          <div class="header_area">
            <h2 class="page_title">Payment History</h2>
          </div>
          <div class="product_table_area transition_table_area mt-0">
            <div class="product_inner_area">
              <table class="table">
                <thead>
                  <tr>
                    <td>
                      <h4>Date</h4>
                    </td>
                    <td>
                      <h4>Amount</h4>
                    </td>
                    <td>
                      <h4>Status</h4>
                    </td>
                    <td>
                      <h4>Payment Method</h4>
                    </td>
                    <td>
                      <h4>Actions</h4>
                    </td>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td>
                      <div>
                        <h4>29 Jan 2022</h4>
                        <h5>4:59 PM</h5>
                      </div>
                    </td>
                    <td>
                      <div>
                        <h4>$811.45</h4>
                      </div>
                    </td>
                    <td>
                      <div>
                        <h5 class="status progress_status">In progress</h5>
                      </div>
                    </td>
                    <td>
                      <div>
                        <h4>Visa1289</h4>
                      </div>
                    </td>
                    <td>
                      <div class="dropdown dot_dropdown_area">
                        <button
                          class="dropdown-toggle"
                          type="button"
                          id="dropdownMenuButton1"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        >
                          <img
                            src="assets/images/icon/three_dot.svg"
                            alt="three dot"
                          />
                        </button>
                        <ul
                          class="dropdown-menu"
                          aria-labelledby="dropdownMenuButton1"
                        >
                          <li>
                            <a class="dropdown-item" href="#"
                              >Dropdown Option 1</a
                            >
                          </li>
                          <li>
                            <a class="dropdown-item" href="#"
                              >Dropdown Option 2</a
                            >
                          </li>
                          <li>
                            <a class="dropdown-item" href="#"
                              >Dropdown Option 3</a
                            >
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div>
                        <h4>29 Jan 2022</h4>
                        <h5>4:59 PM</h5>
                      </div>
                    </td>
                    <td>
                      <div>
                        <h4>$811.45</h4>
                      </div>
                    </td>
                    <td>
                      <div>
                        <h5 class="status complete_status">Verified</h5>
                      </div>
                    </td>
                    <td>
                      <div>
                        <h4>Visa1289</h4>
                      </div>
                    </td>
                    <td>
                      <div class="dropdown dot_dropdown_area">
                        <button
                          class="dropdown-toggle"
                          type="button"
                          id="dropdownMenuButton1"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        >
                          <img
                            src="assets/images/icon/three_dot.svg"
                            alt="three dot"
                          />
                        </button>
                        <ul
                          class="dropdown-menu"
                          aria-labelledby="dropdownMenuButton1"
                        >
                          <li>
                            <a class="dropdown-item" href="#"
                              >Dropdown Option 1</a
                            >
                          </li>
                          <li>
                            <a class="dropdown-item" href="#"
                              >Dropdown Option 2</a
                            >
                          </li>
                          <li>
                            <a class="dropdown-item" href="#"
                              >Dropdown Option 3</a
                            >
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div>
                        <h4>29 Jan 2022</h4>
                        <h5>4:59 PM</h5>
                      </div>
                    </td>
                    <td>
                      <div>
                        <h4>$811.45</h4>
                      </div>
                    </td>
                    <td>
                      <div>
                        <h5 class="status progress_status">In progress</h5>
                      </div>
                    </td>
                    <td>
                      <div>
                        <h4>Visa1289</h4>
                      </div>
                    </td>
                    <td>
                      <div class="dropdown dot_dropdown_area">
                        <button
                          class="dropdown-toggle"
                          type="button"
                          id="dropdownMenuButton1"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        >
                          <img
                            src="assets/images/icon/three_dot.svg"
                            alt="three dot"
                          />
                        </button>
                        <ul
                          class="dropdown-menu"
                          aria-labelledby="dropdownMenuButton1"
                        >
                          <li>
                            <a class="dropdown-item" href="#"
                              >Dropdown Option 1</a
                            >
                          </li>
                          <li>
                            <a class="dropdown-item" href="#"
                              >Dropdown Option 2</a
                            >
                          </li>
                          <li>
                            <a class="dropdown-item" href="#"
                              >Dropdown Option 3</a
                            >
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div>
                        <h4>29 Jan 2022</h4>
                        <h5>4:59 PM</h5>
                      </div>
                    </td>
                    <td>
                      <div>
                        <h4>$811.45</h4>
                      </div>
                    </td>
                    <td>
                      <div>
                        <h5 class="status complete_status">Verified</h5>
                      </div>
                    </td>
                    <td>
                      <div>
                        <h4>Visa1289</h4>
                      </div>
                    </td>
                    <td>
                      <div class="dropdown dot_dropdown_area">
                        <button
                          class="dropdown-toggle"
                          type="button"
                          id="dropdownMenuButton1"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        >
                          <img
                            src="assets/images/icon/three_dot.svg"
                            alt="three dot"
                          />
                        </button>
                        <ul
                          class="dropdown-menu"
                          aria-labelledby="dropdownMenuButton1"
                        >
                          <li>
                            <a class="dropdown-item" href="#"
                              >Dropdown Option 1</a
                            >
                          </li>
                          <li>
                            <a class="dropdown-item" href="#"
                              >Dropdown Option 2</a
                            >
                          </li>
                          <li>
                            <a class="dropdown-item" href="#"
                              >Dropdown Option 3</a
                            >
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div>
                        <h4>29 Jan 2022</h4>
                        <h5>4:59 PM</h5>
                      </div>
                    </td>
                    <td>
                      <div>
                        <h4>$811.45</h4>
                      </div>
                    </td>
                    <td>
                      <div>
                        <h5 class="status progress_status">In progress</h5>
                      </div>
                    </td>
                    <td>
                      <div>
                        <h4>Visa1289</h4>
                      </div>
                    </td>
                    <td>
                      <div class="dropdown dot_dropdown_area">
                        <button
                          class="dropdown-toggle"
                          type="button"
                          id="dropdownMenuButton1"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        >
                          <img
                            src="assets/images/icon/three_dot.svg"
                            alt="three dot"
                          />
                        </button>
                        <ul
                          class="dropdown-menu"
                          aria-labelledby="dropdownMenuButton1"
                        >
                          <li>
                            <a class="dropdown-item" href="#"
                              >Dropdown Option 1</a
                            >
                          </li>
                          <li>
                            <a class="dropdown-item" href="#"
                              >Dropdown Option 2</a
                            >
                          </li>
                          <li>
                            <a class="dropdown-item" href="#"
                              >Dropdown Option 3</a
                            >
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div>
                        <h4>29 Jan 2022</h4>
                        <h5>4:59 PM</h5>
                      </div>
                    </td>
                    <td>
                      <div>
                        <h4>$811.45</h4>
                      </div>
                    </td>
                    <td>
                      <div>
                        <h5 class="status complete_status">Verified</h5>
                      </div>
                    </td>
                    <td>
                      <div>
                        <h4>Visa1289</h4>
                      </div>
                    </td>
                    <td>
                      <div class="dropdown dot_dropdown_area">
                        <button
                          class="dropdown-toggle"
                          type="button"
                          id="dropdownMenuButton1"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        >
                          <img
                            src="assets/images/icon/three_dot.svg"
                            alt="three dot"
                          />
                        </button>
                        <ul
                          class="dropdown-menu"
                          aria-labelledby="dropdownMenuButton1"
                        >
                          <li>
                            <a class="dropdown-item" href="#"
                              >Dropdown Option 1</a
                            >
                          </li>
                          <li>
                            <a class="dropdown-item" href="#"
                              >Dropdown Option 2</a
                            >
                          </li>
                          <li>
                            <a class="dropdown-item" href="#"
                              >Dropdown Option 3</a
                            >
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div>
                        <h4>29 Jan 2022</h4>
                        <h5>4:59 PM</h5>
                      </div>
                    </td>
                    <td>
                      <div>
                        <h4>$811.45</h4>
                      </div>
                    </td>
                    <td>
                      <div>
                        <h5 class="status progress_status">In progress</h5>
                      </div>
                    </td>
                    <td>
                      <div>
                        <h4>Visa1289</h4>
                      </div>
                    </td>
                    <td>
                      <div class="dropdown dot_dropdown_area">
                        <button
                          class="dropdown-toggle"
                          type="button"
                          id="dropdownMenuButton1"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        >
                          <img
                            src="assets/images/icon/three_dot.svg"
                            alt="three dot"
                          />
                        </button>
                        <ul
                          class="dropdown-menu"
                          aria-labelledby="dropdownMenuButton1"
                        >
                          <li>
                            <a class="dropdown-item" href="#"
                              >Dropdown Option 1</a
                            >
                          </li>
                          <li>
                            <a class="dropdown-item" href="#"
                              >Dropdown Option 2</a
                            >
                          </li>
                          <li>
                            <a class="dropdown-item" href="#"
                              >Dropdown Option 3</a
                            >
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div>
                        <h4>29 Jan 2022</h4>
                        <h5>4:59 PM</h5>
                      </div>
                    </td>
                    <td>
                      <div>
                        <h4>$811.45</h4>
                      </div>
                    </td>
                    <td>
                      <div>
                        <h5 class="status complete_status">Verified</h5>
                      </div>
                    </td>
                    <td>
                      <div>
                        <h4>Visa1289</h4>
                      </div>
                    </td>
                    <td>
                      <div class="dropdown dot_dropdown_area">
                        <button
                          class="dropdown-toggle"
                          type="button"
                          id="dropdownMenuButton1"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        >
                          <img
                            src="assets/images/icon/three_dot.svg"
                            alt="three dot"
                          />
                        </button>
                        <ul
                          class="dropdown-menu"
                          aria-labelledby="dropdownMenuButton1"
                        >
                          <li>
                            <a class="dropdown-item" href="#"
                              >Dropdown Option 1</a
                            >
                          </li>
                          <li>
                            <a class="dropdown-item" href="#"
                              >Dropdown Option 2</a
                            >
                          </li>
                          <li>
                            <a class="dropdown-item" href="#"
                              >Dropdown Option 3</a
                            >
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div
        class="tab-pane fade"
        id="pills-notification"
        role="tabpanel"
        aria-labelledby="pills-notification-tab"
      >
        <form action="" class="form_area">
          <div class="notification_item_area dashboard_card">
            <div class="notification_item">
              <div class="notification_left_grid">
                <div
                  class="notificiation_icon"
                  style="--notification-color: rgb(255, 152, 0)"
                >
                  <svg
                    stroke="white"
                    fill="white"
                    stroke-width="0"
                    viewBox="0 0 16 16"
                    height="24"
                    width="24"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"
                    ></path>
                    <path
                      d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"
                    ></path>
                  </svg>
                </div>
                <div>
                  <h4>Task</h4>
                  <h5>Notify me when I am assigned a new task</h5>
                </div>
              </div>
              <div>
                <div class="form-check form-switch">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="flexSwitchCheckDefault"
                  />
                </div>
              </div>
            </div>
            <div class="notification_item">
              <div class="notification_left_grid">
                <div
                  class="notificiation_icon"
                  style="--notification-color: rgb(76, 175, 80)"
                >
                  <svg
                    stroke="white"
                    fill="white"
                    stroke-width="0"
                    viewBox="0 0 16 16"
                    height="24"
                    width="24"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"
                    ></path>
                    <path
                      d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"
                    ></path>
                    <path
                      d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"
                    ></path>
                  </svg>
                </div>
                <div>
                  <h4>Task</h4>
                  <h5>Notify me when a task is approved</h5>
                </div>
              </div>
              <div>
                <div class="form-check form-switch">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="flexSwitchCheckDefault"
                  />
                </div>
              </div>
            </div>
            <div class="notification_item">
              <div class="notification_left_grid">
                <div
                  class="notificiation_icon"
                  style="--notification-color: rgb(255, 152, 0)"
                >
                  <svg
                    stroke="white"
                    fill="white"
                    stroke-width="0"
                    viewBox="0 0 16 16"
                    height="24"
                    width="24"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"
                    ></path>
                  </svg>
                </div>
                <div>
                  <h4>Project</h4>
                  <h5>Notify me when I am added to a new project</h5>
                </div>
              </div>
              <div>
                <div class="form-check form-switch">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="flexSwitchCheckDefault"
                  />
                </div>
              </div>
            </div>
            <div class="notification_item">
              <div class="notification_left_grid">
                <div
                  class="notificiation_icon"
                  style="--notification-color: rgb(76, 175, 80)"
                >
                  <svg
                    stroke="white"
                    fill="white"
                    stroke-width="0"
                    viewBox="0 0 16 16"
                    height="24"
                    width="24"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M2 10h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1zm9-9h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-3a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zm0 9a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-3zm0-10a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h-3zM2 9a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H2zm7 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2v-3zM0 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.354.854a.5.5 0 1 0-.708-.708L3 3.793l-.646-.647a.5.5 0 1 0-.708.708l1 1a.5.5 0 0 0 .708 0l2-2z"
                    ></path>
                  </svg>
                </div>
                <div>
                  <h4>Project</h4>
                  <h5>Notify me when a project is marked complete</h5>
                </div>
              </div>
              <div>
                <div class="form-check form-switch">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="flexSwitchCheckDefault"
                  />
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div
        class="tab-pane fade"
        id="pills-social-links"
        role="tabpanel"
        aria-labelledby="pills-social-links-tab"
      >
        <form action="" class="form_area">
          <div
            class="notification_item_area social_item_area dashboard_card"
          >
            <div class="notification_item">
              <div class="notification_left_grid">
                <div
                  class="notificiation_icon"
                  style="--notification-color: rgb(33, 150, 243)"
                >
                  <i class="fa-brands fa-facebook-f"></i>
                </div>
                <div>
                  <h4>Facebook</h4>
                  <h5>
                    <a href="#" target="_blank"
                      >https://www.facebook.com/rakib.7896/</a
                    >
                  </h5>
                </div>
              </div>
              <div>
                <div class="form-check form-switch">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="socailcheckbox1"
                  />
                  <label class="form-check-label" for="socailcheckbox1"
                    >View on site</label
                  >
                </div>
              </div>
            </div>
            <div class="notification_item">
              <div class="notification_left_grid">
                <div
                  class="notificiation_icon"
                  style="--notification-color: rgb(13, 71, 161)"
                >
                  <i class="fa-brands fa-twitter"></i>
                </div>
                <div>
                  <h4>Twitter</h4>
                  <h5>
                    <a href="#" target="_blank"
                      >https://www.facebook.com/rakib.7896/</a
                    >
                  </h5>
                </div>
              </div>
              <div>
                <div class="form-check form-switch">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="socailcheckbox2"
                  />
                  <label class="form-check-label" for="socailcheckbox2"
                    >View on site</label
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="dashboard_card mt-30">
            <div class="row">
              <div class="col-xl-6">
                <div class="input_row mt-3">
                  <label for="">Title</label>
                  <input
                    type="text"
                    placeholder="Enter title"
                    class="input_field"
                  />
                </div>
              </div>
              <div class="col-xl-6">
                <div class="input_row mt-3">
                  <label for="">Link Type</label>
                  <select name="state" id="linkTypeSelect">
                    <option value=""></option>
                    <option value="AL">Link Type 1</option>
                    <option value="WY">Link Type 2</option>
                    <option value="AL">Link Type 3</option>
                    <option value="WY">Link Type 4</option>
                    <option value="AL">Link Type 5</option>
                    <option value="WY">Link Type 6</option>
                  </select>
                </div>
              </div>
              <div class="col-12">
                <div class="input_row mt-3">
                  <label for="">Address</label>
                  <input
                    type="url"
                    placeholder="Enter Address"
                    class="input_field"
                  />
                </div>
              </div>
              <div class="col-12">
                <button type="submit" class="news_letter_btn mt-4">
                  Add
                </button>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div
        class="tab-pane fade"
        id="pills-change-password"
        role="tabpanel"
        aria-labelledby="pills-change-password-tab"
      >
        <div class="change_passowrd_area dashboard_card">
          <form action="" class="form_area">
            <div class="input_row">
              <label for="">Current Password</label>
              <input
                type="password"
                placeholder="Enter current password"
                class="input_field"
              />
            </div>
            <div class="input_row mt-3">
              <label for="">New Password</label>
              <input
                type="password"
                placeholder="Enter new password"
                class="input_field"
              />
            </div>
            <div class="input_row mt-3">
              <label for="">Confirm Password</label>
              <input
                type="password"
                placeholder="Enter confirm password"
                class="input_field"
              />
            </div>
            <div class="mt-3">
              <button type="submit" class="news_letter_btn ms-auto">
                Change Password
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once dirname(__FILE__) . '/footer.php'; ?>

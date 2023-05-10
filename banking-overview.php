<?php require_once dirname(__FILE__) . '/header.php'; ?>

    <main class="main_content_area">
      <!-- Banking Section  -->
      <section class="banking_wrapper">
        <div class="product_outer_grid13">
          <div class="banking_outer_left_wrapper">
            <div class="balance_statis_chart dashboard_card">
              <div class="header_area d-flex-between">
                <div>
                  <h3 class="page_title">Balance Statistics</h3>
                  <h5 class="header_taxt_text">
                    (+43% Income | +12% Expense) than last year
                  </h5>
                </div>
                <form action="" class="header_select_area">
                  <select class="niceSelect">
                    <option data-display="Year">Year</option>
                    <option value="1">2022</option>
                    <option value="2">2023</option>
                    <option value="3">2024</option>
                  </select>
                </form>
              </div>
              <div class="position-relative">
                <div class="balance_chart" id="balanceChart"></div>
                <div class="hide_bottom_left_logo"></div>
              </div>
            </div>
            <div class="expense_category_area dashboard_card mt-30">
              <div class="header_area">
                <h3 class="page_title">Expense Categories</h3>
              </div>
              <div class="expense_cart_area">
                <div id="expenseCategory"></div>
              </div>
              <div class="category_info_grid">
                <div class="category_content">
                  <h4>Categories</h4>
                  <h3>9</h3>
                </div>
                <div class="category_content">
                  <h4>Expenses</h4>
                  <h3>$ <span class="count-num">18,765</span></h3>
                </div>
              </div>
            </div>
            <!-- Product Table Section  -->
            <section class="product_table_wrapper dashboard_card mt-30">
              <div class="header_area">
                <h2 class="page_title">Recent Transaction</h2>
              </div>
              <div class="product_table_area transition_table_area mt-0">
                <div class="product_inner_area">
                  <table class="table">
                    <thead>
                      <tr>
                        <td>
                          <h4>Description</h4>
                        </td>
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
                          <h4>Actions</h4>
                        </td>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td>
                          <div class="user_info_grid">
                            <div class="user_img_area">
                              <img
                                src="assets/images/others/transication_user_img_1.png"
                                alt="user img"
                                class="user_img"
                              />
                              <img
                                src="assets/images/icon/transiction_received_icon.svg"
                                alt="icon"
                                class="transition_icon"
                              />
                            </div>
                            <div>
                              <h4>Receive money from</h4>
                              <h5>Annette Black</h5>
                            </div>
                          </div>
                        </td>
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
                          <div class="user_info_grid">
                            <div class="user_img_area">
                              <img
                                src="assets/images/others/transication_user_img_2.png"
                                alt="user img"
                                class="user_img"
                              />
                              <img
                                src="assets/images/icon/transiction_send_icon.svg"
                                alt="icon"
                                class="transition_icon"
                              />
                            </div>
                            <div>
                              <h4>Payment for</h4>
                              <h5>Annette Black</h5>
                            </div>
                          </div>
                        </td>
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
                            <h5 class="status complete_status">Completed</h5>
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
                          <div class="user_info_grid">
                            <div class="user_img_area">
                              <img
                                src="assets/images/others/transication_user_img_3.png"
                                alt="user img"
                                class="user_img"
                              />
                              <img
                                src="assets/images/icon/transiction_send_icon.svg"
                                alt="icon"
                                class="transition_icon"
                              />
                            </div>
                            <div>
                              <h4>Payment for</h4>
                              <h5>Annette Black</h5>
                            </div>
                          </div>
                        </td>
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
                            <h5 class="status failed_status">Failed</h5>
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
                          <div class="user_info_grid">
                            <div class="user_img_area">
                              <img
                                src="assets/images/others/transication_user_img_1.png"
                                alt="user img"
                                class="user_img"
                              />
                              <img
                                src="assets/images/icon/transiction_received_icon.svg"
                                alt="icon"
                                class="transition_icon"
                              />
                            </div>
                            <div>
                              <h4>Receive money from</h4>
                              <h5>Annette Black</h5>
                            </div>
                          </div>
                        </td>
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
                          <div class="user_info_grid">
                            <div class="user_img_area">
                              <img
                                src="assets/images/others/transication_user_img_2.png"
                                alt="user img"
                                class="user_img"
                              />
                              <img
                                src="assets/images/icon/transiction_send_icon.svg"
                                alt="icon"
                                class="transition_icon"
                              />
                            </div>
                            <div>
                              <h4>Payment for</h4>
                              <h5>Annette Black</h5>
                            </div>
                          </div>
                        </td>
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
                            <h5 class="status complete_status">Completed</h5>
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
                          <div class="user_info_grid">
                            <div class="user_img_area">
                              <img
                                src="assets/images/others/transication_user_img_3.png"
                                alt="user img"
                                class="user_img"
                              />
                              <img
                                src="assets/images/icon/transiction_send_icon.svg"
                                alt="icon"
                                class="transition_icon"
                              />
                            </div>
                            <div>
                              <h4>Payment for</h4>
                              <h5>Annette Black</h5>
                            </div>
                          </div>
                        </td>
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
                            <h5 class="status failed_status">Failed</h5>
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
                          <div class="user_info_grid">
                            <div class="user_img_area">
                              <img
                                src="assets/images/others/transication_user_img_1.png"
                                alt="user img"
                                class="user_img"
                              />
                              <img
                                src="assets/images/icon/transiction_received_icon.svg"
                                alt="icon"
                                class="transition_icon"
                              />
                            </div>
                            <div>
                              <h4>Receive money from</h4>
                              <h5>Annette Black</h5>
                            </div>
                          </div>
                        </td>
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
                          <div class="user_info_grid">
                            <div class="user_img_area">
                              <img
                                src="assets/images/others/transication_user_img_2.png"
                                alt="user img"
                                class="user_img"
                              />
                              <img
                                src="assets/images/icon/transiction_send_icon.svg"
                                alt="icon"
                                class="transition_icon"
                              />
                            </div>
                            <div>
                              <h4>Payment for</h4>
                              <h5>Annette Black</h5>
                            </div>
                          </div>
                        </td>
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
                            <h5 class="status complete_status">Completed</h5>
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
                          <div class="user_info_grid">
                            <div class="user_img_area">
                              <img
                                src="assets/images/others/transication_user_img_3.png"
                                alt="user img"
                                class="user_img"
                              />
                              <img
                                src="assets/images/icon/transiction_send_icon.svg"
                                alt="icon"
                                class="transition_icon"
                              />
                            </div>
                            <div>
                              <h4>Payment for</h4>
                              <h5>Annette Black</h5>
                            </div>
                          </div>
                        </td>
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
                            <h5 class="status failed_status">Failed</h5>
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
              <div class="text-end mt-2 border_top">
                <a href="" class="view_all_arrow"
                  >View All
                  <span
                    ><img src="assets/images/icon/right_arrow_icon.svg" alt=""
                  /></span>
                </a>
              </div>
            </section>
          </div>
          <div class="banking_outer_right_wrapper">
            <div class="transfer_slider_area dashboard_card">
              <div class="header_area">
                <h3 class="page_title">Quick Transfer</h3>
              </div>
              <div class="view_all_area d-flex-between">
                <h4>Recent</h4>
                <a href="" class="view_all">View All</a>
              </div>
              <div class="slider_inner_area position-relative">
                <!-- Swiper -->
                <div class="swiper">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <a href="" class="transfer_user_area">
                        <img
                          src="assets/images/others/transfer_user_img_1.png"
                          alt="transfer user"
                        />
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a href="" class="transfer_user_area">
                        <img
                          src="assets/images/others/transfer_user_img_2.png"
                          alt="transfer user"
                        />
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a href="" class="transfer_user_area">
                        <img
                          src="assets/images/others/transfer_user_img_3.png"
                          alt="transfer user"
                        />
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a href="" class="transfer_user_area">
                        <img
                          src="assets/images/others/transfer_user_img_4.png"
                          alt="transfer user"
                        />
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a href="" class="transfer_user_area">
                        <img
                          src="assets/images/others/transfer_user_img_2.png"
                          alt="transfer user"
                        />
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a href="" class="transfer_user_area">
                        <img
                          src="assets/images/others/transfer_user_img_4.png"
                          alt="transfer user"
                        />
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a href="" class="transfer_user_area">
                        <img
                          src="assets/images/others/transfer_user_img_1.png"
                          alt="transfer user"
                        />
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a href="" class="transfer_user_area">
                        <img
                          src="assets/images/others/transfer_user_img_2.png"
                          alt="transfer user"
                        />
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a href="" class="transfer_user_area">
                        <img
                          src="assets/images/others/transfer_user_img_1.png"
                          alt="transfer user"
                        />
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a href="" class="transfer_user_area">
                        <img
                          src="assets/images/others/transfer_user_img_2.png"
                          alt="transfer user"
                        />
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a href="" class="transfer_user_area">
                        <img
                          src="assets/images/others/transfer_user_img_3.png"
                          alt="transfer user"
                        />
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a href="" class="transfer_user_area">
                        <img
                          src="assets/images/others/transfer_user_img_4.png"
                          alt="transfer user"
                        />
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a href="" class="transfer_user_area">
                        <img
                          src="assets/images/others/transfer_user_img_2.png"
                          alt="transfer user"
                        />
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a href="" class="transfer_user_area">
                        <img
                          src="assets/images/others/transfer_user_img_4.png"
                          alt="transfer user"
                        />
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a href="" class="transfer_user_area">
                        <img
                          src="assets/images/others/transfer_user_img_1.png"
                          alt="transfer user"
                        />
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a href="" class="transfer_user_area">
                        <img
                          src="assets/images/others/transfer_user_img_2.png"
                          alt="transfer user"
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next transfer_next_icon"></div>
                <div class="swiper-button-prev transfer_prev_icon"></div>
              </div>
              <form action="">
                <div class="transfer_range_slider_area">
                  <h4>Insert Amount</h4>
                  <div class="range_slider_area">
                    <div class="range_ammount">
                      $ <span id="rangeValue">0</span>
                    </div>
                    <input
                      type="range"
                      min="0"
                      max="100"
                      step="10"
                      value="0"
                      data-rangeslider
                    />
                  </div>
                  <div class="d-flex-between mt-3">
                    <h4>Your Balance</h4>
                    <h3>$34,212</h3>
                  </div>
                  <button type="button" class="transfer_btn">
                    Transfer Now
                  </button>
                </div>
              </form>
            </div>
            <div class="contact_message_area dashboard_card mt-30">
              <div class="header_area d-flex-between align-items-start">
                <div>
                  <h3 class="page_title">Contacts</h3>
                  <h5 class="header_contact_text">You have 258 contacts</h5>
                </div>
                <div>
                  <button type="button" class="add_message_btn">
                    <img src="assets/images/icon/plusL_green.svg" alt="" />
                  </button>
                </div>
              </div>
              <div class="message_user_area">
                <div class="message_user_item">
                  <div class="message_user_grid">
                    <div class="user_img">
                      <img
                        src="assets/images/others/transfer_user_img_1.png"
                        alt="user img"
                      />
                    </div>
                    <div>
                      <h4><a href="#">Jayvion Simon</a></h4>
                      <h5><a href="#">nannie_abernathy70@yahoo.com</a></h5>
                    </div>
                  </div>
                  <div class="text-end">
                    <a href="#" class="message_icon">
                      <img
                        src="assets/images/icon/message_power_icon.svg"
                        alt="add message"
                      />
                    </a>
                  </div>
                </div>
                <div class="message_user_item">
                  <div class="message_user_grid">
                    <div class="user_img">
                      <img
                        src="assets/images/others/transfer_user_img_2.png"
                        alt="user img"
                      />
                    </div>
                    <div>
                      <h4><a href="#">Jayvion Simon</a></h4>
                      <h5><a href="#">nannie_abernathy70@yahoo.com</a></h5>
                    </div>
                  </div>
                  <div class="text-end">
                    <a href="#" class="message_icon">
                      <img
                        src="assets/images/icon/message_power_icon.svg"
                        alt="add message"
                      />
                    </a>
                  </div>
                </div>
                <div class="message_user_item">
                  <div class="message_user_grid">
                    <div class="user_img">
                      <img
                        src="assets/images/others/transfer_user_img_3.png"
                        alt="user img"
                      />
                    </div>
                    <div>
                      <h4><a href="#">Jayvion Simon</a></h4>
                      <h5><a href="#">nannie_abernathy70@yahoo.com</a></h5>
                    </div>
                  </div>
                  <div class="text-end">
                    <a href="#" class="message_icon">
                      <img
                        src="assets/images/icon/message_power_icon.svg"
                        alt="add message"
                      />
                    </a>
                  </div>
                </div>
                <div class="message_user_item">
                  <div class="message_user_grid">
                    <div class="user_img">
                      <img
                        src="assets/images/others/transfer_user_img_4.png"
                        alt="user img"
                      />
                    </div>
                    <div>
                      <h4><a href="#">Jayvion Simon</a></h4>
                      <h5><a href="#">nannie_abernathy70@yahoo.com</a></h5>
                    </div>
                  </div>
                  <div class="text-end">
                    <a href="#" class="message_icon">
                      <img
                        src="assets/images/icon/message_power_icon.svg"
                        alt="add message"
                      />
                    </a>
                  </div>
                </div>
                <div class="message_user_item">
                  <div class="message_user_grid">
                    <div class="user_img">
                      <img
                        src="assets/images/others/transfer_user_img_1.png"
                        alt="user img"
                      />
                    </div>
                    <div>
                      <h4><a href="#">Jayvion Simon</a></h4>
                      <h5><a href="#">nannie_abernathy70@yahoo.com</a></h5>
                    </div>
                  </div>
                  <div class="text-end">
                    <a href="#" class="message_icon">
                      <img
                        src="assets/images/icon/message_power_icon.svg"
                        alt="add message"
                      />
                    </a>
                  </div>
                </div>
                <div class="message_user_item">
                  <div class="message_user_grid">
                    <div class="user_img">
                      <img
                        src="assets/images/others/transfer_user_img_2.png"
                        alt="user img"
                      />
                    </div>
                    <div>
                      <h4><a href="#">Jayvion Simon</a></h4>
                      <h5><a href="#">nannie_abernathy70@yahoo.com</a></h5>
                    </div>
                  </div>
                  <div class="text-end">
                    <a href="#" class="message_icon">
                      <img
                        src="assets/images/icon/message_power_icon.svg"
                        alt="add message"
                      />
                    </a>
                  </div>
                </div>
                <div class="message_user_item">
                  <div class="message_user_grid">
                    <div class="user_img">
                      <img
                        src="assets/images/others/transfer_user_img_3.png"
                        alt="user img"
                      />
                    </div>
                    <div>
                      <h4><a href="#">Jayvion Simon</a></h4>
                      <h5><a href="#">nannie_abernathy70@yahoo.com</a></h5>
                    </div>
                  </div>
                  <div class="text-end">
                    <a href="#" class="message_icon">
                      <img
                        src="assets/images/icon/message_power_icon.svg"
                        alt="add message"
                      />
                    </a>
                  </div>
                </div>
                <div class="message_user_item">
                  <div class="message_user_grid">
                    <div class="user_img">
                      <img
                        src="assets/images/others/transfer_user_img_4.png"
                        alt="user img"
                      />
                    </div>
                    <div>
                      <h4><a href="#">Jayvion Simon</a></h4>
                      <h5><a href="#">nannie_abernathy70@yahoo.com</a></h5>
                    </div>
                  </div>
                  <div class="text-end">
                    <a href="#" class="message_icon">
                      <img
                        src="assets/images/icon/message_power_icon.svg"
                        alt="add message"
                      />
                    </a>
                  </div>
                </div>
                <div class="message_user_item">
                  <div class="message_user_grid">
                    <div class="user_img">
                      <img
                        src="assets/images/others/transfer_user_img_1.png"
                        alt="user img"
                      />
                    </div>
                    <div>
                      <h4><a href="#">Jayvion Simon</a></h4>
                      <h5><a href="#">nannie_abernathy70@yahoo.com</a></h5>
                    </div>
                  </div>
                  <div class="text-end">
                    <a href="#" class="message_icon">
                      <img
                        src="assets/images/icon/message_power_icon.svg"
                        alt="add message"
                      />
                    </a>
                  </div>
                </div>
                <div class="message_user_item">
                  <div class="message_user_grid">
                    <div class="user_img">
                      <img
                        src="assets/images/others/transfer_user_img_2.png"
                        alt="user img"
                      />
                    </div>
                    <div>
                      <h4><a href="#">Jayvion Simon</a></h4>
                      <h5><a href="#">nannie_abernathy70@yahoo.com</a></h5>
                    </div>
                  </div>
                  <div class="text-end">
                    <a href="#" class="message_icon">
                      <img
                        src="assets/images/icon/message_power_icon.svg"
                        alt="add message"
                      />
                    </a>
                  </div>
                </div>
                <div class="message_user_item">
                  <div class="message_user_grid">
                    <div class="user_img">
                      <img
                        src="assets/images/others/transfer_user_img_3.png"
                        alt="user img"
                      />
                    </div>
                    <div>
                      <h4><a href="#">Jayvion Simon</a></h4>
                      <h5><a href="#">nannie_abernathy70@yahoo.com</a></h5>
                    </div>
                  </div>
                  <div class="text-end">
                    <a href="#" class="message_icon">
                      <img
                        src="assets/images/icon/message_power_icon.svg"
                        alt="add message"
                      />
                    </a>
                  </div>
                </div>
                <div class="message_user_item">
                  <div class="message_user_grid">
                    <div class="user_img">
                      <img
                        src="assets/images/others/transfer_user_img_4.png"
                        alt="user img"
                      />
                    </div>
                    <div>
                      <h4><a href="#">Jayvion Simon</a></h4>
                      <h5><a href="#">nannie_abernathy70@yahoo.com</a></h5>
                    </div>
                  </div>
                  <div class="text-end">
                    <a href="#" class="message_icon">
                      <img
                        src="assets/images/icon/message_power_icon.svg"
                        alt="add message"
                      />
                    </a>
                  </div>
                </div>
              </div>
              <div>
                <a href="#" class="transfer_btn"> View All </a>
              </div>
            </div>
            <div class="newsletter_area dashboard_card mt-30">
              <div class="text-center">
                <img
                  src="assets/images/others/newsletter_img.png"
                  alt="news letter img"
                />
              </div>
              <div class="newsletter_grid">
                <h3>Invite friends and earn</h3>
                <h4>$50</h4>
              </div>
              <form class="newsletter_grid form_area">
                <div class="input_row">
                  <input type="email" class="input_field" placeholder="Email" />
                </div>
                <button type="submit" class="news_letter_btn">Invite</button>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- Section  -->
      <section class="wrapper"></section>
      <!-- Section  -->
      <section class="wrapper"></section>
      <!-- Section  -->
      <section class="wrapper"></section>
      <!-- Section  -->
      <section class="wrapper"></section>
      <!-- Section  -->
      <section class="wrapper"></section>
    </main>
    <?php require_once dirname(__FILE__) . '/footer.php'; ?>

    <!-- Website Visits Chart Code -->
    <script>
      am5.ready(function () {
        // Create root element
        var root = am5.Root.new("balanceChart");

        // Set themes
        root.setThemes([am5themes_Animated.new(root)]);

        // Create chart
        var chart = root.container.children.push(
          am5xy.XYChart.new(root, {
            panX: false,
            panY: false,
            wheelX: "panX",
            wheelY: "zoomX",
            layout: root.verticalLayout,
          })
        );

        // Add legend
        var legend = chart.children.push(
          am5.Legend.new(root, {
            centerX: am5.p50,
            x: am5.p50,
          })
        );

        // Data
        var data = [
          {
            year: "Jan",
            income: 120,
            expenses: 100,
          },
          {
            year: "Feb",
            income: 50,
            expenses: 70,
          },
          {
            year: "Mar",
            income: 95,
            expenses: 15,
          },
          {
            year: "Apr",
            income: 45,
            expenses: 110,
          },
          {
            year: "May",
            income: 24.6,
            expenses: 25,
          },
        ];

        // Create axes
        var yAxis = chart.yAxes.push(
          am5xy.CategoryAxis.new(root, {
            categoryField: "year",
            renderer: am5xy.AxisRendererY.new(root, {
              inversed: true,
              cellStartLocation: 0.1,
              cellEndLocation: 0.9,
            }),
          })
        );

        yAxis.data.setAll(data);

        var xAxis = chart.xAxes.push(
          am5xy.ValueAxis.new(root, {
            renderer: am5xy.AxisRendererX.new(root, {}),
            min: 0,
          })
        );

        // Add series
        function createSeries(field, name) {
          var series = chart.series.push(
            am5xy.ColumnSeries.new(root, {
              name: name,
              xAxis: xAxis,
              yAxis: yAxis,
              valueXField: field,
              categoryYField: "year",
              sequencedInterpolation: true,
              tooltip: am5.Tooltip.new(root, {
                pointerOrientation: "horizontal",
                labelText: "[bold]{name}[/]\n{categoryY}: {valueX}",
              }),
            })
          );

          series.columns.template.setAll({
            height: am5.p100,
          });

          series.bullets.push(function () {
            return am5.Bullet.new(root, {
              locationX: 1,
              locationY: 0.5,
              sprite: am5.Label.new(root, {
                centerY: am5.p50,
                text: "{valueX}",
                populateText: true,
              }),
            });
          });

          series.bullets.push(function () {
            return am5.Bullet.new(root, {
              locationX: 1,
              locationY: 0.5,
              sprite: am5.Label.new(root, {
                centerX: am5.p100,
                centerY: am5.p50,
                text: "{name}",
                fill: am5.color(0xffffff),
                populateText: true,
              }),
            });
          });

          series.data.setAll(data);
          series.appear();

          return series;
        }

        createSeries("income", "Income");
        createSeries("expenses", "Expenses");

        // Add legend
        var legend = chart.children.push(
          am5.Legend.new(root, {
            centerX: am5.p50,
            x: am5.p50,
          })
        );

        legend.data.setAll(chart.series.values);

        // Add cursor
        var cursor = chart.set(
          "cursor",
          am5xy.XYCursor.new(root, {
            behavior: "zoomY",
          })
        );
        cursor.lineY.set("forceHidden", true);
        cursor.lineX.set("forceHidden", true);

        // Make stuff animate on load
        chart.appear(1000, 100);
      }); // end am5.ready()
    </script>
    <!-- Expense Categories Chart Code -->
    <script>
      var options = {
        series: [14, 23, 21, 17, 15, 10, 12, 17, 21],
        chart: {
          width: "100%",
          height: 380,
          type: "polarArea",
        },
        labels: [
          "Category 1",
          "Category 2",
          "Category 3",
          "Category 4",
          "Category 5",
          "Category 6",
          "Category 7",
          "Category 8",
          "Category 9",
        ],
        colors: [
          "#A3DCBB",
          "#929AB5",
          "#FFEF5E",
          "#8EB7DE",
          "#F8C4B5",
          "#D8CDE1",
          "#B4B2D5",
          "#659E7A",
          "#8BD1CD",
        ],
        stroke: {
          colors: ["#fff"],
        },
        fill: {
          opacity: 0.8,
        },
        responsive: [
          {
            breakpoint: 480,
            options: {
              chart: {
                width: 200,
              },
              legend: {
                position: "bottom",
              },
            },
          },
        ],
      };

      var chart = new ApexCharts(
        document.querySelector("#expenseCategory"),
        options
      );
      chart.render();
    </script>


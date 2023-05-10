<?php require_once dirname(__FILE__) . '/header.php'; ?>

  <style>
    .invoice_wrapper {
      overflow: auto;
    }
    .invoice_wrapper::-webkit-scrollbar {
      width: 5px;
      height: 5px;
    }
    .invoice_wrapper::-webkit-scrollbar-track {
      background: rgba(153, 153, 153, 0.2);
      border-radius: 5px;
    }
    .invoice_wrapper::-webkit-scrollbar-thumb {
      background: #999999;
      border-radius: 5px;
    }
    .invoice_wrapper::-webkit-scrollbar-thumb:hover {
      background: #f84f4f;
      cursor: -webkit-grab;
      cursor: grab;
    }
    .invoice_wrapper .table {
      width: 100%;
    }
    .invoice_wrapper .vertical-align-middle {
      vertical-align: middle;
    }
    .invoice_wrapper .space_top {
      padding-top: 20px;
    }
    .invoice_wrapper .table {
      margin-bottom: 0;
    }
    .invoice_wrapper td {
      padding: 0;
      border: none;
    }
    .invoice_wrapper .invoice_logo span {
      font-weight: 700;
      font-size: 18px;
      line-height: 23px;
      color: #333333;
      margin-left: 8px;
    }
    .invoice_wrapper .invoice_status_area {
      text-align: end;
    }
    .invoice_wrapper .invoice_status_area h4,
    .invoice_wrapper .invoice_status_area h5 {
      font-weight: 500;
      font-size: 16px;
      line-height: 23px;
      color: #333333;
    }
    .invoice_wrapper .invoice_status_area h4.paid,
    .invoice_wrapper .invoice_status_area h5.paid {
      color: #1aa856;
    }
    .invoice_wrapper .invoice_status_area h4.unpaid,
    .invoice_wrapper .invoice_status_area h5.unpaid {
      color: #f15a29;
    }
    .invoice_wrapper .user_info_area {
      max-width: 390px;
    }
    .invoice_wrapper .user_info_area h4 {
      font-weight: 700;
      font-size: 18px;
      line-height: 23px;
      color: #333333;
    }
    .invoice_wrapper .user_info_area h5 {
      font-weight: 400;
      font-size: 16px;
      line-height: 23px;
      color: #333333;
      margin: 2px 0;
    }
    .invoice_wrapper .product_tablel_area h4 {
      font-weight: 700;
      font-size: 16px;
      line-height: 23px;
      color: #333333;
    }
    .invoice_wrapper .product_tablel_area h5 {
      font-weight: 400;
      font-size: 16px;
      line-height: 23px;
      color: #333333;
      margin: 2px 0;
    }
    .invoice_wrapper .product_tablel_area h5.discount_ammount {
      color: #f15a29;
    }
    .invoice_wrapper .product_tablel_area .space_top td {
      padding: 10px 15px;
      border-bottom: 1px solid #d7d7d7;
    }
    .invoice_wrapper .product_description {
      max-width: 350px;
    }
    .invoice_wrapper .product_description h5 {
      width: 100%;
      height: 22px;
      text-overflow: ellipsis;
      white-space: nowrap;
      overflow: hidden;
    }
    .invoice_wrapper .footer_text_area {
      max-width: 350px;
      text-align: start;
    }
  </style>

    <main class="main_content_area">
      <div class="header_area d-flex-between g-sm">
        <h3 class="page_title">Invoice Grid</h3>
        <div class="invoice_btn_area d-flex align-items-center flex-wrap g-sm">
          <button type="button" class="change_btn">
            <span>Share</span> <i class="fa-solid fa-share"></i>
          </button>
          <button type="button" class="change_btn">
            <span>Preview</span> <i class="fa-regular fa-eye"></i>
          </button>
          <button type="button" class="change_btn">
            <span>Download</span> <i class="fa-solid fa-file-arrow-down"></i>
          </button>
        </div>
      </div>
      <div class="dashboard_card mt-30">
        <div class="invoice_wrapper">
          <table class="table">
            <tr class="vertical-align-middle">
              <td>
                <table class="table">
                  <tr>
                    <td>
                      <div class="invoice_logo">
                        <a href="#">
                          <img src="assets/images/header/logo.png" alt="logo" />
                          <span class="logo_text">My Cool Store</span>
                        </a>
                      </div>
                    </td>
                  </tr>
                </table>
              </td>
              <td>
                <table class="table">
                  <tr>
                    <td>
                      <div class="invoice_status_area">
                        <h4 class="paid">Paid</h4>
                        <!-- <h4 class="unpaid">Unpaid</h4> -->
                        <h5>INV-1645678848500</h5>
                      </div>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td class="space_top">
                <table class="table">
                  <tr>
                    <td>
                      <div class="user_info_area">
                        <h4>Invoice from</h4>
                        <h5>Lucian Obrien</h5>
                        <h5>
                          1147 Rohan Drive Suite 819 - Burlington, VT / 82021
                        </h5>
                        <h5>Phone: 904-966-2836</h5>
                      </div>
                    </td>
                  </tr>
                </table>
              </td>
              <td class="space_top">
                <table class="table">
                  <tr>
                    <td>
                      <div class="user_info_area">
                        <h4>Invoice from</h4>
                        <h5>Lucian Obrien</h5>
                        <h5>
                          1147 Rohan Drive Suite 819 - Burlington, VT / 82021
                        </h5>
                        <h5>Phone: 904-966-2836</h5>
                      </div>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
          <table class="table product_tablel_area">
            <tr>
              <td class="space_top">
                <table class="table">
                  <tr>
                    <td>#</td>
                    <td>Description</td>
                    <td>Qty</td>
                    <td>Unit Price</td>
                    <td>Total</td>
                  </tr>
                  <tr class="vertical-align-middle">
                    <td><h5>1</h5></td>
                    <td>
                      <div class="product_description">
                        <h4>T-shirt</h4>
                        <h5>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Quod, voluptas.
                        </h5>
                      </div>
                    </td>
                    <td><h5>5</h5></td>
                    <td><h5>$16.19</h5></td>
                    <td><h5>$80.95</h5></td>
                  </tr>
                  <tr class="vertical-align-middle">
                    <td><h5>2</h5></td>
                    <td>
                      <div class="product_description">
                        <h4>T-shirt</h4>
                        <h5>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Quod, voluptas.
                        </h5>
                      </div>
                    </td>
                    <td><h5>5</h5></td>
                    <td><h5>$16.19</h5></td>
                    <td><h5>$80.95</h5></td>
                  </tr>
                  <tr class="vertical-align-middle">
                    <td><h5>3</h5></td>
                    <td>
                      <div class="product_description">
                        <h4>T-shirt</h4>
                        <h5>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Quod, voluptas.
                        </h5>
                      </div>
                    </td>
                    <td><h5>5</h5></td>
                    <td><h5>$16.19</h5></td>
                    <td><h5>$80.95</h5></td>
                  </tr>
                  <tr class="vertical-align-middle">
                    <td><h5>4</h5></td>
                    <td>
                      <div class="product_description">
                        <h4>T-shirt</h4>
                        <h5>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Quod, voluptas.
                        </h5>
                      </div>
                    </td>
                    <td><h5>5</h5></td>
                    <td><h5>$16.19</h5></td>
                    <td><h5>$80.95</h5></td>
                  </tr>
                  <tr class="vertical-align-middle">
                    <td><h5></h5></td>
                    <td>
                      <div class="product_description">
                        <h4></h4>
                        <h5></h5>
                      </div>
                    </td>
                    <td><h5></h5></td>
                    <td><h5>Subtotal</h5></td>
                    <td><h5>$80.95</h5></td>
                  </tr>
                  <tr class="vertical-align-middle">
                    <td><h5></h5></td>
                    <td>
                      <div class="product_description">
                        <h4></h4>
                        <h5></h5>
                      </div>
                    </td>
                    <td><h5></h5></td>
                    <td><h5>Discount</h5></td>
                    <td><h5 class="discount_ammount">-$80.95</h5></td>
                  </tr>
                  <tr class="vertical-align-middle">
                    <td><h5></h5></td>
                    <td>
                      <div class="product_description">
                        <h4></h4>
                        <h5></h5>
                      </div>
                    </td>
                    <td><h5></h5></td>
                    <td><h5>Taxes</h5></td>
                    <td><h5>$80.95</h5></td>
                  </tr>
                  <tr class="vertical-align-middle">
                    <td><h5></h5></td>
                    <td>
                      <div class="product_description">
                        <h4></h4>
                        <h5></h5>
                      </div>
                    </td>
                    <td><h5></h5></td>
                    <td><h5>Total</h5></td>
                    <td><h5>$80.95</h5></td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
          <table class="table">
            <tr class="vertical-align-middle">
              <td class="space_top">
                <table class="table">
                  <tr>
                    <td>
                      <div class="invoice_status_area footer_text_area">
                        <h4><b>Notes</b></h4>
                        <h5>
                          Lorem Ipsum is simply dummy text of the printing and
                          typesetting
                        </h5>
                      </div>
                    </td>
                  </tr>
                </table>
              </td>
              <td>
                <table class="table">
                  <tr>
                    <td class="space_top">
                      <div class="invoice_status_area">
                        <h4>Have a question?</h4>

                        <h5>
                          <a href="Support@mycoolstore.com"
                            >Support@mycoolstore.com</a
                          >
                        </h5>
                      </div>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </main>
    
<?php require_once dirname(__FILE__) . '/footer.php'; ?>

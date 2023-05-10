<?php require_once dirname(__FILE__) . '/header.php'; ?>

<main class="main_content_area">
  <!-- Add Product Section  -->
  <section class="add_product_wrapper">
    <form action="" class="form_area">
      <div class="product_outer_grid13">
        <div class="product_outer_left_wrapper">
          <div class="product_pagination_area">
            <a href="#">
              <img
                src="assets/images/icon/left_arrow_icon.svg"
                alt="left arrow"
              />
              <span class="page_title">Add Product</span>
            </a>
          </div>
          <div class="add_title_area dashboard_card mt-30">
            <div class="input_row">
              <label for="">Title</label>
              <input
                type="text"
                placeholder="Add Product Title"
                class="input_field"
              />
            </div>
            <div class="input_row mt-3">
              <label for="">Description</label>
              <textarea
                name=""
                id="textEditor"
                cols="30"
                rows="10"
              ></textarea>
            </div>
          </div>
          <div class="media_upload_area dashboard_card mt-30">
            <div class="header_area">
              <h2 class="page_title">Media</h2>
            </div>

            <div
              class="upload_area"
              style="
                background-image: url(assets/images/banner/banner_img.png);
              "
            >
              <div
                class="d-flex align-items-center justify-content-center flex-wrap g-lg"
              >
                <label for="uploadMedia">Add file</label>
                <button
                  type="button"
                  class="add_url_btn"
                  data-bs-toggle="modal"
                  data-bs-target="#uploadModal"
                >
                  Add from URL
                </button>
                <input type="file" id="uploadMedia" class="d-none" />
              </div>
              <p>Accepts images, videos, or 3D models</p>
            </div>

            <!-- Modal -->
            <div
              class="modal fade"
              id="uploadModal"
              tabindex="-1"
              aria-labelledby="uploadModalLabel"
              aria-hidden="true"
            >
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="uploadModalLabel">
                      Add your url
                    </h5>
                    <button
                      type="button"
                      class="btn-close"
                      data-bs-dismiss="modal"
                      aria-label="Close"
                    ></button>
                  </div>
                  <div class="modal-body">
                    <div class="input_row">
                      <label for="">Link</label>
                      <input
                        type="url"
                        placeholder="Enter Link"
                        class="input_field"
                      />
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button
                      type="button"
                      class="btn btn-secondary"
                      data-bs-dismiss="modal"
                    >
                      Close
                    </button>
                    <button type="button" class="btn btn-primary">
                      Save changes
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="pricing_area dashboard_card mt-30">
            <div class="header_area">
              <h2 class="page_title">Pricing</h2>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="input_row">
                  <label for="">Price</label>
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"
                      >$</span
                    >
                    <input
                      type="number"
                      class="input_field"
                      placeholder="Enter Price"
                      aria-describedby="basic-addon1"
                    />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="input_row">
                  <label for="">Compare at Price</label>
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"
                      >$</span
                    >
                    <input
                      type="number"
                      class="input_field"
                      placeholder="Enter Price"
                      aria-describedby="basic-addon1"
                    />
                  </div>
                  <img
                    src="assets/images/icon/what_icon.svg"
                    alt=""
                    class="input_right_icon"
                  />
                </div>
              </div>
            </div>
            <div class="tax_checkbox mt-4">
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="taxCheckbox"
                  checked
                />
                <label class="form-check-label" for="taxCheckbox">
                  Charge tax on this Product
                </label>
              </div>
            </div>
            <div id="taxCheckboxArea">
              <div class="input_row mt-4">
                <label for="">Cost Per Item</label>
                <div class="input-group">
                  <span class="input-group-text" id="basic-addon1">$</span>
                  <input
                    type="number"
                    class="input_field"
                    placeholder="Enter Price"
                    aria-describedby="basic-addon1"
                  />
                </div>
                <label>Customers won’t see this</label>
              </div>
            </div>
          </div>
          <div class="inventory_area dashboard_card mt-30">
            <div class="header_area">
              <h2 class="page_title">Invetory</h2>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="input_row">
                  <label for="">SKU (Stock Keeping Unit)</label>
                  <input
                    type="number"
                    class="input_field"
                    placeholder="Enter SKU"
                  />
                </div>
              </div>
              <div class="col-md-6">
                <div class="input_row">
                  <label for="">Barcode (ISBN, UPC, GTIN, etc.)</label>
                  <input
                    type="number"
                    class="input_field"
                    placeholder="Enter Barcode"
                  />
                </div>
              </div>
            </div>
            <div class="tax_checkbox mt-4">
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="trackCheckbox"
                  checked
                />
                <label class="form-check-label" for="trackCheckbox">
                  Track quantity
                </label>
              </div>
              <div class="form-check mt-2">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="stockCheckbox"
                />
                <label class="form-check-label" for="stockCheckbox">
                  Continue selling when out of stock
                </label>
              </div>
            </div>
            <div class="quntity_area">
              <div class="d-flex-between g-sm">
                <h4>Quantity</h4>
                <div>
                  <a href="#" class="location_text">Edit Locations</a>
                </div>
              </div>
              <div class="d-flex-between border_bottom g-sm mt-3">
                <h4>Location name</h4>
                <h4>Available</h4>
              </div>
              <div class="quntity_input_item">
                <h3>200 s Rangeline Road</h3>
                <div>
                  <input
                    type="number"
                    placeholder="Enter qty"
                    class="input_field"
                  />
                </div>
              </div>
              <div class="quntity_input_item">
                <h3>Clarks White Glove Delivery</h3>
                <div>
                  <input
                    type="number"
                    placeholder="Enter qty"
                    class="input_field"
                  />
                </div>
              </div>
              <div class="quntity_input_item">
                <h3>Suites at market square</h3>
                <div>
                  <input
                    type="number"
                    placeholder="Enter qty"
                    class="input_field"
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="shipping_area dashboard_card mt-30">
            <div class="header_area">
              <h2 class="page_title">Shipping</h2>
            </div>

            <div class="tax_checkbox mt-4">
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="shippingCheckbox"
                  checked
                />
                <label class="form-check-label" for="shippingCheckbox">
                  Charge tax on this Product
                </label>
              </div>
            </div>
            <div id="shippingCheckboxArea">
              <div class="shipping_content_area mt-4">
                <h4>Weight</h4>
                <p>
                  Used to calculate shipping rates at checkout and label
                  prices during fulfillment.
                </p>
              </div>
              <div class="input_row border_bottom">
                <label for="">Weight</label>
                <div class="shipping_grid">
                  <input
                    type="number"
                    placeholder="Enter Number"
                    class="input_field"
                  />
                  <select class="niceSelect">
                    <option data-display="Select Weight">
                      Select Weight
                    </option>
                    <option value="1">lb</option>
                    <option value="2">kg</option>
                    <option value="3">gm</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="shipping_content_area mt-4">
              <h4>Customs Information</h4>
              <p>
                Customs authorities use this information to calculate duties
                when shipping internationally. Shown on printed customs
                forms.
              </p>
            </div>
            <div class="input_row mt-4">
              <label for="">Country / Region of origin</label>
              <select class="niceSelect nice_select_area">
                <option data-display="Select Weight">Select Country</option>
                <option value="1">Country 1</option>
                <option value="2">Country 2</option>
                <option value="3">Country 3</option>
              </select>
              <label for=""
                >In most cases, where the product is manufactured.</label
              >
            </div>
            <div class="input_row mt-4">
              <label for="">HS (Harmonized System) code</label>
              <div class="input-group">
                <span class="input-group-text" id="basic-addon1">
                  <img
                    src="assets/images/icon/search_black_icon.svg"
                    alt=""
                  />
                </span>
                <input
                  type="text"
                  class="input_field"
                  placeholder="HS (Harmonized System) code"
                  aria-describedby="basic-addon1"
                />
              </div>

              <label for=""
                >Manually enter codes that are longer than 6 numbers.</label
              >
            </div>
          </div>
          <div class="shipping_area dashboard_card mt-30">
            <div class="header_area">
              <h2 class="page_title">Options</h2>
            </div>

            <div class="tax_checkbox mt-4">
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="optionCheckbox"
                />
                <label class="form-check-label" for="optionCheckbox">
                  This product has options, Like size or color
                </label>
              </div>
            </div>
          </div>
          <div class="shipping_area dashboard_card mt-30">
            <div class="header_area d-flex-between">
              <h2 class="page_title">Search engine listing preview</h2>
              <div>
                <a href="#" class="view_all">Edit website SEO</a>
              </div>
            </div>

            <div>
              <p>
                Add a title and description to see how this product might
                appear in a search engine listing.
              </p>
            </div>
          </div>
          <div class="shipping_area dashboard_card mt-30">
            <div class="header_area d-flex-between">
              <h2 class="page_title">Metafields</h2>
            </div>
            <div class="metafiled_item">
              <div class="input_row">
                <label for="">Product rating count</label>
                <input
                  type="number"
                  placeholder="Enter Number"
                  class="input_field"
                />
              </div>
            </div>
            <div class="metafiled_item">
              <div class="input_row">
                <label for="">Product rating</label>
                <input
                  type="number"
                  placeholder="Enter Number"
                  class="input_field"
                />
              </div>
            </div>
          </div>
        </div>
        <div class="product_outer_right_wrapper">
          <div class="shipping_area dashboard_card">
            <div class="header_area">
              <h2 class="page_title">Product Status</h2>
            </div>

            <div class="input_row mt-4">
              <select class="niceSelect nice_select_area">
                <option data-display="Select Weight">Select Draft</option>
                <option value="1">Draft 1</option>
                <option value="2">Draft 2</option>
                <option value="3">Draft 3</option>
              </select>
              <label for=""
                >This product will be hidden from all sales channels.</label
              >
            </div>
            <div class="sales_app_area">
              <h4>Sales Channels and Apps</h4>
              <button type="button" class="view_all" id="deselectAllBtn">Deselect All</button>

              <ul class="sales_checkbox_list" id="salesCheckboxList">
                <li>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value=""
                      id="saleCheckbox1"
                    />
                    <label class="form-check-label" for="saleCheckbox1">
                      Online Store
                    </label>
                  </div>
                  <a href="#" class="view_all">Schedule Availability</a>
                </li>
                <li>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value=""
                      id="saleCheckbox2"
                    />
                    <label class="form-check-label" for="saleCheckbox2">
                      Point of Sale
                    </label>
                  </div>
                </li>
                <li>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value=""
                      id="saleCheckbox3"
                    />
                    <label class="form-check-label" for="saleCheckbox3">
                      TruLocal Inventory
                    </label>
                  </div>
                </li>
                <li>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value=""
                      id="saleCheckbox4"
                    />
                    <label class="form-check-label" for="saleCheckbox4">
                      Shop
                    </label>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="production_area dashboard_card mt-30">
            <div class="header_area">
              <h2 class="page_title">Product Organization</h2>
            </div>
            <div class="input_row">
              <label for="">Type</label>
              <input
                type="text"
                placeholder="Search Types"
                class="input_field"
              />
            </div>
            <div class="input_row mt-3">
              <label for="">Vendor</label>
              <input
                type="text"
                placeholder="Search Vendor"
                class="input_field"
              />
            </div>
            <div class="input_row mt-3 border_bottom_lg">
              <label for="">Collections</label>
              <input
                type="text"
                placeholder="Search Collections"
                class="input_field"
              />
            </div>
            <div class="input_row mt-3">
              <div class="d-flex-between w-100">
                <label for="">Tags</label>
                <div>
                  <a href="#" class="view_all">Manage</a>
                </div>
              </div>

              <input
                type="text"
                placeholder="Find or create Tags"
                class="input_field"
              />
            </div>
          </div>
          <div class="shipping_area dashboard_card mt-30">
            <div class="header_area">
              <h2 class="page_title">Online Store</h2>
            </div>

            <div class="input_row mt-4">
              <label for="">Theme template</label>
              <select class="niceSelect nice_select_area">
                <option data-display="Default Product">
                  Default Product
                </option>
                <option value="1">Product 1</option>
                <option value="2">Product 2</option>
                <option value="3">Product 3</option>
              </select>
              <label for=""
                >Assign a template from your current theme to define how the
                product is displayed.</label
              >
            </div>
          </div>
        </div>
      </div>
    </form>
  </section>
</main>

<?php require_once dirname(__FILE__) . '/footer.php'; ?>
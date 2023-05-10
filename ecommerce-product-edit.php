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
                  <span class="page_title">Create New Product</span>
                </a>
              </div>
              <div class="add_title_area dashboard_card mt-30">
                <div class="input_row">
                  <input
                    type="text"
                    placeholder="Product name"
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
                <div class="input_row mt-3">
                  <label for="">Images</label>
                  <div class="file_upload_wrapper">
                    <div class="uplod_file_grid">
                      <div>
                        <img
                          src="assets/images/others/drag_img.png"
                          alt="drag img"
                        />
                      </div>
                      <div class="drag_content">
                        <h4>Drop or select file</h4>
                        <h5>
                          Drop files here or click
                          <label for="dragFileUpload">Browse</label> through
                          your machine.
                        </h5>
                      </div>
                      <input type="file" id="dragFileUpload" class="d-none" />
                    </div>
                  </div>
                  <div class="uploded_img_area">
                    <div class="uploaded_img_item">
                      <img
                        src="assets/images/others/file_uploaded_img_1.png"
                        alt="file upload img"
                      />
                      <button type="button" class="file_close_btn">
                        <i class="fa-solid fa-xmark"></i>
                      </button>
                    </div>
                    <div class="uploaded_img_item">
                      <img
                        src="assets/images/others/file_uploaded_img_2.png"
                        alt="file upload img"
                      />
                      <button type="button" class="file_close_btn">
                        <i class="fa-solid fa-xmark"></i>
                      </button>
                    </div>
                    <div class="uploaded_img_item">
                      <img
                        src="assets/images/others/file_uploaded_img_3.png"
                        alt="file upload img"
                      />
                      <button type="button" class="file_close_btn">
                        <i class="fa-solid fa-xmark"></i>
                      </button>
                    </div>
                    <div class="uploaded_img_item">
                      <img
                        src="assets/images/others/file_uploaded_img_4.png"
                        alt="file upload img"
                      />
                      <button type="button" class="file_close_btn">
                        <i class="fa-solid fa-xmark"></i>
                      </button>
                    </div>
                    <div class="uploaded_img_item">
                      <img
                        src="assets/images/others/file_uploaded_img_5.png"
                        alt="file upload img"
                      />
                      <button type="button" class="file_close_btn">
                        <i class="fa-solid fa-xmark"></i>
                      </button>
                    </div>
                    <div class="uploaded_img_item">
                      <img
                        src="assets/images/others/file_uploaded_img_6.png"
                        alt="file upload img"
                      />
                      <button type="button" class="file_close_btn">
                        <i class="fa-solid fa-xmark"></i>
                      </button>
                    </div>
                    <div class="uploaded_img_item">
                      <img
                        src="assets/images/others/file_uploaded_img_1.png"
                        alt="file upload img"
                      />
                      <button type="button" class="file_close_btn">
                        <i class="fa-solid fa-xmark"></i>
                      </button>
                    </div>
                    <div class="uploaded_img_item">
                      <img
                        src="assets/images/others/file_uploaded_img_2.png"
                        alt="file upload img"
                      />
                      <button type="button" class="file_close_btn">
                        <i class="fa-solid fa-xmark"></i>
                      </button>
                    </div>
                    <div class="uploaded_img_item">
                      <img
                        src="assets/images/others/file_uploaded_img_3.png"
                        alt="file upload img"
                      />
                      <button type="button" class="file_close_btn">
                        <i class="fa-solid fa-xmark"></i>
                      </button>
                    </div>
                  </div>
                  <div class="file_upload_btn_area">
                    <button type="button" class="flie_upload_btn">
                      Remove All
                    </button>
                    <button type="button" class="flie_upload_btn">
                      Upload Files
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="product_outer_right_wrapper">
              <div class="production_area dashboard_card">
                <div class="header_area">
                  <h2 class="page_title">Product Organization</h2>
                </div>

                <div class="form-check form-switch">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="flexSwitchCheckChecked"
                    checked
                  />
                  <label class="form-check-label" for="flexSwitchCheckChecked"
                    >In Stock</label
                  >
                </div>

                <div class="input_row mt-3">
                  <input
                    type="number"
                    placeholder="Product code"
                    class="input_field"
                  />
                </div>
                <div class="input_row mt-3">
                  <input
                    type="number"
                    placeholder="Product SKU"
                    class="input_field"
                  />
                </div>

                <div class="input_row mt-3">
                  <label for="">Gender</label>
                  <div class="radio_button_grid">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="flexRadioDefault"
                        id="flexRadioDefault1"
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        Men
                      </label>
                    </div>
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="flexRadioDefault"
                        id="flexRadioDefault2"
                      />
                      <label class="form-check-label" for="flexRadioDefault2">
                        Women
                      </label>
                    </div>
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="flexRadioDefault"
                        id="flexRadioDefault3"
                        checked
                      />
                      <label class="form-check-label" for="flexRadioDefault3">
                        Kids
                      </label>
                    </div>
                  </div>
                </div>
                <div class="input_row mt-3">
                  <select id="selectCategory" name="state">
                    <option value=""></option>
                    <option value="AL">Category 1</option>
                    <option value="AL">Category 2</option>
                    <option value="AL">Category 3</option>
                    <option value="AL">Category 4</option>
                    <option value="AL">Category 5</option>
                    <option value="AL">Category 1</option>
                    <option value="AL">Category 2</option>
                    <option value="AL">Category 3</option>
                    <option value="AL">Category 4</option>
                    <option value="AL">Category 5</option>
                    <option value="AL">Category 1</option>
                    <option value="AL">Category 2</option>
                    <option value="AL">Category 3</option>
                    <option value="AL">Category 4</option>
                    <option value="AL">Category 5</option>
                  </select>
                </div>
                <div class="input_row mt-3">
                  <label for="">Tags</label>
                  <input
                    type="text"
                    name="tags-regular"
                    placeholder="Select Category"
                    class="input_field"
                  />
                </div>
                <div class="input_row mt-3">
                  <label for="">Regular price</label>
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">$</span>
                    <input
                      type="number"
                      class="input_field"
                      placeholder="Enter Price"
                      aria-describedby="basic-addon1"
                    />
                  </div>
                </div>
                <div class="input_row mt-3">
                  <label for="">Sale price</label>
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">$</span>
                    <input
                      type="number"
                      class="input_field"
                      placeholder="Enter Price"
                      aria-describedby="basic-addon1"
                    />
                  </div>
                </div>
                <div class="form-check form-switch mt-3">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="flexSwitchCheckChecked2"
                    checked
                  />
                  <label class="form-check-label" for="flexSwitchCheckChecked2"
                    >Price include taxes</label
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="add_product_area_btn text-end">
            <button type="button" class="add_product_btn">Save Changes</button>
          </div>
        </form>
      </section>
    </main>

    <?php require_once dirname(__FILE__) . '/footer.php'; ?>


<?php require_once dirname(__FILE__) . '/header.php'; ?>

    <main class="main_content_area">
      <!-- Add Product Section  -->
      <section class="add_product_wrapper">
        <form action="" class="form_area">
          <div>
            <div>
              <div class="add_title_area dashboard_card">
                <div class="input_row">
                  <label for="">Project Name</label>
                  <input
                    type="text"
                    placeholder="Project Name "
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
                <div class="row">
                  <div class="col-md-6">
                    <div class="input_row mt-3">
                      <label for="">Start Date</label>
                      <input type="date" class="input_field" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input_row mt-3">
                      <label for="">Possible End Date</label>
                      <input type="date" class="input_field" />
                    </div>
                  </div>
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
          </div>
          <div class="add_product_area_btn text-end">
            <button type="button" class="add_product_btn">
              Create Product
            </button>
          </div>
        </form>
      </section>
    </main>

    <?php require_once dirname(__FILE__) . '/footer.php'; ?>

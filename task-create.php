<?php require_once dirname(__FILE__) . '/header.php'; ?>

    <main class="main_content_area">
      <div class="header_area">
        <h3 class="page_title">Create New Task</h3>
      </div>
      <!-- Add Product Section  -->
      <section class="add_product_wrapper mt-4">
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
                  <select id="selectMember" name="state" multiple="multiple">
                    <option value=""></option>
                    <option value="AL">User 1</option>
                    <option value="AL">User 2</option>
                    <option value="AL">User 3</option>
                    <option value="AL">User 4</option>
                    <option value="AL">User 5</option>
                    <option value="AL">User 1</option>
                    <option value="AL">User 2</option>
                    <option value="AL">User 3</option>
                    <option value="AL">User 4</option>
                    <option value="AL">User 5</option>
                    <option value="AL">User 1</option>
                    <option value="AL">User 2</option>
                    <option value="AL">User 3</option>
                    <option value="AL">User 4</option>
                    <option value="AL">User 5</option>
                  </select>
                </div>
                <div class="input_row mt-3">
                  <label for="">PTask Budget</label>
                  <input
                    type="number"
                    placeholder="Task Budget "
                    class="input_field"
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="add_product_area_btn text-end">
            <button type="button" class="add_product_btn">Create Task</button>
          </div>
        </form>
      </section>
    </main>

    <?php require_once dirname(__FILE__) . '/footer.php'; ?>


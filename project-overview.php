<?php require_once dirname(__FILE__) . '/header.php'; ?>

    <main class="main_content_area">
      <!-- Add Product Section  -->
      <section class="add_product_wrapper">
        <div class="product_outer_grid13">
          <div class="product_outer_left_wrapper">
            <div class="add_title_area dashboard_card">
              <div class="header_area">
                <h3 class="page_title">Project Overview</h3>
              </div>
              <div class="project_user_grid">
                <div class="user_img">
                  <img src="assets/images/others/profile_img.png" alt="" />
                </div>
                <div>
                  <h4>Admin UI Design</h4>
                  <p>
                    It will be a very simple project. Just the frontend design,
                    no backend necessary as of now
                  </p>
                </div>
              </div>
              <div class="project_content_area">
                <h4>Project Details :</h4>
                <p>
                  To an English person, it will seem like simplified English, as
                  a skeptical Cambridge friend of mine told me what Occidental
                  is. The European languages are members of the same family.
                  Their separate existence is a myth. For science, music, sport,
                  etc,
                </p>
                <ul class="project_list">
                  <li>To achieve this, it would be necessary</li>
                  <li>Separate existence is a myth.</li>
                  <li>If several languages coalesce</li>
                </ul>
              </div>
            </div>
            <div class="commnet_area dashboard_card mt-30">
              <div class="header_area">
                <h3 class="page_title">Comments</h3>
              </div>
              <a href="#" class="project_user_grid">
                <div class="user_img">
                  <img src="assets/images/others/profile_img.png" alt="" />
                </div>
                <div>
                  <h4>Jon due</h4>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Consequuntur, alias.
                  </p>
                </div>
              </a>
              <a href="#" class="project_user_grid">
                <div class="user_img">
                  <img src="assets/images/others/profile_img.png" alt="" />
                </div>
                <div>
                  <h4>Jon due</h4>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Consequuntur, alias.
                  </p>
                </div>
              </a>
            </div>
          </div>
          <div class="product_outer_right_wrapper mt-0">
            <div class="production_area dashboard_card">
              <div class="header_area">
                <h2 class="page_title">Team Members</h2>
              </div>
              <div class="team_member_item_area">
                <a href="" class="team_member_item">
                  <div class="tem_grid">
                    <div class="user_img">
                      <img
                        src="assets/images/others/transfer_user_img_1.png"
                        alt=""
                      />
                    </div>
                    <div>
                      <h4>Joan due</h4>
                    </div>
                  </div>
                  <div class="team_role">UI/UX Designer</div>
                </a>
                <a href="" class="team_member_item">
                  <div class="tem_grid">
                    <div class="user_img">
                      <img
                        src="assets/images/others/transfer_user_img_1.png"
                        alt=""
                      />
                    </div>
                    <div>
                      <h4>Joan due</h4>
                    </div>
                  </div>
                  <div class="team_role">UI/UX Designer</div>
                </a>
                <a href="" class="team_member_item">
                  <div class="tem_grid">
                    <div class="user_img">
                      <img
                        src="assets/images/others/transfer_user_img_1.png"
                        alt=""
                      />
                    </div>
                    <div>
                      <h4>Joan due</h4>
                    </div>
                  </div>
                  <div class="team_role">UI/UX Designer</div>
                </a>
              </div>
              <button
                type="button"
                class="transfer_btn"
                data-bs-toggle="modal"
                data-bs-target="#newMemberModal"
              >
                Assign a new member
              </button>
            </div>

            <!-- Member Modal -->
            <div
              class="modal fade"
              id="newMemberModal"
              tabindex="-1"
              aria-labelledby="newMemberModalLabel"
              aria-hidden="true"
            >
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="newMemberModalLabel">
                      <b>Add new member</b>
                    </h5>
                    <button
                      type="button"
                      class="btn-close"
                      data-bs-dismiss="modal"
                      aria-label="Close"
                    ></button>
                  </div>
                  <div class="modal-body">
                    <form action="" class="form_area">
                      <div class="input_row">
                        <select id="selectModalMember" name="state">
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
                        <select id="selectModalTag" name="stateTag">
                          <option value=""></option>
                          <option value="AL">Tag 1</option>
                          <option value="AL">Tag 2</option>
                          <option value="AL">Tag 3</option>
                          <option value="AL">Tag 4</option>
                          <option value="AL">Tag 5</option>
                        </select>
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="change_btn">Add</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="production_area dashboard_card mt-30">
              <div class="header_area">
                <h2 class="page_title">Attatched Files</h2>
              </div>
              <div class="team_member_item_area">
                <div class="team_member_item attachment_file_item">
                  <div class="tem_grid">
                    <div class="user_img">
                      <svg
                        stroke="currentColor"
                        fill="currentColor"
                        stroke-width="0"
                        viewBox="0 0 16 16"
                        height="1em"
                        width="1em"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3z"
                        ></path>
                      </svg>
                    </div>
                    <div>
                      <h4>required_assets.zip</h4>
                    </div>
                  </div>
                  <a href="#" class="attch_download_btn">
                    <svg
                      stroke="currentColor"
                      fill="none"
                      stroke-width="2"
                      viewBox="0 0 24 24"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      height="24"
                      width="24"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"
                      ></path>
                      <polyline points="7 10 12 15 17 10"></polyline>
                      <line x1="12" y1="15" x2="12" y2="3"></line>
                    </svg>
                  </a>
                </div>
                <div class="team_member_item attachment_file_item">
                  <div class="tem_grid">
                    <div class="user_img">
                      <svg
                        stroke="currentColor"
                        fill="currentColor"
                        stroke-width="0"
                        viewBox="0 0 16 16"
                        height="1em"
                        width="1em"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3z"
                        ></path>
                      </svg>
                    </div>
                    <div>
                      <h4>required_assets.zip</h4>
                    </div>
                  </div>
                  <a href="#" class="attch_download_btn">
                    <svg
                      stroke="currentColor"
                      fill="none"
                      stroke-width="2"
                      viewBox="0 0 24 24"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      height="24"
                      width="24"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"
                      ></path>
                      <polyline points="7 10 12 15 17 10"></polyline>
                      <line x1="12" y1="15" x2="12" y2="3"></line>
                    </svg>
                  </a>
                </div>
                <div class="team_member_item attachment_file_item">
                  <div class="tem_grid">
                    <div class="user_img">
                      <svg
                        stroke="currentColor"
                        fill="currentColor"
                        stroke-width="0"
                        viewBox="0 0 16 16"
                        height="1em"
                        width="1em"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3z"
                        ></path>
                      </svg>
                    </div>
                    <div>
                      <h4>required_assets.zip</h4>
                    </div>
                  </div>
                  <a href="#" class="attch_download_btn">
                    <svg
                      stroke="currentColor"
                      fill="none"
                      stroke-width="2"
                      viewBox="0 0 24 24"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      height="24"
                      width="24"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"
                      ></path>
                      <polyline points="7 10 12 15 17 10"></polyline>
                      <line x1="12" y1="15" x2="12" y2="3"></line>
                    </svg>
                  </a>
                </div>
              </div>
              <button
                type="button"
                class="transfer_btn"
                data-bs-toggle="modal"
                data-bs-target="#attachmentModal"
              >
                Add a new file
              </button>
            </div>

            <!-- Attachment Modal -->
            <div
              class="modal fade"
              id="attachmentModal"
              tabindex="-1"
              aria-labelledby="attachmentModalLabel"
              aria-hidden="true"
            >
              <div class="modal-dialog modal-dialog-centered">
                <form action="" class="form_area">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="attachmentModalLabel">
                        <b>Upload Your File</b>
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
                        <label for="">Select your file</label>
                        <input type="file" />
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="change_btn">Upload</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    
<?php require_once dirname(__FILE__) . '/footer.php'; ?>


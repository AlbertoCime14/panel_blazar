<div class="page-wrapper">

  <!-- Page Content-->
  <div class="page-content-tab">

    <div class="container">
      <!-- Page-Title -->
      <div class="row">
        <div class="col-sm-12">
          <div class="page-title-box">
            <div class="float-right">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Metrica</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Hospital</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div>
            <h4 class="page-title">Dashboard</h4>
          </div>
          <!--end page-title-box-->
        </div>
        <!--end col-->
      </div>
      <!-- end page title end breadcrumb -->
      <div class="row">
        <div class="col-lg-2">
          <div class="card report-card">
            <div class="card-body text-center">
              <div class="report-main-icon bg-light-alt mx-auto">
                <i class="las la-wheelchair text-primary font-30"></i>
              </div>
              <h4 class="font-22 font-weight-semibold">40</h4>
              <p class="text-muted mb-1 font-weight-normal font-13">Ultimas ventas</p>
            </div>
            <!--end card-body-->
          </div>
          <!--end card-->
        </div>
        <!-- end col-->
        <div class="col-lg-2">
          <div class="card report-card">
            <div class="card-body text-center">
              <div class="report-main-icon bg-light-alt mx-auto">
                <i class="las la-bed text-primary font-30"></i>
              </div>
              <h4 class="font-22 font-weight-semibold">40</h4>
              <p class="text-muted mb-1 font-weight-normal font-13">Nuevos clientes</p>
            </div>
            <!--end card-body-->
          </div>
          <!--end card-->
        </div>
        <!-- end col-->
        <div class="col-lg-2">
          <div class="card report-card">
            <div class="card-body text-center">
              <div class="report-main-icon bg-light-alt mx-auto">
                <i class="las la-cut text-primary font-30"></i>
              </div>
              <h4 class="font-22 font-weight-semibold">12</h4>
              <p class="text-muted mb-1 font-weight-normal font-13">Operaciones</p>
            </div>
            <!--end card-body-->
          </div>
          <!--end card-->
        </div>
        <!-- end col-->
        <div class="col-lg-2">
          <div class="card report-card">
            <div class="card-body text-center">
              <div class="report-main-icon bg-light-alt mx-auto">
                <i class="las la-stethoscope text-primary font-30"></i>
              </div>
              <h4 class="font-22 font-weight-semibold">10</h4>
              <p class="text-muted mb-1 font-weight-normal font-13">Usuarios</p>
            </div>
            <!--end card-body-->
          </div>
          <!--end card-->
        </div>
        <!-- end col-->
        <div class="col-lg-2">
          <div class="card report-card">
            <div class="card-body text-center">
              <div class="report-main-icon bg-light-alt mx-auto">
                <i class="las la-user-nurse text-primary font-30"></i>
              </div>
              <h4 class="font-22 font-weight-semibold">30</h4>
              <p class="text-muted mb-1 font-weight-normal font-13">Clientes</p>
            </div>
            <!--end card-body-->
          </div>
          <!--end card-->
        </div>
        <!-- end col-->
        <div class="col-lg-2">
          <div class="card report-card">
            <div class="card-body text-center">
              <div class="report-main-icon bg-light-alt mx-auto">
                <i class="las la-hand-holding-usd text-primary font-30"></i>
              </div>
              <h4 class="font-22 font-weight-semibold">$41,520</h4>
              <p class="text-muted mb-1 font-weight-normal font-13">Earnings</p>
            </div>
            <!--end card-body-->
          </div>
          <!--end card-->
        </div>
        <!-- end col-->
      </div>
      <!--end row-->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h4 class="header-title mt-0">Hospital Survey</h4>
              <div class="">
                <div id="hospital_survey" class="apex-charts"></div>
              </div>
            </div>
            <!--end card-body-->
          </div>
          <!--end card-->
        </div>
        <!-- end col-->
      </div>
      <!--end row-->


      <!--end row-->

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h4 class="header-title mt-0 mb-3">Nuevos clientes</h4>
              <div class="table-responsive">
                <table id="datatable" class="table">
                  <thead class="thead-light">
                    <tr>
                      <th>Patient Name</th>
                      <th>Age</th>
                      <th>ID</th>
                      <th>Address</th>
                      <th>Mobile No</th>
                      <th>Last Visit</th>
                      <th>Diseases</th>
                      <th class="text-right">Action</th>
                    </tr>
                    <!--end tr-->
                  </thead>

                  <tbody>
                    <tr>
                      <td>
                        <a href="#"><img src="<?php echo base_url(); ?>/recursos/assets/images/users/user-10.jpg" alt="" class="thumb-sm rounded-circle mr-2">Donald Gardner</a>
                      </td>
                      <td>36</td>
                      <td>#1236</td>
                      <td>B28 University Street US</td>
                      <td>+123456789</td>
                      <td>18/07/2020</td>
                      <td><span class="badge badge-soft-danger p-2">Cancer</span></td>
                      <td>
                        <a href="#" class="mr-2"><i class="las la-pen text-info font-18"></i></a>
                        <a href="#"><i class="las la-trash-alt text-danger font-18"></i></a>
                      </td>
                    </tr>
                    <!--end tr-->
                    <tr>
                      <td>
                        <a href="#"><img src="<?php echo base_url(); ?>/recursos/assets/images/users/user-9.jpg" alt="" class="thumb-sm rounded-circle mr-2">Keith Jacobson</a>
                      </td>
                      <td>48</td>
                      <td>#1236</td>
                      <td>B28 University Street US</td>
                      <td>+123456789</td>
                      <td>18/07/2020</td>
                      <td><span class="badge badge-soft-success p-2">Ulcers</span></td>
                      <td>
                        <a href="#" class="mr-2"><i class="las la-pen text-info font-18"></i></a>
                        <a href="#"><i class="las la-trash-alt text-danger font-18"></i></a>
                      </td>
                    </tr>
                    <!--end tr-->
                    <tr>
                      <td>
                        <a href="#"><img src="<?php echo base_url(); ?>/recursos/assets/images/users/user-9.jpg" alt="" class="thumb-sm rounded-circle mr-2">Greg Crosby</a>
                      </td>
                      <td>27</td>
                      <td>#1236</td>
                      <td>B28 University Street US</td>
                      <td>+123456789</td>
                      <td>18/07/2020</td>
                      <td><span class="badge badge-soft-danger p-2">HIV</span></td>
                      <td>
                        <a href="#" class="mr-2"><i class="las la-pen text-info font-18"></i></a>
                        <a href="#"><i class="las la-trash-alt text-danger font-18"></i></a>
                      </td>
                    </tr>
                    <!--end tr-->
                    <tr>
                      <td>
                        <a href="#/hospital/patient-profile.html"><img src="<?php echo base_url(); ?>/recursos/assets/images/users/user-8.jpg" alt="" class="thumb-sm rounded-circle mr-2">Fred Godina</a>
                      </td>
                      <td>22</td>
                      <td>#1236</td>
                      <td>B28 University Street US</td>
                      <td>+123456789</td>
                      <td>18/07/2020</td>
                      <td><span class="badge badge-soft-success p-2">Virus Fever</span></td>
                      <td>
                        <a href="#" class="mr-2"><i class="las la-pen text-info font-18"></i></a>
                        <a href="#"><i class="las la-trash-alt text-danger font-18"></i></a>
                      </td>
                    </tr>
                    <!--end tr-->
                    <tr>
                      <td>
                        <a href="#"><img src="<?php echo base_url(); ?>/recursos/assets/images/users/user-7.jpg" alt="" class="thumb-sm rounded-circle mr-2">Peggy Doe</a>
                      </td>
                      <td>51</td>
                      <td>#7851</td>
                      <td>B28 University Street US</td>
                      <td>+123456789</td>
                      <td>20/07/2020</td>
                      <td><span class="badge badge-soft-success p-2">heart attack</span></td>
                      <td>
                        <a href="#" class="mr-2"><i class="las la-pen text-info font-18"></i></a>
                        <a href="#"><i class="las la-trash-alt text-danger font-18"></i></a>
                      </td>
                    </tr>
                    <!--end tr-->
                    <tr>
                      <td>
                        <a href="#"><img src="<?php echo base_url(); ?>/recursos/assets/images/users/user-8.jpg" alt="" class="thumb-sm rounded-circle mr-2">Jennifer Doss</a>
                      </td>
                      <td>18</td>
                      <td>#3654</td>
                      <td>B28 University Street US</td>
                      <td>+123456789</td>
                      <td>19/07/2020</td>
                      <td><span class="badge badge-soft-danger p-2">Ebola</span></td>
                      <td>
                        <a href="#" class="mr-2"><i class="las la-pen text-info font-18"></i></a>
                        <a href="#"><i class="las la-trash-alt text-danger font-18"></i></a>
                      </td>
                    </tr>
                    <!--end tr-->
                  </tbody>
                </table>
              </div>
            </div>
            <!--end card-body-->
          </div>
          <!--end card-->
        </div>
        <!--end col-->
      </div>
      <!--end row-->

    </div>
    <!-- container -->

    <!--  Modal content for the above example -->
    <div class="modal modal-rightbar fade" tabindex="-1" role="dialog" aria-labelledby="MetricaRightbar" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title mt-0" id="MetricaRightbar">Appearance</h5>
            <button type="button" class="btn btn-sm btn-soft-primary btn-circle-sm btn-square" data-dismiss="modal" aria-hidden="true"><i class="mdi mdi-close"></i></button>
          </div>
          <div class="modal-body">
            <!-- Nav tabs -->
            <ul class="nav nav-pills nav-justified mt-2 mb-4" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#ActivityTab" role="tab">Activity</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#TasksTab" role="tab">Tasks</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#SettingsTab" role="tab">Settings</a>
              </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div class="tab-pane active " id="ActivityTab" role="tabpanel">
                <div class="bg-light mx-n3">
                  <img src="../assets/images/small/img-1.gif" alt="" class="d-block mx-auto my-4" height="180">
                </div>
                <div class="slimscroll scroll-rightbar">
                  <div class="activity">
                    <div class="activity-info">
                      <div class="icon-info-activity">
                        <i class="mdi mdi-checkbox-marked-circle-outline bg-soft-success"></i>
                      </div>
                      <div class="activity-info-text mb-2">
                        <div class="mb-1">
                          <small class="text-muted d-block mb-1">10 Min ago</small>
                          <a href="#" class="m-0 w-75">Task finished</a>
                        </div>
                        <p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>
                      </div>
                    </div>

                    <div class="activity-info">
                      <div class="icon-info-activity">
                        <i class="mdi mdi-timer-off bg-soft-pink"></i>
                      </div>
                      <div class="activity-info-text mb-2">
                        <div class="mb-1">
                          <small class="text-muted d-block mb-1">50 Min ago</small>
                          <a href="#" class="m-0 w-75">Task Overdue</a>
                        </div>
                        <p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>
                        <span class="badge badge-soft-secondary">Design</span>
                        <span class="badge badge-soft-secondary">HTML</span>
                      </div>
                    </div>
                    <div class="activity-info">
                      <div class="icon-info-activity">
                        <i class="mdi mdi-alert-decagram bg-soft-purple"></i>
                      </div>
                      <div class="activity-info-text mb-2">
                        <div class="mb-1">
                          <small class="text-muted d-block mb-1">10 hours ago</small>
                          <a href="#" class="m-0 w-75">New Task</a>
                        </div>
                        <p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>
                      </div>
                    </div>

                    <div class="activity-info">
                      <div class="icon-info-activity">
                        <i class="mdi mdi-clipboard-alert bg-soft-warning"></i>
                      </div>
                      <div class="activity-info-text mb-2">
                        <div class="mb-1">
                          <small class="text-muted d-block mb-1">yesterday</small>
                          <a href="#" class="m-0 w-75">New Comment</a>
                        </div>
                        <p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>
                      </div>
                    </div>
                    <div class="activity-info">
                      <div class="icon-info-activity">
                        <i class="mdi mdi-clipboard-alert bg-soft-secondary"></i>
                      </div>
                      <div class="activity-info-text mb-2">
                        <div class="mb-1">
                          <small class="text-muted d-block mb-1">01 feb 2020</small>
                          <a href="#" class="m-0 w-75">New Lead Meting</a>
                        </div>
                        <p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>
                      </div>
                    </div>
                    <div class="activity-info">
                      <div class="icon-info-activity">
                        <i class="mdi mdi-checkbox-marked-circle-outline bg-soft-success"></i>
                      </div>
                      <div class="activity-info-text mb-2">
                        <div class="mb-1">
                          <small class="text-muted d-block mb-1">26 jan 2020</small>
                          <a href="#" class="m-0 w-75">Task finished</a>
                        </div>
                        <p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>
                      </div>
                    </div>
                  </div>
                  <!--end activity-->
                </div>
                <!--end activity-scroll-->
              </div>
              <!--end tab-pane-->
              <div class="tab-pane" id="TasksTab" role="tabpanel">
                <div class="m-0">
                  <div id="rightbar_chart" class="apex-charts"></div>
                </div>
                <div class="text-center mt-n2 mb-2">
                  <button type="button" class="btn btn-soft-primary">Create Project</button>
                  <button type="button" class="btn btn-soft-primary">Create Task</button>
                </div>
                <div class="slimscroll scroll-rightbar">
                  <div class="p-2">
                    <div class="media mb-3">
                      <img src="../assets/images/widgets/project3.jpg" alt="" class="thumb-lg rounded-circle">
                      <div class="media-body align-self-center text-truncate ml-3">
                        <p class="text-success font-weight-semibold mb-0 font-14">Project</p>
                        <h4 class="mt-0 mb-0 font-weight-semibold text-dark font-18">Payment App</h4>
                      </div>
                      <!--end media-body-->
                    </div>
                    <span><b>Deadline:</b> 02 June 2020</span>
                    <a href="javascript: void(0);" class="d-block mt-3">
                      <p class="text-muted mb-0">Complete Tasks<span class="float-right">75%</span></p>
                      <div class="progress mt-2" style="height: 4px;">
                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </a>
                  </div>
                  <hr class="hr-dashed">
                </div>
              </div>
              <!--end tab-pane-->
              <div class="tab-pane" id="SettingsTab" role="tabpanel">
                <div class="p-1 bg-light mx-n3">
                  <h6 class="px-3">Account Settings</h6>
                </div>
                <div class="p-2 text-left mt-3">
                  <div class="custom-control custom-switch switch-primary mb-3">
                    <input type="checkbox" class="custom-control-input" id="settings-switch1" checked="">
                    <label class="custom-control-label" for="settings-switch1">Auto updates</label>
                  </div>

                  <div class="custom-control custom-switch switch-primary mb-3">
                    <input type="checkbox" class="custom-control-input" id="settings-switch2">
                    <label class="custom-control-label" for="settings-switch2">Location Permission</label>
                  </div>

                  <div class="custom-control custom-switch switch-primary mb-3">
                    <input type="checkbox" class="custom-control-input" id="settings-switch3" checked="">
                    <label class="custom-control-label" for="settings-switch3">Show offline Contacts</label>
                  </div>
                </div>
                <div class="p-1 bg-light mx-n3">
                  <h6 class="px-3">General Settings</h6>
                </div>
                <div class="p-2 text-left mt-3">
                  <div class="custom-control custom-switch switch-primary mb-3">
                    <input type="checkbox" class="custom-control-input" id="settings-switch4" checked="">
                    <label class="custom-control-label" for="settings-switch4">Show me Online</label>
                  </div>

                  <div class="custom-control custom-switch switch-primary mb-3">
                    <input type="checkbox" class="custom-control-input" id="settings-switch5">
                    <label class="custom-control-label" for="settings-switch5">Status visible to all</label>
                  </div>

                  <div class="custom-control custom-switch switch-primary mb-3">
                    <input type="checkbox" class="custom-control-input" id="settings-switch6" checked="">
                    <label class="custom-control-label" for="settings-switch6">Notifications Popup</label>
                  </div>
                </div>
              </div>
              <!--end tab-pane-->
            </div>
            <!--end tab-content-->
          </div>
          <!--end modal-body-->
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <footer class="footer text-center text-sm-left">
      &copy; 2020 Metrica <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
    </footer>
    <!--end footer-->
  </div>
  <!-- end page content -->
</div>
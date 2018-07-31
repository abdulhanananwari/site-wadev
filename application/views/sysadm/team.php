<?php $this->load->view('sysadm/sidebar');?>
<div class="content">
    <div class="container-fluid">
        <ul class="nav nav-pills nav-pills-icons" role="tablist">
            <li class="nav-item">
                <a class="nav-link" href="#dashboard-1" role="tab" data-toggle="tab">
                <i class="material-icons">dashboard</i>dfhdsjfh
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#schedule-1" role="tab" data-toggle="tab">
                <i class="material-icons">schedule</i> Schedule
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#tasks-1" role="tab" data-toggle="tab">
                <i class="material-icons">list</i> Tasks
                </a>
            </li>
        </ul>
        <div class="tab-content tab-space">
                <div class="tab-pane active" id="dashboard-1">
                  Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.
                  <br>
                  <br> Dramatically visualize customer directed convergence without revolutionary ROI.
                </div>
                <div class="tab-pane" id="schedule-1">
                  Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
                  <br>
                  <br>Dramatically maintain clicks-and-mortar solutions without functional solutions.
                </div>
                <div class="tab-pane" id="tasks-1">
                  Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                  <br>
                  <br>Dynamically innovate resource-leveling customer service for state of the art customer service.
                </div>
              </div>
    </div>
</div>

<?php $this->load->view('sysadm/footer');?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Data Team</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group has-default">
                <label>Nama</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="form-group has-default">
                <label>Deskripsi</label>
                <textarea type="text" id="description" name="description" class="form-control"></textarea>
            </div>
            <div class="form-group has-default">
                <label>Foto</label>
                <input type="file" id="image" name="image" class="form-control">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-link">Nice Button</button>
          <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
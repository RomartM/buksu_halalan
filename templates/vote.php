<nav>
  <div class="nav-wrapper">
    <img class="materialboxed brand-logo user-profile" width="100" src="assets/images/profile/default/man.png">
    <div class="bh-user-brief-info">
      <span class="bh-name">Juan Cruz</span>
      <span class="bh-id-number">1234567</span>
      <span class="bh-id-college">College of Arts and Sciences</span>
    </div>
    <img class="center brand-logo" width="100" src="assets/images/COMELEC_LOGO_WHITE.png">
    <div class="right brand-logo">
      <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Confirm VOTE</a>
    </div>
  </div>
</nav>
<div class="bh-no-select bh-start-center">
  <div class="card-panel white bh-user-vote">
    <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s5"><a href="#data_1">STUDENT BODY ORGANIZATION (SBO)</a></li>
        <li class="tab col s5"><a href="#data_2">SUPREME STUDENT COUNCIL (SSC)</a></li>
      </ul>
    </div>
    <div id="data_1" class="col s12">
      <?php include 'includes/sub-item.php'; ?>
    </div>
    <div id="data_2" class="col s12">
      <?php include 'includes/sub-item.php'; ?>
    </div>
  </div>
  </div>
</div>
<!-- Modal Structure -->
<div id="modal1" class="modal">
  <div class="modal-content black-text">
    <h4>Confirm Vote</h4>
    <p>A bunch of text</p>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Disagree</a>
  </div>
</div>

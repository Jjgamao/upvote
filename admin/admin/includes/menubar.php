<aside class="main-sidebar" style="background: #1E1E1E;">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel" style ="background: #1E1E1E">
      <div class="pull-left image">
        <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $user['firstname'].' '.$user['lastname']; ?></p>
        <a><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header"style = "color: #808080; background: #1E1E1E">REPORTS</li>
      <li class=""style="color: #808080; background:#202020;"><a href="home.php"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
      <li class=""style="color: #808080; background:#202020;"><a href="votes.php"><i class="glyphicon glyphicon-lock"></i> <span>Votes</span></a></li>
      <li class="header"style = "color: #808080; background: #1E1E1E">MANAGE</li>
      <li class=""style="color: #808080; background:#202020;"><a href="voters.php"><i class="fa fa-address-card-o"></i> <span>Voters</span></a></li>
      <li class=""style="color: #808080; background:#202020;"><a href="positions.php"><i class="fa fa-gavel"></i> <span>Positions</span></a></li>
      <li class=""style="color: #808080; background:#202020;"><a href="candidates.php"><i class="fa fa-user-plus"></i> <span>Candidates</span></a></li>
      <li class="header"style = "color: #808080; background: #1E1E1E">SETTINGS</li>
      <li class=""style="color: #808080; background:#202020;"><a href="ballot.php"><i class="fa fa-folder-open"></i> <span>Ballot Position</span></a></li>
      <li class=""style="color: #808080; background:#202020;"><a href="#config" data-toggle="modal"><i class="fa fa-pencil"></i> <span>Election Title</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
<?php include 'config_modal.php'; ?>
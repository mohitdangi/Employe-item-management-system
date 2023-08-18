<style>
 .skin-blue .wrapper, .skin-blue .main-sidebar, .skin-blue .left-side {


    background-color: #f38e27 !important;
    /* color: #fff; */
  }
  .skin-blue .sidebar-menu>li.header {
    color: #fff;
    background-color: #ffac6e; 
    
}
.skin-blue .sidebar-menu>li.active>a {
  background-color: #f38e27 !important;
  color: #fff;
}
.skin-blue .sidebar-menu>li>.treeview-menu {
    margin: 0 1px;
    background-color: #b26417;
    color: #fff;
}
.skin-blue .sidebar-menu>li:hover>a, .skin-blue .sidebar-menu>li.active>a, .skin-blue .sidebar-menu>li.menu-open>a {
    color: #fff;
    background-color: #b26417;
    color: #fff;
}
.skin-blue .sidebar a {
    color: #fff;
}
.skin-blue .sidebar-menu .treeview-menu>li>a {
    color: #fff;
}
.skin-blue .main-header .navbar .sidebar-toggle:hover {
    background-color: #b26417;
}
.skin-blue .sidebar-menu>li.active>a {
    border-left-color: #f38e27;
}
</style>
<aside class="main-sidebar custom-button" >
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel custom-button">
      <div class="pull-left image">
        <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info custom-button">
        <p><?php echo $user['firstname'].' '.$user['lastname']; ?></p>
        <a class="custom-button"><i class="fa fa-circle text-success custom-button"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu custom-button" data-widget="tree">
      <li class="header custom-button">REPORTS</li>
      <li class="custom-button"><a href="home.php" class="custom-button"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li class="header custom-button">MANAGE</li>
      <li class="treeview custom-button">
        <a href="#" class="custom-button">
          <i class="fa fa-refresh custom-button"></i>
          <span>Transaction</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu custom-button">
          <li><a href="borrow.php" class="custom-button"><i class="fa fa-circle-o"></i> Borrow</a></li>
          <li><a href="return.php" class="custom-button"><i class="fa fa-circle-o"></i> Return</a></li>
        </ul>
      </li>
      <li class="treeview ">
        <a href="#" class="custom-button">
          <i class="fa fa-book"></i>
          <span>Books</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="book.php" class="custom-button"><i class="fa fa-circle-o"></i> Book List</a></li>
          <li><a href="category.php" class="custom-button"><i class="fa fa-circle-o"></i> Category</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#" class="custom-button">
          <i class="fa fa-graduation-cap"></i>
          <span>Students</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu ">
          <li><a href="student.php" class="custom-button"><i class="fa fa-circle-o"></i> Student List</a></li>
          <li><a href="course.php" class="custom-button"><i class="fa fa-circle-o"></i> Course</a></li>
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
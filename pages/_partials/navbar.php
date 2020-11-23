<nav class="navbar navbar-dark bg-primary navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img class="navbar-brand" src="../../assets/img/logo.jpg" alt="Brand">
      <a class="navbar-brand" style="color : white" href="../dasbor"> Warga Daring</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <p class="navbar-text"><i class="fa fa-user"></i> Hai, <?php echo $_SESSION['user']['nama_user'] ?></p>
        <li class="nav-item" >
          <a href="../dasbor" class="nav-link" style="color : white;" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='white'"><i class="fa fa-home"></i> Dashbord</a>
        </li>
        <li class="nav-item" >
          <a href="../login/logout.php" class="nav-link" style="color : white" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='white'"><i class="fa fa-sign-out"></i> Keluar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

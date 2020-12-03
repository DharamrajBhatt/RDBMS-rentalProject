<header class="header header-transparent">
  <nav class="navbar navbar-static-top navbar-expand-lg header-sticky">
    <div class="container-fluid">
      <button id="nav-icon4" type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse">
          <span></span>
          <span></span>
          <span></span>

      </button>
<!--
      <a class="navbar-brand" href="admin-index.php">
        <img class="img-fluid" src="images/logo.svg" alt="logo">
      </a> -->
      <a class="navbar-brand" href="admin-index.php">
       <img src="images/logo2.png" style="width:150px; height:120px; margin-top:-30px" alt="logo">
      </a>

      <div class="navbar-collapse collapse justify-content-start">
        <ul class="nav navbar-nav">
			
          <li >

            <a class="nav-link" href="admin-manage-users.php" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:#cfb579; padding-left: 150px;">Manage Users</a>

          </li>



        </ul>

        <div class="add-listing"  >
            <div class="nav-item dropdown">
              <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #debe79; font-weight: 600; font-size: 17px;">
                  <i class="far fa-user pr-2" style="color: #debe79; font-weight: 600; font-size: 17px;"></i> Pofile <i class="fas fa-chevron-down fa-xs"></i></a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="admin-my-profile.php">My Profile</a></li>
                    <form id="adminHeader" action="admin-login.php" method="POST">
                      <li><button type="submit" name="logoutButton" class="login-btn">Log Out</button></li>
                      <!-- <li><a class="dropdown-item" type="submit" name="logoutButton">LOG Out</a></li> -->
                    </form>
                    <!-- <li><a class="dropdown-item" href="admin-my-profile.php">Log Out</a></li>   -->
                  </ul>
            </div>
        </div>
      </div>
  </nav>
  <style>
  .header .container-fluid {
    padding: 0 120px;
    background-color: #fff;
    -webkit-box-align: initial;
    -ms-flex-align: initial;
    align-items: initial;
    height: 110px;
	box-shadow: 4px 4px 4px 1px #bdb8b8;
}
.navbar .dropdown .dropdown-menu li a:hover {
    color: #debe79;
    padding-left: 10px;
}
.header-text{
text-align:center;
}
.section-title .title:before
{
	background-color:#fff;
}
.bg-color{
	background-color: #debe79;
	color: #fff;
}
a{
	color:#debe79;
}
.bg-footer {
    background-color: #23201f;
    font-size: 14px;
}
.admin-profile {
    padding-top: 50px;
	
}
.btn-padding {
    margin-left: 465px;
}
.heading-padding {
    color: #bb9e5f;
}
  </style>
</header>

<!--=================================
main container padding from header -->

<div style="padding-top: 82px;"> </div>
<!-- <div class="header-inner bg-light"> </div> -->

<!--=================================
main container padding from header -->

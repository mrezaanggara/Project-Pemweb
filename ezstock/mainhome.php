
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <link rel="icon" href="img/logotab.png" type="image/png" />
    <title>Ez-Stock</title>
      <!--Bootstrap css-->
    <link href="./css/bootstrap/bootstrap.css" type="text/css" rel="stylesheet">
    
      <!--main css-->
    <link href="./css/style.css" type="text/css" rel="stylesheet">
  </head>

  <body>
      <!--================ Start menu bar  =================-->
      <nav class="navbar navbar-dark bg-dark">
          <div class="dropdown">
              <a class="mainmenubtn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="img/logo.png" alt="" />
              </a>
              <div class="dropdown-child">
				  <a href="mainhome.php">Home</a>
                  <a href="+account.php">Add new Account</a>
                  <a href="#">Import New Data</a>
                  <a href="#">Buying List</a>
                  <a href="#">Transfer Stock</a>
                  <a href="#">List Stock</a>
                  <a href="#">Print Label Stock</a>
              </div>
          </div>
		  <form method="post" action="logout.php">
             <input type="submit" value="Logout" />
          </form>
      </nav>
      <!--================ Start home banner  =================-->
      <section class="home_banner">
          <div class="banner_content">
              <p class="text-uppercase" >
                 Ez-Stock Inventory
              </p>
              <h2 class="text-uppercase mt-4 mb-5">
                 Easier Way to Save your Goods 
              </h2>
              <div>
                 <a href="#" class="primary-btn2 mb-3 mb-sm-0">Input New Data</a>
                 <a href="#" class="primary-btn ml-sm-3 ml-0">List Stock</a>
              </div>
          </div>
      </section>

      <!--================ Start feature banner  =================-->
      <section class="feedback">
          <div class="container">
              <div class="main_title mt-4 mb-5">
                  <h2 class="mb-b">Our Best Feature </h2>
                  <p>
                       Feature in our System
                  </p>
              </div>
              <div class="row">
                  <div class="col-lg-4 col-md-6">
                      <div class="single_feature">
                          <div class="icon"><span class="flaticon-student"></span></div>
                          <div class="desc">
                              <h4 class="mt-3 mb-2">Input Stock</h4>
                              <p>
                                  Easier to yo input new item
                              </p>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-6">
                      <div class="single_feature">
                          <div class="icon"><span class="flaticon-book"></span></div>
                          <div class="desc">
                              <h4 class="mt-3 mb-2">Add new Data</h4>
                              <p>
                                  To add any new data
                              </p>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-6">
                      <div class="single_feature">
                          <div class="icon"><span class="flaticon-earth"></span></div>
                          <div class="desc">
                              <h4 class="mt-3 mb-2">Add Account</h4>
                              <p>
                                  Easier to add new account
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!--================ Start footer Area  =================-->
      <section class="bawah">
          <div class="container">
              <div class="row">
                      <h4>Management</h4>
                      <ul>
                          <li><a href="#">Managed Website</a></li>
                          <li><a href="#">Manage Database</a></li>
                      </ul>
                      <h4>Quick Access</h4>
                      <ul>
                          <li><a href="#">Call Admin</a></li>
                          <li><a href="#">Stock Assets</a></li>
                          <li><a href="#">Investor Relations</a></li>
                          <li><a href="#">Terms of Service</a></li>
                      </ul>
               </div>
              </div>
      </section>
  </body>
</html>
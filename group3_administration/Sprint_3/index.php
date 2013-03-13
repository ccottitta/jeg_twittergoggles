<!DOCTYPE html>
<html>
<head>
    <title>Test Page</title>
  <link href="./css/bootstrap.css" rel="stylesheet">
    <link href=".css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
</head>
<body>    

	<!-- Navbar
    ================================================== -->
    <div class="navbar navbar-inverse navbar-fixed-top"> <!-- This starts the navbar. Please don't erase anything inside of this div -->
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="">
                <a href="./twitterGogglesTest/index.html">Home</a>
              </li>
			  <li class="active">
                <a href="">THIS IS THE ACTIVE PAGE</a>
              </li>
              <li class="">
                <a href="group4_reporting/reporting.html">Visualization/Reporting</a>
              </li>
              <li class="">
                <a href="group5/researchercol/index.php">Administration</a>
              </li>
              <li class="">
                <a href="/group5/researchercol/searchPageForm.html">Research</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div> <!-- This ends the navbar. Please don't erase anything inside of this div -->
<center>
    </br>
    </br>
    </br>
    </br>
    <h1>Job Administration</h1>
    <table align="center">
        <tbody>
            <tr>
                <td><a href="view.php">View/Update Jobs</a></td>
                <td><center>Search</center></td>
        </tr>
        <tr>
            <td><a href="insertform.php">Add New</a></td>
            <td><form name="search" action="search.php" method="post"><input type="text" name="query"></form></td>
        </tr>
        </tbody>

    </table>
</center>

</body>
</html>
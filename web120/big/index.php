<!DOCTYPE html>
<html lang="en">
<head>
<title>WEB120 Portal - Yuqiang Tan</title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="../css/nav.css" />
<link rel="stylesheet" href="../css/portal.css" />
<link rel="stylesheet" href="../css/form.css" />
</head>

<body>
<!-- START WRAPPER -->
<main class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa fa-cubes"></i> Yuqiang Tan's SCC WEB120 Portal</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
      <li><a href="../index.php">Welcome</a></li>
      <li><a href="big/index.php" class="selected">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart/Layout</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Yuiang</a></li>
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
        
<!-- START LEFT COL -->
<section>
 <h2 class="pageID">Welcome</h2>

 <p>Big website coming soon!</p>

</section>
<!-- END LEFT COL -->
<!-- START Footer -->
 <footer>
  <p><small>&copy; 2020 - <?=date('Y')?> by <a href="contactme.php" target="_blank">Yuqiang Tan</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
</footer>
<!-- END Footer --> 
</main>
<!-- END WRAPPER -->

    <!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise --> 
    <script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
     </script>
</body>
</html>
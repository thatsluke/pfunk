<?php include("header.php"); ?>
<?php 
// Get name of current page, shows"index" not "index.php" 
$path = $_SERVER["SCRIPT_NAME"];
$file = basename($path);        // $file is set to "myfile.php" 
$thisPage = basename($path, ".php"); // $thisPage is set to "myfile" 
?>

<div class="wrap">
<?php include("navbar.php"); ?>
<!-- Content Area -->
<div id="content">
  <div class="row"> 
    <div class="column twothird">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis est libero, non suscipit nisi. Nullam augue nunc, euismod ac ornare eu, lacinia nec odio. Vivamus pretium congue placerat. Proin id ipsum vel tortor egestas elementum. Vestibulum euismod iaculis faucibus. Quisque non vulputate leo. Ut eget lectus erat. Donec augue risus, tincidunt ut ornare ut, eleifend eget massa. Suspendisse sit amet ultricies est. Cras quis hendrerit lacus. Phasellus vel nibh metus. Pellentesque vel erat urna. Nullam in nunc dui, sit amet posuere lectus. Proin non turpis in est viverra bibendum.</p>
      <p>Suspendisse id lectus erat. Aliquam a magna libero, id molestie lacus. Suspendisse congue posuere auctor. Sed vitae dolor a ligula auctor ornare. Ut dui urna, fringilla non rutrum eget, auctor ac leo. Donec justo erat, posuere at sodales non, porttitor quis eros. Etiam et justo erat, ac pretium justo. Aliquam erat volutpat. Duis non orci erat.</p>
      <div class="row">  
          <div class="column third"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis est libero, non suscipit nisi. </p></div> 
          <div class="column third"> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis est libero, non suscipit nisi. </p> </div> 
      </div>
    </div> 
    <div class="column third">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis est libero, non suscipit nisi. Nullam augue nunc, euismod ac ornare eu, lacinia nec odio. Vivamus pretium congue placerat. Proin id ipsum vel tortor egestas elementum. Vestibulum euismod iaculis faucibus. Quisque non vulputate leo. Ut eget lectus erat. Donec augue risus, tincidunt ut ornare ut, eleifend eget massa. Suspendisse sit amet ultricies est. Cras quis hendrerit lacus. Phasellus vel nibh metus. Pellentesque vel erat urna. Nullam in nunc dui, sit amet posuere lectus. Proin non turpis in est viverra bibendum.</p>
    </div>
  </div>
</div>
<!-- End Content Area -->
</div>
<?php include("footer.php"); ?>

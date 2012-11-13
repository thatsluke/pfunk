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
    <div class="row"> 
      <div class="column half" style="background: #ccc;">Half</div> 
      <div class="column half" style="background: #ccc;">Half</div> 
    </div>
    <div class="row"> 
      <div class="column third" style="background: #ccc;">One third</div> 
      <div class="column third" style="background: #ccc;">One third</div>   
      <div class="column third" style="background: #ccc;">One third</div> 
    </div>
    <div class="row"> 
      <div class="column third" style="background: #ccc;">One third</div> 
      <div class="column twothird" style="background: #ccc;">Two thirds</div> 
    </div>
    <div class="row">  
      <div class="column fourth" style="background: #ccc;">One fourth</div> 
      <div class="column fourth" style="background: #ccc;">One fourth</div> 
      <div class="column fourth" style="background: #ccc;">One fourth</div> 
      <div class="column fourth" style="background: #ccc;">One fourth</div> 
    </div>
    <div class="row">  
      <div class="column fourth" style="background: #ccc;">One fourth</div> 
      <div class="column threefourth" style="background: #ccc;">Three fourths</div> 
    </div>
     <div class="row">  
      <div class="column fifth" style="background: #ccc;">One fifth</div> 
      <div class="column fifth" style="background: #ccc;">One fifth</div> 
      <div class="column fifth" style="background: #ccc;">One fifth</div> 
      <div class="column fifth" style="background: #ccc;">One fifth</div> 
      <div class="column fifth" style="background: #ccc;">One fifth</div> 
    </div>
     <div class="row">  
      <div class="column twofifth" style="background: #ccc;">Two fifth</div> 
      <div class="column fifth" style="background: #ccc;">One fifth</div> 
      <div class="column fifth" style="background: #ccc;">One fifth</div> 
      <div class="column fifth" style="background: #ccc;">One fifth</div> 
    </div>
     <div class="row">  
      <div class="column threefifth" style="background: #ccc;">Three fifth</div> 
      <div class="column fifth" style="background: #ccc;">One fifth</div> 
      <div class="column fifth" style="background: #ccc;">One fifth</div> 
    </div>
     <div class="row">  
      <div class="column fourfifth" style="background: #ccc;">Four fifth</div> 
      <div class="column fifth" style="background: #ccc;">One fifth</div> 
    </div>
     <div class="row">  
      <div class="column sixth" style="background: #ccc;">One sixth</div> 
      <div class="column sixth" style="background: #ccc;">One sixth</div> 
      <div class="column sixth" style="background: #ccc;">One sixth</div> 
      <div class="column sixth" style="background: #ccc;">One sixth</div> 
      <div class="column sixth" style="background: #ccc;">One sixth</div> 
      <div class="column sixth" style="background: #ccc;">One sixth</div> 
    </div>
     <div class="row">  
      <div class="column sixth" style="background: #ccc;">One sixth</div> 
      <div class="column fivesixth" style="background: #ccc;">Five sixth</div> 
    </div>
     <div class="row">  
      <div class="column sixth" style="background: #ccc;">One sixth</div> 
      <div class="column sixth" style="background: #ccc;">One sixth</div> 
      <div class="column twothird" style="background: #ccc;">
      Two third
        <div class="row">  
          <div class="column sixth" style="background: #ccc;">Nested One sixth</div> 
          <div class="column sixth" style="background: #ccc;">Nested One sixth</div> 
          <div class="column sixth" style="background: #ccc;">Nested One sixth</div>
          <div class="column sixth" style="background: #ccc;">Nested One sixth</div> 
        </div>
      </div> 
    </div>
     <div class="row">  
      <div class="column eighth" style="background: #ccc;">One eighth</div> 
      <div class="column eighth" style="background: #ccc;">One eighth</div>
      <div class="column eighth" style="background: #ccc;">One eighth</div> 
      <div class="column eighth" style="background: #ccc;">One eighth</div> 
      <div class="column eighth" style="background: #ccc;">One eighth</div> 
      <div class="column eighth" style="background: #ccc;">One eighth</div> 
      <div class="column eighth" style="background: #ccc;">One eighth</div> 
      <div class="column eighth" style="background: #ccc;">One eighth</div>  
    </div>
    <div class="row">  
      <div class="column threeeighth" style="background: #ccc;">Three eighth</div> 
      <div class="column fiveeighth" style="background: #ccc;">Five eighth</div> 
    </div>
    <div class="row">  
      <div class="column eighth" style="background: #ccc;">One eighth</div> 
      <div class="column seveneighth" style="background: #ccc;">Seven eighth</div> 
    </div>
    <div class="row">  
      <div class="column tenth" style="background: #ccc;">One tenth</div> 
      <div class="column threetenth" style="background: #ccc;">Three tenth</div>   
      <div class="column tenth" style="background: #ccc;">One tenth</div> 
      <div class="column tenth" style="background: #ccc;">One tenth</div>   
      <div class="column tenth" style="background: #ccc;">One tenth</div>   
      <div class="column tenth" style="background: #ccc;">One tenth</div>   
      <div class="column tenth" style="background: #ccc;">One tenth</div> 
      <div class="column tenth" style="background: #ccc;">One tenth</div> 
    </div>
    <div class="row">  
      <div class="column tenth" style="background: #ccc;">One tenth</div> 
      <div class="column sevententh" style="background: #ccc;">Seven tenth</div>   
      <div class="column tenth" style="background: #ccc;">One tenth</div> 
      <div class="column tenth" style="background: #ccc;">One tenth</div>   
    </div>
    <div class="row">  
      <div class="column tenth" style="background: #ccc;">One tenth</div> 
      <div class="column ninetenth" style="background: #ccc;">Nine tenth</div>   
    </div>
    <div class="row">  
      <div class="column twelveth" style="background: #ccc;">One twelveth</div> 
      <div class="column twelveth" style="background: #ccc;">One twelveth</div>  
      <div class="column twelveth" style="background: #ccc;">One twelveth</div> 
      <div class="column twelveth" style="background: #ccc;">One twelveth</div>  
      <div class="column twelveth" style="background: #ccc;">One twelveth</div> 
      <div class="column twelveth" style="background: #ccc;">One twelveth</div>  
      <div class="column twelveth" style="background: #ccc;">One twelveth</div> 
      <div class="column twelveth" style="background: #ccc;">One twelveth</div>
      <div class="column twelveth" style="background: #ccc;">One twelveth</div> 
      <div class="column twelveth" style="background: #ccc;">One twelveth</div>  
      <div class="column twelveth" style="background: #ccc;">One twelveth</div> 
      <div class="column twelveth" style="background: #ccc;">One twelveth</div>
    </div>
    <div class="row">  
      <div class="column fivetwelveth" style="background: #ccc;">Five twelveth</div>  
      <div class="column seventwelveth" style="background: #ccc;">Seven twelveth</div> 
    </div>
</div>
<?php include("footer.php"); ?>

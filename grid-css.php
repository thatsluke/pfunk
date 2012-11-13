<?php    

  header("Content-type: text/css");
  header("Cache-Control:max-age=86400");

$gutter = 20;
$maxwidth = 1000;
$full = $maxwidth - ($gutter * 2);

$twelveth = (($full - ($gutter * 12)) / 12);
$tenth = (($twelveth * 1.2) + ($gutter * 9));
$eighth = (($twelveth * 1.5) + ($gutter * 7));

$half = (($twelveth * 6) + ($gutter * 5));
$third = (($twelveth * 4) + ($gutter * 3));
$twothird = (($twelveth * 8) + ($gutter * 7));

$fourth = (($twelveth * 3) + ($gutter * 2));
$threefourth = (($twelveth * 9) + ($gutter * 8));

$fifth = (($twelveth * 2.4) + ($gutter * 1.4));
$twofifth = (($twelveth * 4.8) + ($gutter * 3.8));
$threefifth = (($twelveth * 7.2) + ($gutter * 6.2));
$fourfifth = (($twelveth * 9.6) + ($gutter * 8.6));

$sixth = (($twelveth * 2) + ($gutter * 1));
$fivesixth = (($twelveth * 10) + ($gutter * 9));

$eighth = (($twelveth * 1.5) + ($gutter * .5));
$threeeighth = (($twelveth * 4.5) + ($gutter * 3.5));
$fiveeighth = (($twelveth * 7.5) + ($gutter * 6.5));
$seveneighth = (($twelveth * 10.5) + ($gutter * 9.5));

$nineth = (($twelveth * 1.33) + ($gutter * .33));
$twonineth = (($twelveth * 2.66) + ($gutter * 1.66));
$fournineth = (($twelveth * 5.33) + ($gutter * 4.33));
$fivenineth = (($twelveth * 6.66) + ($gutter * 5.66));
$sevennineth = (($twelveth * 9.33) + ($gutter * 8.33));
$eightnineth = (($twelveth * 10.66) + ($gutter * 9.66));

$tenth = (($twelveth * 1.2) + ($gutter * .2));
$threetenth = (($twelveth * 3.6) + ($gutter * 2.6));
$sevententh = (($twelveth * 8.4) + ($gutter * 7.4));
$ninetenth = (($twelveth * 10.8) + ($gutter * 9.8));

$fivetwelveth = (($twelveth * 5) + ($gutter * 4));
$seventwelveth = (($twelveth * 7) + ($gutter * 6));
$eleventwelveth = (($twelveth * 11) + ($gutter * 10));

?>

.full { width: <?=$full - $gutter?>px;}
.half { width: <?=$half?>px;}

.third { width: <?=$third?>px;}
.twothird { width: <?=$twothird?>px;}

.fourth { width: <?=$fourth?>px;}
.threefourth { width: <?=$threefourth?>px;}

.fifth { width: <?=$fifth?>px;}
.twofifth { width: <?=$twofifth?>px;}
.threefifth { width: <?=$threefifth?>px;}
.fourfifth { width: <?=$fourfifth?>px;}

.sixth { width: <?=$sixth?>px;}
.fivesixth { width: <?=$fivesixth?>px;}

.eighth { width: <?=$eighth?>px;}
.threeeighth { width: <?=$threeeighth?>px;}
.fiveeighth { width: <?=$fiveeighth?>px;}
.seveneighth { width: <?=$seveneighth?>px;}

.nineth { width: <?=$nineth?>px;}
.twonineth { width: <?=$twonineth?>px;}
.fournineth { width: <?=$fournineth?>px;}
.fivenineth { width: <?=$fivenineth?>px;}
.sevennineth { width: <?=$sevennineth?>px;}
.eightnineth { width: <?=$eightnineth?>px;}

.tenth { width: <?=$tenth?>px;}
.threetenth { width: <?=$threetenth?>px;}
.sevententh { width: <?=$sevententh?>px;}
.ninetenth { width: <?=$ninetenth?>px;}

.twelveth { width: <?=$twelveth?>px;}
.fivetwelveth { width: <?=$fivetwelveth?>px;}
.seventwelveth { width: <?=$seventwelveth?>px;}
.eleventwelveth { width: <?=$eleventwelveth?>px;}

.wrap { position: relative; width: <?=$maxwidth?>px; margin: 0 auto;}

.row {
     width: <?=$full?>px;
     margin: 0 auto;
     overflow: hidden;
}

.column {
     margin: 0px <?=$gutter / 2 ?>px;
     overflow: hidden;
     float: left;
     display: inline;
}

.row .row {
	margin: 0 -<?=$gutter/2?>px;
	width: auto;
} 

.topgutter { margin-top: <?=$gutter?>px;}

.row .topgutter { margin-top: <?=$gutter?>px;}
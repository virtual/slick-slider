<?php
$slidect = 5;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="http://cdn.jsdelivr.net/jquery.slick/1.4.1/slick.css" media="screen" /> 
    <link rel="stylesheet" href="http://cdn.jsdelivr.net/jquery.slick/1.4.1/slick-theme.css" media="screen" />  
  <link rel="stylesheet" href="style.css" media="screen" />  
  
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
     <script src="http://cdn.jsdelivr.net/jquery.slick/1.4.1/slick.min.js"></script>
          <script src="app.js"></script>
       

<title>Responsive Slick Slider with Thumbnails</title>
</head>

<body>
<div class="container">
    <p>Here is my header</p>
    <ul class="slickslide">
<?php for ($i = 0; $i< $slidect; $i++) { ?>
        <li>
            <picture>
                <source media="(min-width: 36em)" srcset="http://placehold.it/1600x724/<?=$i?>00&text=large  1024w,
        http://placehold.it/800x362/<?=$i?>00&text=med 800w,
         http://placehold.it/400x181/<?=$i?>00&text=small 320w" sizes="33.3vw" />
                <source srcset="http://placehold.it/1600x724/<?=$i?>00&text=large 2x,
         http://placehold.it/400x181/<?=$i?>00&text=small 1x" />
                <img src="http://placehold.it/800x362/<?=$i?>00&text=medie" title="img" alt="img" />
            </picture>
            
        </li>
        <?php } ?>
    </ul>
    
    
    
    
    
    
    
    <div class="slick-thumbs">
        <ul>
        
        <?php for ($i = 0; $i< $slidect; $i++) { ?>
         <li>
                <img src="http://placehold.it/181x100/<?=$i?>00" />
            
        </li>
        <?php } ?>
        
        
            
        </ul>
    </div>
    <hr/>
     <h3>Featured News</h3>

    <p>Proactively create adaptive schemas vis-a-vis multimedia based synergy. Energistically repurpose cost effective users before economically sound web services. Proactively aggregate fully tested ROI whereas superior benefits. Distinctively exploit mission-critical.</p>
</div>
</body>
</html>

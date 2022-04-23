<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
     <link rel="stylesheet" href="css/image-bar-style.css">
     <!-- <link rel="stylesheet" type="text/css" href="css/footer.css"> -->
     <style>
         .ba{
          

            background-color: #7fe0e65c;
            height: 162px;
         }
        .back{
            background-color: #10d7ca47;
            height: 162px;
        }
        .block{
             display:flex;
             flex-direction:row;
             justify-content:center;
             align-items:center;
            padding:2px 12px;
             gap:20px;

         }
         .block-rev{
             display:flex;
             flex-direction:row-reverse;
             justify-content:center;
             align-items:center;
            padding:2px 12px;
             gap:20px;

         }
       img{
          
            height: 109px;
            padding: 9px 0px;
        
     }
     span{
             color: red;
            font-weight: 800;
            font-family: 'Mukta', sans-serif;
         }
         .para{
             width:60%;
            padding: 32px;
          text-align: center;
          margin:auto;
         }
         </style>
</head>
<body>
<?php
    include('navbar.php');
?>
<div  class="ba">
   <div class="block-rev para">
    
       <p><span >Lorem, ipsum dolor sit amet </span><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto commodi dolorum impedit ipsum libero placeat, nemo quibusdam 
        eveniet sequi vero soluta ea illum, aliquid esse unde quis dolores veniam optio.</p>
</div> 
    </div>
<div class="back">
   <div class="block" >
       <img src="images/haircare.jpeg" alt="" />
       <p><span >Lorem, ipsum dolor sit amet </span><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto commodi dolorum impedit ipsum libero placeat, nemo quibusdam 
        eveniet sequi vero soluta ea illum, aliquid esse unde quis dolores veniam optio.</p>
</div> 
    </div>
    <div  class="ba">
   <div class="block-rev">
       <img src="images/haircare.jpeg" alt="" />
       <p><span >Lorem, ipsum dolor sit amet </span><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto commodi dolorum impedit ipsum libero placeat, nemo quibusdam 
        eveniet sequi vero soluta ea illum, aliquid esse unde quis dolores veniam optio.</p>
</div> 
    </div>
    <div class="back">
   <div class="block">
       <img src="images/haircare.jpeg" alt="" />
       <p><span >Lorem, ipsum dolor sit amet </span><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto commodi dolorum impedit ipsum libero placeat, nemo quibusdam 
        eveniet sequi vero soluta ea illum, aliquid esse unde quis dolores veniam optio.</p>
</div> 
    </div>
    <div class="ba">
   <div class="block-rev">
       <img src="images/haircare.jpeg" alt="" />
       <p><span >Lorem, ipsum dolor sit amet </span><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto commodi dolorum impedit ipsum libero placeat, nemo quibusdam 
        eveniet sequi vero soluta ea illum, aliquid esse unde quis dolores veniam optio.</p>
</div> 
    </div>
</body>
</html>
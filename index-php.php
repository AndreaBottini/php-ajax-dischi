<?php

include __DIR__ .'/server.php';
// var_dump($db);

// foreach ($db as $key => $disc) {
//   echo $key;
//   foreach ($disc as $key => $carat) {
//     echo $disc['year'];
//     echo $disc['title'];
//   }
// }
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="dist/app.css">
   <title>Dischi</title>
 </head>
 <body>
   <header>
     <div class="header_nav">
       <div class="logo_nav">
         <img class="logo" src="img/logosp2.png" alt="">
       </div>
     </div>
   </header>
   <main>
     <div class="container">
       <?php if (!empty($db)) { ?>
       <div class="container_artist">
           <?php foreach ($db as $key => $disc) { ?>
             <div class="info_album">
               <img class="image_artist" src="<?php echo $disc['poster']; ?>" alt="">
               <h3><?php echo $disc['title']; ?></h3>
               <h4><?php echo $disc['author']; ?></h4>
               <p><?php echo $disc['year']; ?></p>
             </div>
           <?php } ?>
          <?php } else { ?>
          <h2>Non ci sono risultati</h2>
        <?php } ?>
       </div>
     </div>
   </main>
 </body>
 </html>

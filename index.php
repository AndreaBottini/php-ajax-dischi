<?php

include __DIR__ .'/server.php';
var_dump($db);

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
   <title>Dischi</title>
 </head>
 <body>
   <header>

   </header>
   <main>
     <div class="container">
       <div class="container-artist">
         <?php foreach ($db as $key => $disc) {?>
           <img src="<?php echo $disc['poster']; ?>" alt="">
            <h3><?php echo $disc['title']; ?></h3>
            <h4><?php echo $disc['author']; ?></h4>
            <p><?php echo $disc['year']; ?></p>
         <?php } ?>
       </div>
     </div>
   </main>
 </body>
 </html>

<?php

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="dist/app.css">
   <title>Dischi JS</title>
 </head>
 <body>
   <header>
     <div class="header_nav">
       <div class="logo_nav">
         <img class="logo" src="img/logosp2.png" alt="">
         <select name="artists" id="artists">
         <option value="All">All</option>
         <option value="Bon Jovi">Bon Jovi</option>
         <option value="Ligabue">Ligabue</option>
         <option value="Foo Fighters">Foo Fighters</option>
         <option value="Muse">Muse</option>
         <option value="Green Day">Green Day</option>
         <option value="Nirvana">Nirvana</option>
         <option value="Coldplay">Coldplay</option>
         <option value="Articolo 31">Articolo 31</option>
         <option value="The Beatles">The Beatles</option>
         <option value="Bugo">Bugo</option>
        </select>
       </div>
     </div>
   </header>
   <main>
     <div class="container">
       <div class="container_artist">

      </div>
     </div>
   </main>

  <script id="entry-template" type="text/x-handlebars-template">
    <div class="info_album">
      <img class="image_artist" src="{{poster}}" alt="">
      <h3>{{title}}</h3>
      <h4>{{author}}</h4>
      <p>{{year}}</p>
    </div>
  </script>
  <script src="dist/app.js" charset="utf-8"></script>
 </body>
 </html>

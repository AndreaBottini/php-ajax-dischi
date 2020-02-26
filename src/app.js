const $ = require('jquery');
const Handlebars = require("handlebars");

$(document).ready(function(){
  $.ajax({
    url: 'http://localhost:8888/php-ajax-dischi/server2.php',
    method: 'GET',
    success: function (data) {
      var disc = data;

      var source = $("#entry-template").html();
      var template = Handlebars.compile(source);

      for (var i = 0; i < disc.length; i++) {

        console.log(disc[i]);

        var context = {
          poster: disc[i].poster,
          title: disc[i].title,
          author: disc[i].author,
          year: disc[i].year
        }
        var html = template(context);
        $('.container_artist').append(html);
      }
    },
    error: function (error) {
      alert('E\' avvenuto un errore')
    }
  });
});

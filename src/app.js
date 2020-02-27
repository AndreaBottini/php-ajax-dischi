const $ = require('jquery');
const Handlebars = require("handlebars");

$(document).ready(function(){
  ajaxDisc();
  resetAll();

  $('#artists').change(function() {
    var thisAuthor = $(this).val();
    console.log(thisAuthor);
    $.ajax(
      {
        url: 'http://localhost:8888/php-ajax-dischi/server2.php',
        method: 'GET',
        data: {
          author: thisAuthor
        },
        success: function (response) {
          printData(response);
        },
        error: function (request, state, errors) {
          alert('errore');
        }
      }
    );  
  });
});




// ***** FUNZIONI ******
  function ajaxDisc() {
    $.ajax({
      url: 'http://localhost:8888/php-ajax-dischi/server2.php',
      method: 'GET',
      success: function (data) {
        printData(data);
      },
      error: function (error) {
        alert('E\' avvenuto un errore')
      }
    });
  };

  function printData(data) {
    var disc = data;

    var source = $("#entry-template").html();
    var template = Handlebars.compile(source);

    for (var i = 0; i < disc.length; i++) {

      // console.log(disc[i]);

      var thisDisc = disc[i]
      // console.log(thisDisc);

      var context = {
        poster: thisDisc.poster,
        title: thisDisc.title,
        author: thisDisc.author,
        year: thisDisc.year
      }
      var html = template(context);
      $('.container_artist').append(html);
    }
  }

  function resetAll() {
    $('.container_artist').html('');
  }

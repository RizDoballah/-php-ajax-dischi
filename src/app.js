const $ = require('jquery');
const Handlebars = require('handlebars');
$(document).ready(function() {
  $.ajax(
    {
    'url' : 'http://localhost:88/php-ajax-dischi/server.php',
    'method' : 'GET',
    'success': function (data) {
      console.log(data);
      if (data.length > 0) {
        printData(data);
      } else {
        alert('Nessun risultato');
      }
    },
    'error' : function (request, state, errors) {
      alert('Errore ' + errors);
    }

  });
  $('#search-cd').on('change', function(){
    console.log('ciao');
 //   var author = $(this).val();
 //   console.log(author);
 //   $.ajax({
 //     url: 'http://localhost:8888/php-ajax-dischi/server.php',
 //     method: 'GET',
 //     data: {
 //       'author': author
 //     },
 //     success: function (data) {
 //       console.log(data);
 //       $('.cd').html('');
 //       printData(data);
 //     },
 //     error: function () {
 //       alert('Errore');
 //     }
 //   });
 // });


});

// Functions

function printData(cds) {
  for (var i = 0; i < cds.length; i++) {
    var cd = cds[i];
    console.log(cd);
    var source = $('#entry-template').html();
    var template = Handlebars.compile(source);

    var context = {
      poster: cd.poster,
      title: cd.title,
      author: cd.author,
      date: cd.year
    };

    var html = template(context);
    $('.main-container').append(html);

  }
}

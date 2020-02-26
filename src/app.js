const $ = require('jquery');
const Handlebars = require('handlebars');
$(document).ready(function() {
  $.ajax(
    {
    'url' : 'http://localhost:88/php-ajax-dischi/server.php',
    'method' : 'GET',
    'success': function (data) {
      console.log(data);
      for (var i = 0; i < data.length; i++) {
        var cd = data[i];
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

    },
    'error' : function (request, state, errors) {
      alert('Errore ' + errors);
    }

  });
});

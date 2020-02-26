const $ = require('jquery');
const Handlebars = require('handlebars');
$(document).ready(function() {
  $.ajax(
    {
    'url' : 'https://http://localhost:88/php-ajax-dischi/server.php,
    'method' : 'GET',
    'success': function (data) {
      console.log(data);
    },
    'error' : function (request, state, errors) {
      alert('Errore ' + errors);
    }

  });
});

// CSS
require('bootstrap/dist/css/bootstrap.css');
require('datatables/media/css/jquery.dataTables.css');
require('../css/app.css');
// Javascript
const $ = require('jquery');
require('bootstrap');
//require('fontawesome');
require('../js/jquery.collection.js');
require('datatables');


$(document).ready(function() {




   

  $(window).on("load", function() {
    $('#skill-reports').append('<caption style="caption-side: top"><h5>Dossier de compétences</h5></caption>');  
    
    
      
    

  $('#developers-table').DataTable($.extend(true, {
      order: [[3, 'desc']],
  }, dataTableDefaultOptions));

  $('.datatable').DataTable($.extend(true, {
      //options
      
      responsive: true
  }, dataTableDefaultOptions));
    
  
  });








});


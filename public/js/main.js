$(document).ready(function()
{
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
 $(".country").change(function()
 {
  var id=$(this).val();
 
  $.ajax
  ({
   type: "POST",
   url: "/county",
   data: {
       'id': id
   },
   cache: false,
   success: function(html)
   {
        var dd = '<option selected disabled>Select County</option>';
       
       for(var i=0; i<html.length; i++){
           dd += '<option value=';
           dd += html[i].id;
           dd += '>';
           dd += html[i].county_name;
           dd += '</option>';
       }
      
      $(".county").html(dd);
   } 
   });
  });
 
 
 $(".county").change(function()
 {
  var id=$(this).val(); 
  $.ajax
  ({
   type: "POST",
   url: "/city",
   data: {
      'id': id
   },
   cache: false,
   success: function(html)
   {

        var dd = '<option selected disabled>Select City</option>';
       
       for(var i=0; i<html.length; i++){
           dd += '<option value=';
           dd += html[i].id;
           dd += '>';
           dd += html[i].city_name;
           dd += '</option>';
       }
       
       
    $(".city").html(dd);
   } 
   });
  });
 
});
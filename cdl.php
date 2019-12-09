<?php require 'header.php'; ?>
  <div class="cdl_container">
    <div class="form-group">
      <div class="input-group">
        <span class="input-group-addon">Search</span>
        <input type="text" name="search_text" id="search_text" placeholder="Search Customer Details" class="form-control" />
      </div>
    </div>
    <br />
    <div id="result"></div>
  </div>
<?php require 'footer.php'; ?>


<script>
$(document).ready(function(){
  $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
    $.ajax({
     url:"search.php",
     method:"POST",
     data:{query:search},
     success:function(data)
     {
      $('#result').html(data);
     }
    });    
  }
 });
});
</script>
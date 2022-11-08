<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script> 
 $(document).ready(function () {


$('.editbtn').on('click', function () {

    $('#editClient').modal('show');

    $tr = $(this).closest('tr');

    var data = $tr.children("td").map(function () {
        return $(this).text();
    }).get();

    
    

    var clientID = $(this).data("id");
    
    $('#firstnameE').val(data[0]);
    $('#lastnameE').val(data[1]);
    $('#emailE').val(data[2]);
    $('#phonenumE').val(data[3]);
    $('#stateE').val(data[4]); 
    $('#typeE').val(data[5]);
    $('#update_id').val(clientID);
             
   
});
});

  
</script>

  
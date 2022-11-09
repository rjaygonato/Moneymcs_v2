<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script> 
 


$('.deletebtn').on('click', function () {

    $('#deleteClient').modal('show');

    $tr = $(this).closest('tr');

    var data = $tr.children("td").map(function () {
        return $(this).text();
    }).get();
    console.log(data);
    
    var clientID = $(this).data("id");
    $("#clientName").text(data[0]+" "+data[1]); 
    $('#delete_id').val(clientID);
   
});

  
</script>

  
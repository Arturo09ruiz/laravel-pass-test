<input type="button" class="btn btn-danger delete" name="delete"  id="{{$id}}" value="Eliminar">
<script>
$(".delete").unbind().click(function() {
    $id = $(this).attr('id');

    $.ajax({
        url: "{{url('api/delete')}}",
        type: "POST",
        data:{
          id: $id,
          _token:'{{ csrf_token() }}'
        },
        cache: false,
        dataType: 'json',
        success: function(dataResult){

        }
      });

      $table.ajax.reload(null, false );

});








</script>

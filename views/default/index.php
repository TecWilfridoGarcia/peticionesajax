
           <br /><br />  
           <div class="container" style="width:500px;">  
                <form id="submit_form">  
                     <label>Nombre</label>  
                     <input type="text" name="name" id="nombre" class="form-control" />  
                     <br />  
                     <label>Mensaje</label>  
                     <textarea name="message" id="mensaje" class="form-control"></textarea>  
                     <br />  
                     <input type="button" name="submit" id="submit" class="btn btn-info" value="Enviar" />  
                     <span id="error_message" class="text-danger"></span>  
                     <span id="success_message" class="text-success"></span>  
                </form> 

           </div> 
           <div class="container">
  <h2>Resultados</h2>
  <p>Vista de Base de Datos</p>  
           <table class="table">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Mensaje</th>
      </tr>
    </thead>
  </table>
</div>
<div align="center">
</div>


 <script>  
 $(document).ready(function(){  
      $('#submit').click(function(){  
           var name = $('#nombre').val();  
           var message = $('#mensaje').val();  
           if(name == '' || message == '')  
           {  
                $('#error_message').html("Todos los campos son requeridos");  
           }  
           else  
           {  
                $('#error_message').html('');  
                $.ajax({  
                     url:"insert.php",  
                     method:"POST",  
                     data:{name:name, message:message},  
                     success:function(data){  
                          $("form").trigger("reset");  
                          $('#success_message').fadeIn().html(data);  
                          setTimeout(function(){  
                               $('#success_message').fadeOut("Slow");  
                          }, 2000);  
                     }  
                });  
           }  
      });  
 }); 


  </script> 
</body>




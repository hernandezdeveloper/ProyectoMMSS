
 function select_usuario()
{ //id="select_usuario"
  
 var id =  $("#select_usuario").val();
//alert("Hola select = "+id);

    var ob = {id:id};

     $.ajax({
                type: "POST",
                url:"modelo_mostrar_datos.php",
                data: ob,
                beforeSend: function(objeto){
                
                },
                success: function(data)
                { 
                 
                 $("#panel_selector").html(data);
            
                }
             });
}
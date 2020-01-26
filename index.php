<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="tex/html; charset=utf-8" />
        <title>Ejercicio3</title>
   
      <script>
      function proceso(txtnumero1,boton){
          switch (boton){
          case "Conversor de Pesos a Dolares":
              var parametros ={
                  "txtnumero1": txtnumero1,
                  
                  "btnpeso": boton
              };
              break;
              case "Conversor de Dolares a Pesos":
              var parametros ={
                
                  "txtnumero1": txtnumero1,
                  "btndolar": boton
              };
              break;
             

          }

          $.ajax({
          data: parametros,
          url: 'Calcular.php',
          type :'post',
          beforeSend:
          function (){
              $('#resultado').html('cargando!...');
          },
          success:function (response){

            $('#resultado').html(response);
          }



          });


      }
      
      
      </script>
   
   
    </head>
    <body>
        

        <h1 >Cambio Moneda Peso-Dolar</h1>
          
<form name="form1" method="POST">
     Digite el dinero a convertir: <input type="text" name="txtnumero1" id="txtnumero1">

    
    <br>
     
    
    <br>
    <input type="button" name="btnpeso" id="btnpeso" value="Conversor de Pesos a Dolares"
    onclick="proceso($('#txtnumero1').val(),$('#btnpeso').val());">
    <br>
    <br>
    <input type="button" name="btndolar" id="btndolar" value="Conversor de Dolares a Pesos"
    onclick="proceso($('#txtnumero1').val(),$('#btndolar').val());">
    
    
</form>
<br>
<span id="resultado"></span>

<script src="jquery-3.4.1.js"></script>

        
    </body>
</html>
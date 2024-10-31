<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <script src="js/js.js"></script>
    </head>

    <body style="background-color: gray;">
        <header>
        <?php include 'log/header.php'?>
        </header>
        <main>
       
        <div class="container" style="margin-top: 50px; margin-left: 550px">
        <a href="http://localhost/todo/ACADEMIA_INFORMATICA/registro_notas1.php?"> <button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark" viewBox="0 0 16 16">
  <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z"/>
</svg>IFCD0110</button></a>
        <button type="button" class="btn btn-primary"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark" viewBox="0 0 16 16">
  <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z"/>
</svg>HOTRO0508</button>
        <button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark" viewBox="0 0 16 16">
  <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z"/>
</svg>HOTRO0608 </button>

        </div>


<br>

<div class="container" style="border: 2px solid black; background-color :white;">
<br>
<table 
   class="table-responsive"
>
<table
   class="table table-secondary"
>

<thead>
  <tr>
  <th scope="col" style="text-align: center;">MODULOS</th>
  <th scope="col" style="text-align: center;">HORAS MODULOS</th>
  <th scope="col" style="text-align: center;">NOTAS FINAL</th>
  </tr>
</thead>
<tbody>
<tr class="table table-primary">
<td scope="row"></td>
<td></td>
<td></td>
</tr>
<tr>
 <td scope="row"></td>
 <td></td>
 <td></td>

</tr>
</tbody>
</table>




<h5>NOTA PARCIAL:<h3></h3></h5>
<br>
<h3></h3>



<button type="button" style="float: right; margin-top:-50px" class="btn btn-primary" onclick="notas()">CALCULAR</button>

</div>


    
<form action="">
     
     <div class="container" style="border: 2px solid black; background-color: white; margin-top:50px;">
 
     <div class="mb-3">
         <br>
         <label for="" class="form-label">NOMBRE DEL PARTICIPANTE:</label>
         <input
             type="text"
             class="form-control"
             name=""
             id=""
             aria-describedby="helpId"
             placeholder=""
             style="width: 500px;background-color:grey "
 
         />
        
     </div>
     
     <div class="mb-3">
         <label for="" class="form-label"style="width: 100px; float:right;margin-top:-50px; margin-right:100px " >CALIFICACION:</label>
    <select name="calificacion" style="float: right; margin-top:-50px">
    <option value="0">Nota:</option>
    <option value="1">Apto</option>
      <option value="2">No Apto</option>
     
    </select>
    
 
        
        
     </div>
     
 
 
     <div class="mb-3">
         <label for="" class="form-label"style="width: 200px; float:right;margin-top:-80px; margin-right:400px ">IDENTIFICACION</label>
         <input
             type="text"
             class="form-control"
             name=""
             id=""
             aria-describedby="helpId"
             placeholder=""
             style="width: 300px;background-color:grey; margin-left:680px; margin-top:-52px"
         />
        
     </div>
     
     <button type="submit " class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
   <path d="M11 2H9v3h2z"/>
   <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z"/>
 </svg> GUARDAR</button>
    
     <button type="reset"  class="btn btn-primary" style="float: right;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
   <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
   <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
 </svg> BORRAR</button>
    


 <form action="consultar.php" method="post">

<div class="modal" id="myModal">
  <div class="modal-dialog modal-fullscreen-xl-down">
    <div class="modal-content">

    
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      
     <div class="mb-3">
      <label for="" class="form-label">CODIGO DEL ESTUDIANTE A CONSULTAR</label>
      <input
      input type="text" name="identificacion"
       
        value="buscar"
        class="form-control"
        name="identificacion"
        id=""
        aria-describedby="helpId"
        placeholder=""
      />
      <small id="helpId" class="form-text text-muted">Help text</small>
     </div>
     


      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

</form>
      </div>

    </div>
  </div>
</div>




















     </form>
    <br><br>
     </div>
 
 
 
  
    


        </main>
        <footer style="margin-top: 20px;">
        <?php include 'log/footer.php'?>
        </footer>
        









        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>

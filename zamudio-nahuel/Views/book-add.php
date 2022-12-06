<?php
//require_once('nav.php');


?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Agregar libro</h2>
               <form action=<?php echo FRONT_ROOT ?>Books\addBooks method="POST" class="bg-light-alpha p-5">
                    <div class="row">
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="code">Codigo</label>
                                   <input type="number" name="code" id="code" value="" required class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="title">Titulo</label>
                                   <input type="text" name="title" id="title" value="" required class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="price">Precio</label>
                                   <input type="number" name="price" id="price" value=""  required class="form-control">
                              </div>
                         </div>
                    </div>
                    <button type="submit" name="" class="btn btn-dark ml-auto d-block">Agregar</button>
               </form>
          </div>
     </section>
</main>
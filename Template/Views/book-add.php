<?php
require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Agregar libro</h2>
               <form action="<?php echo FRONT_ROOT ?>Books/Add" method="post" class="bg-light-alpha p-5">
                    <div class="row">
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Codigo</label>
                                   <input type="number" name="codigo" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Titulo</label>
                                   <input type="text" name="title" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="price">Precio</label>
                                   <input type="price" name="price" id="price" value="" class="form-control">
                              </div>
                         </div>
                    </div>
                    <button type="submit" name="button" class="btn btn-dark ml-auto d-block">Agregar</button>
               </form>
          </div>
     </section>
</main>
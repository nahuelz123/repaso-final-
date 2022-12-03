<?php
if(isset($_SESSION["email"]))
{
      require_once('nav.php');
}
  
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Agregar usuario</h2>
               <form action="<?php echo FRONT_ROOT ?>User/Add" method="post" class="bg-light-alpha p-5">
                    <div class="row">                         
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="email">email</label>
                                   <input type="email" name="email" value="" id="email" require  class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="password">password</label>
                                   <input type="password" name="password" value=""  id="password" require class="form-control">
                              </div>
                         </div>
                     
                    </div>
                    <button type="submit" name="button" class="btn btn-dark ml-auto d-block">Agregar usuario</button>
               </form>
          </div>
     </section>
</main>
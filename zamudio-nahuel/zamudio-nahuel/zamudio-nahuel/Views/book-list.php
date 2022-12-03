<?php
require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Listado de libros</h2>
               <table class="table bg-light-alpha">
                    <thead>
                         <th>Codigo</th>
                         <th>Titulo</th>
                         <th>Precio</th>
                    </thead>
                    <tbody>
                    <?php
                        
                         foreach ($booksList as $books) : ?>
                              <tr>
                                   <?php
                                  $code = $books->getCODE();
                                   ?>
                                   <td> <?php echo $books->getCODE() . '<br>'; ?></td>
                                   <td><?php echo $books->getTitle() . '<br>'; ?></td>
                                   <td> <?php echo $books->getPrice() . '<br>'; ?></td>
                                   

                                   <a class="btn btn-primary btn-block btn-lg" href=<?php echo FRONT_ROOT ?>Books\delete?code=<?php echo $code ?> role="button">Delete</a>                              </tr>


                         <?php endforeach;

                         ?>



                    </tbody>
               </table>
          </div>
     </section>
</main>
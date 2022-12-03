<?php 
 require_once(VIEWS_PATH . "nav.php");
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Listado de clientes</h2>
               <table class="table bg-light-alpha">
                    <thead>
                         <th>code</th>
                         <th>title</th>
                         <th>price</th>
                    </thead>
                    <tbody>
                         <?php
                              foreach($booksList as $book)
                              {
                                   ?>
                                        <tr>
                                             <td><?php echo $book->getCODE() ?></td>
                                             <td><?php echo $book->getTitle() ?></td>
                                             <td><?php echo $book->getPrice() ?></td>
                                        </tr>
                                   <?php
                              }
                         ?>
                         </tr>
                    </tbody>
               </table>
          </div>
     </section>
</main>
<?php
/*
if(isset($_SESSION["email"])){
     $email = $_SESSION["email"];
 }else{
     header("location: ../index.php");
 }*/
?>
<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
     <span class="navbar-text">
          <strong>Framework</strong>
     </span>
     <ul class="navbar-nav ml-auto">
          <li class="nav-item">
               <a class="nav-link" href="<?php echo FRONT_ROOT ?>Books/ShowAddView">Agregar books</a>
          </li>
          <li class="nav-item">
               <a class="nav-link" href="<?php echo FRONT_ROOT ?>Books/ShowListView">Listar books</a>
          </li>    
          <li class="nav-item">
               <a class="nav-link" href="<?php echo FRONT_ROOT ?>User/ShowAddView">Agregar user </a>
          </li>    
          <li class="nav-item">
               <a class="nav-link" href="<?php echo FRONT_ROOT ?>Session\logout">cerrar sesion </a>
          </li>     
     </ul>
</nav>

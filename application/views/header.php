<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>Cursos</title>
  </head>

  <body>
    <nav class="navbar navbar-inverse">
     <div class="container-fluid">
       <div class="navbar-header">
         <a class="navbar-brand" href="<?php echo site_url();?>">Cursos</a>
       </div>
       <ul class="nav navbar-nav">
         <li class="dropdown">
           <a class="dropdown-toggle" data-toggle="dropdown" href="#">Instructores
           <span class="caret"></span></a>
           <ul class="dropdown-menu">
             <li><a href="<?php echo site_url();?>/instructores/nuevo">Nuevo</a></li>
             <li><a href="<?php echo site_url(); ?>/instructores/index">Index</a></li>


           </ul>

         </li>
         <li>
           <ul class="nav navbar-nav">
             <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">Cursos
               <span class="caret"></span></a>
               <ul class="dropdown-menu">
                 <li><a href="<?php echo site_url(); ?>/cursos/index">Lista</a></li>
                 <li><a href="<?php echo site_url(); ?>/cursos/nuevo">Curso</a></li>
               </ul>
         </li>

         <li><a href="#">Page 2</a></li>
         <li><a href="#">Page 3</a></li><li><a href="<?php echo site_url(); ?>/instructores/index">Index</a></li>
       </ul>
     </div>
   </nav>

<!-- AQUI COMIENZA EL CODIGO DEL CUERPO -->

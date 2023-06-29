<h1>NUEVO CURSO</h1>
<!-- Aqui se pone que va a abrir con el action -->
<!-- En este caso el actin abre la función guardar desde instructores -->
<!-- Además se debe poner el botón del formuario del tipo submit para que envie la información -->
<form class=""
action="<?php echo site_url();?>/Cursos/guardar"
method="post">
<!-- Aqui se define el tipo de método para el input, este es de tipo post -->
    <div class="row">
      <div class="col-md-4">
          <label for="">Nombre:</label>
          <br>
          <input type="text"
          placeholder="Ingrese nombre del curso"
          class="form-control"
          name="nombre_cur" value=""
          id="nombre_cur">
      </div>
      <div class="col-md-4">
          <label for="">E-mail:</label>
          <br>
          <input type="text"
          placeholder="Ingrese su email"
          class="form-control"
          name="email_cur" value=""
          id="email_cur">
      </div>
      <div class="col-md-4">
        <label for="">Descripcion:</label>
        <br>
        <input type="text"
        placeholder="Ingrese descripcion"
        class="form-control"
        name="descripcion_cur" value=""
        id="descripcion_cur">
      </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <button type="submit" name="button"
            class="btn btn-primary">
              Guardar
            </button>
            &nbsp;
            <a href="<?php echo site_url();?>/cursos/index"class="btn btn-danger">Cancelar</a>
        </div>
    </div>

</form>

<h1>LISTADO DE INSTRUCTORES</h1>
<br>
<?php if ($cursos): ?>
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>CURSO</th>
        <th>EMAIL</th>
        <th>DESCRIPCION</th>
        <th>ACCIONES</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($cursos as $filaTemporal): ?>
        <tr>
          <td>
              <?php echo $filaTemporal->id_cur; ?>
          </td>
          <td>
              <?php echo $filaTemporal->nombre_cur; ?>
          </td>
          <td>
              <?php echo $filaTemporal->email_cur; ?>
          </td>
          <td>
              <?php echo $filaTemporal->descripcion_cur; ?>
          </td>
          <td class="text-center">
            <a href="#" title="Editar Curso">
              <i class="glyphicon glyphicon-pencil"></i>
            </a>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="<?php echo site_url();?>/cursos/eliminar/<?php echo $filaTemporal->id_cur;?>" title="Eliminar Curso">
              <i class="glyphicon glyphicon-trash" style="color:red"></i>
            </a>
          </td>

        </tr>

      <?php endforeach; ?>
    </tbody>
  </table>


<?php else: ?>
  <h1>No hay datos</h1>
<?php endif; ?>

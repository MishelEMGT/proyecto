<h1>LISTADO DE INSTRUCTORES</h1>
<br>
<?php if ($instructores): ?>
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>CEDULA</th>
        <th>PRIMER APELLIDO</th>
        <th>SEGUNDO APELLIDO</th>
        <th>NOMBRES</th>
        <th>TITULO</th>
        <th>TELEFONO</th>
        <th>ACCIONES</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($instructores as $filaTemporal): ?>
        <tr>
          <td>
              <?php echo $filaTemporal->id_ins; ?>
          </td>
          <td>
              <?php echo $filaTemporal->cedula_ins; ?>
          </td>
          <td>
              <?php echo $filaTemporal->primer_apellido_ins; ?>
          </td>
          <td>
              <?php echo $filaTemporal->segundo_apellido_ins; ?>
          </td>
          <td>
              <?php echo $filaTemporal->nombres_ins; ?>
          </td>
          <td>
              <?php echo $filaTemporal->titulo_ins; ?>
          </td>
          <td>
              <?php echo $filaTemporal->telefono_ins; ?>
          </td>
          <td class="text-center">
            <a href="#" title="Editar Instructor">
              <i class="glyphicon glyphicon-pencil"></i>
            </a>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="<?php echo site_url();?>/instructores/eliminar/<?php echo $filaTemporal->id_ins;?>" title="Eliminar Instructor">
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

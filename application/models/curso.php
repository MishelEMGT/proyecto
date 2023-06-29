<?php
  class   Curso extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }
    //Funcion para insertar un instructor en MYSQL
    function insertar($datosNuevoCurso){
        return $this->db->insert("curso",$datosNuevoCurso);
    }
//Funcion para consultar instructores
    function obtenerTodos(){
      $listadoCursos=
      $this->db->get("curso");
      if ($listadoCursos->num_rows()>0) {//si jay datos
          return $listadoCursos->result();// code...
      } else {
        // code...
        return false;
      }

    }
    //BORRAR INSTRUCTORERS
    function borrar($id_cur){
      //delete from instructor where id_ins=1;
      $this->db->where("id_cur",$id_cur);
      return $this->db->delete("curso");
      }


  }//Cierre de la clase

 ?>

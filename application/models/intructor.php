<?php
  class Instructor extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }
    //Funcion para insertar un instructor en MYSQL
    function insertar($datosNuevoInstructor){
        return $this->db->insert("instructor",$datosNuevoInstructor);
    }
//Funcion para consultar instructores
    function obtenerTodos(){
      $listadoInstructores=
      $this->db->get("instructor");
      if ($listadoInstructores->num_rows()>0) {//si jay datos
          return $listadoInstructores->result();// code...
      } else {
        // code...
        return false;
      }

    }
    //BORRAR INSTRUCTORERS
    function borrar($id_ins){
      //delete from instructor where id_ins=1;
      $this->db->where("id_ins",$id_ins);
      return $this->db->delete("instructor");
      //if ($this->db->delete("instructor")) {
        //return TRUE;
        // code...
      //} else {
        //return FALSE;
        // code...
      }


  }//Cierre de la clase

 ?>

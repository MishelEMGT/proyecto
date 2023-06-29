<?php
  class Cursos extends CI_Controller
  {
    // Constructor
    function __construct()
    {
      parent::__construct();
      $this->load->model('Curso');
    }
    //funcion que renderiza la vista index


    public function index(){      // $this->load->view('header');
  		// $this->load->view('instructores/index');
  		// $this->load->view('footer');
      $data['cursos']=$this->Curso->obtenerTodos();
      $this->load->view('header');
      $this->load->view('cursos/index',$data);
      $this->load->view('footer');
    }
      // $this->load->view('header');
  		// $this->load->view('instructores/index');
  		// $this->load->view('footer');

    public function nuevo(){
      $this->load->view('header');
  		$this->load->view('cursos/nuevo');
  		$this->load->view('footer');
    }

    public function guardar(){
      // echo $this->input->post('cINSTRUCTOR<edula_ins'); // Se debe poner en controlador el NAME del input que estaba en la vista
      // echo "<br>";
      // echo $this->input->post('primer_apellido_ins');echo "<br>";
      // echo $this->input->post('segundo_apellido_ins');echo "<br>";
      // echo $this->input->post('nombres_ins');echo "<br>";
      // echo $this->input->post('titulo_ins');echo "<br>";
      // echo $this->input->post('telefono_ins');echo "<br>";
      //Creación de un array asociativo, que va a guardar en cada espacio un this input
      $datosNuevoCurso = array(
        'nombre_cur' =>$this->input->post('nombre_cur'),
        'email_cur' =>$this->input->post('email_cur'),
        'descripcion_cur' =>$this->input->post('descripcion_cur'),
      );

      if ($this->Curso->insertar($datosNuevoCurso)) {
        redirect('cursos/index');

        // code...
      } else {
        echo "<h1>ERROR AL INSERTAR</h1>";
        // code...
      }




    }
    //funcion para eliminar Instructores
    public function eliminar($id_cur){
      if ($this->Curso->borrar($id_cur)) {
        redirect('cursos/index');
        // code...
      } else {
        echo "ERROR AL BORRAR";
        // code...
      }


    }



  } // Cierre de la clase
?>

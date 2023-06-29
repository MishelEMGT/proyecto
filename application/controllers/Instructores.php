<?php
  class Instructores extends CI_Controller
  {
    // Constructor
    function __construct()
    {
      parent::__construct();
      $this->load->model('Instructor');
    }
    //funcion que renderiza la vista index
    public function index(){      // $this->load->view('header');
  		// $this->load->view('instructores/index');
  		// $this->load->view('footer');
      $data['instructores']=$this->Instructor->obtenerTodos();
      $this->load->view('header');
      $this->load->view('instructores/index',$data);
      $this->load->view('footer');
    }
  
      // $this->load->view('header');
  		// $this->load->view('instructores/index');
  		// $this->load->view('footer');

    public function nuevo(){
      $this->load->view('header');
  		$this->load->view('instructores/nuevo');
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
      $datosNuevoInstructor = array(
        'cedula_ins' =>$this->input->post('cedula_ins'),
        'primer_apellido_ins' =>$this->input->post('primer_apellido_ins'),
        'segundo_apellido_ins' =>$this->input->post('segundo_apellido_ins'),
        'nombres_ins' =>$this->input->post('nombres_ins'),
        'titulo_ins' =>$this->input->post('titulo_ins'),
        'telefono_ins' =>$this->input->post('telefono_ins')
      );


      if ($this->Instructor->insertar($datosNuevoInstructor)) {
        redirect('instructores/index');

        // code...
      } else {
        echo "<h1>ERROR AL INSERTAR</h1>";
        // code...
      }




    }
    //funcion para eliminar Instructores
    public function eliminar($id_ins){
      if ($this->Instructor->borrar($id_ins)) {
        redirect('instructores/index');
        // code...
      } else {
        echo "ERROR AL BORRAR";
        // code...
      }


    }



  } // Cierre de la clase
?>

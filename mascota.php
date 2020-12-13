<?php 
class Perro {
	//se declara los atributos de la clase Perro 
	public $color;
	public $Tamaño;
	public $pelaje= true;
	public $Edad;
	public $Numero=7;
	

	public function __construct($color, $Tamaño,$pelaje,$Edad) {
		$this->color = $color;
		$this->Tamaño = $Tamaño;
		$this->pelaje = $pelaje;
		
		$this->Edad = $Edad;
		
	}
	
	public function Ladrar() {
		return print('<p> !El perro ladra: Guau,Guau,Guau!</p>');
	}
	public function Edad() {
		
		$V1=$this->Numero;
		$V2=$this->Edad;
		echo 'La edad de la mascota es:' .  ($V1*$V2) ; 
		
		
	}	  
	
	
	public function Datosperro() {
		return print('<ul>
	
				<li>color <b>' . $this->color . '</b></li>
				<li>Tamaño <b>' . $this->Tamaño . '</b></li>
				<li>pelaje <b>' . $this->pelaje . '</b></li>
				<li>Edad <b>' . $this->Edad . '</b></li>
			</ul>');
	}	
}


echo '<h1>Datos Perro</h1>';

echo '<h2>Perro:</h2>';
$P = new Perro('Cafe', 'Mediano','Tupido',5);
$P ->Datosperro();
$P ->Ladrar();
$P ->Edad();

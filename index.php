<?php /* CAPTURA DE POKEMON CON CLASES E INTERFACE.*/

interface proceso 
{
	function pokeball($ratio);
	function superball($ratio);
	function ultraball($ratio);
}


/**
 * 
 */
class Pokemon implements proceso
{
	public $nombre;
	public $numPK;
	public $tipo;
	public $ratio;

	function __construct($nombre, $numPK, $tipo)
	{
		$this->nombre = $nombre;
		$this->numPK = $numPK;
		$this->tipo = $tipo;
	}

	public function pokeball($ratio)
	
	{
		$this->ratio = $ratio;
		$captura = rand(0,3000);
		$proceso = $this->ratio - $captura;

		if ($proceso <= 0) {
			echo ' El Pokemon '.$this->nombre.' ha sido capturado exitosamente'.'<br>';
		}else{
			echo $this->nombre.' Se ha escapado';
		}
	}
	
	public function superball($ratio)
	
	{
		$this->ratio = $ratio;
		$captura = rand(0,3000);
		$proceso = $this->ratio - $captura;

		if ($proceso <= 0) {
			echo ' El Pokemon '.$this->nombre.' ha sido capturado exitosamente'.'<br>';
		}else{
			echo $this->nombre.' Se ha escapado';
		}
	}
	
	public function ultraball($ratio)
	
	{
		$this->ratio = $ratio;
		$captura = rand(0,3000);
		$proceso = $this->ratio - $captura;

		if ($proceso <= 0) {
			echo ' El Pokemon '.$this->nombre.' ha sido capturado exitosamente'.'<br>';
		}else{
			echo $this->nombre.' Se ha escapado';
		}
	}

	public function __toString()
	{
		echo 'Ha Aparecido un : '.$this->nombre.' Salvaje'.'<br>';
		echo ' De Tipo : '.$this->tipo.'<br>';
		echo ' Registrado en la Pokedex con el Numero : '.$this->numPK;

	}

}

/*------------------------------------------------INSTANCIAS------------------------------------------------------------- */

$obj = new Pokemon($nombre = 'Lucario', $numPK = 750, $tipo = 'Lucha/Acero');
$obj->__toString();
$eleccion = 'pokeball';

switch ($eleccion) {
	case 'pokeball':
		echo '<br>'.'Jugador ha lanzado una Pokeball'.'<br>';
		$obj->pokeball($ratio = rand(0,3000));
		break;

	case 'superball':
		echo '<br>'.'Jugador ha lanzado una Superball'.'<br>';
		$obj->superball($ratio = rand(0,3000));
		break;

	case 'ultraball':
		echo '<br>'.'Jugador ha lanzado una Ultraball'.'<br>';
		$obj->ultraball($ratio = rand(0,3000));
		break;
	
	default:
		# code...
		break;
}

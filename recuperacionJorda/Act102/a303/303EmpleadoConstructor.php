<?php

class Empleado {

    private string $nombre;
    private string $apellidos;
    private int $sueldo;
    private int $telefono;
    private $arrayTelefonos = [];

    // GETTERS Y SETTERS
    //------------------------------------------------------------------------------------//
    /**
     * @param string $nombre
     * @param string $apellidos
     */
    public function __construct(string $nombre, string $apellidos)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
    }

    /**
     * @return string
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * @return string
     */
    public function getApellidos(): string
    {
        return $this->apellidos;
    }

    /**
     * @return int
     */
    public function getSueldo(): int
    {
        return $this->sueldo;
    }

    /**
     * @param int $sueldo
     */
    public function setSueldo(int $sueldo): void
    {
        $this->sueldo = $sueldo;
    }

    /**
     * @return int
     */
    public function getTelefono(): int
    {
        return $this->telefono;
    }

    /**
     * @param int $telefono
     */
    public function setTelefono(int $telefono): void
    {
        $this->telefono = $telefono;
    }

    /**
     * @return array
     */
    public function getArrayTelefonos(): array
    {
        return $this->arrayTelefonos;
    }

    /**
     * @param array $arrayTelefonos
     */
    public function setArrayTelefonos(array $arrayTelefonos): void
    {
        $this->arrayTelefonos = $arrayTelefonos;
    }
    //------------------------------------------------------------------------------------//

    // FUNCIONES
    //------------------------------------------------------------------------------------//
    public function getNombreCompleto(): string {
        return "<strong>Nombre: </strong>". $this->nombre .", ". $this->apellidos;
    }

    public function debePagarImpuestos(): bool {
        echo "<strong>¿Debe de pagar impuestos?: </strong>";
        if ($this->sueldo >= 3333) {
            return true;
        } else {
            return false;
        }
    }

    public function anyadirTelefono(int $telefono): void {
        array_push($this->arrayTelefonos, $telefono);
    }

    public function listarTelefonos(): string {
        return "<strong>Teléfono: </strong>". implode(",", $this->arrayTelefonos);
    }

    public function vaciarTelefonos(): void {
        $arrayTelefonos_length = sizeof($this->arrayTelefonos);
        for ($i = 0; $i < $arrayTelefonos_length; $i++) {
            unset($this->arrayTelefonos[$i]);
        }
    }
    //------------------------------------------------------------------------------------//
}

$empleado = new Empleado("Pepe", "García Pérez");
$empleado->setSueldo(3000);
$empleado->anyadirTelefono(629661801);

echo $empleado->getNombreCompleto();
echo "<br>";
echo $empleado->debePagarImpuestos() ? "Si" : "No";
echo "<br>";
echo $empleado->listarTelefonos();



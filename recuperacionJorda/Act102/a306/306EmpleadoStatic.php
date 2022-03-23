<?php

class Empleado {

    private string $nombre;
    private string $apellidos;
    private int $sueldo;
    private int $telefono;
    private $arrayTelefonos = [];
    private static $sueldoTope;

    // GETTERS Y SETTERS
    //------------------------------------------------------------------------------------//
    /**
     * @param string $nombre
     * @param string $apellidos
     */
    public function __construct(string $nombre, string $apellidos)
    {
        self::$sueldoTope;
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
     * @return int
     */
    public function getSueldo(): int
    {
        return $this->sueldo;
    }

    /**
     * @param int $sueldo
     */
    public function setSueldo(int $sueldoTope): void
    {
        $this->sueldo = $sueldo;
    }

    /**
     * @return mixed
     */
    public static function getSueldoTope()
    {
        return self::$sueldoTope;
    }

    /**
     * @param mixed $sueldoTope
     */
    public static function setSueldoTope($sueldoTope): void
    {
        self::$sueldoTope = $sueldoTope;
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
        if (self::$sueldoTope >= 3333) {
            return true;
        } else {
            return false;
        }
    }

    public function anyadirTelefono(int $telefono): void {
        array_push($this->arrayTelefonos, $telefono);
    }

    public function listarTelefonos(): string {
        return implode(", ", $this->arrayTelefonos);
    }

    public function vaciarTelefonos(): void {
        $arrayTelefonos_length = sizeof($this->arrayTelefonos);
        for ($i = 0; $i < $arrayTelefonos_length; $i++) {
            unset($this->arrayTelefonos[$i]);
        }
    }

    public static function toHtml(Empleado $emp): string {
        return "<div>
                    <p>". $emp->getNombreCompleto() ."</p>
                    <ul>
                        <li>". $emp->listarTelefonos() ."</li>
                    </ul>
                </div>";
    }
    //------------------------------------------------------------------------------------//
}

$emp = new Empleado("Pepe", "García Pérez");
Empleado::setSueldoTope(3333);
$emp->anyadirTelefono(629661801);
$emp->anyadirTelefono(629665263);
$emp->anyadirTelefono(621254152);
echo Empleado::toHtml($emp);
<?php
include 'Persona.php';
class Empleado extends Persona {

    private int $sueldo;
    private int $telefono;
    private $arrayTelefonos = [];
    private static $sueldoTope;

    // GETTERS Y SETTERS
    //------------------------------------------------------------------------------------//
    public function __construct()
    {
        self::$sueldoTope;
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


    public function debePagarImpuestos(): bool {
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

    public static function toHtml(Empleado $emp, Persona $persona): string {
        return "<div>
                    <p>". $persona->getNombreCompleto() ."</p>
                    <p><strong>¿Debe de pagar impuestos?: </strong>". ($emp->debePagarImpuestos() ? "Si" : "No") ."</p>
                    <strong>Teléfonos: </strong>
                    <ul>
                        <li>". $emp->listarTelefonos() ."</li>
                    </ul>
                </div>";
    }
    //------------------------------------------------------------------------------------//
}
$persona = new Persona("Pepe", "García Pérez");
$emp = new Empleado();

Empleado::setSueldoTope(3333);
$emp->anyadirTelefono(629661801);
$emp->anyadirTelefono(629665263);
$emp->anyadirTelefono(621254152);
echo Empleado::toHtml($emp, $persona);
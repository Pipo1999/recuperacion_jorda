<?php

class Empleado {

    private string $nombre;
    private string $apellidos;
    private int $sueldo;

    /**
     * @return string
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * @param string $nombre
     */
    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    /**
     * @return string
     */
    public function getApellidos(): string
    {
        return $this->apellidos;
    }

    /**
     * @param string $apellidos
     */
    public function setApellidos(string $apellidos): void
    {
        $this->apellidos = $apellidos;
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

    public function getNombreCompleto(): string {
        return $this->nombre .", ". $this->apellidos;
    }

    public function debePagarImpuestos(): bool {
        if ($this->sueldo >= 3333) {
            return true;
        } else {
            return false;
        }
    }

}

$empleado = new Empleado();
$empleado->setNombre("Pepe");
$empleado->setApellidos("García Pérez");
$empleado->setSueldo(3000);
echo $empleado->getNombreCompleto();
echo $empleado ->debePagarImpuestos() ? " debe de pagar impuestos." : " no debe de pagar impuestos.";



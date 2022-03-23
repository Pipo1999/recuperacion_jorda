<?php

class Persona
{
    private string $nombre;
    private string $apellidos;

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

    public function getNombreCompleto(): string {
        return "<strong>Nombre: </strong>". $this->nombre .", ". $this->apellidos;
    }

    public static function toHtml(Persona $persona): string {
        if ($persona instanceof Empleado) {

        return "<div>
                    <p>". $persona->getNombreCompleto() ."</p>
                    <p><strong>¿Debe de pagar impuestos?: </strong>". ($emp->debePagarImpuestos() ? "Si" : "No") ."</p>
                    <strong>Teléfonos: </strong>
                    <ul>
                        <li>". get_class_methods("listarTelefonos")."</li>
                    </ul>
                </div>";
        }
    }
}
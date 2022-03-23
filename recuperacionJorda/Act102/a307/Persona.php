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
}
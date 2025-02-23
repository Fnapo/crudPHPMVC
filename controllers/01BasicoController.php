
<?php
class BasicoController
{
    protected $titulo;
    protected $vista;

    function __construct() {}

    public function mostrar_titulo()
    {
        return $this->titulo;
    }

    public function mostrar_vista()
    {
        return $this->vista;
    }
}

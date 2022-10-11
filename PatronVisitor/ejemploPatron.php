<?php

interface Entity
{
    public function accept(Visitor $visitor): string;
}

class Agencia implements Entity
{
    private $name;
    private $areas;

    public function __construct(string $name, array $areas)
    {
        $this->name = $name;
        $this->areas = $areas;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAreas(): array
    {
        return $this->areas;
    }

    public function accept(Visitor $visitor): string
    {
        return $visitor->visitAgencia($this);
    }
}

class Area implements Entity
{
    private $name;
    private $colaboradores;

    public function __construct(string $name, array $colaboradores)
    {
        $this->name = $name;
        $this->colaboradores = $colaboradores;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getColaboradores(): array
    {
        return $this->colaboradores;
    }

    public function getCosto(): int
    {
        $costo = 0;
        foreach ($this->colaboradores as $colaborador) {
            $costo += $colaborador->getSueldo();
        }

        return $costo;
    }

    public function accept(Visitor $visitor): string
    {
        return $visitor->visitArea($this);
    }
}

class Colaborador implements Entity
{
    private $name;
    private $puesto;
    private $sueldo;

    public function __construct(string $name, string $puesto, int $sueldo)
    {
        $this->name = $name;
        $this->puesto = $puesto;
        $this->sueldo = $sueldo;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPuesto(): string
    {
        return $this->puesto;
    }

    public function getSueldo(): int
    {
        return $this->sueldo;
    }

    public function accept(Visitor $visitor): string
    {
        return $visitor->visitColaborador($this);
    }
}

interface Visitor
{
    public function visitAgencia(Agencia $agencia): string;

    public function visitArea(Area $area): string;

    public function visitColaborador(Colaborador $colaborador): string;
}

class Reporte implements Visitor
{
    public function visitAgencia(Agencia $agencia): string
    {
        $salida = "";
        $total = 0;

        foreach ($agencia->getAreas() as $area) {
            $total += $area->getCosto();
            $salida .= "<br><ol>" . $this->visitArea($area)."</ol>";
        }

        $salida = $agencia->getName() .
            " (" .($total) . ")<br>" . $salida;

        return $salida;
    }

    public function visitArea(Area $area): string
    {
        $salida = "";

        foreach ($area->getColaboradores() as $colaborador) {
            $salida .= "   " . $this->visitColaborador($colaborador);
        }

        $salida = $area->getName() .
            " (" . ($area->getCosto()) . ")<br><br>" .
            $salida;

        return $salida;
    }

    public function visitColaborador(Colaborador $colaborador): string
    {
        return ($colaborador->getSueldo()) .
            " " . $colaborador->getName() .
            " (" . $colaborador->getPuesto() . ")<br>";
    }
}

//Codigo paara ejecutar el ejemplo
$colaborador1 = new Colaborador("Laura Perez", "inspector", 301000);

$siniestros = new Area("Siniestros", [
    new Colaborador("Albaro Garcia", "liquidador", 100000),
    new Colaborador("Pedro Alfonso", "atencionPublico", 100000),
    new Colaborador("Mariana Esposito", "encargado", 400000),
    $colaborador1,
]);
$cobranzas = new Area("Cobranzas", [
    new Colaborador("Marisa Alvarez", "encargado", 70000),
    new Colaborador("Juan Perez", "administrativo", 30000),
    new Colaborador("Elsa Gimenez", "administrativo", 30000),
    new Colaborador("Matias Sanchez", "pagos", 34000),
]);

$agencia = new Agencia("Casa Central", [$siniestros, $cobranzas]);
$reporte = new Reporte();

echo "Imprimir el reporte para toda la Agencia: <br><br>";
echo $agencia->accept($reporte);

echo "<br>Imprimir el reporte para un Area especifica:<br><br>";
echo $siniestros->accept($reporte);

echo "<br>Imprimir el reporte para un Colaborador especifico:<br><br>";
echo $colaborador1->accept($reporte);
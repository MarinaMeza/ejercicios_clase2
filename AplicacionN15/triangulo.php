<?php
    require_once "figGeometrica.php";
    class triangulo extends FiguraGeometrica
    {
        private $_altura;
        private $_base;

        public function __construct($numero1,$numero2)
        {
            $this->_base=$numero1;
            $this->_altura=$numero2;
            $this->CalcularDatos();
        }

        public function CalcularDatos()
        {
            $this->_perimetro=($this->_base+$this->_altura)*2;
            $this->_superficie=($this->_base*$this->_altura)/2;
        }

        public function Dibujar()
        {
            for($i=0;$i<$this->_base;$i++)
            {
                for($j=0;$i<$this->_altura;$j++)
                {
                    echo "*";
                    if($i<=$j)
                    {
                        break;
                    }
                }
                echo "<br>";
            }
        }

        public function ToString()
        {
            $this->Dibujar();
            return "Base: $this->_base - Altura: $this->_altura - Perimetro: $this->_perimetro - Superficie: $this->_superficie <br>";
        }
    }
?>
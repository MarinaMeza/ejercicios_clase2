<?php
    require_once "figGeometrica.php";
    class Rectangulo extends FiguraGeometrica
    {
        private $_ladoDos;
        private $_ladoUno;

        public function __construct($numero1,$numero2)
        {
            $this->_ladoDos=$numero2;
            $this->_ladoUno=$numero1;
            $this->CalcularDatos();
        }

        protected function CalcularDatos()
        {
            $this->_perimetro=($this->_ladoDos*2)+($this->_ladoUno*2);
            $this->_superficie=$this->_ladoDos*$this->_ladoUno;
        }

        public function Dibujar()
        {
            for($i=0;$i<$this->_ladoUno;$i++)
            {
                for($j=0;$j<$this->_ladoDos;$j++)
                {
                    echo "*";
                }
                echo "<br>";
            }
        }

        public function ToString()
        {
            $this->Dibujar();
            return "lado 1: $this->_ladoUno - lado 2: $this->_ladoDos - perimetro: $this->_perimetro - superficie: $this->_superficie <br>";
        }
    }
?>
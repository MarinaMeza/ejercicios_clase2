<?php
    require_once "figGeometrica.php";
    class Rectangulo extends FiguraGeometrica
    {
        private $_ladoDos;
        private $_ladoUno;

        public function _construct($numero1,$numero2)
        {
            $this->_ladoDos=$numero2;
            $this->_ladoUno=$numero1;
        }

        protected function CalcularDatos()
        {
            $this->_perimetro=($this->_ladoDos*2)+($this->_ladoUno*2);
            $this->_superficie=$this->_ladoDos*$this->_ladoUno;
        }

        public function Dibujar()
        {

        }

        public function ToString()
        {
            return 
        }
    }
?>
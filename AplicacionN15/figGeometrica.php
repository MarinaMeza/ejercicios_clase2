<?php
    abstract class FiguraGeometrica
    {
        protected $_color;
        protected $_superficie;
        protected $_perimetro;

        public function __construct()
        {
            
        }

        public function GetColor()
        {
            return $this->_color;
        }

        public function SetColor($color)
        {
            $this->color=$color;
        }

         protected function ToString()
         {

         }

         public abstract function Dibujar();

         protected abstract function CalcularDatos();
    }
?>
<?php

    class Certames{
        public $Numero;
        public $Ano;
        public $Endereco;
        public $Municipio;
        
        function __construct($numero = null, $ano = null, $endereco = null, Municipios $municipio = null) {
            $this->Numero = $numero;
            $this->Ano = $ano;
            $this->Endereco = $endereco;
            if(municipio !=null)
                $this->Municipio = $municipio;
            else                 
            $this->Municipio = new Municipios();
        }
        
}
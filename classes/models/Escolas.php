<?php

    class Escolas{
        public $Codigo;
        public $Nome;
        public $Cnpj;
        public $Logradouro;
        public $Bairro;
        public $PresConselho;
        public $CpfPresConselho;
        public $RgPresConselho;
        public $Municipio;
        
        function __construct($codigo = null, $nome = null, $cnpj = null, $logradouro = null, $bairro = null, $presConselho = null, $cpfPresConselho = null, $rgPresConselho = null, Municipios $municipio = null) {
            $this->Codigo = $codigo;
            $this->Nome = $nome;
            $this->Cnpj = $cnpj;
            $this->Logradouro = $logradouro;
            $this->Bairro = $bairro;
            $this->PresConselho = $presConselho;
            $this->CpfPresConselho = $cpfPresConselho;
            $this->RgPresConselho = $rgPresConselho;
            if ($municipio !=null)
                $this->Municipio = $municipio;
            else
                $this->Municipio = new Municipios();
        }
        
    }

?>
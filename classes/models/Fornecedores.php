<?php

    class Fornecedores{
        public $Codigo;
        public $Cnpj;
        public $Logradouro;
        public $Razao;
        public $Fone;
        public $Representante;
        public $RgRepresentante;
        public $CpfRepresentante;
        
        function __construct($codigo = null, $cnpj = null, $logradouro = null, $razao = null, $fone = null, $representante = null, $rgRepresentante = null, $cpfRepresentante = null) {
            $this->Codigo = $codigo;
            $this->Cnpj = $cnpj;
            $this->Logradouro = $logradouro;
            $this->Razao = $razao;
            $this->Fone = $fone;
            $this->Representante = $representante;
            $this->RgRepresentante = $rgRepresentante;
            $this->CpfRepresentante = $cpfRepresentante;
        }
        
    }


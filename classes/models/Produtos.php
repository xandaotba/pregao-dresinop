<?php

    class Produtos{
        public $Codigo;
        public $Nome;
        public $Unidade;
        public $Especificacoes;

        
        function __construct($codigo = null, $nome = null, $unidade = null, $especificacoes = null) {
            $this->Codigo = $codigo;
            $this->Nome = $nome;
            $this->Unidade = $unidade;
            $this->Especificacoes = $especificacoes;

        }
        
    }
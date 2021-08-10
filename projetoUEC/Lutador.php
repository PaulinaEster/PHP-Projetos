<?php
    require_once 'Construtor.php';
    class Lutador implements Construtor{
        private $nome;               
        private $nacionalidade;     
        private $idade;          
        private $altura;        
        private $peso;         
        private $categoria;    
        private $vitorias;  
        private $derrotas;          
        private $empates;            

        public function __construct($no,$na,$id,$al,$pe,$v,$d,$e){
            $this->setNome($no);
            $this->setNacionalidade($na);
            $this->setIdade($id);
            $this->setAltura($al);
            $this->setPeso($pe);
            $this->setVitorias($v);
            $this->setDerrotas($d);
            $this->setEmpates($e);
        }

        public function getNome(){
            return $this->nome;
        }

        private function getNacionalidade(){
            return $this->nacionalidade;
        }

        private function getIdade(){
            return $this->idade;
        }

        private function getAltura(){
            return $this->altura;
        }

        private function getPeso(){
            return $this->peso;
        }

        public function getCategoria(){
            return $this->categoria;
        }

        private function getVitorias(){
            return $this->vitorias;
        }

        private function getDerrotas(){
            return $this->derrotas;
        }

        private function getEmpates(){
            return $this->empates;
        }


        private function setNome($ae){
            $this->nome = $ae;
        }

        private function setNacionalidade($n){
            $this->nacionalidade = $n;
        }

        private function setIdade($i){
            $this->idade = $i;
        }

        private function setAltura($a){
            $this->altura = $a;
        }

        private function setPeso($pe){
            $this->peso = $pe;
            $this->setCategoria($pe);
        }

        private function setCategoria($p){
            if($p < 50.00){
                echo "<p>Inválido!</p>";
            }elseif($p <= 70.00){
                $this->categoria = "Leve";
            }elseif($p <= 85.00){
                $this->categoria = "Médio";
            }elseif($p <= 120){
                $this->categoria = "Pesada";
            }else{
                echo "<p>Inválido!</p>";
            }
        }

        private function setVitorias($v){
            $this->vitorias = $v;
        }

        private function setDerrotas($d){
            $this->derrotas = $d;
        }

        private function setEmpates($e){
            $this->empates = $e;
        }

        public function apresentar(){
            echo "<p>{$this->getNome()}, diretamente de {$this->getNacionalidade()} tem {$this->getIdade()} anos, com {$this->getAltura()} de altura e {$this->getPeso()}Kg. O(A) lutador(a) acumula {$this->getVitorias()} vitórias, {$this->getDerrotas()} derrotas, e {$this->getEmpates()} empates!  </p>";
        }

        public function status(){
            echo $this->getNome();
            echo "<p>{$this->getNome()} é de categoria {$this->getCategoria()}. Com {$this->getVitorias()} Vitórias, {$this->getDerrotas()} derrotas {$this->getEmpates()} empates.</p>";
        }

        public function ganharLuta(){
            $this->setVitorias($this->getVitorias() + 1);
        }

        public function perderLuta(){
            $this->setDerrotas($this->getDerrotas() +1);
        }

        public function empatarLuta(){
            $this->setEmpates($this->getEmpates() + 1);
        }
    }
?>
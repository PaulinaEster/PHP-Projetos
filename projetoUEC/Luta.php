<?php
    require_once 'Lutador.php';
    class Luta{
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        private function getDesafiado(){
            return $this->desafiado;
        }

        private function getDesafiante(){
            return $this->desafiante;
        }

        private function getRound(){
            return $this->rounds;
        }

        private function getAprovada(){
            return $this->aprovada;
        }

        private function setDesafiado($d){
            $this->desafiado = $d;
        }

        private function setDesafiante($de){
            $this->desafiante = $de;
        }

        private function setRound($r){
            $this->rounds = $r;
        }

        private function setAprovada($a){
            $this->aprovada = $a;
        }
        
        public function marcarLuta($l1, $l2){
            if($l1->getCategoria() === $l2->getCategoria() && $l1 != $l2){
                $this->setAprovada(true);
                $this->setDesafiado($l1);
                $this->setDesafiante($l2);
            }else{
                $this->setAprovada(false);
                $this->setDesafiado(null);
                $this->setDesafiante(null);
            }
        }

        public function lutar(){
            if($this->getAprovada()){
                $this->getDesafiado()->apresentar();
                $this->getDesafiante()->apresentar();
                $vencedor = rand(0,2);
                switch($vencedor){
                    case 0: 
                        echo "<p>Empate!</p>";
                        $this->desafiado->empatarLuta();
                        $this->desafiante->empatarLuta();
                        break;
                    case 1:
                        echo "<p>{$this->desafiado->getNome()} venceu!</p>";
                        $this->desafiado->ganharLuta();
                        $this->desafiante->perderLuta();
                        break;
                    default: 
                        echo "<p>{$this->desafiante->getNome()} venceu!</p>";
                        $this->desafiado->perderLuta();
                        $this->desafiante->ganharLuta();
                }
            }else{
                echo "<p>Luta não pode acontecer</p>";
            }
        }
    }
?>
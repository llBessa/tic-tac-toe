<?php
    interface iGame{
        // metodos da classe

        // exibe as mensagens iniciais e pede a escolha do usuario
        public function start();

        // pede ao usuario a posição em que este deseja jogar e realiza a jogada
        public function getChoice($player);


        // verifica a existencia de vencedores na rodada
        public function winner();

        // função que define as rodadas e executa todo o processo do jogo
        public function round();
    };
    
    class player{
        public $simbolo = null;
        public $name = null;
    };

    class game implements iGame{
        //Atributos da classe

        private $matrix = array(
            0 => array(0 => "0 0", 1 => "0 1", 2 => "0 2"),
            1 => array(0 => "1 0", 1 => "1 1", 2 => "1 2"),
            2 => array(0 => "2 0", 1 => "2 1", 2 => "2 2")
        );
        
        private $winner = null;
        private $players = null;
        // private $simbolos = array("X" => 0, "O" => 1);

        // metodos da classe

        public function start(){

            $this->players[] = new player();
            $this->players[] = new player();

            $this->players[0]->name = readLine("Nome do jogador 1: ");
            $this->players[1]->name = readLine("Nome do jogador 2: ");
            
            $first = rand(0, 1);
            $second = 1 - $first;

            echo "\n{$this->players[$first]->name} escolha um dos simbolos (X / O) : \n";
            $this->players[$first]->simbolo = readLine();

            if($this->players[$first]->simbolo == "O") $this->players[$second]->simbolo = "X";
            else $this->players[$second]->simbolo = "O";
        
            echo "o simbolo de {$this->players[$first]->name} e : {$this->players[$first]->simbolo}\n";
            echo "o simbolo de {$this->players[$second]->name} e : {$this->players[$second]->simbolo}\n";
            
            $this->round();
        }

        public function getChoice($timePlayer){
            echo "\nvez de {$timePlayer->name} :\n";
            echo("Em qual posição deseja jogar na rodada?\n");
            $play = readLine();

            $play = str_replace(" ", "", $play);

            while($this->matrix[$play[0]][$play[1]] == " X " or $this->matrix[$play[0]][$play[1]] == " O "){
                echo "jogada invalida...\n";
                echo "\nEm qual posição deseja jogar na rodada?\n";
                $play = readLine();
                $play = str_replace(" ", "", $play);
            }

            $this->matrix[$play[0]][$play[1]] = " $timePlayer->simbolo ";
        }

        public function winner(){

            // verifica se existem jogadas vitoriosas na horizontal
            for($i = 0; $i < 3; $i++){
                if($this->matrix[$i][0] == $this->matrix[$i][1] and $this->matrix[$i][0] == $this->matrix[$i][2])
                    $this->winner = $this->matrix[$i][0];
            }

            // verifica se existem jogadas vitoriosas na vertical
            for($i = 0; $i < 3; $i++){
                if($this->matrix[0][$i] == $this->matrix[1][$i] and $this->matrix[0][$i] == $this->matrix[2][$i])
                    $this->winner = $this->matrix[0][$i];
            }

            // verifica se existe vencedor na diagonal principal
            if($this->matrix[0][0] == $this->matrix[1][1] and $this->matrix[1][1] == $this->matrix[2][2])
                $this->winner = $this->matrix[0][0];
            
            // verifica se existe vencedor na diagonal secundaria
            if($this->matrix[2][0] == $this->matrix[1][1] and $this->matrix[1][1] == $this->matrix[0][2])
                $this->winner = $this->matrix[2][0];
            
            // verifica se acabaram as jogadas
            $cont = 0;
            for($i = 0; $i < 3; $i++){
                for($j = 0; $j < 3; $j++){
                    if($this->matrix[$i][$j] == " X " or $this->matrix[$i][$j] == " O ") $cont++;
                }
            }

            if($cont == 9 and $this->winner == 0){
                echo "\nDeu velha! não existem mais opções de jogadas...\n";
                $this->winner = 1;
                return;
            }

            // se existir vencedor, exibe a tabela e uma mensagem de vencedor
            if($this->winner){
                $this->board();
                if($this->winner == " {$this->players[0]->simbolo} ") echo "\nO vencedor foi {$this->players[0]->name}\n";
                else echo "\nO vencedor foi {$this->players[1]->name}\n";
            }
        }

        public function round(){
            $first = rand(0, 1);

            echo "\nO jogador {$this->players[$first]->name} começa jogando...\n";
            $timePlayer = $first;

            while(!$this->winner){
                $this->board();
                $this->getChoice($this->players[$timePlayer]);
                $this->winner();
                $timePlayer = 1 - $timePlayer;
            }
        }
    }
?>
<?php 
    class Pessoa 
    {
        private string $nome;
        private CpfCnpj $cpf;
        private DateTimeImmutable $dataNascimento;
        private string $sexo;
        private Telefone $telefone;

        public function __construct(string $nome)
        {
            $this->$nome = $nome;
        }

        public function getIdade(){
            $agora = new DateTimeImmutable()
        }
    } 

?>

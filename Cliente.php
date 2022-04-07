<?php
include "Conexao.php";
class Cliente{
    private int $ID;
    private string $Nome;
    private int $Peso;
    private int $Altura;
    private string $Telefone;

    
    public function __construct(string $Nome, int $Peso, int $Altura, string $Telefone){
        $this->Nome = $Nome;
        $this->Peso = $Peso;
        $this->Altura = $Altura;
        $this->Telefone = $Telefone;
    }
    
    public function cadastrar(){
            $conexao = new Conexao();
            $sql = "INSERT INTO
            Cliente(Nome, Peso, Altura, Telefone)
            VALUES (:Nome, :Peso, :Altura, :Telefone)";
            $pdo = $conexao->Conectar();
            $preparo = $pdo->prepare($sql);
            $preparo->bindParam(':Nome', $this->Nome);
            $preparo->bindParam(':Peso', $this->Peso);
            $preparo->bindParam(':Altura', $this->Altura);
            $preparo->bindParam(':Telefone', $this->Telefone);
            $preparo->execute();

        }

    
    public static function ListarTodos(){
        $conexao = new Conexao();
        $sql = "SELECT * FROM Cliente";
        $dados = $conexao->Consultar($sql);
      
        return $dados;
    }

    
}
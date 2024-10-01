<?php

//Classe responsável por estabelecer a conexão com o banco de dados.
class Conexao
{
      private $servidor_mysql = 'localhost';  // Somente o host
      private $porta = '5432';                // Defina a porta separadamente
      private $nome_banco = 'atendimentoaoPaciente';
      private $usuario = 'postgres';
      private $senha = '1910'; 
      private $con;

      public function getConexao() : PDO
      {
            try {
                // Adicione a porta ao DSN
                $dsn = "pgsql:host={$this->servidor_mysql};port={$this->porta};dbname={$this->nome_banco}";
                $this->con = new PDO($dsn, $this->usuario, $this->senha);
                
                // Configura PDO para lançar exceções em caso de erro
                $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                return $this->con;
            } catch (PDOException $e) {
                // Captura e exibe o erro de conexão
                echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
            }
      }
}

?>


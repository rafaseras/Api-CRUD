// código incompleto
<?php

//declarar as variaiveis do banco

class Person {
    private $usuario;
    private $endereco;
    private $cidade;
    private $estado;

    public function setUsuario(string $usuario) ;void
    {
        this-> usuario = $usuario;
    }

    public function getUsuario(string $usuario) ;void
    {
        return $this-> usuario;
    }

    public function setEndereco(string $endereco) ;void
    {
        this-> endereco = $endereco;
    }

    public function getEndereco(string $endereco) ;void
    {
        return $this-> endereco;
    }

    public function setCidade(string $cidade) ;void
    {
        this-> cidade = $cidade;
    }

    public function getCidade(string $cidade) ;void
    {
        return $this-> cidade;
    }

    public function setEstado(string $estado) ;void
    {
        this-> estado = $estado;
    }

    public function getEstado(string $estado) ;void
    {
        return $this-> estado;
    }

    private function connection()
    {
        return new \PDO("mysql:host=localhost;dbname=db_crud", "root", "")
    }

    //criando o banco :
    public function create():array
    {
        $con = this.connection();
        $stmt = $con->prepare ("INSERT INTO person VALUES(:_usuario, :_endereco, _cidade, :_estado)")
        $stmt -> bindValue(":_usuario", $this->getUsuario, \PDO::PARAM_STR);
        $stmt -> bindValue(":_endereco", $this->getEndereco, \PDO::PARAM_STR);
        $stmt -> bindValue(":_cidade", $this->getCidade, \PDO::PARAM_STR);
        $stmt -> bindValue(":_estado", $this->getEstado, \PDO::PARAM_STR);
        $stmt -> execute();
        return []
    }

      //buscando todo no banco :
      public function ready():array
      {
          $con = this.connection();
          $stmt = $con->prepare ("SELECT * FROM person")
          $stmt -> execute();
          return $stmt -> fetchAll(\PDO::FETCH_ASSOC);
      }

 



}
<?php
    namespace DAL; //DAL = Data Access Layer. camada para manipulação dos dados
    include_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/DAL/conexao.php'; //continua apenas se o arquivo for incluído. Inclui apenas pela primeira vez, e passa caso já estiver incluído.
    include_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/MODEL/Animal.php';

    class dalAnimal{
        public function Select()
        {
            $sql = "select * from animal;"; // comando que será mandado ao banco
            
            $pdo = Conexao::conectar();
            //result recebe do Banco de dados a query contida na var sql, que é "select * from animal;"
            $result = $pdo->query($sql); 
            $pdo = Conexao::desconectar();

            foreach($result as $linha){ //para cada elemento na lista result, ou seja, para cada linha na tabela
                $animal = new \MODEL\Animal();

                $animal->setId($linha['id']);
                $animal->setNome($linha['nome']);
                $animal->setEspecie($linha['especie']);
                $animal->setCondicao($linha['condicao']);
                $animal->setDono($linha['dono']);

                $lstAnimal[] = $animal; //insere o animal na array
            }

            return $lstAnimal;
        }

        public function SelectId(int $id)
        {
            $sql = "select * from animal where id=?";

            $pdo = Conexao::conectar();
            $query = $pdo->prepare($sql);
            $query->execute(array($id));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar();

            if ($linha != null)
            {
            $animal = new \MODEL\Animal();
            $animal->setId($id);
            $animal->setNome($linha['nome']);
            $animal->setEspecie($linha['especie']);
            $animal->setCondicao($linha['condicao']);
            $animal->setDono($linha['dono']);
            } else return null; // caso não seja encontrado, animal será nulo

            return $animal;

        }

        /* public function SearchNome(string $bsc)
        {
            //retorna todos animais que contenham a string bsc no nome
            $sql = "select * from animal WHERE nome like  '%" . $bsc .  "%' order by nome;";


            $pdo = Conexao::conectar();
            
            $result = $pdo->query($sql);
            
            Conexao::desconectar();
            $lstAnimal = array(); //Cria array vazia

            foreach($result as $linha){ //para cada elemento na lista result, ou seja, para cada linha na tabela
                $animal = new \MODEL\Animal();

                $animal->setId($linha['id']);
                $animal->setNome($linha['nome']);
                $animal->setEspecie($linha['especie']);
                $animal->setCondicao($linha['condicao']);
                $animal->setDono($linha['dono']);

                $lstAnimal[] = $animal; //insere animal na array
            }

            return $lstAnimal;

        } */

        public function Insert(\MODEL\Animal $animal)
        {
            
            $sql = 
            "INSERT INTO animal (nome, especie, condicao, dono) VALUES 
            (
                ?, 
                ?, 
                ?,
                ?
            );";

            $pdo = Conexao::conectar();
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            $query = $pdo->prepare($sql); //prepare evita vulnerabilidades de Injeção SQL
            $result = $query->execute(array($animal->getNome(), $animal->getEspecie(), $animal->getCondicao(), $animal->getDono()));
            $pdo = Conexao::desconectar();
            return $result;

        }

        public function Update(\MODEL\Animal $animal)
        {
            $sql = "UPDATE animal SET nome=?, especie=?, condicao=?, dono=? WHERE id=?";

            $pdo = Conexao::conectar();
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            $query = $pdo->prepare($sql);
            $result = $query->execute(array($animal->getNome(), $animal->getEspecie(), $animal->getCondicao(), $animal->getDono(), $animal->getId()));

            $pdo = Conexao::desconectar();
            return $result;
        }

        public function Delete(int $id)
        {
            $sql = "DELETE FROM animal WHERE id=?";

            $pdo = Conexao::conectar();
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            $query = $pdo->prepare($sql);
            $query->execute(array($id));

            $pdo = Conexao::desconectar();
            
        }

    }
?>
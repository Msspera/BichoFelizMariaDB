<?php
    namespace DAL; //DAL = Data Access Layer. camada para manipulação dos dados

    class Conexao{
        private static string $dbNome='clinica'; 
        private static string $dbHost = 'localhost'; // em projetos reais, se coloca o IP do host
        private static string $dbUsuario = 'root'; 
        private static string $dbSenha = '';

        private static $con = null; // variavel de conexao; null caso desconectado.

        public function __construct() // construtor
        {
            die("A função init não é permitida"); //die equivale ao print. manda essa mensagem caso não seja possível iniciar o construtor
            
        }

        public static function conectar(){
            if (self::$con == null){
                try{ //caso seja um sucesso

                    //PDO = PHP Data Object - classe que faz interação com Bancos de Dados
                    self::$con = new \PDO("mysql:host=". self::$dbHost . ";dbname=" . self::$dbNome, self::$dbUsuario, self::$dbSenha); //interpola strings usando .
                }
                catch(\PDOException $excpt) { //caso haja um erro, pega o erro e o trata

                    die ($excpt->getMessage()); //imprime a mensagem de erro
                }
                
            }
            return self::$con;
        }
        public static function desconectar(){
            self::$con = null;
        }
    }


?>
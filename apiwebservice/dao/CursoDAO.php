<?php

    class CursoDAO {
        private static $instance;

        public static function getConnection() {
            if (self::$instance == null) {
                self::$instance = new CursoDAO();
            }
            return self::$instance;
        }

        public function insert(Curso $curso) {
            try {

                $sql = "INSERT INTO curso (id_matricula, nome) VALUES (:id_matricula, :nome)";
                $connection = DbConnection::getInstance()->prepare($sql);
     
                $connection->bindValue(":id_matricula", $curso->getIdMatricula());
                $connection->bindValue(":nome", $curso->getNome()); 
                return $p_sql->execute();

            } catch (Exception $e) {
                print $e->getMessage();
            }
        }

        public function update(Curso $curso) {

            try {

                $sql = "UPDATE curso SET nome = :nome WHERE id_matricula = :id_matricula";

                $connection = DbConnection::getInstance()->prepare($sql);
                $connection->bindValue(":nome", $curso->getNome()); 
                $connection->bindValue(":id_matricula", $curso->getIdMatricula()); 
                return $p_sql->execute();

            } catch (Exception $e) {
                print $e->getMessage();
            }

        }

        public function delete(Curso $curso) {

            try {

                $sql = "DELETE FROM curso WHERE id_matricula = :id_matricula";

                $connection = DbConnection::getInstance()->prepare($sql);
                $connection->bindValue(":id_matricula", $curso->getIdMatricula()); 
                return $p_sql->execute();

            } catch (Exception $e) {
                print $e->getMessage();
            }

        }

        public function getCursoByIdMatricula($idMatricula) {
            try {

                $sql = "SELECT * FROM curso WHERE id_matriula = :id_matricula";

                $connection = DbConnection::getInstance()->prepare($sql);
                $connection->bindValue(":id_matricula", $idMatricula);
                $connection->execute();
                    
                $res = $conncetion->fetch(PDO::FETCH_ASSOC));
                $curso = new Curso();
                $curso->setIdMatricula($res['id_matricula']);
                $curso->setNome($res['nome']);

                return $curso;

            } catch (Exception $e) {
                print $e->getMessage());
            }

        }

        public function getCursoAll() {
            try {

                $sql = "SELECT * FROM curso";

                $connection = DbConnection::getInstance()->prepare($sql);
                $connection->execute();
                    
                $res = $conncetion->fetchAll();

                $listaCursos = array();
                foreach ($res as $row) {
                    $curso = new Curso();
                    $curso->setIdMatricula($row['id_matricula']);
                    $curso->setNome($row['nome']);
                    array_push($listaCursos, $curso);
                }

                return $listaCursos;

            } catch (Exception $e) {
                print $e->getMessage());
            }

        }

    }

?>
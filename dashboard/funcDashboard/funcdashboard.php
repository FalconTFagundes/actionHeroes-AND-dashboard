<?php
function listarRegistroDoisParametro($tabela, $campos, $idcampo, $idparametro, $idCampo2, $idparametro2, $ativo)
{
    $conn = conectar();
    try {
        if (is_numeric($idparametro)) {
            $conn->beginTransaction();
            $sqlLista = $conn->prepare("SELECT $campos "
                . "FROM $tabela "
                . "WHERE $idcampo = ? AND $idCampo2 = ? AND ativo = ?");
            $sqlLista->bindValue(1, $idparametro, PDO::PARAM_INT);
            $sqlLista->bindValue(2, $idparametro2, PDO::PARAM_STR);
            $sqlLista->bindValue(3, $ativo, PDO::PARAM_STR);
            $sqlLista->execute();
            if ($sqlLista->rowCount() > 0) {
                return $sqlLista->fetchAll(PDO::FETCH_OBJ);
            } else {
                return 'Vazio';
            }
        } else {
            return 'Variável não é aceita!';
        }
    } catch (PDOException $e) {
        echo 'Exception -> ';
        return $e->getMessage();
        $conn->rollback();
    } finally {
        $conn = null;
    }
}

function listarTodosRegistros($tabela, $campos, $ativo)
{
    $conn = conectar();
    try {
        $sqlLista = $conn->prepare("SELECT $campos FROM $tabela WHERE ativo = ?");
        $sqlLista->bindValue(1, $ativo, PDO::PARAM_STR);
        $sqlLista->execute();
        if ($sqlLista->rowCount() > 0) {
            return $sqlLista->fetchAll(PDO::FETCH_OBJ);
        } else {
            return 'Vazio';
        }
    } catch (PDOException $e) {
        echo 'Exception -> ';
        return $e->getMessage();
    } finally {
        $conn = null;
    }
}

function listarTodosRegistrosId($tabela, $campos, $ativo, $campoid, $id)
{
    $conn = conectar();
    try {
        $sqlLista = $conn->prepare("SELECT $campos FROM $tabela WHERE ativo = ? AND $campoid = ?");
        $sqlLista->bindValue(1, $ativo, PDO::PARAM_STR);
        $sqlLista->bindValue(2, $id, PDO::PARAM_INT);
        $sqlLista->execute();
        if ($sqlLista->rowCount() > 0) {
            return $sqlLista->fetchAll(PDO::FETCH_OBJ);
        } else {
            return 'Vazio';
        }
    } catch (PDOException $e) {
        echo 'Exception -> ';
        return $e->getMessage();
    } finally {
        $conn = null;
    }
}

function listarOutrasCategorias($campos, $tabela, $ativo, $campoid)
{
    $conn = conectar();
    try {
        $sqlLista = $conn->prepare("SELECT $campos FROM $tabela WHERE ativo = ? AND $campoid <> (SELECT MAX($campoid) FROM $tabela)");
        $sqlLista->bindValue(1, $ativo, PDO::PARAM_STR);
        $sqlLista->execute();
        if ($sqlLista->rowCount() > 0) {
            return $sqlLista->fetchAll(PDO::FETCH_OBJ);
        } else {
            return 'Vazio';
        }
    } catch (PDOException $e) {
        echo 'Exception -> ';
        return $e->getMessage();
    } finally {
        $conn = null;
    }
}

function cadastroReserva($nome, $email, $telefone, $data, $hora, $pessoas, $mensagem)
{
    $conn = conectar();
    try {
        $sqlLista = $conn->prepare("INSERT INTO reserva(nome, email, telefone, datareserva, hora, quantidade, mensagem) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $sqlLista->bindValue(1, $nome, PDO::PARAM_STR);
        $sqlLista->bindValue(2, $email, PDO::PARAM_STR);
        $sqlLista->bindValue(3, $telefone, PDO::PARAM_STR);
        $sqlLista->bindValue(4, $data, PDO::PARAM_STR);
        $sqlLista->bindValue(5, $hora, PDO::PARAM_STR);
        $sqlLista->bindValue(6, $pessoas, PDO::PARAM_INT);
        $sqlLista->bindValue(7, $mensagem, PDO::PARAM_STR);
        $sqlLista->execute();

        if ($sqlLista->rowCount() > 0) {
            return "Cadastrado";
        } else {
            return "Vazio!";
        }
    } catch (PDOException $e) {
        echo 'Exception -> ';
        return $e->getMessage();
    } finally {
        $conn = null;
    }
}

function cadastroContato($nome_contato, $email_contato, $assunto_contato, $mensagem_contato)
{
    $conn = conectar();
    try {
        $sqlLista = $conn->prepare("INSERT INTO contato(nome, email, assunto, mensagem) VALUES (?, ?, ?, ?)");
        $sqlLista->bindValue(1, $nome_contato, PDO::PARAM_STR);
        $sqlLista->bindValue(2, $email_contato, PDO::PARAM_STR);
        $sqlLista->bindValue(3, $assunto_contato, PDO::PARAM_STR);
        $sqlLista->bindValue(4, $mensagem_contato, PDO::PARAM_STR);
        $sqlLista->execute();

        if ($sqlLista->rowCount() > 0) {
            return "Cadastrado";
        } else {
            return "Vazio!";
        }
    } catch (PDOException $e) {
        echo 'Exception -> ';
        return $e->getMessage();
    } finally {
        $conn = null;
    }
}


/* dashboard 17/07/2023 */
function listarDashboard($tabela, $campo)
{
    $conn = conectar();
    $queryListar = $conn->prepare("SELECT $campo FROM $tabela");
    $queryListar->execute();
    if ($queryListar->rowCount() > 0) {
        return $queryListar->fetchAll(PDO::FETCH_OBJ);
    } else {
        return 'Vazio';
    }
}

/* EXCLUIR */

function excluirDashboard($tabela, $campoid, $id)
{
    $conn = conectar();
    $queryListar = $conn->prepare("DELETE FROM $tabela WHERE $campoid = $id");
    $queryListar->execute();
    if ($queryListar->rowCount() > 0) {
        return true;
    } else {
        return false;
    }
}


/* INSERT */

function insertUm($tabela, $camposTabela, $valor1)
{
   
    $conn = conectar();
    try {
        $sqlInsert = $conn->prepare("INSERT INTO $tabela($camposTabela) VALUES (?)");
        $sqlInsert->bindValue(1, $valor1, PDO::PARAM_STR);
       
        $sqlInsert->execute();

        if ($sqlInsert->rowCount() > 0) {
            return "Cadastrado";
        } else {
            return "Vazio";
        }
    } catch (PDOException $e) {
        echo 'Exception -> ';
        return $e->getMessage();
    } finally {
        $conn = null;
    }
}

function insertUmAlterado($tabela, $camposTabela, $valor1)
{
   
    $conn = conectar();
    try {
        $sqlInsert = $conn->prepare("INSERT INTO $tabela($camposTabela) VALUES (?)");
        $sqlInsert->bindValue(1, $valor1, PDO::PARAM_STR);
       
        $sqlInsert->execute();

        if ($sqlInsert->rowCount() > 0) {
            return "Cadastrado";
        } else {
            return "Vazio";
        }
    } catch (PDOException $e) {
        echo 'Exception -> ';
        return $e->getMessage();
    } finally {
        $conn = null;
    }
}







function insertDois($tabela, $camposTabela, $valor1, $valor2)
{
   
    $conn = conectar();
    try {
        $sqlInsert = $conn->prepare("INSERT INTO $tabela($camposTabela) VALUES (?, ?)");
        $sqlInsert->bindValue(1, $valor1, PDO::PARAM_STR);
        $sqlInsert->bindValue(2, $valor2, PDO::PARAM_STR);
       
        $sqlInsert->execute();

        if ($sqlInsert->rowCount() > 0) {
            return "Cadastrado";
        } else {
            return "Vazio";
        }
    } catch (PDOException $e) {
        echo 'Exception -> ';
        return $e->getMessage();
    } finally {
        $conn = null;
    }
}


function insertTres($tabela, $camposTabela, $valor1, $valor2, $value3)
{
   
    $conn = conectar();
    try {
        $sqlInsert = $conn->prepare("INSERT INTO $tabela($camposTabela) VALUES (?, ?, ?)");
        $sqlInsert->bindValue(1, $valor1, PDO::PARAM_STR);
        $sqlInsert->bindValue(2, $valor2, PDO::PARAM_STR);
        $sqlInsert->bindValue(3, $value3, PDO::PARAM_STR);
       
        $sqlInsert->execute();

        if ($sqlInsert->rowCount() > 0) {
            return "Cadastrado";
        } else {
            return "Vazio";
        }
    } catch (PDOException $e) {
        echo 'Exception -> ';
        return $e->getMessage();
    } finally {
        $conn = null;
    }
}


function insertquatro($tabela, $camposTabela, $valor1, $valor2, $value3, $value4)
{
   
    $conn = conectar();
    try {
        $sqlInsert = $conn->prepare("INSERT INTO $tabela($camposTabela) VALUES (?, ?, ?,?)");
        $sqlInsert->bindValue(1, $valor1, PDO::PARAM_STR);
        $sqlInsert->bindValue(2, $valor2, PDO::PARAM_STR);
        $sqlInsert->bindValue(3, $value3, PDO::PARAM_STR);
        $sqlInsert->bindValue(4, $value4, PDO::PARAM_STR);
       
        $sqlInsert->execute();

        if ($sqlInsert->rowCount() > 0) {
            return "Cadastrado";
        } else {
            return "Vazio";
        }
    } catch (PDOException $e) {
        echo 'Exception -> ';
        return $e->getMessage();
    } finally {
        $conn = null;
    }
}

function insertCinco($tabela, $camposTabela, $valor1, $valor2, $value3, $value4, $value5)
{
   
    $conn = conectar();
    try {
        $sqlInsert = $conn->prepare("INSERT INTO $tabela($camposTabela) VALUES (?, ?, ?, ?, ?)");
        $sqlInsert->bindValue(1, $valor1, PDO::PARAM_STR);
        $sqlInsert->bindValue(2, $valor2, PDO::PARAM_STR);
        $sqlInsert->bindValue(3, $value3, PDO::PARAM_STR);
        $sqlInsert->bindValue(4, $value4, PDO::PARAM_STR);  
        $sqlInsert->bindValue(5, $value5, PDO::PARAM_STR);
       
        $sqlInsert->execute();

        if ($sqlInsert->rowCount() > 0) {
            return "Cadastrado";
        } else {
            return "Vazio";
        }
    } catch (PDOException $e) {
        echo 'Exception -> ';
        return $e->getMessage();
    } finally {
        $conn = null;
    }
}

function insertOito($tabela, $camposTabela, $valor1, $valor2, $valor3, $valor4, $valor5, $valor6, $valor7, $valor8)
{
   
    $conn = conectar();
    try {
        $sqlInsert = $conn->prepare("INSERT INTO $tabela($camposTabela) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $sqlInsert->bindValue(1, $valor1, PDO::PARAM_STR);
        $sqlInsert->bindValue(2, $valor2, PDO::PARAM_STR);
        $sqlInsert->bindValue(3, $valor3, PDO::PARAM_STR);
        $sqlInsert->bindValue(4, $valor4, PDO::PARAM_STR);  
        $sqlInsert->bindValue(5, $valor5, PDO::PARAM_STR);
        $sqlInsert->bindValue(6, $valor6, PDO::PARAM_STR);
        $sqlInsert->bindValue(7, $valor7, PDO::PARAM_STR);
        $sqlInsert->bindValue(8, $valor8, PDO::PARAM_STR);
       
        $sqlInsert->execute();

        if ($sqlInsert->rowCount() > 0) {
            return "Cadastrado";
        } else {
            return "Vazio";
        }
    } catch (PDOException $e) {
        echo 'Exception -> ';
        return $e->getMessage();
    } finally {
        $conn = null;
    }
}





function insertOnze($tabela, $campos, $value1, $value2, $value3, $value4, $value5, $value6, $value7, $value8, $value9, $value10, $value11)
{
    $conn = conectar();
    try {
        $conn->beginTransaction();
        $sqInsert = $conn->prepare("INSERT INTO $tabela($campos)VALUES(?,?,?,?,?,?,?,?,?,?,?)");
        $sqInsert->bindValue(1, $value1, PDO::PARAM_STR);
        $sqInsert->bindValue(2, $value2, PDO::PARAM_STR);
        $sqInsert->bindValue(3, $value3, PDO::PARAM_STR);
        $sqInsert->bindValue(4, $value4, PDO::PARAM_STR);
        $sqInsert->bindValue(5, $value5, PDO::PARAM_STR);
        $sqInsert->bindValue(6, $value6, PDO::PARAM_STR);
        $sqInsert->bindValue(7, $value7, PDO::PARAM_STR);
        $sqInsert->bindValue(8, $value8, PDO::PARAM_STR);
        $sqInsert->bindValue(9, $value9, PDO::PARAM_STR);
        $sqInsert->bindValue(10, $value10, PDO::PARAM_STR);
        $sqInsert->bindValue(11, $value11, PDO::PARAM_STR);
        $sqInsert->execute();
        $conn->commit();
        if ($sqInsert->rowCount() > 0) {
            return 'Gravado';
        } else {
            return 'nGravado';
        };
    } catch (PDOException $e) {
        echo 'Exception -> ';
        return $e->getMessage();
    } finally {
        $conn = null;
    }
}


function insertDoze($tabela, $campos, $value1, $value2, $value3, $value4, $value5, $value6, $value7, $value8, $value9, $value10, $value11, $value12)
{
    $conn = conectar();
    try {
        $conn->beginTransaction();
        $sqInsert = $conn->prepare("INSERT INTO $tabela($campos)VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");
        $sqInsert->bindValue(1, $value1, PDO::PARAM_STR);
        $sqInsert->bindValue(2, $value2, PDO::PARAM_STR);
        $sqInsert->bindValue(3, $value3, PDO::PARAM_STR);
        $sqInsert->bindValue(4, $value4, PDO::PARAM_STR);
        $sqInsert->bindValue(5, $value5, PDO::PARAM_STR);
        $sqInsert->bindValue(6, $value6, PDO::PARAM_STR);
        $sqInsert->bindValue(7, $value7, PDO::PARAM_STR);
        $sqInsert->bindValue(8, $value8, PDO::PARAM_STR);
        $sqInsert->bindValue(9, $value9, PDO::PARAM_STR);
        $sqInsert->bindValue(10, $value10, PDO::PARAM_STR);
        $sqInsert->bindValue(11, $value11, PDO::PARAM_STR);
        $sqInsert->bindValue(12, $value12, PDO::PARAM_STR);

        $sqInsert->execute();
        $conn->commit();
        if ($sqInsert->rowCount() > 0) {
            return 'Gravado';
        } else {
            return 'nGravado';
        };
    } catch (PDOException $e) {
        echo 'Exception -> ';
        return $e->getMessage();
    } finally {
        $conn = null;
    }
}



function insertQuatorze($tabela, $campos, $value1, $value2, $value3, $value4, $value5, $value6, $value7, $value8, $value9, $value10, $value11, $value12, $value13, $value14)
{
    $conn = conectar();
    try {
        $conn->beginTransaction();
        $sqInsert = $conn->prepare("INSERT INTO $tabela($campos)VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $sqInsert->bindValue(1, $value1, PDO::PARAM_STR);
        $sqInsert->bindValue(2, $value2, PDO::PARAM_STR);
        $sqInsert->bindValue(3, $value3, PDO::PARAM_STR);
        $sqInsert->bindValue(4, $value4, PDO::PARAM_STR);
        $sqInsert->bindValue(5, $value5, PDO::PARAM_STR);
        $sqInsert->bindValue(6, $value6, PDO::PARAM_STR);
        $sqInsert->bindValue(7, $value7, PDO::PARAM_STR);
        $sqInsert->bindValue(8, $value8, PDO::PARAM_STR);
        $sqInsert->bindValue(9, $value9, PDO::PARAM_STR);
        $sqInsert->bindValue(10, $value10, PDO::PARAM_STR);
        $sqInsert->bindValue(11, $value11, PDO::PARAM_STR);
        $sqInsert->bindValue(12, $value12, PDO::PARAM_STR); 
        $sqInsert->bindValue(13, $value13, PDO::PARAM_STR);
        $sqInsert->bindValue(14, $value14, PDO::PARAM_STR);

        $sqInsert->execute();
        $conn->commit();
        if ($sqInsert->rowCount() > 0) {
            return 'Gravado';
        } else {
            return 'nGravado';
        };
    } catch (PDOException $e) {
        echo 'Exception -> ';
        return $e->getMessage();
    } finally {
        $conn = null;
    }
}


function upUm($tabela, $campo1, $campoId, $valeu1, $valeuId)
{
    $conn = conectar();
    try {
        $conn->beginTransaction();
        $sqUpdate = $conn->prepare("UPDATE $tabela SET $campo1 = ? WHERE $campoId = ? ");
        $sqUpdate->bindValue(1, $valeu1, PDO::PARAM_STR);
        $sqUpdate->bindValue(2, $valeuId, PDO::PARAM_INT);
        $sqUpdate->execute();
        $conn->commit();
        if ($sqUpdate->rowCount() > 0) {
            return 'Atualizado';
        } else {
            return 'nAtualizado';
        };
    } catch (PDOException $e) {
        echo 'Exception -> ';
        return $e->getMessage();
    } finally {
        $conn = null;
    }
}

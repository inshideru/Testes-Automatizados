<?php

try {

    $categoria = new PDO('sqlite:opcoes.sqlite3');
    $categoria->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $categoria->exec("DROP TABLE IF EXISTS categoria;
                    CREATE TABLE categoria(
                    id integer primary key,
                    categoria text)");

    $categorias_arr = array(
        array(
            'id' => 1,
            'categoria' => 'Manutenção'
        ),
        array(
            'id' => 2,
            'categoria' => 'Acabamento'
        ),
        array(
            'id' => 3,
            'categoria' => 'Estrutura'
        ),
    );

    $insert = "INSERT INTO categoria (id, categoria)
            VALUES (:id, :categoria)";
    $stmt = $categoria->prepare($insert);

    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':categoria', $cat);

    foreach ($categorias_arr as $c) {
        $id = $c['id'];
        $cat = $c['categoria'];

        $stmt->execute();
    }

    $categoria = null;

    echo 'Fixture executada com sucesso';
} catch (PDOException $e) {
    echo $e->getMessage();
}
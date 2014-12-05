<?php

namespace FormDinamico\Db;


use FormDinamico\Classes\Opcao;

class OpcaoDAOTest extends \PHPUnit_Framework_TestCase
{
    private $db;

    public function setUp()
    {
        $this->db = new \PDO('sqlite::memory:');
        $query = "CREATE TABLE categoria(
                    id integer primary key,
                    categoria text
                  )";

        $this->db->exec($query);
    }

    public function tearDown()
    {
        $this->db->exec('DROP TABLE categoria');
    }

    public function testVerficaInsertDeCategoria()
    {
        $opcao = new Opcao();
        $opcao->setId(1);
        $opcao->setCategoria('Texto');

        $opcaoDAO = new OpcaoDAO();
        $opcaoDAO->setDbAdapter($this->db);

        $opcaoDAO->persist($opcao);
        $opcaoDAO->flush();

        $stmt = $this->db->query("SELECT * FROM categoria");
        $this->assertEquals(1, count($stmt->fetchAll()));
    }

    public function testAtributoDb()
    {
        $this->assertTrue(class_exists('FormDinamico\Db\OpcaoDAO'));
        $this->assertClassHasAttribute('db', 'FormDinamico\Db\OpcaoDAO');
    }

    public function testVerificaSeTemAdaptadorDeBancoDeDados()
    {
        $opcaoDAO = new OpcaoDAO();
        $opcaoDAO->setDbAdapter(new \PDO('sqlite::memory:'));

        $this->assertInstanceOf('\PDO', $opcaoDAO->getConnection());

    }

} 
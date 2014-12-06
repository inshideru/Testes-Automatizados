<?php

namespace FormDinamico\Db;


use FormDinamico\Classes\Opcao;

class OpcaoDAOTest extends \PHPUnit_Framework_TestCase
{
    private $db;
    private $opcao;
    private $opcaoDAO;

    public function setUp()
    {
        $this->db = new \PDO('sqlite::memory:');
        $query = "CREATE TABLE categoria(
                    id integer primary key,
                    categoria text
                  )";

        $this->db->exec($query);

        $this->opcao = new Opcao();
        $this->opcaoDAO = new OpcaoDAO();
    }

    public function tearDown()
    {
        $this->db->exec('DROP TABLE categoria');
    }

    public function testVerficaInsertDeCategoria()
    {
        $this->opcao->setId(1);
        $this->opcao->setCategoria('Texto');

        $this->opcaoDAO->setDbAdapter($this->db);

        $this->opcaoDAO->persist($this->opcao);
        $this->opcaoDAO->flush();

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
        $this->opcaoDAO->setDbAdapter($this->db);

        $this->assertInstanceOf('\PDO', $this->opcaoDAO->getConnection());

    }

} 
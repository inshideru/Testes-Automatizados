<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 30/11/14
 * Time: 17:52
 */

namespace FormDinamico\Classes;


class FormTest extends \PHPUnit_Framework_TestCase
{
    private $form;
    private $fieldSet;

    public function setUp()
    {
        $this->form = new Form(array());
        $this->fieldSet = new Fieldset();
    }

    public function tearDown()
    {
        unset($this->form, $this->fieldSet);
    }

    public function testSeFormInterface()
    {
        $form = new Form(array());
        $this->assertInstanceOf('FormDinamico\Interfaces\FormInterface', $form);
    }

    public function testFuncionalSeFormInterface()
    {
        $this->assertInstanceOf('FormDinamico\Interfaces\FormInterface', $this->form);
    }

    public function testSeTemSetFieldset()
    {
        $this->assertTrue(method_exists('FormDinamico\Classes\Form', 'setFieldset'),
            'A classe nao tem o metodo setFieldset'
        );
    }

    public function testSeTemRender()
    {
        $this->assertTrue(method_exists('FormDinamico\Classes\Form', 'render'),
            'A classe nao tem o metodo render'
        );
    }

    public function testSeTemAtributo()
    {
        $this->assertClassHasAttribute('atributos', 'FormDinamico\Classes\Form');
    }

    public function testSetterAndGetter()
    {
        $form = new Form(array());

        $form->set('atributo', 'valor');
        $this->assertEquals('valor', $form->get('atributo'));
    }

    public function testFuncionalSetterAndGetter()
    {
        $this->form->set('atributo', 'valor');
        $this->assertEquals('valor', $this->form->get('atributo'));
    }

    public function testPopular()
    {
        $form = new Form(array());
        $fieldSet = $this->getMock('\FormDinamico\Classes\Fieldset');
        $form->setFieldset($fieldSet);
        $parametro = array();
        $form->popular($parametro);

        $this->assertTrue(is_array($parametro));
    }

    public function testFuncionalPopular()
    {
        $this->form->setFieldset($this->fieldSet);
        $parametro = array();
        $this->form->popular($parametro);

        $this->assertTrue(is_array($parametro));
    }
} 
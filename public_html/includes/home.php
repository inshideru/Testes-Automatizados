<div class="row">
    <div class="col-md-8">
        <h2 class="sub-header">Formulário Dinâmico</h2>
    </div>

    <div class="col-md-4">
        <h4 class="sub-header">Algum título</h4>

        <p>Alguma mensagem1</p>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-6">
        <?php
        $request = new \FormDinamico\Classes\Request();
        $validator = new \FormDinamico\Classes\Validator($request);
        $form = new \FormDinamico\Classes\Form($validator, array(
            'id' => 'form-um',
            'class' => 'form-horizontal',
            'action' => '',
            'method' => 'post'
        ));

        $fielset = new \FormDinamico\Classes\Fieldset();

        $labelNome = new \FormDinamico\Classes\Label('Nome');
        $labelNome->set('for', 'nome')->set('class','control-label');

        $nome = new \FormDinamico\Classes\Input();
        $nome->setDivGroupClass('form-group');
        $nome->addLabel($labelNome);

        $fielset->createField($nome,
            array(
                'type' => 'text',
                'name' => 'nome',
                'id' => 'nome',
                'class' => 'form-control'
            )
        );
        $labelValor = new \FormDinamico\Classes\Label('Valor');
        $labelValor->set('for', 'valor')->set('class','control-label');

        $valor = new \FormDinamico\Classes\Input();
        $valor->setDivGroupClass('form-group');
        $valor->addLabel($labelValor);

        $fielset->createField($valor,
            array(
                'type' => 'text',
                'name' => 'valor',
                'id' => 'valor',
                'class' => 'form-control'
            )
        );

        $labelDescricao = new \FormDinamico\Classes\Label('Descrição');
        $labelDescricao->set('for', 'descricao')->set('class','control-label');

        $descricao = new \FormDinamico\Classes\Input();
        $descricao->setDivGroupClass('form-group');
        $descricao->addLabel($labelDescricao);

        $fielset->createField($descricao,
            array(
                'type' => 'text',
                'name' => 'descricao',
                'id' => 'descricao',
                'class' => 'form-control'
            )
        );

        $labelCategoria = new \FormDinamico\Classes\Label('Categoria');
        $labelCategoria
            ->set('for','parentesco')
            ->set('class','control-label');

        $categoria = new \FormDinamico\Classes\Select();
        $categoria->setDivGroupClass('form-group');
        $categoria
            ->addLabel($labelCategoria)
            ->addOption('','Escolha uma opção');

        $fielset->createField($categoria,
            array(
                'name' => 'categoria',
                'id' => 'categoria',
                'class' => 'form-control'
            )
        );

        $enviar = new \FormDinamico\Classes\Input();
        $enviar
            ->setDivGroupClass('form-group');
        $fielset->createField($enviar,
            array(
                'type' => 'submit',
                'class' => 'btn btn-primary'
            )
        );

        $opcoes = new \FormDinamico\Db\OpcoesDAO();

        $dados = array(
            'nome' => 'Martelo',
            'valor' => 12.90,
            'descricao' => 'Martelo com cabo enborrachado.',
            'select' => $opcoes->fullList()
        );

        $form->setFieldset($fielset);
        $form->popular($dados);
        $form->render();

        ?>
    </div>
    <div class="col-md-6">
        Alguma descrição!
    </div>
</div>
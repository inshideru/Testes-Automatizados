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
        $request = new \app\Classes\Request();
        $validator = new \app\Classes\Validator($request);
        $form = new \app\Classes\Form($validator, array(
            'id' => 'form-um',
            'class' => 'form-horizontal',
            'action' => '',
            'method' => 'post'
        ));

        $fielset = new \app\Classes\Fieldset();

        $labelNome = new \app\Classes\Label('Nome');
        $labelNome->set('for', 'nome')->set('class','control-label');

        $nome = new \app\Classes\Input();
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
        $labelValor = new \app\Classes\Label('Valor');
        $labelValor->set('for', 'valor')->set('class','control-label');

        $valor = new \app\Classes\Input();
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

        $labelDescricao = new \app\Classes\Label('Descrição');
        $labelDescricao->set('for', 'descricao')->set('class','control-label');

        $descricao = new \app\Classes\Input();
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

        $labelCategoria = new \app\Classes\Label('Categoria');
        $labelCategoria
            ->set('for','parentesco')
            ->set('class','control-label');

        $categoria = new \app\Classes\Select();
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

        $enviar = new \app\Classes\Input();
        $enviar
            ->setDivGroupClass('form-group');
        $fielset->createField($enviar,
            array(
                'type' => 'submit',
                'class' => 'btn btn-primary'
            )
        );

        $opcoes = new \app\Db\OpcoesDAO();

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
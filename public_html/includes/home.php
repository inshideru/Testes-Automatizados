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
                'class' => 'form-control',
                'placeholder' => 'Informe seu nome'
            )
        );

        $labelParentesco = new \app\Classes\Label('Parentesco');
        $labelParentesco
            ->set('for','parentesco')
            ->set('class','control-label');

        $parentesco = new \app\Classes\Select();
        $parentesco->setDivGroupClass('form-group');
        $parentesco
            ->addLabel($labelParentesco)
            ->addOption('','Escolha uma opção')
            ->addOption('pai','Pai')
            ->addOption('mae','Mãe')
            ->addOption('irmao','Irmão');

        $fielset->createField($parentesco,
            array(
                'name' => 'parentesco',
                'id' => 'parentesco',
                'class' => 'form-control'
            )
        );

        $labelMensagem = new \app\Classes\Label('Observações');
        $labelMensagem
            ->set('for','mensagem')
            ->set('class','control-label');

        $mensagem = new \app\Classes\TextArea();
        $mensagem
            ->addLabel($labelMensagem)
            ->addText('Observações')
            ->setDivGroupClass('form-group');

        $fielset->createField($mensagem,
            array(
                'name' => 'mensagem',
                'id' => 'mensagem',
                'class' => 'form-control',
                'rows' => '5'
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

        $form->setFieldset($fielset);
        $form->render();

        ?>
    </div>
    <div class="col-md-6">
        Alguma descrição!
    </div>
</div>
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

        $labelnome = new \app\Classes\Label('Nome');
        $labelnome
            ->set('for','nome')
            ->set('class','control-label');

        $nome = new \app\Classes\Input();
        $nome->addLabel($labelnome);
        $nome
            ->set('type', 'text')
            ->set('name','nome')
            ->set('id','nome')
            ->set('class','form-control')
            ->setDivGroupClass('form-group');

        $labelsobrenome = new \app\Classes\Label('Sobrenome');
        $labelsobrenome
            ->set('for','sobrenome')
            ->set('class','control-label');

        $sobrenome = new \app\Classes\Input();
        $sobrenome->addLabel($labelsobrenome);
        $sobrenome
            ->set('type','text')
            ->set('name','sobrenome')
            ->set('id','sobrenome')
            ->set('class','form-control')
            ->setDivGroupClass('form-group');

        $labeloptions = new \app\Classes\Label('Formação');
        $labeloptions
            ->set('for','opcoes')
            ->set('id','opcoes')
            ->set('class','control-label');

        $select = new \app\Classes\Select();
        $select
            ->set('class','form-control')
            ->set('id','opcoes')
            ->set('name','opcoes')
            ->setDivGroupClass('form-group')
            ->addLabel($labeloptions)
            ->addOption('','Selecione sua formação')
            ->addOption('fundamental','Ensino Funcamental')
            ->addOption('medio','Ensino Médio')
            ->addOption('superior','Ensino Superior');

        $labeltextarea = new \app\Classes\Label('Observações');
        $labeltextarea
            ->set('for','observacoes')
            ->set('id','observacoes')
            ->set('class','control-label');

        $observacoes = new \app\Classes\TextArea();
        $observacoes
            ->set('name','observacoes')
            ->set('class','form-control')
            ->set('id','observacoes')
            ->set('rows','5')
            ->set('cols','20')
            ->addText('Escreva uma breve descrição sobre você!')
            ->addLabel($labeltextarea)
            ->setDivGroupClass('form-group');



        $submitbutton = new \app\Classes\Input();
        $submitbutton
            ->set('type','submit')
            ->set('class','btn btn-primary')
            ->setDivGroupClass('col-sm-2');

        $resetbutton = new \app\Classes\Input();
        $resetbutton
            ->set('type','reset')
            ->set('class','btn btn-default')
            ->setDivGroupClass('col-sm-2');

        $form = new \app\Classes\Form();
        $form
            ->set('class','form-horizontal')
            ->set('method','post')
            ->addCampo($nome)
            ->addCampo($sobrenome)
            ->addCampo($select)
            ->addCampo($observacoes)
            ->addCampo($resetbutton)
            ->addCampo($submitbutton)
            ->render();

        ?>
    </div>
    <div class="col-md-6">
        Alguma descrição!
    </div>
</div>
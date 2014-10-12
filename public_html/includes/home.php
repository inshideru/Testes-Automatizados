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
    <div class="col-sm-6">
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
        $form->addCampo($nome);
        $form->addCampo($sobrenome);
        $form->addCampo($resetbutton);
        $form->addCampo($submitbutton);
        $form->render();

        ?>
    </div>
    <div class="col-sm-6">
        Alguma descrição!
    </div>
</div>
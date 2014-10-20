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
            'action' => '""',
            'method' => 'post'
        ));

        $nome = new \app\Classes\Input();
        $form->createField($nome,
            array(
                'type' => 'text',
                'name' => 'nome',
                'class' => 'form-control',
                'placeholder' => 'Informe seu nome'
            ))->render();

        var_dump($form);
        ?>
    </div>
    <div class="col-md-6">
        Alguma descrição!
    </div>
</div>
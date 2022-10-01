<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm; ?>

<?php $form = ActiveForm::begin(); ?>
    <div class="container">
        <h2><?=$country["name"]?></h2>
        <div class="row">
            <div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Назва поля</th>
                        <th scope="col">Значення</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Назва</td>
                        <td><?= $form->field($country, 'name') ?></td>

                    </tr>
                    <tr>
                        <td>Офіційна назва</td>
                        <td><?= $form->field($country, 'official_name') ?></td>
                    </tr>
                    <tr>
                        <td>Код валюти</td>
                        <td><?= $form->field($country, 'currency') ?></td>
                    </tr>
                    <tr>
                        <td>Площа</td>
                        <td><?= $form->field($country, 'area')->textInput(['type' => 'number']) ?></td>
                    </tr>
                    <tr>
                        <td>Столиця</td>
                        <td><?= $form->field($country, 'capital') ?></td>
                    </tr>
                    <tr>
                        <td>Континент</td>
                        <td><select name="continent_id" selected="<?=$country["continent_id"]?>">
                                <?foreach ($continents as $continent):?>
                                    <option value="<?=$continent["continent_id"]?>"><?=$continent["name"]?></option>
                                <?endforeach;?>
                                value="<?=Html::encode($country["capital"])?>
                            </select>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <button type="submit" style="text-decoration: none!important; display:block; background-color: red; color: white; width: 100px; text-align: center">
                    Save</button>
            </div>
        </div>
    </div>
<?php ActiveForm::end(); ?>

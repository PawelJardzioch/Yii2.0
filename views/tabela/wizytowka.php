<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\controllers\TabelaController;
/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form ActiveForm */
?>

    <div><p>
        <table border="0" width="100%">
            <tr height="50px">
                <td width="32%" style="font-size: 24px; min-width: 300px;"><?php echo $model->name; ?></td>
                <td>
                    
                    <a href="http://<?php echo $model->profiles[0]->company->url; ?>">
                        <img src="http://www2.emmerson.pl/<?php echo $model->profiles[0]->company->logo; ?>" alt="Grupa Emmerson S.A." title="Grupa Emmerson S.A." border="0">
                    </a>
                                        
                </td>
            </tr>
            <tr>
                <td width="32%"><span style="font-size: 10pt; min-width: 30%; text-align: left; vertical-align: top; font-family: Arial;">
                    <?php if ($model->profiles[0]->department->id == 1 || $model->profiles[0]->department->id == 100 || $model->profiles[0]->department->id == 99) echo '&nbsp;'; else echo $model->profiles[0]->department->name;?><br>
                        <?php echo $model->profiles[0]->jobTitle->name; ?><br>
                    </span>
                </td>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td style="font-size: 10pt; width: 300px; text-align: left; vertical-align: top; font-family: Arial;">
                    <span style="font-size: 10pt; color: #7f7f7f; padding-top: 0px;">
                        <span><?php echo $model->profiles[0]->company->name; ?></span><br>
                        <span><?php echo $model->profiles[0]->branch->address; ?></span><br>
                        <span><?php echo $model->profiles[0]->branch->zip_code; ?></span>
                        <span><?php echo $model->profiles[0]->branch->city->name; ?></span><br>
                                <?php if ($model->phone_number == 0 || NULL || ''){ echo ''; }
                                
                               else { echo 'tel: ';
                                    echo$model->profiles[0]->branch->phone_area_code;}?>
                            
                            <?php if ($model->phone_number == 0 || NULL || ''){ echo '';}
                               else{
                               echo $model->phone_number; echo ',';}?> 
                            
                            tel:&nbsp;<?php echo $model->mobile_phone_number; echo ','; ?>
                             <?php if ($model->fax_number == 0 || NULL || ''){ echo '';}
                             else{echo 'fax: '; echo $model->profiles[0]->branch->phone_area_code; echo' '; echo $model->fax_number; }?>
                    </span>
                </td>
                <td><p style="margin: 10px 0 6px 0; color:#FF0000; font-family: Arial;">W grupie oferujemy więcej:</p></td>
            </tr>
            <tr>
                <td width="32%"><span style="font-size: 10pt; width: 250px; text-align: left; vertical-align: top; font-family: Arial;">
                                            <div class="adres">
                                                <span style="font-size: 10pt; color: #7f7f7f; padding-top: 10px;">e-mail: <span >
                                                        <a href="mailto:<?php echo $model->profiles[0]->email; ?>" class="link3"><?php echo $model->profiles[0]->email; ?></a><br>
                                                        nasza strona:&nbsp;
                                                        <a href="http://<?php echo $model->profiles[0]->company->url; ?>" class="link2">www.<?php echo $model->profiles[0]->company->url; ?></a>
                                                    </span><br>
                                                    <span style="font-size: 10pt; color: #7f7f7f; padding-top: 10px; text-decoration: none;">dołącz do nas na 
                                                        <a href="http://facebook.com/GrupaEmmerson" class="link2">facebook.com/GrupaEmmerson</a>
                                                    </span><br>
                                            
                                                    <span style="font-size: 10pt; color: #7f7f7f; padding-top: 10px; text-decoration: none;">
                                                nasz blog: <a href="http://www.strefynieruchomosci.blog.pl" class="link2">www.strefynieruchomosci.blog.pl</a>
                                            
                                                    </span>
                                            
                                                </span>
                                            </div></span></td>
                <td><a style="color: #ff0000; text-decoration: none; font-size: 16px;" href="https://emmerson.pl/contact-finances">Sprawdź zdolność kredytową</a><br><a style="color: #ff0000; text-decoration: none; font-size: 16px;" href="http://emmerson-zarzadzanie.pl/aranzacje-i-wykonczenia/">Kompleksowe wykończenie mieszkań</a>
                                        </td>
            </tr>
            <tr height="10px">
                <td colspan="2">
                    <hr>
                </td>
            </tr>
             <tr>
                 <td colspan="2"><div class="klauzula"><span style=" font-size: 10pt; color: #7f7f7f; font-family: Arial;"><?php echo $model->profiles[0]->company->footer; ?></span>
                            </div> </td>                
            </tr>
        </table>
    </p>
</div>

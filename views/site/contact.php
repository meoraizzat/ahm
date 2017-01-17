<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'General Information';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    #rcorners2 {
        border-radius: 25px;
        border: 2px solid black;
        padding: 20px; 
        width: auto;
        height: auto;    
    }
    div.img {
        margin: 5px;
        border: 1px solid #ccc;
        float: left;
        width: 290px;
    }

    div.img:hover {
        border: 1px solid #777;
    }

    div.img img {
        width: 100%;
        height: auto;
    }

    div.desc {
        padding: 15px;
        text-align: center;
        font-size: 10px
    }
</style>
<div id="rcorners2" class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1><hr>
    <div class="row">
        <div class="col-lg-6">
            <strong><h4>AHM Technology Sdn Bhd (1091085-V)</h4></strong>
                17-3F, JALAN AU1A/4E,<br> 
                TAMAN KERAMAT PERMAI,<br>
                54200 KUALA LUMPUR<br><br>
                
            <strong><h4>Contact Number</h4></strong>
                +603-4251 1880 / +603-4251 1881<br><br>
                
            <strong><h4>Email</h4></strong>
                sales.ahmtechnology@gmail.com
       </div>
        <div class="col-lg-6">
            <div class="img">
                <a target="_blank" href="images/HUH.jpg">
                    <img src="images/HUH.jpg" alt="Sijil MOF" width="290" height="236" class="img-thumbnail">
                </a>
            </div>
       </div>
    </div>
    <!--<code><?// = __FILE__ ?></code>-->
    

    
    
</div>

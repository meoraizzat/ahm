<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About Us';
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
        width: 100px;
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

<div id="rcorners2" class="col-lg-12">
    <h1><?= Html::encode($this->title) ?></h1><hr>
    <div class="row">
        <div class="col-lg-8">
            <p align="justify">
                A H M T E C H N O L O G Y Sdn Bhd was incorporated in 2014 
                as a service provider to the Electrical Industry in Malaysia. 
                The company focuses its core business activities on trading 
                and services for the upstream sector. Since its inception, the 
                Companyâ€™s main mission is to share its know-how and expertise 
                by implementing a safe, reliable, efficient and cost effective 
                solution in all its project executions and delivery. 
                With qualified and experienced personnel, AHM Technology operates 
                and manages specialized managing projects with high standard delivery, 
                quality and tailor made solutions. To fully complement its 
                services, AHM Technology has also embarked on other activities 
                to support Electrical and Electronic projects tools and consumables. 
                AHM Technology also provides asset integrity related services including 
                predictive maintenance and real time monitoring.
            </p>
            
            <strong><h2>Our Mission</h2></strong>
            <ul>
                <li>To provide excellent services that distinguishes us from others</li>
                <li>To be the preferred service provider and trusted partner and to establish profitable business relationships</li>
                <li>To achieve sustainable growth and long term returns</li>
                <li>To share perspective and to collaborate on how to create success</li>
            </ul>
            
            <strong><h2>Clients List</h2></strong>
            <ul>
                <li>Tenaga Nasional Berhad (incl. TNB Janamanjung, TNB Research, TNB Remaco, TNB ILSAS, TNB Energy Services) </li>
                <li>Keretapi Tanah Melayu Berhad</li>
                <li>Universiti Malaya</li>
                <li>Universiti Teknologi Malaysia</li>
                <li>Sabah Electricity Sdn Bhd</li>
                <li>Kapar Energy Venture</li>
                <li>Sarawak Energy</li>
            </ul>
        </div>
        <div class="col-lg-4">
            <strong><h2>Certificates</h2></strong>
            <div class="img">
                <a target="_blank" href="images/mof.jpg">
                    <img src="images/mof.jpg" alt="Sijil MOF" width="150" height="200">
                </a>
                <div class="desc">MOF</div>
            </div>
            <div class="img">
                <a target="_blank" href="images/mofbumi.jpg">
                    <img src="images/mofbumi.jpg" alt="Sijil MOF" width="150" height="200">
                </a>
                <div class="desc">MOFBUMI</div>
            </div>
            <div class="img">
                <a target="_blank" href="images/tnbcidb.jpg">
                    <img src="images/tnbcidb.jpg" alt="Sijil MOF" width="150" height="200">
                </a>
                <div class="desc">TNBCIDB</div>
            </div><br>
            <div class="img">
                <a target="_blank" href="images/tnbmof.jpg">
                    <img src="images/tnbmof.jpg" alt="Sijil MOF" width="150" height="200">
                </a>
                <div class="desc">TNBMOF</div>
            </div>
            <div class="img">
                <a target="_blank" href="images/cidb.jpg">
                    <img src="images/cidb.jpg" alt="Sijil MOF" width="150" height="200">
                </a>
                <div class="desc">CIDB</div>
            </div>
            <div class="img">
                <a target="_blank" href="images/pkk.jpg">
                    <img src="images/pkk.jpg" alt="Sijil MOF" width="150" height="200">
                </a>
                <div class="desc">PKK</div>
            </div>
        </div>
    </div>
    <!--<code><?// = __FILE__ ?></code>-->
</div>

<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

<!--    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>-->
<center>
    <div class="body-content">

<!--        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>-->

        <?php
//            $images=['<img src="images/1.jpg" style="width:70%"/>','<img src="images/2.jpg" style="width:70%"/>','<img src="images/3.jpg" style="width:70%"/>'];
            echo yii\bootstrap\Carousel::widget([
                'items'=>[
                    [
                        'content' => '<img src="images/1.jpg"/>',
                        'caption' => '<h4>This is title</h4><p>This is the caption text</p>',
                        'options' => [
                            'style' => 'width:70%'
                        ],
                    ],
                    [
                        'content' => '<img src="images/2.jpg"/>',
                        'caption' => '<h4>This is title</h4><p>This is the caption text</p>',
                        'options' => [
                            'style' => 'width:70%'
                        ],
                    ],
                    [
                        'content' => '<img src="images/3.jpg"/>',
                        'caption' => '<h4>This is title</h4><p>This is the caption text</p>',
                        'options' => [
                            'style' => 'width:70%'
                        ],
                    ],
                    [
                        'content' => '<img src="images/4.jpg"/>',
                        'caption' => '<h4>This is title</h4><p>This is the caption text</p>',
                        'options' => [
                            'style' => 'width:70%'
                        ],
                    ],
                    [
                        'content' => '<img src="images/5.jpg"/>',
                        'caption' => '<h4>This is title</h4><p>This is the caption text</p>',
                        'options' => [
                            'style' => 'width:70%'
                        ],
                    ],
                ],
                'options'=>[
                    'style' => 'width:80%'
                ]
            ]);
        ?>


    </div>
</center>
</div>

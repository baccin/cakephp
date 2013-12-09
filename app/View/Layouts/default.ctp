<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >
    <head>
        <?php echo $this->Html->charset(); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Meu Primeiro Site Cakephp</title>
        <?php
            echo $this->Html->meta('icon');
            echo $this->Html->css(array('normalize' , 'foundation', 'cake'));
            echo $this->Html->script(array('modernizr', 'jquery', 'foundation.min'));
        ?>
    </head>
    <body>
        <div id="container">
            <div id="header">
                Cabeçalho
            </div>
            <div id="content">
                <?php echo $this->Session->flash(); ?>
                <?php echo $this->fetch('content'); ?>
            </div>
            <div id="footer">
                Rodapé
            </div>
        </div>
    </body>
</html>

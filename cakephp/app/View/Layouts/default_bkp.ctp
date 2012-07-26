<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
$baseurl='http://'.$_SERVER['HTTP_HOST'];
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $cakeDescription ?>:
            <?php echo $title_for_layout; ?>
        </title>
        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css('cake.generic');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
        <!-- Le styles -->
        <link href="http://localhost/cakephp/app/webroot/bootstrap/css/bootstrap.css" rel="stylesheet">
            <link href="http://localhost/cakephp/app/webroot/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
                <link href="http://localhost/cakephp/app/webroot/bootstrap/css/docs.css" rel="stylesheet">
                    <link href="http://localhost/cakephp/app/webroot/bootstrap/js/google-code-prettify/prettify.css" rel="stylesheet">

                        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
                        <!--[if lt IE 9]>
                          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
                        <![endif]-->

                        <!-- Le fav and touch icons -->
                        <link rel="shortcut icon" href="bootstrap/ico/favicon.ico">
                            <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://localhost/cakephp/app/webroot/bootstrap/ico/apple-touch-icon-144-precomposed.png">
                                <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://localhost/cakephp/app/webroot/bootstrap/ico/apple-touch-icon-114-precomposed.png">
                                    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://localhost/cakephp/app/webroot/bootstrap/ico/apple-touch-icon-72-precomposed.png">
                                        <link rel="apple-touch-icon-precomposed" href="http://localhost/cakephp/app/webroot/bootstrap/ico/apple-touch-icon-57-precomposed.png">
                                            </head>
                                            <body>
                                                <div class="container">
                                                    
                                                    <div id="container">
                                                        <div id="header">
                                                            <h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
                                                        </div>
                                                        <div id="content">
                                                            <?php 
//echo App::baseUrl() ;//Router::url('');                                                            
echo $baseurl;
                                                            //
                                                       // echo 'http://'.$_SERVER['HTTP_HOST'].$this->base;

                                                           // echo $this->base;
                                                         
                                                            //echo $this->Html->url('/', FALSE);?>
                                                            <?php echo $this->Session->flash(); ?>

                                                            <?php echo $this->fetch('content'); ?>
                                                        </div>
                                                        <div id="footer">
                                                            <?php
                                                            echo $this->Html->link(
                                                                    $this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')), 'http://www.cakephp.org/', array('target' => '_blank', 'escape' => false)
                                                            );
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <?php echo $this->element('sql_dump'); ?>
                                                </div>


                                            </body>
                                            </html>

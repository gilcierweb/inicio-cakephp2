<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title_for_layout ?></title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <!-- Incluir arquivos extenos e scripts aqui (Ver o helper HTML para mais detalhes) -->
        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css('cake.generic');
        echo $this->Html->css('bootstrap');
        echo $this->Html->css('bootstrap-responsive');
        echo $this->Html->css('docs');
        echo $this->Html->css('js/google-code-prettify/prettify');
        //echo $this->Html->css('bootstrap/css/bootstrap');
         echo $this->Html->css('estilos');
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
    <body>
        <div class="container">
            <!-- Se você quiser exibir algum menu
            em todas as suas views, inclua-o aqui -->
            <div id="header">
                <h1>CakePHP</h1>
                <div id="menu">...</div>
            </div>
            <?php echo $this->Session->flash(); ?>
            <!-- Aqui é onde eu quero que minhas views sejam exibidas -->
            <?php echo $this->fetch('content'); ?>

            <div id="debug">
                <?php echo $this->element('sql_dump'); ?>
            </div>

            <!-- Adicionar um rodapé para cada página exibida -->
            <div id="footer">
                <p>
                    Site melhor visualizado com navegadores modernos como: 
                    <a href="http://www.baixaki.com.br/download/mozilla-firefox.htm" title="Mozilla Firefox" target="_blank">Firefox</a>,
                    <a href="http://www.baixaki.com.br/download/opera.htm" title="Opera" target="_blank">Opera</a>,
                    <a href="http://www.baixaki.com.br/download/google-chrome.htm" title="Google Chrome" target="_blank">Chorme</a>, <a href="http://www.baixaki.com.br/download/safari.htm" title="Apple Safari" target="_blank">Apple Safari</a>
                </p>
            </div>

        </div>
    </body>
</html>
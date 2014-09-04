<html>
    <head>
        <title>{title}</title>
        <?php $this->load->view('head'); ?>
    </head>
    <body>
        <div id="header">
            <?php echo $this -> template ->partial-> view('header'); ?>
        </div>
        <div id="content-view">


            <?php $this -> load -> view($content_view); ?>
        </div>
        <div id="footer">
            <?php $this->load->view('footer'); ?>
        </div>
    </body>
</html>

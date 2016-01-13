<!DOCTYPE html>
<?php
    header("Cache-Control: no-store, no-cache, must-revalidate"); // HTTP/1.1
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
    header("Pragma: no-cache"); // HTTP/1.0
    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header("Content-Type: text/html; charset=UTF-8"); 
    header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
    header('P3P: CP="ALL ADM DEV PSAi COM OUR OTRo STP IND ONL"');    
?>
<html lang="en">
    <head>
        <?php echo $this->Html->charset(); ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
        <!--<meta http-equiv="X-UA-Compatible" content="IE=8" >-->
        <?php echo $this->Html->meta('icon'); ?>
        <meta name="viewport" content="initial-scale = 1,maximum-scale = 1,user-scalable=no" />
        <?php echo $this->fetch('meta'); ?>
        
        <title><?php echo $title_for_layout; ?> - <?php echo Configure::read('App.SiteName'); ?></title>
        
        <!---- scriptsTop ---->
        <?php $this->start('scriptsTop'); ?>
            <?php #echo $this->Html->script('jquery/jquery-2.1.0.min'); ?>
            <?php #echo $this->Html->script('chosen.jquery.min'); ?>
            <?php #echo $this->Html->script('bootstrap/bootstrap'); ?>
            
        <?php $this->end('scriptsTop'); ?>
        <!---- /scriptsTop ---->
        
        <!---- scriptslib ---->
        <?php $this->start('script'); ?>
            
        <?php $this->end('script'); ?>
        <!---- /scriptslib ---->
        <!-- Include Jquery and visible.js-->
    
        <!---- scriptsBottom ---->
        <?php $this->start('scriptsBottom'); ?>
            <?php echo $this->Html->script('jquery.js'); ?>
            <?php echo $this->Html->script('jquery.visible.js'); ?>
            <?php echo $this->Html->script('jquery.themepunch.plugins.min.js'); ?>
            <?php echo $this->Html->script('jquery.themepunch.revolution.min.js'); ?>
            <?php echo $this->Html->script('owl.carousel.min.js'); ?>
            <?php echo $this->Html->script('jquery.mixitup.min.js'); ?>
            <?php echo $this->Html->script('jquery.magnific-popup.min.js'); ?>
            <?php echo $this->Html->script('jquery.imgpreload.min.js'); ?>
            <?php echo $this->Html->script('general.js'); ?>
            <?php echo $this->Html->script('bootstrap.min.js'); ?>
            <?php echo $this->Html->script('holder.js'); ?>
        <?php $this->end('scriptsBottom'); ?>
        <!---- /scriptsBottom ---->
        
        <!---- csslib ---->
        <?php $this->start('csslib'); ?>
            <!-- The styles -->
            <?php echo $this->Html->css('bootstrap.css'); ?>
            <?php echo $this->Html->css('magnific-popup.css'); ?>
            <?php echo $this->Html->css('owl.carousel.css'); ?>
            <?php echo $this->Html->css('owl.theme.css'); ?>
            <?php echo $this->Html->css('settings.css'); ?>
            <?php echo $this->Html->css('style.css'); ?>
            
            <?php echo $this->Html->css('https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css');?>
            <?php echo $this->Html->css('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');?>
        <?php $this->end('csslib'); ?>
        <!---- /csslib ---->
        
        <?php echo $this->fetch('scriptsTop'); ?>
        <?php echo $this->fetch('csslib'); ?>
        <!--Couple of added google fonts -->
        <link href="http://fonts.googleapis.com/css?family=Sonsie+One|Old+Standard+TT" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Cabin:400,600italic" rel="stylesheet" type="text/css">
        <meta name="google-site-verification" content="Y6694A7kDZ3tkNg6nkZ9hzgeeNSt7fh4FThjygxRJ0Q" />
    </head>
    <body>
        <div id="contenedor">
            <?php echo $this->element('default_header'); ?>
            <div id="body" class="container">
                <div class="offset-help">
                    <noscript>
                        <div class="alert alert-block col-md-12">
                            <h4 class="alert-heading">Warning!</h4>
                            <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
                        </div>
                    </noscript>
                    <?php echo $this->element('breadcrumbs'); ?>
                    <?php echo $this->Session->flash(); ?>
                    <?php echo $this->Session->flash('auth'); ?>
                    <!--PRINCIPAL CONTENT-->
                    <?php echo $this->fetch('content'); ?>
                    <!-- /PRINCIPAL CONTENT -->
                </div>
            </div>
            
            <?php echo $this->element('default_footer'); ?>
        
        </div>
        <!-- Normal Model -->
        <div class="modal fade in" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" >
            <div class="modal-dialog">
                <div class="modal-content">
                </div> <!-- /.modal-content -->
            </div> <!-- /.modal-dialog -->
        </div> <!-- /.modal -->
        <?php echo $this->fetch('script'); ?>
        <?php echo $this->fetch('scriptsBottom'); ?>
        
        <script type="text/javascript">
            jQuery(window).ready( function($) {
                $("#myModal").on('hidden.bs.modal', function () {
                    $(this).data('bs.modal', null);
                });
            });
            //Preload images
            App.preloadImg();
      
            $(document).ready(function(){
                //initialize the javascript
                App.init();
            });
        </script>
    </body>
</html>
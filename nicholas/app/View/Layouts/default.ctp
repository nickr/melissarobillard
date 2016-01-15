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
        <?php $this->end('scriptsTop'); ?>
        <!---- /scriptsTop ---->
            
        <!---- scriptslib ---->
        <?php $this->start('script'); ?>
        <?php $this->end('script'); ?>
        <!---- /scriptslib ---->
        
        <!---- scriptsBottom ---->
        <?php $this->start('scriptsBottom'); ?>
            <!-- jquery -->
            <?php echo $this->Html->script('jquery'); ?>
            <!-- wow script -->
            <?php echo $this->Html->script('wow.min'); ?>
            <!-- boostrap -->
            <?php echo $this->Html->script('bootstrap'); ?>
            <!-- jquery mobile -->
            <?php echo $this->Html->script('touchSwipe.min'); ?>
            <?php echo $this->Html->script('respond'); ?>
            <!-- gallery -->
            <?php echo $this->Html->script('jquery.blueimp-gallery.min'); ?>
            <!-- custom script -->
            <?php echo $this->Html->script('script'); ?>v
        <?php $this->end('scriptsBottom'); ?>
        <!---- /scriptsBottom ---->
        
        <!---- csslib ---->
        <?php $this->start('csslib'); ?>
            <!-- The styles -->
            <!-- bootstrap -->
            <?php echo $this->Html->css('bootstrap.min'); ?>
            <!-- animate.css -->
            <?php echo $this->Html->css('animate'); ?>
            <?php echo $this->Html->css('set'); ?>
            <!-- gallery -->
            <?php echo $this->Html->css('blueimp-gallery.min'); ?>
            <!-- font awesome -->
            <?php echo $this->Html->css('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');?>
            <?php echo $this->Html->css('style');?>
        <?php $this->end('csslib'); ?>
        <!---- /csslib ---->
        
        <?php echo $this->fetch('scriptsTop'); ?>
        <?php echo $this->fetch('csslib'); ?>
        
        <?php echo $this->fetch('script'); ?>
        
        <!--Couple of added google fonts -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
        
        
    </head>
    <body>
        <div class="topbar animated fadeInLeftBig"></div>
        <?php echo $this->element('default_header'); ?>
        
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
        <?php echo $this->element('default_footer'); ?>
        
        <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
        <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
            <!-- The container for the modal slides -->
            <div class="slides"></div>
            <!-- Controls for the borderless lightbox -->
            <h3 class="title">Title</h3>
            <a class="prev">‹</a>
            <a class="next">›</a>
            <a class="close"><i class="fa fa-close"></i></a>
            <!-- The modal dialog, which will be used to wrap the lightbox content -->    
        </div>
        <?php echo $this->fetch('scriptsBottom'); ?>
        
        <!-- Normal Model -->
        <div class="modal fade in" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" >
            <div class="modal-dialog">
                <div class="modal-content">
                </div> <!-- /.modal-content -->
            </div> <!-- /.modal-dialog -->
        </div> <!-- /.modal -->
        
        
        
        <script type="text/javascript">
            jQuery(window).ready( function($) {
                $("#myModal").on('hidden.bs.modal', function () {
                    $(this).data('bs.modal', null);
                });
            });
            
        </script>
    </body>
</html>
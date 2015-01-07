<!DOCTYPE html>
<html lang="en-US">

<head>
  <?php include 'head.php';?>
    <title>AZeotropy 2k14 &sdot; IIT Bombay</title>
    <meta name="description" content="India's largest Chemical Engineering Symposium">

<link rel="stylesheet" href="<?php echo(CSS.'reg_form.css');?>" type="text/css" />

</head>

    <body>
<?php include'fb_script.php';?>
        <div class="snap-drawers">
            <div class="snap-drawer snap-drawer-left gap-top">
            <a id="amenuLink" href="<?php echo(OTHER.'amenu-source.html'); ?>">menu</a>
            </div>
            <div class="snap-drawer snap-drawer-right"></div>
        </div>
 <?php include 'toolbar.php';?>       
        <div id="content" class="snap-content" style="">


            <div class="info">
            <h1><p class="color">Registrations</p></h1>
            <br>
            
<?php include 'azeonum_form.php';?>
            </div>
        </div>
<?php include 'footer.php';?>        
        <script src="<?php echo(JS.'widgets.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo(JS.'snap.js'); ?>" type="text/javascript"></script>
        <script type="text/javascript">
            var snapper = new Snap({
                element: document.getElementById('content')
            });
            
        </script>
        <script src="<?php echo(JS.'demo.js'); ?>" type="text/javascript"></script>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>       
    

<embed id="kpmAutofillPlugin" type="application/x-npkpmautofillplugin" style="visibility: hidden; width: 0; height: 0; position: absolute;">

</body>
</html>
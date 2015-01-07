<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>AZeotropy 2k14 &sdot; IIT Bombay</title>
    <meta name="description" content="India's largest Chemical Engineering Symposium">
    <script src="<?php echo(JS.'form_validation.js'); ?>" type="text/javascript"></script>
<?php include 'head.php';?>
<style type="text/css">
input{
    line-height: normal;
    background-color: transparent;
    /*border:2px solid #a1a1a1;*/
    border-style: 2px solid #a1a1a1;
    /*-webkit-border-radius:15px;*/
    width:300px;
    height: 50px;
    /*padding:10px 40px;*/
  border-right: #a9a9a9 0px solid;
  padding-right: 4px;
  border-top: #a9a9a9 0px solid;
  padding-left: 4px;
  /*padding-bottom: 10px;
  margin-bottom: 5px;*/
  border-left: #a9a9a9 0px solid;
  padding-top: 4px;
  border-bottom: #a9a9a9 2px solid;
  -webkit-autofill-color:transparent;
  text-align: center;
  font-size: 25px;
  font-weight: 600;
  color: #777;
}
input:hover{
  border-color: #549eab;
}
input:focus{
    /*-webkit-border-radius:15px;*/
    border: #a9a9a9 2px solid;
    /*border-color: #549eab;*/
}
input[type:submit]{
        border-color: blue;
    width: 100px;
    height: 30px;
    cursor: hand;
}

::-webkit-input-placeholder{
    color:#aaa;
    font-size: 25px;
    font-weight: 600;
    text-align: center;
    overflow: visible;
    font-variant: small-caps;
    font-stretch:extra-expanded;

}
input:-webkit-autofill {
        -webkit-box-shadow: 0 0 0px 1000px #cfcfcf inset;
    }
.error{
    text-align: center;
    font-size: 7px;
    color: red;
}
</style>

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
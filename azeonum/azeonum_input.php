<!DOCTYPE html>
<html lang="en-US">

<head>
  <?php include 'head.php';?>
    <title>AZeotropy 2k14 &sdot; IIT Bombay</title>
    <meta name="description" content="India's largest Chemical Engineering Symposium">

<link rel="stylesheet" href="<?php echo(CSS.'reg_form.css');?>" type="text/css" />


<!--For Statewise sorting-->
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript">
$(function(){
  $selectstate = $('#selectstate');
  $selector = $('#selector');
  $selectstate.change(function () {
    $options = $('.ct-content-container-box.skin-white');
    $selector.empty();
    $selector.append("<option value='showall'>Select College</option>");
    $selector.append("<option value='other'>Other</option>");
    $options.show();
    $currentSelection = $(this).val();
    if ($currentSelection != "showallprod") {
      $options.children().each(function () {
        if (!($(this).hasClass($currentSelection))) {
          $(this).parent().parent().fadeOut();
        } else {
          $selector.append("<option value='" + $(this).attr('id') + "'>" + $(this).text() + "</option>");
          $(this).parent().parent().fadeIn();
        }
      });
    } else {
      $options.parent().show();
    }
  });
  $selector.change(function () {
    $options = $('.ct-content-container-box.skin-white').children().filter("." + $selectstate.val());
    $currentSelection = $(this).val()
    $options.parent().show();
    if ($currentSelection != "showall") {
      $options.each(function(){
        if($(this).is("#"+$currentSelection))
          $(this).parent().parent().fadeIn();
      });
      $options.not("#" + $currentSelection).parent().parent().fadeOut();
    } else if($currentSelection == "showall"){
      $options.parent().parent().fadeIn();
    } else {
      $options.children().filter("." + $selectstate.val()).fadeIn();
    }
  });
});
</script>

</head>

<body>
 <?php include 'toolbar.php';?>       
        <div id="content" class="snap-content" style="">
            <div class="info">
            <h1><p class="color">Registrations</p></h1><br>
<?php include 'azeonum_form.php';?>
            </div>
        </div>
<?php include 'footer.php';?>
</body>
</html>
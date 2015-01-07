<!--Form.Open-->
<div id="azeonum_form">
<?php echo form_open('azeonum/save','id="myform"'); ?>
<!--<?php echo $name; ?>:<br>-->
<?php 
$name_place='placeholder="Full Name" id="name_input"'; 
echo form_input('name','',$name_place); 
?>
<br>
<div id='myform_name_errorloc' class="error_strings"></div>
<br>
<!--<?php echo $college; ?>: <br>-->
<?php echo form_input('college','','placeholder="College Name"'); ?>
</br>
<div id='myform_college_errorloc' class="error_strings"></div>
<br>
<!--<?php echo $email; ?>: <br>-->
<?php echo form_input('email','','placeholder="Email Address"'); ?>
</br>
<div id='myform_email_errorloc' class="error_strings"></div>
<?php //echo $phone; ?><br>
<?php echo form_input('phone','','placeholder="Contact Number"'); ?>
</br>
<div id='myform_phone_errorloc' class="error_strings"></div>
<br><br>
<?php echo form_submit('mysubmit','Submit');  ?>
<?php echo form_close(); ?>
<?php //echo validation_errors('<p class="error">');?>

<br><br><br><br><br>

<script language="JavaScript" type="text/javascript"
xml:space="preserve">//<![CDATA[
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("myform");
 frmvalidator.EnableOnPageErrorDisplay();
 frmvalidator.EnableMsgsTogether();
 
  frmvalidator.addValidation("name","req","Please enter your Full Name");
  frmvalidator.addValidation("name","maxlen=30",	"Max length for name is 30");
  frmvalidator.addValidation("name","alpha_s","Name can contain alphabetic chars only");

  frmvalidator.addValidation("college","req","Please enter your College Name");
  frmvalidator.addValidation("college","maxlen=50",  "Max length for name is 50");
  frmvalidator.addValidation("college","alpha_s","College Name can contain alphabetic chars only");
  
  frmvalidator.addValidation("email","req","Please enter your Email Address");
  frmvalidator.addValidation("email","email", "Please enter a valid Email Address");

  frmvalidator.addValidation("phone","req","Please enter your Contact Number");
  frmvalidator.addValidation("phone","minlen=10","Please enter 10 digit Mobile Number");
  frmvalidator.addValidation("phone","maxlen=10","Please enter 10 digit Mobile Number");
  frmvalidator.addValidation("phone","numeric");
  
//]]>
</script>
</div>
function setCaretPosition(name_input, 0) {
    var elem = document.getElementById(name_input);

    if(elem != null) {
        if(elem.createTextRange) {
            var range = elem.createTextRange();
            range.move('character', 0);
            range.select();
        }
        else {
            if(elem.selectionStart) {
                elem.focus();
                elem.setSelectionRange(0, 0);
            }
            else
                elem.focus();
        }
    }
}
<!--Form.Close-->
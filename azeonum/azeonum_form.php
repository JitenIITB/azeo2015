	<div id='wrap'  data-snap-ignore="true">

		<div class='options'>
			<label>
				<input type='checkbox' id='alerts' />
				Disable alerts
			</label>
		</div>
		<section class='form'>
			<form action="<?php echo(URL.'registrations/validate');?>" method="post" novalidate>
				<fieldset>
					<!-- name of the student-->
					<div class="item">
						<label>
							<span>Name</span>
							<input name="name" placeholder="Full Name" required="required" type="text" autofocus/>		
						</label>
						<div class='tooltip help'>
							<span>?</span>
							<div class='content'>
								<b></b>
								<p>Please enter your full name matching exactly with that on college ID Card</p>
							</div>
						</div>
					</div>

					<!-- state of the candidate  -->
					<div class="item">
						<label>
							<span>State</span>

							<select name="state" id="selectstate" onchange='state_others(this.value);'>

        <option value="showallprod">Select State</option>

<?php

$i=0;
while ($i <= 35) {

foreach ($query as $row) {

  if ($row->stateid == $i) {
    echo "<option value=".$row->state.">".$row->state."</option>";
    break;
  }
  
}
$i = $i+1;
}

;?>


							</select>
						</label>
					</div>

					<!-- college of the student -->
					<div class="item">
						<label>
							<span>College</span>
							<select id="selector" name="college" onchange='college_others(this.value);' required="required">
								<option value="showall">Select College</option>
								<option value="other">Other</option>
							</select>
						</label>
						<div class='tooltip help'>
							<span>?</span>
							<div class='content'>
								<b></b>
								<p>If you can't see your college in the list, Please select other and specify the college name</p>
							</div>
						</div>
					</div>

<div style="display:none;">
<?php

foreach ($query as $row) {

echo "<div class='grid_4'>"."<div class="."'ct-content-container-box skin-white'>"."<div id=".$row->id." "."class=".$row->state.">".$row->name."</div></div></div>";
}
?>
</div>
					<!-- college to be specified -->
					<div class="item" id="otherType">
						<label for="specify">
							<span>Specify</span>
							<input class='date' type="text" name="specify" required='required' placeholder="Specify College Name"/>
						</label>
						<div class='tooltip help'>
							<span>?</span>
							<div class='content'>
								<b></b>
								<p>We'll verify and add to the database</p>
							</div>
						</div>
					</div>



<script type="text/javascript">
    $("#otherType").hide();
$('#selector').on('change',function(){
    if($(this).val()==="other"){
    $("#otherType").show()
    }
    else{
    $("#otherType").hide()
    }
});
</script>
					<!-- date of birth -->
					<div class="item">
						<label>
							<span>Date of Birth</span>
							<input class='date' type="date" name="dob" required='required'>
						</label>
					</div>

					<!-- gender of the student -->
					<div class="item">
						<label class="gender">
							<span>Gender</span>
							<span class="gender">Male:</span> <input name="gender" value="male" class='radio' required="required" type="radio"/>
							<span class="gender">Female:</span> <input name="gender" value="female" class='radio' required="required" type="radio"/>
						</label>
					</div>

					<!-- email of the student -->
					<div class="item">
						<label>
							<span>Email Address</span>
							<input name="email" class='name' required="required" type="email" placeholder="username@example.com"/>
						</label>
					</div>

					<!-- contact number of the student -->
					<div class="item">
						<label>
							<span>Contact Number</span>
							<input type="tel" class='tel' name="phone" required='required' data-validate-length-range="10,10" placeholder="e.g. 9876543210"/>
						</label>
						<div class='tooltip help'>
							<span>?</span>
							<div class='content'>
								<b></b>
								<p>Please enter your 10-digit mobile number on which you can be contacted during the festival</p>
							</div>
						</div>
					</div>

					<!-- suggestions any -->
					<div class="item">
						<label>
							<span>Suggestions</span>
							<textarea name='suggestions' placeholder="<?php echo "Suggest us, how can we bring some change that can impact the rural life!";?>"></textarea>
						</label>
					</div>
					
				</fieldset>

				<button id='send' name="mysubmit" type='submit'>Submit</button>

				<br><br>
				<fieldset>
	<div class="contact_2">
        Ankit Gupta
        <br>
        ankit@azeotropy.com
        <br>
        +91-7506134421
    </div>
    <div class="contact_2">
        Shreya Shwetima
        <br>
        shreya@azeotropy.com
        <br>
        +91-9769470042
    </div>
				</fieldset>
			</form>	
		</section>
	</div>
	<br><br><br>
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://dropthebit.com/demos/validator/multifield.js"></script>
    <script src="http://dropthebit.com/demos/validator/validator.js"></script>-->

    <script src="<?php echo(JS.'validator.js'); ?>" type="text/javascript"></script>
	<script>
		// initialize the validator function
		validator.message['date'] = 'not a real date';
		
		// validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
		$('form')
			.on('blur', 'input[required], input.optional, select.required', validator.checkField)
			.on('change', 'select.required', validator.checkField);
			
		$('.multi.required')
			.on('keyup', 'input', function(){ 
				validator.checkField.apply( $(this).siblings().last()[0] );
			}).on('blur', 'input', function(){ 
				validator.checkField.apply( $(this).siblings().last()[0] );
			});
		
		// bind the validation to the form submit event
		//$('#send').click('submit');//.prop('disabled', true);
		
		$('form').submit(function(e){
			e.preventDefault();
			var submit = true;
			// evaluate the form using generic validaing
			if( !validator.checkAll( $(this) ) ){
				submit = false;
			}

			if( submit )
				this.submit();
			return false;
		});
		
		/* FOR DEMO ONLY */
		$('#vfields').change(function(){
			$('form').toggleClass('mode2');
		}).prop('checked',false);
		
		$('#alerts').change(function(){
			validator.defaults.alerts = (this.checked) ? false : true;
			if( this.checked )
				$('form .alert').remove();
		}).prop('checked',false);
	</script>
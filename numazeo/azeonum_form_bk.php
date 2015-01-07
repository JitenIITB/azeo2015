	<div id='wrap'  data-snap-ignore="true">

		<div class='options'>
			<label>
				<input type='checkbox' id='alerts' />
				Disable alerts
			</label>
		</div>
		<section class='form'>
			<form action="<?php echo(URL.'azeonum/save');?>" method="post" novalidate>
				<fieldset>
					<div class="item">
						<label>
							<span>Name</span>
							<input data-validate-length-range="6" name="name" placeholder="Full Name" required="required" type="text" autofocus/>		
						</label>
						<div class='tooltip help'>
							<span>?</span>
							<div class='content'>
								<b></b>
								<p>Please enter your full name matching exactly with that on college ID Card</p>
							</div>
						</div>
					</div>



					<div class="item">
						<label>
							<span>State</span>
<?
function state_dropDown(){
    $dropDown1 = mysql_query("SELECT * FROM colleges");
        while ($record = mysql_fetch_array($dropDown1)) {
            echo '<option value="' . $record['state'] . '">' . $record['state'] . '</option>';
        }
}
?>
							<select name="state" id="state" onchange='state_others(this.value);'>
								<option>Select State</option>
								<?php state_dropDown() ?>
							</select>
						</label>
					</div>


					<div class="item">
						<label>
							<span>College</span>
<?
function college_dropDown(){
    $dropDown2 = mysql_query("SELECT * FROM colleges");
        while ($record = mysql_fetch_array($dropDown2)) {
            echo '<option value="' . $record['name'] . '">' . $record['name'] . '</option>';
        }
}
?>
							<select name="college" id="college" onchange='college_others(this.value);'>
								<option>Select College</option>
								<option value="other">Other</option>
								<?php college_dropDown() ?>
							</select>
						</label>
					</div>


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
    $("#college").hide();
$('#college').on('change',function(){
    if($(this).val()==="other"){
    $("#college").show()
    }
    else{
    $("#college").hide()
    }
});
</script>

<script type="text/javascript">
    $("#otherType").hide();
$('#college').on('change',function(){
    if($(this).val()==="other"){
    $("#otherType").show()
    }
    else{
    $("#otherType").hide()
    }
});
</script>
					<div class="item">
						<label>
							<span>Date of Birth</span>
							<input class='date' type="date" name="dob" required='required'>
						</label>
					</div>

					<div class="item">
						<label>
							<span>Email Address</span>
							<input name="email" class='name' required="required" type="email" placeholder="username@example.com"/>
						</label>
					</div>

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
        Madhumeeta Kumari
        <br>
        madhu@azeotropy.com
        <br>
        9004315625
    </div>
    <div class="contact_2">
        Himanshu Chandra
        <br>
        himanshu@azeotropy.com
        <br>
        9867171080
    </div>
				</fieldset>
			</form>	
		</section>
	</div>
	<br><br><br>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://dropthebit.com/demos/validator/multifield.js"></script>
    <script src="http://dropthebit.com/demos/validator/validator.js"></script>
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
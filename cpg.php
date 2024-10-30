<script>
function oucpggpassword()
{
	var oucpgpl = jQuery('#idoncpg_plenght').val().length;
	
	jQuery('#oncpg_plenght_label1').css('color','#000000');
	jQuery('#oncpg_plenght_label1').hide();
	
	if(oucpgpl >=1)
	{
		var formData = new FormData(jQuery('#ou_cpgform')[0]);
		formData.append('action', 'cpggeneratepassword');
		formData.append('nonce', '<?php echo wp_create_nonce('gvf56gdds');?>');
		jQuery.ajax({
		type: "post",
		url: oucpgcode.oucpgcode_url,
		data: formData,
		contentType:false,
		processData:false,
		beforeSend: function() 
		{
			jQuery("#oucpg_buttongenpassword").hide();
			jQuery("#oucpg_buttonpleasewait").show();
			jQuery("#oucpg_resultpassword").hide();
		},
		success: function(html)
		{
			jQuery("#oucpg_resultpassword").empty();
			jQuery("#oucpg_resultpassword").append(html);
			jQuery("#oucpg_resultpassword").show();
			jQuery("#oucpg_buttonpleasewait").hide();
			jQuery("#oucpg_buttongenpassword").show();
		}
		});
	}
	if(oucpgpl == 0 )
	{
		jQuery('#oncpg_plenght_label1').css('color','#990000');
		jQuery('#oncpg_plenght_label1').show();
	}
}
</script>
<div style="margin:10px; width: 560px; border: 1px solid #0059b3; background: #ffffff; min-height:50px; border-radius: 10px; ">
	<div style="margin:10px; width:540px;">
			<div style="color: #0059b3; padding:5px 0px 0px 0px; font-size: 20px; text-align:center;">
				<b><?php echo esc_html("Cheerful Password Generator");?></b>
			</div>
			
			<form id="ou_cpgform" enctype="multipart/form-data"  method="POST">
				<div style="color: #000000; padding:5px 0px 0px 0px; font-size: 14px; text-align:left;">
					<b><?php echo esc_html("Password Length");?></b> <span id="oncpg_plenght_label1" style="display:none;"><?php echo esc_html("This field must be filled in");?></span>
				</div>
				
				<div style="color: #000000; padding:5px 0px 0px 0px; font-size: 14px; text-align:left;">
					<select autocomplete="off" style="font-size:14px; width:100%;" name="oncpg_plenght" id="idoncpg_plenght">
						<option value="" selected><?php echo esc_html("Password Length");?></option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="12">12</option>
						<option value="15">15</option>
					</select>
				</div>
				
				<div style="color: #000000; padding:5px 0px 10px 0px; font-size: 14px; text-align:left;">
					<span id="oucpg_buttongenpassword"><button onclick="oucpggpassword(); return false;" ><?php echo esc_html("Generate Password");?></button></span>
					<span id="oucpg_buttonpleasewait" style="display: none;"><?php echo esc_html("Please Wait...");?></span>
				</div>
				<div id="oucpg_resultpassword"></div>
				
			</form>
	</div>
</div>
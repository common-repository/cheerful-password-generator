<?php
if(!defined('ABSPATH')) exit;
$oucpgcode = $_POST['nonce'];
if (!wp_verify_nonce($oucpgcode, 'gvf56gdds'))
{
    wp_die();
}
$oupl = intval($_POST['oncpg_plenght']);

if(!$oupl)
 {
    wp_die();
}
?>

<div style="color: #000000; padding:5px 0px 0px 0px; font-size: 14px; text-align:left;">
	<b><?php echo esc_html("Resulting Password");?></b>
</div>
<div style="color: #000000; padding:5px 0px 0px 0px; font-size: 14px; text-align:left;">
	<?php
		echo wp_generate_password($oupl, true, true);
		echo '<br />';
		echo wp_generate_password($oupl, true, true);
		echo '<br />';
		echo wp_generate_password($oupl, true, true);
		echo '<br />';
		echo wp_generate_password($oupl, true, true);
		echo '<br />';
		echo wp_generate_password($oupl, true, true);
		echo '<br />';
	?>
</div>
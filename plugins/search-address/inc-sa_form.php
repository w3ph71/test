<?php 
$CONSTANT_PAGE_URI="?page_id=".$post->ID."";
echo $CONSTANT_PAGE_URI;

echo '
		<div>
			<form action="'.$CONSTANT_PAGE_URI.'&action=sc_county" method="post">
			<span class="header-label">
						<strong>Search by Address</strong>
						<span style="margin-left:650px;"><input type="submit" name="submit" value="search"/></span>
						
			</span>
			<div class="container-con-box">
					<div class="input-box">
					<span class="input_label_one_line">Street Number *</span><br />
					<span class="input_field_one_line"><input type="text" name="county" value="" /></span>
			</div>
			<div style="margin-top:-72px;margin-left:250px" class="input-box">
					<span class="input_label_one_line">Street Address *</span><br />
					<span class="input_field_one_line">
						<input type="text" name="address" value="" />
					</span>
			</div>
			<div style="margin-top:-72px;margin-left:250px" class="input-box">
					<span class="input_label_one_line">City *</span><br />
					<span class="input_field_one_line">
						<input type="text" name="city" value="" />
					</span>
			</div>			
			</div>
			</form>
		</div>

';

?>
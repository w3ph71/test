<?php 
$CONSTANT_PAGE_URI="?page_id=".$post->ID."";
echo $CONSTANT_PAGE_URI;
	echo '<div class="">
				<div class="sub-container" style="width:1000px;">
					<form action="'.$CONSTANT_PAGE_URI.'&action=sc_county" method="post">
						<span class="header-label">
						<strong>Search by County</strong>
						<span style="margin-left:650px;"><input type="submit" name="submit" value="search"/></span>
						
						</span>
						<div class="container-con-box">
							<div class="input-box">
								<span class="input_label_one_line">County*</span><br />
								<span class="input_field_one_line"><input type="text" name="county" value="" /></span>
							</div>
							<div style="margin-top:-72px;margin-left:250px" class="input-box">
								<span class="input_label_one_line">Search within</span><br />
								<span class="input_field_one_line">
								<select name="boundary" >
									<option value="" selected>County Boundary</option>
									<option value="1">1 mile radius</option>
									<option value="5">5 mile radius</option>
									<option value="10">10 mile radius</option>
								</select>
								</span>
							</div>																																		
						</div>
					<hr />	
					 
				</div>
				   
				<div class="sub-container" style="width:1000px;">
					<span class="header-label">
					<strong>Property Details</strong>
					
					<span style="margin-left:800px;"><input type="submit" name="submit" value="search"/></span>
					</span>
					<div class="input-box">
						<div style="width:900px;>
						<div class="left" style="margin-top: 10px;">
							<span>Price</span>
							<div>
								<span>
									$<input style="width:70px;" type="text" name="price_from" value=""/>
									to
									$<input style="width:70px;" type="text" name="price_to" value=""/>
								<span>
							</div>
						</div>
						<div class="middle" style="margin-top: -70px; margin-left: 290px;">
							<span>Bedrooms</span>
							<div>
								<span>
									<input style="width:70px;" type="text" name="bed_from" value=""/>
									to
									<input style="width:70px;" type="text" name="bed_to" value=""/>
								<span>
							</div>
						</div>
						<div middle="right" style="margin-top:-70px;margin-left:590px;">
							<span>Bathrooms</span>
							<div>
								<span>
									$<input style="width:70px;" type="text" name="bath_from" value=""/>
									to
									$<input style="width:70px;" type="text" name="bath_to" value=""/>
								<span>
							</div>
						</div>
					</div>
					
			
				</div>
					</div>
					<div style="width:800px;border:none;">
						<span class="">Property type</span>
						<table width="77%">
							<tr>
								<td style="font-size:12px;padding-left:1px;">&nbsp;<input type="checkbox" name="ck_prop_type[]" value="ALL" checked/>&nbsp;ALL</td>
								<td style="font-size:12px;padding-left:1px;"><input type="checkbox" name="ck_prop_type[]" value="SFH" />&nbsp;Townhome&nbsp;</td>
								<td style="font-size:12px;padding-left:1px;"><input type="checkbox" name="ck_prop_type[]" value="CND" />&nbsp;Loft</td>
								<td style="font-size:12px;padding-left:1px;"><input type="checkbox" name="ck_prop_type[]" value="TWN" />Mobile/Manufactured</td>
								<td style="font-size:12px;padding-left:1px;"><input type="checkbox" name="ck_prop_type[]" value="COOP" />Multi-Family Home</td>
							</tr>
							<tr>
								<td style="font-size:12px;padding-left:1px;"><input type="checkbox" name="ck_prop_type[]" value="APT" />&nbsp;Single Family Home</td>
								<td style="font-size:12px;padding-left:1px;"><input type="checkbox" name="ck_prop_type[]" value="LFT" />&nbsp;Coop;</td>
								<td style="font-size:12px;padding-left:1px;"><input type="checkbox" name="ck_prop_type[]" value="TIC" />&nbsp;TIC</td>
								<td style="font-size:12px;padding-left:1px;"><input type="checkbox" name="ck_prop_type[]" value="ACT" />&nbsp;Farm/Ranch</td>
								<td style="font-size:12px;padding-left:1px;"><input type="checkbox" name="ck_prop_type[]" value="MM" />&nbsp;Income/Investment</td>
							</tr>
							<tr>
								<td style="font-size:12px;padding-left:1px;"><input type="checkbox" name="ck_prop_type[]" value="FR" />&nbsp;Condo</td>
								<td style="font-size:12px;padding-left:1px;"><input type="checkbox" name="ck_prop_type[]" value="LL" />&nbsp;Apartment</td>
								<td style="font-size:12px;padding-left:1px;"><input type="checkbox" name="ck_prop_type[]" value="MFM" />&nbsp;Apt/Condo/Twnhm</td>
								<td style="font-size:12px;padding-left:1px;"><input type="checkbox" name="ck_prop_type[]" value="II" />&nbsp;Lot/land</td>
								<td style="font-size:12px;padding-left:1px;"><input type="checkbox" name="ck_prop_type[]" value="HB" />&nbsp;Houseboat</td>
							</tr>
						</table>
					</div>
					<div style="width:900px;">
						<div class="left" style="margin-top: 10px;">
							<span>Structure size(square feet)</span>
							<div>
								<span>
									<input style="width:70px;" type="text" name="struc_from" value=""/>
									to
									<input style="width:70px;" type="text" name="struc_to" value=""/>
								<span>
							</div>
						</div>
						<div class="middle" style="margin-top: -70px; margin-left: 290px;">
							<span>Lot sizes(acres)</span>
							<div>
								<span>
									<input style="width:70px;" type="text" name="lot_from" value=""/>
									to
									<input style="width:70px;" type="text" name="lot_to" value=""/>
								<span>
							</div>
						</div>
						<div middle="right" style="margin-top:-70px;margin-left:590px;">
							<span>Year built</span>
							<div>
								<span>
									<input style="width:70px;" type="text" name="yr_from" value=""/>
									to
									<input style="width:70px;" type="text" name="yr_to" value=""/>
								<span>
							</div>
						</div>
					</div>
					
					<div>
						<span>Keyword Search</span>
						<div>
							<table>
								<tr>
									<td><input style="width:70px;" type="text" name="keyword" value=""/></td>
								</tr>
								<tr>
									<td>Eg: garage, Pool, patio</td>
								</tr>
							</table>
						</div>
					</div>
			
				</div>
				
				<div>
					<span class="header-label">
					<strong>Listing Type</strong>
					<span style="margin-left:800px;"><input type="submit" name="submit" value="search"/></span>
					
					<div>
					<label>For sale listings</label>
					<span style="margin-left:10px;"><input type="checkbox" name="ck_lst_type" values="on_all"/>All</span>
					<span style="margin-left:10px;"><input type="checkbox" name="ck_lst_type" values="on_rs"/>Resale (existing homes)</span>
					<span style="margin-left:10px;"><input type="checkbox" name="ck_lst_type" values="on_nc"/>New Construction </span>
					</div>
					<div>
					<label>Forclosures</label>
					<span style="margin-left:36px;"><input type="checkbox" name="ck_for_type" values="on_all"/>All</span>
					<span style="margin-left:10px;"><input type="checkbox" name="ck_for_type" values="on_nd"/>Notice of default</span>
					<span style="margin-left:62px;"><input type="checkbox" name="ck_for_type" values="on_auc"/>Auction </span>
					<span style="margin-left:75px;"><input type="checkbox" name="ck_for_type" values="on_bo"/>Bank Owned </span>
					</div>
					<div>
					<label>Recently Sold</label>					
					<span style="margin-left: 21px;"><input type="checkbox" name="ck_rcts_type" values="on_nc"/>All homes sold in the past 9 months </span>
					</div>
					
				</div>
				
				<div style="width:1000px;margin-top:10px;">
					<span class="header-label">
					<strong>Results display</strong>
					<span style="margin-left:670px;"><input type="submit" name="submit" value="search"/></span>
					
					
					<div>
					<label>New Listings</label>
					<span style="margin-left:10px;"><input type="checkbox" name="ck_new_lst_type" values="on_all"/>Show only new listings in the past 7 days</span>
					
					</div>
					<br/><hr />
					<div>
					<label>Open Houses</label>
					<span style="margin-left:10px;"><input type="checkbox" name="ck_opn_hs_type" values="on_OH"/>Show all Open Houses</span>
					<span style="margin-left:10px;"><input type="checkbox" name="ck_opn_hs_type" values="on_OHW"/>Show all Open Houses on weekend</span>
					<span style="margin-left:10px;"><input type="checkbox" name="ck_opn_hs_type" values="on_OHT"/>Show only todays Open Houses</span>
					</div>
					<br/><hr />
					<div>
					<label>Sort results by</label>
					<span style="margin-left:10px;font-size:13px;"><input type="radio" name="rd_sr_type" values="bm"/>best_acc</span>
					<span style="margin-left:67px;font-size:13px;"><input type="radio" name="rd_sr_type" values="bedroom_ASC"/>Bed rooms(high to low)</span>
					<span style="margin-left:10px;font-size:13px;"><input type="radio" name="rd_sr_type" values="square_ASC"/>Square feet(high to low) </span>
					<span style="margin-left:10px;font-size:13px;"><input type="radio" name="rd_sr_type" values="priceReduced_ASC"/>Price Reduced Date</span>
					<br/>
					<span style="margin-left: 117px;font-size:13px;"><input type="radio" name="rd_sr_type" values="new_DATE"/>Newest</span>
					<span style="margin-left:78px;font-size:13px;"><input type="radio" name="rd_sr_type" values="bath_ASC"/>Baths (high to low)</span>
					<span style="margin-left:39px;font-size:13px;"><input type="radio" name="rd_sr_type" values="pricesqft_ASC"/>Price/sqft (high to low) </span>
					<span style="margin-left:14px;font-size:13px;"><input type="radio" name="rd_sr_type" values="pricepercent_ASC"/>Price reduced % (high to low)</span>
					<br/>
					
					<span style="margin-left:117px;font-size:13px;"><input type="radio" name="rd_sr_type" values="price_ASC"/>Price (high to low)</span>
					<span style="margin-left:10px;font-size:13px;"><input type="radio" name="rd_sr_type" values="prop_ASC"/>Property type (A-Z)</span>
					<span style="margin-left:31px;font-size:13px;"><input type="radio" name="rd_sr_type" values="on_all"/>Price/sqft (low to high) </span>
					
					<br/>
					<span style="margin-left:117px;font-size:13px;"><input type="radio" name="rd_sr_type" values="price_ASC"/>Price (low to high)</span>
					<span style="margin-left:10px;font-size:13px;"><input type="radio" name="rd_sr_type" values="address_ASC"/>Address (A-Z)</span>
					<span style="margin-left:66px;font-size:13px;"><input type="radio" name="rd_sr_type" values="pricecurr_ASC"/>Price reduced $ (high to low)</span>
					
					<br/>
					
					</div>
					<div>
						<input type="submit" name="submit" value="SEARCH" />
					</div>
					</form>
					
				</div>
				
				<div>
					
				</div>
				</div>
		  </div>';
?>
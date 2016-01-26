<!-- begin #content -->
<div id="content" class="content">

	<!-- begin breadcrumb -->
	<ol class="breadcrumb pull-right">
		<li>
			<a href="<?php echo base_url();?>index.php?propertyowner/dashboard">
				<?php echo translate('dashboard');?>
			</a>
		</li>
		<li>
			<a href="<?php echo base_url();?>index.php?propertyowner/new_complaint">
				<?php echo translate('new_complaint');?>
			</a>
		</li>
		
	</ol>
	<!-- end breadcrumb -->

	<!-- begin page-header -->
	<h1 class="page-header"><?php echo $page_title;?></h1>
	<!-- end page-header -->
<?php 
    echo form_open(base_url() . 'index.php?propertyowner/new_complaint/create' , array(
        'class' => 'form-horizontal' , 'data-parsley-validate' => 'true' , 'enctype' => 'multipart/form-data'
    ));
?>

<div class="row">
		<div class="col-md-12">
			<!-- begin panel -->
	        <div class="panel panel-inverse">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    </div>
                    <h4 class="panel-title"><?php echo translate('basic_informations');?></h4>
                </div>
                <div class="panel-body">
                    <div class="col-md-6" style="border-right: 1px solid #ccc;">
                    	<div class="note note-success">
							<h4>Instructions</h4>
							<ul>
								<li>Check and recheck before submitting your Property Complaints.</li>
								<li>Please note that you will not be able to edit your complaints after submitting.</li>
							</ul>
			</div>
                    </div>
 <div class="col-md-5"></div>
	        <div class="col-md-7">
		        <!-- begin panel -->
	            <div class="panel panel-default" data-sortable-id="ui-widget-10">
	                <div class="panel-heading">
	                    <div class="panel-heading-btn">
	                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
	                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
	                    </div>
	                    <h4 class="panel-title">
	                    	<?php echo translate('Make Complaint');?>
	                    </h4>
	                </div>
					</div>
					
	                <div class="panel-body">
	                    <div class="table-responsive">
                        <table class="table table-bordered">
                                <tbody>
                                <tr>
                                                <td><?php echo translate('date');?></td>
                                                <td>
                                                         <input type="text" class="form-control" id="datepicker-autoClose" name="complaint_date"
                                                         placeholder="<?php echo translate('select_date');?>" />
                                                </td>
                                        </tr>
                                        <tr>
                                                <td><?php echo translate('title');?></td>
                                                <td>
                                           <select class="form-control" name="title">
                                                <option value="" selected><?php echo translate('title');?></option>
                                                <option value="1"><?php echo translate('Mr');?></option>
                                                <option value="2"><?php echo translate('Mrs');?></option>
                                                <option value="3"><?php echo translate('Miss');?></option>
                                            </select>
                                                </td>
                                        </tr>

                                        <tr>
                                                <td><?php echo translate('property_owner_last_name');?></td>
                                                <td>
                                                        <input type="text" class="form-control text-right" id="owner_name" value="" name="last_name">
                                                </td>
                                        </tr>
                                        <tr>
                                                <td><?php echo translate('property_owner_first_name');?></td>
                                                <td>
                                                        <input type="text" class="form-control text-right" id="owner_name" value="" name="first_name">
                                                </td>
                                        </tr>
                                        <tr>
                                                <td><?php echo translate('property_owner_other_names');?></td>
                                                <td>
                                                        <input type="text" class="form-control text-right" id="owner_name" value="" name="other_name">
                                                </td>
                                        </tr>
                                        <tr>
                                        <tr>
                                                <td><?php echo translate('complainant_name');?></td>
                                                <td>
                                                        <input type="text" class="form-control text-right" id="contact_name" value="" name="contact_name">
                                                </td>
                                        </tr>
                                        <tr>
                                        <tr>
                                                <td><?php echo translate('landlord_residential_address');?></td>
                                                <td>
                                                        <input type="text" class="form-control text-right" id="owner_address" value="" name="owner_address">
                                                </td>
                                        </tr>
                                        <tr>
                                        <tr>
                                                <td><?php echo translate('property_address_on_demand_notice');?></td>
                                                <td>
                                                        <input type="text" class="form-control text-right" id="property_address" value="" name="property_address">
                                                </td>
                                        </tr>
                                        <tr>
                                        <tr>
                                                <td><?php echo translate('correct_address');?></td>
                                                <td>
                                                        <input type="text" class="form-control text-right" id="correct_address" value="" name="correct_address">
                                                </td>
                                        </tr>
                                        <tr>
                                        <tr>
                                                <td><?php echo translate('local_government_area');?></td>
                                                <td>
                                                        <select class="form-control" name="local_gov">
                                                <option value="" selected><?php echo translate('please_select');?></option>
                                                <option value="1"><?php echo translate('Apapa');?></option>
                                                <option value="2"><?php echo translate('Amuwo-Odofin');?></option>
                                                <option value="3"><?php echo translate('Epe');?></option>
                                            </select>
                                                </td>
                                        </tr>

                                        <tr>
                                                <td><?php echo translate('phone_number');?></td>
                                                <td>
                                                        <input type="text" class="form-control text-right" id="phone_number" value="" name="phone_number">
                                                </td>
                                        </tr>
                                        <tr>
                                                <td><?php echo translate('email_address');?></td>
                                                <td>
                                                        <input type="email" class="form-control text-right" id="email" value="" name="email">
                                                </td>
                                        </tr>
                                        <tr>
                                                <td><?php echo translate('notice_number');?></td>
                                                <td>
                                                        <input type="text" class="form-control text-right" id="notice_number" value="" name="notice_number">
                                                </td>
                                        </tr>
                                        <tr>
                                                <td><?php echo translate('questionnaire_completed?');?></td>
                                                <td>
                                                        <select class="form-control" name="questionnaire">
                                                <option value="" selected><?php echo translate('please_select');?></option>
                                                <option value="1"><?php echo translate('Yes');?></option>
                                                <option value="2"><?php echo translate('No');?></option>
                                            </select>
                                                </td>
                                        </tr>
                                        <tr>
                                        <td><?php echo translate('nature_of_complaint?');?></td>
                                                <td>
                                                        <select class="form-control" name="complaint_type">
                                                <option value="" selected><?php echo translate('please_select');?></option>
                                                <option value="1"><?php echo translate('Valuation Issues');?></option>
                                                <option value="2"><?php echo translate('Others');?></option>
                                            </select>
                                                </td>
                                        </tr>
                                         <tr>
                                                <td><?php echo translate('image');?></td>
                                                <td>
                                                        <input class="form-control" type="file" name="doc1" placeholder="<?php echo translate('image');?>" />
                                                </td>
                                        </tr>
                                        <tr>
                                        <td><?php echo translate('language');?></td>
                                                <td>
                                                        <select class="form-control" name="language">
                                                <option value="" selected><?php echo translate('please_select');?></option>
                                                <option value="1"><?php echo translate('Yoruba');?></option>
                                                <option value="2"><?php echo translate('Hausa');?></option>
                                            </select>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td><?php echo translate('additional_information');?></td>
                                                <td>
                                                        <input type="text" class="form-control text-right" value="" id="additional_info" name="additional_info">
                                                </td>
                                        </tr>
                                        <tr>
                                                <td><?php echo translate('bill_delivery_mode');?></td>
                                                <td>
                                                        <select class="form-control" name="bill_send_type">
                                                <option value="" selected><?php echo translate('please_select');?></option>
                                                <option value="1"><?php echo translate('self_collection');?></option>
                                                <option value="2"><?php echo translate('courier');?></option>
                                                <option value="3"><?php echo translate('email');?></option>
                                            </select>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td><?php echo translate('signature');?></td>
                                                <td>
                                                        <input type="text" class="form-control text-right" value="" id="signature"
                                                                name="signature">
                                                </td>
                                        </tr>
                                </tbody>
                        </table>
							<div class="form-group col-md-10">
								<button type="submit" class="btn btn-success"><?php echo translate('create_new_complaint');?></button>
							</div>
						</div>
	                </div>
	            </div>
	            <!-- end panel -->
	        </div>
        </div>

	</div>
<?php echo form_close();?>
</div>					
					

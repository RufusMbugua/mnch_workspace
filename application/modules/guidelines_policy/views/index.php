<style>
.datepicker{z-index:1151 !important;}
</style>
<div class="main" style="left:0%">
<div class="row">
    <div class="activities">

    <div class="outer">
    <h3>Update Activities</h3>

        <div class="inner">

            <?php
echo $activity_table; ?>
        </div>
    </div>
    <div class="outer">


        <div class="inner-mini">

        <div class="stat">
<div class="icon"><i class="fa fa-book"></i></div>
<div><span class="text">Diarrhoea Guidelines Allocated</span>
<span class="digit"><?php echo $Diarrhoea_guidelines_total; ?></span>
</div>
</div>
            <div class="stat">
<div class="icon"><i class="fa fa-book"></i></div>
<div><span class="text">IMCI Guidelines Allocated</span>
<span class="digit"><?php echo $IMCI_guidelines_total; ?></span>
</div>
</div>



<div class="stat">
<div class="icon"><i class="fa fa-book"></i></div>
<div><span class="text">ORT Guidelines Allocated</span>
<span class="digit"><?php echo $ORT_guidelines_total; ?></span>
</div>
</div>
        </div>
    </div>
    </div>
    <div class="guide">
    <div class="outer">
    <h3>Guide</h3>
        <div class="inner">

            <ul class="guide">
                <li>
                    Click on <b>Manual Entry</b> to update data per form.
                </li>
                <li>
                    Click in <b>Upload</b> to upload an Excel Sheet in the following <u><i>Format</i></u>:
                </li>



            </ul>

        </div>
        </div>
        <div class="outer">
        <h3>Template</h3>
        <div class="inner-mini">
            <a>Download Template</a>

        </div>
        </div>
    </div>

</div>
<div class="row">
<div class="standard-graph">
    <div class="outer">
    <h3>IMCI Distribution by County <span id="limit"></span><i class="fa fa-expand full-screen" data-toggle="tooltip" data-placement="bottom" title="Click Here for More"></i><i style="display:none" class="fa fa-compress full-screen" data-placement="bottom" title="Click Here to Minimize"></i></h3>
        <div class="inner max" id="distribution_county">
        <div class="la-anim-1-mini"></div>
        </div>
        <div class="inner mini full-screen" id="distribution_county_fullscreen" style="display:none;width:40%">
        <script>
var map= new FusionMaps ("<?php echo base_url()?>assets/fusionmaps/Maps/FCMap_KenyaCounty.swf","KenyaMap","100%","100%","0","0");
map.setJSONData(<?php
echo $IMCI_policy_map_county; ?>
    );
    map.render("distribution_county_fullscreen");
                    </script>
        </div>
        <div class="inner mini full-screen" id="" style="display:none;width:59%">

        <div class="stat">
        <div class="icon"><i class="fa fa-map-marker"></i></div>
            <div>
                <span id="county_name_title" class="text">County Name :  </span>
                <span id="county_name" class="digit">N/A</span>
            </div>
        </div>

        <div class="stat">
        <div class="icon"><i class="fa fa-hospital-o"></i></div>
            <div>
                <span id="facility_number_supplied" class="text">Total Facilities Supplied : </span>
                <span id="facility_total_supplied" class="digit">0</span>
            </div>
        </div>

        <div class="stat">
        <div class="icon"><i class="fa fa-hospital-o"></i></div>
            <div>
                <span id="facility_number_total" class="text">Total Facilities Existing : </span>
                <span id="facility_total_total" class="digit">0</span>
            </div>
        </div>
        </div>
        </div>

    </div>

    <div class="standard-graph">
    <div class="outer">
    <h3>IMCI Distribution by Source<i class="fa fa-expand full-screen" data-toggle="tooltip" data-placement="bottom" title="Click Here for More"></i><i style="display:none" class="fa fa-compress full-screen" data-placement="bottom" title="Click Here to Minimize"></i></h3>

        <div class="inner max" id="distribution_source">
        <div class="la-anim-1-mini"></div>
        </div>
        <div class="inner mini full-screen" id="distribution_source_fullscreen" style="display:none;width:40%">
        <script>
var map= new FusionMaps ("<?php echo base_url()?>assets/fusionmaps/Maps/FCMap_KenyaCounty.swf","KenyaMap2","100%","100%","0","0");
map.setJSONData(<?php
echo $IMCI_policy_map_source; ?>
    );
    map.render("distribution_source_fullscreen");
                    </script>
        </div>
        <div class="inner mini full-screen" id="" style="display:none;width:59%">

        <div class="stat">
        <div class="icon"><i class="fa fa-map-marker"></i></div>
            <div>
                <span id="county_name_title" class="text">County Name :  </span>
                <span id="county_name_2" class="digit">N/A</span>
            </div>
        </div>

        <div class="stat">
        <div class="icon"><i class="fa fa-hospital-o"></i></div>
            <div>
                <span id="facility_number_supplied" class="text">Total Guidelines Supplied : </span>
                <span id="facility_total_supplied_total" class="digit">0</span>
            </div>
        </div>

          <div class="stat">
        <div class="icon"><i class="fa fa-briefcase"></i></div>
            <div>
                <span id="facility_number_supplied" class="text">MOH : </span>
                <span id="facility_total_supplied_moh" class="digit">0</span>
            </div>
        </div>

          <div class="stat">
        <div class="icon"><i class="fa f fa-briefcase"></i></div>
            <div>
                <span id="facility_number_supplied" class="text">FBO : </span>
                <span id="facility_total_supplied_fbo" class="digit">0</span>
            </div>
        </div>

          <div class="stat">
        <div class="icon"><i class="fa  fa-briefcase"></i></div>
            <div>
                <span id="facility_number_supplied" class="text">PRIVATE : </span>
                <span id="facility_total_supplied_private" class="digit">0</span>
            </div>
        </div>


        </div>
        </div>

        </div>

    </div>

</div>
</div>
<div class="search" style="left:-100%">

<?php
echo Modules::run('search/search/index'); ?>
</div>
<div class="side-nav">

    <div class="outer">
        <div class="inner">
        <ul>
            <li><a href="#"><i class="fa fa-search" data-toggle="tooltip" data-placement="bottom" title="Click to Search"></i></a></li>
            <li class="search-close" style="display:none"><a href="#" data-toggle="tooltip" data-placement="bottom" title="Click to Close Search">X</a></li>
        </ul>
        </div>

    </div>

    </div>

<div class="modal fade" id="guidelines_policy_upload_activity" >
    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title">Upload Activity</h4>
            </div>
            <div class="modal-body" id="upload_form_here">
                <script>
                $('#upload_form_here').load('guidelines_policy/showUpload');
                </script>

            </div>
            <div class="modal-footer" style="height:45px">
                <button id="guidelines_policy_uploadActivityBtn" type="submit" class="btn btn-primary">
                    <i class="fa fa-plus"></i>Upload
                </button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">
                    <i class="fa fa-times"></i> Close
                </button>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="modal fade" id="guidelines_policy_files_modal" >
    <div class="modal-dialog" style="width:98%">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title">View Source Data (<div style="display:inline-block;font-weight:bold" id="activity_name"></div>)
                    <a id="export_csv" class="btn" style="margin-top:-5px" data-link="<?php
echo base_url(); ?>guidelines_policy/export_Excel/"><i class="fi-page-export-csv"></i>Export to Excel</a>
                    <a id="export_pdf" class="btn" style="margin-top:-5px" data-link="<?php
echo base_url(); ?>guidelines_policy/export_PDF/"><i class="fi-page-export-pdf"></i>Export to PDF</a>
                </h4>
            </div>
            <div class="modal-body" style=" height:60%;overflow-y:scroll" id="source_data">


            </div>
            <div class="modal-footer" style="height:45px">
                <button type="button" class="btn btn-danger" data-dismiss="modal">
                    <i class="fa fa-times"></i> Close
                </button>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- Add Event modal -->
<div class="modal fade" id="guidelines_policy_manual_update" >
    <div class="modal-dialog" style="width:95%" >

        <div class="modal-content">
            <?php
$formAttr = array('id' => 'manual_entry_form');
echo form_open('guidelines_policy/manual_entry', $formAttr); ?>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title">Update Activity</h4>
            </div>
            <div class="modal-body" style=" height:60%;overflow-y:scroll">

                <table id="activity_table" class="table-bordered table-striped" >
                    <thead>
                        <tr style="font-size:1em">
                            <th>NAMES OF PARTICIPANT</th><th>FACILITY NAME</th><th>MFL CODE</th><th>DEPARTMENT</th><th>CADRE</th><th>JOB TITLE</th><th>ID NUMBER</th>
                            <th>MOBILE NUMBER</th><th>EMAIL ADDRESS</th><th>DATES</th><th>TRAINING LOCATION</th><th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr id="0">
                            <td width="200">
                                <input  type="text" value="" name="names_of_participant[]" required aria-required="true" pattern="[A-Za-z]+\s[A-Za-z]+" class="form-control participant" placeholder="Person Responsible..." title="Please Enter Participant Name" >
                            </td>
                            <td width="200">
                                <select type="text" required aria-required="true" title="" class="form-control facilityoption" placeholder="e.g Nairobi..." >
                                    <?php
echo $facility_list; ?>
                                </select>
                            </td>
                            <td>
                                <input type="text" value="" readonly="readonly" name="mfl_code[]" pattern="[0-9]{1,5}"  required aria-required="true" class="form-control mfl_code" placeholder="e.g 12345" >
                            </td>
                            <td>
                                <select type="text" required aria-required="true" title="" name="department[]" class="form-control department">
                                    <?php
echo $department_list; ?>
                                </select>
                            </td>
                            <td>
                                <select type="text" required aria-required="true" title="" name="cadre[]" class="form-control cadre">
                                    <?php
echo $cadre_list; ?>
                                </select>
                            </td>
                            <td>
                                <select type="text" required aria-required="true" title="" name="cadre[]" class="form-control cadre">
                                    <?php
echo $cadre_list; ?>
                                </select>
                            </td>
                            <td>
                                <input type="text" value="" name="id_number[]" pattern="[0-9]{1,10}" title="Numbers Only" required aria-required="true" class="form-control id_number" placeholder="e.g 23456789..." >
                            </td>
                            <td>
                                <input type="text" value="" name="mobile_number[]" pattern="[0-9]{10}" title="Numbers Only,10 digits" required aria-required="true" class="form-control mobile_number" placeholder="e.g 0712345678" >
                            </td>
                            <td>
                                <input type="email" value="" name="email_address[]" required aria-required="true" class="form-control email_address" placeholder="e.g user@example.com" >
                            </td>
                            <td>
                                <input type="text" value="" name="dates[]" required aria-required="true" class="form-control datepicker"  >
                            </td>
                            <td>
                                <input type="text" value="" name="training_location[]" required aria-required="true" class="form-control traininglocation" placeholder="" >
                            </td>
                            <td>
                                <a class="btn-xs btn-danger remove">Remove</a>
                            </td>
                            <input type="hidden" class="facilityname" name="facility_name[]" value="" >
                        </tr>
                    </tbody>
                </table>
            <input type="hidden" id="activity_id_man"name= "activity_id_man">
            </div>
            <div class="modal-footer" style="height:45px">
                <button class="add btn btn-primary" >Add Row</button>
                <button type="submit" id="manual-entry" class="btn btn-primary">
                    <i class="fa fa-plus"></i>Update Activity
                </button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">
                    <i class="fa fa-times"></i> Close
                </button>
            </div>
            <?php
echo form_close(); ?>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script>
        var base_url = '<?php echo base_url(); ?>';
        $(document).ready(pageHandler(base_url,'guidelines_policy'));

        $(document).ready(function(){
 		var function_url_array = ['guidelines_policy/distribution/region/county/10','guidelines_policy/distribution/source/source/all'];
        var container_array = ['distribution_county','distribution_source'];
        loadGraphSection(base_url, function_url_array, container_array);

        });

        function runPolicyMap(data){
    newData=data.split(',')
     $('#county_name').text(newData[0]);
    $('#facility_total_total').text(newData[1]);
    $('#facility_total_supplied').text(newData[2]);
}

    function runPolicyMapSource(data){
        total_allocation=0;
    newData=$.parseJSON(data);
    $('#facility_total_supplied_moh').text(0);
    	$('#facility_total_supplied_fbo').text(0);
    		$('#facility_total_supplied_private').text(0);

   $.each(newData, function( k, v ){
    	$('#facility_total_supplied_'+v['policy_source'].toLowerCase()).text(v['allocations']);
    	$('#county_name_2').text(v['county']);
    	total_allocation+=parseInt(v['allocations']);
 	});

$('#facility_total_supplied_total').text(total_allocation);

 }

</script>

<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add course</title>


    <?php
    include 'side_bar.php';
    include 'header.php';
    include 'connect.php';
    include 'functions.php';
    $update = $_REQUEST['CourseID'];

    $query = "SELECT * FROM `tblcourse` where CourseID='$update'";

    $result = mysql_query($query)or die(mysql_error());
    $row = mysql_fetch_array($result)or die(mysql_error());



    $error = false;
    
    ?>

    <?php
if (isset($_POST['update'])) {

    $demo = $_REQUEST['rupdate'];

    $Title = mysql_real_escape_string($_REQUEST['Title']);
    $OfferedBy =  mysql_real_escape_string($_REQUEST['OfferedBy']);
    $Summary =  mysql_real_escape_string($_REQUEST['Summary']);
    // $StartDate = $_REQUEST['StartDate'];
    
    $cdate = date_create($_POST['Course_start_date']);
    $Course_start_date = date_format($cdate, 'Y-m-d');
    
    $sdate = date_create($_POST['StartDate']);
    $StartDate = date_format($sdate, 'Y-m-d');

    //$EndDate = $_REQUEST['EndDate'];

    $edate = date_create($_POST['EndDate']);
    $EndDate = date_format($edate, 'Y-m-d');

    $Location =  mysql_real_escape_string($_REQUEST['Location']);
    $Time =  mysql_real_escape_string($_REQUEST['Time']);
    $IntendedAudience =  mysql_real_escape_string($_REQUEST['IntendedAudience']);
    $MeetingType =  mysql_real_escape_string($_REQUEST['MeetingType']);
    $CourseFees =  mysql_real_escape_string($_REQUEST['CourseFees']);
    $TotalCapacity =  mysql_real_escape_string($_REQUEST['TotalCapacity']);
    $NoofUserRegistered =  mysql_real_escape_string($_REQUEST['NoofUserRegistered']);
    $Instructor =  mysql_real_escape_string($_REQUEST['Instructor']);
    $Instigator =  mysql_real_escape_string($_REQUEST['Instigator']);




    $update_query = "update `tblcourse` set `Title`='$Title',`OfferedBy`='$OfferedBy', `Summary`='$Summary',`CourseStartDate`='$Course_start_date',`StartDate`='$StartDate',`EndDate`='$EndDate',`Location`='$Location',`Time`='$Time',`IntendedAudience`='$IntendedAudience',
`MeetingType`='$MeetingType',`CourseFees`='$CourseFees',`TotalCapacity` ='$TotalCapacity',`Instructor`='$Instructor',`Instigator`='$Instigator' where `CourseID`='$demo'";



    $z = mysql_query($update_query) or die(mysql_error());
    if ($z) {
        ?>

        <script>location.replace('view_Course.php');</script>

        <?php
    } else {
        echo 'Error';
    }
}
?>
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">      
                        <h3 class="panel-title"><b>Edit Course</b> </h3>  

                    </div>
                </div>
                <div class="box">
                    <?php if ($error == "success") { ?>
                        <div class='alert alert-success'>
                            A new course was inserted successfully!
                        </div>
                    <?php } ?>	
                    <script src="js/index.js"></script>

                    <form name="form_register" id='form_register' method="post" class="my_frm"  enctype="multipart/form-data" >
                        <input type="hidden" name="rupdate" value="<?php echo $row['CourseID']; ?>">     
                        <table class="table">

                            <tr>
                                <th width="30%">*Course Title :</th>

                                <td><input type="text" name="Title" value="<?php echo $row['Title']; ?>" id="Title" class="form-control" placeholder="Type Course Title" maxlength="150"/></td>
                            </tr>
                            <tr>
                                <th width="30%">* Offered By :</th>

                                <td><input type="text" name="OfferedBy" value="<?php echo $row['OfferedBy']; ?>" id="OfferedBy" class="form-control" placeholder="Type Offered By" maxlength="256"/></td>
                            </tr>
                            <tr>
                                <th>Description :</th>

                                <td>
                                    <textarea  name="Summary" id="area1" style="width:90%;height:200px;"  class="form-control" placeholder="Description" /><?php echo $row['Summary']; ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <th>*  Course date : </th>
                                         <?php
                                          $cdate = date_create($row['CourseStartDate']);
                                            $Course_start_date = date_format($cdate, 'm/d/Y');

                                         ?>
                                <td>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                        <input type="text" name="Course_start_date" value="<?php echo $Course_start_date; ?>" id="CoursDate"  class="form-control" placeholder="Select Start Date "/>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>*  Start Date : </th>
                                         <?php
                                          $sdate = date_create($row['StartDate']);
                                            $StartDate = date_format($sdate, 'm/d/Y');



                                            $edate = date_create($row['EndDate']);
                                            $EndDate = date_format($edate, 'm/d/Y');

                                         
                                         ?>
                                <td>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                        <input type="text" name="StartDate" value="<?php echo $StartDate; ?>" id="StartDate"  class="form-control" placeholder="Select Start Date "/>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>* End Date : </th>
                                <td>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                        <input type="text" name="EndDate" id="EndDate" value="<?php echo  $EndDate; ?>"  class="form-control" placeholder="Select End Date "/>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th> * Location :</th>
                                <td>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
                                        <input type="text" maxlength="150" value="<?php echo $row['Location']; ?>" name="Location" id="Location" class="form-control" placeholder="Type Location"/>
                                    </div>

                                </td>
                            </tr>


                            <tr>
                                <th>* Time :</th>
                                <td>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-clock-o"></i></div>
                                        <input type="text" name="Time" value="<?php echo $row['Time']; ?>" id="Time"  class="form-control" placeholder="Type Time"  maxlength="50" />
                                    </div>

                                </td>
                            </tr>

                            <tr>
                                <th>* Intended Audience:</th>

                                <td><input type="text" name="IntendedAudience" value="<?php echo $row['IntendedAudience']; ?>" id="IntendedAudience"  class="form-control" placeholder="Type Intended Audience"/></td>
                            </tr>


                            <tr>
                                <th>* Meeting Type:</th>

                                <td><input type="text" name="MeetingType" value="<?php echo $row['MeetingType']; ?>" id="MeetingType"  class="form-control" placeholder="Meeting Type" maxlength="30"/></td>
                            </tr>
                            <tr>
                                <th>* Course Fees :</th>

                           <!-- <td><input type="text" name="CourseFees" id="CourseFees" class="form-control" placeholder="Course Fees"/></td> -->

                                <td><div class="input-group"><div class="input-group-addon"><i class="fa fa-usd"></i></div><input type="text" name="CourseFees" id="CourseFees" value="<?php echo $row['CourseFees']; ?>" class="form-control" placeholder="Type Course Fees" maxlength="4" /></div>

                                </td>

                            </tr>

                            <tr>
                                <th>* Total Capacity:</th>

                                <td><input type="text" name="TotalCapacity" value="<?php echo $row['TotalCapacity']; ?>" id="TotalCapacity" class="form-control" placeholder="Type Total Capacity" maxlength="3" /></td>
                            </tr>
                            <tr>
                                <th>* No of User Registered :</th>

                                <td><input type="text" readonly name="NoofUserRegistered" value="5" id="NoofUserRegistered"  class="form-control"  maxlength="3"/></td>
                            </tr>


                            <tr>
                                <th>* Instructor :</th>

                                <td><input type="text" name="Instructor" id="Instructor" value="<?php echo $row['Instructor']; ?>"  class="form-control" placeholder="Type Instructor"/></td>
                            </tr>
                            <tr>
                                <th>* Instigator :</th>

                                <td><input type="text" name="Instigator" id="Instigator" value="<?php echo $row['Instigator']; ?>"  class="form-control" placeholder="Type Instigator"/></td>
                            </tr>

                            <tr>
                                <th>&nbsp;</th>

                                <td><input type="submit" name="update"  value="Update" class="btn btn-success"/></td>

                            </tr>
                        </table>
                    </form>



                </div>

            </div>

        </div>


    </div>
    <!-- END PAGE CONTENT WRAPPER -->                                



    <!-- END PAGE CONTENT -->
</div>
<?php
include 'footer.php';
?>
<!-- START PLUGINS -->
<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>                
<!-- END PLUGINS -->

<!-- THIS PAGE PLUGINS -->
<script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
<script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
<script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>

<script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>  



<script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/plugins/tableexport/tableExport.js"></script>
<script type="text/javascript" src="js/plugins/tableexport/jquery.base64.js"></script>
<script type="text/javascript" src="js/plugins/tableexport/html2canvas.js"></script>
<script type="text/javascript" src="js/plugins/tableexport/jspdf/libs/sprintf.js"></script>
<script type="text/javascript" src="js/plugins/tableexport/jspdf/jspdf.js"></script>
<script type="text/javascript" src="js/plugins/tableexport/jspdf/libs/base64.js"></script>    


<!-- END PAGE PLUGINS -->

<!-- START TEMPLATE -->



<script type="text/javascript" src="js/plugins.js"></script>        
<script type="text/javascript" src="js/actions.js"></script>    


<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script>



<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
<script type="text/javascript" src="nicEdit-latest.js"></script>
<script type="text/javascript">
//<![CDATA[
    bkLib.onDomLoaded(function () {

        new nicEditor({fullPanel: true, maxHeight: 200}).panelInstance('area1');
    });
    //]]>
</script>

<!-- END PRELOADS -->                      


<!-- START THIS PAGE PLUGINS-->        

<!-- END THIS PAGE PLUGINS-->  

<!-- START TEMPLATE -->



</body>
<script type="text/javascript">
//<![CDATA[
    $(document).ready(function ()

    {


        $("#form_register").validate(
                {

                    rules: {

                        'Title': {

                            required: true,
                            pattern: /^[a-zA-Z0-9\s\-\'.:]+$/,
                            minlength: 3

                        },

                        'OfferedBy': {

                            required: true,
                            pattern: /^[a-zA-Z0-9\s\-\'.:]+$/,
                            minlength: 3,

                        },
                        'EndDate': {

                            required: true,
                            

                        },
                        'StartDate': {

                            required: true,

                        },
                        'EndDate': {

                            required: true,

                        },
                        'Location': {

                            required: true,

                            minlength: 3

                        },
                        'Time': {
                            required: true,
                            pattern: /^[a-zA-Z0-9\s\-\,\'.:]+$/,
                        },

                        'IntendedAudience': {

                            required: true,
                            pattern: /^[a-zA-Z0-9\s\-\,\'.:]+$/,
                            minlength: 3,

                        },
                        'MeetingType': {

                            required: true,
                            pattern: /^[a-zA-Z0-9\s\-\,\'.:]+$/,

                        },
                        'CourseFees': {

                            required: true,
                            number: true,

                        },
                        'TotalCapacity': {

                            required: true,
                            number: true,

                        },

                        'NoofUserRegistered': {

                            required: true,
                            number: true,

                        },

                        'Instructor': {

                            required: true,
                            pattern: /^[a-zA-Z0-9\s\-\,\'.:]+$/,
                            

                        },

                        'Instigator': {

                            required: true,
                            pattern: /^[a-zA-Z0-9\s\-\,\'.:]+$/,
                            

                        }

                    },

                    messages: {

                        'Title': {

                            required: "The title is mandatory!",
                            pattern: "Enter only characters, number and \"space , \" -",
                            minlength: "Choose a title of at least 3 letters!",

                        },

                        'OfferedBy': {

                            required: "The offered by is mandatory!",
                            pattern: "Enter only characters, number and \"space , \" -",
                            minlength: "Choose a Offered of at least 3 letters!",

                        },
                        'CoursDate': {

                            required: "The course start date date is mandatory!",

                        },
                        'StartDate': {

                            required: "The start date is mandatory!",

                        },

                        'EndDate': {

                            required: "The end date is mandatory!",

                        },

                        'Location': {

                            required: "The location is mandatory!",

                            minlength: "Choose a Location of at least 3 letters!",

                        },

                        'Time': {

                            required: "The time is mandatory!",
                            pattern: "Please enter correct value",

                        },
                        'IntendedAudience': {

                            required: "The intended audience is mandatory!",
                            pattern: "Please enter correct value",
                            minlength: "Enter a IntendedAudience of at least 3 letters!",

                        },

                        'MeetingType': {

                            required: "The meeting type is mandatory!",
                            pattern: "Please enter correct value",
                        },

                        'CourseFees': {

                            required: "The course fees is mandatory!",

                        },
                        'TotalCapacity': {

                            required: "The total capacity is mandatory!",

                        },

                        'NoofUserRegistered': {

                            required: "The no of user registered is mandatory!",

                        },

                        'Instructor': {

                            required: "The instructor is mandatory!",
                            pattern: "Please enter correct value",
                        },

                        'Instigator': {

                            required: "The instigator is mandatory!",
                            pattern: "Please enter correct value",

                        }
                    }

                });

    });

//]]>
</script>
<script>
    $(function () {
        $("#StartDate").datepicker({dateFormat: 'mm/dd/yyyy'});
        $("#EndDate").datepicker({dateFormat: 'mm/dd/yyyy'});
        $("#CoursDate").datepicker({dateFormat: 'mm/dd/yyyy'});
    });
</script>
</html>

<?php ob_end_flush(); ?>

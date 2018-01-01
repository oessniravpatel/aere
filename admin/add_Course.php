<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Add course</title>


<?php
include 'side_bar.php';
include 'header.php';
include 'connect.php';
include 'functions.php';




$error = false;

if (isset($_POST['save'])) {

    // clean user inputs to prevent sql injectionfs
    $Title = trim($_POST['Title']);
    $Title = strip_tags($Title);
    $Title = htmlspecialchars($Title);

    $OfferedBy = trim($_POST['OfferedBy']);
    $OfferedBy = strip_tags($OfferedBy);
    $OfferedBy = htmlspecialchars($OfferedBy);

    $Summary = trim($_POST['Summary']);
    $Summary = strip_tags($Summary);
    $Summary = htmlspecialchars($Summary);

    $cdate = date_create($_POST['Course_start_date']);
    $Course_start_date = date_format($cdate, 'Y-m-d');
    
    $sdate = date_create($_POST['StartDate']);
    $StartDate = date_format($sdate, 'Y-m-d');



    $edate = date_create($_POST['EndDate']);
    $EndDate = date_format($edate, 'Y-m-d');


    $Location = trim($_POST['Location']);
    $Location = strip_tags($Location);
    $Location = htmlspecialchars($Location);



    $Time = trim($_POST['Time']);
    $Time = strip_tags($Time);
    $Time = htmlspecialchars($Time);

    $IntendedAudience = trim($_POST['IntendedAudience']);
    $IntendedAudience = strip_tags($IntendedAudience);
    $IntendedAudience = htmlspecialchars($IntendedAudience);

    $MeetingType = trim($_POST['MeetingType']);
    $MeetingType = strip_tags($MeetingType);
    $MeetingType = htmlspecialchars($MeetingType);

    $CourseFees = trim($_POST['CourseFees']);
    $CourseFees = strip_tags($CourseFees);
    $CourseFees = htmlspecialchars($CourseFees);

    $TotalCapacity = trim($_POST['TotalCapacity']);
    $TotalCapacity = strip_tags($TotalCapacity);
    $TotalCapacity = htmlspecialchars($TotalCapacity);

  
    $NoofUserRegistered = 0;

    $Instructor = trim($_POST['Instructor']);
    $Instructor = strip_tags($Instructor);
    $Instructor = htmlspecialchars($Instructor);

    $Instigator = trim($_POST['Instigator']);
    $Instigator = strip_tags($Instigator);
    $Instigator = htmlspecialchars($Instigator);

    $CreatedBy = trim($_POST['CreatedBy']);
    $CreatedBy = strip_tags($CreatedBy);
    $CreatedBy = htmlspecialchars($CreatedBy);

    $CreatedOn = trim($_POST['CreatedOn']);
    $CreatedOn = strip_tags($CreatedOn);
    $CreatedOn = htmlspecialchars($CreatedOn);

    $ModifiedBy = trim($_POST['ModifiedBy']);
    $ModifiedBy = strip_tags($ModifiedBy);
    $ModifiedBy = htmlspecialchars($ModifiedBy);

    $ModifiedOn = trim($_POST['ModifiedOn']);
    $ModifiedOn = strip_tags($ModifiedOn);
    $ModifiedOn = htmlspecialchars($ModifiedOn);

    if (!$error) {

        //$query = "INSERT INTO tbl_emp(user_name ,first_name ,last_name,company,email,group_id) VALUES('$user_name','$first_name','$last_name','$company','$email','$group_id')";
        $query = "INSERT INTO `tblcourse`(`Title`,`OfferedBy`,`Summary`,`CourseStartDate`,`StartDate`,`EndDate`,`Location`,`Time`,`IntendedAudience`,`MeetingType`,`CourseFees`,`TotalCapacity`,`NoofUserRegistered`,`Instructor`,`Instigator`,`CreatedBy`,`CreatedOn`,`ModifiedBy`,`ModifiedOn`)"
                . "VALUES('$Title','$OfferedBy','$Summary','$Course_start_date','$StartDate','$EndDate','$Location','$Time','$IntendedAudience','$MeetingType','$CourseFees','$TotalCapacity','$NoofUserRegistered','$Instructor','$Instigator','0',now(),'0',now())"; 
        $res = mysql_query($query) or die($query);


$error='fail';
        if ($res) {
            $error='success';
            /*
              $errTyp = "success";
              $errMSG = "Successfully registered, you may login now";
              unset($fname);
              unset($mname);
              unset($lname);
              unset($email);
              unset($phone);
              unset($compay_id);image1
              unset($company);
              unset($address1);

              unset($address2);
              unset($city);
              unset($state);
              unset($agency_id);
              unset($agency);
              unset($ability);
              unset($a_date);
              unset($a_time);
              unset($salary);
              unset($s_date);
              unset($e_salary);
              unset($visa);
              unset($note);
             * 
             */
        } else {
            $errTyp = "danger";
            $errMSG = "Something went wrong, try again later...";
        }
    }
}
?>

<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
         <div class="panel-heading">      
                     <h3 class="panel-title"><b>Add Course</b> </h3>  
                     
                     </div>
            </div>
            <div class="box">
            <?php if($error=="success"){ ?>
                <div class='alert alert-success'>
                    A new course was inserted successfully!
                </div>
            <?php } ?>  
                <script src="js/index.js"></script>
                
                <form name="form_register" id='form_register' method="post" class="my_frm"  enctype="multipart/form-data" >
                          
                    <table class="table">

                        <tr>
                            <th width="30%">*Course Title :</th>

                            <td><input type="text" name="Title" id="Title" class="form-control" placeholder="Type Course Title" maxlength="150"/></td>
                        </tr>
                        <tr>
                            <th width="30%">* Offered By :</th>

                            <td><input type="text" name="OfferedBy" id="OfferedBy" class="form-control" placeholder="Type Offered By" maxlength="150"/></td>
                        </tr>
                        <tr>
                            <th>Description :</th>

                            <td>
                                <textarea  name="Summary" id="area1" style="width:90%;height:200px;"  class="form-control" placeholder="Description" /></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>*  Course date : </th>

                            <td>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    <input type="text" name="Course_start_date" id="CoursDate"  class="form-control" placeholder="Select Course date "/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>*  Start Date : </th>

                            <td>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    <input type="text" name="StartDate" id="StartDate"  class="form-control" placeholder="Select Start Date "/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>* End Date : </th>
                            <td>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    <input type="text" name="EndDate" id="EndDate"  class="form-control" placeholder="Select End Date "/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th> * Location :</th>
                            <td>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
                                    <input type="text" maxlength="150" name="Location" id="Location" class="form-control" placeholder="Type Location"/>
                                </div>
 
                            </td>
                        </tr>


                        <tr>
                            <th>* Time :</th>
                            <td>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-clock-o"></i></div>
                                    <input type="text" name="Time" id="Time"  class="form-control" placeholder="Type Time"  maxlength="50" />
                                </div>

                            </td>
                        </tr>

                        <tr>
                            <th>* Intended Audience:</th>

                            <td><input type="text" name="IntendedAudience" id="IntendedAudience"  class="form-control" placeholder="Type Intended Audience"/></td>
                        </tr>


                        <tr>
                            <th>* Meeting Type:</th>

                            <td><input type="text" name="MeetingType" id="MeetingType"  class="form-control" placeholder="Meeting Type" maxlength="30"/></td>
                        </tr>
                        <tr>
                            <th>* Course Fees :</th>

                           <!-- <td><input type="text" name="CourseFees" id="CourseFees" class="form-control" placeholder="Course Fees"/></td> -->

                            <td><div class="input-group"><div class="input-group-addon"><i class="fa fa-usd"></i></div><input type="text" name="CourseFees" id="CourseFees" class="form-control" placeholder="Type Course Fees" maxlength="5" /></div>
                          </td>
                         
                        </tr>

                        <tr>
                            <th>* Total Capacity:</th>

                            <td><input type="text" name="TotalCapacity" id="TotalCapacity" class="form-control" placeholder="Type Total Capacity" maxlength="3" /></td>
                        </tr>
                       

                        <tr>
                            <th>* Instructor :</th>

                            <td><input type="text" name="Instructor" id="Instructor"  class="form-control" placeholder="Type Instructor"/></td>
                        </tr>
                        <tr>
                            <th>* Instigator :</th>

                            <td><input type="text" name="Instigator" id="Instigator"  class="form-control" placeholder="Type Instigator"/></td>
                        </tr>

                        <tr>
                            <th>&nbsp;</th>

                            <td><input type="submit" name="save" class="btn btn-warning"  value="Save" /></td>

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
                            pattern: /^[a-zA-Z0-9\s\-\'\,\"?&.:]+$/,
                            minlength: 3

                        },

                        'OfferedBy': {

                            required: true,
                            pattern: /^[a-zA-Z0-9\s\-\'\,\"?&.:]+$/,
                            minlength: 3,

                        },
                      'CoursDate': {

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
                            pattern: /^[a-zA-Z0-9\s\-\'\,\"?&.:]+$/,
                            minlength: 3

                        },
                        'Time': {
                            required: true,
                            pattern: /^[a-zA-Z0-9\s\-\'\,\"?&.:]+$/,
                        },

                        'IntendedAudience': {

                            required: true,
                            pattern: /^[a-zA-Z0-9\s\-\'\"?&.:]+$/,
                            minlength: 3,

                        },
                        'MeetingType': {

                            required: true,
                            pattern: /^[a-zA-Z0-9\s\-\'\"?&.:]+$/,

                        },
                        'CourseFees': {

                            required: true,
                            pattern: /^[a-zA-Z0-9]+$/,
                           
                           
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
                            pattern: /^[a-zA-Z0-9\s\-\'\"?&.:]+$/,
                            maxlenght: 50,

                        },

                        'Instigator': {

                            required: true,
                            pattern: /^[a-zA-Z0-9\s\-\'\"?&.:]+$/,
                            maxlenght: 50,

                        }

                    },

                    messages: {

                        'Title': {

                            required: "The title is mandatory!",
                            pattern : "Enter only characters, number and \"space , \" -",
                            minlength: "Choose a title of at least 3 letters!",

                        },

                        'OfferedBy': {

                            required: "The offered by is mandatory!",
                            pattern : "Enter only characters, number and \"space , \" -",
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
                            pattern: "Please enter correct value",
                            minlength: "Choose a Location of at least 3 letters!",

                        },

                        'Time': {

                            required: "The time is mandatory!",
                            pattern : "Please enter correct value",

                        },
                        'IntendedAudience': {

                            required: "The intended audience is mandatory!",
                            pattern : "Please enter correct value",
                            minlength: "Enter a IntendedAudience of at least 3 letters!",

                        },

                        'MeetingType': {

                            required: "The meeting type is mandatory!",
                            pattern : "Please enter correct value",
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
                            pattern : "Please enter correct value",
                        },

                        'Instigator': {

                            required: "The instigator is mandatory!",
                            pattern : "Please enter correct value",

                        }
                    }

                });

    });

//]]>
</script>
<script>
$(function () {
    $("#StartDate").datepicker({ dateFormat: 'mm/dd/yyyy' });
    $("#EndDate").datepicker({ dateFormat: 'mm/dd/yyyy' });
        $("#CoursDate").datepicker({ dateFormat: 'mm/dd/yyyy' });
});
</script>
</html>

<?php ob_end_flush(); ?>

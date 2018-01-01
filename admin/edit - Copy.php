


<script type="text/javascript">
//<![CDATA[
    bkLib.onDomLoaded(function () {

        new nicEditor({fullPanel: true, maxHeight: 200}).panelInstance('area1');
    });
    //]]>
</script>
<?php
include 'side_bar.php';
include 'header.php';
include 'connect.php';

$update = $_REQUEST['CourseID'];

$query = "SELECT * FROM `tblcourse` where CourseID='$update'";

$result = mysql_query($query)or die(mysql_error());
$row = mysql_fetch_array($result)or die(mysql_error());
?>


<?php
if (isset($_POST['update'])) {

    $demo = $_REQUEST['rupdate'];

    $Title = $_REQUEST['Title'];
    $OfferedBy = $_REQUEST['OfferedBy'];
    $Summary = $_REQUEST['Summary'];
    // $StartDate = $_REQUEST['StartDate'];

    $sdate = date_create($_POST['StartDate']);
    $StartDate = date_format($sdate, 'Y-m-d');

    //$EndDate = $_REQUEST['EndDate'];

    $edate = date_create($_POST['EndDate']);
    $EndDate = date_format($edate, 'Y-m-d');

    $Location = $_REQUEST['Location'];
    $Time = $_REQUEST['Time'];
    $IntendedAudience = $_REQUEST['IntendedAudience'];
    $MeetingType = $_REQUEST['MeetingType'];
    $CourseFees = $_REQUEST['CourseFees'];
    $TotalCapacity = $_REQUEST['TotalCapacity'];
    $NoofUserRegistered = $_REQUEST['NoofUserRegistered'];
    $Instructor = $_REQUEST['Instructor'];
    $Instigator = $_REQUEST['Instigator'];




    $update_query = "update `tblcourse` set `Title`='$Title',`OfferedBy`='$OfferedBy', `Summary`='$Summary',`StartDate`='$StartDate',`EndDate`='$EndDate',`Location`='$Location',`Time`='$Time',`IntendedAudience`='$IntendedAudience',
`MeetingType`='$MeetingType',`CourseFees`='$CourseFees',`TotalCapacity` ='$TotalCapacity',`NoofUserRegistered`='$NoofUserRegistered',`Instructor`='$Instructor',`Instigator`='$Instigator' where `CourseID`='$demo'";



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


                <script typ="text/javascript" src="validation.js" >
                </script>
                <form name="form1" method="post" id='form_register' class="my_frm"  enctype="multipart/form-data">
                    <input type="hidden" name="rupdate" value="<?php echo $row['CourseID']; ?>">
                    <table class="table">

                        <tr>
                            <th width="30%">Course Title :</th>

                            <td><input type="text" value="<?php echo $row['Title']; ?>" name="Title" id="Title" class="form-control" placeholder="Type Course Title"/></td>
                        </tr>
                        <tr>
                            <th width="30%">Offered By :</th>

                            <td><input type="text" name="OfferedBy" value="<?php echo $row['OfferedBy']; ?>" id="OfferedBy" class="form-control" placeholder="Type Offered By"/></td>
                        </tr>
                        <tr>
                            <th>Description :</th>

                            <td>
                                <textarea  name="Summary" id="area1" style="width:90%;height:200px;"  class="form-control" placeholder="Description" /><?php echo $row['Summary']; ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th> Start Date : </th>
                            <td>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    <input type="text" name="StartDate" value="<?php echo $row['StartDate']; ?>" id="StartDate"  class="form-control" placeholder=" Select Start Date "/>
                                </div>

                            </td>
                        </tr>
                        <tr>
                            <th> End Date : </th>
                            <td>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    <input type="text" name="EndDate" value="<?php echo $row['EndDate']; ?>" id="EndDate"  class="form-control" placeholder=" Select End Date "/>
                                </div>

                            </td>
                        </tr>
                        <tr>
                            <th> Location :</th>
                            <td>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
                                    <input type="text" name="Location" value="<?php echo $row['Location']; ?>" id="Location" class="form-control" placeholder="Type Location"/>
                                </div>
                            </td>
                        </tr>


                        <tr>
                            <th>Time :</th>
                            <td>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-clock-o"></i></div>
                                    <input type="text" name="Time" value="<?php echo $row['Time']; ?>" id="Time"  class="form-control" placeholder="Type Time"/>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <th>Intended Audience:</th>

                            <td><input type="text" name="IntendedAudience" value="<?php echo $row['IntendedAudience']; ?>" id="IntendedAudience"  class="form-control" placeholder="Type Intended Audience"/></td>
                        </tr>


                        <tr>
                            <th>Meeting Type:</th>

                            <td><input type="text" name="MeetingType" value="<?php echo $row['MeetingType']; ?>" id="MeetingType"  class="form-control" placeholder="Meeting Type"/></td>
                        </tr>
                        <tr>
                            <th>Course Fees :</th>

                            <td><input type="text" name="CourseFees" id="text1" onkeypress="return IsNumeric(event);" onpaste="return false;" ondrop = "return false;" value="<?php echo $row['CourseFees']; ?>" id="" class="form-control" placeholder="Type Course Fees"/>
                                <span id="error1" style="color: Red; display: none">* Only Number</span> 
                            </td>
                        <script type="text/javascript">
                            var specialKeys = new Array();
                            specialKeys.push(8); //Backspace
                            function IsNumeric(e) {
                                var keyCode = e.which ? e.which : e.keyCode
                                var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
                                document.getElementById("error1").style.display = ret ? "none" : "inline";
                                return ret;
                            }
                        </script>
                        </tr>

                        <tr>
                            <th>Total Capacity:</th>

                            <td><input type="text" name="TotalCapacity" value="<?php echo $row['TotalCapacity']; ?>" id="TotalCapacity" class="form-control" placeholder="Type Total Capacity"/></td>
                        </tr>
                        <tr>
                            <th>No of User Registered :</th>

                            <td><input type="text" name="NoofUserRegistered" value="<?php echo $row['NoofUserRegistered']; ?>" id="NoofUserRegistered"  class="form-control" placeholder="Type No of User Registered "/></td>
                        </tr>


                        <tr>
                            <th>Instructor :</th>

                            <td><input type="text" name="Instructor" value="<?php echo $row['Instructor']; ?>" id="Instructor"  class="form-control" placeholder="Type Instructor"/></td>
                        </tr>

                        <tr>
                            <th>Instigator :</th>

                            <td><input type="text" name="Instigator" value="<?php echo $row['Instigator']; ?>" id="Instigator"  class="form-control" placeholder="Type Instigator"/></td>
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
<script src="js/jquery.bvalidator.js"></script>
<script src="js/jquery.bvalidator-yc.js"></script>








<audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
<audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
<!-- END PRELOADS -->                      


<!-- START THIS PAGE PLUGINS-->        

<!-- END THIS PAGE PLUGINS-->  

<!-- START TEMPLATE -->

<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script>

<script>
                            $(function () {
                                $("#StartDate").datepicker();
                                $("#EndDate").datepicker();
                            });
</script>

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
                            alphanumeric: true,
                            maxlength: 3

                        },

                        'OfferedBy': {

                            required: true,
                            alphanumeric: true,
                            maxlength: 3,

                        },

                        'StartDate': {

                            required: true,
                            date: true

                        },
                        'EndDate': {

                            required: true,
                            date: true

                        },
                        'Location': {

                            required: true,

                            maxlength: 3

                        },
                        'Time': {

                            required: true,

                        },

                        'IntendedAudience': {

                            required: true,
                            alphanumeric: true,
                            maxlength: 3,

                        },
                        'MeetingType': {

                            required: true,
                            alphanumeric: true,

                        },
                        'CourseFees': {

                            required: true,
                            number: true,
                            maxlength: 3,
                        },
                        'TotalCapacity': {

                            required: true,
                            number: true,
                            maxlenght: 3,

                        },

                        'NoofUserRegistered': {

                            required: true,
                            number: true,
                            maxlenght: 3,

                        },

                        'Instructor': {

                            required: true,
                            alphanumeric: true,
                            maxlenght: 50,

                        },

                        'Instigator': {

                            required: true,
                            alphanumeric: true,
                            maxlenght: 50,

                        },

                        'date': {

                            required: true,

                            date: true

                        },

                    },

                    messages: {

                        'Title': {

                            required: "The title is mandatory!",

                            minlength: "Choose a title of at least 3 letters!",

                        },

                        'OfferedBy': {

                            required: "The offered by is mandatory!",

                            minlength: "Choose a Offered of at least 3 letters!",

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

                        },
                        'IntendedAudience': {

                            required: "The intended audience is mandatory!",

                            minlength: "Choose a IntendedAudience of at least 3 letters!",

                        },

                        'MeetingType': {

                            required: "The meeting type is mandatory!",

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

                        },

                        'Instigator': {

                            required: "The instigator is mandatory!",

                        }
                        

                    }

                });

    });

//]]>
</script>

</html>

<?php ob_end_flush(); ?>


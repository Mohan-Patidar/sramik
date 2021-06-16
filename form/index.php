<!DOCTYPE html>
<html>
<head>





<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>

    <div class="container">
        <h5>Please fill the application below</h5>
        <form  method="post" id="form-search">

            <div class="row">
                <div class="col-sm-5">
                    <label>
                        <input type="text" name="appointment_date" placeholder="DD/MMM/YYYY" required="">
                        <span>1. Date of appointment attended: </span> </label>
                </div>
                <div class="col-sm-7">
                    <label> <span>2. Please select the appropriate box(es) for the appointment you attended:</span> </label>
                    <input type="checkbox" name="appointment_type[]" id="appointment" value="ECG">
                    <label>ECG</label>
                    <input type="checkbox" name="appointment_type[]" id="appointment" value="7 Day Event Monitor">
                    <label>7 Day Event Monitor</label>
                    <input type="checkbox" name="appointment_type[]" id="appointment" value="24hr ECG Monitor">
                    <label>24hr ECG Monitor</label>
                    <input type="checkbox" name="appointment_type[]" id="appointment" value="Blood Pressure Monitor">
                    <label>Blood Pressure Monitor</label>
                    <input type="checkbox" name="appointment_type[]" id="appointment" value="Lung Function Test">
                    <label>Lung Function Test</label>
                    <input type="checkbox" name="appointment_type[]" id="appointment" value="Hearing Assessment">
                    <label>Hearing Assessment</label>
                    <input type="checkbox" name="appointment_type[]" id="appointment" value="Hearing Aid Fitting">
                    <label>Hearing Aid Fitting"</label>
                    <input type="checkbox" name="appointment_type[]" id="appointment" value="Hearing Aid Repair">
                    <label>Hearing Aid Repair</label>

                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label>
                            <label> <span>3. How would you rate the following (Please select the appropriate box): </span> </label>
                            <input type="radio" id="" name="first" value="5">
                            <input type="radio" id="" name="first" value="4">
                            <input type="radio" id="" name="first" value="3">
                            <input type="radio" id="" name="first" value="2">
                            <input type="radio" id="" name="first" value="1">
                            <input type="radio" id="" name="first" value="0">
                            <label for="male">Politeness and helpfulness of our Reception/Waiting room staff?</label><br>
                            <input type="radio" id="" name="second" value="5">
                            <input type="radio" id="" name="second" value="4">
                            <input type="radio" id="" name="second" value="3">
                            <input type="radio" id="" name="second" value="2">
                            <input type="radio" id="" name="second" value="1">
                            <input type="radio" id="" name="second" value="0">
                            <label for="male">Seen at your appointed time?</label><br>
                            <input type="radio" id="" name="third" value="5">
                            <input type="radio" id="" name="third" value="4">
                            <input type="radio" id="" name="third" value="3">
                            <input type="radio" id="" name="third" value="2">
                            <input type="radio" id="" name="third" value="1">
                            <input type="radio" id="" name="third" value="0">
                           
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label> <span>4. Would you recommend Express Diagnostics to your family and friends? </span> </label>
                        <input type="radio" id="" name="prefer" value="Yes">
                        <label for="yes">Yes</label><br>
                        <input type="radio" id="" name="prefer" value="No">
                        <label for="no">No</label><br>

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label>
                            <textarea rows="5" name="service" required=""></textarea>
                            <span>5. If we have not achieved your total satisfaction, do you have any suggestions on how we can improve our services? </span> </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <label>
                        <textarea rows="5" name="details" required=""></textarea>
                        <span>If you require a response to your comments, please provide your contact details here:</span> </label>
                </div>
            </div>

            <div class="send-query">
                <button type="submit" name="submit" id="save" class="btn btnMain">Send query </button>
            </div>
        </form>

    </div>
    </head>
<body>
<script>

function saveData(formId, action_url, responseDiv) {


formId = '#' + formId;
var formData = new FormData(jQuery(formId)[0]);


$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
console.log(formData);
$.ajax({
    url: action_url,
    data: formData,
    type: 'POST',
    processData: false,
    contentType: false,
    success: function(res) {

        var res = jQuery.parseJSON(res);
    console.log(res);

    },
    
});
}

    $('#save').click(function(){
  
        saveData("form-search","process_contact_form.php","msg");

});

</script>
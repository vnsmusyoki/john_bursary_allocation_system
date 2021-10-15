$('#btn_student_details').click(function () {

    var error_first_name = '';
    var error_middle_name = '';
    var error_last_name = '';
    var error_date_of_birth = '';
    var error_admission_number = '';
    var error_class_admission = '';
    var error_profile_photo = '';
    var error_email_address = '';
    var error_gender = '';
    var filter = /^([a-zA-Z _\'])+$/;
    var filteremail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if ($.trim($('#first_name').val()).length == 0) {
        error_first_name = 'Firstname is required';
        $('#error_first_name').text(error_first_name);
        $('#first_name').addClass('has-error');
    } else {
        if (!filter.test($('#first_name').val())) {
            error_first_name = 'Firstname has invalid characters. use only letters';
            $('#error_first_name').text(error_first_name);
            $('#first_name').addClass('has-error');
        } else {
            error_first_name = '';
            $('#error_first_name').text(error_first_name);
            $('#first_name').removeClass('has-error');
        }

    }
    if ($.trim($('#middle_name').val()).length == 0) {
        error_middle_name = 'Middle name is required';
        $('#error_middle_name').text(error_middle_name);
        $('#middle_name').addClass('has-error');
    } else {
        if (!filter.test($('#middle_name').val())) {
            error_middle_name = 'Middle name has invalid characters. use only letters';
            $('#error_middle_name').text(error_middle_name);
            $('#middle_name').addClass('has-error');
        } else {
            error_middle_name = '';
            $('#error_middle_name').text(error_middle_name);
            $('#middle_name').removeClass('has-error');
        }

    }
    if ($.trim($('#last_name').val()).length == 0) {
        error_last_name = 'Last name is required';
        $('#error_last_name').text(error_last_name);
        $('#last_name').addClass('has-error');
    } else {
        if (!filter.test($('#last_name').val())) {
            error_last_name = 'Last name has invalid characters. use only letters';
            $('#error_last_name').text(error_last_name);
            $('#last_name').addClass('has-error');
        } else {
            error_last_name = '';
            $('#error_last_name').text(error_last_name);
            $('#last_name').removeClass('has-error');
        }

    }

    if ($.trim($('#date_of_birth').val()).length == 0) {
        error_date_of_birth = 'Age is required';
        $('#error_date_of_birth').text(error_date_of_birth);
        $('#date_of_birth').addClass('has-error');
    } else {
        var today = new Date();
        var dob = new Date($("#date_of_birth").val());
        var age = Math.floor((today - dob) / (365.25 * 24 * 60 * 60 * 1000));
        if (dob > today) {
            error_date_of_birth = 'Choose a valid Age. You are not allowed to pick a later date';
            $('#error_date_of_birth').text(error_date_of_birth);
            $('#date_of_birth').addClass('has-error');
        } else if (age < 10) {
            error_date_of_birth = 'Student Age can not be less than 11 years.';
            $('#error_date_of_birth').text(error_date_of_birth);
            $('#date_of_birth').addClass('has-error');
        } else {
            error_date_of_birth = '';
            $('#error_date_of_birth').text(error_date_of_birth);
            $('#date_of_birth').removeClass('has-error');
        }

    }

    if ($.trim($('#admission_number').val()).length == 0) {
        error_admission_number = 'Admission Number is required';
        $('#error_admission_number').text(error_admission_number);
        $('#admission_number').addClass('has-error');
    } else {
        var admnumber = $("#date_of_birth").val();

        if (admnumber < 1) {
            error_admission_number = 'Choose a valid Admission Number';
            $('#error_admission_number').text(error_admission_number);
            $('#admission_number').addClass('has-error');
        } else if (admnumber > 100000000000) {
            error_admission_number = 'Choose a valid Admission Number';
            $('#error_admission_number').text(error_admission_number);
            $('#admission_number').addClass('has-error');
        } else {
            error_admission_number = '';
            $('#error_admission_number').text(error_admission_number);
            $('#admission_number').removeClass('has-error');
        }
    }

    if ($.trim($('#class_admission').val()).length == 0) {
        error_class_admission = 'Select class ';
        $('#error_class_admission').text(error_class_admission);
        $('#class_admission').addClass('has-error');
    } else {

        error_class_admission = '';
        $('#error_class_admission').text(error_class_admission);
        $('#class_admission').removeClass('has-error');
    }

    if ($.trim($('#profile_photo').val()).length == 0) {
        error_profile_photo = 'Student Profile Photo is required';
        $('#error_profile_photo').text(error_profile_photo);
        $('#profile_photo').addClass('has-error');
    } else {
        error_profile_photo = '';
        $('#error_profile_photo').text(error_profile_photo);
        $('#profile_photo').removeClass('has-error');
    }

    if ($.trim($('#email_address').val()).length == 0) {
        error_email_address = 'Email address is required';
        $('#error_email_address').text(error_email_address);
        $('#email_address').addClass('has-error');
    } else {
        if (!filteremail.test($('#email_address').val())) {
            error_email_address = 'Invalid Email address';
            $('#error_email_address').text(error_email_address);
            $('#email_address').addClass('has-error');
        } else {
            error_email_address = '';
            $('#error_email_address').text(error_email_address);
            $('#email_address').removeClass('has-error');
            $('#email_address').addClass('is-verified');
        }
    }

    if ($.trim($('#gender').val()).length == 0) {
        error_gender = 'Select Gender';
        $('#error_gender').text(error_gender);
        $('#gender').addClass('has-error');
    } else {
        error_gender = '';
        $('#error_gender').text(error_gender);
        $('#gender').removeClass('has-error');
        $('#gender').addClass('is-verified');
    }
    if (error_first_name != '' || error_middle_name != '' || error_last_name != '' || error_date_of_birth != '' || error_admission_number != '' || error_class_admission != '' || error_profile_photo != '' || error_email_address != '' || error_gender != '') {
        return false;
    } else {
        $('#list_student_details').removeClass('active active_tab1');
        $('#list_student_details').removeAttr('href data-toggle');
        $('#student_details').removeClass('active');
        $('#list_student_details').addClass('inactive_tab1');
        $('#list_guardian_details').removeClass('inactive_tab1');
        $('#list_guardian_details').addClass('active_tab1 active');
        $('#list_guardian_details').attr('href', '#guardian_details');
        $('#list_guardian_details').attr('data-toggle', 'tab');
        $('#guardian_details').addClass('active in');
    }
});

$('#previous_btn_guardian_details').click(function () {
    $('#list_guardian_details').removeClass('active active_tab1');
    $('#list_guardian_details').removeAttr('href data-toggle');
    $('#guardian_details').removeClass('active in');
    $('#list_guardian_details').addClass('inactive_tab1');
    $('#list_student_details').removeClass('inactive_tab1');
    $('#list_student_details').addClass('active_tab1 active');
    $('#list_student_details').attr('href', '#student_details');
    $('#list_student_details').attr('data-toggle', 'tab');
    $('#student_details').addClass('active in');
});

$('#btn_guardian_details').click(function () {
    var error_father_names = '';
    var error_father_phone_number = '';
    var error_father_status = '';
    var error_mother_names = '';
    var error_mother_phone_number = '';
    var error_mother_status = '';
    var error_guardian_names = '';
    var error_father_email = '';
    var error_mother_email = '';
    var error_guardian_email = '';
    var error_guardian_phone_number = '';
    var mobile_validation = /^\d{10}$/;
    var filternames = /^([a-zA-Z _\' ])+$/;
    var filterguardian = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if ($.trim($('#father_names').val()).length == 0) {
        error_father_names = 'Father full names are  required';
        $('#error_father_names').text(error_father_names);
        $('#father_names').addClass('has-error');
    } else {
        if (!filternames.test($('#father_names').val())) {
            error_father_names = 'Father Names have invalid characters. use only letters';
            $('#error_father_names').text(error_father_names);
            $('#father_names').addClass('has-error');
        } else {
            error_father_names = '';
            $('#error_father_names').text(error_father_names);
            $('#father_names').removeClass('has-error');
            $('#father_names').addClass('is-verified');
        }

    }


    if ($.trim($('#father_phone_number').val()).length == 0) {
        error_father_phone_number = 'Phone number is required';
        $('#error_father_phone_number').text(error_father_phone_number);
        $('#father_phone_number').addClass('has-error');
    } else {

        if ($.trim($('#father_phone_number').val()).length != 10) {
            error_father_phone_number = 'Phone number should have 10 digits';
            $('#error_father_phone_number').text(error_father_phone_number);
            $('#father_phone_number').addClass('has-error');
        } else {
            error_father_phone_number = '';
            $('#error_father_phone_number').text(error_father_phone_number);
            $('#father_phone_number').addClass('is-verified');
            $('#father_phone_number').removeClass('has-error');
        }

    }


    if ($.trim($('#father_status').val()).length == 0) {
        error_father_status = 'Select an option here';
        $('#error_father_status').text(error_father_status);
        $('#father_status').addClass('has-error');
    } else {
        error_father_status = '';
        $('#error_father_status').text(error_father_status);
        $('#father_status').removeClass('has-error');
        $('#father_status').addClass('is-verified');
    }

    if ($.trim($('#father_email').val()).length == 0) {
        error_father_email = 'Email address is required';
        $('#error_father_email').text(error_father_email);
        $('#father_email').addClass('has-error');
    } else {
        if (!filteremail.test($('#father_email').val())) {
            error_father_email = 'Invalid Email address';
            $('#error_father_email').text(error_father_email);
            $('#father_email').addClass('has-error');
        } else {
            error_father_email = '';
            $('#error_father_email').text(error_father_email);
            $('#father_email').removeClass('has-error');
            $('#father_email').addClass('is-verified');
        }
    }
    if ($.trim($('#mother_names').val()).length == 0) {
        error_mother_names = 'Father full names are  required';
        $('#error_mother_names').text(error_mother_names);
        $('#mother_names').addClass('has-error');
    } else {
        if (!filternames.test($('#mother_names').val())) {
            error_mother_names = 'Father Names have invalid characters. use only letters';
            $('#error_mother_names').text(error_mother_names);
            $('#mother_names').addClass('has-error');
        } else {
            error_mother_names = '';
            $('#error_mother_names').text(error_mother_names);
            $('#mother_names').removeClass('has-error');
            $('#mother_names').addClass('is-verified');
        }

    }
    if ($.trim($('#mother_phone_number').val()).length == 0) {
        error_mother_phone_number = 'Phone number is required';
        $('#error_mother_phone_number').text(error_mother_phone_number);
        $('#mother_phone_number').addClass('has-error');
    } else {
        if ($.trim($('#mother_phone_number').val()).length != 10) {
            error_mother_phone_number = 'Phone number should have 10 digits';
            $('#error_mother_phone_number').text(error_mother_phone_number);
            $('#mother_phone_number').addeClass('has-error');
        } else {
            error_mother_phone_number = '';
            $('#error_mother_phone_number').text(error_mother_phone_number);
            $('#mother_phone_number').addClass('is-verified');
            $('#mother_phone_number').removeClass('has-error');
        }

    }


    if ($.trim($('#mother_status').val()).length == 0) {
        error_mother_status = 'Select an option here';
        $('#error_mother_status').text(error_mother_status);
        $('#mother_status').addClass('has-error');
    } else {
        error_mother_status = '';
        $('#error_mother_status').text(error_mother_status);
        $('#mother_status').removeClass('has-error');
        $('#mother_status').addClass('is-verified');
    }
    if ($.trim($('#mother_email').val()).length == 0) {
        error_mother_email = 'Email address is required';
        $('#error_mother_email').text(error_mother_email);
        $('#mother_email').addClass('has-error');
    } else {
        if (!filteremail.test($('#mother_email').val())) {
            error_mother_email = 'Invalid Email address';
            $('#error_mother_email').text(error_mother_email);
            $('#mother_email').addClass('has-error');
        } else {
            error_mother_email = '';
            $('#error_mother_email').text(error_mother_email);
            $('#mother_email').removeClass('has-error');
            $('#mother_email').addClass('is-verified');
        }
    }
    if ($.trim($('#guardian_names').val()).length == 0) {
        error_guardian_names = 'Father full names are  required';
        $('#error_guardian_names').text(error_guardian_names);
        $('#guardian_names').addClass('has-error');
    } else {
        if (!filternames.test($('#guardian_names').val())) {
            error_guardian_names = 'Father Names have invalid characters. use only letters';
            $('#error_guardian_names').text(error_guardian_names);
            $('#guardian_names').addClass('has-error');
        } else {
            error_guardian_names = '';
            $('#error_guardian_names').text(error_guardian_names);
            $('#guardian_names').removeClass('has-error');
            $('#guardian_names').addClass('is-verified');
        }

    }
    if ($.trim($('#guardian_phone_number').val()).length == 0) {
        error_guardian_phone_number = 'Guardian phone number is required';
        $('#error_guardian_phone_number').text(error_guardian_phone_number);
        $('#guardian_phone_number').addClass('has-error');
    } else {
        if ($.trim($('#guardian_phone_number').val()).length != 10) {
            error_guardian_phone_number = 'Phone number must have 10 digits';
            $('#error_guardian_phone_number').text(error_guardian_phone_number);
            $('#guardian_phone_number').addClass('has-error');
        } else {
            error_guardian_phone_number = '';
            $('#error_guardian_phone_number').text(error_guardian_phone_number);
            $('#guardian_phone_number').addClass('is-verified');
            $('#guardian_phone_number').removeClass('has-error');
        }

    }
    if ($.trim($('#guardian_email').val()).length == 0) {
        error_guardian_email = 'Email address is required';
        $('#error_guardian_email').text(error_guardian_email);
        $('#guardian_email').addClass('has-error');
    } else {
        if (!filteremail.test($('#guardian_email').val())) {
            error_guardian_email = 'Invalid Email address';
            $('#error_guardian_email').text(error_guardian_email);
            $('#guardian_email').addClass('has-error');
        } else {
            error_guardian_email = '';
            $('#error_guardian_email').text(error_guardian_email);
            $('#guardian_email').removeClass('has-error');
            $('#guardian_email').addClass('is-verified');
        }
    }
    if (error_father_names != '' || error_father_phone_number != '' | error_father_status != '' || error_mother_names != '' || error_mother_phone_number != '' || error_mother_status != '' || error_guardian_names != '' || error_guardian_phone_number != '') {
        return false;
    } else {
        $('#list_guardian_details').removeClass('active active_tab1');
        $('#list_guardian_details').removeAttr('href data-toggle');
        $('#guardian_details').removeClass('active');
        $('#list_guardian_details').addClass('inactive_tab1');
        $('#list_contact_details').removeClass('inactive_tab1');
        $('#list_contact_details').addClass('active_tab1 active');
        $('#list_contact_details').attr('href', '#contact_details');
        $('#list_contact_details').attr('data-toggle', 'tab');
        $('#contact_details').addClass('active in');
    }
});

$('#previous_btn_contact_details').click(function () {
    $('#list_contact_details').removeClass('active active_tab1');
    $('#list_contact_details').removeAttr('href data-toggle');
    $('#contact_details').removeClass('active in');
    $('#list_contact_details').addClass('inactive_tab1');
    $('#list_guardian_details').removeClass('inactive_tab1');
    $('#list_guardian_details').addClass('active_tab1 active');
    $('#list_guardian_details').attr('href', '#guardian_details');
    $('#list_guardian_details').attr('data-toggle', 'tab');
    $('#guardian_details').addClass('active in');
});

$('#btn_contact_details').click(function () {
    var error_postal_office = '';
    var error_postal_code = '';
    var error_postal_address = '';
    var filteraddress = /^([a-zA-Z _\' ])+$/;
    var filtercodes = /^([0-9])+$/;
    if ($.trim($('#postal_office').val()).length == 0) {
        error_postal_office = 'Address is required';
        $('#error_postal_office').text(error_postal_office);
        $('#postal_office').addClass('has-error');
    } else {

        if (!filtercodes.test($('#postal_office').val())) {
            error_postal_office = 'Only digits are required';
            $('#error_postal_office').text(error_postal_office);
            $('#postal_office').removeClass('has-error');
        } else {
            error_postal_office = '';
            $('#error_postal_office').text(error_postal_office);
            $('#postal_office').removeClass('has-error');
            $('#postal_office').addClass('is-verified');
        }
    }
    if ($.trim($('#postal_code').val()).length == 0) {
        error_postal_code = 'Code address is required';
        $('#error_postal_code').text(error_postal_code);
        $('#postal_code').addClass('has-error');
    } else {
        if (!filtercodes.test($('#postal_code').val())) {
            error_postal_code = 'Only digits are required';
            $('#error_postal_code').text(error_postal_code);
            $('#postal_code').addClass('has-error');
        } else {
            error_postal_code = '';
            $('#error_postal_code').text(error_postal_code);
            $('#postal_code').removeClass('has-error');
            $('#postal_code').addClass('is-verified');
        }

    }



    if ($.trim($('#postal_address').val()).length == 0) {
        error_postal_address = 'Postal Address is required';
        $('#error_postal_address').text(error_postal_address);
        $('#postal_address').addClass('has-error');
    } else {
        if (!filteraddress.test($('#postal_address').val())) {
            error_postal_address = 'Postal Address should only contain characters';
            $('#error_postal_address').text(error_postal_address);
            $('#postal_address').addClass('has-error');
        } else {
            error_guardian_names = '';
            $('#error_postal_address').text(error_postal_address);
            $('#postal_address').removeClass('has-error');
            $('#postal_address').addClass('is-verified');
        }
    }
    if (error_postal_office != '' || error_postal_code != '' || error_postal_address != '') {
        return false;
    } else {
        $('#btn_contact_details').attr("disabled", "disabled");
        $(document).css('cursor', 'prgress');
        $("#register_form").submit();
    }

});

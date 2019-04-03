// NoticeBoard Modal start
$(function () {
    $("#noticeBoardFrom").click(function () {
        $(".ui.modal.basic").modal('show');
    });

});
// NoticeBoard Modal end

// Signin and SignUP Hiding Jquery

$(function () {
    $('.loginHere').click(function () {
        $('.signInArea').show();
        $('.signUpArea').hide();
    });

    $('.signUpHere').click(function () {
        $('.signInArea').hide();
        $('.signUpArea').show();
    });
});
// Signin and SignUP Hiding Jquery

//Signup form profile pic Option Start
$("input:text").click(function () {
    $(this).parent().find("input:file").click();
});

$('input:file', '.ui.action.input')
    .on('change', function (e) {
        var name = e.target.files[0].name;
        $('input:text', $(e.target).parent()).val(name);
    });
// Signup form profile pic Option End

// Sign In Validation Start
$(document)
    .ready(function () {
        $('.ui.form.signin')
            .form({
                fields: {
                    email: {
                        identifier: 'email',
                        rules: [{
                                type: 'empty',
                                prompt: 'Please enter your e-mail'
                            },
                            {
                                type: 'email',
                                prompt: 'Please enter a valid e-mail'
                            }
                        ]
                    },
                    password: {
                        identifier: 'password',
                        rules: [{
                                type: 'empty',
                                prompt: 'Please enter your password'
                            },
                            {
                                type: 'length[6]',
                                prompt: 'Your password must be at least 6 characters'
                            }
                        ]
                    }
                }
            });
    });
// Sign In Validation End
// Sign Up Validation Start
$(document)
    .ready(function () {
        $('.ui.form')
            .form({
                fields: {
                    firstname: {
                        identifier: 'firstname',
                        rules: [{
                            type: 'empty',
                            prompt: 'Please enter your first name'
                        }]
                    },
                    surname: {
                        identifier: 'surname',
                        rules: [{
                            type: 'empty',
                            prompt: 'Please enter your last name'
                        }]
                    },
                    email: {
                        identifier: 'email',
                        rules: [{
                                type: 'empty',
                                prompt: 'Please enter your e-mail'
                            },
                            {
                                type: 'email',
                                prompt: 'Please enter a valid e-mail'
                            },
                        ]
                    },
                    password: {
                        identifier: 'password',
                        rules: [{
                                type: 'empty',
                                prompt: 'Please enter your password'
                            },
                            {
                                type: 'length[6]',
                                prompt: 'Your password must be at least 6 characters'
                            }
                        ]
                    },
                    gender: {
                        identifier: 'gender',
                        rules: [{
                            type: 'empty',
                            prompt: 'Please select your gender'
                        }]
                    },
                    BirthdayDay: {
                        identifier: 'BDay',
                        rules: [{
                            type: 'empty',
                            prompt: 'Please select birthday date'
                        }]
                    },
                    BirthdayMonth: {
                        identifier: 'BMonth',
                        rules: [{
                            type: 'empty',
                            prompt: 'Please select birthday month'
                        }]
                    },
                    BirthdayYear: {
                        identifier: 'BYear',
                        rules: [{
                            type: 'empty',
                            prompt: 'Please select birthday year'
                        }]
                    },
                    checkbox: {
                        identifier: 'checkbox',
                        rules: [{
                            type: 'checked',
                            prompt: 'You must agree to the terms and conditions'
                        }]
                    },
                    ProfilePic: {
                        identifier: 'ppic',
                        rules: [{
                            type: 'empty',
                            prompt: 'Please upload your Profile Picture'
                        }]
                    }
                }
            });
    });
// Sign Up Validation End
$(document).ready(function () {
    $('.ui.dropdown').dropdown();
});
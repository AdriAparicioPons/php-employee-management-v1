$("#signup").click(function() {
    $("#first").fadeOut("fast", function() {
    $("#second").fadeIn("fast");
    });
    });
    $("#signin").click(function() {
    $("#second").fadeOut("fast", function() {
    $("#first").fadeIn("fast");
    });
    });

            $(function() {
            $("form[name='login']").validate({
                rules: {
                    mail: {
                    required: true,
                    mail: true
                    },
                    password: {
                    required: true,
                    }
                },
                    messages: {
                    email: "Please enter a valid email address",
                    password: {
                    required: "Please enter password",
                    }
                },
                submitHandler: function(form) {
                    form.submit();
                }
                });
            });
    $(function() {
        $("form[name='registration']").validate({
        rules: {
        firstname: "required",
        lastname: "required",
        email: {
            required: true,
            email: true
        },
        password: {
            required: true,
            minlength: 5
        }
        },
        messages: {
        firstname: "Please enter your firstname",
        lastname: "Please enter your lastname",
        password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long"
        },
        email: "Please enter a valid email address"
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
    });
//FUNCTION FETCH

const email = document.getElementById("email");

email.addEventListener("keyup", (e) =>{
    const data = {text : e.target.value};
    fetch ("resources/users.json",{
        method: 'POST',
        body: JSON.stringify(data),
        headers:{
            'Accept' : 'application/json',
            'Content-Type' : 'application/json',
        }
    }).then(response =>{
        response.json()
    }).then(data =>{
        (console.log(data.users))
    })
})

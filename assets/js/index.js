// $("#signup").click(function() {
//     $("#first").fadeOut("fast", function() {
//     $("#second").fadeIn("fast");
//     });
//     });
//     $("#signin").click(function() {
//     $("#second").fadeOut("fast", function() {
//     $("#first").fadeIn("fast");
//     });
//     });

//             $(function() {
//             $("form[name='login']").validate({
//                 rules: {
//                     mail: {
//                     required: true,
//                     mail: true
//                     },
//                     password: {
//                     required: true,
//                     }
//                 },
//                     messages: {
//                     email: "Please enter a valid email address",
//                     password: {
//                     required: "Please enter password",
//                     }
//                 },
//                 submitHandler: function(form) {
//                     form.submit();
//                 }
//                 });
//             });
//     $(function() {
//         $("form[name='registration']").validate({
//         rules: {
//         firstname: "required",
//         lastname: "required",
//         email: {
//             required: true,
//             email: true
//         },
//         password: {
//             required: true,
//             minlength: 5
//         }
//         },
//         messages: {
//         firstname: "Please enter your firstname",
//         lastname: "Please enter your lastname",
//         password: {
//             required: "Please provide a password",
//             minlength: "Your password must be at least 5 characters long"
//         },
//         email: "Please enter a valid email address"
//         },
//         submitHandler: function(form) {
//             form.submit();
//         }
//     });
//     });
//FUNCTION FETCH

$url = "http://localhost/documents/php-employee-management-v1-1/resources/users.json";

fetch($url,
    method= 'POST',
    body= JSON.stringify(object),
    headers= {'Content-Type': 'application/json'} // indica el formato

    .then(function (response){
        return response.text();
    })
    .then(function (data){
        console.log(data);
    })
    .catch(function (error){
        console.error(error);
    }))


//     $json = file_get_contents('php://input');
//     $datos = json_decode($json, false);

// public function ensayando(){
//     $datos = json_decode(file_get_contents('php://input'));
//     print_r($datos);
// }

console.log("hello");
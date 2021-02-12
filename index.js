const express = require('express');
const bodyParser = require('body-parser');

const app = express();

app.use(bodyParser.urlencoded({
  extended: true
}));
app.use(express.static("public"));

app.get('/', function(req, res) {
  res.send('Hello World, it is Friday and the sun is shining')
});

// app.get('/contact', function (req, res) {
//   res.send('You can contact us on info@global-justice.com')
// });

app.listen(3000, function() {
  console.log('Server is running')
});

//reCaptcha
// <script>
//   function onSubmit(token) {
//     document.getElementById("demo-form").submit();
//   }
// </script>



// <script>
//   grecaptcha.ready(function() {
//     grecaptcha.execute('6LeWhlMaAAAAAJI45-VMDf7lCh-EydiykUlWh0pp', {
//       action: 'homepage'
//     }).then(function(token) {
//       // pass the token to the backend script for verification
//     });
//   );
// </script>
//
// <
// script >
//   // when form is submit
//   $('#contact-form').submit(function() {
//       // we stoped it
//       event.preventDefault();
//       var name = $('#name').val();
//       var email = $('#email').val();
//       var subject = $('#subject').val();
//       var message = $("#message").val();
//       // needs for recaptacha ready
//       grecaptcha.ready(function() {
//           // do request for recaptcha token
//           // response is promise with passed token
//           grecaptcha.execute('6LeWhlMaAAAAAJI45-VMDf7lCh-EydiykUlWh0pp', {
//             action: 'create_message'
//           }).then(function(token) {
//               // add token to form
//               $('#contact-form'
//                 ').prepend(' < input type = "hidden"
//                 name = "g-recaptcha-response"
//                 value = "' + token + '" > ');
//                 $.post("form.php", {
//                   name: name,
//                   email: email,
//                   subject: subject,
//                   comment: comment,
//                   token: token
//                 }, function(result) {
//                   console.log(result);
//                   if (result.success) {
//                     alert('Thanks for contacting us!.')
//                   } else {
//                     alert('You are spammer ! Get the @$%K out.')
//                   }
//                 });
//               });;
//           });
//       }); <
//     /script>

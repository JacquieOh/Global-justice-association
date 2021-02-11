const express = require('express');
const bodyParser = require('body-parser');

const app = express();

app.use(bodyParser.urlencoded({ extended: true }));
app.use(express.static("public"));

app.get('/', function (req, res) {
  res.send('Hello World, it is Friday and the sun is shining')
});

// app.get('/contact', function (req, res) {
//   res.send('You can contact us on info@global-justice.com')
// });

app.listen(3000, function (){
  console.log('Server is running')
});

//reCaptcha
<script>
  function onSubmit(token) {
    document.getElementById("demo-form").submit();
  }
</script>

const express = require('express');
const bodyParser = require('body-parser');

const app = express();


app.get('/', function (req, res) {
  res.send('Hello World, it is Friday and the sun is shining')
});

// app.get('/contact', function (req, res) {
//   res.send('You can contact us on info@global-justice.com')
// });

app.listen(3000, function (){
  console.log('Server is running')
});

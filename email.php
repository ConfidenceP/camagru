<?php
// Multiple recipients
$to = 'mukwindidzacp@gmail.com'; // note the comma

// Subject
$subject = 'Birthday Reminders for June';

// Message
$message = '
<html>
<head>
  <title>Birthday Reminders for June</title>
</head>
<body>
  <p>Here are the birthdays upcoming in June!</p>
  activate account <a href="http://localhost:8080/camagru/activate.php?activate=e9da8cc5245844be848a12c1692fd583" >Here</a>
  <table>
    <tr>
      <th>Person</th><th>Day</th><th>Month</th><th>Year</th>
    </tr>
    <tr>
      <td>Johny</td><td>10th</td><td>June</td><td>1970</td>
    </tr>
    <tr>
      <td>Sally</td><td>17th</td><td>June</td><td>1973</td>
    </tr>
  </table>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'To: Confidence <mukwindidzacp@gmail.com>';
$headers[] = 'From: Birthday Reminder <birthday@example.com>';
echo md5(md5(time().'jaggernaut'.rand(0,9999)));
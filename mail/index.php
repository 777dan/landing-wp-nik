<?php
// Несколько получателей
$to = 'danya.nikitin7@gmail.com' . ', '; // запятая как разделитель

$subject = 'Birthday Reminders for August';
$message = '
<html>
  <head>
    <title>Birthday Reminders for August</title>
  </head>
  <body>
    <p>Here are the birthdays upcoming in August!</p>
    <img src="http://php.web-online.net.ua/wp-content/uploads/2017/01/otpravka.png" alt="">
    <table>
      <tr>
        <th>Person</th><th>Day</th><th>Month</th><th>Year</th>
      </tr>
      <tr>
        <td>Joe</td><td>3rd</td><td>August</td><td>1970</td>
      </tr>
      <tr>
        <td>Sally</td><td>17th</td><td>August</td><td>1973</td>
      </tr>
    </table>
  </body>
</html>
';
// Заголовки:
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
// Дополнительные заголовки
$headers .= 'To: Mary <danya.nikitin7@gmail.com> ' . "\r\n";
$headers .= 'From: Birthday Reminder <danya-nikitin7@1gb.ua>' . "\r\n";
// Послать письмо
if (mail($to, $subject, $message, $headers)) {
  echo "OK";
} else {
  echo "Error";
}

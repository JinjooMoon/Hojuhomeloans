<?php
  session_start();
  include_once('./PHPMailer2/PHPMailerAutoload.php');
  echo "<meta charset='UTF-8'>";

  $gg_response = $_POST['g-recaptcha-response'];
  $ch = curl_init();		 
  curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS,"secret=6LfN95sbAAAAABYSacOKKw7gqpMgblyv6RZFFV_H&response=$gg_response&remoteip=".$_SERVER['REMOTE_ADDR']);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $server_output = curl_exec ($ch);
  $server_output = json_decode($server_output);
  curl_close ($ch);
  if($server_output->success == false) {
    echo "<script>
        alert('Captcha ERROR, Please try again.');
        window.location='./index.php';
        </script>";
    exit;
  } 

  $name = $_POST['name'];
  $company = $_POST['company'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $memo =  htmlspecialchars($_POST['memo']);
    
//   echo $name . "</br>";
//   echo $company . "</br>";
//   echo $email . "</br>";
//   echo $mobile . "</br>";
  date_default_timezone_set('Australia/Sydney');
  $date = date('d/m/Y h:i:s a', time());
  $to = $email;
  $subject = "[Hoju Home Loans] Thank you for your inquiry";
  $contents = "
  <!DOCTYPE html>
  <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <title>Hoju Home Loans</title>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='icon' href='favicon.ico' type='image/x-icon'>
        <link rel='preconnect' href='https://fonts.gstatic.com'>
        <link href='https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap' rel='stylesheet'>
        <link rel='icon' type='image/png' href='./img/favicon.png'>
        <style>
        * {
            font-family: 'Maven Pro', sans-serif;
            font-size: 13px;
            margin: 0;
            padding: 0;
            border: 0;
        }
        .body {
            background-color: #f7f7f7;
            width: 100%;
        }
        .container {
            min-width: 320px;
            max-width: 600px;
            background-color: white;
            padding: 1rem;
            margin: auto;
        }
        .header {
            width: 100%;
            border-bottom: 1px solid #dddddd;
            padding-bottom: 1rem;
        }        
        .header img {
            max-width: 100px;
        }
        .header p {
            text-align: right;
        }
        .intro h1 {
            font-size: 2rem;
            font-weight: 800;
            padding-top: 3rem;
            padding-bottom: 0.5rem;
        }
        .intro p {
            padding-left: 1rem;
            padding-right: 1rem;
            padding-bottom: 3rem;
        }
        .intro h1, .intro p {
            text-align: center;
        }
        .table-contents {
            width: 100%;
            padding-bottom: 3rem;
        }
        .table-contents th {
            
            border-bottom: 2px solid #eeeeee;
            padding: 0.3rem;
        }
        .table-contents td {
            padding: 0.5rem;
            border-bottom: 1px solid #eeeeee;
        }
        .table-contents td:first-child {
            width: 30%;
        }
        .table-contents td:last-child {
            text-align: left;
            width: 70%;
        }
        .footer {
            background-color: #32425F;
            padding: 2rem 1rem;
        }
        .footer p {
            color: white;
            text-align: center;
        }
        .info {
            margin-bottom: 1rem;
            width: 100%;
        }
        .info a:first-child {
            margin-right: 1rem;
        }
        .info .icon {
            max-width: 40px;
            padding-right: 0.5rem;
        }
        .info p {
            color: white;
        }
        .info .arrow {
            max-width: 30px;
        }
        .info table {
            border: 1px solid #eeeeee;
            min-width: 150px;
            cursor: pointer;
            background: transparent;
        }
        .table-sns,
        .table-mobile {
            margin: 0.5rem;
        }
    </style>
    </head>
    <body>
        <div class='body'>
            <section class='container'>
                <table class='header'>
                    <tr>
                        <td>
                            <img src='http://www.hojuhomeloans.com.au/img/logo.png' alt='logo'/>
                        </td>
                        <td>
                            <p>".$date."</p>
                        </td>
                    </tr>
                </table>
                <div class='intro'>
                    <h1>Thank you</h1>
                    <p>Thanks for your recent inquiry. We will be in touch shortly.</p>
                </div>
                <table class='table-contents'>
                    <tr>
                        <th colspan='2'></th>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td>".$name."</td>
                    </tr>
                    <tr>
                        <td>Business Name</td>
                        <td>".$company."</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>".$email."</td>
                    </tr>
                    <tr>
                        <td>Mobile</td>
                        <td>".$mobile."</td>
                    </tr>
                    <tr>
                        <td>Message</td>
                        <td>".$memo."</td>
                    </tr>
                </table>
            
            </section>
            <div class='container footer'>
                <table class='info'>
                    <tr>
                        <td>
                            <a href='http://pf.kakao.com/_pfxhnC'>
                                <table class='table-sns' align='right'>
                                    <tr>
                                        <td><img src='./img/iconKatalk.png' alt='icon' class='icon'/></td>
                                        <td><p class='color-white'>Kakaotalk</p></td>
                                        <td><img src='./img/iconArrow.png' alt='icon' class='arrow'/></td>
                                    </tr>
                                </table>
                            </a>
                        </td>
                        <td>
                            <a href='tel: 0289602362'>
                                <table class='table-mobile' align='left'>
                                    <tr>
                                        <td><img src='./img/iconPhone.png' alt='icon' class='icon'/></td>
                                        <td><p class='color-white'>Mobile</p></td>
                                        <td><img src='./img/iconArrow.png' alt='icon' class='arrow'/></td>
                                    </tr>
                                </table>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td colspan='2'>
                            <p>HOJU Home Loans | Australian Credit Representative Number : 509883</p>
                        </td>
                    </tr>
                </table>
            </div>  
        </div>
    </body>
  </html>
  ";
  function mailer($_fname, $f_mail, $f_to, $f_subject, $f_content, $f_type=1, $f_file="", $f_cc="", $f_bcc="") {
      if ($f_type != 1) $f_content = nl2br($f_content);
      // type : text=0, html=1, text+html=2
      $mail = new PHPMailer(); // defaults to using php "mail()"
      $mail->IsSMTP();
          //   $mail->SMTPDebug = 2;
      $mail->SMTPSecure = "ssl";
      $mail->SMTPAuth = true;
      $mail->Host = "mail.hojuhomeloans.com.au";
      $mail->Port = 465;
      $mail->Username = "hojuhome";
      $mail->Password = "4Uisre936G";
      $mail->CharSet = 'UTF-8';
      $mail->From = $f_mail;
      $mail->FromName = $f_name;
      $mail->Subject = $f_subject;
      $mail->AltBody = ""; // optional, comment out and test
      $mail->msgHTML($f_content);
      $mail->addAddress($f_to);
      $mail->SetFrom("info@hojuhomeloans.com.au", "Hoju Home Loans");
      if ($f_cc)
              $mail->addCC($f_cc);
      if ($f_bcc)
              $mail->addBCC($f_bcc);
      if ($f_file != "") {
              foreach ($f_file as $f) {
                  $mail->addAttachment($f['path'], $f['name']);
              }
      }
      if ( $mail->send() ) {
          $_SESSION["MailSent"] = "SUCCESS";
          echo "<script type='text/javascript'>window.top.location='./index.php';</script>"; 
          exit;
          
      } else {
          echo "Mail Failed";
      };
  }
  //보내는 사람 닉네임, 보내는 사람 메일, 받는 사람 메일, 제목, 내용
  mailer("Hoju Home Loans","info@hojuhomeloans.com.au", $to, $subject, $contents, 1, "", "info@hojuhomeloans.com.au", "pearlinaustralia@gmail.com");
?>
<?php

function get_date()
{
  return date('Y-m-d H:i:s', time());
}

function p($data)
{
  echo "<pre>";
  var_dump($data);
  echo "</pre>";
}

/**
 * 邮件发送函数
 */
function sendMail($to, $title, $content)
{
  Vendor('PHPMailer.PHPMailerAutoload');     
  $mail = new \PHPMailer(); //实例化
  $mail->IsSMTP(); // 启用SMTP
  $mail->Host=C('MAIL_HOST'); //smtp服务器的名称（这里以QQ邮箱为例）
  $mail->SMTPAuth = C('MAIL_SMTPAUTH'); //启用smtp认证
  $mail->Username = C('MAIL_USERNAME'); //你的邮箱名
  $mail->Password = C('MAIL_PASSWORD') ; //邮箱密码
  $mail->From = C('MAIL_FROM'); //发件人地址（也就是你的邮箱地址）
  $mail->FromName = C('MAIL_FROMNAME'); //发件人姓名
  $mail->AddAddress($to,"尊敬的客户");
  $mail->WordWrap = 50; //设置每行字符长度
  $mail->IsHTML(C('MAIL_ISHTML')); // 是否HTML格式邮件
  $mail->CharSet=C('MAIL_CHARSET'); //设置邮件编码
  $mail->Subject =$title; //邮件主题
  $mail->Body = $content; //邮件内容
  $mail->AltBody = "这是一个纯文本的身体在非营利的HTML电子邮件客户端"; //邮件正文不支持HTML的备用显示
  return($mail->Send());
}

/**
   * 备选发送邮件方法
   */
  function sendmailer()
  {
    header('Content-Type:text/html;Charset=utf-8');  
    Vendor('PHPMailer.PHPMailerAutoload'); 
    $mail = new \PHPMailer;
    $mail->isSMTP();                                      // 设置邮件使用SMTP  
    $mail->Host = 'smtp.qq.com';                          // 邮件服务器地址  
    $mail->SMTPAuth = true;                               // 启用SMTP身份验证  
    $mail->CharSet = "UTF-8";                             // 设置邮件编码  
    $mail->setLanguage('zh_cn');                          // 设置错误中文提示  
    $mail->Username = '136927705@qq.com';                 // SMTP 用户名，即个人的邮箱地址  
    $mail->Password = 'zuo15802346441.';                  // SMTP 密码，即个人的邮箱密码  
    $mail->SMTPSecure = 'tls';                            // 设置启用加密，注意：必须打开 php_openssl 模块  
    $mail->Priority = 3;                                  // 设置邮件优先级 1：高, 3：正常（默认）, 5：低  
    $mail->From = '136927705@qq.com';                     // 发件人邮箱地址  
    $mail->FromName = '李茹星';                           // 发件人名称  
    $mail->addAddress('yuanzuohang@qq.com', 'Lee');       // 添加接受者  
    $mail->addAddress('ellen@example.com');               // 添加多个接受者  
    $mail->addReplyTo('info@example.com', 'Information'); // 添加回复者  
    $mail->addCC('liruxing1715@sina.com');                // 添加抄送人  
    $mail->addCC('512848303@qq.com');                     // 添加多个抄送人  
    $mail->ConfirmReadingTo = '136927705@qq.com';     // 添加发送回执邮件地址，即当收件人打开邮件后，会询问是否发生回执  
    $mail->addBCC('734133239@qq.com');                    // 添加密送者，Mail Header不会显示密送者信息  
    $mail->WordWrap = 50;                                 // 设置自动换行50个字符  
    $mail->addAttachment('./1.jpg');                      // 添加附件  
    $mail->addAttachment('/tmp/image.jpg', 'one pic');    // 添加多个附件  
    $mail->isHTML(true);                                  // 设置邮件格式为HTML  
    $mail->Subject = 'Here is the 主题';  
    $mail->Body    = 'This is the HTML 信息 body <b>in bold!</b>. Time:'.date('Y-m-d H:i:s');  
    $mail->AltBody = 'This is the 主体 in plain text for non-HTML mail clients';  
      
    if(!$mail->send()) {  
        echo 'Message could not be sent.';  
        echo 'Mailer Error: ' . $mail->ErrorInfo;  
        exit;  
    }  
      
    echo 'Message has been sent';  
  }
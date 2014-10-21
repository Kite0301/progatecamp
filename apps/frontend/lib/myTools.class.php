<?php

class myTools
{
  // メール送信
  public static function sendMail($to, $subject, $body, $from = "info@prog-8.com", $fromname = "Progate運営事務局")
  {
    require_once(SF_ROOT_DIR.'/batch/PHPMailer_v5.1/class.phpmailer.php');      //ライブラリ読み込み
    mb_language("japanese");           //言語(日本語)
    mb_internal_encoding("UTF-8");     //内部エンコーディング(UTF-8)

    $mail = new PHPMailer();           //PHPMailerのインスタンス生成
    $mail->CharSet = "iso-2022-jp";    //文字コード設定
    $mail->Encoding = "7bit";          //エンコーディング

    $mail->IsSMTP();                        //「SMTPサーバーを使うよ」設定
    $mail->SMTPAuth = TRUE;                 //「SMTP認証を使うよ」設定
    $mail->SMTPSecure = "ssl";            // STARTTLSへの対応
    $mail->Username = "info@prog-8.com";
    $mail->Password = "zeroxone";
    $mail->Host = 'smtp.muumuu-mail.com';
    $mail->Port = 465;    // SMTPサーバーアドレス:ポート番号

    $mail->AddAddress($to);                                                               //宛先(To)をセット
    $mail->From = $from;                                                                  //差出人(From)をセット
    $mail->FromName = mb_encode_mimeheader(mb_convert_encoding($fromname,"JIS","UTF-8")); //差出人(From名)をセット
    $mail->Subject = mb_encode_mimeheader(mb_convert_encoding($subject,"JIS","UTF-8"));   //件名(Subject)をセット
    $mail->Body  = mb_convert_encoding($body,"JIS","UTF-8");                              //本文(Body)をセット
    //$mail->AddAttachment($attachfile);                                                   //添付ファイルをセット

    //メールを送信
    $mail->Send();
  }
}

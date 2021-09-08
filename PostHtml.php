<?php
require("info.php");
$fromName = $_POST['from_name'];
$fromAddress = $_POST['from_address'];
$replyAddress = $_POST['reply_address'];
$subject = $_POST['subject'];
$htmlBody = $_POST['html_body'];
$charset = $_POST['charset'];
$toName = $_POST['to_name'];
$toEmailAddress = $_POST['to_email_address'];
$attachmentsName = $_POST['attachments_name'];
$attachmentsType = $_POST['attachments_type'];
$attachmentsContent = $_POST['attachments_content'];
$postType = $_POST['post_type'];
$keyId = $_POST['key_id'];
$customParams = $_POST['custom_params'];

$apiName = "https://api.relateddigital.com/reste/api/post/PostHtml";

$json = array(
    "FromName" => $fromName,
    "FromAddress" => $fromAddress,
    "ReplyAddress" => $replyAddress,
    "Subject" => $subject,
    "HtmlBody" => $htmlBody,
    "Charset" => $charset,
    "ToName" => $toName,
    "ToEmailAddress" => $toEmailAddress,
    "Attachments" => array(
        array(
            "Name" => $attachmentsName,
            "Type" => $attachmentsType,
            "Content" => $attachmentsContent
        )
        ),
    "PostType" => $postType,
    "KeyId" => $keyId,
    "CustomParams" => $customParams,

);
$test = new Curl();
$test->Send($apiName,$json);
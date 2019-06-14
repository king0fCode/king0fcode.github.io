<?php
error_reporting(0);
$number = $_POST['numField'];
$username_length = $_POST['userField'];

function generate_emails($number, $username_length)
{
    if (is_numeric($number) && $number != 0) {
        if ($number > 1000) { //put hard limit on generate request
            $number = 1000;
        }
        $generated_email_addresses = array();
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $char_count = count($characters);
        $tld = array("io");
        for ($i = 0; $i < $number; $i++) {
            $randomName = '';
            for ($j = 0; $j < $username_length; $j++) {
                $randomName .= $characters[rand(0, strlen($characters) - 1)];
            }
            $k = array_rand($tld);
            $extension = $tld[$k];
            $fullAddress = $randomName . "@" . "codesyntaxer." . $extension;
            $generated_emails[] = $fullAddress;
            $email_count = count($generated_emails);

        }

    }

    foreach ($generated_emails as $arg) {
        echo $arg;
        echo "<br/>";

        $temp = file_get_contents('foo.txt');
        $temp .= "\n";
        $temp .= $arg;
        file_put_contents('foo.txt', $temp);
    }

    // header('Content-Type: text/txt; charset=utf-8');
    // header('Content-Disposition: attachment; filename=emails.txt');

    // $output = fopen('php://output', '\n');
    // print_r($output);
    // fputcsv($output, $generated_emails);

}

if (is_numeric($username_length) && $username_length <= 24 && $username_length != 0) {

    generate_emails($number, $username_length);

} else {
    $username_length = 12;
    generate_emails($number, $username_length);
}
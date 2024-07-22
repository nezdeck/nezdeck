<?php

include '../admin/conn.php';
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $desc = trim($_POST['desc']);
    
    // Validate fields
    if (empty($name) || empty($email) || empty($phone) || empty($desc)) {
        $json = [
        'success'=>false,
        'msg'=>"All fields are required.",
        ];
        echo json_encode($json);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $json = [
            'success'=>false,
            'msg'=>"Invalid Email Format",
            ];
            echo json_encode($json);
            exit;
    }

    if (strlen($phone) <=9) {
        $json = [
            'success'=>false,
            'msg'=>"Invalid Phone Format.",
            ];
            echo json_encode($json);
            exit;
    }

    $sql = "INSERT INTO contact (`full_name`, `email`, `phone`, `message`,`created_at`) VALUES (?, ?, ?, ?,NOW())";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $email, $phone, $desc);

    if ($stmt->execute()) {
        $json = [
            'success'=>true,
            'msg'=>"Your contact form has been successfully submitted! Our team will reach out to you shortly. Thank you!",
            ];
            echo json_encode($json);
            exit;
    } else {
        $json = [
            'success'=>false,
            'msg'=>$stmt->error,
            ];
            echo json_encode($json);
            exit;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request method.";
}
?>
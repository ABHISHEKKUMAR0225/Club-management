<?php
include 'includes/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize and validate input data
    $firstName = trim($_POST['firstName']);
    $lastName = trim($_POST['lastName']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $sport = trim($_POST['sport']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);
    
    // Basic validation
    $errors = [];
    
    if (empty($firstName)) {
        $errors[] = "First name is required";
    }
    
    if (empty($lastName)) {
        $errors[] = "Last name is required";
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email address is required";
    }
    
    if (empty($subject)) {
        $errors[] = "Subject is required";
    }
    
    if (empty($message)) {
        $errors[] = "Message is required";
    }
    
    if (empty($errors)) {
        // Prepare data for storage
        $contactData = [
            'timestamp' => date('Y-m-d H:i:s'),
            'firstName' => $firstName,
            'lastName' => $lastName,
            'email' => $email,
            'phone' => $phone,
            'sport' => $sport,
            'subject' => $subject,
            'message' => $message,
            'ip_address' => $_SERVER['REMOTE_ADDR']
        ];
        
        // Save to file (in a real application, you'd use a database)
        $dataDirectory = 'data';
        if (!file_exists($dataDirectory)) {
            mkdir($dataDirectory, 0755, true);
        }
        
        $filename = $dataDirectory . '/contacts.json';
        $contacts = [];
        
        if (file_exists($filename)) {
            $existingData = file_get_contents($filename);
            $contacts = json_decode($existingData, true) ?: [];
        }
        
        $contacts[] = $contactData;
        
        if (file_put_contents($filename, json_encode($contacts, JSON_PRETTY_PRINT))) {
            // Optional: Send email notification (commented out for basic implementation)
            /*
            $to = "sports@gecvaishali.ac.in";
            $emailSubject = "New Contact Form Submission: " . $subject;
            $emailBody = "New message from GEC Vaishali Sports Club website:\n\n";
            $emailBody .= "Name: $firstName $lastName\n";
            $emailBody .= "Email: $email\n";
            $emailBody .= "Phone: $phone\n";
            $emailBody .= "Sport Interest: $sport\n";
            $emailBody .= "Subject: $subject\n\n";
            $emailBody .= "Message:\n$message\n";
            
            $headers = "From: $email\r\n";
            $headers .= "Reply-To: $email\r\n";
            
            mail($to, $emailSubject, $emailBody, $headers);
            */
            
            header('Location: contact.php?success=1');
            exit;
        } else {
            header('Location: contact.php?error=1');
            exit;
        }
    } else {
        // If there are validation errors, redirect back with error
        header('Location: contact.php?error=1');
        exit;
    }
} else {
    // If not a POST request, redirect to contact form
    header('Location: contact.php');
    exit;
}
?>

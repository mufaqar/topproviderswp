<?php

function handle_form_submission() {
    // Check nonce for security (if added in the form)
    if (!isset($_POST['_wpnonce']) || !wp_verify_nonce($_POST['_wpnonce'], 'ajax_form_nonce')) {
        wp_send_json_error(['message' => 'Invalid nonce.']);
        wp_die();
    }

    // Collect form data
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $subject = sanitize_text_field($_POST['subject']);
    $comment = sanitize_textarea_field($_POST['comment']);

    // Send the email
    $to = get_option('admin_email'); // Admin email address
    $headers = ['Content-Type: text/html; charset=UTF-8', 'From: ' . $name . ' <' . $email . '>'];
    $message = "
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Phone:</strong> {$phone}</p>
        <p><strong>Subject:</strong> {$subject}</p>
        <p><strong>Comment:</strong><br>{$comment}</p>
    ";

    if (wp_mail($to, "New Form Submission: {$subject}", $message, $headers)) {
        wp_send_json_success(['message' => 'Email sent successfully!']);
    } else {
        wp_send_json_error(['message' => 'Failed to send email.']);
    }

    wp_die();
}
add_action('wp_ajax_submit_form', 'handle_form_submission');
add_action('wp_ajax_nopriv_submit_form', 'handle_form_submission');

<?php
// Initialize variables
$success_message = '';
$error_message = '';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data and sanitize inputs
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    
    // Validate inputs
    $errors = [];
    if (empty($name)) {
        $errors[] = "Name is required";
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required";
    }
    
    if (empty($subject)) {
        $errors[] = "Subject is required";
    }
    
    if (empty($message)) {
        $errors[] = "Message is required";
    }
    
    // If validation passes, send email
    if (empty($errors)) {
        $to = "info@rectocode.com";
        $email_subject = "Contact Form: $subject";
        
        // Prepare email body
        $email_body = "You have received a new message from your website contact form.\n\n";
        $email_body .= "Name: $name\n";
        $email_body .= "Email: $email\n";
        $email_body .= "Subject: $subject\n";
        $email_body .= "Message:\n$message\n";
        
        // Set email headers
        $headers = "From: $email\n";
        $headers .= "Reply-To: $email\n";
        
        // Send email
        $mail_success = mail($to, $email_subject, $email_body, $headers);
        
        if ($mail_success) {
            $success_message = "Thank you! Your message has been sent successfully.";
            
            // Reset form fields after successful submission
            $name = '';
            $email = '';
            $subject = '';
            $message = '';
        } else {
            $error_message = "Oops! Something went wrong. Please try again later.";
        }
    } else {
        $error_message = implode("<br>", $errors);
    }
}

// Include the header
include 'includes/header.php';
?>

<div class="pt-24 pb-12 bg-black bg-opacity-80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="text-3xl md:text-5xl font-bold mb-4">Get <span class="gradient-text">In Touch</span></h1>
            <p class="text-xl text-gray-400 max-w-3xl mx-auto">Ready to transform your digital presence? Let's discuss your project</p>
        </div>
        
        <?php if (!empty($success_message)): ?>
        <!-- Success Message -->
        <div class="max-w-3xl mx-auto mb-12 py-4 px-6 rounded-lg gradient-border bg-blue-900 bg-opacity-20 text-center">
            <p class="text-white"><?php echo $success_message; ?></p>
        </div>
        <?php endif; ?>
        
        <?php if (!empty($error_message)): ?>
        <!-- Error Message -->
        <div class="max-w-3xl mx-auto mb-12 py-4 px-6 rounded-lg border border-red-500 bg-red-900 bg-opacity-20 text-center">
            <p class="text-white"><?php echo $error_message; ?></p>
        </div>
        <?php endif; ?>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div>
                <h3 class="text-2xl font-bold mb-6">Contact Information</h3>
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="text-blue-400 text-xl mt-1 mr-4">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-white">Our Location</h4>
                            <p class="text-gray-400">123 Innovation Street, Tech Hub, San Francisco, CA 94103</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="text-blue-400 text-xl mt-1 mr-4">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-white">Email Us</h4>
                            <p class="text-gray-400">info@rectocode.com</p>
                            <p class="text-gray-400">support@rectocode.com</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="text-blue-400 text-xl mt-1 mr-4">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-white">Call Us</h4>
                            <p class="text-gray-400">+1 (555) 123-4567</p>
                            <p class="text-gray-400">+1 (555) 987-6543</p>
                        </div>
                    </div>
                    
                    <div class="pt-6">
                        <h4 class="font-bold text-white mb-4">Follow Us</h4>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">
                                <i class="fab fa-twitter text-xl"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">
                                <i class="fab fa-facebook text-xl"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">
                                <i class="fab fa-linkedin text-xl"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">
                                <i class="fab fa-instagram text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Map -->
                <div class="mt-12 rounded-lg overflow-hidden gradient-border h-64">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50469.90053059388!2d-122.43932886206209!3d37.76324193746742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan%20Francisco%2C%20CA%2C%20USA!5e0!3m2!1sen!2sph!4v1661744518658!5m2!1sen!2sph" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            
            <div>
                <h3 class="text-2xl font-bold mb-6">Send Us a Message</h3>
                <form action="/contact" method="POST" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-gray-400 mb-2">Your Name</label>
                            <input type="text" id="name" name="name" value="<?php echo isset($name) ? htmlspecialchars($name) : ''; ?>" class="w-full bg-gray-900 border border-gray-700 rounded-md py-3 px-4 text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="email" class="block text-gray-400 mb-2">Your Email</label>
                            <input type="email" id="email" name="email" value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>" class="w-full bg-gray-900 border border-gray-700 rounded-md py-3 px-4 text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>
                    
                    <div>
                        <label for="subject" class="block text-gray-400 mb-2">Subject</label>
                        <input type="text" id="subject" name="subject" value="<?php echo isset($subject) ? htmlspecialchars($subject) : ''; ?>" class="w-full bg-gray-900 border border-gray-700 rounded-md py-3 px-4 text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    
                    <div>
                        <label for="message" class="block text-gray-400 mb-2">Your Message</label>
                        <textarea id="message" name="message" rows="5" class="w-full bg-gray-900 border border-gray-700 rounded-md py-3 px-4 text-white focus:outline-none focus:ring-2 focus:ring-blue-500"><?php echo isset($message) ? htmlspecialchars($message) : ''; ?></textarea>
                    </div>
                    
                    <div>
                        <button type="submit" class="px-6 py-3 rounded-md bg-gradient-to-r from-blue-600 to-blue-400 text-white font-medium hover:from-blue-500 hover:to-blue-300 transition-all duration-300 transform hover:scale-105 w-full md:w-auto">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
// Include the footer
include 'includes/footer.php';
?> 
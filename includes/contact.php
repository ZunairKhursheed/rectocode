<!-- Contact Form Section -->
<section id="contact" class="py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-5xl font-bold mb-4">Let's <span class="gradient-text">Connect</span></h2>
            <p class="text-xl text-gray-400 max-w-3xl mx-auto">Ready to start your next project? Reach out to our team and let's create something amazing together.</p>
        </div>
        
        <?php
        // Check if form is submitted on the homepage
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['homepage_contact'])) {
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
                $email_subject = "Homepage Contact Form: $subject";
                
                // Prepare email body
                $email_body = "You have received a new message from your website homepage contact form.\n\n";
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
                    echo '<div class="max-w-3xl mx-auto mb-12 py-4 px-6 rounded-lg gradient-border bg-blue-900 bg-opacity-20 text-center">';
                    echo '<p class="text-white">Thank you! Your message has been sent successfully.</p>';
                    echo '</div>';
                } else {
                    echo '<div class="max-w-3xl mx-auto mb-12 py-4 px-6 rounded-lg border border-red-500 bg-red-900 bg-opacity-20 text-center">';
                    echo '<p class="text-white">Oops! Something went wrong. Please try again later.</p>';
                    echo '</div>';
                }
            } else {
                echo '<div class="max-w-3xl mx-auto mb-12 py-4 px-6 rounded-lg border border-red-500 bg-red-900 bg-opacity-20 text-center">';
                echo '<p class="text-white">' . implode("<br>", $errors) . '</p>';
                echo '</div>';
            }
        }
        ?>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 max-w-6xl mx-auto">
            <div class="bg-gray-900 bg-opacity-70 rounded-lg p-8 gradient-border">
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
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="bg-gray-900 bg-opacity-70 rounded-lg p-8 gradient-border">
                <h3 class="text-2xl font-bold mb-6">Send a Message</h3>
                <form action="/" method="POST" class="space-y-6">
                    <input type="hidden" name="homepage_contact" value="1">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-gray-400 mb-2">Your Name</label>
                            <input type="text" id="name" name="name" class="w-full bg-gray-900 border border-gray-700 rounded-md py-3 px-4 text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="email" class="block text-gray-400 mb-2">Your Email</label>
                            <input type="email" id="email" name="email" class="w-full bg-gray-900 border border-gray-700 rounded-md py-3 px-4 text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>
                    
                    <div>
                        <label for="subject" class="block text-gray-400 mb-2">Subject</label>
                        <input type="text" id="subject" name="subject" class="w-full bg-gray-900 border border-gray-700 rounded-md py-3 px-4 text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    
                    <div>
                        <label for="message" class="block text-gray-400 mb-2">Your Message</label>
                        <textarea id="message" name="message" rows="5" class="w-full bg-gray-900 border border-gray-700 rounded-md py-3 px-4 text-white focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
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
</section> 
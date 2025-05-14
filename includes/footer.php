<!-- Footer -->
<footer class="py-12 bg-black border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <a href="<?php echo Config::url(''); ?>" class="flex items-center mb-4">
                    <img src="assets/images/Horizontal Logo.png" alt="Recto Code Logo" class="w-auto h-10 ">
                </a>
                <p class="text-gray-400">Transforming businesses through innovative software solutions.</p>
                
                <div class="mt-6 flex space-x-4">
                    <a href="https://x.com/Rectocode?t=LO0E3Yl7OYDoWatnP4dg6Q&s=08" target="_blank" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=61575620378244&mibextid=ZbWKwL" target="_blank" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="https://www.linkedin.com/company/recto-code-official/posts/?feedView=all" target="_blank" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <!-- <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">
                        <i class="fab fa-github"></i>
                    </a> -->
                </div>
            </div>
            
            <div>
                <h3 class="text-lg font-bold mb-6">Services</h3>
                <ul class="space-y-4">
                    <?php
                    // Include service data if not already included
                    if (!function_exists('get_all_services')) {
                        include 'service-data.php';
                    }
                    $all_services = get_all_services();
                    
                    // Display each service as a link
                    foreach ($all_services as $slug => $service) {
                        echo '<li><a href="' . Config::url($slug) . '" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">' . $service['title'] . '</a></li>';
                    }
                    ?>
                </ul>
            </div>
            
            <div>
                <h3 class="text-lg font-bold mb-6">Quick Links</h3>
                <ul class="space-y-4">
                    <li><a href="<?php echo Config::url(''); ?>" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">Home</a></li>
                    <li><a href="<?php echo Config::url('about'); ?>" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">About</a></li>
                    <li><a href="<?php echo Config::url('services'); ?>" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">Services</a></li>
                    <li><a href="<?php echo Config::url('projects'); ?>" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">Projects</a></li>
                    <li><a href="<?php echo Config::url('contact'); ?>" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">Contact</a></li>
                </ul>
            </div>
            
            <div>
                <h3 class="text-lg font-bold mb-6">Contact Us</h3>
                <ul class="space-y-4">
                    <!-- <li class="flex items-start">
                        <i class="fas fa-map-marker-alt text-blue-400 mt-1 mr-3"></i>
                        <span class="text-gray-400">123 Innovation Street, Tech Hub, San Francisco, CA 94103</span>
                    </li> -->
                    <li class="flex items-start">
                        <i class="fas fa-envelope text-blue-400 mt-1 mr-3"></i>
                        <span class="text-gray-400">info@rectocode.com</span>
                    </li>
                    <!-- <li class="flex items-start">
                        <i class="fas fa-phone-alt text-blue-400 mt-1 mr-3"></i>
                        <span class="text-gray-400">+1 (555) 123-4567</span>
                    </li> -->
                </ul>
            </div>
        </div>
        
        <div class="mt-12 pt-8 border-t border-gray-800 text-center text-gray-400">
            <p>&copy; <?php echo date('Y'); ?> Recto Code. All rights reserved.</p>
            <p class="mt-2">
                <a href="<?php echo Config::url('privacy-policy'); ?>" class="text-gray-400 hover:text-blue-400 transition-colors duration-300 mx-2">Privacy Policy</a> | 
                <a href="<?php echo Config::url('terms'); ?>" class="text-gray-400 hover:text-blue-400 transition-colors duration-300 mx-2">Terms & Conditions</a>
            </p>
        </div>
    </div>
</footer>

<!-- Custom JS -->
<script src="<?php echo Config::url('assets/js/main.js'); ?>"></script>
</body>
</html> 
<!-- Footer -->
<footer class="py-12 bg-black border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 rounded-full gradient-border flex items-center justify-center">
                        <span class="text-xl font-bold" style="background: linear-gradient(90deg, #065ca9 0%, #4fc3f7 100%); -webkit-background-clip: text; background-clip: text; color: transparent;">RC</span>
                    </div>
                    <span class="ml-3 text-xl font-bold text-white">RECTO <span class="gradient-text">CODE</span></span>
                </div>
                <p class="text-gray-400">Transforming businesses through innovative software solutions.</p>
                
                <div class="mt-6 flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
            </div>
            
            <div>
                <h3 class="text-lg font-bold mb-6">Services</h3>
                <ul class="space-y-4">
                    <li><a href="<?php echo Config::url('custom-software'); ?>" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">Custom Software Development</a></li>
                    <li><a href="<?php echo Config::url('mobile-app'); ?>" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">Mobile App Development</a></li>
                    <li><a href="<?php echo Config::url('web-dev'); ?>" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">Web Development</a></li>
                    <li><a href="<?php echo Config::url('cloud'); ?>" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">Cloud Solutions</a></li>
                    <li><a href="<?php echo Config::url('ai-ml'); ?>" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">AI & Machine Learning</a></li>
                    <li><a href="<?php echo Config::url('digital-transformation'); ?>" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">Digital Transformation</a></li>
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
                    <li class="flex items-start">
                        <i class="fas fa-map-marker-alt text-blue-400 mt-1 mr-3"></i>
                        <span class="text-gray-400">123 Innovation Street, Tech Hub, San Francisco, CA 94103</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-envelope text-blue-400 mt-1 mr-3"></i>
                        <span class="text-gray-400">info@rectocode.com</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-phone-alt text-blue-400 mt-1 mr-3"></i>
                        <span class="text-gray-400">+1 (555) 123-4567</span>
                    </li>
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
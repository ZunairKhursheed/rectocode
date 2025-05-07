<?php
// Set the service key for this page
$service_key = 'web-development';
$page_title = 'Web Development';

// Include the header
include 'includes/header.php';

// Include the service template
include 'includes/service-template.php';
?>

<!-- Features section -->
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-gray-900 bg-opacity-70">
    <div class="max-w-5xl mx-auto">
        <h2 class="text-3xl font-bold mb-12 text-center">Our <span class="gradient-text">Web Development</span> Expertise</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-12">
            <div class="p-6 rounded-lg bg-gray-800 bg-opacity-70">
                <h3 class="text-xl font-bold mb-3">Responsive Design</h3>
                <p class="text-gray-400">Websites that look and work perfectly on all devices, from desktops to smartphones.</p>
            </div>
            
            <div class="p-6 rounded-lg bg-gray-800 bg-opacity-70">
                <h3 class="text-xl font-bold mb-3">E-commerce Solutions</h3>
                <p class="text-gray-400">Custom online stores with secure payment processing and inventory management.</p>
            </div>
            
            <div class="p-6 rounded-lg bg-gray-800 bg-opacity-70">
                <h3 class="text-xl font-bold mb-3">Content Management</h3>
                <p class="text-gray-400">Easy-to-use CMS solutions that let you update content without technical knowledge.</p>
            </div>
            
            <div class="p-6 rounded-lg bg-gray-800 bg-opacity-70">
                <h3 class="text-xl font-bold mb-3">Performance Optimization</h3>
                <p class="text-gray-400">Fast-loading websites optimized for search engines and user experience.</p>
            </div>
        </div>
    </div>
</section>

<!-- Related Services section -->
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-gray-800 bg-opacity-50">
    <div class="max-w-5xl mx-auto">
        <h2 class="text-2xl font-bold mb-8 text-center">Related <span class="gradient-text">Services</span></h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <a href="ui-ux-design.php" class="p-6 rounded-lg gradient-border bg-gray-900 bg-opacity-70 transition-all duration-300 hover:scale-105">
                <div class="mb-4 text-blue-400 text-3xl">
                    <i class="fas fa-desktop"></i>
                </div>
                <h3 class="text-lg font-bold mb-3">UI/UX Design</h3>
                <p class="text-gray-400">Clean, intuitive designs for better user experiences.</p>
            </a>
            
            <a href="digital-marketing.php" class="p-6 rounded-lg gradient-border bg-gray-900 bg-opacity-70 transition-all duration-300 hover:scale-105">
                <div class="mb-4 text-blue-400 text-3xl">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3 class="text-lg font-bold mb-3">Digital Marketing</h3>
                <p class="text-gray-400">Strategies to drive traffic to your website and convert visitors.</p>
            </a>
            
            <a href="mobile-app.php" class="p-6 rounded-lg gradient-border bg-gray-900 bg-opacity-70 transition-all duration-300 hover:scale-105">
                <div class="mb-4 text-blue-400 text-3xl">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3 class="text-lg font-bold mb-3">Mobile App Development</h3>
                <p class="text-gray-400">Extend your web presence with a mobile application.</p>
            </a>
        </div>
    </div>
</section>

<?php
// Include the footer
include 'includes/footer.php';
?> 
<?php
// Set the service key for this page
$service_key = 'ui-ux-design';
$page_title = 'UI/UX Design';

// Include the header
include 'includes/header.php';

// Include the service template
include 'includes/service-template.php';
?>

<!-- Benefits section -->
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-gray-900 bg-opacity-70">
    <div class="max-w-5xl mx-auto">
        <h2 class="text-3xl font-bold mb-12 text-center">Benefits of <span class="gradient-text">UI/UX Design</span></h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-12">
            <div class="p-6 rounded-lg bg-gray-800 bg-opacity-70">
                <h3 class="text-xl font-bold mb-3">Improved User Experience</h3>
                <p class="text-gray-400">Create intuitive interfaces that help users accomplish their goals with minimal effort.</p>
            </div>
            
            <div class="p-6 rounded-lg bg-gray-800 bg-opacity-70">
                <h3 class="text-xl font-bold mb-3">Increased Engagement</h3>
                <p class="text-gray-400">Keep users engaged with your product through thoughtful design and interactive elements.</p>
            </div>
            
            <div class="p-6 rounded-lg bg-gray-800 bg-opacity-70">
                <h3 class="text-xl font-bold mb-3">Higher Conversion Rates</h3>
                <p class="text-gray-400">Strategic design that guides users toward desired actions and improves conversion.</p>
            </div>
            
            <div class="p-6 rounded-lg bg-gray-800 bg-opacity-70">
                <h3 class="text-xl font-bold mb-3">Brand Consistency</h3>
                <p class="text-gray-400">Maintain a cohesive visual identity across all touchpoints for stronger brand recognition.</p>
            </div>
        </div>
    </div>
</section>

<!-- Related Services section -->
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-gray-800 bg-opacity-50">
    <div class="max-w-5xl mx-auto">
        <h2 class="text-2xl font-bold mb-8 text-center">Related <span class="gradient-text">Services</span></h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <a href="web-development.php" class="p-6 rounded-lg gradient-border bg-gray-900 bg-opacity-70 transition-all duration-300 hover:scale-105">
                <div class="mb-4 text-blue-400 text-3xl">
                    <i class="fas fa-globe"></i>
                </div>
                <h3 class="text-lg font-bold mb-3">Web Development</h3>
                <p class="text-gray-400">Fast and modern websites to grow your online presence.</p>
            </a>
            
            <a href="mobile-app.php" class="p-6 rounded-lg gradient-border bg-gray-900 bg-opacity-70 transition-all duration-300 hover:scale-105">
                <div class="mb-4 text-blue-400 text-3xl">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3 class="text-lg font-bold mb-3">Mobile App Development</h3>
                <p class="text-gray-400">User-friendly apps for Android and iPhone.</p>
            </a>
            
            <a href="custom-software.php" class="p-6 rounded-lg gradient-border bg-gray-900 bg-opacity-70 transition-all duration-300 hover:scale-105">
                <div class="mb-4 text-blue-400 text-3xl">
                    <i class="fas fa-code"></i>
                </div>
                <h3 class="text-lg font-bold mb-3">Custom Software</h3>
                <p class="text-gray-400">Purpose-built solutions tailored to your business needs.</p>
            </a>
        </div>
    </div>
</section>

<?php
// Include the footer
include 'includes/footer.php';
?> 
<?php
// Set the service key for this page
$service_key = 'mobile-app';
$page_title = 'Mobile App Development';

// Include the header
include 'includes/header.php';

// Include the service template
include 'includes/service-template.php';
?>

<!-- Features section -->
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-gray-900 bg-opacity-70">
    <div class="max-w-5xl mx-auto">
        <h2 class="text-3xl font-bold mb-12 text-center">Mobile App <span class="gradient-text">Development</span> Services</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-12">
            <div class="p-6 rounded-lg bg-gray-800 bg-opacity-70">
                <h3 class="text-xl font-bold mb-3">Native iOS Development</h3>
                <p class="text-gray-400">High-performance apps built specifically for Apple's ecosystem using Swift.</p>
            </div>
            
            <div class="p-6 rounded-lg bg-gray-800 bg-opacity-70">
                <h3 class="text-xl font-bold mb-3">Native Android Development</h3>
                <p class="text-gray-400">Android apps optimized for the diverse range of Android devices using Kotlin.</p>
            </div>
            
            <div class="p-6 rounded-lg bg-gray-800 bg-opacity-70">
                <h3 class="text-xl font-bold mb-3">Cross-Platform Solutions</h3>
                <p class="text-gray-400">Cost-effective apps that work on both platforms using React Native or Flutter.</p>
            </div>
            
            <div class="p-6 rounded-lg bg-gray-800 bg-opacity-70">
                <h3 class="text-xl font-bold mb-3">App Maintenance & Updates</h3>
                <p class="text-gray-400">Ongoing support to keep your app running smoothly and up-to-date.</p>
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
                <p class="text-gray-400">Intuitive and engaging mobile interfaces.</p>
            </a>
            
            <a href="web-development.php" class="p-6 rounded-lg gradient-border bg-gray-900 bg-opacity-70 transition-all duration-300 hover:scale-105">
                <div class="mb-4 text-blue-400 text-3xl">
                    <i class="fas fa-globe"></i>
                </div>
                <h3 class="text-lg font-bold mb-3">Web Development</h3>
                <p class="text-gray-400">Complement your mobile app with a web presence.</p>
            </a>
            
            <a href="ai-agent.php" class="p-6 rounded-lg gradient-border bg-gray-900 bg-opacity-70 transition-all duration-300 hover:scale-105">
                <div class="mb-4 text-blue-400 text-3xl">
                    <i class="fas fa-robot"></i>
                </div>
                <h3 class="text-lg font-bold mb-3">AI Agent Integration</h3>
                <p class="text-gray-400">Add intelligent features to your mobile application.</p>
            </a>
        </div>
    </div>
</section>

<?php
// Include the footer
include 'includes/footer.php';
?> 
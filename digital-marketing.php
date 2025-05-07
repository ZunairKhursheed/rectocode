<?php
// Set the service key for this page
$service_key = 'digital-marketing';
$page_title = 'Digital Marketing';

// Include the header
include 'includes/header.php';

// Include the service template
include 'includes/service-template.php';
?>

<!-- Features section -->
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-gray-900 bg-opacity-70">
    <div class="max-w-5xl mx-auto">
        <h2 class="text-3xl font-bold mb-12 text-center">Digital <span class="gradient-text">Marketing</span> Services</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-12">
            <div class="p-6 rounded-lg bg-gray-800 bg-opacity-70">
                <h3 class="text-xl font-bold mb-3">Search Engine Optimization</h3>
                <p class="text-gray-400">Improve your visibility in search results to drive more organic traffic.</p>
            </div>
            
            <div class="p-6 rounded-lg bg-gray-800 bg-opacity-70">
                <h3 class="text-xl font-bold mb-3">Social Media Marketing</h3>
                <p class="text-gray-400">Build your brand and engage with customers across social media platforms.</p>
            </div>
            
            <div class="p-6 rounded-lg bg-gray-800 bg-opacity-70">
                <h3 class="text-xl font-bold mb-3">Paid Advertising</h3>
                <p class="text-gray-400">Targeted ads on search engines and social platforms to reach your ideal audience.</p>
            </div>
            
            <div class="p-6 rounded-lg bg-gray-800 bg-opacity-70">
                <h3 class="text-xl font-bold mb-3">Content Marketing</h3>
                <p class="text-gray-400">Valuable content that attracts, engages, and converts your target audience.</p>
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
                <p class="text-gray-400">Optimize your website for marketing performance.</p>
            </a>
            
            <a href="ui-ux-design.php" class="p-6 rounded-lg gradient-border bg-gray-900 bg-opacity-70 transition-all duration-300 hover:scale-105">
                <div class="mb-4 text-blue-400 text-3xl">
                    <i class="fas fa-desktop"></i>
                </div>
                <h3 class="text-lg font-bold mb-3">UI/UX Design</h3>
                <p class="text-gray-400">Create conversion-focused user experiences.</p>
            </a>
            
            <a href="mobile-app.php" class="p-6 rounded-lg gradient-border bg-gray-900 bg-opacity-70 transition-all duration-300 hover:scale-105">
                <div class="mb-4 text-blue-400 text-3xl">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3 class="text-lg font-bold mb-3">Mobile App Development</h3>
                <p class="text-gray-400">Expand your reach with mobile applications.</p>
            </a>
        </div>
    </div>
</section>

<?php
// Include the footer
include 'includes/footer.php';
?> 
<?php
// Set the service key for this page
$service_key = 'custom-software';
$page_title = 'Custom Software Development';

// Include the header
include 'includes/header.php';

// Include the service template
include 'includes/service-template.php';
?>

<!-- Benefits section -->
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-gray-900 bg-opacity-70">
    <div class="max-w-5xl mx-auto">
        <h2 class="text-3xl font-bold mb-12 text-center">Benefits of <span class="gradient-text">Custom Software</span></h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-12">
            <div class="p-6 rounded-lg bg-gray-800 bg-opacity-70">
                <h3 class="text-xl font-bold mb-3">Tailored Solutions</h3>
                <p class="text-gray-400">Custom software built specifically for your unique business requirements.</p>
            </div>
            
            <div class="p-6 rounded-lg bg-gray-800 bg-opacity-70">
                <h3 class="text-xl font-bold mb-3">Increased Efficiency</h3>
                <p class="text-gray-400">Streamline workflows and automate repetitive tasks to save time and reduce errors.</p>
            </div>
            
            <div class="p-6 rounded-lg bg-gray-800 bg-opacity-70">
                <h3 class="text-xl font-bold mb-3">Competitive Advantage</h3>
                <p class="text-gray-400">Stand out from competitors with unique capabilities that off-the-shelf solutions don't provide.</p>
            </div>
            
            <div class="p-6 rounded-lg bg-gray-800 bg-opacity-70">
                <h3 class="text-xl font-bold mb-3">Scalability</h3>
                <p class="text-gray-400">Grow your software alongside your business, adding new features as needed.</p>
            </div>
        </div>
    </div>
</section>

<!-- Related Services section -->
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-gray-800 bg-opacity-50">
    <div class="max-w-5xl mx-auto">
        <h2 class="text-2xl font-bold mb-8 text-center">Related <span class="gradient-text">Services</span></h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <a href="ai-agent.php" class="p-6 rounded-lg gradient-border bg-gray-900 bg-opacity-70 transition-all duration-300 hover:scale-105">
                <div class="mb-4 text-blue-400 text-3xl">
                    <i class="fas fa-robot"></i>
                </div>
                <h3 class="text-lg font-bold mb-3">AI Agent Development</h3>
                <p class="text-gray-400">AI tools that automate tasks and make your work smarter.</p>
            </a>
            
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
        </div>
    </div>
</section>

<?php
// Include the footer
include 'includes/footer.php';
?> 
<?php
// Set the service key for this page
$service_key = 'ai-agent';
$page_title = 'AI Agent Development';

// Include the header
include 'includes/header.php';

// Include the service template
include 'includes/service-template.php';
?>

<!-- Features section -->
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-gray-900 bg-opacity-70">
    <div class="max-w-5xl mx-auto">
        <h2 class="text-3xl font-bold mb-12 text-center">AI Agent <span class="gradient-text">Development</span></h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-12">
            <div class="p-6 rounded-lg bg-gray-800 bg-opacity-70">
                <h3 class="text-xl font-bold mb-3">Chatbots & Virtual Assistants</h3>
                <p class="text-gray-400">Intelligent conversational agents that help your customers or automate internal processes.</p>
            </div>
            
            <div class="p-6 rounded-lg bg-gray-800 bg-opacity-70">
                <h3 class="text-xl font-bold mb-3">Custom AI Solutions</h3>
                <p class="text-gray-400">AI systems designed to solve specific business problems and automate complex tasks.</p>
            </div>
            
            <div class="p-6 rounded-lg bg-gray-800 bg-opacity-70">
                <h3 class="text-xl font-bold mb-3">Process Automation</h3>
                <p class="text-gray-400">Intelligent workflows that save time by handling routine tasks without human intervention.</p>
            </div>
            
            <div class="p-6 rounded-lg bg-gray-800 bg-opacity-70">
                <h3 class="text-xl font-bold mb-3">Data Analysis</h3>
                <p class="text-gray-400">AI-powered insights that help you make better decisions based on your data.</p>
            </div>
        </div>
    </div>
</section>

<!-- Related Services section -->
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-gray-800 bg-opacity-50">
    <div class="max-w-5xl mx-auto">
        <h2 class="text-2xl font-bold mb-8 text-center">Related <span class="gradient-text">Services</span></h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <a href="custom-software.php" class="p-6 rounded-lg gradient-border bg-gray-900 bg-opacity-70 transition-all duration-300 hover:scale-105">
                <div class="mb-4 text-blue-400 text-3xl">
                    <i class="fas fa-code"></i>
                </div>
                <h3 class="text-lg font-bold mb-3">Custom Software</h3>
                <p class="text-gray-400">Integrate AI capabilities into bespoke software solutions.</p>
            </a>
            
            <a href="web-development.php" class="p-6 rounded-lg gradient-border bg-gray-900 bg-opacity-70 transition-all duration-300 hover:scale-105">
                <div class="mb-4 text-blue-400 text-3xl">
                    <i class="fas fa-globe"></i>
                </div>
                <h3 class="text-lg font-bold mb-3">Web Development</h3>
                <p class="text-gray-400">Enhance your website with AI-powered features.</p>
            </a>
            
            <a href="mobile-app.php" class="p-6 rounded-lg gradient-border bg-gray-900 bg-opacity-70 transition-all duration-300 hover:scale-105">
                <div class="mb-4 text-blue-400 text-3xl">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3 class="text-lg font-bold mb-3">Mobile App Development</h3>
                <p class="text-gray-400">Add intelligent features to your mobile applications.</p>
            </a>
        </div>
    </div>
</section>

<?php
// Include the footer
include 'includes/footer.php';
?> 
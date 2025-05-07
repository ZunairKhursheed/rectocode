<?php
// Set the service key for this page
$service_key = 'custom-software';
$page_title = 'Custom Software Development';

// Include the header
include 'includes/header.php';

// Include the service template
include 'includes/service-template.php';

// Highlight section for Custom Software Development
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-gray-900 bg-opacity-70">
    <div class="max-w-5xl mx-auto">
        <div class="mb-12 text-center">
            <div class="mb-6 text-blue-400 text-6xl">
                <i class="fas fa-code"></i>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Custom <span class="gradient-text">Software</span> Development</h2>
            <p class="text-xl text-gray-400 max-w-3xl mx-auto">Software made just for your business to help you work better and save time.</p>
        </div>
        
        <!-- Benefits section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-12">
            <div class="p-6 rounded-lg bg-gray-800 bg-opacity-70">
                <h3 class="text-xl font-bold mb-3">Tailored Solutions</h3>
                <p class="text-gray-400">Custom software built specifically for your unique business requirements.</p>
            </div>
            <!-- Add more benefits as needed -->
        </div>
    </div>
</section>

// Include the footer
include 'includes/footer.php';
?> 
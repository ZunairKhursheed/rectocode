<?php
// Set the service key for this page
$service_key = 'digital-transformation';
$page_title = 'Digital Transformation';

// Include the header
include 'includes/header.php';

// Include the service template
include 'includes/service-template.php';

// Digital Transformation Overview
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-gray-900 bg-opacity-70">
    <div class="max-w-5xl mx-auto">
        <div class="mb-12 text-center">
            <div class="mb-6 text-blue-400 text-6xl">
                <i class="fas fa-digital-tachograph"></i>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Digital <span class="gradient-text">Transformation</span></h2>
            <p class="text-xl text-gray-400 max-w-3xl mx-auto">Modernize your business operations with cutting-edge digital solutions.</p>
        </div>
        
        <!-- Services that support digital transformation -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
            <!-- Include relevant services from your service list -->
            <div class="p-6 rounded-lg gradient-border bg-gray-900 bg-opacity-70">
                <div class="mb-4 text-blue-400 text-3xl">
                    <i class="fas fa-code"></i>
                </div>
                <h3 class="text-lg font-bold mb-3">Custom Software</h3>
                <p class="text-gray-400">Purpose-built solutions to streamline your operations.</p>
            </div>
            
            <div class="p-6 rounded-lg gradient-border bg-gray-900 bg-opacity-70">
                <div class="mb-4 text-blue-400 text-3xl">
                    <i class="fas fa-robot"></i>
                </div>
                <h3 class="text-lg font-bold mb-3">AI Integration</h3>
                <p class="text-gray-400">AI tools that enhance your decision-making and automate routine tasks.</p>
            </div>
            
            <div class="p-6 rounded-lg gradient-border bg-gray-900 bg-opacity-70">
                <div class="mb-4 text-blue-400 text-3xl">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3 class="text-lg font-bold mb-3">Analytics</h3>
                <p class="text-gray-400">Data-driven insights to guide your digital strategy.</p>
            </div>
        </div>
    </div>
</section>

// Include the footer
include 'includes/footer.php';
?> 
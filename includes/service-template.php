<?php
// This file serves as a template for individual service pages
// $service_key should be defined before including this file

// Include service data if not already included
if (!function_exists('get_service')) {
    include 'service-data.php';
}

// Get current service data
$service = get_service($service_key);

// Fallback if service doesn't exist
if (!$service) {
    echo '<div class="py-20 text-center">Service not found</div>';
    return;
}

// Set default values if not provided
if (!isset($service['description'])) {
    $service['description'] = $service['short_desc'];
}

// Default features and process if not set
if (!isset($service['features'])) {
    $service['features'] = [
        'Customized Solutions',
        'Expert Implementation',
        'Quality Assurance',
        'Ongoing Support'
    ];
}

if (!isset($service['process'])) {
    $service['process'] = [
        'Discovery & Planning',
        'Design & Development',
        'Testing & Refinement',
        'Deployment & Support'
    ];
}
?>

<!-- Service Hero -->
<section class="py-24 px-4 sm:px-6 lg:px-8 bg-gray-900 bg-opacity-80">
    <div class="max-w-5xl mx-auto text-center">
        <div class="mb-6 text-<?php echo $service['color']; ?> text-6xl">
            <i class="<?php echo $service['icon']; ?>"></i>
        </div>
        <h1 class="text-4xl md:text-5xl font-bold mb-6"><?php echo $service['title']; ?></h1>
        <p class="text-xl text-gray-400 max-w-3xl mx-auto"><?php echo $service['short_desc']; ?></p>
    </div>
</section>

<div class="pt-24 pb-12 bg-gray-900 bg-opacity-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Individual Service Page -->
        <div class="text-center mb-12">
            <div class="inline-block text-blue-400 text-4xl mb-4">
                <i class="<?php echo $service['icon']; ?>"></i>
            </div>
            <h1 class="text-3xl md:text-5xl font-bold mb-4"><?php echo $service['title']; ?></h1>
            <p class="text-xl text-gray-400 max-w-3xl mx-auto"><?php echo $service['description']; ?></p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mt-16">
            <!-- Features -->
            <div class="bg-gray-900 bg-opacity-70 rounded-lg p-8 gradient-border">
                <h2 class="text-2xl font-bold mb-6">Key Features</h2>
                <ul class="space-y-4">
                    <?php foreach ($service['features'] as $feature): ?>
                        <li class="flex items-start">
                            <span class="text-blue-400 mr-3">
                                <i class="fas fa-check-circle"></i>
                            </span>
                            <span class="text-gray-300"><?php echo $feature; ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            
            <!-- Process -->
            <div class="bg-gray-900 bg-opacity-70 rounded-lg p-8 gradient-border">
                <h2 class="text-2xl font-bold mb-6">Our Process</h2>
                <ol class="space-y-6">
                    <?php foreach ($service['process'] as $index => $step): ?>
                        <li class="flex items-start">
                            <div class="bg-blue-500 text-white w-8 h-8 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <?php echo $index + 1; ?>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-white"><?php echo $step; ?></h3>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ol>
            </div>
        </div>
        
        <!-- CTA Section -->
        <div class="mt-20 text-center">
            <h2 class="text-2xl md:text-3xl font-bold mb-6">Ready to discuss your project?</h2>
            <a href="/contact" class="inline-block px-8 py-4 rounded-md bg-gradient-to-r from-blue-600 to-blue-400 text-white font-medium hover:from-blue-500 hover:to-blue-300 transition-all duration-300 transform hover:scale-105">
                Get in Touch
            </a>
        </div>
    </div>
</div> 
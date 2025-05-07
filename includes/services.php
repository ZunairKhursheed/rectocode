<?php
// Include service data if not already included
if (!function_exists('get_all_services')) {
    include 'service-data.php';
}
$all_services = get_all_services();
?>
<!-- Services Section -->
<section id="services" class="py-20 px-4 sm:px-6 lg:px-8 bg-gray-900 bg-opacity-50">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Our <span class="gradient-text">Services</span></h2>
            <p class="text-xl text-gray-400 max-w-3xl mx-auto">We deliver exceptional software solutions tailored to your specific needs</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($all_services as $service): ?>
                <a href="<?php echo $service['url']; ?>" class="service-card p-6 rounded-lg gradient-border bg-gray-900 bg-opacity-70 transition-all duration-300 hover:scale-105">
                    <div class="mb-4 text-<?php echo $service['color']; ?> text-4xl">
                        <i class="<?php echo $service['icon']; ?>"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3"><?php echo $service['title']; ?></h3>
                    <p class="text-gray-400"><?php echo $service['short_desc']; ?></p>
                </a>
            <?php endforeach; ?>
        </div>
        
        <!-- Call to action -->
        <div class="text-center mt-12">
            <a href="contact.php" class="inline-block px-6 py-3 text-lg font-medium rounded-md text-white bg-gradient-to-r from-blue-500 to-purple-600 hover:from-blue-600 hover:to-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transform transition-all duration-300 hover:scale-105">
                Request a Free Consultation
            </a>
        </div>
    </div>
</section> 
<?php
// Include the header (which also includes preloader and navigation)
include 'includes/header.php';

// Include the hero section
include 'includes/hero.php';

// Include the services section (optional - can be a preview with link to full services page)
include 'includes/services.php';

// Include the projects section (optional - can be a preview with link to full projects page)
include 'includes/projects.php';

// Include the testimonials section
include 'includes/testimonials.php';

// Include a CTA section that links to the contact page
?>

<!-- Contact CTA Section -->
<section class="py-20 px-4 sm:px-6 lg:px-8 bg-black bg-opacity-70">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Start Your Project?</h2>
        <p class="text-xl text-gray-400 max-w-3xl mx-auto mb-10">Contact us today to discuss how we can help transform your business with innovative tech solutions.</p>
        <a href="<?php echo Config::url('contact'); ?>" class="inline-block px-8 py-4 rounded-md bg-gradient-to-r from-blue-600 to-blue-400 text-white font-medium hover:from-blue-500 hover:to-blue-300 transition-all duration-300 transform hover:scale-105">
            Get in Touch
        </a>
        </div>
    </section>

<?php
// Include the footer
include 'includes/footer.php';
?>
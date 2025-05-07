<?php
// Set page title
$page_title = "Our Services";

// Include the header
include 'includes/header.php';
    if(!function_exists('get_all_services')){
        include 'includes/service-data.php';
    }
// Service information array
$services = get_all_services();
?>

<div class="bg-black bg-opacity-80">
    <!-- Hero Slider Section -->
    <div class="relative overflow-hidden pt-20 pb-12">
        <!-- Service Slider -->
        <div class="services-slick-slider relative h-[600px] overflow-hidden">
            <?php foreach ($services as $key => $service): ?>
                <div class="service-slide h-[600px] relative">
                    <!-- Background image with overlay -->
                    <div class="absolute inset-0 bg-cover bg-center slide-bg" style="background-image: url('<?php echo Config::url($service['hero_image']); ?>');">
                        <div class="absolute inset-0 bg-gradient-to-r from-black to-transparent opacity-90"></div>
                    </div>
                    
                    <!-- Slide content -->
                    <div class="relative h-full flex items-center">
                        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                            <div class="max-w-3xl">
                                <h1 class="text-4xl md:text-6xl font-bold mb-4 text-white animate-slide-up">
                                    <?php echo $service['title']; ?>
                                </h1>
                                <p class="text-xl md:text-2xl text-gray-300 mb-8 animate-slide-up animation-delay-200">
                                    <?php echo $service['hero_description']; ?>
                                </p>
                                <div class="flex flex-wrap gap-4 animate-slide-up animation-delay-400">
                                    <a href="<?php echo Config::url($service['url']); ?>" class="px-8 py-4 rounded-md bg-gradient-to-r from-blue-600 to-blue-400 text-white font-medium hover:from-blue-500 hover:to-blue-300 transition-all duration-300 transform hover:scale-105">
                                        Learn More
                                    </a>
                                    <a href="<?php echo Config::url('contact'); ?>" class="px-8 py-4 rounded-md gradient-border text-white font-medium hover:bg-blue-900 hover:bg-opacity-20 transition-all duration-300">
                                        Contact Us
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Services Overview Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-24">
            <?php foreach ($services as $key => $service): ?>
                <a href="<?php echo Config::url($service['url']); ?>" class="bg-gray-900 bg-opacity-70 rounded-lg p-8 gradient-border group hover:bg-gray-800 transition-all duration-300">
                    <div class="text-blue-400 text-4xl mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="<?php echo $service['icon']; ?>"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3"><?php echo $service['title']; ?></h3>
                    <p class="text-gray-400 mb-6"><?php echo $service['description']; ?></p>
                    <span class="text-blue-400 flex items-center">
                        Learn More 
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 group-hover:translate-x-2 transition-transform duration-300" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </a>
            <?php endforeach; ?>
        </div>
        
        <!-- Journey With Us Section -->
        <div class="mb-24">
            <div class="text-center mb-16">
                <h2 class="text-2xl md:text-4xl font-bold mb-4">Your Journey <span class="gradient-text">With Us</span></h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">From concept to completion, we provide a seamless experience tailored to your unique needs</p>
            </div>
            
            <div class="relative">
                <!-- Desktop Timeline (hidden on mobile) -->
                <div class="hidden md:block absolute left-1/2 top-0 bottom-0 w-0.5 bg-blue-600 bg-opacity-30 transform -translate-x-1/2"></div>
                
                <!-- Journey Steps -->
                <div class="space-y-12 relative">
                    <!-- Step 1 -->
                    <div class="md:grid md:grid-cols-2 md:gap-8 items-center">
                        <div class="mb-8 md:mb-0 md:text-right">
                            <span class="text-blue-400 font-bold text-lg">Step 1</span>
                            <h3 class="text-2xl font-bold mb-4">Discovery & Consultation</h3>
                            <p class="text-gray-400">We begin with a thorough consultation to understand your business, goals, and challenges. Our team collaborates with you to identify opportunities and define project scope.</p>
                        </div>
                        <div class="relative">
                            <!-- Timeline dot (hidden on mobile) -->
                            <div class="hidden md:flex md:items-center md:justify-center absolute left-0 top-1/2 w-8 h-8 rounded-full bg-gradient-to-r from-blue-600 to-blue-400 transform -translate-x-1/2 -translate-y-1/2 flex items-center justify-center shadow-lg">
                                <span class="text-white font-bold">1</span>
                            </div>
                            <div class="bg-gray-900 bg-opacity-70 rounded-lg p-8 gradient-border ml-0 md:ml-10">
                                <div class="text-blue-400 text-3xl mb-4">
                                    <i class="fas fa-comments"></i>
                                </div>
                                <ul class="list-disc pl-6 text-gray-400 space-y-2">
                                    <li>In-depth needs assessment</li>
                                    <li>Business analysis</li>
                                    <li>Technology roadmapping</li>
                                    <li>Requirements gathering</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Step 2 -->
                    <div class="md:grid md:grid-cols-2 md:gap-8 items-center">
                        <div class="mb-8 md:mb-0 order-2 md:order-1">
                            <div class="relative">
                                <!-- Timeline dot (hidden on mobile) -->
                                <div class="hidden md:flex md:items-center md:justify-center absolute left-full top-1/2 w-8 h-8 rounded-full bg-gradient-to-r from-blue-600 to-blue-400 transform -translate-x-1/2 -translate-y-1/2 flex items-center justify-center shadow-lg">
                                  <span class="text-white font-bold">2</span>
                                </div>
                                <div class="bg-gray-900 bg-opacity-70 rounded-lg p-8 gradient-border mr-0 md:mr-10">
                                    <div class="text-blue-400 text-3xl mb-4">
                                        <i class="fas fa-pencil-ruler"></i>
                                    </div>
                                    <ul class="list-disc pl-6 text-gray-400 space-y-2">
                                        <li>UI/UX wireframing</li>
                                        <li>Architecture planning</li>
                                        <li>Technology stack selection</li>
                                        <li>Project timeline creation</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="order-1 md:order-2">
                            <span class="text-blue-400 font-bold text-lg">Step 2</span>
                            <h3 class="text-2xl font-bold mb-4">Strategy & Planning</h3>
                            <p class="text-gray-400">Our experts develop a comprehensive strategy and project plan. We design the solution architecture, select appropriate technologies, and create a detailed roadmap for implementation.</p>
                        </div>
                    </div>
                    
                    <!-- Step 3 -->
                    <div class="md:grid md:grid-cols-2 md:gap-8 items-center">
                        <div class="mb-8 md:mb-0 md:text-right">
                            <span class="text-blue-400 font-bold text-lg">Step 3</span>
                            <h3 class="text-2xl font-bold mb-4">Design & Development</h3>
                            <p class="text-gray-400">Our skilled team brings your solution to life through iterative design and development. We employ agile methodologies to ensure flexibility, quality, and continuous delivery of value.</p>
                        </div>
                        <div class="relative">
                            <!-- Timeline dot (hidden on mobile) -->
                           <div class="hidden md:flex md:items-center md:justify-center absolute left-0 top-1/2 w-8 h-8 rounded-full bg-gradient-to-r from-blue-600 to-blue-400 transform -translate-x-1/2 -translate-y-1/2 flex items-center justify-center shadow-lg">
                                  <span class="text-white font-bold">3</span>
                            </div>
                            <div class="bg-gray-900 bg-opacity-70 rounded-lg p-8 gradient-border ml-0 md:ml-10">
                                <div class="text-blue-400 text-3xl mb-4">
                                    <i class="fas fa-code"></i>
                                </div>
                                <ul class="list-disc pl-6 text-gray-400 space-y-2">
                                    <li>Agile development sprints</li>
                                    <li>Continuous integration</li>
                                    <li>Regular client demos</li>
                                    <li>Iterative feedback cycles</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Step 4 -->
                    <div class="md:grid md:grid-cols-2 md:gap-8 items-center">
                        <div class="mb-8 md:mb-0 order-2 md:order-1">
                            <div class="relative">
                                <!-- Timeline dot (hidden on mobile) -->
                               <div class="hidden md:flex md:items-center md:justify-center absolute  left-full top-1/2 w-8 h-8 rounded-full bg-gradient-to-r from-blue-600 to-blue-400 transform -translate-x-1/2 -translate-y-1/2 flex items-center justify-center shadow-lg">
                                  <span class="text-white font-bold">4</span>
                                </div>
                                <div class="bg-gray-900 bg-opacity-70 rounded-lg p-8 gradient-border mr-0 md:mr-10">
                                    <div class="text-blue-400 text-3xl mb-4">
                                        <i class="fas fa-vial"></i>
                                    </div>
                                    <ul class="list-disc pl-6 text-gray-400 space-y-2">
                                        <li>Automated testing</li>
                                        <li>User acceptance testing</li>
                                        <li>Performance optimization</li>
                                        <li>Security validation</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="order-1 md:order-2">
                            <span class="text-blue-400 font-bold text-lg">Step 4</span>
                            <h3 class="text-2xl font-bold mb-4">Testing & Quality Assurance</h3>
                            <p class="text-gray-400">We rigorously test every aspect of your solution to ensure it meets the highest standards of quality, security, and performance. Our QA process identifies and resolves issues before deployment.</p>
                        </div>
                    </div>
                    
                    <!-- Step 5 -->
                    <div class="md:grid md:grid-cols-2 md:gap-8 items-center">
                        <div class="mb-8 md:mb-0 md:text-right">
                            <span class="text-blue-400 font-bold text-lg">Step 5</span>
                            <h3 class="text-2xl font-bold mb-4">Deployment & Launch</h3>
                            <p class="text-gray-400">We carefully manage the deployment process to ensure a smooth transition to production. Our team handles all technical aspects while minimizing disruption to your business operations.</p>
                        </div>
                        <div class="relative">
                            <!-- Timeline dot (hidden on mobile) -->
                            <div class="hidden md:flex md:items-center md:justify-center absolute left-0 top-1/2 w-8 h-8 rounded-full bg-gradient-to-r from-blue-600 to-blue-400 transform -translate-x-1/2 -translate-y-1/2 flex items-center justify-center shadow-lg">
                                  <span class="text-white font-bold">5</span>
                            </div>
                            <div class="bg-gray-900 bg-opacity-70 rounded-lg p-8 gradient-border ml-0 md:ml-10">
                                <div class="text-blue-400 text-3xl mb-4">
                                    <i class="fas fa-rocket"></i>
                                </div>
                                <ul class="list-disc pl-6 text-gray-400 space-y-2">
                                    <li>Deployment automation</li>
                                    <li>Migration assistance</li>
                                    <li>Go-live support</li>
                                    <li>User training</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Step 6 -->
                    <div class="md:grid md:grid-cols-2 md:gap-8 items-center">
                        <div class="mb-8 md:mb-0 order-2 md:order-1">
                            <div class="relative">
                                <!-- Timeline dot (hidden on mobile) -->
                               <div class="hidden md:flex md:items-center md:justify-center absolute left-full top-1/2 w-8 h-8 rounded-full bg-gradient-to-r from-blue-600 to-blue-400 transform -translate-x-1/2 -translate-y-1/2 flex items-center justify-center shadow-lg">
                                    <span class="text-white font-bold">6</span>
                                </div>
                                <div class="bg-gray-900 bg-opacity-70 rounded-lg p-8 gradient-border mr-0 md:mr-10">
                                    <div class="text-blue-400 text-3xl mb-4">
                                        <i class="fas fa-headset"></i>
                                    </div>
                                    <ul class="list-disc pl-6 text-gray-400 space-y-2">
                                        <li>Ongoing maintenance</li>
                                        <li>24/7 technical support</li>
                                        <li>Regular updates</li>
                                        <li>Continuous improvement</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="order-1 md:order-2">
                            <span class="text-blue-400 font-bold text-lg">Step 6</span>
                            <h3 class="text-2xl font-bold mb-4">Support & Evolution</h3>
                            <p class="text-gray-400">Our relationship continues beyond launch. We provide ongoing support, maintenance, and enhancements to ensure your solution evolves with your business and stays ahead of the competition.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Our Approach Section -->
        <div class="mb-24">
            <div class="text-center mb-16">
                <h2 class="text-2xl md:text-4xl font-bold mb-4">Our <span class="gradient-text">Approach</span></h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">What makes our service delivery different</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-900 bg-opacity-70 rounded-lg p-8 gradient-border">
                    <div class="text-blue-400 text-3xl mb-4">
                        <i class="fas fa-user-friends"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Client-Centric Focus</h3>
                    <p class="text-gray-400">We place your business goals at the center of everything we do. Our solutions are tailored to address your specific challenges and opportunities.</p>
                </div>
                
                <div class="bg-gray-900 bg-opacity-70 rounded-lg p-8 gradient-border">
                    <div class="text-blue-400 text-3xl mb-4">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Agile Methodology</h3>
                    <p class="text-gray-400">We employ agile practices to deliver value early and often, adapting to changing requirements and ensuring alignment with your expectations.</p>
                </div>
                
                <div class="bg-gray-900 bg-opacity-70 rounded-lg p-8 gradient-border">
                    <div class="text-blue-400 text-3xl mb-4">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Quality & Security</h3>
                    <p class="text-gray-400">Our development practices incorporate rigorous quality assurance and security measures to deliver robust, reliable solutions.</p>
                </div>
                
                <div class="bg-gray-900 bg-opacity-70 rounded-lg p-8 gradient-border">
                    <div class="text-blue-400 text-3xl mb-4">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Innovation Focus</h3>
                    <p class="text-gray-400">We stay at the forefront of technology trends and best practices to provide innovative solutions that give you a competitive edge.</p>
                </div>
                
                <div class="bg-gray-900 bg-opacity-70 rounded-lg p-8 gradient-border">
                    <div class="text-blue-400 text-3xl mb-4">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Transparent Communication</h3>
                    <p class="text-gray-400">We maintain open, honest communication throughout the project lifecycle, ensuring you're always informed and involved.</p>
                </div>
                
                <div class="bg-gray-900 bg-opacity-70 rounded-lg p-8 gradient-border">
                    <div class="text-blue-400 text-3xl mb-4">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Results-Driven</h3>
                    <p class="text-gray-400">Our ultimate measure of success is the tangible business value and ROI our solutions deliver for your organization.</p>
                </div>
            </div>
        </div>
        
        <!-- Industries We Serve Section -->
        <div class="mb-24">
            <div class="text-center mb-16">
                <h2 class="text-2xl md:text-4xl font-bold mb-4">Industries We <span class="gradient-text">Serve</span></h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">Expertise across diverse sectors to meet specific industry challenges</p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-gray-900 bg-opacity-70 rounded-lg p-8 text-center">
                    <div class="text-blue-400 text-4xl mb-6">
                        <i class="fas fa-hospital"></i>
                    </div>
                    <h3 class="text-xl font-bold">Healthcare</h3>
                </div>
                
                <div class="bg-gray-900 bg-opacity-70 rounded-lg p-8 text-center">
                    <div class="text-blue-400 text-4xl mb-6">
                        <i class="fas fa-university"></i>
                    </div>
                    <h3 class="text-xl font-bold">Finance</h3>
                </div>
                
                <div class="bg-gray-900 bg-opacity-70 rounded-lg p-8 text-center">
                    <div class="text-blue-400 text-4xl mb-6">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3 class="text-xl font-bold">Retail & E-commerce</h3>
                </div>
                
                <div class="bg-gray-900 bg-opacity-70 rounded-lg p-8 text-center">
                    <div class="text-blue-400 text-4xl mb-6">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3 class="text-xl font-bold">Education</h3>
                </div>
                
                <div class="bg-gray-900 bg-opacity-70 rounded-lg p-8 text-center">
                    <div class="text-blue-400 text-4xl mb-6">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3 class="text-xl font-bold">Manufacturing</h3>
                </div>
                
                <div class="bg-gray-900 bg-opacity-70 rounded-lg p-8 text-center">
                    <div class="text-blue-400 text-4xl mb-6">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3 class="text-xl font-bold">Logistics</h3>
                </div>
                
                <div class="bg-gray-900 bg-opacity-70 rounded-lg p-8 text-center">
                    <div class="text-blue-400 text-4xl mb-6">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3 class="text-xl font-bold">Hospitality</h3>
                </div>
                
                <div class="bg-gray-900 bg-opacity-70 rounded-lg p-8 text-center">
                    <div class="text-blue-400 text-4xl mb-6">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <h3 class="text-xl font-bold">Sustainability</h3>
                </div>
            </div>
        </div>
        
        <!-- CTA Section -->
        <div class="text-center my-5">
            <h2 class="text-2xl md:text-3xl font-bold mb-6">Ready to Transform Your Business?</h2>
            <p class="text-xl text-gray-400 max-w-3xl mx-auto mb-8">Let's discuss how our services can address your specific needs and drive your business forward.</p>
            <a href="<?php echo Config::url('contact'); ?>" class="inline-block px-8 py-4 rounded-md bg-gradient-to-r from-blue-600 to-blue-400 text-white font-medium hover:from-blue-500 hover:to-blue-300 transition-all duration-300 transform hover:scale-105">
                Get Started
            </a>
        </div>
    </div>
</div>

<?php
// Include the footer
include 'includes/footer.php';
?>

<script>
$(document).ready(function(){
    $('.services-slick-slider').slick({
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: true,
        dots: false,
        infinite: true,
        speed: 1000,
        
        pauseOnHover: true,
        pauseOnFocus: true,
        prevArrow: '<button class="slick-prev absolute before:hidden top-1/2 left-4 transform -translate-y-1/2 w-12 h-12 rounded-full bg-gray-900 bg-opacity-50 text-white flex items-center justify-center hover:bg-blue-900 transition-all duration-300 focus:outline-none hover:scale-110 z-10 "><i class="fas fa-chevron-left text-xl text-white"></i></button>',
        nextArrow: '<button class="slick-next absolute before:hidden top-1/2 right-4 transform -translate-y-1/2 w-12 h-12 rounded-full bg-gray-900 bg-opacity-50 text-white flex items-center justify-center hover:bg-blue-900 transition-all duration-300 focus:outline-none hover:scale-110 z-10"><i class="fas fa-chevron-right text-xl text-white"></i></button>'
    });
    
    // Reset animations when slide changes
    $('.services-slick-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
        // Remove animation classes
        $('.slick-slide').find('.animate-slide-up').css('animation', 'none');
        
        // Re-trigger animations on next slide after a delay
        setTimeout(function() {
            $('.slick-slide[data-slick-index="' + nextSlide + '"]').find('.animate-slide-up').css('animation', '');
        }, 50);
    });
});
</script> 
<?php
// Set page title
$page_title = "About Us";

// Include the header
include 'includes/header.php';
?>

<div class="pt-24 pb-12 bg-black bg-opacity-80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Hero Section -->
        <div class="text-center mb-16">
            <h1 class="text-3xl md:text-5xl font-bold mb-4">About <span class="gradient-text">Recto Code</span></h1>
            <p class="text-xl text-gray-400 max-w-3xl mx-auto">We're a team of passionate technologists building innovative solutions that drive digital transformation</p>
        </div>
        
        <!-- Our Story Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-24">
            <div>
                <h2 class="text-2xl md:text-3xl font-bold mb-6">Our Story</h2>
                <p class="text-gray-400 mb-6">Recto Code was founded in 2018 by a group of software engineers who shared a vision: to create technology that makes a meaningful impact on businesses and people's lives.</p>
                
                <p class="text-gray-400 mb-6">What started as a small team of four developers working out of a co-working space has grown into a full-service software development company with experts in various technology domains.</p>
                
                <p class="text-gray-400">We've helped countless businesses across multiple industries transform their ideas into powerful digital solutions. From startups to established enterprises, our approach remains the same - we listen, we understand, and we deliver excellence.</p>
            </div>
            <div class="relative">
                <div class="gradient-border rounded-lg overflow-hidden">
                    <img src="/assets/images/about-story.jpg" alt="Recto Code Team Working" class="w-full h-auto">
                </div>
                <div class="absolute -bottom-6 -right-6 w-32 h-32 rounded-lg gradient-border bg-gray-900 bg-opacity-90 flex items-center justify-center p-4 text-center">
                    <div>
                        <span class="block text-3xl font-bold gradient-text">5+</span>
                        <span class="text-sm text-gray-400">Years of Excellence</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Mission & Values -->
        <div class="bg-gray-900 bg-opacity-70 rounded-lg p-8 gradient-border mb-24">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div>
                    <h2 class="text-2xl md:text-3xl font-bold mb-6">Our Mission</h2>
                    <p class="text-gray-400">To empower businesses with innovative technology solutions that drive growth, efficiency, and competitive advantage in the digital age.</p>
                    
                    <div class="mt-8">
                        <div class="h-1 w-20 bg-gradient-to-r from-blue-600 to-blue-400 mb-8"></div>
                        <blockquote class="text-xl italic text-white">
                            "We don't just build software; we build partnerships that transform businesses."
                        </blockquote>
                        <p class="mt-4 text-gray-400">— David Chen, CEO</p>
                    </div>
                </div>
                
                <div>
                    <h2 class="text-2xl md:text-3xl font-bold mb-6">Our Values</h2>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <span class="text-blue-400 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </span>
                            <div>
                                <h4 class="font-bold text-white">Innovation</h4>
                                <p class="text-gray-400">We constantly explore new technologies and approaches to solve complex problems.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-400 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </span>
                            <div>
                                <h4 class="font-bold text-white">Quality</h4>
                                <p class="text-gray-400">We're committed to excellence in everything we create.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-400 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </span>
                            <div>
                                <h4 class="font-bold text-white">Collaboration</h4>
                                <p class="text-gray-400">We believe the best solutions come from working together with our clients.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-400 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </span>
                            <div>
                                <h4 class="font-bold text-white">Integrity</h4>
                                <p class="text-gray-400">We're transparent, honest, and accountable in all our interactions.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- Team Section -->
        <div class="mb-24">
            <div class="text-center mb-16">
                <h2 class="text-2xl md:text-4xl font-bold mb-4">Meet Our <span class="gradient-text">Team</span></h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">A diverse group of passionate experts dedicated to creating exceptional software solutions</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Team Member 1 -->
                <div class="bg-gray-900 bg-opacity-70 rounded-lg overflow-hidden gradient-border group">
                    <div class="relative overflow-hidden">
                        <img src="/assets/images/team-1.jpg" alt="David Chen" class="w-full h-auto transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold">David Chen</h3>
                        <p class="text-blue-400 mb-4">CEO & Co-Founder</p>
                        <p class="text-gray-400 mb-4">15+ years of experience in software development and technology leadership.</p>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 2 -->
                <div class="bg-gray-900 bg-opacity-70 rounded-lg overflow-hidden gradient-border group">
                    <div class="relative overflow-hidden">
                        <img src="/assets/images/team-2.jpg" alt="Sarah Johnson" class="w-full h-auto transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold">Sarah Johnson</h3>
                        <p class="text-blue-400 mb-4">CTO & Co-Founder</p>
                        <p class="text-gray-400 mb-4">Expert in cloud architecture and emerging technologies with 12+ years of experience.</p>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 3 -->
                <div class="bg-gray-900 bg-opacity-70 rounded-lg overflow-hidden gradient-border group">
                    <div class="relative overflow-hidden">
                        <img src="/assets/images/team-3.jpg" alt="Michael Rodriguez" class="w-full h-auto transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold">Michael Rodriguez</h3>
                        <p class="text-blue-400 mb-4">Lead Software Architect</p>
                        <p class="text-gray-400 mb-4">Specializes in building scalable enterprise applications and distributed systems.</p>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 4 -->
                <div class="bg-gray-900 bg-opacity-70 rounded-lg overflow-hidden gradient-border group">
                    <div class="relative overflow-hidden">
                        <img src="/assets/images/team-4.jpg" alt="Emily Zhang" class="w-full h-auto transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold">Emily Zhang</h3>
                        <p class="text-blue-400 mb-4">UX/UI Design Lead</p>
                        <p class="text-gray-400 mb-4">Award-winning designer with a focus on creating intuitive and engaging user experiences.</p>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">
                                <i class="fab fa-dribbble"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Stats Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-24">
            <div class="bg-gray-900 bg-opacity-70 rounded-lg p-8 text-center gradient-border">
                <span class="block text-4xl font-bold gradient-text mb-2">100+</span>
                <span class="text-gray-400">Projects Completed</span>
            </div>
            <div class="bg-gray-900 bg-opacity-70 rounded-lg p-8 text-center gradient-border">
                <span class="block text-4xl font-bold gradient-text mb-2">50+</span>
                <span class="text-gray-400">Happy Clients</span>
            </div>
            <div class="bg-gray-900 bg-opacity-70 rounded-lg p-8 text-center gradient-border">
                <span class="block text-4xl font-bold gradient-text mb-2">20+</span>
                <span class="text-gray-400">Team Members</span>
            </div>
            <div class="bg-gray-900 bg-opacity-70 rounded-lg p-8 text-center gradient-border">
                <span class="block text-4xl font-bold gradient-text mb-2">5+</span>
                <span class="text-gray-400">Years in Business</span>
            </div>
        </div>
        
        <!-- CTA Section -->
        <div class="text-center">
            <h2 class="text-2xl md:text-3xl font-bold mb-6">Join Our Journey</h2>
            <p class="text-xl text-gray-400 max-w-3xl mx-auto mb-8">Ready to transform your business with innovative tech solutions? Let's create something amazing together.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact" class="px-8 py-4 rounded-md bg-gradient-to-r from-blue-600 to-blue-400 text-white font-medium hover:from-blue-500 hover:to-blue-300 transition-all duration-300 transform hover:scale-105">
                    Start a Project
                </a>
                <a href="/careers" class="px-8 py-4 rounded-md gradient-border text-white font-medium hover:bg-blue-900 hover:bg-opacity-20 transition-all duration-300">
                    Join Our Team
                </a>
            </div>
        </div>
    </div>
</div>

<?php
// Include the footer
include 'includes/footer.php';
?> 
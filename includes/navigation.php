<!-- Navigation -->
<nav class="fixed w-full z-40 bg-black bg-opacity-80 backdrop-filter backdrop-blur-lg border-b border-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            <div class="flex items-center">
                <div class="flex-shrink-0 flex items-center">
                    <div class="w-10 h-10 rounded-full gradient-border flex items-center justify-center">
                        <span class="text-xl font-bold" style="background: linear-gradient(90deg, #065ca9 0%, #4fc3f7 100%); -webkit-background-clip: text; background-clip: text; color: transparent;">RC</span>
                    </div>
                    <span class="ml-3 text-xl font-bold text-white">RECTO <span class="gradient-text">CODE</span></span>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="ml-10 flex items-center space-x-8">
                    <a href="<?php echo Config::url(''); ?>" class="text-white hover:text-blue-400 transition-colors duration-300">Home</a>
                    <a href="<?php echo Config::url('about.php'); ?>" class="text-white hover:text-blue-400 transition-colors duration-300">About</a>
                    
                    <!-- Services Dropdown -->
                    <div class="relative group">
                        <a href="<?php echo Config::url('services'); ?>" class="text-white hover:text-blue-400 transition-colors duration-300 flex items-center">
                            Services 
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </a>
                        <div class="absolute left-0 mt-2 w-56 rounded-md shadow-lg bg-gray-900 ring-1 ring-black ring-opacity-5 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                            <div class="py-1" role="menu" aria-orientation="vertical">
                                <a href="<?php echo Config::url('custom-software'); ?>" class="block px-4 py-2 text-sm text-white hover:bg-gray-800" role="menuitem">Custom Software Development</a>
                                <a href="<?php echo Config::url('ui-ux-design'); ?>" class="block px-4 py-2 text-sm text-white hover:bg-gray-800" role="menuitem">UI/UX Design</a>
                                <a href="<?php echo Config::url('web-development'); ?>" class="block px-4 py-2 text-sm text-white hover:bg-gray-800" role="menuitem">Web Development</a>
                                <a href="<?php echo Config::url('mobile-app'); ?>" class="block px-4 py-2 text-sm text-white hover:bg-gray-800" role="menuitem">Mobile App Development</a>
                                <a href="<?php echo Config::url('ai-agent'); ?>" class="block px-4 py-2 text-sm text-white hover:bg-gray-800" role="menuitem">AI Agent Development</a>
                                <a href="<?php echo Config::url('digital-marketing'); ?>" class="block px-4 py-2 text-sm text-white hover:bg-gray-800" role="menuitem">Digital Marketing</a>
                            </div>
                        </div>
                    </div>
                    
                    <a href="<?php echo Config::url('projects'); ?>" class="text-white hover:text-blue-400 transition-colors duration-300">Projects</a>
                    <a href="<?php echo Config::url(''); ?>#testimonials" class="text-white hover:text-blue-400 transition-colors duration-300">Testimonials</a>
                    <a href="<?php echo Config::url('contact'); ?>" class="px-4 py-2 rounded-md gradient-border text-white hover:bg-blue-900 hover:bg-opacity-20 transition-all duration-300">Contact</a>
                </div>
            </div>
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-white focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Mobile menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-gray-900 pb-4">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 flex flex-col">
            <a href="<?php echo Config::url(''); ?>" class="text-white block px-3 py-2 rounded-md hover:bg-gray-800">Home</a>
            <a href="<?php echo Config::url('about.php'); ?>" class="text-white block px-3 py-2 rounded-md hover:bg-gray-800">About</a>
            <a href="<?php echo Config::url('services'); ?>" class="text-white block px-3 py-2 rounded-md hover:bg-gray-800">Services</a>
            
            <!-- Mobile services sub-menu -->
            <div class="pl-4">
                <a href="<?php echo Config::url('custom-software'); ?>" class="text-gray-400 block px-3 py-1 text-sm rounded-md hover:bg-gray-800">Custom Software Development</a>
                <a href="<?php echo Config::url('ui-ux-design'); ?>" class="text-gray-400 block px-3 py-1 text-sm rounded-md hover:bg-gray-800">UI/UX Design</a>
                <a href="<?php echo Config::url('web-development'); ?>" class="text-gray-400 block px-3 py-1 text-sm rounded-md hover:bg-gray-800">Web Development</a>
                <a href="<?php echo Config::url('mobile-app'); ?>" class="text-gray-400 block px-3 py-1 text-sm rounded-md hover:bg-gray-800">Mobile App Development</a>
                <a href="<?php echo Config::url('ai-agent'); ?>" class="text-gray-400 block px-3 py-1 text-sm rounded-md hover:bg-gray-800">AI Agent Development</a>
                <a href="<?php echo Config::url('digital-marketing'); ?>" class="text-gray-400 block px-3 py-1 text-sm rounded-md hover:bg-gray-800">Digital Marketing</a>
            </div>
            
            <a href="<?php echo Config::url('projects'); ?>" class="text-white block px-3 py-2 rounded-md hover:bg-gray-800">Projects</a>
            <a href="<?php echo Config::url(''); ?>#testimonials" class="text-white block px-3 py-2 rounded-md hover:bg-gray-800">Testimonials</a>
            <a href="<?php echo Config::url('contact'); ?>" class="px-3 py-2 rounded-md gradient-border text-white block text-center">Contact</a>
        </div>
    </div>
</nav> 
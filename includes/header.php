<?php
// Include configuration settings
require_once 'includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' - Recto Code' : 'Recto Code - Software Development Company'; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    
    <link rel="stylesheet" href="<?php echo Config::url('assets/css/style.css'); ?>">
    
    <!-- jQuery (required for Slick) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Slick Slider JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>
<body class="min-h-screen">
    <?php include 'includes/preloader.php'; ?>
    <?php include 'includes/navigation.php'; ?>
    <nav class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-end">
        <div class="hidden sm:block sm:ml-6">
            <div class="flex space-x-4">
                <a href="index.php" class="px-3 py-2 rounded-md text-sm font-medium text-white hover:text-blue-400 transition-colors">
                    Home
                </a>
                
                <!-- Services Dropdown -->
                <div class="relative group">
                    <button class="px-3 py-2 rounded-md text-sm font-medium text-white hover:text-blue-400 transition-colors flex items-center">
                        Services
                        <svg class="ml-1 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div class="absolute left-0 mt-2 w-56 rounded-md shadow-lg bg-gray-800 ring-1 ring-black ring-opacity-5 hidden group-hover:block z-10">
                        <div class="py-1">
                            <?php
                            // Include service data if not already included
                            if (!function_exists('get_all_services')) {
                                include 'service-data.php';
                            }
                            $all_services = get_all_services();
                            
                            foreach ($all_services as $service): 
                            ?>
                                <a href="<?php echo $service['url']; ?>" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">
                                    <i class="<?php echo $service['icon']; ?> mr-2"></i> <?php echo $service['title']; ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                
                <a href="about.php" class="px-3 py-2 rounded-md text-sm font-medium text-white hover:text-blue-400 transition-colors">
                    About
                </a>
                <a href="contact.php" class="px-3 py-2 rounded-md text-sm font-medium text-white hover:text-blue-400 transition-colors">
                    Contact
                </a>
            </div>
        </div>
    </nav>
</body>
</html> 
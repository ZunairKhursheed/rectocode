<?php
// This file serves as a template for individual service pages
// $service_key should be defined before including this file

// Service information array - same as in services.php
$services = [
    'custom-software' => [
        'title' => 'Custom Software Development',
        'icon' => 'fas fa-code',
        'description' => 'We create tailored software solutions designed specifically to address your unique business challenges and requirements.',
        'features' => [
            'Enterprise Software Solutions',
            'Legacy System Modernization',
            'Custom CRM & ERP Development',
            'Workflow & Process Automation',
            'Integration Services'
        ],
        'process' => [
            'Discovery and Requirements Analysis',
            'Solution Architecture',
            'Development and Testing',
            'Deployment and Integration',
            'Support and Maintenance'
        ]
    ],
    'mobile-app' => [
        'title' => 'Mobile App Development',
        'icon' => 'fas fa-mobile-alt',
        'description' => 'We build high-performance, feature-rich mobile applications for iOS and Android platforms that deliver exceptional user experiences.',
        'features' => [
            'Native iOS & Android Apps',
            'Cross-Platform Development',
            'Progressive Web Apps (PWAs)',
            'Mobile UI/UX Design',
            'App Store Optimization'
        ],
        'process' => [
            'App Strategy & Concept',
            'UI/UX Design',
            'Development & Testing',
            'Launch & Deployment',
            'Continuous Improvement'
        ]
    ],
    'web-dev' => [
        'title' => 'Web Development',
        'icon' => 'fas fa-globe',
        'description' => 'We create modern, responsive websites and web applications built with the latest technologies to engage your audience and drive conversions.',
        'features' => [
            'Responsive Website Development',
            'Progressive Web Applications',
            'E-commerce Solutions',
            'CMS Development',
            'Performance Optimization'
        ],
        'process' => [
            'Information Architecture',
            'Visual Design',
            'Front-end & Back-end Development',
            'Testing & Quality Assurance',
            'Deployment & Maintenance'
        ]
    ],
    'cloud' => [
        'title' => 'Cloud Solutions',
        'icon' => 'fas fa-cloud',
        'description' => 'We provide secure, scalable cloud infrastructure and services designed to optimize your business applications and operations.',
        'features' => [
            'Cloud Migration Strategy',
            'AWS, Azure & Google Cloud Services',
            'Cloud Application Development',
            'Serverless Architecture',
            'DevOps & CI/CD Implementation'
        ],
        'process' => [
            'Cloud Readiness Assessment',
            'Migration Planning',
            'Implementation & Testing',
            'Security Configuration',
            'Monitoring & Management'
        ]
    ],
    'ai-ml' => [
        'title' => 'AI & Machine Learning',
        'icon' => 'fas fa-robot',
        'description' => 'We build intelligent solutions that leverage data to provide insights, automate processes, and deliver personalized experiences.',
        'features' => [
            'Predictive Analytics',
            'Natural Language Processing',
            'Computer Vision Solutions',
            'Recommendation Systems',
            'AI-Powered Automation'
        ],
        'process' => [
            'Data Collection & Preparation',
            'Model Development',
            'Training & Testing',
            'Integration & Deployment',
            'Monitoring & Refinement'
        ]
    ],
    'digital-transformation' => [
        'title' => 'Digital Transformation',
        'icon' => 'fas fa-chart-line',
        'description' => 'We provide strategic guidance and implementation expertise to modernize your business processes and enhance digital capabilities.',
        'features' => [
            'Digital Strategy Consulting',
            'Business Process Optimization',
            'Technology Stack Modernization',
            'Data-Driven Decision Making',
            'Change Management Support'
        ],
        'process' => [
            'Current State Assessment',
            'Future State Visioning',
            'Roadmap Development',
            'Implementation',
            'Continuous Improvement'
        ]
    ]
];

// Check if the service exists
if (!array_key_exists($service_key, $services)) {
    // Redirect to services page if service doesn't exist
    header('Location: /services');
    exit;
}

// Get the service details
$service = $services[$service_key];
?>

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
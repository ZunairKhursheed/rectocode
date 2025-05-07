<?php
/**
 * Centralized service data for consistent information across the site
 */
$services = [
    'custom-software' => [
        'key' => 'custom-software',
        'title' => 'Custom Software Development',
        'icon' => 'fas fa-code',
        'short_desc' => 'Software made just for your business to help you work better and save time.',
        'description' => 'We create tailored software solutions designed specifically to address your unique business challenges and requirements.',
        'url' => 'custom-software.php',
        'color' => 'blue-400',
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
    'ui-ux-design' => [
        'key' => 'ui-ux-design',
        'title' => 'UI/UX Design',
        'icon' => 'fas fa-desktop',
        'short_desc' => 'Clean and easy designs that help people use your website or app without any trouble.',
        'description' => 'We create intuitive, user-centered designs that enhance the overall experience and make your digital products a pleasure to use.',
        'url' => 'ui-ux-design.php',
        'color' => 'blue-400',
        'features' => [
            'User Research & Analysis',
            'Information Architecture',
            'Wireframing & Prototyping',
            'Visual Design',
            'Usability Testing'
        ],
        'process' => [
            'Research & Discovery',
            'UX Strategy',
            'Design & Prototyping',
            'Testing & Iteration',
            'Implementation Support'
        ]
    ],
    'web-development' => [
        'key' => 'web-development',
        'title' => 'Web Development',
        'icon' => 'fas fa-globe',
        'short_desc' => 'Fast and modern websites built to help you look good and grow online.',
        'description' => 'We create modern, responsive websites and web applications built with the latest technologies to engage your audience and drive conversions.',
        'url' => 'web-development.php',
        'color' => 'blue-400',
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
    'mobile-app' => [
        'key' => 'mobile-app',
        'title' => 'Mobile App Development',
        'icon' => 'fas fa-mobile-alt',
        'short_desc' => 'User-friendly mobile apps made to work smoothly on both Android and iPhone.',
        'description' => 'We build high-performance, feature-rich mobile applications for iOS and Android platforms that deliver exceptional user experiences.',
        'url' => 'mobile-app.php',
        'color' => 'blue-400',
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
    'ai-agent' => [
        'key' => 'ai-agent',
        'title' => 'AI Agent Development',
        'icon' => 'fas fa-robot',
        'short_desc' => 'AI tools that automate tasks, save time, and make your work easier and smarter.',
        'description' => 'We build intelligent AI agents that leverage machine learning and natural language processing to automate tasks and provide valuable insights.',
        'url' => 'ai-agent.php',
        'color' => 'blue-400',
        'features' => [
            'Conversational AI Agents',
            'Process Automation Bots',
            'Data Analysis & Insights',
            'Natural Language Processing',
            'Custom AI Solutions'
        ],
        'process' => [
            'AI Strategy Definition',
            'Data Collection & Preparation',
            'Model Development & Training',
            'Integration & Testing',
            'Deployment & Continuous Learning'
        ]
    ],
    'digital-marketing' => [
        'key' => 'digital-marketing',
        'title' => 'Digital Marketing',
        'icon' => 'fas fa-chart-line',
        'short_desc' => 'Online ads and content made to help more people find and trust your brand.',
        'description' => 'We create data-driven digital marketing strategies that increase your online visibility, attract qualified leads, and boost conversions.',
        'url' => 'digital-marketing.php',
        'color' => 'blue-400',
        'features' => [
            'Search Engine Optimization (SEO)',
            'Pay-Per-Click Advertising',
            'Social Media Marketing',
            'Content Marketing',
            'Analytics & Reporting'
        ],
        'process' => [
            'Marketing Audit & Strategy',
            'Campaign Planning',
            'Content Creation',
            'Campaign Execution',
            'Performance Analysis'
        ]
    ]
];

/**
 * Get a specific service by key
 */
function get_service($key) {
    global $services;
    return isset($services[$key]) ? $services[$key] : null;
}

/**
 * Get all services
 */
function get_all_services() {
    global $services;
    return $services;
}
?> 
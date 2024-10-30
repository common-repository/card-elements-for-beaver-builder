<?php
switch ($settings->testimonial_style) {
    case 'testimonial-card-style-1':
        include CEBB_DIR . 'modules/testimonial-card/includes/testimonial-card-style-1.php';  // Card Style 1
        break;
    case 'testimonial-card-style-2':
        include CEBB_DIR . 'modules/testimonial-card/includes/testimonial-card-style-2.php';  // Card Style 2
        break;
    case 'testimonial-card-style-6':
        include CEBB_DIR . 'modules/testimonial-card/includes/testimonial-card-style-6.php';  // Card Style pro
        break;
    default:
        include CEBB_DIR . 'modules/testimonial-card/includes/testimonial-card-style-1.php';  // Default Card Style 1
        break;
} 
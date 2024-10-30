<?php

switch ($settings->profile_style) {
    case 'profile-card-style-1':
        include CEBB_DIR . 'modules/profile-card/includes/profile-card-style-1.php';  // Card Style 1
        break;
    case 'profile-card-style-2':
        include CEBB_DIR . 'modules/profile-card/includes/profile-card-style-2.php';  // Card Style 2
        break;
    case 'profile-card-style-3':
        include CEBB_DIR . 'modules/profile-card/includes/profile-card-style-3.php';  // Card Style 3
        break;
    case 'profile-card-style-4':
        include CEBB_DIR . 'modules/profile-card/includes/profile-card-style-4.php';  // Card Style 4
        break;
    case 'profile-card-style-5':
        include CEBB_DIR . 'modules/profile-card/includes/profile-card-style-5.php';  // Card Style 5
        break;
    case 'profile-card-style-11':
        include CEBB_DIR . 'modules/profile-card/includes/profile-card-style-11.php';  // Card Style 11
        break;
    default:
        include CEBB_DIR . 'modules/profile-card/includes/profile-card-style-1.php';  // Default Card Style 1
        break;
} 
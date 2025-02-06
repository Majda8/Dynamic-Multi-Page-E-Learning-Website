
# Dynamic Multi-Page E-Learning Website

This repository contains the files for a dynamic, multi-page e-learning website designed to provide an engaging and interactive online learning experience. The website includes various pages, such as the home page, course pages, login and sign-up forms, and more. Additionally, the website supports **Dark Mode**, **Light Mode**, and **Glass Mode**, allowing users to customize their viewing experience.

## Features

- **Responsive Design**: The website is designed to be fully responsive, ensuring a smooth user experience on all devices.
- **Multimedia Content**: Includes images, videos, and stylesheets to enhance the user interface and learning experience.
- **Course Pages**: Multiple pages are available for displaying different courses and their details.
- **User Authentication**: Features login and sign-up pages for user authentication using PHP.
- **Color Modes**: The website supports multiple viewing modes:
  - **Dark Mode**: A dark color scheme for low-light environments.
  - **Light Mode**: A traditional light color scheme for bright environments.
  - **Glass Mode**: A translucent, "frosted glass" effect for a modern and sleek look.
- **Color Customization**: Users can change the theme color for a personalized experience.

## Pages

1. **Home Page** (index.html)  
   The landing page for the website, showcasing available courses, and providing navigation to other sections.

2. **Courses Page** (courses.html)  
   A list of available courses for users to explore. Each course is linked to its detailed page.

3. **Course Details Page** (details.html)  
   A detailed page about a specific course, including course content, instructors, and other relevant information.

4. **Login Page** (log-in.html and log-in.php)  
   A login page allowing users to authenticate and access their profiles or courses.

5. **Sign-Up Page** (sign-up.html and sign-up.php)  
   A registration page for new users to create an account on the platform.

6. **Contact Page** (contact.html)  
   A page for users to contact the website administrators with any inquiries.

7. **Miscellaneous**  
   Includes stylesheets (css), images (img), JavaScript files (js), and other assets such as web fonts and videos.

## Directory Structure

- **.vscode/**: Configuration settings for Visual Studio Code.
- **css/**: Stylesheets used for the website design and layout.
- **img/**: Images used throughout the website.
- **js/**: JavaScript files for adding interactivity and dynamic content.
- **video/**: Video files included for course content or tutorials.
- **webfonts/**: Custom web fonts used in the website's design.
- **config.php**: PHP configuration file for server-side operations.
- **HTML Files**: Various HTML files representing different pages such as `index.html`, `courses.html`, `log-in.html`, etc.

## Installation

To run the website locally, follow these steps:

1. Clone the repository:
   ```bash
   git clone https://github.com/Majda8/Dynamic-Multi-Page-E-Learning-Website.git
   ```
2. Navigate to the project directory:
   ```bash
   cd Dynamic-Multi-Page-E-Learning-Website
   ```
3. Ensure you have a PHP server running to handle the PHP files (`log-in.php`, `sign-up.php`, etc.).

4. Open `index.html` in your browser to view the site locally.

## Technologies Used

- **HTML**: For the basic structure and content.
- **CSS**: For styling the website.
- **JavaScript**: For adding interactivity, including the dynamic mode switching feature.
- **PHP**: For server-side authentication and processing (login, signup).

## License

This project is open-source and available under the [MIT License](LICENSE).


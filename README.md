# MAKC IT - Personal Portfolio Website

This is my personal portfolio website built using the Laravel framework. The site showcases my skills, projects, and experience, serving as a platform to demonstrate my technical expertise and creativity.

## About the Project

The website is designed to be a dynamic and interactive platform, featuring a fully functional backend for content management. It allows for the addition, updating, and deletion of skills, projects, and other data. The site is developed with modern web technologies and adheres to best practices for performance and usability.

### Key Features
- **Admin Panel**: Secure login system for managing skills and projects.
- **Dynamic Content**: Add, update, and delete skills and projects via the admin panel.
- **Contact Form**: Integrated with Google reCAPTCHA for spam prevention.
- **Responsive Design**: Optimized for viewing on desktops, tablets, and mobile devices.

## Technologies Used

### Backend
- **Laravel**: PHP framework for building robust and scalable web applications.
- **MySQL**: Database for storing dynamic content such as skills, projects, and messages.
- **Eloquent ORM**: For database interactions and migrations.

### Frontend
- **Bootstrap 4/5**: For responsive and modern UI components.
- **JavaScript**: For interactive features and animations.
- **CSS**: Custom styles for unique design elements.

### APIs and Integrations
- **Google reCAPTCHA**: For spam prevention in the contact form.
- **Google Maps API**: Used in some projects for location-based features.

### Other Tools
- **Blade Templates**: For dynamic and reusable frontend components.
- **Laravel Middleware**: For route protection and authentication.

## Project Structure

### Controllers
- **`AuthController`**: Handles admin authentication (login/logout).
- **`AdminController`**: Manages the admin dashboard.
- **`SkillController`**: CRUD operations for skills.
- **`ProjectController`**: Displays and manages projects.
- **`MessageController`**: Handles contact form submissions and integrates Google reCAPTCHA.

### Routes
- Public routes for viewing the portfolio, CV, and contact form.
- Admin routes protected by middleware for managing content.

### Database
- **Migrations**: Define and manage database schema (e.g., `admins`, `skills` tables).
- **Models**: Represent database entities like `Skill` and `Admin`.

## Where to fine a project

Project is running on the https://makcit.fi/

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# Performance Tracker API

![Laravel Logo](https://laravel.com/img/logomark.min.svg)  
**Built with Laravel 10.x**

The Performance Tracker API is a Laravel-based application designed to help manage courses, assignments, and track performance in real-time. It also includes real-time notifications to keep users updated. This is an MVP (Minimum Viable Product) and will continue to evolve with additional features and improvements.

---

## Features

- **Course Management**: Create, update, delete, and view courses.
- **Assignment Management**: Manage assignments for each course, including due dates and status.
- **Performance Tracking**: Track progress and performance for courses and assignments.
- **Real-Time Notifications**: Receive real-time updates using WebSocket or Pusher.
- **Image Storage**: Upload and store images in AWS S3.
- **Dockerized Development**: Built with Laravel Sail for easy local development.
- **Hosted on AWS EC2**: Deployed on AWS EC2 for scalability and reliability.

---

## Technologies Used

- **Backend**: Laravel 10.x (PHP framework)
- **Database**: MySQL
- **Real-Time Notifications**: Laravel Echo, Pusher, or WebSocket
- **Image Storage**: AWS S3
- **Containerization**: Docker with Laravel Sail
- **Hosting**: AWS EC2
- **API Documentation**: Swagger or Postman

---

## Version

**MVP Version**: 1.0.0  
**Laravel Version**: 10.x

---

## Getting Started

### Prerequisites

- PHP 8.0 or higher
- Composer (for dependency management)
- MySQL 5.7 or higher
- Node.js and NPM (for frontend assets if applicable)
- Docker and Docker Compose (for Laravel Sail)
- AWS Account (for S3 and EC2)

---

### Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/yourusername/performance-tracker-api.git

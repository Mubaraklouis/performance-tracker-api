<h1 align="center">Performance Tracker API</h1>



<p align="center">
  <img src="https://img.shields.io/badge/version-1.0.0-blue" alt="Version">
  <img src="https://img.shields.io/badge/status-production-green" alt="Status">
  <img src="https://img.shields.io/badge/license-MIT-orange" alt="License">
</p>

<p align="center">
  A modern <strong>Performance Tracker API</strong> built with <strong>Laravel, Vue.js, Inertia.js, and TypeScript</strong>. This API is designed to help manage courses, assignments, and track performance in real-time. It also includes real-time notifications to keep users updated.
</p>

---

<h2>Features</h2>

<h3>Core Features</h3>
<ul>
  <li><strong>Course Management</strong>: Create, update, delete, and view courses (CRUD operations).</li>
  <li><strong>Assignment Management</strong>: Manage assignments for each course, including due dates and status.</li>
  <li><strong>Performance Tracking</strong>: Track progress and performance for courses and assignments.</li>
  <li><strong>Real-Time Notifications</strong>: Receive real-time updates using WebSocket or Pusher.</li>
  <li><strong>Image Storage</strong>: Upload and store images in AWS S3.</li>
</ul>

<h3>Advanced Features</h3>
<ul>
  <li><strong>Dockerized Deployment</strong>: Easy setup and deployment using Docker and Laravel Sail.</li>
  <li><strong>Responsive UI</strong>: Fully responsive design for seamless use on all devices.</li>
  <li><strong>TypeScript Support</strong>: Robust type-checking for better code quality and maintainability.</li>
  <li><strong>API Integration</strong>: RESTful APIs for seamless integration with third-party systems.</li>
  <li><strong>Audit Logs</strong>: Track all changes and actions for accountability.</li>
</ul>

---

<h2>Technologies Used</h2>
<ul>
  <li><strong>Frontend</strong>: Vue.js, Inertia.js, TypeScript, Tailwind CSS</li>
  <li><strong>Backend</strong>: Laravel 10.x, PHP</li>
  <li><strong>Database</strong>: MySQL</li>
  <li><strong>Real-Time Notifications</strong>: Laravel Echo, Pusher, or WebSocket</li>
  <li><strong>Image Storage</strong>: AWS S3</li>
  <li><strong>Containerization</strong>: Docker, Laravel Sail</li>
  <li><strong>Deployment</strong>: AWS EC2</li>
  <li><strong>Version Control</strong>: Git</li>
</ul>

---

<h2>Installation</h2>

<h3>Prerequisites</h3>
<ul>
  <li>Docker and Docker Compose installed.</li>
  <li>Node.js and Composer installed (for local development).</li>
  <li>AWS Account (for S3 and EC2).</li>
</ul>

<h3>Steps</h3>
<ol>
  <li>Clone the repository:
    <pre><code>git clone https://github.com/your-username/performance-tracker-api.git
cd performance-tracker-api</code></pre>
  </li>
  <li>Set up environment variables:
    <ul>
      <li>Copy <code>.env.example</code> to <code>.env</code> and update the database credentials, AWS S3 credentials, and other settings.</li>
    </ul>
  </li>
  <li>Build and run the Docker containers:
    <pre><code>docker-compose up -d</code></pre>
  </li>
  <li>Install dependencies:
    <pre><code>docker-compose exec app composer install
docker-compose exec app npm install</code></pre>
  </li>
  <li>Run migrations and seed the database:
    <pre><code>docker-compose exec app php artisan migrate --seed</code></pre>
  </li>
  <li>Compile frontend assets:
    <pre><code>docker-compose exec app npm run dev</code></pre>
  </li>
  <li>Access the application:
    <ul>
      <li>Open <a href="http://localhost:8000" target="_blank">http://localhost:8000</a> in your browser.</li>
    </ul>
  </li>
</ol>

---

<h2>Deployment</h2>
<p>
  The system is deployed on <strong>AWS EC2</strong> using <strong>Docker</strong> for containerization. Here’s how it’s set up:
</p>
<ul>
  <li><strong>Dockerized Setup</strong>: The application runs in Docker containers for consistency across environments.</li>
  <li><strong>AWS EC2</strong>: The system is hosted on an EC2 instance for scalability and reliability.</li>
  <li><strong>CI/CD</strong>: Automated deployment pipeline using GitHub Actions or AWS CodeDeploy (optional).</li>
</ul>

---

<h2>Versioning</h2>
<p>
  This is <strong>Version 1.0.0</strong> of the Performance Tracker API, released on <strong>October 2023</strong>.
</p>

---

<h2>License</h2>
<p>
  This project is licensed under the <strong>MIT License</strong>. See the <a href="LICENSE" target="_blank">LICENSE</a> file for details.
</p>

---

<h2>Contributing</h2>
<p>
  Contributions are welcome! Please follow these steps:
</p>
<ol>
  <li>Fork the repository.</li>
  <li>Create a new branch (<code>git checkout -b feature/YourFeatureName</code>).</li>
  <li>Commit your changes (<code>git commit -m 'Add some feature'</code>).</li>
  <li>Push to the branch (<code>git push origin feature/YourFeatureName</code>).</li>
  <li>Open a pull request.</li>
</ol>

---

<h2>Contact</h2>
<p>
  For any questions or feedback, feel free to reach out:
</p>
<ul>
  <li><strong>📧 Email</strong>: <a href="mailto:your-email@example.com" target="_blank">your-email@example.com</a></li>
  <li><strong>🐦 X (Twitter)</strong>: <a href="https://twitter.com/your-x-handle" target="_blank">@your-x-handle</a></li>
  <li><strong>🔗 LinkedIn</strong>: <a href="https://linkedin.com/in/your-linkedin" target="_blank">linkedin.com/in/your-linkedin</a></li>
  <li><strong>📸 Instagram</strong>: <a href="https://instagram.com/your-instagram" target="_blank">@your-instagram</a></li>
  <li><strong>🌐 Portfolio</strong>: <a href="https://your-portfolio.com" target="_blank">your-portfolio.com</a></li>
</ul>

---

<h2>Screenshots</h2>
<p>
  <img src="/screenshots/dashboard.png" alt="Dashboard" width="300">
  <img src="/screenshots/course-management.png" alt="Course Management" width="300">
  <img src="/screenshots/assignment-tracking.png" alt="Assignment Tracking" width="300">
</p>

---

<p align="center">
  Thank you for using the Performance Tracker API! 🚀
</p>

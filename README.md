# Multi-User Complaint Portal App

A full-stack, secure web application engineered to streamline internal company grievances and customer support complaints. The application features independent, role-based workflows for both clients and administrative teams.

## Key Features

### 👤 User Dashboard
* **Secure Authentication:** Session-protected registration, login, and secure logout mechanisms.
* **Complaint Submission:** Dynamic form with JavaScript validation to submit complaints with specific categories.
* **Real-Time Status Tracking:** Personal archive to monitor live status updates of complaints (Pending, In-Progress, Resolved).

### ⚙️ Admin Dashboard
* **Central Oversight:** Global dashboard displaying total open, pending, and resolved complaints.
* **Actionable Controls:** Administrative power to update complaint statuses and assign resolutions.
* **Data Persistence:** Clean data filtering to view complaints by priority, date, or user ID.

## 🛠️ Tech Stack Used
* **Front-End:** HTML5, CSS3 (Mobile-Responsive Custom Layouts)
* **Client-Side Logic:** JavaScript (Form validation and UI event triggers)
* **Back-End Processing:** PHP (Session management, request handling, input sanitization)
* **Database Engine:** MySQL (Relational tables with primary/foreign key connections)

## 📦 Local Installation Guide

To run this application locally on your machine, ensure you have **XAMPP** installed, then follow these steps:

1. Clone this repository or download the ZIP folder.
2. Move the project folder inside your server directory: `C:/xampp/htdocs/complaint-portal/`
3. Open XAMPP Control Panel and start **Apache** and **MySQL**.
4. Open your browser and navigate to `http://localhost/phpmyadmin/`.
5. Create a new database named `complaint_db`.
6. Import the database structural layout using the provided `.sql` file.
7. Run the application by visiting: `http://localhost/complaint-portal/`

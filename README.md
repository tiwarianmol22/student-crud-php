## Repository Overview

**student-crud-php** is a **Student Management System** built with PHP and MySQL. It's a backend-focused web application for managing student records. Created 31 days ago, last updated on April 9, 2026.

### What It Contains:

A full-stack CRUD (Create, Read, Update, Delete) application with **4 PHP files**:

1. **db.php** - Database connection
   - Connects to MySQL database "studentdb"
   - Uses credentials: root/root on localhost:8889

2. **index.php** - Main dashboard page
   - Add Student form with fields: Name, Email, Mobile, Department
   - Displays all students in a Bootstrap-styled table
   - **CREATE** operation: Inserts new student records
   - **READ** operation: Displays all students with Edit/Delete buttons
   - Uses Bootstrap 5 for styling

3. **edit.php** - Edit student record
   - Fetches student data by ID
   - Pre-fills form with existing student information
   - **UPDATE** operation: Modifies student details
   - Redirects back to index.php after update

4. **delete.php** - Delete student record
   - **DELETE** operation: Removes student from database
   - Redirects back to index.php after deletion

### What It Does:

This is a **Student Management CRUD application** that allows you to:
- ✅ **Create** - Add new students with name, email, mobile, and department
- ✅ **Read** - View all students in a table format
- ✅ **Update** - Edit existing student information
- ✅ **Delete** - Remove students from the system

### Key Features:
- Clean, professional UI using **Bootstrap 5**
- MySQL database integration
- Simple form-based data entry
- Interactive student list with action buttons
- Responsive design

This is a practical learning project demonstrating basic web development with PHP and databases, commonly used in full-stack development courses.

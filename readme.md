NIKA'S RESTAURANT POS SYSTEM
=============================

COMPLETE DOCUMENTATION

-------------------------------------------------------------------------------
TABLE OF CONTENTS
-------------------------------------------------------------------------------
1. System Overview
2. Features
3. System Requirements
4. Installation Guide
5. Database Setup
6. File Structure
7. Usage Instructions
8. Login Credentials
9. Troubleshooting
10. Security Notes
11. Support & Debugging

-------------------------------------------------------------------------------
1. SYSTEM OVERVIEW
-------------------------------------------------------------------------------
Nika's Restaurant POS is a complete Point of Sale system for restaurant 
management built with PHP, MySQL, and Bootstrap. It provides a comprehensive 
solution for processing orders, managing products, handling users, and 
generating business reports.

-------------------------------------------------------------------------------
2. FEATURES
-------------------------------------------------------------------------------
- User Authentication - Secure login system for staff and administrators
- POS Interface - Intuitive point of sale interface for processing orders
- Order Management - Track and manage customer orders
- Product Management - Add, and remove menu items
- Category Management - Organize products by categories
- User Management - Manage staff accounts and permissions
- Emergency Access - Fallback system for critical situations
- Debug Tools - Built-in debugging utilities

-------------------------------------------------------------------------------
3. SYSTEM REQUIREMENTS
-------------------------------------------------------------------------------
- XAMPP / WAMP / LAMP stack (XAMPP recommended)
- PHP 7.4 or higher
- MySQL 5.7 or higher
- Web browser (Chrome, Firefox, Edge, Safari)
- Minimum 4GB RAM recommended
- 100MB free disk space

-------------------------------------------------------------------------------
4. INSTALLATION GUIDE
-------------------------------------------------------------------------------

STEP 1: Install XAMPP
- Download XAMPP from https://www.apachefriends.org/
- Install XAMPP on your system (default: C:\xampp)
- Open XAMPP Control Panel
- Start Apache and MySQL services (click "Start" buttons)

STEP 2: Copy System Files
- Copy the entire "nikas_restaurant_pos" folder to:
  C:\xampp\htdocs\

STEP 3: Configure Database
- Open phpMyAdmin: http://localhost/phpmyadmin
- Click "New" to create a database
- Database name: nika_restaurant_pos
- Charset: utf8_general_ci
- Click "Create"
- Click "Import" tab
- Choose file: database.sql (from the pos folder)
- Click "Go" at bottom

STEP 4: Configure Connection
- Open file: C:\xampp\htdocs\nikas_restaurant_pos\config.php
- Update database settings:
  
  define('DB_HOST', 'localhost');
  define('DB_USER', 'root');
  define('DB_PASS', '');
  define('DB_NAME', 'nika_restaurant_pos');

STEP 5: Run Setup Script (Alternative)
- Navigate to: http://localhost/nikas_restaurant_pos/set_up_database.php
- Follow on-screen instructions
- Script will automatically configure everything

-------------------------------------------------------------------------------
5. DATABASE SETUP DETAILS
-------------------------------------------------------------------------------

METHOD A - Using phpMyAdmin (Manual):
1. Open: http://localhost/phpmyadmin
2. Create database: nika_restaurant_pos
3. Import database.sql file
4. Verify tables are created (users, products, categories, orders)

METHOD B - Using Setup Script (Automatic):
1. Navigate to: http://localhost/nikas_restaurant_pos/set_up_database.php
2. Enter database details
3. Click "Setup Database"
4. System will create all tables automatically

METHOD C - Emergency Setup:
1. Run: http://localhost/nikas_restaurant_pos/emergency.php
2. Use emergency access to setup database
3. Follow emergency prompts

-------------------------------------------------------------------------------
6. FILE STRUCTURE
-------------------------------------------------------------------------------
nikas_restaurant_pos/
│
├── api/                      # API endpoints for external access
│
├── includes/                 # PHP include files and functions
│
├── categories.php            # Category management interface
│
├── config.php                # Main configuration file
│
├── database.sql              # Database structure SQL file
│
├── debug.pos.php             # Debugging and diagnostics tool
│
├── emergency.php             # Emergency access system
│
├── fix_login.php             # Login repair utility
│
├── index.php                 # Main dashboard / homepage
│
├── login.php                 # User login page
│
├── login_test.php            # Login testing utility
│
├── logout.php                # Logout handler
│
├── orders.php                # Order management interface
│
├── pos.php                   # Point of Sale main interface
│
├── products.php              # Product management interface
│
├── readme.me                 # This documentation file
│
├── set_up_database.php       # Database setup script
│
├── users.php                 # User management interface

-------------------------------------------------------------------------------
7. USAGE INSTRUCTIONS
-------------------------------------------------------------------------------

ACCESSING THE SYSTEM:
Open web browser and go to:
http://localhost/nikas_restaurant_pos

MAIN MODULES:

A) POINT OF SALE (pos.php)
   - Process customer orders
   - Add items to cart
   - Calculate totals with tax
   - Process payments
   - Print receipts

B) PRODUCTS (products.php)
   - View all menu items
   - Add new products
   - Edit existing products
   - Delete products
   - Update prices and descriptions

C) CATEGORIES (categories.php)
   - Create product categories
   - Edit category names
   - Delete categories
   - Organize menu structure

D) ORDERS (orders.php)
   - View all orders
   - Search order history
   - View order details
   - Track order status
   - Filter by date/status

E) REPORTS (reports.php)
   - Generate daily sales report
   - Monthly revenue report
   - Product performance report
   - Category sales analysis
   - Export reports to CSV/PDF

F) USERS (users.php)
   - Add new staff users
   - Edit user permissions
   - Reset passwords
   - Delete/disable users
   - Set user roles (Admin/Staff)

-------------------------------------------------------------------------------
8. LOGIN CREDENTIALS
-------------------------------------------------------------------------------

DEFAULT ADMINISTRATOR ACCESS:
Username: admin
Password: admin123

DEFAULT STAFF ACCESS:
Username: Cashier
Password: Cashier123

IMPORTANT SECURITY NOTES:
- CHANGE default passwords immediately after first login
- Each staff member should have unique login
- Do not share passwords
- Use strong passwords (8+ characters, mix of letters/numbers/symbols)

TO CHANGE PASSWORD:
1. Log in as administrator
2. Go to Users Management (users.php)
3. Click "Edit" next to user account
4. Enter new password
5. Click "Save Changes"

-------------------------------------------------------------------------------
9. TROUBLESHOOTING
-------------------------------------------------------------------------------

LOGIN ISSUES:
Problem: Cannot log in with admin credentials

Solutions:
1. Run fix_login.php - http://localhost/nikas_restaurant_pos/fix_login.php
2. Use emergency access - http://localhost/nikas_restaurant_pos/emergency.php
3. Check database connection in config.php
4. Verify MySQL service is running in XAMPP
5. Reset password directly in database via phpMyAdmin

DATABASE CONNECTION ERRORS:
Problem: "Could not connect to database"

Solutions:
1. Check if MySQL is running (green light in XAMPP)
2. Verify config.php credentials are correct
3. Confirm database exists in phpMyAdmin
4. Check if port 3306 is not blocked
5. Run set_up_database.php again

WHITE SCREEN (PHP ERROR):
Problem: Page shows blank white screen

Solutions:
1. Enable PHP error reporting in config.php
2. Check PHP error logs in C:\xampp\php\logs
3. Verify PHP version (needs 7.4+)
4. Check file permissions (needs 755 or 644)

PAGES NOT LOADING:
Problem: 404 error or page not found

Solutions:
1. Confirm files are in C:\xampp\htdocs\nikas_restaurant_pos\
2. Check Apache is running in XAMPP
3. Verify URL: http://localhost/nikas_restaurant_pos/
4. Restart Apache service

DEBUGGING TOOL:
Use debug.pos.php for comprehensive diagnostics:
http://localhost/nikas_restaurant_pos/debug.pos.php

This tool checks:
- PHP version compatibility
- Database connection
- File permissions
- Required extensions
- Configuration settings

EMERGENCY ACCESS:
If completely locked out:
1. Navigate to: http://localhost/nikas_restaurant_pos/emergency.php
2. Follow emergency procedures
3. Reset system access

-------------------------------------------------------------------------------
10. SECURITY NOTES
-------------------------------------------------------------------------------

ESSENTIAL SECURITY MEASURES:

1. IMMEDIATE ACTIONS (First Login):
   - Change default admin password
   - Delete or rename setup files (set_up_database.php)
   - Remove debug files in production (debug.pos.php)
   - Create individual staff accounts

2. ONGOING SECURITY:
   - Regular database backups (weekly minimum)
   - Keep XAMPP updated to latest version
   - Monitor user access logs
   - Review orders for suspicious activity
   - Use HTTPS in production environments

3. FILE PROTECTION:
   - Restrict access to config.php
   - Set proper file permissions
   - Keep .htaccess files updated
   - Move config.php above webroot if possible

4. DATABASE SECURITY:
   - Use strong database password
   - Don't use default 'root' user in production
   - Backup database regularly
   - Consider encryption for sensitive data

5. PRODUCTION DEPLOYMENT:
   - Change default ports
   - Implement firewall rules
   - Use SSL certificate
   - Disable error reporting
   - Remove all debug tools

BACKUP PROCEDURE:
Backup database via phpMyAdmin:
1. Open phpMyAdmin
2. Select nika_restaurant_pos database
3. Click "Export" tab
4. Choose "Quick" method
5. Click "Go" to download SQL backup

Backup files:
Copy entire folder: C:\xampp\htdocs\nikas_restaurant_pos\
Save to external drive or cloud storage

-------------------------------------------------------------------------------
11. SUPPORT & DEBUGGING
-------------------------------------------------------------------------------

BUILT-IN DEBUGGING TOOLS:

debug.pos.php - Complete system diagnostics
- Tests PHP environment
- Checks database connectivity
- Verifies file structure
- Displays error logs
- Recommends fixes

fix_login.php - Authentication repair
- Resets admin password
- Repairs user table
- Fixes session issues
- Restores login functionality

login_test.php - Login testing
- Tests authentication system
- Verifies password hashing
- Checks session handling

COMMON ERROR CODES & SOLUTIONS:

Error 1045 (Access denied for user):
- Check database password in config.php
- Verify MySQL user permissions

Error 1049 (Unknown database):
- Database doesn't exist
- Create database in phpMyAdmin
- Run set_up_database.php

Error 2002 (Cannot connect to MySQL):
- MySQL service not running
- Start MySQL in XAMPP
- Check host: localhost vs 127.0.0.1

PHP Warnings about session:
- Check session save path permissions
- Clear browser cookies
- Restart Apache

GETTING HELP:

Online Resources:
- Check debug.pos.php first
- Review PHP error logs
- Search error messages online
- Check XAMPP forums

Manual Support Steps:
1. Run all debug utilities
2. Note any error messages
3. Check file permissions
4. Verify PHP extensions loaded
5. Test database connection separately

-------------------------------------------------------------------------------
VERSION HISTORY
-------------------------------------------------------------------------------
Version 1.0.0 (Current)
- Initial release
- Complete POS functionality
- User management system
- Order processing
- Report generation

-------------------------------------------------------------------------------
LICENSE & COPYRIGHT
-------------------------------------------------------------------------------
This software is proprietary and confidential.
Copyright © 2024 Nika's Restaurant. All Rights Reserved.

Unauthorized copying, distribution, or modification is prohibited.

-------------------------------------------------------------------------------
CONTACT & SUPPORT
-------------------------------------------------------------------------------
For technical support or questions:
- Use built-in debugging tools first
- Check documentation thoroughly
- Contact system administrator

-------------------------------------------------------------------------------
END OF DOCUMENTATION
-------------------------------------------------------------------------------

Developed for Nika's Restaurant
Last Updated: 2024

Thank you for using Nika's Restaurant POS System!
# 🛒 E-Commerce Web Application (PHP + MySQL)

A role-based e-commerce web application built using **PHP, MySQL, HTML, CSS, and JavaScript**, running on the XAMPP Apache server.  
The system supports **Admin**, **Vendor**, and **Customer** roles, handling authentication, product management, ordering, and cart operations.

---

## 🚀 Features

### 👤 Authentication (Customer & Vendor)
- Login & Signup with session-based authentication  
- Role-based redirection (Vendor → Dashboard, Customer → Products page)  
- AuthGuard to block unauthorized access  
- Secure login with password validation  

### 🛍️ Customer Module
- View all products  
- Add/remove items from cart  
- Place and track orders  
- View order history  
- Manage profile  

### 🛒 Vendor Module
- Upload new products  
- Manage existing products  
- View all listed items  
- Handle orders placed for vendor’s products  

### 🎛️ Admin Module
*(If implemented — describe briefly)*  
- Manage vendors  
- Manage customers  
- View overall data  

---

## 🏗️ Tech Stack

| Layer | Technology |
|-------|------------|
| Frontend | HTML, CSS, JavaScript |
| Backend | PHP (Native, no framework) |
| Database | MySQL (phpMyAdmin) |
| Server | Apache (XAMPP) |
| Version Control | Git & GitHub |

---

## 📂 Project Structure

project/
│

├── admin/
│ └── ...
│

├── customer/
│ └── addcart.php
│ └── view_pdt.php
│ └── orders.php
│ └── ...
│

├── vendor/
│ └── home.php
│ └── upload_product.php
│ └── view_pdt.php
│ └── ...
│

├── shared/
│ ├── login.php
│ ├── signup.php
│ ├── authguard.php
│ ├── connection.php (ignored in Git; contains DB credentials)
│ └── connection.example.php (sample file for setup)
│

├── images/
└── README.md


---

## 🛠️ Installation & Setup (Local XAMPP)

### **1. Install XAMPP**
Download from: https://www.apachefriends.org/

Start:
- Apache  
- MySQL  

### **2. Clone the Repository**
```
git clone https://github.com/your-username/your-repo-name.git

```

Move the project into XAMPP’s directory:
C:/xampp/htdocs/project-folder


### **3. Import the Database**
1. Open: http://localhost/phpmyadmin  
2. Create database (example: `ecommerce_db`)  
3. Import the SQL file (if you provide one)  

### **4. Configure Database**
Create and update:

`shared/connection.php`

```
<?php $host = "localhost"; $user = "root"; $pass = ""; $dbname = "ecommerce_db"; $conn = mysqli_connect($host, $user, $pass, $dbname); ?>
```

(Your real connection.php is ignored by Git for security.)

### **5. Run the Project**
Go to:
http://localhost/project-folder/shared/login.html


---

## 🧩 Future Enhancements

- Add JWT-based API version  
- Add password hashing (if not implemented)  
- Add image upload validation  
- Migrate PHP code to MVC structure  
- Add search and filter for products  

---

## 🤝 Contributing

1. Fork the repo  
2. Create a feature branch:  
   `git checkout -b feature-name`  
3. Commit changes and push  
4. Create a pull request  

---

## 👨‍💻 Author
**Vini Vyas**  
Full-Stack Developer | MCA  
GitHub: https://github.com/ViniVyas  


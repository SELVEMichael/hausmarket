# HausMarket 🛒

HausMarket is a modern ecommerce marketplace web application where users can browse, buy, and sell products online. Users can create accounts, manage profiles, post products, edit listings, and explore products uploaded by other sellers.

---

# Features

## User Authentication
- User registration
- User login/logout
- PHP session authentication
- Protected routes for sellers

## User Profiles
- Custom usernames
- Profile images
- Editable user profiles
- Seller profile pages

## Product Marketplace
- Add products
- Edit products
- Delete products
- Browse marketplace products
- Responsive product grid
- Seller usernames displayed instead of emails

## Responsive Design
- Mobile-friendly layout
- Responsive navigation bar
- Responsive product cards
- Optimized for desktop, tablet, and smartphone screens

---

# Technologies Used

- PHP
- MySQL
- HTML5
- CSS3
- XAMPP
- Git & GitHub

---

# Project Structure

```bash
hausmarket/
│
├── config/
│   └── db.php
│
├── database/
│   └── schema.sql
│
├── frontend/
│   ├── index.php
│   ├── navbar.php
│   ├── register.php
│   ├── login.php
│   ├── profile.php
│   ├── edit_profile.php
│   ├── seller_profile.php
│   ├── products.php
│   ├── add_product.php
│   ├── edit_product.php
│   └── assets/
│       └── style.css
│
├── product-service/
│   ├── create_product.php
│   ├── update_product.php
│   └── delete_product.php
│
├── user-service/
│   ├── create_user.php
│   ├── login_user.php
│   ├── logout.php
│   └── update_profile.php
│
└── README.md
```

---

# Installation Guide

## 1. Clone Repository

```bash
git clone https://github.com/YOUR_USERNAME/hausmarket.git
```

---

## 2. Move Project to XAMPP

Move the project folder into:

```bash
C:\xampp\htdocs\
```

---

## 3. Start XAMPP

Start:
- Apache
- MySQL

---

## 4. Create Database

Open:

```bash
http://localhost/phpmyadmin
```

Create a database named:

```bash
hausmarket
```

---

## 5. Import Database Schema

Import:

```bash
database/schema.sql
```

---

## 6. Run Website

Open:

```bash
http://localhost/hausmarket/frontend/
```

---

# Screenshots

## Homepage
Modern responsive landing page with hero section and navigation.
<img width="1357" height="674" alt="image" src="https://github.com/user-attachments/assets/9160d372-75bd-4b70-b9e7-8add9248666f" />

## Marketplace
Responsive product cards with edit/delete functionality.
<img width="1365" height="641" alt="image" src="https://github.com/user-attachments/assets/297eb89b-ed56-44d3-a0c1-aaa218bb8650" />

## User Profiles
Seller profile pages with usernames and profile images.
<img width="1365" height="627" alt="image" src="https://github.com/user-attachments/assets/a2114544-e5ad-4ca7-a02a-4f39db65ec36" />

---

# Future Improvements

- Shopping cart system
- Checkout/payment integration
- Product categories
- Search functionality
- Product image uploads
- Messaging system
- Seller ratings
- Admin dashboard

---

# Author

Developed by Michael.

---

# License

This project is for educational purposes.

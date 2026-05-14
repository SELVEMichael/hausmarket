# HausMarket 🛒

HausMarket is a modern ecommerce marketplace web application where users can browse, buy, and sell products online. Users can create accounts, manage profiles, upload products, edit listings, and explore products uploaded by other sellers.

The platform was built using PHP, MySQL, HTML, CSS, and XAMPP.

---

# Features

## Authentication System

- User registration
- User login/logout
- PHP session authentication
- Redirect-after-login system
- Protected seller pages
- Dynamic navigation bar

---

# User Profiles

- Custom usernames
- Editable profiles
- Seller profile pages
- Profile picture uploads
- Profile image URL support
- User bios

---

# Marketplace Features

- Browse products
- Sell products
- Edit products
- Delete products
- Product ownership permissions
- PNG Kina currency support (K)
- Seller usernames instead of emails

---

# Product Image Uploads

Users can:

- Upload product images from local device storage
- Use image URLs
- Keep existing images when editing products

Supported formats:

- JPG
- JPEG
- PNG
- GIF
- WEBP

---

# Shopping Experience

- Add to Cart button
- View Seller button
- Buyer/Seller conditional actions
- Guests redirected to login when adding to cart
- Automatic redirect back after login/register

---

# Modern UI/UX

- Responsive design
- Mobile-friendly layout
- Glassmorphism design
- Hero background images
- Marketplace background styling
- Modern authentication pages
- Responsive product grid
- Professional buttons and cards

---

# Technologies Used

- PHP
- MySQL
- HTML5
- CSS3
- XAMPP
- Git
- GitHub

---

# Folder Structure

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
│   ├── cart.php
│   ├── uploads/
│   └── assets/
│       ├── style.css
│       └── images/
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
git clone https://github.com/SELVEMichael/hausmarket.git
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

http://localhost/phpmyadmin

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

Modern hero section with responsive glassmorphism UI.

<img width="1365" height="638" alt="image" src="https://github.com/user-attachments/assets/4f198fe0-3d9e-4012-9d4a-d4dd48a07ec3" />


## Marketplace

Responsive product grid with buyer/seller interactions.

<img width="1365" height="641" alt="image" src="https://github.com/user-attachments/assets/ad8f4b62-9cbf-4235-bcc6-d114a5843172" />


## Authentication

Modern sign in and registration pages.

<img width="1365" height="636" alt="image" src="https://github.com/user-attachments/assets/9c4d475c-ff8f-44ae-ac74-29009726e67d" />

<img width="1365" height="640" alt="image" src="https://github.com/user-attachments/assets/5385ccfc-76ee-4953-9002-5b230c85430c" />


## User Profiles

Editable profile pages with image upload support.

<img width="1365" height="638" alt="image" src="https://github.com/user-attachments/assets/661b3b36-1aba-4b98-848e-18e7bf459425" />


---

# Future Improvements

- Real shopping cart system
- Checkout/payment integration
- Product categories
- Search functionality
- Wishlist/favorites
- Messaging system
- Seller ratings
- Admin dashboard
- Order history
- Notifications system

---

# Author

Developed by Brenden Kambuka, Michael Selve & Rita Wak

---

# License

This project is for educational purposes.

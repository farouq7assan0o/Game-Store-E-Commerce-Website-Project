# Game Store E-Commerce Website

## **Overview**

This project is a dynamic, multi-page e-commerce website designed for gaming enthusiasts. It was developed as part of the Website Design and Development course (Fall 2023-2024) at HTU. The site allows users to browse, search, and purchase games, gaming accessories, and hardware. It implements full-stack development principles, including both front-end and back-end functionality, database integration, and session-based authentication.

## **Purpose**

The website aims to simulate a real-world online game store. It includes functionalities such as:
- Persistent shopping cart
- User registration and authentication
- Product categories and detailed product views
- A fully operational checkout system
- Responsive UI with dynamic homepage sliders
- Front-end and back-end separation using local storage and PHP (inferred from structure)

## **Target Audience**

The website targets casual and professional gamers aged 12–35. These users are typically tech-savvy and interested in high-performance gaming systems and accessories.

## **Technologies Used**

**Front-End:**
- HTML5
- CSS3
- JavaScript (Vanilla)
- Responsive layout via media queries

**Back-End:**
- PHP (signup and signin processing)
- LocalStorage (used for cart management in `cart.js`)

**Other Tools:**
- InfinityFree and 000Webhost for hosting
- FileZilla for FTP deployment
- Chrome DevTools for responsiveness testing

## **Key Features**

**1. Persistent Shopping Cart**
- Cart retains items even after logout or page refresh
- Users can update quantity or remove items

**2. Dynamic Homepage Slider**
- Three rotating product banners
- Fully responsive for all screen sizes

**3. Product Categories and Pages**
- Organized tables for various product types
- "Add to Cart" and product detail links

**4. User Authentication**
- Sign-in and sign-up pages
- Session-based login/logout system
- Access control for protected routes like checkout

**5. Responsive and Accessible Design**
- Mobile-first design approach
- Navigation bar adapts to screen size
- Tested across multiple browsers

**6. Testing and QA**
- 29 test cases defined and executed (passed: 90%)
- Tests included: responsiveness, security, database interactions, access control, and UI/UX

## **Testing Strategy**

All components of the website were tested, including:
- UI consistency across devices and browsers
- Cart operations (add, update, remove)
- Session management and access restrictions
- Functional navigation between all pages
- Error handling and validation for forms

**Tested With:**
- Manual browser-based tests
- Chrome DevTools for responsiveness
- Test plan documents and QA checklist

## **Challenges and Resolutions**

- **Session bugs**: Refactored session handling to avoid unauthorized access
- **Cart sync issues**: Enhanced `localStorage` logic to persist cart state
- **Checkout protection**: Implemented redirection if user not logged in
- **Design alignment**: Adjusted CSS for cross-browser compatibility

## **Recommendations for Future Work**

- Implement real-time payment gateway
- Add search functionality with auto-complete
- Enable product reviews and ratings
- Create a mobile app version
- Include admin dashboard for managing inventory
- Integrate SEO metadata and analytics tools
- Introduce wishlist and live chat support

## **Folder Structure**

├── index.html

├── aboutus.html

├── products.html

├── cart.html

├── signin.html

├── ProductDescription.html

├── cart.js

├── script.js

├── assets/

│ ├── images (webp, jpg, png)

│ ├── style.css

├── backend/

│ ├── signin_process.php

│ ├── signup_process.php


## **Deployment**

- Domain registered via InfinityFree
- Hosted using 000webhost
- Uploaded files via File Manager and FTP

## **Author**

Farouq Hassan  
HTU - Website Design & Development  
Fall 2023–2024

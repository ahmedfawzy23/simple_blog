# Simple Blog - Laravel Application

A lightweight blog application built with Laravel for creating, managing, and publishing posts.

![Image](https://github.com/user-attachments/assets/7c151863-6341-4ba1-b7ae-1d62ce3c593b)

## Features
- Admin authentication (login)
- Create, edit, and delete blog posts (admin)
- View all posts with pagination (admin or guest)


## Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/ahmedfawzy23/simple_blog.git
   cd simple_blog

2. **Install dependencies**
   ```bash
    composer install
3. **Configure environment**
   ```bash
    cp .env.example .env
    php artisan key:generate
- Update .env with your **database** credentials.

4. **Run migrations**
   ```bash
    php artisan migrate
    php artisan db:seed

5. **Start the server**
   ```bash
    php artisan serve
6. **Open the application in your browser**

7. **Login with the credentials**   <br />**email:** admin@blog.com <br /> **password:** adminadmin

## Screenshots

- guest view

![Image](https://github.com/user-attachments/assets/3110b00f-026e-40d8-8fe5-11affa658706)

- login

![Image](https://github.com/user-attachments/assets/0232635f-a43d-485f-9cf3-a2e20e48d0c6)

- admin view

![Image](https://github.com/user-attachments/assets/10a3dc32-4d29-43be-8cc0-9d34f3f93832)
![Image](https://github.com/user-attachments/assets/19d3bb1c-4c1e-4547-8839-a88c8cf6838c)
![Image](https://github.com/user-attachments/assets/41f5ca57-c4b8-4cac-984f-e9c243c800f8)
![Image](https://github.com/user-attachments/assets/790b96f7-982a-4486-963d-ced865b73bba)

## video
https://drive.google.com/file/d/1Pv5JiUKqnQ9tVg9va5JJT8_exXM3ehfk/view?usp=sharing

## Technologies Used
- Backend: Laravel 12
- Frontend: HTML, Bootstrap 5
- Database: MySQL
- Tools: Composer

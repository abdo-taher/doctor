# My Doctor | طبيبي

**My Doctor** is a Laravel-based healthcare web application for helping patients discover doctors, register accounts, sign in, and contact the platform through a simple landing experience. The project is presented as an Arabic/English medical booking platform focused on making doctor access and clinic organization easier.

## Overview

The application introduces **طبيبي / My Doctor** as an e-health platform for:
- finding doctors
- booking appointments online
- supporting clinics and healthcare providers digitally
- allowing patients to create accounts and log in
- sending inquiries through a contact form

The current codebase is a lightweight Laravel 10 project with Blade views and a MySQL-backed database.

## Features

- **Landing page** with Arabic medical platform presentation
- **Patient registration**
- **Patient login/logout**
- **Contact form** for user inquiries
- **Basic user account storage**
- **Responsive frontend setup with Vite**

## Current Pages

- `/` — Home page
- `/login` — Patient login
- `/sign` — Patient registration

## Tech Stack

- **Backend:** PHP 8.1 + Laravel 10
- **Frontend:** Blade templates, CSS, JavaScript
- **Build Tool:** Vite
- **HTTP Client:** Axios
- **Database:** MySQL
- **Authentication:** Laravel auth/session-based flow

## Project Structure

```bash
doctor/
├── app/
│   └── Http/
│       └── Controllers/
├── config/
├── database/
│   └── migrations/
├── public/
├── resources/
│   └── views/
├── routes/
├── storage/
├── tests/
├── artisan
├── composer.json
├── package.json
└── vite.config.js

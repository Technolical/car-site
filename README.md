# Car Management System

This project is a **Car Management System** designed to allow users to add, edit, view, and delete car details of selected personnel. It uses a Laravel backend with a MySQL database to manage data. The system includes simple, responsive web pages to manage car details like make, model, year, and owner.

---

## Table of Contents

1. [Features](#features)
2. [Stack](#stack)
3. [Setup Instructions](#setup-instructions)
4. [Usage](#usage)
5. [Goals](#Goals)
6. [License](#license)

---

## Features

- Add new car details (make, model, year, owner).
- View car details on a clean, user-friendly page.
- Edit and update existing car details.
- Delete car records securely.
- Responsive design for better user experience on mobile and desktop.

---

## Stack

- **Frontend**: HTML, CSS (with custom styles), Blade templates
- **Backend**: Laravel 10
- **Database**: MySQL
- **Server**: Apache or PHP's built-in development server
- **Tools**: Composer, Artisan CLI

---

## Setup Instructions

### Prerequisites

Ensure you have the following installed:

- PHP 8.x
- Composer
- MySQL


## Usage

### Adding a New Car

1. Navigate to the **"Add"** page.
2. Fill in the car's make, model, and year. If the owner field is omitted, it defaults to "Unknown".
3. Click **"Add the car"** to save it to the database.

### Viewing Car Details

- From the homepage, click on a car to view its full details.

### Editing a Car

1. On the car details page, click **"Edit"**.
2. Update the fields as needed and click **"Save Changes"**.

### Deleting a Car

1. On the car details page, click **"Delete"**.
2. Confirm deletion to remove the car from the database.

---

## Goals

- Add user authentication for restricted access to editing or deleting cars.
- Include search and filter functionality for better car management.
- Implement a photo upload feature for car images.
- Add support for multiple owners.

---

## License

This project is open-source and available under the [MIT License](LICENSE).

 

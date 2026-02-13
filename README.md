# Laboratory 3: Laravel Pages, Controllers, and Routes

### Project Description
A personal portfolio application built with Laravel featuring three distinct pages: Home, Projects, and About. This project demonstrates the implementation of independent controllers, routing, and Blade templates.

### Screenshots

#### 1. Home Page
* **Light Mode:** ![Home Light](assets/home.png)
* **Dark Mode:** ![Home Dark](assets/home1.png)

#### 2. Projects Page
* **Light Mode:** ![Projects Light](assets/projects.png)
* **Dark Mode:** ![Projects Dark](assets/projects1.png)

#### 3. About Page
* **Light Mode:** ![About Light](assets/about.png)
* **Dark Mode:** ![About Dark](assets/about1.png)

---

### How to Run Locally

```bash
# 1. Clone the repository
git clone [https://github.com/xoptech/Laboratory-3-Laravel-Pages-Controllers-and-Routes.git](https://github.com/xoptech/Laboratory-3-Laravel-Pages-Controllers-and-Routes.git)
cd Laboratory-3-Laravel-Pages-Controllers-and-Routes

# 2. Install dependencies
composer install

# 3. Setup Configuration
cp .env.example .env
php artisan key:generate

# 4. Start the server
php artisan serve
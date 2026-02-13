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

# Prerequisites
- PHP 8.1+
- Composer
- Git

## How to Run Locally

### Step-by-Step

**1. Clone the repository**
```bash
git clone https://github.com/xoptech/Laboratory-3-Laravel-Pages-Controllers-and-Routes.git
cd Laboratory-3-Laravel-Pages-Controllers-and-Routes
```

**2. Install dependencies**
```bash
composer install
```

**3. Setup environment**

Linux/Mac:
```bash
cp .env.example .env
```

Windows:
```bash
copy .env.example .env
```

**4. Generate app key**
```bash
php artisan key:generate
```

**5. Start the server**
```bash
php artisan serve
```

**6. Visit:** http://localhost:8000

### One-Liner (Copy-Paste All)

**Linux/Mac:**
~~~bash
git clone https://github.com/xoptech/Laboratory-3-Laravel-Pages-Controllers-and-Routes.git && cd Laboratory-3-Laravel-Pages-Controllers-and-Routes && composer install && cp .env.example .env && php artisan key:generate && php artisan serve
~~~

**Windows (Command Prompt):**
~~~bash
git clone https://github.com/xoptech/Laboratory-3-Laravel-Pages-Controllers-and-Routes.git && cd Laboratory-3-Laravel-Pages-Controllers-and-Routes && composer install && copy .env.example .env && php artisan key:generate && php artisan serve
~~~

**Windows (PowerShell):**
~~~bash
git clone https://github.com/xoptech/Laboratory-3-Laravel-Pages-Controllers-and-Routes.git; cd Laboratory-3-Laravel-Pages-Controllers-and-Routes; composer install; copy .env.example .env; php artisan key:generate; php artisan serve
~~~
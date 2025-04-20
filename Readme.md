# php-with-mysql 🚀

A minimal and reliable replacement for XAMPP using Docker Compose.  
It includes **PHP**, **Nginx**, **MySQL**, and **phpMyAdmin** — all containerized and easy to set up.

---

## 📦 What’s Included?

- 🔧 Nginx as the web server
- 🐘 PHP (FPM) for processing PHP files
- 🐬 MySQL database
- 🧰 phpMyAdmin for database management
- 📁 Your website files go inside the `frontend/` folder

---

## 🧑‍💻 How to Run

### 1. 🐳 Install Docker & Docker Compose

- If you haven't already, install Docker and Docker Compose from the official docs:  
  👉 [https://docs.docker.com/compose/install/](https://docs.docker.com/compose/install/)

---

### 2. 📥 Clone this repository

```bash
git clone https://github.com/yourusername/php-with-mysql.git
cd php-with-mysql 
```

### 3. 🧠 Add Your Code

Put your PHP or frontend files inside the frontend/ directory.
Example:
```
frontend/
├── index.php
└── style.css
```

### 4. 🚀 Run the project
```bash
docker-compose up --build
```

### 5. 🌐 Access the Services
Service	URL

| Service       | URL                         |
| ------------- | --------------------------- |
| Your Website	| http://localhost:8080       |
| phpMyAdmin	| http://localhost/phpmyadmin |

### 6. 🔁 Stopping the services
```
docker-compose down
```

### 🤝 Contributions

Feel free to open an issue or pull request if you have suggestions or improvements!
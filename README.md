<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## 📦 Setup
- Docker / Docker Desktop to use with `.devcontainer`, this service will run PHP 8.2 and MysSql.
- On VsCode open the project on DevContainer, this will run composer install too and everything should be ready to run.

## 🚀 Usage
- `.env` file should be copied to root during composer installation (if not, simply copy and paste `.env.example` file)
- Running `php artinsa db:seed` command
  - It should load a user with email: `test@example.com` and password: `password`

## ⚙️ Internals
- This projects uses **Larvel Sanctum Tokens** to handle user login via API.
- Frontend url is configured to work for `http://localhost:3000`
- Repository pattern is used via `Services` to interact with data layer

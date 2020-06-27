# Bfin Sasu Task.

## Using Laravel

## Installation

Clone this repository

```bash
git clone https://github.com/istiake5/bfinsasu.git
```

Now install composer

```bash
composer install
```

Generate key on .env file

```bash
cp .env.example .env
php artisan key:generate
```
Database Setup

```bash
php artisan migrate --seed
```

Finally
```bash
php artisan serve
```

Login Credentials
```bash
Admin
Email: admin@blog.com
Password : password

User

 Email : author@blog.com
 Password : password
```
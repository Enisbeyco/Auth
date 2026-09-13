# PHP Authentication System

PHP ve MySQL kullanılarak geliştirilmiş güvenli, basit bir kullanıcı kayıt ve giriş sistemi.

## Özellikler
* Kullanıcı kayıt ve giriş sistemi
* Session tabanlı kimlik doğrulama
* Güvenli parola hashleme
* PDO Prepared Statements
* Temel form validation

## Güvenlik
* Parolalar `password_hash()` fonksiyonu ile hashlenmektedir.
* Giriş kontrolünde `password_verify()` kullanılmaktadır.
* SQL Injection riskine karşı **PDO Prepared Statements** kullanılmıştır.

## Kullanılan Teknolojiler
* PHP
* MySQL
* PDO
* Bootstrap 5

## Kurulum
1. Projeyi klonlayın:
   ```bash
   git clone [https://github.com/KULLANICI_ADI/REPO_ADI.git](https://github.com/KULLANICI_ADI/REPO_ADI.git)
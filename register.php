<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/registrations/registration-9/assets/css/registration-9.css">

    <title>Kayıt Ol | Güvenli Kimlik Doğrulama</title>
</head>

<body>

<section class="bg-primary min-vh-100 d-flex align-items-center py-4">
    <div class="container">
        <div class="row gy-4 align-items-center">

            <div class="col-12 col-md-6 col-xl-7">
                <div class="d-flex justify-content-center text-bg-primary">
                    <div class="col-12 col-xl-9">

                        <h1 class="h1 mb-4">
                            Güvenli ve Kolay Kullanıcı Deneyimi
                        </h1>

                        <p class="lead mb-5">
                            Güvenli kimlik doğrulama altyapısı ile hesabınızı
                            kolayca oluşturun ve platforma güvenle erişin.
                        </p>

                        <div class="text-end">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="48"
                                 height="48"
                                 fill="currentColor"
                                 class="bi bi-shield-check"
                                 viewBox="0 0 16 16">

                                <path d="M5.072 0.56A1 1 0 0 1 6 0h4a1 1 0 0 1 .928.56l.94 2.22a1 1 0 0 0 .51.51l2.22.94A1 1 0 0 1 15 5v4c0 3.866-2.239 5.83-4.165 6.864a8.6 8.6 0 0 1-2.435.83 1 1 0 0 1-.8 0 8.6 8.6 0 0 1-2.435-.83C3.239 14.83 1 12.866 1 9V5a1 1 0 0 1 .402-.8l2.22-.94a1 1 0 0 0 .51-.51z"/>

                                <path d="M10.97 6.03a.75.75 0 0 1 0 1.06l-3.992 3.992a.75.75 0 0 1-1.06 0L4.03 8.97a.75.75 0 1 1 1.06-1.06l1.358 1.357 3.462-3.461a.75.75 0 0 1 1.06 0"/>
                            </svg>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-xl-5">
                <div class="card border-0 rounded-4">

                    <div class="card-body p-3 p-md-4 p-xl-5">

                        <div class="row">
                            <div class="col-12">
                                <div class="mb-4">
                                    <h2 class="h3">Kayıt Ol</h2>
                                    <h3 class="fs-6 fw-normal text-secondary m-0">
                                        Hesabınızı oluşturmak için bilgilerinizi girin.
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <form action="register_process.php" method="POST">

                            <div class="row gy-3 overflow-hidden">

                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text"
                                               class="form-control"
                                               name="firstname"
                                               id="firstName"
                                               placeholder="Adınız"
                                               required>

                                        <label for="firstName">
                                            Ad
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text"
                                               class="form-control"
                                               name="lastname"
                                               id="lastName"
                                               placeholder="Soyadınız"
                                               required>

                                        <label for="lastName">
                                            Soyad
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="email"
                                               class="form-control"
                                               name="email"
                                               id="email"
                                               placeholder="ornek@email.com"
                                               required>

                                        <label for="email">
                                            E-posta Adresi
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="password"
                                               class="form-control"
                                               name="pass"
                                               id="password"
                                               placeholder="Şifre"
                                               required>

                                        <label for="password">
                                            Şifre
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input"
                                               type="checkbox"
                                               value="1"
                                               name="iAgree"
                                               id="iAgree"
                                               required>

                                        <label class="form-check-label text-secondary"
                                               for="iAgree">

                                            Kullanım koşullarını ve
                                            <a href="#!"
                                               class="link-primary text-decoration-none">
                                                gizlilik politikasını
                                            </a>
                                            kabul ediyorum.

                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="d-grid">
                                        <button class="btn btn-primary btn-lg"
                                                type="submit"
                                                name="btn">

                                            Kayıt Ol

                                        </button>
                                    </div>
                                </div>

                            </div>

                        </form>

                        <div class="row">
                            <div class="col-12">

                                <p class="m-0 text-secondary text-center mt-4">
                                    Zaten hesabınız var mı?
                                    <a href="login.php"
                                       class="link-primary text-decoration-none">
                                        Giriş Yap
                                    </a>
                                </p>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

</body>
</html>
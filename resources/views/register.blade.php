<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>إنشاء حساب - نظام المطعم</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body {
      background: url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80') no-repeat center center fixed;
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 20px;
    }

    .register-container {
      background: rgba(255, 255, 255, 0.95); /* زيادة الشفافية قليلاً */
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
      width: 100%;
      max-width: 450px; /* زيادة العرض قليلاً */
    }
  </style>
</head>
<body>
  <div class="register-container">
    <h2 class="text-center mb-4 text-primary">إنشاء حساب جديد</h2>
  

    <form action="/registerForm" method="POST">
      @csrf
          <div class="mb-3">
        <label for="newUsername" class="form-label">اسم المستخدم</label>
        <input type="text"  name="username"  class="form-control @error('username') is-invalid @enderror"  value="{{ old('username') }}"" />
        @error('username')
          <div class="invalid-feedback"> {{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="newEmail" class="form-label">البريد الإلكتروني</label>
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"/>
        @error('email')
          <div class="invalid-feedback"> {{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="newPassword" class="form-label">كلمة المرور</label>
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" minlength="6"/>
        @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-4">
        <label for="confirmPassword" class="form-label">تأكيد كلمة المرور</label>
        <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror"/>
        @error('password_confirmation')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="d-grid">
        <button type="submit" class="btn btn-primary btn-lg">إنشاء الحساب</button>
      </div>
    </form>
    
    <div class="text-center mt-3">
        <a href="/login" class="link text-decoration-none text-secondary">لديك حساب؟ سجّل الدخول</a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
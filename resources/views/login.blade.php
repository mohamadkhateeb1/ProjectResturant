<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>تسجيل الدخول - نظام المطعم</title>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', Tahoma, sans-serif; }
    body {
      background: url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80') no-repeat center center fixed;
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 20px;
    }
    .login-container {
      background: rgba(255, 255, 255, 0.93);
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
      width: 100%;
      max-width: 400px;
    }
    .login-container h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #2c3e50;
    }
    .form-group {
      margin-bottom: 20px;
    }
    .form-group label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
      color: #34495e;
    }
    .form-group input {
      width: 100%;
      padding: 12px;
      border: 1px solid #ddd;
      border-radius: 6px;
      font-size: 16px;
    }
    .form-group input:focus {
      outline: none;
      border-color: #e67e22;
    }
    .btn {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
    }
    .btn-login {
      background-color: #e67e22;
      color: white;
    }
    .btn-login:hover {
      background-color: #d35400;
    }
    .link {
      display: block;
      text-align: center;
      margin-top: 20px;
      color: #3498db;
      text-decoration: none;
      font-size: 14px;
    }
    .link:hover {
      text-decoration: underline;
    }
    .error-message {
      color: #e74c3c;
      text-align: center;
      margin-top: 10px;
      display: none;
    }
  </style>
</head>
<body>
  <div class="login-container">
    @error('error')
      <div class="error-message" style="display:block;">{{ $message }}</div>  
    @enderror
    <h2>تسجيل الدخول</h2>
    <form action="/loginForm" method="POST">
      <div class="form-group">
        <label for="email">الايميل</label>
        <input type="text" id="email" name="email" />
      </div>
      
      <div class="form-group">
        <label for="password">كلمة المرور</label>
        <input type="password" id="password" name="password" />
      </div>
      <button type="submit" class="btn btn-login">تسجيل الدخول</button>

    </form>
    <a href="register.html" class="link">ليس لديك حساب؟ أنشئ واحدًا الآن</a>
  </div>
</body>
</html>
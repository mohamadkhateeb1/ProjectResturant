{{-- @extends('views.index') --}}
@section('content')
   <style>
        body {
            background-image: url('https://images.unsplash.com/photo-1555396273-367ea4eb4db5?q=80&w=1974&auto=format&fit=crop' );
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        .navbar {
            background-color: rgba(0, 0, 0, 0.7) !important; /* خلفية سوداء شفافة */
            backdrop-filter: blur(10px); /* تأثير ضبابي للخلفية */
        }
        .navbar-brand, .nav-link {
            color: #fff !important; /* لون النص أبيض */
            font-weight: bold;
        }
        .nav-link:hover, .nav-link.active {
            color: #ffc107 !important; /* لون أصفر عند التمرير أو العنصر النشط */
        }
        .navbar-brand {
            font-size: 1.5rem;
        }
    </style>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">مطعمنا</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">الرئيسية</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">قائمة الطعام</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">احجز طاولة</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">تواصل معنا</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/login">تسجيل الدخول</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/register">التسجيل</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
@endsection
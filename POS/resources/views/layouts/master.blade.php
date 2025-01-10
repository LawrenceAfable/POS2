<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ config('app.name') }}</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

   <!-- Bootstrap Icons -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <style>
    /* Reset Box Model */
    * {
      box-sizing: border-box;
    }

    /* Sidebar Styling */
    .sidebar {
      background-color: #f8f9fa; /* Light background */
      min-height: 100vh;
      position: sticky;
      top: 0;
      padding-top: 20px;
      border-right: 1px solid #dee2e6; /* Subtle border */
    }

    .sidebar a {
      color: #333;
      padding: 10px 20px;
      display: block;
      text-decoration: none;
      font-weight: 500;
      transition: background-color 0.2s ease, padding-left 0.2s ease;
    }

    .sidebar a:hover, .sidebar a.active {
      background-color: #e9ecef; /* Subtle hover */
      padding-left: 25px;
    }

    /* Main Content */
    .main-content {
      padding: 20px;
      background-color: #ffffff;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      margin-top: 20px;
    }

    /* Responsive Sidebar */
    @media (max-width: 768px) {
      .sidebar {
        position: relative;
        min-height: auto;
        border-right: none;
      }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  @include('partials.navbar')

  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <nav class="col-md-3 col-lg-2 sidebar">
        @include('partials.sidebar')
      </nav>

      <!-- Main Content -->
      <main class="col-md-9 col-lg-10 py-4">
        <div class="main-content">
          <h1 class="mb-4">@yield('page-title', 'Default Page Title')</h1>
          @yield('content')
        </div>
      </main>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

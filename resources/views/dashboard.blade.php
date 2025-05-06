<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Product Dashboard</title>
  <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>

  <div class="container">
    
    <aside class="sidebar" id="sidebar">
      <h2 class="logo">MyAdmin</h2>
      <ul class="nav">
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Users</a></li>
        <li><a href="#">Settings</a></li>
      </ul>
    </aside>

    
    <div id="sidebarOverlay" class="overlay" onclick="toggleSidebar()"></div>

   
    <div class="main">
      <header class="topbar">
        <button class="toggle-btn" onclick="toggleSidebar()">☰</button>
        
      </header>

      <main class="content">
        @yield('content')
      </main>
    </div>
  </div>

  <script>
    function toggleSidebar() {
      const sidebar = document.getElementById('sidebar');
      const overlay = document.getElementById('sidebarOverlay');

      sidebar.classList.toggle('active');
      overlay.classList.toggle('active');
    }
  </script>

</body>

</html>

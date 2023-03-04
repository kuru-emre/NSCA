<nav class="navbar navbar-expand-lg bg-dark h-100" data-bs-theme="dark">
  <button class="navbar-toggler m-2" type="button" data-bs-toggle="collapse" data-bs-target="#toggle" aria-controls="toggle" aria-expanded="false" aria-label="Toggle navigation"><i class="fa-solid fa-bars"></i></button>
  <h3 class="navbar-toggler m-2"><?= $title ?></h3>
  <div class="collapse navbar-collapse" id="toggle" style="width: 280px;">
    <div class="h-auto w-100 d-flex flex-column p-3 bg-dark text-light">
      <div class="d-flex flex-column align-items-center">
        <img src="/assets/images/Users/defaultUser.png" alt="profile" width="100px" height="100px" >
        <span class="fs-4">Admin Name</span>
      </div>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="dashboard" class="nav-link link-primary text-light <?= ($title == 'Dashboard') ? "active" : "" ?>"><i class="fa-solid fa-gauge fa-lg me-3 fa-fw"></i>Dashboard</a>
        </li>
        <hr>
        <li class="nav-item">
          <a href="alerts" class="nav-link link-primary text-light <?= ($title == 'Alerts') ? "active" : "" ?>"><i class="fa-solid fa-bell fa-lg me-3 fa-fw"></i>Alerts</a>
        </li>
        <li class="nav-item">
          <a href="clubs" class="nav-link link-primary text-light <?= ($title == 'Clubs') ? "active" : "" ?>"><i class="fa-solid fa-list fa-lg me-3 fa-fw"></i>Clubs</a>
        </li>
        <li class="nav-item">
          <a href="teams" class="nav-link link-primary text-light <?= ($title == 'Teams') ? "active" : "" ?>"><i class="fa-solid fa-people-group fa-lg me-3 fa-fw"></i>Teams</a>
        </li>
        <li class="nav-item">
          <a href="competitions" class="nav-link link-primary text-light <?= ($title == 'Competitions') ? "active" : "" ?>"><i class="fa-solid fa-chess-king fa-lg me-3 fa-fw"></i>Competitions</a>
        </li>
        <li class="nav-item">
          <a href="committees" class="nav-link link-primary text-light <?= ($title == 'Committees') ? "active" : "" ?>"><i class="fa-solid fa-users-between-lines fa-lg me-3 fa-fw"></i>Committees</a>
        </li>
        <li class="nav-item">
          <a href="development" class="nav-link link-primary text-light <?= ($title == 'Development') ? "active" : "" ?>"><i class="fa-solid fa-book fa-lg me-3 fa-fw"></i>Development</a>
        </li>
        <li class="nav-item">
          <a href="users" class="nav-link link-primary text-light <?= ($title == 'Users') ? "active" : "" ?>"><i class="fa-solid fa-user fa-lg me-3 fa-fw"></i>Users</a>
        </li>
        <hr>
        <li class="nav-item">
          <a href="news" class="nav-link link-primary text-light <?= ($title == 'News') ? "active" : "" ?>"><i class="fa-solid fa-bullhorn fa-lg me-3 fa-fw"></i>News</a>
        </li>
        <li class="nav-item">
          <a href="email" class="nav-link link-primary text-light <?= ($title == 'Email') ? "active" : "" ?>"><i class="fa-solid fa-envelope fa-lg me-3 fa-fw"></i>Send email</a>
        </li>
        <li class="nav-item">
          <a href="settings" class="nav-link link-primary text-light <?= ($title == 'Settings') ? "active" : "" ?>"><i class="fa-solid fa-gear fa-lg me-3 fa-fw"></i>Settings</a>
        </li>
      </ul>
      <hr>
      <a href="/" class="btn btn-outline-primary w-100" role="button"><i class="fa-solid fa-house fa-lg pe-3"></i>Home</a>
      <hr>
      <button type="button" class="btn btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#logout"><i class="fa-solid fa-right-from-bracket fa-lg pe-3"></i>Logout</button>
      <?= view_cell('\App\Libraries\Alerts::modal', ['content' => 'Are you sure you wan to log out?', 'id' => 'logout']) ?>
    </div>
  </div>
</nav>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>Dashboard</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <a href="#">
                <i class='bx bxl-unsplash'></i>
            </a>
            <span class="logo_name">Dashboard</span>
        </div>
        <ul class="nav-links">
           
            <li>
                <a href="examinerDashboard.php">
                    <i class='bx bx-book-bookmark'></i>
                    <span class="links_name">Results</span>
                </a>
            </li>
           
            <li>
        <li class="log_out">
          <a href="includes/logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log Out</span>
          </a>
        </li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">A+ ONLINE EXAMINATION</span>
            </div>
            <div class="profile-details">
                <!--<img src="images/profile.jpg" alt="">-->
                <span class="admin_name">Examiner</span>
            </div>
        </nav>

        <br><br><br><br>
        <div class="values">
            <div class="val-box">
                <span class="las la-shopping-cart"></span>
                <div>
                    <h3>View Answer Scripts</h3>
                    <a href="viewAnswer.php">View</a>
                </div>
            </div>
            <div class="val-box">
                <span class="las la-clipboard"></span>
                <div>
                    <h3>Manage Results</h3>
                    <a href="resultDisplay.php">View</a>
                </div>
            </div>
            <div class="val-box">
                <span class="las la-wallet"></span>
                <div>
                    <h3>Submit results </h3>
                    <a href="ResultSubmit.php">View</a>
                </div>
            </div>
        </div>


        <script>
            let sidebar = document.querySelector(".sidebar");
            let sidebarBtn = document.querySelector(".sidebarBtn");
            sidebarBtn.onclick = function () {
                sidebar.classList.toggle("active");
                if (sidebar.classList.contains("active")) {
                    sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
                } else
                    sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
            }
        </script>

</body>

</html>
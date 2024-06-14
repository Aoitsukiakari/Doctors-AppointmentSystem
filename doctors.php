<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Doctor Dashboard</title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <div class="grid-container">
        <header class="header">
            <div class="header-right">
                <button class="menu-icon" onclick="openSidebar()">
                    <span class="material-icons-outlined">menu</span>
                </button>
            </div>
        </header>

        <aside id="sidebar">
            <div class="sidebar-title">
                <div class="sidebar-brand">
                    <span class="material-icons-outlined">account_circle</span> DOCTORS
                </div>
                <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
            </div>

            <ul class="sidebar-list">
                <li class="sidebar-list-item"> APPOINTMENTS</li>
                <li class="logout-item"><a href="login1.php"> LOG OUT</a></li>
            </ul>
        </aside>

        <main class="main-container">
        

        </main>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.49.0/apexcharts.min.js"></script>
    <script>
        var sidebarOpen = false;
        var sidebar = document.getElementById("sidebar");

        function openSidebar() {
            if (!sidebarOpen) {
                sidebar.classList.add("sidebar-responsive");
                sidebarOpen = true;
            }
        }

        function closeSidebar() {
            if (sidebarOpen) {
                sidebar.classList.remove("sidebar-responsive");
                sidebarOpen = false;
            }
        }

        function loadSection(section) {
            fetch(`main_content.php?section=${section}`)
                .then(response => response.text())
                .then(data => {
                    document.querySelector('.main-container').innerHTML = data;
                });
        }

        // Event listeners for the sidebar items
        document.querySelectorAll('.sidebar-list-item').forEach(item => {
            item.addEventListener('click', () => {
                const section = item.textContent.trim().toLowerCase();
                loadSection(section);
            });
        });
    </script>
</body>
</html>

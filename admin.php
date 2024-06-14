<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Admin Dashboard</title>

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
                    <span class="material-icons-outlined">account_circle</span> ADMIN
                </div>
                <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
            </div>

            <ul class="sidebar-list">
                <li class="sidebar-list-item"> APPOINTMENTS</li>
                <li class="sidebar-list-item"> DOCTORS</li>
                <li class="sidebar-list-item"> USERS</li>
                <li class="logout-item"><a href="adminlogin.php"> LOG OUT</a></li>
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

        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.sidebar-list-item').forEach(item => {
                item.addEventListener('click', () => {
                    const section = item.textContent.trim().toLowerCase();
                    loadSection(section);
                });
            });

            document.addEventListener('click', event => {
                if (event.target && event.target.id === 'add-doctor-btn') {
                    document.getElementById('add-doctor-modal').style.display = 'block';
                }

                if (event.target && (event.target.id === 'close-modal' || event.target.classList.contains('modal'))) {
                    document.getElementById('add-doctor-modal').style.display = 'none';
                }
            });

            document.addEventListener('submit', event => {
                if (event.target && event.target.id === 'doctor-form') {
                    event.preventDefault();
                    const formData = new FormData(event.target);
                    
                    fetch('add_doctor.php', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.text())
                    .then(data => {
                        alert(data);
                        document.getElementById('add-doctor-modal').style.display = 'none';
                        event.target.reset();
                        loadSection('doctors'); // Reload the doctors section to reflect the new addition
                    })
                    .catch(error => console.error('Error:', error));
                }
            });
        });

        function deleteRecord(recordId) {
    if (confirm("Are you sure you want to delete this record?")) {
        fetch('delete_record.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ id: recordId })
        })
        .then(response => response.text())
        .then(data => {
            alert(data);
            loadSection('appointments'); // Reload the relevant section
        })
        .catch(error => console.error('Error:', error));
    }
}

    function deleteD(dId) {
        if (confirm("Are you sure you want to delete this record?")) {
            fetch('delete_record.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ id: dId })
            })
            .then(response => response.text())
            .then(data => {
                alert(data);
                loadSection('doctors'); // Reload the relevant section
            })
            .catch(error => console.error('Error:', error));
        }
    }

    function deleteU(uId) {
        if (confirm("Are you sure you want to delete this record?")) {
            fetch('delete_record.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ id: uId })
            })
            .then(response => response.text())
            .then(data => {
                alert(data);
                loadSection('doctors'); // Reload the relevant section
            })
            .catch(error => console.error('Error:', error));
        }
    }

    </script>





</body>
</html>
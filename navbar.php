<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Sticky Navbar</title>
    <style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }

    .navbar {
        background-color: #333;
        overflow: hidden;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 30px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        position: sticky;
        top: 0;
        z-index: 1000;
    }

    .navbar a {
        color: #f2f2f2;
        text-decoration: none;
        margin: 0 15px;
        padding: 10px 15px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .navbar a:hover {
        background-color: #555;
    }

    .company-name {
        color: #fff;
        font-size: 1.2rem;
        font-weight: bold;
    }

    .website-name {
        color: #fff;
        font-size: 1rem;
    }

    .hamburger {
        display: none;
    }

    @media screen and (max-width: 768px) {
        .navbar a {
            display: none;
        }

        .navbar a.icon {
            display: block;
        }

        .hamburger {
            display: block;
            color: #fff;
            font-size: 1.5rem;
            cursor: pointer;
        }
    }

    .sidebar {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        right: 0;
        background-color: #111;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
        z-index: 2000;
    }

    .sidebar a {
        padding: 10px 15px;
        text-decoration: none;
        font-size: 1.2rem;
        color: #818181;
        display: block;
        transition: 0.3s;
    }

    .sidebar a:hover {
        color: #f1f1f1;
    }

    .sidebar .closebtn {
        position: absolute;
        top: 0;
        left: 25px;
        font-size: 36px;
        margin-right: 50px;
        color: #fff;
        z-index: 2000;
    }

    @media screen and (max-height: 450px) {
        .sidebar {
            padding-top: 15px;
        }

        .sidebar a {
            font-size: 18px;
        }
    }
    </style>
</head>

<body>

    <div class="navbar">
        <div>
            <span class="company-name">Company Name</span>
            <span class="website-name">Website Name</span>
        </div>
        <a rel='tab' href='index.php' class="nav-link">Home</a>
        <a rel='tab' href='about-us.php' class="nav-link">About Us</a>
        <a rel='tab' href='contact-us.php' class="nav-link">Contact Us</a>
        <a href="#" class="icon" onclick="openSidebar()">
            <div class="hamburger">&#9776;</div>
        </a>
    </div>

    <div id="sidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeSidebar()">&times;</a>
        <a rel='tab' href='index.php' class="nav-link">Home</a>
        <a rel='tab' href='about-us.php' class="nav-link">About Us</a>
        <a rel='tab' href='contact-us.php' class="nav-link">Contact Us</a>
    </div>

    <script>
    function openSidebar() {
        document.getElementById("sidebar").style.width = "250px";
    }

    function closeSidebar() {
        document.getElementById("sidebar").style.width = "0";
    }

    window.onclick = function(event) {
        var sidebar = document.getElementById("sidebar");
        if (!event.target.matches('.hamburger')) {
            if (sidebar.style.width === "250px") {
                sidebar.style.width = "0";
            }
        }
    }

    // Function to close sidebar when menu item is clicked
    document.querySelectorAll('.nav-link').forEach(item => {
        item.addEventListener('click', event => {
            closeSidebar();
        })
    });
    </script>


</body>

</html>
<!DOCTYPE html>
<html lang="en">
<?php
include 'header.php';
?>
<body>
<?php
include'nav.php';
?>


    <div class="landing-header">
        <h1>Welcome to the Karo Language Development Institute </h1>
        <p>Your Gateway to Language Development</p>
        <a href="donate.php" class="btn btn-primary btn-lg">Donate Now</a>
    </div>


    <div class="landing-content">
        <h2>About Us</h2>
        <p>The KARO Language Development Institute is dedicated to preserving and promoting the rich language and
            culture of the Karo people.</p>
        <p>Explore our initiatives in language development, discover the rich history of KALDI, and get involved in our
            community.</p>
    </div>

    <div class="hover-section">
            <div class="hover-box" onclick="window.location.href='evolution.php'">
                <h3>Evolution</h3>
                <p>Visit Evolution for more information.</p>
            </div>
            <div class="hover-box" onclick="window.location.href='page2.php'">
                <h3>Vission, Mission and Objectives</h3>
                <p>Explore Milestones for additional content.</p>
            </div>
            <!-- Add more hover-box elements as needed -->
        </div>
    </div>



    

<!-- Footer -->
<?php
include 'footer.php';
?>
<!-- Footer -->

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function toggleNavbar() {
            var navbar = document.querySelector('.navbar-toggler-icon');
            navbar.classList.toggle('collapsed');
        }
    </script>
</body>

</html>

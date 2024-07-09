<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="Ethio-Debo" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="author" content="Endalsh Ayalew">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ethio-Debo</title>
    <!-- External CSS for styling -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="stylesheet" href="style.css">
    <!-- Favicon for the site -->
    <link rel="shortcut icon" href="../imges/LOGO4.jpg" type="image/x-icon">
</head>

<body>
    <!-- Main Heading -->
    <h1 class="right-aligned">NGO Information</h1>

    <!-- Header with Navigation -->
    <nav>
        <ul>
            <li><a href="../About-us.html">About Us</a></li>
            <li><a href="../project.html">Projects</a></li>
            <li><a href="volunteer-profile.html">Volunteer</a></li>
            <li><a href="Contact-us.html">Contact</a></li>
        </ul>
    </nav>

    <!-- NGO Information Form Section -->
    <section id="NGO" class="content">
        <form action="process2.php" method="post">
            <div class="contactname">NGO Name:
                <input type="text" name="NGOname" placeholder="Enter your NGO Name">
            </div>
            <div class="NGOname">Email:
                <input type="text" name="email" placeholder="Enter your email" required>
            </div>
            <div class="phone">Phone:
                <input type="tel" name="phone" placeholder="Enter your phone">
            </div>
            <div>
                <label for="messageA">What is your NGO cause involved with?</label>
                <textarea id="messageA" name="messageA" rows="2"></textarea>
            </div>
            <div>
                <label for="messageB">What kind of volunteers are you looking for?</label>
                <textarea id="messageB" name="messageB" rows="2"></textarea>
            </div>
            <div>
                <label for="messageC">Do you have any other requests?</label>
                <textarea id="messageC" name="messageC" rows="2"></textarea>
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
    </section>


    <section id="absolute-right" class="absolute-right">
        <form action="./poject.php" method="post">
            <div class="contactname"><br><br>if you want to view the volunteers profile <br> and see who signed up to your cause click log in
            </div>


            <a href="../form/NGO-login/login.php">login Page</a>
            <div id="container"></div>


            </div>
        </form>
    </section>





    <!-- External JavaScript for additional functionality -->
    <script src="js/script.js"></script>
</body>

</html>
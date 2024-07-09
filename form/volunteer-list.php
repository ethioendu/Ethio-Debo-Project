<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

include 'db.php'; // Include your database connection file

// Query to fetch data from the volunteers table
$query_volunteers = "SELECT * FROM volunteers";
$result_volunteers = $conn->query($query_volunteers);

// Query to fetch data from the volunteer_details table
$query_volunteer_details = "SELECT * FROM volunteer_details";
$result_volunteer_details = $conn->query($query_volunteer_details);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Volunteer List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>

<body>
    <h2>Volunteer List</h2>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Cause</th>
                <th>Volunteer Type</th>
                <th>Requests</th>
                <!-- Add more columns as needed from volunteer_details -->
                <th>Detail 1</th>
                <th>Detail 2</th>
                <!-- Continue for other details -->
            </tr>
        </thead>
        <tbody>
            <?php while ($row_volunteer = $result_volunteers->fetch_assoc()) : ?>
                <?php
                // Fetch the corresponding details for each volunteer
                $volunteer_id = $row_volunteer['id'];
                $query_details = "SELECT * FROM volunteer_details WHERE volunteer_id = $volunteer_id";
                $result_details = $conn->query($query_details);
                $row_details = $result_details->fetch_assoc();
                ?>
                <tr>
                    <td><?php echo htmlspecialchars($row_volunteer['name']); ?></td>
                    <td><?php echo htmlspecialchars($row_volunteer['email']); ?></td>
                    <td><?php echo htmlspecialchars($row_volunteer['phone']); ?></td>
                    <td><?php echo htmlspecialchars($row_volunteer['cause']); ?></td>
                    <td><?php echo htmlspecialchars($row_volunteer['volunteer_type']); ?></td>
                    <td><?php echo htmlspecialchars($row_volunteer['requests']); ?></td>
                    <!-- Display additional details -->
                    <td><?php echo htmlspecialchars($row_details['detail_1']); ?></td>
                    <td><?php echo htmlspecialchars($row_details['detail_2']); ?></td>
                    <!-- Continue for other details -->
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>

</html>
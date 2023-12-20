<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/gallery.css">
    <title>Gallery</title>
</head>
<body>
    <div class="topnav" data-aos="fade-down">
        <p class="logo">Riley Mirheydari</p>
        <div class="pages">
            <a href="/">Home</a>
            <a class="active" href="">Art works</a>
            <a href="events.html">Events</a>
            <a href="/#about">Contact</a>
        </div>
    </div>
    <hr>
    <div class="gallery grid-container">
        <?php
            $host_name = 'db5014435154.hosting-data.io';
            $username = 'dbu1598703';
            $password = 'Nemat1319';
            $database = 'dbs12003862';

            $conn = new mysqli($host_name, $username, $password, $database);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT * FROM paintings";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<a href='/shop.php?p=" . $row['id'] . "'><li><img src=" . "./images/paintings/" . $row["image"] . "></li></a>";
                }
            } else {
                echo "no paintings";
            }

            $conn->close();
        ?>
    </div>
    <script src="./js/gallery.js"></script>
</body>
</html>
<?php
session_start();
include 'conn.php';

if (isset($_SESSION['msg'])) {
    $_SESSION['msg'] = '';
}
if (!isset($_SESSION['auth'])) {
    header("Location: login.php");
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $is_view = isset($_POST['is_display']) ? 1 : 0;
    $value = 'teams_display';
    $stmt = $conn->prepare("UPDATE setting SET view = ? WHERE `value` = ?");
    if ($stmt) {
        $stmt->bind_param("ii", $is_view, $value);

        if ($stmt->execute()) {
            $_SESSION['msg'] = 'Teams Setting Successfully Saved';
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }
}

$sql = "SELECT * FROM setting WHERE `value`='teams_display'";
$result = $conn->query($sql);
$data = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

</head>

<body>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: "Roboto", sans-serif;
        }


        body {
            display: flex;
            flex-direction: column;
            height: 100vh;
            /* background-color: red; */
        }

        .container {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        header {
            background-color: #588157;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 10px;
            /* text-align: center; */
            height: 50px;
        }

        header h4 {
            /* color: black; */
            font-weight: 400;
        }

        .sidebar {
            background-color: #1a1a1a;
            color: white;
            padding: 10px;
            width: 250px;
            height: calc(100vh - 50px);
            /* Adjust according to header and footer height */
            position: fixed;
            top: 50px;
            /* Adjust according to header height */
            left: 0;
            overflow-y: auto;
        }

        .sidebar ul {
            list-style-type: none;
        }

        .sidebar ul li a {

            display: block;
            color: white;
            padding: 10px !important;
            padding: 10px 0;
            margin-bottom: 7px;
            font-size: .9rem;
            font-weight: 400;
            text-decoration: none !important;


        }

        .sidebar ul li a:hover {
            text-decoration: underline;
        }

        main {
            margin-left: 250px;
            padding: 20px;
            flex-grow: 1;
            background-color: white;
        }

        footer {
            background-color: #588157;
            color: white;
            text-align: center;
            padding: 8px;
            font-size: .8rem;
            position: fixed;
            width: 100%;
            bottom: 0;
            font-weight: 400;

        }

        .btn-primary {
            display: block;
            width: 100%;
            background-color: #588157;
            border: none;
            border-radius: 3px;
            color: #fff;
            font-size: .9rem;
            cursor: pointer;
            padding: 6px;
        }

        a:hover:not(.btn-primary) {
            display: block;
            width: 100%;
            background-color: #343a40;
            border: none;
            border-radius: 3px;
            color: #fff;
            font-size: .9rem;
            cursor: pointer;
            transition: .3s;

        }

        .text-muted {
            color: #343a40;
        }

        .table-container {
            width: 100%;
            margin: 20px 0;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table thead {
            background-color: #588157;
            color: white;
        }

        table th,
        table td {
            padding: 6px 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        table td {
            font-size: .9rem;
        }

        table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
    <div class="container">
        <header>
            <h4>Nezdeck Panel</h4>
        </header>
        <aside class="sidebar">
            <ul>
                <li><a href="teams.php" class="btn-primary">Teams</a></li>
                <li><a href="contacts.php">Contacts</a></li>
                <li> <a href="logout.php">Logout</a>
                </li>
            </ul>
        </aside>
        <main>
            <h2>Teams</h2>
            <p class="text-muted">admin / teams</p>
            <div class="table-container">
                <form action="teams.php" method="post">

                    <div>
                        <input id="is_show" name="is_display" type="checkbox" <?= $data['view'] ? "checked":"" ?>>

                        <label for="is_show">Is Display</label>
                    </div>
                    <div style="width: 100px;padding-top:10px;">

                        <button type="submit" class="btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </main>
        <footer>
            &copy; 2024 nezdeck. All rights reserved.
        </footer>
    </div>
</body>

</html>
<?php
unset($_SESSION['msg']);
?>
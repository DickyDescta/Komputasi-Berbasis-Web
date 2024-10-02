<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Konfirmasi Data</title>
    <style>
        
        .table-dark th {
            background-color: #343a40; 
            color: white; 
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="output-box">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th colspan="2">Data yang Anda Masukkan</th> 
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $fname = $email = $dob = $hobbies = $gender = "";
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $fname = htmlspecialchars($_POST["fname"]);
                        $email = htmlspecialchars($_POST["email"]);
                        $dob = htmlspecialchars($_POST["dob"]); 

                        $birthDate = new DateTime($dob);
                        $today = new DateTime();
                        $age = $today->diff($birthDate);
                        $umur = $age->y;

                        if (!empty($_POST['hobbies'])) {
                            $hobbiesArray = $_POST['hobbies'];
                            $lastHobby = array_pop($hobbiesArray);  
                            if (count($hobbiesArray) > 0) {
                                $hobbies = implode(", ", $hobbiesArray) . " dan " . $lastHobby;
                            } else {
                                $hobbies = $lastHobby;
                            }
                        } else {
                            $hobbies = "Tidak ada hobi yang dipilih";
                        }

                        $gender = htmlspecialchars($_POST["kelamin"]);
                    }
                    ?>
                    <tr>
                        <td>Nama</td>
                        <td><?php echo $fname; ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?php echo $email; ?></td>
                    </tr>
                    <tr>
                        <td>Umur</td>
                        <td><?php echo $umur; ?> tahun</td>
                    </tr>
                    <tr>
                        <td>Hobi</td>
                        <td><?php echo $hobbies; ?></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td><?php echo $gender; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

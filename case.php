<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="case.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;600&family=Square+Peg&display=swap" rel="stylesheet">
    <title>Cases</title>
    <link rel="shortcut icon" href="mask.svg">
</head>
<body>
    <div class="main">
        <div class="in1">
            <div class="user">
                <!-- <img src="incognito.jpg" alt="" class="incog"> -->
                <p>Welcome to Case Portal</p>
                <div class="container">
                    <img src="user.svg" alt="" class="logo">
                    <p>Mr. XYZ</p>
                </div>
            </div>
            <div class="cases">
                <div class="ia">
                    <input type="radio" id="anonymous" name="hh" onchange="hc(this);">
                    <label for="anonymous" class="anonymous">Anonymous</label>
                </div>
                <div class="if">
                    <input type="radio" id="FIR" name="hh" onchange="hb(this);">
                    <label for="FIR" class="FIR">FIR</label>
                </div>
                <a href="index.html" class="log">Log Out</a>
            </div>
        </div>
        <div class="in2">
            <div id="display1">
                <p>Anonymous Case Files</p>
                <table>
                    <thead>
                        <tr class="tr" style="border:1px solid #050714;text-align:center">
                            <th class="th" style="border:1px solid #050714;text-align:center;padding:1px;color:#050714">Name</th>
                            <th style="border:1px solid #050714;text-align:center;padding:1px">Father's Name</th>
                            <th style="border:1px solid #050714;text-align:center;padding:1px">Aadhar</th>
                            <!-- <th>Address</th> -->
                            <th style="border:1px solid #050714;text-align:center;padding:1px">Pincode</th>
                            <th style="border:1px solid #050714;text-align:center;padding:1px">Email</th>
                            <th style="border:1px solid #050714;text-align:center;padding:1px">Phone</th>
                            <th style="border:1px solid #050714;text-align:center;padding:1px">Action</th>
                            <!-- <th>Complain</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $connection = new mysqli('localhost', 'root','','acrs');
                        if($connection->connect_error){
                            die("connection failed :" . $connection->connect_error);
                        }
                        $sql = "SELECT * FROM aregistration";
                        $result = $connection->query($sql);
                        if(!$result)
                        {
                            die("Invalid query:" .$connection->error);
                        }
                        while($row = $result->fetch_assoc())
                        {
                            echo "<tr style='border:1px solid #050714;'>
                            <td style='border:1px solid #050714;text-align:center;padding:8px;color:#050714;font-weight:600;text-align:left'>" . $row["name"] . "</td>
                            <td style='border:1px solid #050714;text-align:center;padding:8px;color:#050714;font-weight:600;text-align:left'>" .$row["fname"]. "</td>
                            <td style='border:1px solid #050714;text-align:center;padding:8px;color:#050714;font-weight:600;text-align:left'>" .$row["aadhar"] . "</td>
                            <td style='border:1px solid #050714;text-align:center;padding:8px;color:#050714;font-weight:600;text-align:left'>" .$row["pincode"] . "</td>
                            <td style='border:1px solid #050714;text-align:center;padding:8px;color:#050714;font-weight:600;text-align:left'>" .$row["email"]. "</td>
                            <td style='border:1px solid #050714;text-align:center;padding:8px;color:#050714;font-weight:600;text-align:left'>" .$row["phone"] . "</td>
                            <td style='border:1px solid #050714;text-align:center;padding:8px;color:#050714;font-weight:600;text-align:left'>"."<a href='' style='text-decoration:none;color:red;'>View</a>". "</td>
                            </tr>";
                        }
                        ?>
                    </tbody>
                </table>
                <!-- <div class="report12"></div>
                <div class="report13"></div> -->
            </div>
            <div id="display2">
                <p>FIR Case Files</p>
                <table height=auto class="tab">
                    <thead>
                        <tr class="tr" style="border:1px solid #050714;text-align:center">
                            <!-- <th class="th" style="border:1px solid #050714;text-align:center;padding:1px;color:#050714">Name</th> -->
                            <!-- <th style="border:1px solid #050714;text-align:center;padding:1px">Father's Name</th> -->
                            <!-- <th style="border:1px solid #050714;text-align:center;padding:1px">Aadhar</th> -->
                            <!-- <th>Address</th> -->
                            <th style="border:1px solid #050714;text-align:center;padding:1px">Pincode</th>
                            <!-- <th style="border:1px solid #050714;text-align:center;padding:1px">Email</th> -->
                            <!-- <th style="border:1px solid #050714;text-align:center;padding:1px">Phone</th> -->
                            <th>Complain</th>
                            <th style="border:1px solid #050714;text-align:center;padding:1px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $connection = new mysqli('localhost', 'root','','acrs');
                        if($connection->connect_error){
                            die("connection failed :" . $connection->connect_error);
                        }
                        $sql = "SELECT * FROM registration";
                        $result = $connection->query($sql);
                        if(!$result)
                        {
                            die("Invalid query:" .$connection->error);
                        }
                        while($row = $result->fetch_assoc())
                        {
                            echo "<tr style='border:1px solid #050714;'>
                            <td style='border:1px solid #050714;text-align:center;padding:8px;color:#050714;font-weight:600;text-align:left'>" .$row["pincode"] . "</td>
                            <td style='border:1px solid #050714;text-align:center;padding:8px;color:#050714;font-weight:600;text-align:left'>" .$row["complaint"]. "</td>
                            <td style='border:1px solid #050714;text-align:center;padding:8px;color:#050714;font-weight:600;text-align:center'>"."<a href='' style='text-decoration:none;color:red;'>View</a>". "</td>
                            </tr>";
                        }
                        ?>
                    </tbody>
                </table>






            </div>
        </div>
    </div>
    <script>
        function hc(radio)
        {
            if(radio.checked==true)
            {
                document.getElementById("display2").style.display="none";
                document.getElementById("display1").style.display="flex";
                // document.getElementById("display1").style.backgroundColor="red";
            }
        }
        function hb(radio)
        {
            if(radio.checked==true)
            {
                document.getElementById("display2").style.display="flex";
                document.getElementById("display1").style.display="none";
            }
        }

    </script>
</body>
</html>
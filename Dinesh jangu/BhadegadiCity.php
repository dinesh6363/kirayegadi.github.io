
 <!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body style="background-color: lavender;">

    <nav class="navbar navbar-light bg-primary  ">

        <div class="container-fluid ">
            <a href="Bhadegadihome.html" class=" col-2">
                <button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="25"
                        height="25" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                    </svg></button>
            </a>
            <div class="col-10 text-center ">
                <span class="navbar-brand mb-0 h2  text-white ">Manage Cities</span>
            </div>
        </div>
    </nav>

    <div class="container-fluid">

        <h2 class="mt-4">Your Buisness Cities</h2>
        <div class="container-fluid bg-light " style="height: 36rem; border-radius: 10px; margin-bottom: 15vh;">
            <div class="container-fluid  pt-4">
               
                    <form action="City.php" method="post" class="input-group">
                    <input required id="addcity" type="text" name="addcity" class="form-control " placeholder="Add city name here..." aria-label="Recipient's username" aria-describedby="button-addon2" >
                    <button class="btn btn-outline-secondary "  type="submit" >Add</button>
                </form>
              
                <div class="row">
                    <p class="pt-3">Note:- You will be notified for selected cities only</p>
                </div>
                <hr>
                <div class="row">
                    <strong> Currently Selected Cities:</strong>
                </div>
                <div class="container-fluid  mt-2" >
                    
                    <!-- <button type="button" class="bg-primary close" aria-label="Close" style="color: white; border-radius: 100px; width: 7rem;"> Nagaur
                        <a href="" style="color: white; text-decoration: none; ">×</a>
                    </button>
                    
                    
                    <button type="button" class="bg-primary close" aria-label="Close" style="color: white; border-radius: 100px; width: 7rem;"> Nagaur
                        <a href="" style="color: white; text-decoration: none;">×</a>
                    </button>
                    -->
               
                    <?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "trip";

// CREATE CONNECTION
$conn = new mysqli($servername,
	$username, $password, $databasename);

// GET CONNECTION ERRORS
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// SQL QUERY
$query = "SELECT * FROM `danny`;";

// FETCHING DATA FROM DATABASE
$result = $conn->query($query);

	if ($result->num_rows > 0)
	{
		// OUTPUT DATA OF EACH ROW
		while($row = $result->fetch_assoc())
		{
            ?>
          <button type="button" class="btn btn-primary " style = "border-radius: 100px;">
		<?php	  echo $row["cityname"] ; ?>   <a href='Citydelete.php?id=<?php echo $row['id']; ?>'  style="color: white; text-decoration: none; ">×</a>

            </button>
            <?php
            
		}
	}
	else {
		// echo "0 results";
	}

$conn->close();

?>

                    
                </div>

            </div>
        </div>
    </div>











    <nav class="navbar  bg-light justify-content-around fixed-bottom">

        <a href="Bhadegadihome.html"> <button type="button" class="btn"><svg xmlns="http://www.w3.org/2000/svg"
                    width="23" height="23" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                    <path
                        d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
                </svg>
                <figcaption>Home</figcaption>
            </button></a>

        <a href="Bhadegadirequirements.html"> <button type="button" class="btn"><svg xmlns="http://www.w3.org/2000/svg"
                    width="23" height="23" fill="currentColor" class="bi bi-car-front-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM2.906 5.189l.956-1.913A.5.5 0 0 1 4.309 3h7.382a.5.5 0 0 1 .447.276l.956 1.913a.51.51 0 0 1-.497.731c-.91-.073-3.35-.17-4.597-.17-1.247 0-3.688.097-4.597.17a.51.51 0 0 1-.497-.731Z" />
                </svg>
                <figcaption>Requirements</figcaption>
            </button> </a>
        <a href="Bhadegadiavailability.html"> <button type="button" class="btn"><svg xmlns="http://www.w3.org/2000/svg"
                    width="23" height="23" fill="currentColor" class="bi bi-calendar4-event" viewBox="0 0 16 16">
                    <path
                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z" />
                    <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                </svg>
                <figcaption>My availability</figcaption>
            </button></a>
        <a href="Bhadegadiprofile.html"> <button type="button" class="btn"><svg xmlns="http://www.w3.org/2000/svg"
                    width="23" height="23" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                </svg>
                <figcaption>Profile</figcaption>
            </button>
        </a>
    </nav>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
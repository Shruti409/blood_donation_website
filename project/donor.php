<?php
include('include/header.php');

?>

<style>
.navbar-brand, .nav-link {
  color: #e74c3c !important;
}


nav{
font-family: 'Roboto', sans-serif;
font-weight: 600;
}
.size{
		min-height: 0px;
		padding: 60px 0 40px 0;
		
	}
	
	.form-container{
		background-color: white;
		border: 2px solid #eee;
		border-radius: 5px;
		padding: 20px 10px 20px 30px;
		
	}

	.form-group{
		text-align: left;
	}
	h1{
		color: white;
	}
	h3{
		color: #e74c3c;
		text-align: center;
	}
	.red-bar{
		width: 25%;
	}
.text-center{
    color: #e74c3c;
    
}
</style>


<div class="container-fluid red-background size">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center" >Donors</h1>
			<hr class="white-bar">
		</div>
	</div>
</div>



<?php
  $sql="SELECT * FROM  blooddonor"; // query to fetch all the data fro the database 

  $result=mysqli_query($conn,$sql); //executing the query

  if(mysqli_num_rows($result)>0)
  {

    //to print all data we will use while loop


    while($row= mysqli_fetch_assoc($result))
    {
        //check if the donor have not donated the blood in recent 3 months

        if($row['date']==0)
        {


        echo '<div class="card border-secondary mb-3" style="max-width: 18rem;">
        <div class="card-header">  $row['name']</div>
        <div class="card-body text-secondary">
          <h5 class="card-title">Secondary card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card content.</p>
        </div>
      </div>';




        }


        else{







        }




    }

  } //check if the data is  prsent //this function return no of rows present in a table
  

  else
  {
//if no data is present then print this error message

    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
   No Donor Available At the Moment.
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>';
  }


?>


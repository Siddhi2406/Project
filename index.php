<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Feedback</title>
<?php include 'header.php'; ?>

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"
    />
	 <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
    <script src="app.js"></script>

  </head>
  <style>
    body {
    background-color: blanchedalmond;
      background-size: cover;
      backdrop-filter: blur(0px); /* Apply blur effect to the background */
      margin: 0; /* Remove default margin */
      height: 100vh; /* Set body height to 100% of viewport height */
    }
</style>
  <body>
	
 <br>
 <br>
 <br>
 


    <div ng-app="myApp" class="container" style="width: 550px">
      <div style="text-align: center; color: blue">
        <h3><b>User Feedback Form</b></h3>
      </div>
      <div ng-controller="ContactController">
        <form role="form" class="well">
          <div class="form-group">
            <label for="name"> Name: </label>
            <input
              type="text"
              id="name"
              class="form-control"
              placeholder="Enter Name "
              ng-model="newcontact.name"
            />
          </div>
          <div class="form-group">
            <label for="email"> Email: </label>
            <input
              type="email"
              id="email"
              class="form-control"
              placeholder="Enter Email "
              ng-model="newcontact.email"
            />
          </div>
          <div class="form-group">
            <label for="feedback"> Feedback: </label>
            <textarea
              id="feedback"
              class="form-control"
              placeholder="Enter your feedback "
              ng-model="newcontact.feedback"
            ></textarea>
          </div>
          <br />
          <input
            type="button"
            class="btn btn-primary"
            ng-click="saveContact()"
            value="Submit"
          />
        </form>

        <div>
          <h4><b>Feedbacks</b></h4>
          <table
            ng-if="contacts.length"
            class="table table-striped table-bordered table-hover"
          >
            <thead>
              <tr class="info">
                <th>Name</th>
                <th>Email</th>
                <th>Feedback</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr ng-repeat="contact in contacts">
                <td>{{ contact.name }}</td>
                <td>{{ contact.email }}</td>
                <td>{{ contact.feedback }}</td>
                <td>
                  <a
                    href="#"
                    ng-click="edit(contact.id)"
                    role="button"
                    class="btn btn-info"
                    >Edit</a
                  >
                  &nbsp;
                  <a
                    href="#"
                    ng-click="delete(contact.id)"
                    role="button"
                    class="btn btn-danger"
                    >Delete</a
                  >
                </td>
              </tr>
            </tbody>
          </table>
          <div ng-hide="contacts.length > 0">No Feedback Found</div>
        </div>
      </div>
    </div>
  </body>
</html>



 <br>
 <br>
 <br>
 <br>



<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>
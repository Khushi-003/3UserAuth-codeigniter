<!DOCTYPE html>
<html>

<head>
  <title>Welcome</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="jumbotron">
    <h1 class="display-4">Welcome, <?php echo $this->session->userdata('username'); ?>!</h1>
    <p class="lead">This is my task. I hope you like my work</p>
    <hr class="my-4">
    <p><b>When you have a dream, you’ve got to grab it and never let go</b></p>
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </div>
</body>

</html>
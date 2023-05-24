<!doctype html>
<html lang="en">

<head>
  <title>Validate Form</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<style>
    form {
            width: 500px;
            padding: 20px;
            border: 1px solid #000;
            border-radius: 10px;
        }
</style>
</head>

<body>
<div class="container">
    <form method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Name </label>
            <input type="text" class="form-control" name="name" placeholder="Enter your name">
        </div>
        <div class="mb-3">
            <label class="form-label">Age </label>
            <input type="text" class="form-control"  name="age" placeholder="Enter your age">
        </div>
        <div class="mb-3">
            <label class="form-label">Date </label>
            <input type="text" class="form-control"  name="date" placeholder="Enter your date">
        </div>
        <div class="mb-3">
            <label class="form-label">Phone </label>
            <input type="text" class="form-control"  name="phone" placeholder="Enter your phone">
        </div>
        <div class="mb-3">
            <label class="form-label">Web </label>
            <input type="url" class="form-control"  name="web" placeholder="Enter your web ">
        </div>
        <div class="mb-3">
            <label class="form-label">Address </label>
            <input type="text" class="form-control"  name="address" placeholder="Enter your address">
        </div>
        <div>
            @include ('error')
        </div>
        <button type="submit" class="btn btn-primary">OK</button>
        <div class="reuslt">
            <h5>Kết quả: </h5>
        </div>
        <div>
            <?php 
                if (isset($arrUser)) {
                    echo '<p> Name: '. $arrUser['name'] .'</p>';
                    echo '<p> Age: '. $arrUser['age'] .'</p>';
                    echo '<p> Date: '. $arrUser['date'] .'</p>';
                    echo '<p> Phone: '. $arrUser['phone'] .'</p>';
                    echo '<p> web: '. $arrUser['web'] .'</p>';
                    echo '<p> Address: '. $arrUser['address'] .'</p>';
                }
            ?>
        </div>
    </form>
  </div>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
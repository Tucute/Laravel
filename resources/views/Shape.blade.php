<!doctype html>
<html lang="en">

<head>
  <title>Shape</title>
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
            border-radius: 10px;
        }
        .title {
            text-align: center;
        }
        .reuslt {
            display: flex;
            padding: 10px;
            align-items: center;
        }
        .form-label {
            font-weight: 700;
        }
        .reuslt h4 {
            padding-left: 20px;
        }
    </style>
</head>

<body>
<div class="title">
    <h1>Area of Shape</h1>
</div>
<br>
<div class="container d-flex justify-content-center">
    <div class="left-form">
        <div class="title">
            <h3>Area of Triangle</h3>
        </div>
        <form method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Enter value of (A)</label>
                <input type="number" class="form-control" name="a" placeholder="Enter number A">
            </div>
            <div class="mb-3">
                <label class="form-label">Enter value of (H) </label>
                <input type="number" class="form-control"  name="h" placeholder="Enter number H">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <div class="reuslt">
                <h5>The rusult:  </h5>
                <h4><?php if(isset($areaAtriangle) ) {echo $areaAtriangle;}?></h4>
            </div>
        </form>
    </div>
    <div class="right-form">
        <div class="title">
            <h3>Area of Quadrangle</h3>
        </div>
        <form method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Enter value of edge</label>
                <input type="number" class="form-control" name="e1" placeholder="Enter value of edge 1">
            </div>
            <div class="mb-3">
                <label class="form-label">Enter value of edge</label>
                <input type="number" class="form-control" name="e2" placeholder="Enter value of edge 2">
            </div>
            <div class="mb-3">
                <label class="form-label">Enter value of edge</label>
                <input type="number" class="form-control" name="e3" placeholder="Enter value of edge 3">
            </div>
            <div class="mb-3">
                <label class="form-label">Enter value of edge</label>
                <input type="number" class="form-control" name="e4" placeholder="Enter value of edge 4">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <div class="reuslt">
                <h5>The rusult:  </h5>
                <h4><?php if(isset($areaQuadrangle) ) {echo $areaQuadrangle;}?></h4>
            </div>          
        </form>
    </div>
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
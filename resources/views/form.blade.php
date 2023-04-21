<!doctype html>
<html lang="en">

<head>
  <title>Form tính tổng</title>
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
        .reuslt {
            display: flex;
            padding: 10px;
            align-items: center;
        }
        .reuslt h4 {
            padding-left: 20px;
        }
    </style>
</head>

<body>
  <div class="container d-flex justify-content-center">
    <form method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nhập số A: </label>
            <input type="number" class="form-control" name="soA" placeholder="Enter number A">
        </div>
        <div class="mb-3">
            <label class="form-label">Nhập số B: </label>
            <input type="number" class="form-control"  name="soB" placeholder="Enter number B">
        </div>
        <button type="submit" class="btn btn-warning">Tính</button>
        <div class="reuslt">
            <h5>Kết quả: </h5>
            <h4><?php if (isset($sum)) echo $sum; ?></h4>
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
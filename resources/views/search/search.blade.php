<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search Page</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex flex-column vh-100">

  <div class="container-fluid">
    <div class="d-flex justify-content-end p-3">
      <a href="/login" class="btn btn-outline-primary">Login</a>
    </div>
  </div>

  <div class="container flex-grow-1 d-flex justify-content-center align-items-center">
    <div class="text-center w-100">
      <h1 class="mb-4">Search</h1>
      <form class="d-flex justify-content-center">
        <input class="form-control form-control-lg w-50 me-2" type="search" placeholder="Search..." aria-label="Search">
        <button class="btn btn-primary btn-lg" type="submit">Search</button>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Landing</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Custom styles -->
    <style>
        body {
            padding-top: 56px;
            color: #f99b3c;
            background-color: #082d45;
        }
        .jumbotron {
            text-align: center;
            background-color: #082d45;
        }
    </style>
</head>
<body>

    <!-- Jumbotron (Hero) -->
    <div class="jumbotron">
        <h1 class="display-2" style="font-weight: bold">Good Day!</h1>
        <p class="lead">IT Elective III- Integrative Programming Technologies, final project - Student Management System (CRUD).</p>

        <div style="border-bottom: 1px solid #f99b3c; margin: 30px"></div>
        <p>Click the <span class="btn" style="background-color: #082d45; border: 1px solid #f99b3c; color: #f99b3c; font-weight: bold;">button</span> to proceed to our project :) </p>
        <a class="btn btn-primary btn-lg" href="{{ url('/student/') }}" role="button" style="background-color: #082d45; border: 1px solid #f99b3c; color: #f99b3c">Enter</a>
    </div>

    

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>

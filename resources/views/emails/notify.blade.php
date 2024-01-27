<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Welcome to Our Project</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Email Header -->
    <div class="jumbotron text-white bg-primary text-center">
        <h1 class="display-4">Welcome to {{ config('app.name') }}!</h1>
        <p class="lead">We're excited to have you on board.</p>
    </div>

    <!-- Email Content -->
    <div class="container">
        <p class="lead">Hello {{ $user->name }},</p>
        <p>This is a sample email to welcome you to our {{ config('app.name') }} . We're thrilled to have you as part of
            our community.
        </p>

        <!-- Example Call-to-Action Button -->
        <p class="text-center">
            <a href="https://laravel.com/docs/10.x/mail#generating-mailables" class="btn btn-lg btn-primary">To Learn
                More</a>
        </p>

        <!-- Example Email Footer -->
        <p class="text-muted text-center">Thank you for joining us!<br>Best regards,<br>{{ config('app.name') }}</p>
    </div>

    <!-- Bootstrap JS and dependencies (if needed) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.9/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

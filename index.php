<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container flex-column justify-content-center">
        <div class="row mt-4">
            <div class="col-12 mb-4">
                <h1 class="text-center text-info">AsRealTech API CALL</h1>
                <p class="text-center">This is a simple API that takes a message and returns a response.</p>
            </div>
            
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h2>API</h2>
                    </div>
                    <div class="card-body">
                        <input type="text" name="" id="input" class="form-control" placeholder="Enter your message">
                        <div class="form-group  mt-4">
                            <button id="btn" class="btn btn-primary">Send</button>
                        </div>
                  </div>
                </div>
            </div>
            <div class="col-6 h-">
                <div class="card h-100 box-shadow">
                    <div class="card-header d-flex justify-content-between">
                        <h2>Response</h2>
                        <button type="button" class="btn btn-info btn-sm" onclick="window.location.reload()">Reload</button>
                    </div>
                    <div class="card-body">
                        <div class="response">

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- // Load Bootstrap JS and jQuery -->
    <script src="app.js"></script>
</body>
</html>
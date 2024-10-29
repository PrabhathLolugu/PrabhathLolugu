<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ResolveHub</title>
</head>

<style>

body {
    background-color: #f2f2f2;
}

.home {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.home .header img {
    height: 100px;
    text-align: center;
    display: block;
    margin: 0 auto;
    width: 100%;
    padding-top:0px;
}

.content {
    text-align: center;
}

.content .navbar-text {
    display: block;
    margin-bottom: 20px;
    font-size: 20px;
    color: #555555;
}

.content a.btn {
    display: inline-block;
    margin-right: 10px;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 16px;
    text-decoration: none;
    color: #ffffff;
}

.content a.btn-success {
    background-color: #28a745;
}

.content a.btn-danger {
    background-color: #dc3545;
}

</style>

<body>
    <div class="home">
        <div class="header">
            <img src="images/logo-resolvehub.png" alt="">
        </div>

        <div class="content">
            <span class="navbar-text">Customer's Happiness is our Aim</span>
            <a href="Requester/RequesterLogin.php" class="btn btn-success mr-4">Login</a>
            <a href="#registration" class="btn btn-danger mr-4">Sign Up</a>
        </div>
    </div>
</body>
</html>

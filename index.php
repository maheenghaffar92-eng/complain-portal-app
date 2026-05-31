<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Loading...</title>

<style>
    body {
        margin: 0;
        padding: 0;
        background: #0A3D62; /* Deep Blue (Campus Theme) */
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: "Poppins", sans-serif;
        color:#FFFFFF;
    }

    .loader-text {
        font-size: 34px;
        font-weight: 600;
        letter-spacing: 2px;
        animation: fade 1.5s infinite alternate;
    }

    @keyframes fade {
        0% { opacity: .3; letter-spacing: 2px; }
        100% { opacity: 1; letter-spacing: 6px; }
    }

    .subtext {
        text-align: center;
        margin-top: 10px;
        font-size: 16px;
        opacity: 0.7;
    }

    @media (max-width: 576px) {
        .loader-text {
        font-size: 25px;
        font-weight: 600;
        letter-spacing: 2px;
        animation: fade 1.5s infinite alternate;
    }

        .subtext {
        text-align: center;
        margin-top: 10px;
        font-size: 10px;
        opacity: 0.7;
    }
}
</style>

</head>
<body>

<div>
    <div class="loader-text">RASS COMPLAINTS</div>
    <div class="subtext">Loading, please wait...</div>
</div>

<script>
    // Redirect to your main site after 3 seconds
    setTimeout(() => {
        window.location.href = "home.php"; // change if needed
    }, 3000);
</script>

</body>
</html>



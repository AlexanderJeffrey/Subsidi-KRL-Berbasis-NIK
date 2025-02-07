<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Visualisasi</title>
</head>

<style>
    .content {
        display: flex;
        flex-direction: column;
        height: 100vh;
    }

    .content > div {
        flex: 1;
    }

    iframe {
        width: 100%;
        height: 100%;
    }
</style>

<body>
    <?php include "layout/sidebar.php" ?>

    <div class="content">
        <div>
        <iframe title="Subsidi KRL" src="https://app.powerbi.com/reportEmbed?reportId=57bcf244-754c-499d-abdf-cc8072bcb6e8&autoAuth=true&ctid=a1647c30-a45b-4fe3-8881-dd686a25b476" frameborder="0" allowFullScreen="true"></iframe>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= isset($title) ? $title : 'CareFlow'; ?></title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f6f7f9;
            color: #1f2937;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .app {
            display: flex;
            min-height: 100vh;
        }

        .main {
            flex: 1;
            min-width: 0;
        }

        .content {
            padding: 30px;
        }
    </style>
</head>

<body>

<div class="app">

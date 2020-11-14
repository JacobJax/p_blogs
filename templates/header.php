<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap');

        *{
            font-family: 'Roboto Mono', monospace !important;

        }
        body{
            background: #f5f5f5;
        }
        img{
            width: 100%;
            height: 500px;
        }
        nav{
            padding: 5px;
            background: #ff5252;
        }

        header{
            padding: 100px;
            text-align: center;
            height: 50vh;
            background: url('img/pesce-huang-5HD8bIWohNA-unsplash.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        form{
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;
        }

        .blog-header{
            height: 50vh;
            text-align: center;
            background: #ff5252;
            padding: 50px;
            color: #fff;
        }
        .blog-content{
            padding: 50px;
            display: grid;
            place-items: center;
            text-align: center;
        }

        footer{
            background: #ff5252;
            padding: 15px;
            margin-top: 20px;
            color: #fff;
            text-align: center;
        }

    </style>
    <title>p_logs</title>
</head>
<body>
    <nav>
        <div class="nav-wrapper">
          <a href="index.php" class="brand-logo">P_Blogs</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="add.php" class="btn">Add blog</a></li>
          </ul>
        </div>
    </nav>

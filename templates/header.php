<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap');

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
            background: #db4242;
            position: relative;
        }

        header{
            text-align: center;
            height: 60vh;
            background: url('img/pesce-huang-5HD8bIWohNA-unsplash.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            padding: 50px;
            position: absolute;
            z-index: -10;
            width: 99vw;
        }

        section{
            margin: auto;
            display: grid;
            place-items: center;
            margin-top: 30vh;
        }
        .blogs{
            display: grid;
            place-items: center;
            /* margin-left: 20%; */
        }

        .blog{
            width: 700px;
            background: #fff;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .card-header, .card-content{
            padding: 10px;
        }

        footer{
            background: #ff5252;
            padding: 30px;
            text-align: center;
            /* width: 100%; */
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
            position: absolute;
            z-index: -10;
            width: 99vw;
        }
        .blog-content{
            padding: 50px;
            display: grid;
            place-items: center;
            text-align: center;
            margin-top: 20vh;
        }
        .the-blog{
            width: 800px;
            background: #fff;
            text-align: center;
        }
        .the-blog-content{
            padding: 30px;
            text-align: center;
        }
        nav, section, footer, header{
            width: 99vw;
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

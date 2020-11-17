<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto&family=Roboto+Mono&display=swap');
        *{
            font-family: 'Roboto Mono', monospace !important;
        }
        body{
            background: #f5f5f5;
        }
        img{
            width: 100%;
        }
        nav{
            padding: 5px;
            background: #ff5252;
            position: relative;
        }

        header{
            text-align: center;
            height: 70vh;
            background: url('img/hodgepodge.png');
            background-repeat: true;
            background-attachment: fixed;
            padding: 60px;
            position: absolute;
            top:0;
            z-index: -10;
            width: 99vw;
        }

        section{
            margin: auto;
            display: grid;
            place-items: center;
            margin-top: 40vh;
        }
        .blogs{
            display: grid;
            place-items: center;
        }

        .blog{
            width: 95%;
            max-width: 700px;
            background: #fff;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .card-header, .card-content{
            padding: 10px 0 10px 30px;
            font-family: 'Roboto', sans-serif;
        }

        footer{
            background: #ff5252;
            padding: 30px;
            text-align: center;
        }
        form{
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;
        }

        .blog-header{
            height: 60vh;
            text-align: center;
            background: #ff5252;
            padding: 60px;
            color: #fff;
            position: absolute;
            top: 0;
            z-index: -10;
            width: 100%;
        }
        .blog-content{
            padding: 50px;
            display: grid;
            place-items: center;
            text-align: center;
            margin-top: 30vh;
        }
        .the-blog{
            width: 95%;
            max-width: 800px;
            text-align: center;
        }
        .the-blog-content{
            text-align: left;
            font-family: 'Roboto', sans-serif;
        }
        nav, section, footer, header{
            width: 100%;
        }


    </style>
    <title>p_logs</title>
</head>
<body>
    <!-- <nav>
        <div class="nav-wrapper">
          <a href="index.php" class="brand-logo">P_Blogs</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="add.php" class="btn">Add blog</a></li>
          </ul>
        </div>
    </nav> -->

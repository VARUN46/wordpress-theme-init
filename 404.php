
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>404 Not Found</title>
  <style type="text/css">
    html,
    body {
      margin: 0;
      padding: 0;
      height: 100%;
    }

    body {
      background-color: #FFF;
      color: #000;
      -moz-font-smoothing: antialiased;
      -webkit-font-smoothing: antialiased;
    }

    .container {
      text-align: center;
      height: 100%;
    }

    @media (max-width: 480px) {
      .container {
        position: relative;
        top: 50%;
        height: initial;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
      }
    }

    .container h1 {
      margin: 0;
      font-size: 5rem;
      font-weight: 300;
    }

    @media (min-width: 480px) {
      .container h1 {
        position: relative;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
      }
    }

    @media (min-width: 768px) {
      .container h1 {
        font-size: 8rem;
      }
    }

    .visit-msg {
      color: #000;
      font-weight: 400;
      margin: 0;
    }

    @media (min-width: 480px) {
      .visit-msg {
        position: absolute;
        width: 100%;
        bottom: 30px;
      }
    }

    .visit-msg a {
      padding-bottom: 1px;
      color: #000;
      text-decoration: none;
      border-bottom: 1px solid blue;
    }

    .visit-msg a:hover {
      border-bottom-color: #fff;
    }
  </style>
</head>

<body>

<div class="container">
  <h1>-_-<br/> <span style="font-size:0.4em;">404 LOST PATH</span> </h1>

  <p class="visit-msg"> Visit <a href="/"><?php echo get_home_url(); ?></a></p>
</div>

</body>
</html>

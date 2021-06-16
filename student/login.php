<!DOCTYPE html>
<html>
  <head>
    <title>Library Management System</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
  </head>
  <body>
    <div class="wrapper">
      <header style="height: 70px">
        <div class="logo">
          <h1
            style="
              color: white;
              font-size: 40px;
              margin-top: 3px;
              line-height: 60px;
            "
          >
            Library Management System
          </h1>
        </div>
        <nav style="padding-top: 3px">
          <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="books.html">BOOKS</a></li>
            <li><a href="adlogin.html">ADMIN_LOGIN</a></li>
            <li><a href="registration.html">REGISTRATION</a></li>
            <li><a href="feedback.html">FEEDBACK</a></li>
          </ul>
        </nav>
      </header>

      <section>
        <div class="photo">
          <br />
          <div class="box1">
            <br />
            <h1 style="font-size: 45px">Library Management System</h1>
            <br /><br />
            <h1 style="font-size: 30px">User Login Form</h1>
            <br /><br />
            <form class="login" name="login" action="" method="">
              <input
                type="text"
                name="Username"
                placeholder="Enter your username"
                required
              />
              <br /><br />
              <input
                type="password"
                name="password"
                placeholder="Enter your password"
                required
              />
              <br /><br />
              <button
                style="
                  background-color: teal;
                  height: 35px;
                  width: 70px;
                  font-size: 16px;
                "
              >
                Login
              </button>
              <br /><br /><br />
            </form>

            <p style="color: white; margin-left: 70px; font-size: 18px">
              <a style="color: white; text-decoration: none" href=""
                >Forgot Password?</a
              >
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              New to this Website?&nbsp;&nbsp;&nbsp;&nbsp;<a
                style="color: white; text-decoration: none"
                href="registration.html"
                >Create Account</a
              >
            </p>
          </div>
        </div>
      </section>
    </div>
  </body>
</html>

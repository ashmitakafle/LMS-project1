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
            <li><a href="stlogin.html">STUDENT_LOGIN</a></li>
            <li><a href="feedback.html">FEEDBACK</a></li>
          </ul>
        </nav>
      </header>

      <section>
        <div class="photo1">
          <br />
          <div class="box2">
            <h1 style="font-size: 40px; text-align: center; color: white">
              Registration Form
            </h1>
            <br />

            <p style="color: white; margin-left: 20px; font-size: 20px">
              Please fill up the form below:
            </p>
            <br /><br />

            <form class="registration" name="registration" action="" method="">
              <input
                type="text"
                name="First Name"
                placeholder="FirstName"
                required
              /><br /><br />
              <input
                type="text"
                name="Last Name"
                placeholder="LastName"
                required
              /><br /><br />
              <input
                type="text"
                name="Username"
                placeholder="Username"
                required
              /><br /><br />
              <input
                type="password"
                name="Password"
                placeholder="Password"
                required
              />
              <br /><br />
              <input
                type="number"
                name="Rollno"
                placeholder="RollNo"
                required
              /><br /><br />
              <input
                type="email"
                name="Email"
                placeholder="Email"
                required
              /><br /><br />
              <button style="background-color: turquoise">SignUp</button
              >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <button style="background-color: turquoise">
                <a
                  style="text-decoration: none; color: black"
                  href="stlogin.html"
                  >Back</a
                >
              </button>
            </form>
          </div>
        </div>
      </section>
    </div>
  </body>
</html>

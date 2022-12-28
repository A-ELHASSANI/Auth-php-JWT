<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Authentification</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="custom.css" />
  </head>

  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Navigation</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="javascript:void(0);" id="home"
            >Homepage</a
          >
          <a class="nav-item nav-link" href="javascript:void(0);" id="logout"
            >Logout</a
          >
          <a class="nav-item nav-link" href="javascript:void(0);" id="login"
            >Login</a
          >
          <!-- <a class="nav-item nav-link" href="javascript:void(0);" id="sign_up">Registration</a> -->
        </div>
      </div>
    </nav>

    <main role="main" class="container starter-template">
      <div class="row">
        <div class="col">
          <div id="response"></div>

          <div id="content"></div>
        </div>
      </div>
    </main>

    <script
      src="http://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>

    <script>
      jQuery(($) => {
        
        $(document).on("click", "#login", () => {
          showLoginPage();
        });

        $(document).on("submit", "#login_form", function () {
          const login_form = $(this);
          const form_data = JSON.stringify(login_form.serializeObject());

          $.ajax({
            url: "api/login.php",
            type: "POST",
            contentType: "application/json",
            data: form_data,
            success: (result) => {
              setCookie("jwt", result.jwt, 1);

              showHomePage();
              $("#response").html(
                "<div class='alert alert-success'>Login successful.</div>"
              );
            },
            error: (xhr, resp, text) => {
              $("#response").html(
                "<div class='alert alert-danger'>Login failed. Email or password is incorrect.</div>"
              );
              login_form.find("input").val("");
            },
          });

          return false;
        });

        

        function showLoginPage() {
          setCookie("jwt", "", 1);

          let html = `
                        <h2>Login</h2>
                        <form id="login_form">
                            <div class="form-group">
                                <br/>
                                <label for="login">Login</label>
                                <input type="text" class="form-control" name="login" placeholder="Login">
                            </div>
                        
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Password">
                             </div>

                             <button type="submit" class="btn btn-primary">Connexion</button>
                        </form>
                    `;

          $("#content").html(html);
          clearResponse();
          showLoggedOutMenu();
        }

        function setCookie(cname, cvalue, exdays) {
          var d = new Date();
          d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
          var expires = "expires=" + d.toUTCString();
          document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }


        function showLoggedOutMenu() {
          $("#login").show();
          $("#logout").hide();
        }

        function getCookie(cname) {
          let name = cname + "=";
          let decodedCookie = decodeURIComponent(document.cookie);
          let ca = decodedCookie.split(";");
          for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == " ") {
              c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
              return c.substring(name.length, c.length);
            }
          }
          return "";
        }
        function clearResponse() {
          $("#response").html("");
        }

        function showLoggedInMenu() {
          $("#login").hide();
          $("#logout").show();
        }

        $.fn.serializeObject = function () {
          let o = {};
          let a = this.serializeArray();
          $.each(a, function () {
            if (o[this.name] !== undefined) {
              if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
              }
              o[this.name].push(this.value || "");
            } else {
              o[this.name] = this.value || "";
            }
          });
          return o;
        };
        function showHomePage() {
          const jwt = getCookie("jwt");

          $.post("api/validate_token.php", JSON.stringify({ jwt: jwt }))
            .done((result) => {
                $(document).on("click", "#home", () => {
                 showHomePage();
                 clearResponse();
        });
              let html = `
         <div class="card">
              <div class="card-header">Welcome!</div>
             <div class="card-body">
                <h5 class="card-title">You are logged in</h5>
                <p class="card-text">You will not be able to access the homepage and account pages if you are not logged in</p>
            </div>
        </div>
    `;

              $("#content").html(html);
              showLoggedInMenu();
            })

            .fail(function (result) {
              showLoginPage();
              $("#response").html(
                "<div class='alert alert-danger'>Please login to access the homepage</div>"
              );
            });
        }
        function getCookie(cname) {
          let name = cname + "=";
          let decodedCookie = decodeURIComponent(document.cookie);
          let ca = decodedCookie.split(";");
          for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == " ") {
              c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
              return c.substring(name.length, c.length);
            }
          }
          return "";
        }
        function showLoggedInMenu() {
          $("#login").hide();
          $("#logout").show();
        }
        $(document).on("click", "#logout", () => {
             showLoginPage();
        $("#response").html("<div class='alert alert-info'>You are logged out.</div>");
        });
    });
    </script>
  </body>
</html>

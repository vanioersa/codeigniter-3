<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-image: url("https://smpmuh8smg.sch.id/wp-content/uploads/sites/108/2023/02/WhatsApp-Image-2023-02-21-at-11.48.12-1024x575.jpeg");
    background-repeat: no-repeat;
    background-size: cover;
}

.container {
    width: 400px;
    display: flex;
    max-width: 850px;
    background: #fff;
    border-radius: 25px;
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
    background-color: Olive;
}

.login {
      text-align: center;
    width: 500px;
}

form {
    width: 250px;
    margin: 60px auto;
}

h1 {
    margin: 20px;
    text-align: center;
    font-weight: bolder;
    text-transform: uppercase;
}

hr {
    border-top: 5px solid #ffa12c;
}

p {
    text-align: center;
    margin: 10px;
}

.right img {
    width: 350px;
    height: 100%;
    border-top-right-radius: 15px;
    border-bottom-right-radius: 15px;
}

form label {
    display: block;
    font-size: 16px;
    font-weight: 600;
    padding: 5px;
}

input {
    width: 100%;
    margin: 2px;
    border: none;
    outline: none;
    padding: 8px;
    border-radius: 5px;
    border: 1px solid gray;
}

button {
    border: none;
    outline: none;
    padding: 8px;
    width: 250px;
    color: white;
    font-size: 16px;
    cursor: pointer;
    margin-top: 20px;
    border-radius: 5px;
    background: #ffa12c;
}

button:hover {
    background: rgba(214, 86, 64, 1);
}


@media (max-width: 880px) {
    .container {
        width: 100%;
        max-width: 750px;
        margin-left: 20px;
        margin-right: 20px;
    }

    form {
        width: 300px;
        margin: 20px auto;
    }

    .login {
        width: 900px;
        padding: 20px;
    }

    button {
        width: 100%;
    }

    .right img {
        width: 100%;
        height: 100%;
    }
}

</style>
</head>
<body>
  <div class="container">
      <div class="login">
          <form action="<?php echo base_url()?>Auth/fungsi_login" method="post">
              <h1>Login</h1>
              <hr>
              <p>Silahkan Isi Form Sesuai Reistrasi Anda</p>
                
              <label for="">Email</label>
              <input type="text" placeholder="Email">
              <label for="">Password</label>
              <input type="password" placeholder="Password">
              <button>Login</button>
              
          </form>
      </div>
      <!-- <div class="right">
          <img src="https://1.bp.blogspot.com/-GJHZKy20SvU/XoREX5TbCfI/AAAAAAAAAJE/P7GFdkg1nE0bH6JM9Uq5Y-SLg0JR4Sh6ACLcBGAsYHQ/s1600/LOGO%2BDIKDAS.jpg" alt="">
      </div> -->
  </div>
</body>
</html>


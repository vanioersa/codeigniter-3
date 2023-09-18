<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Halaman Register</title>
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
    background-image: 
    url("https://blogger.googleusercontent.com/img/a/AVvXsEgEBoqcfCRHuIeTjsDqRci2EJO-Rv5jiONLJXa4FmuOUG4-_w6wUDnOPgSDmITPzaWMCJ1st0qOYpymH6wITrHRRDJVV2PDBN3QBB7wTGT7CBE1oz_dVGQYeFofPTM29r_QK-9ULJ_G-bwZFLCvDu0Jlmd0a3FvU9pHG_myLvroeGg-fRfh-GbSbab2ww=s320");
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
    background-color: maroon;
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
    border-radius: 50px;
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
    border-radius: 15px;
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
    border-radius: 15px;
    background: blue;
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
        <h1>Register</h1>
        <hr>
        <p>Silahkan Di Bawah Ini :</p>
          <label for="">Nama</label>
          <input type="text" placeholder="Nama">
          <label for="">Gender</label>
          <input type="text" placeholder="Gender">
          <label for="">Email</label>
          <input type="text" placeholder="Email">
          <label for="">Password</label>
          <input type="password" placeholder="Password">
          <button>Login</button>  
      </form>
    </div>
  </div>
</body>
</html>


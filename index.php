<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/styles.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://kit.fontawesome.com/ec46b80c81.css" crossorigin="anonymous" />
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />

  <title>Thrifty Pto. Peñasco</title>
</head>

<body>
  <div class="grid grid-cols-2 ">
    <div class="absolute w-full bg-white">
      <img src="img/Logo.jpg" width="160px" class="p-5" alt="Logo Thrifty" />
    </div>
    <form class="mx-12 content-center" action="validar.php" method="POST">
      <h1 class="title">Log in</h1>
      <p class="subtitle mb-8">Welcome back!</p>
      <div class="relative z-0 w-full my-6 mx-auto group">
        <input type="email" name="correo" id="input_email"
          class="input block py-2.5 px-0 w-full bg-transparent border-2 rounded-lg border-[#727782] appearance-none focus:outline-none focus:ring-0 focus:border-[#0F172A] peer"
          placeholder="" required />
        <label for="floating_email"
          class="input peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-8 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[#0F172A] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-1 peer-focus:scale-75 peer-focus:-translate-y-8 pl-2">Email</label>
      </div>
      <div class="relative z-0 w-full my-6 mx-auto group">
        <input type="password" name="password" id="input_password"
          class="input block py-2.5 px-0 w-full bg-transparent border-2 rounded-lg border-[#727782] appearance-none focus:outline-none focus:ring-0 focus:border-[#0F172A] peer"
          placeholder=" " required />
        <label for="floating_password"
          class="input peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-8 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[#0F172A] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-1 peer-focus:scale-75 peer-focus:-translate-y-8 pl-2">Password</label>
      </div>
      <button class="button" id="button_login">Log in</button>
      <div class="flex my-6">
        <hr width="40%" class="m-auto z-0">
        <div class="subsubtitle z-10 text-center top-10">or</div>
        <hr width="40%" class="m-auto z-0">
      </div>
      <p class="text text-center">Are you an administrator? <a class="link hover:underline" href="login_admin.php" id="login_admin">Log
          In As Administrator</a></p>
    </form>
    <div class="grid place-content-center ">
      <div class="h-screen ">
        <img class="rounded-3xl h-[92.5%] mt-[5%] opacity-80" src="img/Hero.jpg" alt="Conos de Nieve"/>
      </div>
    </div>
  </div>
  <?php
  if (!empty($_GET["error"]) && $_GET["error"] == 100) {
    echo "Se ha detectado un acceso indebido";
  }
  ?>
  <?php
  $current_url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  echo "La URL actual es: " . $current_url;
  ?>
</body>

</html>
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
    <div class="fixed w-full bg-white z-10">
      <div class="flex">
        <a href="login_admin.php" id="button_login_admin"><i class="title p-5 fa-sharp fa-solid fa-circle-arrow-left"></i></a>
        <img src="img/Logo.jpg" width="160px" class="p-5" alt="Logo Thrifty" />
      </div>
    </div>
    <div class="mx-12 content-center mt-[72px]">
      <h1 class="title">Create New Employee</h1>
      <p class="subtitle mb-8">Fields with an asterisk (<b class="mandatory">*</b>) are mandatory.</p>
      <div class="max-h-1/2">
        <h2 class="topic">General</h2>
        <div class="relative z-0 w-full my-6 mx-auto group">
          <form action="create.php" method="POST">
            <input type="text" name="name" id="input_name"
              class="input block py-2.5 px-0 w-full bg-transparent border-2 rounded-lg border-[#727782] appearance-none focus:outline-none focus:ring-0 focus:border-[#0F172A] peer"
              placeholder="" required />
            <label for="first name"
              class="input peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-8 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[#0F172A] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-1 peer-focus:scale-75 peer-focus:-translate-y-8 pl-2">First
              Name<b class="mandatory">*</b></label>
        </div>
        <div class="relative z-0 w-full my-6 mx-auto group">
          <input type="text" name="apellido" id="input_last_name"
            class="input block py-2.5 px-0 w-full bg-transparent border-2 rounded-lg border-[#727782] appearance-none focus:outline-none focus:ring-0 focus:border-[#0F172A] peer"
            placeholder="" required />
          <label for="last name"
            class="input peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-8 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[#0F172A] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-1 peer-focus:scale-75 peer-focus:-translate-y-8 pl-2">Last
            Name<b class="mandatory">*</b></label>
        </div>
        <div class="relative z-0 w-full my-6 mx-auto group">
          <select name="gender" id="select_gender"
            class="input block py-2.5 px-0 w-full bg-transparent border-2 rounded-lg border-[#727782] appearance-none focus:outline-none focus:ring-0 focus:border-[#0F172A] peer"
            placeholder="" required>
            <option value="" selected disabled>Select An Option</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="NotSpecified">Not Specified</option>
          </select>
          <label for="gender"
            class="input peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-8 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[#0F172A] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-1 peer-focus:scale-75 peer-focus:-translate-y-8 pl-2">Gender<b
              class="mandatory">*</b></label>
        </div>
        <div class="relative z-0 w-full my-6 mx-auto group">
          <input type="date" name="nacimiento" id="input_birth_date"
            class="input block py-2.5 px-0 w-full bg-transparent border-2 rounded-lg border-[#727782] appearance-none focus:outline-none focus:ring-0 focus:border-[#0F172A] peer"
            placeholder="" required />
          <label for="date of birth"
            class="input peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-8 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[#0F172A] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-1 peer-focus:scale-75 peer-focus:-translate-y-8 pl-2">Date
            Of Birth<b class="mandatory">*</b></label>
        </div>
        <div class="relative z-0 w-full my-6 mx-auto group">
          <input type="text" name="CURP" id="input_CURP"
            class="input block py-2.5 px-0 w-full bg-transparent border-2 rounded-lg border-[#727782] appearance-none focus:outline-none focus:ring-0 focus:border-[#0F172A] peer"
            placeholder="" minlength="18" maxlength="18" required />
          <label for="CURP"
            class="input peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-8 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[#0F172A] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-1 peer-focus:scale-75 peer-focus:-translate-y-8 pl-2">CURP<b
              class="mandatory">*</b></label>
        </div>
        <div class="relative z-0 w-full my-6 mx-auto group">
          <input type="text" name="RFC" id="input_RFC"
            class="input block py-2.5 px-0 w-full bg-transparent border-2 rounded-lg border-[#727782] appearance-none focus:outline-none focus:ring-0 focus:border-[#0F172A] peer"
            placeholder="" minlength="13" maxlength="13" required />
          <label for="RFC"
            class="input peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-8 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[#0F172A] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-1 peer-focus:scale-75 peer-focus:-translate-y-8 pl-2">RFC<b
              class="mandatory">*</b></label>
        </div>
        <div class="relative z-0 w-full my-6 mx-auto group">
          <input type="email" name="email" id="input_personal_email"
            class="input block py-2.5 px-0 w-full bg-transparent border-2 rounded-lg border-[#727782] appearance-none focus:outline-none focus:ring-0 focus:border-[#0F172A] peer"
            placeholder="" required />
          <label for="email"
            class="input peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-8 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[#0F172A] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-1 peer-focus:scale-75 peer-focus:-translate-y-8 pl-2">Email<b
              class="mandatory">*</b></label>
        </div>
        <div class="relative z-0 w-full my-6 mx-auto group">
          <input type="email" name="conemail" id="input_confirm_personal_email"
            class="input block py-2.5 px-0 w-full bg-transparent border-2 rounded-lg border-[#727782] appearance-none focus:outline-none focus:ring-0 focus:border-[#0F172A] peer"
            placeholder="" required />
          <label for="confirm email"
            class="input peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-8 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[#0F172A] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-1 peer-focus:scale-75 peer-focus:-translate-y-8 pl-2">Confirm
            Email<b class="mandatory">*</b></label>
        </div>
        <div class="relative z-0 w-full my-6 mx-auto group">
          <input type="text" name="phone" id="input_phone"
            class="input block py-2.5 px-0 w-full bg-transparent border-2 rounded-lg border-[#727782] appearance-none focus:outline-none focus:ring-0 focus:border-[#0F172A] peer"
            placeholder="" minlength="10" maxlength="10" required />
          <label for="phone number"
            class="input peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-8 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[#0F172A] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-1 peer-focus:scale-75 peer-focus:-translate-y-8 pl-2">Phone
            Number<b class="mandatory">*</b></label>
        </div>
      </div>

      <div>
        <h2 class="topic">User Info</h2>
        <div class="relative z-0 w-full my-6 mx-auto group">
          <input type="email" name="workemail" id="input_work_email"
            class="input block py-2.5 px-0 w-full bg-transparent border-2 rounded-lg border-[#727782] appearance-none focus:outline-none focus:ring-0 focus:border-[#0F172A] peer"
            placeholder="" required />
          <label for="work email"
            class="input peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-8 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[#0F172A] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-1 peer-focus:scale-75 peer-focus:-translate-y-8 pl-2">Personal
            Email<b class="mandatory">*</b></label>
        </div>
        <div class="relative z-0 w-full my-6 mx-auto group">
          <input type="password" name="password" id="input_password"
            class="input block py-2.5 px-0 w-full bg-transparent border-2 rounded-lg border-[#727782] appearance-none focus:outline-none focus:ring-0 focus:border-[#0F172A] peer"
            placeholder=" " required />
          <label for="password"
            class="input peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-8 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[#0F172A] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-1 peer-focus:scale-75 peer-focus:-translate-y-8 pl-2">Password<b
              class="mandatory">*</b></label>
        </div>
        <div class="relative z-0 w-full my-6 mx-auto group">
          <input type="password" name="conpassword" id="input_confirm_password"
            class="input block py-2.5 px-0 w-full bg-transparent border-2 rounded-lg border-[#727782] appearance-none focus:outline-none focus:ring-0 focus:border-[#0F172A] peer"
            placeholder=" " required />
          <label for="confirm password"
            class="input peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-8 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[#0F172A] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-1 peer-focus:scale-75 peer-focus:-translate-y-8 pl-2">Confirm
            Password<b class="mandatory">*</b></label>
        </div>
      </div>

      <div>
        <h2 class="topic">Address</h2>
        <div class="relative z-0 w-full my-6 mx-auto group">
          <input type="text" name="address" id="input_address"
            class="input block py-2.5 px-0 w-full bg-transparent border-2 rounded-lg border-[#727782] appearance-none focus:outline-none focus:ring-0 focus:border-[#0F172A] peer"
            placeholder="" required />
          <label for="address"
            class="input peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-8 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[#0F172A] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-1 peer-focus:scale-75 peer-focus:-translate-y-8 pl-2">Address<b
              class="mandatory">*</b></label>
        </div>
        <div class="relative z-0 w-full my-6 mx-auto group">
          <input type="text" name="type" id="input_type"
            class="input block py-2.5 px-0 w-full bg-transparent border-2 rounded-lg border-[#727782] appearance-none focus:outline-none focus:ring-0 focus:border-[#0F172A] peer"
            placeholder="" required />
          <label for="type"
            class="input peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-8 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[#0F172A] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-1 peer-focus:scale-75 peer-focus:-translate-y-8 pl-2">Apartment,
            Suite, Etc.<b class="mandatory">*</b></label>
        </div>
        <div class="relative z-0 w-full my-6 mx-auto group">
          <input type="text" name="CP" id="input_postal_code"
            class="input block py-2.5 px-0 w-full bg-transparent border-2 rounded-lg border-[#727782] appearance-none focus:outline-none focus:ring-0 focus:border-[#0F172A] peer"
            placeholder="" required minlength="5" maxlength="5"/>
          <label for="postal code"
            class="input peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-8 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[#0F172A] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-1 peer-focus:scale-75 peer-focus:-translate-y-8 pl-2">Postal
            Code<b class="mandatory">*</b></label>
        </div>
        <div class="relative z-0 w-full my-6 mx-auto group">
          <input type="text" name="city" id="input_city"
            class="input block py-2.5 px-0 w-full bg-transparent border-2 rounded-lg border-[#727782] appearance-none focus:outline-none focus:ring-0 focus:border-[#0F172A] peer"
            placeholder="" required />
          <label for="city"
            class="input peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-8 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[#0F172A] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-1 peer-focus:scale-75 peer-focus:-translate-y-8 pl-2">City<b
              class="mandatory">*</b></label>
        </div>
      </div>
      <button class="button mt-6 mb-12" id="button_create_user">Create User</button>
    </div>
    </form>
    <div class="grid">
      <div class="fixed h-screen z-20">
        <img class="rounded-3xl h-[92.5%] mt-[5%] opacity-80 ml-[22.2%]" src="img/Hero.jpg" alt="Conos de Nieve" />
      </div>
    </div>
  </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://kit.fontawesome.com/ec46b80c81.css" crossorigin="anonymous" />
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <title>Document</title>
</head>

<body>
    <header class="flex h-20 overflow-hidden justify-between">
        <img src="img/Logo.jpg" class="p-5 h-full" alt="">
        <div class="p-4 flex items-center">
            <!-- perfil actual -->
            <img src="img/Gato.jpg" class="h-full rounded-full" alt="">
            <div class="px-2">
                <p class="font-medium">Oreo</p>
                <p>Admin</p>
            </div>
            <i class="fa-light fa-circle-chevron-down fa-xl"></i>
        </div>
    </header>
    <div class="grid grid-cols-5 h-full -z-10">
        <div class="flex flex-col mt-4 gap-1">
            <div class=" ml-5 w-5/6 grid place-content-start bg-[#EF3826] rounded-lg p-2 text-white"><a
                    href="pageadmin.html"><i class="fa-solid fa-table w-6"></i> Dashboard</a></div>
            <div
                class=" ml-5 w-5/6 grid place-content-start hover:bg-[#EF3826] rounded-lg p-2 hover:text-white duration-200 ">
                <a href="pageadmin.html"><i class="fa-solid fa-file-import w-6"></i> BackUp</a></div>
            <hr>
            <h2 class="px-4 pt-2 text-xs ">Documents</h2>
            <div
                class=" ml-5 w-5/6 grid place-content-start hover:bg-[#EF3826] rounded-lg p-2 hover:text-white duration-200 ">
                <a href="pageadmin.html" class=""><i class="fa-solid fa-file-circle-exclamation w-6"></i> Adm.
                    Record</a></div>
            <div
                class=" ml-5 w-5/6 grid place-content-start hover:bg-[#EF3826] rounded-lg p-2 hover:text-white duration-200 ">
                <a href="pageadmin.html" class=""><i class="fa-solid fa-file-contract w-6"></i> Contract</a></div>
            <div
                class=" ml-5 w-5/6 grid place-content-start hover:bg-[#EF3826] rounded-lg p-2 hover:text-white duration-200 ">
                <a href="pageadmin.html" class=""><i class="fa-solid fa-file-circle-xmark w-6"></i> Waiver</a></div>
            <div
                class=" ml-5 w-5/6 grid place-content-start hover:bg-[#EF3826] rounded-lg p-2 hover:text-white duration-200 ">
                <a href="pageadmin.html" class=""><i class="fa-solid fa-file-certificate w-6"></i> Emp. Certificate</a>
            </div>
            <hr>
            <h2 class="px-4 pt-2 text-xs ">Tables</h2>
            <div
                class=" ml-5 w-5/6 grid place-content-start hover:bg-[#EF3826] rounded-lg p-2 hover:text-white duration-200 ">
                <a href="pageadmin.html" class=""><i class="fa-solid fa-users w-6"></i> Employees</a></div>
            <div
                class=" ml-5 w-5/6 grid place-content-start hover:bg-[#EF3826] rounded-lg p-2 hover:text-white duration-200 ">
                <a href="pageadmin.html" class=""><i class="fa-regular fa-list w-6"></i> User</a></div>
            <div
                class=" ml-5 w-5/6 grid place-content-start hover:bg-[#EF3826] rounded-lg p-2 hover:text-white duration-200 ">
                <a href="pageadmin.html" class=""><i class="fa-solid fa-chart-simple w-6"></i> Log</a></div>
            <hr>
            <div class="flex"></div>
            <div
                class=" ml-5 w-5/6 grid place-content-start hover:bg-[#EF3826] rounded-lg p-2 hover:text-white duration-200 ">
                <a href="pageadmin.html" class=""><i class="fa-solid fa-left-from-bracket w-6"></i> Log out</a></div>
        </div>
        <div class=" bg-[#F5F6FA]" style="grid-column: 2/6 ">
            <h1>Dashboard </h1>
            <div class="grid grid-cols-4 gap-2 m-5">
                <div class="bg-white p-4 rounded-lg grid place-content-between grid-cols-2">
                    <div>
                        <h2 class="text-xs">Total Employees</h2>
                        <h1 class="text-3xl">100</h1>
                    </div>
                    <div class="flex justify-end">
                        <div class="grid place-content-center rounded-xl w-8 h-8  bg-[#e5e4ff]">
                            <i class="fa-duotone fa-solid fa-users"
                                style="--fa-primary-color: #8280ff; --fa-secondary-color: #aba9ff;"></i>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg grid place-content-between grid-cols-2">
                    <div>
                        <h2 class="text-xs">Total Employees</h2>
                        <h1 class="text-3xl">100</h1>
                    </div>
                    <div class="flex justify-end">
                        <div class="grid place-content-center rounded-xl w-8 h-8  bg-[#c9f0ea]">
                            <i class="fa-duotone fa-solid fa-users"
                                style="--fa-primary-color: #00b69b; --fa-secondary-color: #53cebc;"></i>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg grid place-content-between grid-cols-2">
                    <div>
                        <h2 class="text-xs">Total Employees</h2>
                        <h1 class="text-3xl">100</h1>
                    </div>
                    <div class="flex justify-end">
                        <div class="grid place-content-center rounded-xl w-8 h-8  bg-[#fcd5d1]">
                            <i class="fa-duotone fa-solid fa-users"
                                style="--fa-primary-color: #ef3826; --fa-secondary-color: #f4796c;"></i>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg grid place-content-between grid-cols-2">
                    <div>
                        <h2 class="text-xs">Total Employees</h2>
                        <h1 class="text-3xl">100</h1>
                    </div>
                    <div class="flex justify-end">
                        <div class="grid place-content-center rounded-xl w-12 h-12  bg-[#dcdcdc]">
                            <i class="fa-duotone fa-solid fa-users fa-lg"
                                style="--fa-primary-color: #565656; --fa-secondary-color: #8d8d8d;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
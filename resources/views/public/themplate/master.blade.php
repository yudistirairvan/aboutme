<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Adsign</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="font-family bg-gray-200 text-black">
        <nav class="border-b bg-gray-400 broder-teal-500">
               <div class="container mx-auto flex items-center justify-between px-4 py-6">
                    <ul class="flex items-center text-black">
                        <li>
                            <a href="#">
                            <!-- <img src="images/logo-blue.png">  -->
                            <svg width="29" height="26" viewBox="0 0 29 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.380371 3.39665C0.380371 1.5554 1.87254 0.0632324 3.71379 0.0632324H24.9466C26.7869 0.0632324 28.279 1.5554 28.279 3.39665V22.1915C28.279 24.0318 26.7869 25.524 24.9466 25.524H3.71379C1.87254 25.524 0.380371 24.0327 0.380371 22.1915V3.39665ZM3.71379 2.28583C3.10004 2.28583 2.60297 2.7829 2.60297 3.39665V22.1915C2.60297 22.8071 3.09909 23.3023 3.71379 23.3023H24.9466C25.5603 23.3023 26.0574 22.8081 26.0574 22.1915V3.39665C26.0574 2.7829 25.5603 2.28583 24.9466 2.28583H3.71379Z" fill="black"/>
                            <path d="M0.380343 4.49045C0.380343 2.4035 2.07267 0.711182 4.16056 0.711182H11.1613V6.88474C11.1613 9.86149 8.74804 12.2748 5.7694 12.2748C2.79266 12.2748 0.379395 9.86149 0.379395 6.88474V4.49045H0.380343ZM4.16056 2.93378C3.30017 2.93378 2.60294 3.63101 2.60294 4.49045V6.8838C2.60294 8.63209 4.02111 10.0512 5.7694 10.0512C7.52054 10.0512 8.93871 8.63209 8.93871 6.8838V2.93378H4.16056Z" fill="black"/>
                            <path d="M8.93869 0.711182H19.7197V6.88474C19.7197 9.86149 17.3064 12.2748 14.3287 12.2748C11.352 12.2748 8.93774 9.86149 8.93774 6.88474V0.711182H8.93869ZM11.1613 2.93378V6.88474C11.1613 8.63304 12.5814 10.0522 14.3296 10.0522C16.0798 10.0522 17.4971 8.63304 17.4971 6.88474V2.93378H11.1613Z" fill="black"/>
                            <path d="M17.497 0.711182H24.5006C26.5876 0.711182 28.279 2.40445 28.279 4.49045V6.8838C28.279 9.86054 25.8666 12.2738 22.889 12.2738C19.9103 12.2738 17.4961 9.86054 17.4961 6.8838V0.711182H17.497ZM19.7206 2.93378V6.88475C19.7206 8.63304 21.1407 10.0522 22.8899 10.0522C24.6382 10.0522 26.0583 8.63304 26.0583 6.88475V4.49045C26.0583 3.63101 25.3601 2.93378 24.5006 2.93378H19.7206Z" fill="black"/>
                            <path d="M5.00293 10.8308L7.07375 10.2844L9.07816 17.8847H19.862L21.6643 10.311L23.7465 10.8062L21.5543 20.0257H7.42663L5.00293 10.8308Z" fill="black"/>
                            <path d="M15.2386 20.1606H13.422C12.5881 20.1606 11.9099 20.837 11.9099 21.6727C11.9099 22.5075 12.5881 23.1838 13.422 23.1838H15.2386C16.0743 23.1838 16.7506 22.5075 16.7506 21.6727C16.7497 20.837 16.0733 20.1606 15.2386 20.1606ZM13.422 17.939C11.3606 17.939 9.68823 19.6104 9.68823 21.6727C9.68823 23.7359 11.3606 25.4083 13.422 25.4083H15.2386C17.3008 25.4083 18.9732 23.735 18.9732 21.6727C18.9732 19.6104 17.3008 17.939 15.2386 17.939H13.422Z" fill="black"/>
                            </svg>
                            </a>
                        </li>
                        <li class="ml-16">
                            <a href="#" class="hover:text-black ">Mau Order Apa?</a>
                        </li>
                        <li class="ml-6 text-white">
                            <a href="#" class="hover:text-black">
                                <div class="box-content h-5 w-30 p-3 border-1 rounded-lg hover:bg-gray-500 bg-gray-600 "> Iklan Web Banner</div>
                            </a>
                        </li>
                        <li class="ml-6 text-white">
                            <a href="#" class="hover:text-black">
                                <div class="box-content h-5 w-30 p-3 border-1 rounded-lg hover:bg-gray-500 bg-gray-600 "> Iklan Instagram Buzz</div>
                            </a>
                        </li>
                        <li class="ml-6 text-white">
                            <a href="#" class="hover:text-black">
                                <div class="box-content h-5 w-30 p-3 border-1 rounded-lg hover:bg-gray-500 bg-gray-600 "> Iklan Sosmed</div>
                            </a>
                        </li>
                    </ul>
                    <ul class="flex items-center text-black">
                        <li class="ml-20"><a href="#" class="">Login</a></li>
                    </ul>
               </div>
        </nav>



        <div class="container mx-auto flex bg-transparent  items-center p-5 pt-16">

            <div class="bg-white rounded-lg border p-12">
                <div class="tittle-page ">
                <h2 class="uppercase tracking-wider text-lg font-semibold"> Data Insight : Dampak Positif Beriklan Lewat Internet Untuk Bisnis Anda</h2>

                <h4 class="pt-10 font-semibold">Di Generasi Industri 4.0</h4>
                <p class="pt-4">Nam omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."</p>

                <h4 class="pt-10 font-semibold">Instagram Big Buzzer kami :</h4>

                <p class="pt-4">
                    1. Nam omnis voluptas assumenda est, omnis dolor repellendus.
                    2. Temporibus autem quibusdam et aut officiis debitis aut rerum
                    3. necessitatibus saepe eveniet ut et voluptates repudiandae sint
                    4. et molestiae non recusandae. Itaque earum rerum hic
                </p>

                <h4 class="pt-10 font-semibold">Banner Website kami :</h4>
                <p class="pt-4">
                ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."

                </p>

                <h4 class="pt-10 font-semibold">Sosial Media kami :</h4>
                <p class="pt-4">
                ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."

                </p>

                </div>




                <div class="tittle-page  pt-10">
                    <h2 class="tracking-wider text-lg font-semibold"> Mereka Yang Telah Menggunakan Jasa Kami</h2>

                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                        <div class="mt-5">
                        <img src="images/person_1.jpg" alt="person">
                        <div class="mt-2">Judul</div>
                        </div>

                    </div>

                </div>


            </div>

        </div>
    </body>
</html>

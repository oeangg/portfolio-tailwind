<?php
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL , 'https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCdvViw-lmPEWHNPWtJUI8pQ&key=AIzaSyCUntta3ewQIw1Yx_L8mtZ0lQHM5-mcVSM');
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec($curl);
  curl_close($curl);

  $result = json_decode($result,true);
  
  $youtubeProfilPic = $result['items'][0]['snippet']['thumbnails']['default']['url'];
  $youtubeProfilName = $result['items'][0]['snippet']['title'];  
  $youtubeProfilSubs = $result['items'][0]['statistics']['subscriberCount'];


?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Tailwinds</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;0,900;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="dist/output.css" />
  </head>
  <body>
    <!-- header -->
    <header
      class="bg-transparent absolute flex items-center top-0 left-0 w-full z-20"
    >
      <div class="container">
        <div class="flex justify-between items-center relative">
          <div class="px-4">
            <a
              href="#home"
              class="font-black text-base text-primary py-4 block lg:text-2xl"
            >
              <svg
                width="48"
                role="img"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
                class="fill-current"
              >
                <title>Subhan Mohammad</title>
                <path
                  d="M16.71.243l-.12 2.71a.18.18 0 00.29.15l1.06-.8.9.7a.18.18 0 00.28-.14l-.1-2.76 1.33-.1a1.2 1.2 0 011.279 1.2v21.596a1.2 1.2 0 01-1.26 1.2l-16.096-.72a1.2 1.2 0 01-1.15-1.16l-.75-19.797a1.2 1.2 0 011.13-1.27L16.7.222zM13.64 9.3c0 .47 3.16.24 3.59-.08 0-3.2-1.72-4.89-4.859-4.89-3.15 0-4.899 1.72-4.899 4.29 0 4.45 5.999 4.53 5.999 6.959 0 .7-.32 1.1-1.05 1.1-.96 0-1.35-.49-1.3-2.16 0-.36-3.649-.48-3.769 0-.27 4.03 2.23 5.2 5.099 5.2 2.79 0 4.969-1.49 4.969-4.18 0-4.77-6.099-4.64-6.099-6.999 0-.97.72-1.1 1.13-1.1.45 0 1.25.07 1.19 1.87z"
                />
              </svg>
            </a>
          </div>
          <div class="flex items-center px-4">
            <button
              id="hamburger"
              name="hamburger"
              type="button"
              class="block absolute right-4 lg:hidden"
            >
              <span
                class="hamburger-line transition-all duration-300 ease-in-out origin-top-left"
              ></span>
              <span
                class="hamburger-line transition-all duration-300 ease-in-out"
              ></span>
              <span
                class="hamburger-line transition-all duration-300 ease-in-out origin-bottom-left"
              ></span>
            </button>

            <nav
              id="nav-menu"
              class="hidden absolute py-5 bg-white shadow-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none"
            >
              <ul class="block lg:flex">
                <li class="group">
                  <a
                    href="#home"
                    class="text-base text-gelap py-2 mx-8 group-hover:text-primary flex"
                    >Home</a
                  >
                </li>
                <li class="group">
                  <a
                    href="#about"
                    class="text-base text-gelap py-2 mx-8 group-hover:text-primary flex"
                    >About me</a
                  >
                </li>
                <li class="group">
                  <a
                    href="#portfolio"
                    class="text-base text-gelap py-2 mx-8 group-hover:text-primary flex"
                    >Portfolio</a
                  >
                </li>
                <li class="group">
                  <a
                    href="#skill"
                    class="text-base text-gelap py-2 mx-8 group-hover:text-primary flex"
                    >Skill</a
                  >
                </li>
                <li class="group">
                  <a
                    href="#expert"
                    class="text-base text-gelap py-2 mx-8 group-hover:text-primary flex"
                    >Experience</a
                  >
                </li>
                <li class="group">
                  <a
                    href="#contact"
                    class="text-base text-gelap py-2 mx-8 group-hover:text-primary flex"
                    >Contact</a
                  >
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->

    <!-- hero section -->
    <section id="home" class="mt-36">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full self-center px-4 lg:w-1/2">
            <h1 class="text-base font-semibold text-primary">
              Hello World!
              <span class="block text-2xl font-black text-gelap lg:text-4xl"
                >Subhan Mohammad</span
              >
            </h1>
            <h2 class="font-bold text-lg text-secondary mb-5 lg:text-xl">
              Programmer |
              <span class="text-slate-400">Content Creator</span>
            </h2>
            <p class="font-normal text-secondary mb-10 lg:text-lg">
              Nikmati saja perjalanannya, 'puncak' adalah bonus.
              <span class="font-bold text-xl">iya Bonus!</span>
            </p>
            <a
              href="#contact"
              class="py-2 px-4 text-white bg-primary rounded-full hover:bg-red-400 transition-all duration-300 ease-in-out"
              >Hubungi saya</a
            >
          </div>
          <div class="w-full self-end px-5 lg:w-1/2">
            <div class="mt-10 relative">
              <img
                src="img/aing2.png"
                alt="heroimg"
                class="max-w-full mx-auto rounded-full"
              />
              <span class="absolute -bottom-28 -z-10 left-1/2 -translate-x-1/2">
                <svg
                  width="450"
                  height="450"
                  viewBox="0 0 200 200"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill="#2563eb"
                    d="M42.5,-69.1C52.9,-59.4,57.8,-44,60.3,-30.1C62.8,-16.1,62.8,-3.5,62.5,10C62.1,23.5,61.4,38.1,53.3,44.8C45.3,51.6,29.9,50.6,17.2,50.7C4.5,50.7,-5.5,51.9,-16.3,50.8C-27.1,49.8,-38.6,46.6,-50.4,39.9C-62.3,33.1,-74.4,22.8,-77.7,10.2C-81,-2.4,-75.6,-17.2,-69.8,-32.8C-64.1,-48.4,-58.1,-64.8,-46.4,-73.9C-34.8,-83.1,-17.4,-85,-0.7,-84C16,-82.9,32,-78.8,42.5,-69.1Z"
                    transform="translate(100 100)"
                  />
                </svg>
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end hero -->

    <!-- start about -->
    <section id="about" class="pt-20 pb-20">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full px-4 mb-10 lg:w-1/2">
            <h4
              class="self-center uppercase text-primary font-bold text-xl lg:text-3xl"
            >
              Tentang Saya
            </h4>
            <h2 class="text-gelap font-semibold mt-5 text-xl lg:text-2xl">
              Yuk Kenalan, Tak kenal maka tak Sayang!,
            </h2>
            <p class="mt-4 text-secondary font-normal md:text-base lg:text-lg">
              Pria pemalas pecinta kopi hitam. Suka nonton bola tapi ga bisa
              main bola 😁. Tim bola favorit yang sering di tonton Persib, As
              Roma dan Chelsea. Sesekali suka jalan-jalan sembari motret & bikin
              video ala-ala, yang mau liat keseruan videonya bisa intip Youtube
              channel saya
              <a
                href="https://www.youtube.com/c/SubhanMohammad"
                target="_blank"
                class="font-bold text-lg hover:text-primary transition-all duration-500 ease-in-out"
                >disini</a
              >
              . Dan sekarang saya lagi belajar bikin web, doain ya biar cepet
              jago kaya <span class="font-bold">Kopi Jago!.</span>
            </p>
          </div>
          <div class="w-full px-4 lg:w-1/2">
            <h2 class="text-gelap font-semibold text-lg lg:pt-10">
              Mari berteman di dunia maya!
            </h2>
            <div class="w-full flex">
              <div class="basis-1/4 mt-4 flex  text-secondary font-normal mb-5  md:text-base lg:text-lg">
                  <img src="<?= $youtubeProfilPic; ?>" alt="" class="rounded-full border-4 border-l-slate-100 m-auto">  
              </div>
              <div class="basis-3/4 mt-4 p-4  text-secondary font-normal mb-5 md:text-base lg:text-lg">
                    <h1><?= $youtubeProfilName; ?></h1>
                    <p>Subscriber : <?= $youtubeProfilSubs; ?></p>
                    <div class="g-ytsubscribe" data-channelid="UCdvViw-lmPEWHNPWtJUI8pQ" data-layout="default" data-count="default"></div>
                  
              </div>
               
            
            </div>
            
           
            <div class="flex items-center">
              <!-- yutube -->
              <a
                href="https://www.youtube.com/c/SubhanMohammad"
                target="_blank "
                class="w-9 h-9 mr-3 flex justify-center items-center rounded-full border transition-all duration-500 ease-in-out border-slate-300 hover:border-primary hover:bg-primary hover:text-white"
              >
                <svg
                  role="img"
                  width="20"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                  class="fill-current"
                >
                  <title>YouTube</title>
                  <path
                    d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"
                  /></svg
              ></a>

              <!-- facebook -->
              <a
                href="https://web.facebook.com/oeang/"
                target="_blank "
                class="w-9 h-9 mr-3 flex justify-center items-center rounded-full border transition-all duration-500 ease-in-out border-slate-300 hover:border-primary hover:bg-primary hover:text-white"
              >
                <svg
                  role="img"
                  width="20"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                  class="fill-current"
                >
                  <title>Facebook</title>
                  <path
                    d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 8.68 0 0 1 1.141.195v3.325a8.623 8.623 0 0 0-.653-.036 26.805 26.805 0 0 0-.733-.009c-.707 0-1.259.096-1.675.309a1.686 1.686 0 0 0-.679.622c-.258.42-.374.995-.374 1.752v1.297h3.919l-.386 2.103-.287 1.564h-3.246v8.245C19.396 23.238 24 18.179 24 12.044c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.628 3.874 10.35 9.101 11.647Z"
                  />
                </svg>
              </a>

              <!-- instagram -->
              <a
                href="https://www.instagram.com/oeangg/"
                target="_blank "
                class="w-9 h-9 mr-3 flex justify-center items-center rounded-full border transition-all duration-500 ease-in-out border-slate-300 hover:border-primary hover:bg-primary hover:text-white"
              >
                <svg
                  role="img"
                  width="20"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                  class="fill-current"
                >
                  <title>instagram</title>
                  <path
                    d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"
                  />
                </svg>
              </a>

              <!-- tiktok -->
              <a
                href="https://www.tiktok.com/@oeanggggg"
                target="_blank "
                class="w-9 h-9 mr-3 flex justify-center items-center rounded-full border transition-all duration-500 ease-in-out border-slate-300 hover:border-primary hover:bg-primary hover:text-white"
              >
                <svg
                  role="img"
                  width="20"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                  class="fill-current"
                >
                  <title>TikTok</title>
                  <path
                    d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"
                  />
                </svg>
              </a>

              <!-- twitter -->
              <a
                href="https://twitter.com/oeangg"
                target="_blank "
                class="w-9 h-9 mr-3 flex justify-center items-center rounded-full border transition-all duration-500 ease-in-out border-slate-300 hover:border-primary hover:bg-primary hover:text-white"
              >
                <svg
                  role="img"
                  width="20"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                  class="fill-current"
                >
                  <title>Twitter</title>
                  <path
                    d="M21.543 7.104c.015.211.015.423.015.636 0 6.507-4.954 14.01-14.01 14.01v-.003A13.94 13.94 0 0 1 0 19.539a9.88 9.88 0 0 0 7.287-2.041 4.93 4.93 0 0 1-4.6-3.42 4.916 4.916 0 0 0 2.223-.084A4.926 4.926 0 0 1 .96 9.167v-.062a4.887 4.887 0 0 0 2.235.616A4.928 4.928 0 0 1 1.67 3.148 13.98 13.98 0 0 0 11.82 8.292a4.929 4.929 0 0 1 8.39-4.49 9.868 9.868 0 0 0 3.128-1.196 4.941 4.941 0 0 1-2.165 2.724A9.828 9.828 0 0 0 24 4.555a10.019 10.019 0 0 1-2.457 2.549z"
                  />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end about -->

    <!-- Portfolio -->
    <section id="portfolio" class="pt-36 pb-16 bg-slate-100">
      <div class="container">
        <div class="w-full px-4">
          <div class="max-w-xl mx-auto text-center mb-16">
            <h4
              class="font-semibold text-lg text-primary xl:font-bold xl:text-2xl"
            >
              Portfolio
            </h4>
            <h2 class="font-bold text-gelap text-2xl mb-4 xl:text-4xl">
              Project terbaru
            </h2>
            <p class="font-medium text-md text-secondary">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur
              ducimus, officiis quo dolorum debitis repellendus, ullam voluptate
              quod consectetur laboriosam, molestias eum tempore? Magni,
              aspernatur.
            </p>
          </div>
          <div
            class="flex w-full px-4 flex-wrap justify-center xl:w-10/12 xl:mx-auto"
          >
            <div class="mb-8 p-4 md:w-1/2">
              <div class="rounded-md shadow-md overflow-hidden">
                <img src="img/port/1.png" alt="portfolio" class="w-full" />
                <h3 class="font-semibold text-xl text-gelap mt-5 mb-3 px-4">
                  Portfolio Web
                </h3>
                <p class="font-medium text-md text-secondary px-4 pb-4">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Necessitatibus aliquam libero officia consequatur repellat
                  eveniet?
                </p>
              </div>
            </div>

            <div class="mb-8 p-4 md:w-1/2">
              <div class="rounded-md shadow-md overflow-hidden">
                <img src="img/port/2.png" alt="portaldesa" class="w-full" />
                <h3 class="font-semibold text-xl text-gelap mt-5 mb-3 px-4">
                  Portal Desa
                </h3>
                <p class="font-medium text-md text-secondary px-4 pb-4">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                  Ratione aut illum vero asperiores minus officiis, distinctio
                  eveniet facere?
                </p>
              </div>
            </div>

            <div class="mb-8 p-4 md:w-1/2">
              <div class="rounded-md shadow-md overflow-hidden">
                <img src="img/port/3.png" alt="undanganonline" class="w-full" />
                <h3 class="font-semibold text-xl text-gelap mt-5 mb-3 px-4">
                  Undangan pernikahan online
                </h3>
                <p class="font-medium text-md text-secondary px-4 pb-4">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Accusamus placeat possimus est, at dolorem labore illo iusto!
                </p>
              </div>
            </div>

            <div class="mb-8 p-4 md:w-1/2">
              <div class="rounded-md shadow-md overflow-hidden">
                <img src="img/port/4.png" alt="landingpage" class="w-full" />
                <h3 class="font-semibold text-xl text-gelap mt-5 mb-3 px-4">
                  Landing page
                </h3>
                <p class="font-medium text-md text-secondary px-4 pb-4">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Necessitatibus aliquam libero officia consequatur repellat
                  eveniet?
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end Portfolio -->

    <!-- Skill -->
    <section id="skill" class="pt-36 pb-16 bg-slate-600">
      <div class="container">
        <div class="w-full px-4">
          <div class="max-w-xl mx-auto text-center mb-4">
            <h4 class="font-semibold text-lg text-primary xl:text-2xl">
              Skills
            </h4>
            <h2 class="font-bold text-white text-2xl mb-4 xl:text-4xl">
              Keahlian saya
            </h2>
            <p class="font-medium text-md text-slate-400">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur
              ducimus, officiis quo dolorum debitis repellendus, ullam voluptate
              quod consectetur laboriosam, molestias eum tempore? Magni,
              aspernatur.
            </p>
          </div>
        </div>

        <div class="w-full px-4">
          <div class="flex flex-wrap items-center justify-center">
            <a
              href="#"
              class="mx-1 text-slate-400 hover:text-white transition duration-500 xl:mx-2"
            >
              <svg
                width="30"
                role="img"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
                class="fill-current"
              >
                <title>Delphi</title>
                <path
                  d="M23.922 10.66a11.925 11.925 0 0 0-1.93-5.299 12.002 12.002 0 0 0-1.362-1.692A11.993 11.993 0 0 0 15.271.455a11.916 11.916 0 0 0-2.88-.444c-.237-.005-.474-.015-.71-.004-.345.016-.69.036-1.033.077-.385.046-.77.108-1.15.182a11.947 11.947 0 0 0-4.906 2.297A12.012 12.012 0 0 0 .394 8.94a11.886 11.886 0 0 0-.393 2.883c-.009.51.016 1.019.073 1.526a11.954 11.954 0 0 0 3.103 6.79 11.982 11.982 0 0 0 8.442 3.858c.013 0 .818-.002.868-.004.518-.02 1.032-.076 1.543-.162a11.947 11.947 0 0 0 6.173-3.072 11.975 11.975 0 0 0 3.667-7.028c.053-.406.087-.815.113-1.224.038-.617.006-1.234-.062-1.848zM4.5 11.777c-.052.3-.094.601-.097.906-.003.253-.005.506.004.76.005.148.031.297.051.445.033.252-.067.455-.297.56a.473.473 0 0 1-.227.035c-.217-.019-.433-.05-.65-.077-.073-.01-.147-.017-.22-.03-.017-.003-.04-.025-.042-.041-.041-.249-.086-.497-.115-.747-.024-.206-.03-.413-.043-.62-.006-.118-.014-.236-.013-.355.002-.197.005-.394.017-.59.014-.218.034-.436.06-.653.02-.177.045-.355.083-.529.062-.29.134-.579.207-.867.07-.275.162-.542.273-.804.08-.187.15-.377.235-.56.09-.195.188-.387.295-.573.12-.21.251-.414.382-.619.083-.13.17-.259.26-.384.074-.102.155-.197.234-.295.072-.088.142-.178.217-.263a7.6 7.6 0 0 1 .25-.274c.123-.128.247-.254.373-.378.087-.085.176-.17.27-.248.173-.145.346-.293.528-.427.227-.168.46-.329.697-.483.186-.12.375-.235.572-.336.253-.129.513-.244.773-.359.159-.07.321-.133.486-.19a11.02 11.02 0 0 1 1.312-.359c.279-.05.56-.086.841-.12.194-.023.39-.042.586-.044.312-.003.625-.004.936.019.342.024.683.07 1.023.118.182.026.362.071.54.117.288.075.578.146.86.24.246.08.487.182.724.288.26.116.513.245.767.374.107.054.21.118.311.183.195.124.392.246.58.38.189.135.368.282.55.424.016.012.03.026.05.045-.165.109-.325.211-.481.318-.168.116-.334.235-.5.353-.105.073-.211.145-.315.219-.13.092-.258.187-.387.28l-.45.321c-.11.08-.218.162-.327.243-.129.096-.26.19-.387.288-.217.167-.443.138-.643.003a6.527 6.527 0 0 0-1.757-.83 5.884 5.884 0 0 0-1.33-.246c-.19-.013-.381-.018-.572-.025a4.367 4.367 0 0 0-.792.047 23.89 23.89 0 0 0-.62.105 5.084 5.084 0 0 0-.795.225 6.08 6.08 0 0 0-.527.218 7.22 7.22 0 0 0-.574.294c-.178.103-.347.222-.516.339-.108.073-.214.15-.313.233-.149.124-.292.255-.435.385-.26.235-.486.5-.697.778-.132.174-.25.36-.368.545a5.76 5.76 0 0 0-.489.967 6.298 6.298 0 0 0-.368 1.271zm13.278 5.496c-.175-.122-.353-.242-.527-.366a.5.5 0 0 1-.154-.237l-.222-.55-.21-.532c-.07-.17-.141-.34-.21-.512-.071-.176-.137-.355-.213-.53-.088-.204-.14-.427-.28-.606a4.738 4.738 0 0 0-.288-.337 2.613 2.613 0 0 0-.498-.413c-.14-.09-.298-.12-.457-.148-.449-.081-.896-.166-1.345-.248l-1.368-.246c-.39-.07-.78-.137-1.166-.218-.258-.054-.494.162-.518.407-.023.246.167.456.375.508.56.141 1.118.293 1.677.442.662.175 1.324.347 1.984.527.22.06.416.173.597.313.22.17.4.375.53.62.084.163.151.336.22.506.071.177.14.355.202.534.093.268.182.537.27.806.055.164.11.328.16.492.075.237.147.475.22.712.05.163.099.327.147.49l.184.638c.048.164.098.327.144.492.07.242.14.485.204.729.033.126-.065.268-.2.287-.273.038-.547.07-.821.104-.182.023-.364.043-.546.063l-.66.07c-.28.029-.558.06-.837.09-.118.012-.236.03-.355.028a1.03 1.03 0 0 1-.688-.261c-.144-.126-.223-.292-.316-.451-.078-.135-.152-.272-.235-.403a12.841 12.841 0 0 0-.398-.602c-.134-.187-.28-.365-.423-.544a6.035 6.035 0 0 0-.229-.265 6.95 6.95 0 0 0-.757-.737 8.876 8.876 0 0 0-.641-.488 5.608 5.608 0 0 0-1.755-.803c-.436-.112-.878-.195-1.333-.187a3.542 3.542 0 0 0-.678.07c-.16.034-.309.022-.441-.089-.073-.06-.104-.144-.146-.223-.017-.032-.027-.068-.044-.109.072-.02.143-.042.216-.058a1.93 1.93 0 0 1 .227-.042c.195-.023.39-.053.584-.058.281-.007.564-.01.844.012a7.816 7.816 0 0 1 1.592.321c.24.076.473.175.704.274.387.166.727.407 1.051.673.214.175.419.36.603.567.225.252.449.506.66.77.15.186.282.389.419.587.228.332.43.681.62 1.037.048.089.093.18.133.272.064.153.199.2.341.183l.572-.07.7-.08c.27-.028.54-.054.81-.084.208-.024.416-.05.624-.08.117-.018.202-.132.208-.254.006-.108-.045-.2-.077-.296-.089-.272-.184-.542-.276-.813-.09-.263-.177-.525-.266-.787-.092-.276-.183-.551-.277-.826-.064-.188-.131-.375-.196-.563-.054-.156-.104-.312-.16-.467-.067-.186-.137-.37-.208-.555-.037-.096-.074-.192-.12-.284a1.22 1.22 0 0 0-.482-.514c-.2-.12-.424-.159-.641-.22-.64-.18-1.28-.356-1.92-.533l-.825-.23c-.218-.06-.435-.129-.657-.177-.259-.057-.433-.212-.57-.427a1.32 1.32 0 0 1-.202-.583.867.867 0 0 1 .12-.546.919.919 0 0 1 .44-.382.7.7 0 0 1 .411-.041c.322.06.645.112.968.168.227.04.454.083.681.121.268.045.536.086.803.13.193.032.386.067.579.1.224.037.448.072.671.11.195.034.389.073.584.103.126.019.249.042.362.102.054.029.11.06.156.1.163.146.326.295.484.447.141.136.279.276.413.42a.945.945 0 0 1 .217.392c.033.115.077.227.117.34l.167.471.212.595c.062.178.122.356.185.534l.176.497.188.544.093.268-.013.01zm.708.363a3.104 3.104 0 0 1-.37-.169c-.03-.016-.039-.076-.054-.117-.07-.197-.138-.395-.206-.592l-.23-.664-.23-.653c-.094-.267-.185-.534-.279-.8a78.3 78.3 0 0 0-.2-.565c-.037-.101-.073-.203-.113-.304-.063-.161-.179-.285-.296-.407-.1-.104-.199-.209-.304-.306a18.166 18.166 0 0 0-.605-.537c-.149-.125-.334-.167-.522-.197a66.347 66.347 0 0 1-.603-.098c-.247-.04-.493-.083-.739-.125l-.665-.113-1.026-.172c-.279-.048-.557-.098-.836-.145-.197-.033-.393-.075-.591-.089-.11-.007-.226.026-.335.056a.939.939 0 0 0-.395.235c-.118.113-.21.247-.272.402-.12.306-.101.606.007.909.071.197.173.376.317.528.142.15.307.258.513.306.248.058.493.129.74.196.44.12.881.24 1.322.362l.842.233.841.235c.266.074.48.224.621.46.07.118.117.252.168.382.062.156.119.315.175.474.079.224.156.45.233.675l.194.567.163.489.167.477.19.562.278.816c.01.03.021.058.028.088.01.042-.015.066-.052.07-.167.02-.335.035-.503.054-.084.01-.169.023-.253.032-.177.02-.355.037-.532.058-.189.021-.377.046-.566.068l-.726.082a.5.5 0 0 1-.122.005.085.085 0 0 1-.057-.037c-.068-.127-.129-.257-.198-.382a12.05 12.05 0 0 0-.733-1.196 10.987 10.987 0 0 0-.99-1.204 7.197 7.197 0 0 0-.595-.552 5.461 5.461 0 0 0-.628-.452 3.313 3.313 0 0 0-.704-.345c-.288-.093-.568-.21-.859-.29-.288-.077-.586-.116-.879-.177-.277-.057-.558-.056-.838-.072-.125-.007-.251.003-.377.01-.143.008-.286.017-.428.031a2.592 2.592 0 0 0-.247.04c-.16.03-.318.062-.491.096-.051-.16-.107-.319-.154-.481a5.498 5.498 0 0 1-.2-1.027 5.23 5.23 0 0 1-.021-1.028c.033-.479.113-.951.258-1.41.095-.3.2-.599.344-.88.096-.187.191-.374.298-.554.08-.137.178-.265.271-.394.073-.1.146-.201.225-.297.07-.084.146-.165.223-.243.128-.13.257-.26.392-.383.09-.084.19-.159.288-.234.105-.08.21-.16.32-.232.148-.096.299-.187.45-.275.135-.078.27-.157.411-.22.211-.093.427-.176.643-.257a2.85 2.85 0 0 1 .383-.12c.247-.054.495-.104.744-.14.21-.03.423-.052.634-.052.27 0 .542.015.81.042.466.046.917.156 1.354.323a6.039 6.039 0 0 1 1.819 1.068c.207.175.409.356.583.564.196.231.388.466.57.708.056.074.081.174.112.266.072.213.141.428.208.643.086.274.167.55.252.824.064.208.133.414.198.622.072.231.14.464.211.696l.15.477.165.534c.05.163.103.325.153.489l.117.39c.037.118.077.236.114.355l.291.928.275.865c.01.035.024.07.035.105.02.065-.015.113-.076.09zm.157-12.752a.484.484 0 0 1-.272.408.062.062 0 0 1-.054-.005c-.077-.06-.148-.127-.227-.184-.237-.173-.471-.35-.716-.512a8.86 8.86 0 0 0-.706-.428c-.246-.132-.502-.244-.756-.358a5.709 5.709 0 0 0-.501-.201c-.28-.095-.563-.186-.848-.267a7.965 7.965 0 0 0-1.091-.215c-.3-.042-.6-.076-.903-.081-.176-.003-.352-.015-.528-.009-.28.01-.56.024-.84.047-.209.017-.416.05-.623.08-.289.04-.573.101-.852.183-.236.07-.471.14-.705.217a4.57 4.57 0 0 0-.422.16 10.614 10.614 0 0 0-1.438.718c-.18.107-.352.232-.525.354a7.506 7.506 0 0 0-.394.296 12.185 12.185 0 0 0-.962.865c-.114.115-.219.24-.325.363-.11.128-.223.254-.327.387a8.572 8.572 0 0 0-.653.956c-.098.164-.187.334-.276.503a8.949 8.949 0 0 0-.253.51c-.08.177-.147.358-.216.54a7.726 7.726 0 0 0-.311.986c-.074.335-.149.67-.2 1.01a10.101 10.101 0 0 0-.047 2.328c.028.268.073.534.11.805-.215 0-.4-.063-.512-.256a.766.766 0 0 1-.08-.242 7.924 7.924 0 0 1-.083-.53 12.5 12.5 0 0 1-.07-.702 8.464 8.464 0 0 1-.021-.723 10.525 10.525 0 0 1 .282-2.28c.092-.394.216-.778.363-1.153.078-.198.151-.398.242-.59.13-.273.268-.544.414-.81.105-.192.222-.38.346-.561.145-.214.3-.42.455-.627.102-.135.207-.268.317-.396.105-.121.217-.237.328-.353a9.419 9.419 0 0 1 .578-.56c.18-.155.359-.31.545-.456.145-.114.299-.216.45-.32.13-.09.258-.18.392-.26a13.292 13.292 0 0 1 .975-.531c.146-.07.297-.133.447-.196.116-.05.231-.101.35-.142.248-.084.497-.163.747-.24.137-.043.275-.084.416-.112.299-.062.598-.123.9-.17a7.19 7.19 0 0 1 .743-.078c.325-.016.65-.019.976-.015.216.003.433.022.648.045a9.735 9.735 0 0 1 2.377.532c.432.16.86.332 1.264.56.28.157.557.318.829.49.206.13.405.276.6.424.177.134.35.274.514.423a.43.43 0 0 1 .13.373z"
                />
              </svg>
            </a>

            <a
              href="#"
              class="mx-1 text-slate-400 hover:text-white transition duration-500 xl:mx-2"
            >
              <svg
                width="30"
                role="img"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
                class="fill-current"
              >
                <title>CSS3</title>
                <path
                  d="M1.5 0h21l-1.91 21.563L11.977 24l-8.565-2.438L1.5 0zm17.09 4.413L5.41 4.41l.213 2.622 10.125.002-.255 2.716h-6.64l.24 2.573h6.182l-.366 3.523-2.91.804-2.956-.81-.188-2.11h-2.61l.29 3.855L12 19.288l5.373-1.53L18.59 4.414z"
                />
              </svg>
            </a>

            <a
              href="#"
              class="mx-1 text-slate-400 hover:text-white transition duration-500 xl:mx-2"
            >
              <svg
                width="30"
                role="img"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
                class="fill-current"
              >
                <title>JavaScript</title>
                <path
                  d="M0 0h24v24H0V0zm22.034 18.276c-.175-1.095-.888-2.015-3.003-2.873-.736-.345-1.554-.585-1.797-1.14-.091-.33-.105-.51-.046-.705.15-.646.915-.84 1.515-.66.39.12.75.42.976.9 1.034-.676 1.034-.676 1.755-1.125-.27-.42-.404-.601-.586-.78-.63-.705-1.469-1.065-2.834-1.034l-.705.089c-.676.165-1.32.525-1.71 1.005-1.14 1.291-.811 3.541.569 4.471 1.365 1.02 3.361 1.244 3.616 2.205.24 1.17-.87 1.545-1.966 1.41-.811-.18-1.26-.586-1.755-1.336l-1.83 1.051c.21.48.45.689.81 1.109 1.74 1.756 6.09 1.666 6.871-1.004.029-.09.24-.705.074-1.65l.046.067zm-8.983-7.245h-2.248c0 1.938-.009 3.864-.009 5.805 0 1.232.063 2.363-.138 2.711-.33.689-1.18.601-1.566.48-.396-.196-.597-.466-.83-.855-.063-.105-.11-.196-.127-.196l-1.825 1.125c.305.63.75 1.172 1.324 1.517.855.51 2.004.675 3.207.405.783-.226 1.458-.691 1.811-1.411.51-.93.402-2.07.397-3.346.012-2.054 0-4.109 0-6.179l.004-.056z"
                />
              </svg>
            </a>

            <a
              href="#"
              class="mx-1 text-slate-400 hover:text-white transition duration-500 xl:mx-2"
            >
              <svg
                width="30"
                role="img"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
                class="fill-current"
              >
                <title>Tailwind CSS</title>
                <path
                  d="M12.001,4.8c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 C13.666,10.618,15.027,12,18.001,12c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C16.337,6.182,14.976,4.8,12.001,4.8z M6.001,12c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 c1.177,1.194,2.538,2.576,5.512,2.576c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C10.337,13.382,8.976,12,6.001,12z"
                />
              </svg>
            </a>

            <a
              href="#"
              class="mx-1 text-slate-400 hover:text-white transition duration-500 xl:mx-2"
            >
              <svg
                width="30"
                role="img"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
                class="fill-current"
              >
                <title>Bootstrap</title>
                <path
                  d="M11.77 11.24H9.956V8.202h2.152c1.17 0 1.834.522 1.834 1.466 0 1.008-.773 1.572-2.174 1.572zm.324 1.206H9.957v3.348h2.231c1.459 0 2.232-.585 2.232-1.685s-.795-1.663-2.326-1.663zM24 11.39v1.218c-1.128.108-1.817.944-2.226 2.268-.407 1.319-.463 2.937-.42 4.186.045 1.3-.968 2.5-2.337 2.5H4.985c-1.37 0-2.383-1.2-2.337-2.5.043-1.249-.013-2.867-.42-4.186-.41-1.324-1.1-2.16-2.228-2.268V11.39c1.128-.108 1.819-.944 2.227-2.268.408-1.319.464-2.937.42-4.186-.045-1.3.968-2.5 2.338-2.5h14.032c1.37 0 2.382 1.2 2.337 2.5-.043 1.249.013 2.867.42 4.186.409 1.324 1.098 2.16 2.226 2.268zm-7.927 2.817c0-1.354-.953-2.333-2.368-2.488v-.057c1.04-.169 1.856-1.135 1.856-2.213 0-1.537-1.213-2.538-3.062-2.538h-4.16v10.172h4.181c2.218 0 3.553-1.086 3.553-2.876z"
                />
              </svg>
            </a>

            <a
              href="#"
              class="mx-1 text-slate-400 hover:text-white transition duration-500 xl:mx-2"
            >
              <svg
                width="30"
                role="img"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
                class="fill-current"
              >
                <title>Adobe Premiere Pro</title>
                <path
                  d="M10.15 8.42a2.93 2.93 0 00-1.18-.2 13.9 13.9 0 00-1.09.02v3.36l.39.02h.53c.39 0 .78-.06 1.15-.18.32-.09.6-.28.82-.53.21-.25.31-.59.31-1.03a1.45 1.45 0 00-.93-1.46zM19.75.3H4.25A4.25 4.25 0 000 4.55v14.9c0 2.35 1.9 4.25 4.25 4.25h15.5c2.35 0 4.25-1.9 4.25-4.25V4.55C24 2.2 22.1.3 19.75.3zm-7.09 11.65c-.4.56-.96.98-1.61 1.22-.68.25-1.43.34-2.25.34l-.5-.01-.43-.01v3.21a.12.12 0 01-.11.14H5.82c-.08 0-.12-.04-.12-.13V6.42c0-.07.03-.11.1-.11l.56-.01.76-.02.87-.02.91-.01c.82 0 1.5.1 2.06.31.5.17.96.45 1.34.82.32.32.57.71.73 1.14.15.42.23.85.23 1.3 0 .86-.2 1.57-.6 2.13zm6.82-3.15v1.95c0 .08-.05.11-.16.11a4.35 4.35 0 00-1.92.37c-.19.09-.37.21-.51.37v5.1c0 .1-.04.14-.13.14h-1.97a.14.14 0 01-.16-.12v-5.58l-.01-.75-.02-.78c0-.23-.02-.45-.04-.68a.1.1 0 01.07-.11h1.78c.1 0 .18.07.2.16a3.03 3.03 0 01.13.92c.3-.35.67-.64 1.08-.86a3.1 3.1 0 011.52-.39c.07-.01.13.04.14.11v.04z"
                />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- end Skill -->

    <!-- experience -->

    <section id="expert" class="pt-36 pb-16">
      <div class="container">
        <div class="w-full px-4">
          <div class="max-w-xl mx-auto text-center mb-16">
            <h4 class="font-semibold text-lg text-primary xl:text-xl">
              Experience
            </h4>
            <h2 class="font-bold text-gelap text-2xl mb-4 xl:text-4xl">
              Pengalaman kerja
            </h2>
            <p class="font-medium text-md text-slate-400">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque
              ratione necessitatibus repellendus. Accusantium.
            </p>
          </div>
          <div
            class="flex w-full px-4 flex-wrap justify-center xl:w-10/12 xl:mx-auto"
          >
            <div class="mb-8 p-4 md:w-1/2 lg:w-1/3">
              <div
                class="h-[360px] rounded-md shadow-md text-center text-primary bg-slate-200 pt-10"
              >
                <span class="block">
                  <svg
                    width="60"
                    height="60"
                    role="img"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    class="m-auto fill-current"
                  >
                    <title>Programmer</title>
                    <path
                      d="M.95 14.184L12 20.403l9.919-5.55v2.21L12 22.662l-10.484-5.96-.565.308v.77L12 24l11.05-6.218v-4.317l-.515-.309L12 19.118l-9.867-5.653v-2.21L12 16.805l11.05-6.218V6.32l-.515-.308L12 11.974 2.647 6.681 12 1.388l7.76 4.368.668-.411v-.566L12 0 .95 6.27v.72L12 13.207l9.919-5.55v2.26L12 15.52 1.516 9.56l-.565.308Z"
                    />
                  </svg>
                </span>
                <h3 class="font-bold text-2xl text-gelap mt-5 mb-1 px-4">
                  Programmer
                </h3>
                <h2 class="font-bold text-xl text-slate-600">
                  PT Billnet Mitracom
                </h2>
                <h5 class="font-light text-sm text-slate-400">
                  14 tahun 10 bulan
                </h5>
                <p class="font-normal text-md mt-3 text-slate-400 px-4 pb-4">
                  Bertanggung jawab merancang kebutuhan aplikasi untuk proses
                  pencetakan data banking statement di internal & client
                  (reprint, reporting & tracking)
                </p>
              </div>
            </div>

            <div class="mb-8 p-4 md:w-1/2 lg:w-1/3">
              <div
                class="h-[360px] rounded-md shadow-md text-center text-primary bg-slate-200 pt-10"
              >
                <span class="block">
                  <svg
                    width="60"
                    height="60"
                    role="img"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    class="m-auto fill-current"
                  >
                    <title>Human Resource</title>
                    <path
                      d="M24 8.609c-.848.536-1.436.83-2.146 1.245-4.152 2.509-8.15 5.295-11.247 8.981l-1.488 1.817-4.568-7.268c1.021.814 3.564 3.098 4.603 3.599l3.356-2.526c2.336-1.644 8.946-5.226 11.49-5.848ZM8.046 15.201c.346.277.692.537.969.744.761-3.668.121-7.613-1.886-11.039 3.374-.052 6.731-.087 10.105-.139a14.794 14.794 0 0 1 1.298 5.295c.294-.156.588-.294.883-.433-.104-1.868-.641-3.91-1.662-6.263-4.602-.018-9.188-.018-13.79-.018 2.993 3.547 4.36 7.839 4.083 11.853Zm-.623-.484c.087.086.191.155.277.225-.138-3.409-1.419-6.887-3.824-9.881H1.73c3.098 2.855 4.984 6.299 5.693 9.656Zm-.744-.658c.104.087.208.173.329.277-.9-2.526-2.492-5.018-4.741-7.198H0c2.89 2.076 5.122 4.481 6.679 6.921Z"
                    />
                  </svg>
                </span>
                <h3 class="font-bold text-2xl text-gelap mt-5 mb-1 px-4">
                  Human Resource
                </h3>
                <h2 class="font-bold text-xl text-slate-600">
                  PT Makarizo Indonesia
                </h2>
                <h5 class="font-light text-sm text-slate-400">
                  1 tahun 3 bulan
                </h5>
                <p class="font-normal text-md mt-3 text-slate-400 px-4 pb-4">
                  Membuat & menghitung KPI, Membuat SOP (Standard Operational
                  Procedure), Maintenance database HEROES (Human Resource
                  System)
                </p>
              </div>
            </div>

            <div class="mb-8 p-4 md:w-1/2 lg:w-1/3">
              <div
                class="h-[360px] rounded-md shadow-md text-center text-primary bg-slate-200 pt-10"
              >
                <span class="block">
                  <svg
                    width="60"
                    height="60"
                    role="img"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    class="m-auto fill-current"
                  >
                    <title>Lab</title>
                    <path
                      d="M18.264 6.24c-2.52 0-5.376 3.024-6.264 3.984-.72-.792-3.696-3.984-6.264-3.984C2.568 6.24 0 8.832 0 12c0 3.168 2.568 5.76 5.736 5.76 2.52 0 5.376-3.024 6.264-3.984.72.792 3.696 3.984 6.264 3.984C21.432 17.76 24 15.168 24 12c0-3.168-2.568-5.76-5.736-5.76ZM5.736 15.384A3.38 3.38 0 0 1 2.352 12a3.395 3.395 0 0 1 3.384-3.384c1.176 0 3.24 1.8 4.68 3.384-.408.456-3.144 3.384-4.68 3.384zm12.528 0c-1.176 0-3.24-1.8-4.68-3.384.408-.456 3.168-3.384 4.68-3.384A3.38 3.38 0 0 1 21.648 12c-.024 1.872-1.536 3.384-3.384 3.384z"
                    />
                  </svg>
                </span>
                <h3 class="font-bold text-2xl text-gelap mt-5 mb-1 px-4">
                  Computer Lab Assistant
                </h3>
                <h2 class="font-bold text-xl text-slate-600">
                  Bina Sarana Informatika
                </h2>
                <h5 class="font-light text-sm text-slate-400">
                  0 tahun 5 bulan
                </h5>
                <p class="font-normal text-md mt-3 text-slate-400 px-4 pb-4">
                  Mendampingi Dosen utama mengajar Ms Office, visual Foxpro,
                  PHP, Visual Basic
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end experience -->

    <!-- kontak -->
    <section id="contact" class="pt-36 pb-16 bg-slate-100">
      <div class="container">
        <div class="max-w-xl mx-auto text-center mb-8">
          <h4 class="font-semibold text-lg text-primary xl:text-xl">Contact</h4>
          <h2 class="font-bold text-gelap text-3xl mb-4 xl:text-4xl">
            Hubungi Saya :
          </h2>
          <p class="font-medium text-md text-slate-400">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque
            ratione necessitatibus repellendus. Accusantium.
          </p>
        </div>

        <form action="">
          <div class="lg:w-2/3 lg:mx-auto">
            <div class="w-full p-4">
              <div>
                <label for="nama" class="text-base font-bold text-primary"
                  >Nama</label
                >
                <input
                  type="text"
                  id="nama"
                  placeholder="Input nama"
                  class="w-full bg-slate-300 p-3 text-base font-medium rounded-lg text-gelap focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary"
                />
              </div>
            </div>

            <div class="w-full p-4">
              <div>
                <label for="email" class="text-base font-bold text-primary"
                  >Email</label
                >
                <input
                  type="email"
                  id="email"
                  placeholder="email@email.com"
                  class="w-full bg-slate-300 p-3 text-base font-medium rounded-lg text-gelap focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary"
                />
              </div>
            </div>
            <div class="w-full p-4">
              <div>
                <label for="pesan" class="text-base font-bold text-primary"
                  >Pesan</label
                >
                <textarea
                  name="pesan"
                  id="pesan"
                  placeholder="isi pesan"
                  class="w-full bg-slate-300 p-3 text-base font-medium rounded-lg text-gelap focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary h-32"
                ></textarea>
              </div>
            </div>

            <div class="w-full px-4">
              <div>
                <button
                  type="Submit"
                  class="text-base font-normal rounded-full bg-primary px-4 py-2 w-full text-white hover:bg-red-400 transition-all duration-300 ease-in-out"
                >
                  Kirim Pesan
                </button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>
    <!-- end kontak -->

    <!-- footer -->

    <footer class="bg-gelap pt-24 pb-12">
      <div class="container">
        <div class="px-10 pb-4 flex flex-wrap text-secondary justify-center">
          <div class="w-full px-4 mb-12 md:w-1/3">
            <h2 class="text-lg font-black text-white mb-3">SUBHAN de STUDIO</h2>
            <h3 class="text-lg font-bold mb-2">Hubungi saya :</h3>
            <h4 class="text-xs font-light">subhan.moh12@gmail.com</h4>
            <p class="text-xs font-light">Cipayung, depok</p>
            <p class="text-xs font-light">Jawa barat</p>
          </div>

          <div class="w-full px-4 mb-12 md:w-1/3">
            <h3 class="text-lg font-bold text-white mb-3">
              Belajar bikin web :
            </h3>
            <ul>
              <li>
                <a
                  href="https://www.youtube.com/@sandhikagalihWPU"
                  target="_blank"
                  class="inline-block text-sm font-medium hover:text-primary"
                  >Web Programming Unpas</a
                >
              </li>
              <li>
                <a
                  href="https://getbootstrap.com/"
                  target="_blank"
                  class="inline-block text-sm font-medium hover:text-primary"
                  >Bootstrap</a
                >
              </li>
              <li>
                <a
                  href="https://tailwindcss.com/"
                  target="_blank"
                  class="inline-block text-sm font-medium hover:text-primary"
                  >Tailwind CSS</a
                >
              </li>
            </ul>
          </div>

          <div class="w-full px-4 mb-12 md:w-1/3">
            <h3 class="text-lg font-bold text-white mb-3">Tautan :</h3>
            <ul>
              <li>
                <a
                  href="#home"
                  target="_blank"
                  class="inline-block text-sm font-medium hover:text-primary"
                  >Home</a
                >
              </li>
              <li>
                <a
                  href="#about"
                  target="_blank"
                  class="inline-block text-sm font-medium hover:text-primary"
                  >About me</a
                >
              </li>
              <li>
                <a
                  href="#portfolio"
                  target="_blank"
                  class="inline-block text-sm font-medium hover:text-primary"
                  >Portfolio</a
                >
              </li>
              <li>
                <a
                  href="#skill"
                  target="_blank"
                  class="inline-block text-sm font-medium hover:text-primary"
                  >Skills</a
                >
              </li>
              <li>
                <a
                  href="#expert"
                  target="_blank"
                  class="inline-block text-sm font-medium hover:text-primary"
                  >Experince</a
                >
              </li>
              <li>
                <a
                  href="#contact"
                  target="_blank"
                  class="inline-block text-sm font-medium hover:text-primary"
                  >Contact Me</a
                >
              </li>
            </ul>
          </div>
        </div>

        <div class="w-full pt-10 border-t border-slate-700">
          <h3 class="text-center text-xs font-light text-slate-500">
            Design ❤️by TailwindCSS
          </h3>
          <p class="text-center pb-4 text-xs font-light text-slate-500">
            Copyright (c) 2003
          </p>
          <div class="flex items-center text-slate-300 justify-center">
            <!-- yutube -->

            <a
              href="https://www.youtube.com/c/SubhanMohammad"
              target="_blank "
              class="w-9 h-9 mr-3 flex justify-center items-center rounded-full border border-slate-300 transition-all duration-500 ease-in-out hover:border-primary hover:bg-primary hover:text-white lg:mr-5"
            >
              <svg
                role="img"
                width="20"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
                class="fill-current"
              >
                <title>YouTube</title>
                <path
                  d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"
                /></svg
            ></a>

            <!-- facebook -->
            <a
              href="https://web.facebook.com/oeang/"
              target="_blank "
              class="w-9 h-9 mr-3 flex justify-center items-center rounded-full border transition-all duration-500 ease-in-out border-slate-300 hover:border-primary hover:bg-primary hover:text-white lg:mr-5"
            >
              <svg
                role="img"
                width="20"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
                class="fill-current"
              >
                <title>Facebook</title>
                <path
                  d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 8.68 0 0 1 1.141.195v3.325a8.623 8.623 0 0 0-.653-.036 26.805 26.805 0 0 0-.733-.009c-.707 0-1.259.096-1.675.309a1.686 1.686 0 0 0-.679.622c-.258.42-.374.995-.374 1.752v1.297h3.919l-.386 2.103-.287 1.564h-3.246v8.245C19.396 23.238 24 18.179 24 12.044c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.628 3.874 10.35 9.101 11.647Z"
                />
              </svg>
            </a>

            <!-- instagram -->
            <a
              href="https://www.instagram.com/oeangg/"
              target="_blank "
              class="w-9 h-9 mr-3 flex justify-center items-center rounded-full border transition-all duration-500 ease-in-out border-slate-300 hover:border-primary hover:bg-primary hover:text-white lg:mr-5"
            >
              <svg
                role="img"
                width="20"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
                class="fill-current"
              >
                <title>instagram</title>
                <path
                  d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"
                />
              </svg>
            </a>

            <!-- tiktok -->
            <a
              href="https://www.tiktok.com/@oeanggggg"
              target="_blank "
              class="w-9 h-9 mr-3 flex justify-center items-center rounded-full border transition-all duration-500 ease-in-out border-slate-300 hover:border-primary hover:bg-primary hover:text-white lg:mr-5"
            >
              <svg
                role="img"
                width="20"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
                class="fill-current"
              >
                <title>TikTok</title>
                <path
                  d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"
                />
              </svg>
            </a>

            <!-- twitter -->
            <a
              href="https://twitter.com/oeangg"
              target="_blank "
              class="w-9 h-9 mr-3 flex justify-center items-center rounded-full border transition-all duration-500 ease-in-out border-slate-300 hover:border-primary hover:bg-primary hover:text-white lg:mr-5"
            >
              <svg
                role="img"
                width="20"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
                class="fill-current"
              >
                <title>Twitter</title>
                <path
                  d="M21.543 7.104c.015.211.015.423.015.636 0 6.507-4.954 14.01-14.01 14.01v-.003A13.94 13.94 0 0 1 0 19.539a9.88 9.88 0 0 0 7.287-2.041 4.93 4.93 0 0 1-4.6-3.42 4.916 4.916 0 0 0 2.223-.084A4.926 4.926 0 0 1 .96 9.167v-.062a4.887 4.887 0 0 0 2.235.616A4.928 4.928 0 0 1 1.67 3.148 13.98 13.98 0 0 0 11.82 8.292a4.929 4.929 0 0 1 8.39-4.49 9.868 9.868 0 0 0 3.128-1.196 4.941 4.941 0 0 1-2.165 2.724A9.828 9.828 0 0 0 24 4.555a10.019 10.019 0 0 1-2.457 2.549z"
                />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </footer>

    <!-- end footer -->

    <script src="dist/script.js"></script>
    <script src="https://apis.google.com/js/platform.js"></script>
  </body>
</html>

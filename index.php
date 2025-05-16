<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trazor</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="dist/output.css" rel="stylesheet">
    <link href="src/animations.css" rel="stylesheet">
    <link rel="icon" href="dist/img/favicon.ico" type="image/x-icon">
</head>
<body>
    <!-- Intro Section Start -->
    <section id="intro-video" class="relative w-full h-full overflow-hidden">
        <video autoplay muted loop playsinline preload="auto"
          class="absolute inset-0 w-full h-full object-cover scale-110 md:scale-125 lg:scale-[1.35] transition-transform duration-700 z-10">
          <source src="dist/vid/companyprofile.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
        <div class="absolute inset-0 bg-black bg-opacity-50 z-20"></div>
        <div class="absolute inset-y-2/3 z-30 flex flex-col justify-center items-start px-10 lg:px-20">
          <h1 class="text-white font-extrabold text-3xl md:text-5xl max-w-xl leading-tight drop-shadow-[4px_2px_5px_rgba(0,0,0,0.7)] mb-4">
            YOUR TRUSTWORTHY <br> SOLUTION PARTNER
          </h1>
          <div class="flex space-x-4">
            <a href="about.php" class="text-white font-medium text-sm md:text-base border-b-2 border-white hover:text-primary transition duration-300">
              Company Overview
            </a>
          </div>
        </div>
    </section>
    <!-- Intro Section End -->
            
    <!-- Hero Section Start -->
    <section id="home" class="pt-36">
        <div class="container">
          <div class="flex flex-wrap">
            <div class="w-full self-center px-4 lg:w-1/2">
              <h1 class="text-3xl font-extrabold text-dark lg:text-4xl leading-tight mb-4">
                Total Solutions for Your<br class="hidden md:block" /> Equipment Needs
              </h1>
              <p class="text-slate-600 text-lg leading-relaxed mb-6">
                Trazor specializes in providing high-quality equipment solutions and services for the mining,
                construction, and industrial sectors. We offer a comprehensive range of products, including spare parts.
              </p>
              <a href="product.php" class="text-red-600 font-bold text-sm hover:underline inline-flex items-center gap-1">
                OUR PRODUCT
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M12 4l1.41 1.41L7.83 11H20v2H7.83l5.58 5.59L12 20l-8-8z"/>
                </svg>
              </a>
            </div>                  
            <div class="w-full self-end px-4 lg:w-1/2">
              <div class="relative mt-10 lg:mt-9 lg:right-0">
                <img src="dist/img/hero.webp" alt="Dapa" class="max-w-lg mx-auto">
              </div>
            </div>
          </div>
          <section id="stats" class="py-16 mb-4">
            <div class="container mx-auto px-4">
              <div class="flex justify-center items-center space-x-24">
                <div class="flex flex-col items-center text-center">
                  <img src="dist/img/icon-building.svg" alt="Employee" class="w-12 h-12 mb-2">
                  <div class="text-4xl font-bold text-primary" id="employeeCount">0</div>
                  <p class="text-gray-600 font-roboto">Employee</p>
                </div>
                <div class="flex flex-col items-center text-center">
                  <img src="dist/img/icon-buldozer.svg" alt="Product Type" class="w-12 h-12 mb-2">
                  <div class="text-4xl font-bold text-primary" id="productCount">0</div>
                  <p class="text-gray-600">Product Type Line</p>
                </div>
                <div class="flex flex-col items-center text-center">
                  <img src="dist/img/icon-helmet.svg" alt="Support Point" class="w-12 h-12 mb-2">
                  <div class="text-4xl font-bold text-primary" id="supportCount">0</div>
                  <p class="text-gray-600">Support Point</p>
                </div>
              </div>
            </div>
          </section>              
        </div>
    </section>
    <!-- Hero Section End -->


    <!-- Card Section Start -->
    <section id="card" class="py-16 pb-28 bg-[#161616]">
        <div class="container mx-auto text-center bg-[#161616] mb-10 ">
            <h2 class="text-white text-l font-semibold uppercase tracking-wide mb-2">Specialization Overview</h2>
            <p class="text-white text-4xl font-bold leading-tight mb-4">Innovative Solutions Across Industries</p>
            <p class="text-gray-400 text-lg max-w-xl mx-auto">Our expertise spans multiple industries, delivering tailored solutions for coal mining, mineral extraction, and construction projects</p>
        </div>
        <div class="container">
            <div class="card-grid flex flex-wrap gap-8 justify-center">
                <div class="card group relative overflow-hidden rounded-xl w-64 h-96 transition-all duration-300">
                    <div class="absolute inset-0 z-0 card-background transition-all duration-500">
                        <img src="dist/img/cardcoal.jpg" alt="Card 1" class="object-cover w-full h-full" />
                    </div>
                    <div class="absolute bottom-0 p-4 text-white z-10 bg-black bg-opacity-50 w-full">
                        <p class="uppercase text-xs opacity-100">Coal Mining</p>
                        <h3 class="font-bold text-sm text-shadow-md">Exploring the Depths of Coal Mining</h3>
                    </div>
                </div>              
                <div class="card group relative overflow-hidden rounded-xl w-64 h-96 transition-all duration-300">
                    <div class="absolute inset-0 z-0 card-background transition-all duration-500">
                        <img src="dist/img/cardmining.jpg" alt="Card 1" class="object-cover w-full h-full" />
                    </div>
                    <div class="absolute bottom-0 p-4 text-white z-10 bg-black bg-opacity-50 w-full">
                        <p class="uppercase text-xs opacity-100">Mineral Mining</p>
                        <h3 class="font-bold text-sm text-shadow-md">Unlocking the Riches of the Earth</h3>
                    </div>
                </div>
                <div class="card group relative overflow-hidden rounded-xl w-64 h-96 transition-all duration-300">
                    <div class="absolute inset-0 z-0 card-background transition-all duration-500">
                        <img src="dist/img/cardconstruct.jpg" alt="Card 1" class="object-cover w-full h-full" />
                    </div>
                    <div class="absolute bottom-0 p-4 text-white z-10 bg-black bg-opacity-50 w-full">
                        <p class="uppercase text-xs opacity-100">Construction</p>
                        <h3 class="font-bold text-sm text-shadow-md">Building the Future with Innovation</h3>
                    </div>
                </div>       
            </div>
        </div>
    </section>
    <!-- Card Section Start -->


    <!-- Product Section Start -->
    <section id="Product">
        <div class="container mx-auto flex flex-col items-center space-y-8 p-10">
            <div class="container mx-auto px-6 text-center mt-6">
                <h2 class="text-primary text-lg font-semibold uppercase tracking-wider">Product</h2>
                <p class="text-secondary text-3xl font-extrabold leading-tight mb-1">Our Products</p>
                <p class="text-slate-900 text-lg max-w-3xl mx-auto mt-4">
                    Discover the products that have proven to deliver exceptional performance and value to our customers.
                </p>
            </div>
            <a href="product.php?search=wheel#search-result" class="card group relative w-[470px] h-[200px] rounded-2xl overflow-hidden bg-white shadow-lg cursor-pointer">
                <img src="dist/img/wheel.jpeg" class="pic absolute w-full h-full object-cover grayscale group-hover:grayscale-0 transition duration-500" />
                <div class="absolute inset-0 bg-secondary bg-opacity-50 group-hover:bg-opacity-0 transition duration-500"></div>
                <div class="absolute bottom-10 right-8 group-hover:bottom-20 group-hover:right-12 transition-all duration-500 text-white flex flex-col justify-center items-center group-hover:translate-x-[10%]">
                    <h2 class="text-3xl font-bold text-center">Wheel</h2>
                    <p class="text-sm mt-2 opacity-0 group-hover:opacity-100 transition-opacity duration-500 text-center" style="text-shadow: 8px 8px 16px rgba(0, 0, 0, 0.9);">Trazor distributes Fifth Wheels from various brands,<br> including the highly durable ULTRA Fifth Wheel.</p>
                </div>
                <span class="absolute bottom-6 right-6 w-4 h-4 rounded-full bg-green-400 group-hover:bg-white transition-all duration-500 z-20"></span>
                <button class="absolute bottom-4 left-4 w-4 h-4 rounded-full bg-secondary transform scale-0 opacity-0 group-hover:scale-[16.5] group-hover:opacity-50 transition-all duration-500"></button>
            </a>
            <a href="product.php?search=hose#search-result" class="relative w-[470px] h-[230px] overflow-hidden rounded-2xl group cursor-pointer transition-all duration-500">
                <img
                    src="dist/img/hose.jpg"
                    alt="Rainy"
                    class="absolute inset-0 w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500 z-0"
                />
                <div
                    class="absolute inset-0 bg-white bg-opacity-10 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition-all duration-500 z-10"
                ></div>
                <div class="absolute bottom-6 left-24 z-20 transition-all duration-500 group-hover:bottom-10">
                    <h2 class="text-white text-3xl font-bold">Hose</h2>
                    <p class="text-white text-sm max-w-[250px] opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                            Alfagomma hoses offer expert customized OEM solutions with reliability and safety for demanding industrial needs.
                    </p>
                </div>
                <span
                    class="absolute top-1/2 -translate-y-1/2 right-6 text-[12px] text-slate-400 rotate-90 group-hover:opacity-0 transition-all duration-500 z-20"
                ></span>
                <span
                    class="absolute bottom-6 right-6 w-4 h-4 rounded-full bg-green-400 group-hover:bg-white transition-all duration-500 z-20"
                ></span>
            </a>
            <a href="product.php?search=tyre#search-result" class="card group relative w-[470px] h-[200px] rounded-2xl overflow-hidden bg-white shadow-lg cursor-pointer">
                <img src="dist/img/tire.jpg" class="pic absolute w-full h-full object-cover grayscale group-hover:grayscale-0 transition duration-500" />
                <div class="absolute inset-0 bg-secondary bg-opacity-50 group-hover:bg-opacity-0 transition duration-500"></div>
                <div class="absolute bottom-10 right-8 group-hover:bottom-20 group-hover:right-12 transition-all duration-500 text-white flex flex-col justify-center items-center group-hover:translate-x-[10%]">
                    <h2 class="text-3xl font-bold text-center">Tyre</h2>
                    <p class="text-sm mt-2 opacity-0 group-hover:opacity-100 transition-opacity duration-500 text-center" style="text-shadow: 8px 8px 16px rgba(0, 0, 0, 0.9);">Tires are designed for optimal performance and <br>reliability in demanding industrial.</p>
                </div>
                <span class="absolute bottom-6 right-6 w-4 h-4 rounded-full bg-green-400 group-hover:bg-white transition-all duration-500 z-20"></span>
                <button class="absolute bottom-4 left-4 w-4 h-4 rounded-full bg-accent transform scale-0 opacity-0 group-hover:scale-[16.5] group-hover:opacity-50 transition-all duration-500"></button>
            </a>
        </div>
    </section>
    <!-- Product Section End -->


     <!-- Unit Overview Section Start -->
    <section id="unit-overview" class="bg-black py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-white text-lg font-semibold uppercase tracking-wider mb-2">UNIT OVERVIEW</h2>
            <p class="text-white text-4xl font-bold leading-tight mb-4">Strategic solutions for a wide range of industry sectors</p>
            <p class="text-gray-400 text-lg max-w-3xl mx-auto mb-20">
                Our products are specifically developed to meet the challenges encountered across diverse environments
            </p>
        </div>
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-2 mb-10 lg:w-1/2">
                    <a href="product.php">
                        <img src="dist/img/product-fifthwheel.jpg" alt="Spare Part" class="max-w-[420px] h-auto rounded-lg ">
                    </a>
                </div>
                <div class="w-full px-2 lg:w-1/2">
                    <h2 class="text-white text-lg font-semibold uppercase tracking-wider mt-16 mb-2">SPARE PART</h2>
                    <p class="text-white text-4xl font-bold leading-tight mb-4">High-quality components designed to optimize productivity</p>
                    <p class="text-gray-400 text-lg max-w-3xl mx-auto">
                        We provide high-quality spare parts with warranties and support, reducing costs while ensuring machine efficiency and long-term durability.
                    </p>
                    <a href="product.php" class="text-red-600 font-bold text-sm hover:underline inline-flex items-center gap-1 mt-4">
                        See Product
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 4l1.41 1.41L7.83 11H20v2H7.83l5.58 5.59L12 20l-8-8z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="flex flex-wrap py-16">
                <div class="w-full px-2 lg:w-1/2">
                    <h2 class="text-white text-lg font-semibold uppercase tracking-wider mt-16 mb-2">MAINTENANCE</h2>
                    <p class="text-white text-4xl font-bold leading-tight mb-4">Dependable maintenance services to improve performance</p>
                    <p class="text-gray-400 text-lg max-w-3xl mx-auto">
                        We enhance our After Sales support by providing extensive maintenance services, carried out by certified technicians with expertise in both local and international brands.
                    </p>
                    <a href="contact.php" class="text-red-600 font-bold text-sm hover:underline inline-flex items-center gap-1 mt-4">
                        Our Contact
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 4l1.41 1.41L7.83 11H20v2H7.83l5.58 5.59L12 20l-8-8z"/>
                        </svg>
                    </a>
                </div>
                <div class="w-full px-2 mb-10 lg:w-1/2">
                    <a href="product.php">
                        <img src="dist/img/maintenance.jpg" alt="Maintenance" class="max-w-[420px] mx-auto h-auto rounded-lg ">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Unit Overview Section End -->


    <!-- Contact Section Start -->
    <section id="contact" class="pt-32 pb-28">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">Contact</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Contact Us</h2>
                    <p class="font-medium text-lg text-gray-700 md:text-lg">Contact us here if you have any questions or ordering products. 
                      <br>
                  </p>
                  <a href="contact.php">
                    <button class="bg-[#9b2226] text-white font-bold py-2 px-6 rounded-lg mx-auto mt-4 hover:bg-[#7d1c1f] transition-all duration-300">
                      CONTACT US
                      <span class="ml-2 text-xl">→</span>
                    </button>
                  </a>                    
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <?php include 'footer.php'; ?>
    
    <script src="dist/js/script.js"></script>
</body>
</html>
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
    <link rel="icon" href="dist/img/favicon.ico" type="image/x-icon">

</head>
<body >
    <!-- Intro Section Start -->
    <section id="intro-video" class="relative w-full h-[50vh] overflow-hidden">
        <img src="dist/img/about.jpg" alt="WorkSpace" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 w-full h-full bg-black bg-opacity-50 z-20"></div>
        <div class="absolute inset-y-2/3 z-30 flex flex-col justify-center items-start px-10 lg:px-20 w-full">
            <h1 class="text-white font-extrabold text-3xl md:text-5xl max-w-xl leading-tight drop-shadow-[4px_2px_5px_rgba(0,0,0,0.7)] mb-4">
                YOUR TRUSTWORTHY <br> SOLUTION PARTNER
            </h1>
            <div class="flex space-x-4">
                <a href="#home" class="text-white font-medium text-sm md:text-base border-b-2 border-white hover:text-primary transition duration-300">
                    Company Overview
                </a>
            </div>
        </div>
    </section>
    <!-- Intro Section End -->

      
    <!-- Hero Section Start -->
    <section id="home" class="pt-28 pb-28 ">
        <div class="container">
         <div class="flex flex-wrap">
            <div class="w-full self-end px-4 lg:w-1/2">
              <div class="relative mt-10 lg:mt-9 lg:right-0">
                <img src="dist/img/abouthero.webp" alt="Dapa" class="max-w-lg mx-auto">
              </div>
            </div>
            <div class="w-full mt-8 self-center px-4 lg:w-1/2">
               <h1 class="text-3xl font-extrabold text-dark lg:text-4xl leading-tight mb-4">
                  Draw Your Future with Us<br class="hidden md:block" />
               </h1>
               <p class="text-slate-600 text-xl leading-relaxed mb-6">
                  At PT Trazor, our greatest asset is our people, driving the core of our business activities.
               </p>
               <p class="text-slate-600 text-xl leading-relaxed mb-6">
                  We actively seek and employ competent, high-quality individuals who collaborate to ensure the sustainability and success of our business.
               </p>
               <a href="#about" class="text-red-600 font-bold text-sm hover:underline inline-flex items-center gap-1">
                 Our Recruitment Process
                 <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                   <path d="M12 4l1.41 1.41L7.83 11H20v2H7.83l5.58 5.59L12 20l-8-8z"/>
                 </svg>
               </a>
             </div>    
         </div>
         <div class="flex flex-wrap">
            <div class="w-full self-center p-16 lg:w-1/2 mt-20">
               <h1 class="text-3xl font-extrabold text-dark lg:text-2xl leading-tight mt-20 mb-4">
                  Beware of Recruitment Fraud in the Name of PT Trazor<br class="hidden md:block" /> 
               </h1>
               <p class="text-slate-600 text-xl leading-relaxed mb-6">
                  The recruitment process at PT Trazor is completely FREE of charge. PT Trazor NEVER collaborates with any travel agencies or external agencies in the recruitment process.
               </p>
               <p class="text-slate-600 text-xl leading-relaxed mb-6">
                  If Young Talents come across any fraudulent job offers, please report them to <span class="font-extrabold">human.resource@trazor.co.id.</span>.
               </p>
               <a href="#about" class="text-red-600 font-bold text-sm hover:underline inline-flex items-center gap-1">
                 Contact Us 
                 <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                   <path d="M12 4l1.41 1.41L7.83 11H20v2H7.83l5.58 5.59L12 20l-8-8z"/>
                 </svg>
               </a>
             </div>    
             <div class="w-full self-end px-4 lg:w-1/2">
               <div class="relative mb-10 lg:mt-9 lg:right-0">
                 <img src="dist/img/abouthero2.webp" alt="Dapa" class="max-w-lg mx-auto">
               </div>
             </div>
         </div>
        </div>
    </section>
    <!-- Hero Section End -->


    <!-- Recruitment Section Start -->
    <section class="bg-gray-900 text-white py-16">
              <div class="container mx-auto text-center mb-28">
            <h2 class="text-white text-lg font-semibold uppercase tracking-wider mb-2">Recruitment
            </h2>
            <p class="text-white text-4xl font-bold leading-tight mb-4">Recruitment Process</p>
            <p class="text-gray-400 text-lg max-w-3xl mx-auto">
                The recruitment process at PT Trazor is designed to ensure that we select the best candidates who align with our values. We are committed to providing equal opportunities for all applicants, regardless of their background or experience.
            </p>
        </div>
      <div class="max-w-7xl mx-auto px-8 mb-8">
        <div class="flex items-center justify-center flex-wrap">
          <div class="flex flex-col items-center text-center m-6">
            <div class="bg-white rounded-full p-4">
              <img src="dist/img/icon-user-check.svg" class="w-8 h-8" alt="Administrative Selection">
            </div>
            <p class="text-sm font-semibold mt-2">Administrative</p>
          </div>
          <div class="border-t border-white w-4 mx-auto"></div>

          <div class="flex flex-col items-center text-center m-6">
            <div class="bg-white rounded-full p-4">
              <img src="dist/img/icon-psychotest.svg" class="w-8 h-8" alt="Psychotest">
            </div>
            <p class="text-sm font-semibold mt-2">Psychotest</p>
          </div>
          <div class="border-t border-white w-4 mx-auto"></div>

          <div class="flex flex-col items-center text-center m-6">
            <div class="bg-white rounded-full p-4">
              <img src="dist/img/icon-chat.svg" class="w-8 h-8" alt="HC Interview">
            </div>
            <p class="text-sm font-semibold mt-2">HC Interview</p>
          </div>
          <div class="border-t border-white w-4 mx-auto"></div>

          <div class="flex flex-col items-center text-center m-6">
            <div class="bg-white rounded-full p-4">
              <img src="dist/img/icon-interview.svg" class="w-8 h-8" alt="User & BOD Interview">
            </div>
            <p class="text-sm font-semibold mt-2">User Interview</p>
          </div>
          <div class="border-t border-white w-4 mx-auto"></div>

          <div class="flex flex-col items-center text-center m-6">
            <div class="bg-white rounded-full p-4">
              <img src="dist/img/icon-offering.svg" class="w-8 h-8" alt="Offering">
            </div>
            <p class="text-sm font-semibold mt-2">Offering</p>
          </div>
          <div class="border-t border-white w-4 mx-auto"></div>

          <div class="flex flex-col items-center text-center m-6">
            <div class="bg-white rounded-full p-4">
              <img src="dist/img/icon-medical-kit.svg" class="w-8 h-8" alt="Medical Checkup">
            </div>
            <p class="text-sm font-semibold mt-2">Medical Checkup</p>
          </div>
          <div class="border-t border-white w-4 mx-auto"></div>

          <div class="flex flex-col items-center text-center m-6">
            <div class="bg-white rounded-full p-4">
              <img src="dist/img/icon-working.svg" class="w-8 h-8" alt="On Boarding">
            </div>
            <p class="text-sm font-semibold mt-2">On Boarding</p>
          </div>
        </div>
      </div>
    </section>
   <!-- Recruitment Section End -->

    

  <!-- Gallery Section Start -->
  <div class="flex justify-center items-center min-h-screen">
    <div class="grid grid-cols-2 gap-0 w-full max-w-xl">
        <div class="group relative flex items-center">
            <img src="dist/img/about (1).jpg" alt="Image 1" class="transition-transform transform group-hover:scale-110 group-hover:translate-x-[-12%] group-hover:translate-y-[-12%] duration-500 ease-in-out w-[420px] object-cover">
            <div class="absolute left-[-120%] group-hover:left-0 transition-all duration-500 text-lg font-black text-white p-4">
                Innovative eco-friendly products
            </div>
        </div>
        <div class="group relative flex items-center">
            <img src="dist/img/about (2).jpg" alt="Image 2" class="transition-transform transform group-hover:scale-110 group-hover:translate-x-[12%] group-hover:translate-y-[-12%] duration-500 ease-in-out w-[420px] object-cover">
            <div class="absolute right-[-120%] group-hover:right-0 transition-all duration-500 text-lg font-black text-white p-4">
                Greenhouse Gas (GHG) reduction
            </div>
        </div>
        <div class="group relative flex items-center">
            <img src="dist/img/about (3).jpg" alt="Image 3" class="transition-transform transform group-hover:scale-110 group-hover:translate-x-[-12%] group-hover:translate-y-[12%] duration-500 ease-in-out w-[420px] object-cover">
            <div class="absolute left-[-120%] group-hover:left-0 transition-all duration-500 text-lg font-black text-white p-4">
                Transition to renewable energy
            </div>
        </div>
        <div class="group relative flex items-center">
            <img src="dist/img/about (4).jpg" alt="Image 4" class="transition-transform transform group-hover:scale-110 group-hover:translate-x-[12%] group-hover:translate-y-[12%] duration-500 ease-in-out w-[420px] object-cover">
            <div class="absolute right-[-120%] group-hover:right-0 transition-all duration-500 text-lg font-black text-white p-4">
                Occupational Health and Safety (OHS)
            </div>
        </div>
    </div>
  </div>
  <!-- Gallery Section End -->


  <!-- Sustainability Section Start -->
  <section id="sustainability" class="bg-[#161616] py-16">
      <div class="container mx-auto text-center">
          <h2 class="text-white text-lg font-semibold uppercase tracking-wider mb-2">trazor</h2>
          <p class="text-white text-4xl font-bold leading-tight mb-4">Building sustainable solutions for a better tomorrow</p>
          <p class="text-gray-400 text-xl max-w-3xl mx-auto">
                Trazor stands as a beacon of corporate responsibility, deeply committed to Environmental, Social, and Governance (ESG) values.
          </p>
      </div>
      <img src="dist/img/aboutSustainability.jpg" alt="" class="w-1/2 h-auto mt-10 mx-auto"> 
      <div class="container">
        <div class="flex justify-center">
          <div class="w-full px-16 mb-40 mt-16">
              <p class="text-gray-400 text-lg mx-auto text-center">
                  Trazor is committed to sustainable business practices, focusing on reducing its environmental impact through greenhouse gas reduction and the adoption of renewable energy. The company prioritizes Occupational Health and Safety (OHS) to ensure a safe and healthy work environment for its workforce.

                  Additionally, Trazor actively contributes to community development through its Corporate Social Responsibility (CSR) programs, positively impacting the regions where it operates. This approach highlights Trazor's dedication to environmental stewardship and social well-being alongside operational success.
              </p>
        </div>
      </div>
    </div>
  </section>
    <!-- Sustainability Section End -->

  <?php include 'footer.php'; ?>
  <script src="dist/js/script.js"></script>    
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
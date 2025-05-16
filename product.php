

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
<body class="bg-black">
    <?php 
include 'search.php';
?>
    <!-- Navbar Start -->
    <!-- <header class="bg-white fixed top-0 left-0 w-full flex items-center z-40">
        <div class="container">
            <div class="flex items-center justify-between relative">
                    <div class="px-4">
                    <a href="index.php" class="block">
                        <img src="dist/img/logo.png" alt="Logo" class="max-w-[120px] h-auto">
                    </a>                    
                    </div>
                    <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                    </button>

                    <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-xl rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none uppercase font-normal font-montserrat text-l">
                        <ul class="block lg:flex">
                                <li class="group relative">
                                <a href="index.php" class="text-dark py-2 mx-8 flex group-hover:text-primary group-hover:scale-110 group-hover:translate-y-[-5px] transition-all duration-300">Home</a>
                                <div class="absolute bottom-0 left-0 w-0 h-1 bg-secondary transition-all duration-500 ease-in-out group-hover:w-full"></div>
                                </li>
                                <li class="group relative">
                                <a href="about.php" class="text-dark py-2 mx-8 flex group-hover:text-primary group-hover:scale-110 group-hover:translate-y-[-5px] transition-all duration-300">About</a>
                                <div class="absolute bottom-0 left-0 w-0 h-1 bg-secondary transition-all duration-500 ease-in-out group-hover:w-full"></div>
                                </li>
                                <li class="group relative">
                                <a href="product.php" class="text-dark py-2 mx-8 flex group-hover:text-primary group-hover:scale-110 group-hover:translate-y-[-5px] transition-all duration-300">Product</a>
                                <div class="absolute bottom-0 left-0 w-0 h-1 bg-secondary transition-all duration-500 ease-in-out group-hover:w-full"></div>
                                </li>
                                <li class="group relative">
                                <a href="contact.php" class="text-dark py-2 mx-8 flex group-hover:text-primary group-hover:scale-110 group-hover:translate-y-[-5px] transition-all duration-300">Contact</a>
                                <div class="absolute bottom-0 left-0 w-0 h-1 bg-secondary transition-all duration-500 ease-in-out group-hover:w-full"></div>
                                </li>
                        </ul>
                    </nav>                    
                    </div>
            </div>
        </div>
    </header> -->
    <!-- Navbar End -->


    <!-- Hero Section Start -->
    <section id="intro-video" class="relative w-full h-screen overflow-hidden">
        <img src="dist/img/product-hero.jpg" alt="WorkSpace" class="absolute inset-0 w-full h-full object-cover md:object-cover">
        <div class="absolute inset-0 w-full h-full bg-black bg-opacity-50 z-20"></div>
        <div class="absolute inset-y-2/3 z-30 flex flex-col justify-center items-start px-10 lg:px-20">
            <h1 class="text-white font-extrabold text-3xl md:text-5xl max-w-xl leading-tight drop-shadow-[4px_2px_5px_rgba(0,0,0,0.7)] mb-4">
                PRODUCT <br> YOUR NEEDED
            </h1>
        </div>
    </section>
    <!-- Hero Section End -->


    <!-- Product Section Start -->
    <section id="unit-overview" class="py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-white text-lg font-semibold uppercase tracking-wider mb-2">UNIT OVERVIEW</h2>
            <p class="text-white text-4xl font-bold leading-tight mb-4">Versatile solutions for diverse sectors</p>
            <p class="text-gray-400 text-xl max-w-3xl mx-auto">
                Our products are designed to tackle the challenges encountered in diverse environments.
            </p>
            <p class="text-gray-400 text-xl max-w-3xl mx-auto mt-12">
                Search your products, Press <span class="text-white">ENTER</span> to search, or Reset.
            </p>
        </div>
        <div class="relative h-24 flex items-center justify-center overflow-hidden mb-14">
            <div class="w-full h-full absolute top-0 left-0  opacity-70"></div>
            <div class="src-box">
                <form action="#search-results" method="GET" id="searchForm">
                    <input type="text" name="search" placeholder=" " value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>" class="px-8 pb-1">  
                    <button type="reset" class="reset-button"> </button>
                </form>
            </div>
        </div>
        <div id="search-results" class="container">
            <?php if (isset($search) && !empty(trim($search))): ?>
                <h2 class="text-white text-lg font-semibold uppercase tracking-wider mb-2">Search Results for "<?= htmlspecialchars($search) ?>"</h2>
                <?php if ($result && $result->num_rows > 0): ?>
                    <div class="flex flex-wrap">
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <div class="w-full px-2 mb-10 lg:w-1/2 order-1">
                                <a href="product.php?id=<?= $row['id'] ?>">
                                    <img src="<?= BASE_URL . '/dist/img/' . $row['path_img'] ?>" alt="<?= ucwords($row['barang']) ?>" class="w-9/12 h-auto rounded-lg mx-auto">
                                </a>
                            </div>
                            <div class="w-full px-2 lg:w-1/2 order-2">
                                <h2 class="text-white text-lg font-semibold uppercase tracking-wider mt-16 mb-2"><?= strtoupper($row['judul']) ?></h2>
                                <p class="text-white text-4xl font-bold leading-tight mb-4"><?= ucwords($row['barang']) ?></p>
                                <p class="text-gray-400 text-xl max-w-3xl mx-auto"><?= $row['deskripsi'] ?></p>
                                <a href="contact.php" class="text-red-600 font-bold text-sm hover:underline inline-flex items-center gap-1 mt-4">
                                    Request Inquiry
                                </a>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php else: ?>
                    <p class="text-center text-gray-500"><?= $error_message ?></p>
                <?php endif; ?>
            <?php else: ?>
                <?php include 'action.php'; ?>
            <?php endif; ?>
        </div>
    </section>
    
    <!-- Product Section End -->

    <?php include 'footer.php'; ?>

    <script src="dist/js/script.js"></script>
</body>
</html>
<?php
include 'includes/connection.php'; 
include 'config.php'; 

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($page < 1) $page = 1;

$limit = 5; 
$offset = ($page - 1) * $limit; 

$stmt = $connection->prepare("SELECT * FROM product LIMIT ? OFFSET ?");
$stmt->bind_param("ii", $limit, $offset);
$stmt->execute();
$result = $stmt->get_result();

$totalStmt = $connection->prepare("SELECT COUNT(*) AS total FROM product");
$totalStmt->execute();
$totalResult = $totalStmt->get_result();
$totalRow = $totalResult->fetch_assoc();

$totalProducts = $totalRow['total'];
$totalPages = ceil($totalProducts / $limit);
?>

<?php
$counter = 0;
while ($row = $result->fetch_assoc()):
  $isEven = ($counter % 2 == 0);
?>
  <div class="container mb-12" id="<?= strtolower(str_replace(' ', '', htmlspecialchars($row['judul']))) ?>">
    <div class="flex flex-wrap items-center">
      <?php if ($isEven): ?>
        <div class="w-full lg:w-1/2 px-4 mb-6 lg:mb-0">
          <img src="<?= BASE_URL . '/dist/img/' . htmlspecialchars($row['path_img']) ?>" alt="<?= ucwords(htmlspecialchars($row['barang'])) ?>" class="w-9/12 h-auto rounded-lg mx-auto" />
        </div>
        <div class="w-full lg:w-1/2 px-4 text-left lg:text-left">
          <h2 class="text-white text-lg font-semibold uppercase tracking-wider mb-2"><?= strtoupper(htmlspecialchars($row['judul'])) ?></h2>
          <p class="text-white text-4xl font-bold leading-tight mb-4"><?= ucwords(htmlspecialchars($row['barang'])) ?></p>
          <p class="text-gray-400 text-xl max-w-3xl mx-auto"><?= htmlspecialchars($row['deskripsi']) ?></p>
          <a href="contact.php" class="text-red-600 font-bold text-sm hover:underline inline-flex items-center gap-1 mt-4">
            Request Inquiry
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
              <path d="M12 4l1.41 1.41L7.83 11H20v2H7.83l5.58 5.59L12 20l-8-8z"/>
            </svg>
          </a>
        </div>
      <?php else: ?>
        <div class="w-full lg:w-1/2 px-4 text-left lg:text-left order-2 lg:order-1">
          <h2 class="text-white text-lg font-semibold uppercase tracking-wider mb-2"><?= strtoupper(htmlspecialchars($row['judul'])) ?></h2>
          <p class="text-white text-4xl font-bold leading-tight mb-4"><?= ucwords(htmlspecialchars($row['barang'])) ?></p>
          <p class="text-gray-400 text-xl max-w-3xl mx-auto"><?= htmlspecialchars($row['deskripsi']) ?></p>
          <a href="contact.php" class="text-red-600 font-bold text-sm hover:underline inline-flex items-center gap-1 mt-4">
            Request Inquiry
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
              <path d="M12 4l1.41 1.41L7.83 11H20v2H7.83l5.58 5.59L12 20l-8-8z"/>
            </svg>
          </a>
        </div>
        <div class="w-full lg:w-1/2 px-4 mb-6 lg:mb-0 order-1 lg:order-2">
          <img src="<?= BASE_URL . '/dist/img/' . htmlspecialchars($row['path_img']) ?>" alt="<?= ucwords(htmlspecialchars($row['barang'])) ?>" class="w-9/12 h-auto rounded-lg mx-auto" />
        </div>
      <?php endif; ?>
    </div>
  </div>
<?php
  $counter++;
endwhile;
?>


<div class="flex justify-center mt-10">
    <?php if ($page < $totalPages): ?>
        <a href="?page=<?= $page + 1 ?>">
            <button class="bg-[#9b2226] text-white font-bold py-2 px-6 rounded-lg hover:bg-[#7d1c1f] transition-all duration-300">
                MORE PRODUCTS
                <span class="ml-2 text-xl">→</span>
            </button>
        </a>
    <?php endif; ?>
</div>

<?php if ($page == 2): ?>
<div class="flex justify-center mt-5">
    <a href="product.php">
        <button class="bg-[#9b2226] text-white font-bold py-2 px-6 rounded-lg hover:bg-[#7d1c1f] transition-all duration-300">
            BACK TO PRODUCTS
            <span class="ml-2 text-xl">←</span>
        </button>
    </a>
</div>
<?php endif; ?>
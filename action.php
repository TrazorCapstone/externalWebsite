<?php
include 'includes/connection.php'; 
include 'config.php'; 

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limit = 5; 
$offset = ($page - 1) * $limit; 

$sql = "SELECT * FROM product LIMIT $limit OFFSET $offset"; 
$result = $connection->query($sql);

$totalSql = "SELECT COUNT(*) AS total FROM product";
$totalResult = $connection->query($totalSql);
$totalRow = $totalResult->fetch_assoc();
$totalProducts = $totalRow['total'];
$totalPages = ceil($totalProducts / $limit);
?>

<?php 
$counter = 0; 
while ($row = $result->fetch_assoc()): 
  $isEvenRow = $counter % 2 == 0; 
?>
  <div class="container" id="<?= strtolower(str_replace(' ', '', $row['judul'])) ?>">
    <div class="flex flex-wrap">
      <?php if ($isEvenRow): ?>
        <div class="w-full px-2 mb-10 lg:w-1/2 order-1">
            <img src="<?= BASE_URL . '/dist/img/'; ?><?= $row['path_img'] ?>" alt="<?= ucwords($row['barang']) ?>" class="w-9/12 h-auto rounded-lg mx-auto">
        </div>
        <div class="w-full px-2 lg:w-1/2 order-2 lg:order-2">
          <h2 class="text-white text-lg font-semibold uppercase tracking-wider mt-16 mb-2"><?= strtoupper($row['judul']) ?></h2>
          <p class="text-white text-4xl font-bold leading-tight mb-4"><?= ucwords($row['barang']) ?></p>
          <p class="text-gray-400 text-xl max-w-3xl mx-auto"><?= $row['deskripsi'] ?></p>
          <a href="contact.php" class="text-red-600 font-bold text-sm hover:underline inline-flex items-center gap-1 mt-4">
            Request Inquiry
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
              <path d="M12 4l1.41 1.41L7.83 11H20v2H7.83l5.58 5.59L12 20l-8-8z"/>
            </svg>
          </a>
        </div>
      <?php else: ?>
        <div class="w-full px-2 lg:w-1/2 order-2 lg:order-1">
          <h2 class="text-white text-lg font-semibold uppercase tracking-wider mt-16 mb-2"><?= strtoupper($row['judul']) ?></h2>
          <p class="text-white text-4xl font-bold leading-tight mb-4"><?= ucwords($row['barang']) ?></p>
          <p class="text-gray-400 text-xl max-w-3xl mx-auto"><?= $row['deskripsi'] ?></p>
          <a href="contact.html" class="text-red-600 font-bold text-sm hover:underline inline-flex items-center gap-1 mt-4">
            Request Inquiry
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
              <path d="M12 4l1.41 1.41L7.83 11H20v2H7.83l5.58 5.59L12 20l-8-8z"/>
            </svg>
          </a>
        </div>
        <div class="w-full px-2 mb-10 lg:w-1/2 order-1 lg:order-2">
          <a href="#">
            <img src="<?= BASE_URL . '/dist/img/'; ?><?= $row['path_img'] ?>" alt="<?= ucwords($row['barang']) ?>" class="w-9/12 h-auto rounded-lg mx-auto">
          </a>
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

<?php $connection->close(); ?>
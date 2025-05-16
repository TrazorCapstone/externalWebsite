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
        <div class="w-full px-2 mb-10 lg:w-1/2">
          <a href="#">
            <img src="<?= BASE_URL . '/dist/img/'; ?><?= $row['path_img'] ?>" alt="<?= $row['judul'] ?>" class="w-9/12 h-auto rounded-lg mx-auto">
          </a>
        </div>
        <div class="w-full px-2 lg:w-1/2">
          <h2 class="text-white text-lg font-semibold uppercase tracking-wider mt-16 mb-2"><?= $row['judul'] ?></h2>
          <p class="text-white text-4xl font-bold leading-tight mb-4"><?= strtoupper($row['barang']) ?></p>
          <p class="text-gray-400 text-xl max-w-3xl mx-auto"><?= $row['deskripsi'] ?></p>
          <a href="contact.html" class="text-red-600 font-bold text-sm hover:underline inline-flex items-center gap-1 mt-4">
            Request Inquiry
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
              <path d="M12 4l1.41 1.41L7.83 11H20v2H7.83l5.58 5.59L12 20l-8-8z"/>
            </svg>
          </a>
        </div>
      <?php else: ?>
        <div class="w-full px-2 lg:w-1/2">
          <h2 class="text-white text-lg font-semibold uppercase tracking-wider mt-16 mb-2"><?= $row['judul'] ?></h2>
          <p class="text-white text-4xl font-bold leading-tight mb-4"><?= strtoupper($row['barang']) ?></p>
          <p class="text-gray-400 text-xl max-w-3xl mx-auto"><?= $row['deskripsi'] ?></p>
          <a href="contact.php" class="text-red-600 font-bold text-sm hover:underline inline-flex items-center gap-1 mt-4">
            Request Inquiry
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
              <path d="M12 4l1.41 1.41L7.83 11H20v2H7.83l5.58 5.59L12 20l-8-8z"/>
            </svg>
          </a>
        </div>
        <div class="w-full px-2 mb-10 lg:w-1/2">
          <a href="#">
            <img src="<?= BASE_URL . '/dist/img/'; ?><?= $row['path_img'] ?>" alt="<?= $row['judul'] ?>" class="w-9/12 h-auto rounded-lg mx-auto">
          </a>
        </div>
      <?php endif; ?>
    </div>
  </div>
<?php 
  $counter++; 
endwhile;
?>

<div class="container py-5 flex justify-between">
  <div>
    <?php if ($page > 1): ?>
      <a href="?page=<?= $page - 1 ?>" class="text-white bg-blue-600 py-2 px-4 rounded-lg">Previous</a>
    <?php endif; ?>
  </div>
  <div>
    <?php if ($page < $totalPages): ?>
      <a href="?page=<?= $page + 1 ?>" class="text-white bg-blue-600 py-2 px-4 rounded-lg">Next</a>
    <?php endif; ?>
  </div>
</div>

<?php $connection->close(); ?>
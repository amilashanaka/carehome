<?php
include 'header.php';
include 'navbar.php';

// Fetch all events from the database
$eventData = $event->get_all();
$events = $eventData['error'] === null ? array_reverse($eventData['data']) : [];

// Pagination settings
$eventsPerPage = 6; // Show only 6 events per page
$totalEvents = count($events);
$totalPages = ceil($totalEvents / $eventsPerPage);

// Get current page from URL, default to page 1
$currentPage = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$currentPage = max(1, min($currentPage, $totalPages)); // Ensure valid page number

// Get the subset of events for the current page
$startIndex = ($currentPage - 1) * $eventsPerPage;
$eventsToShow = array_slice($events, $startIndex, $eventsPerPage);
?>

<section class="py-5">
    <div class="container">
        <h2 class="custom-heading text-center">
            All Upcoming <span class="custom-highlight">Events</span>
        </h2>

        <div class="row mt-5 g-4">
            <?php foreach ($eventsToShow as $key) { ?>
                <div class="col-md-4">
                    <div class="card feature-card h-100 shadow">
                        <img src="<?= $key['img1'] ?>" class="card-img-top" alt="Event">
                        <div class="card-body">
                            <h4 class="card-title text-center">
                                <a href="event_detail.php?id=<?= $key['id'] ?>" class="card-link"><?= $key['f1'] ?></a>
                            </h4>
                            <p class="text-justify"><?= $key['f5'] ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <!-- Pagination Section -->
    <?php if ($totalPages > 1) { ?>
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center mt-5">
                <?php if ($currentPage > 1) { ?>
                    <li class="page-item"><a class="page-link" href="?page=<?= $currentPage - 1 ?>">
                            << /a>
                    </li>
                <?php } ?>

                <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
                    <li class="page-item <?= ($i == $currentPage) ? 'active' : '' ?>">
                        <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                    </li>
                <?php } ?>

                <?php if ($currentPage < $totalPages) { ?>
                    <li class="page-item"><a class="page-link" href="?page=<?= $currentPage + 1 ?>">></a></li>
                <?php } ?>
            </ul>
        </nav>
    <?php } ?>
</section>

<?php include_once 'footer.php'; ?>
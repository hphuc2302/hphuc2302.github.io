<?php
require_once 'includes/env.php';
$v = time();
?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="en">

<?php include 'includes/head.php'; ?>


<body class="text-slate-900 dark:text-slate-100 antialiased selection:bg-primary-500 selection:text-white">
  <div class="bg-noise-overlay"></div>

  <?php include 'includes/header.php'; ?>


  <?php include 'includes/mobile_menu.php'; ?>


  <main id="content" class="relative pt-20 overflow-hidden">
    <?php include 'includes/hero.php'; ?>



    <?php include 'includes/about.php'; ?>


    <?php include 'includes/projects.php'; ?>


    <?php include 'includes/case_studies.php'; ?>


    <?php include 'includes/skills.php'; ?>


    <?php include 'includes/contact.php'; ?>

  </main>

  <?php include 'includes/footer.php'; ?>


  <a id="fab" href="#"
    class="fab p-4 rounded-full bg-slate-900 dark:bg-white text-white dark:text-slate-900 shadow-2xl flex items-center justify-center hover:-translate-y-1 transition-transform">
    <i class="ph ph-arrow-up font-bold"></i>
  </a>

  <?php include 'includes/contact_modal.php'; ?>


  <?php include 'includes/pdf_modal.php'; ?>


  <script defer src="https://unpkg.com/aos@2.3.4/dist/aos.js" type="text/javascript"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js" type="text/javascript"></script>

  <script defer src="assets/js/main.js?v=<?= $v ?>" ></script>
</body>

</html>
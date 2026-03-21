<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <title><?= env('APP_NAME') ?></title>
  <meta name="description" content="Profile of <?= env('USER_NAME') ?> - <?= env('USER_ROLE') ?>" />

  <link rel="canonical" href="<?= env('APP_URL') ?>" />

  <meta name="theme-color" content="#0ea5e9" />

  <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet" />

  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        container: {
          center: true,
          padding: "1.5rem",
          screens: { "2xl": "1280px" },
        },
        extend: {
          fontFamily: {
            sans: ["Inter", "ui-sans-serif", "system-ui", "sans-serif"],
          },
          colors: {
            background: "var(--background)",
            surface: "var(--surface)",
            primary: {
              50: "#f0f9ff",
              100: "#e0f2fe",
              200: "#bae6fd",
              300: "#7dd3fc",
              400: "#38bdf8",
              500: "#0ea5e9",
              600: "#0284c7",
              700: "#0369a1",
              800: "#075985",
              900: "#0c4a6e",
              950: "#082f49",
            },
            slate: {
              850: "#151e2e",
              900: "#0f172a",
              950: "#020617",
            },
          },
          boxShadow: {
            glass: "0 8px 32px 0 rgba(31, 38, 135, 0.07)",
            glow: "0 0 20px rgba(14, 165, 233, 0.3)",
            soft: "0 10px 40px -10px rgba(0,0,0,0.08)",
          },
          backgroundImage: {
            "gradient-radial": "radial-gradient(var(--tw-gradient-stops))",
            noise:
              "url('data:image/svg+xml,%3Csvg viewBox=%220 0 200 200%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cfilter id=%22noiseFilter%22%3E%3CfeTurbulence type=%22fractalNoise%22 baseFrequency=%220.65%22 numOctaves=%223%22 stitchTiles=%22stitch%22/%3E%3C/filter%3E%3Crect width=%22100%25%22 height=%22100%25%22 filter=%22url(%23noiseFilter)%22 opacity=%220.05%22/%3E%3C/svg%3E')",
          },
          animation: {
            float: "float 6s ease-in-out infinite",
            "fade-in-up": "fadeInUp 0.8s ease-out forwards",
          },
          keyframes: {
            float: {
              "0%, 100%": { transform: "translateY(0)" },
              "50%": { transform: "translateY(-10px)" },
            },
            fadeInUp: {
              "0%": {
                opacity: "0",
                transform: "translateY(20px)",
              },
              "100%": {
                opacity: "1",
                transform: "translateY(0)",
              },
            },
          },
        },
      },
    };
  </script>

  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" type="text/css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" type="text/css" />
  <script defer src="https://unpkg.com/@phosphor-icons/web" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="assets/css/main.css?v=<?= $v ?>"  />

  <!-- Primary Meta Tags -->
  <meta name="title" content="<?= env('APP_NAME') ?>" />
  <meta name="keywords"
    content="<?= env('USER_NAME') ?>, Profile, <?= env('USER_ROLE') ?>, Web Developer, <?= env('USER_NICKNAME') ?>, IT" />
  <meta name="author" content="<?= env('USER_NAME') ?>" />

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?= env('APP_URL') ?>" />
  <meta property="og:title" content="<?= env('APP_NAME') ?>" />
  <meta property="og:description"
    content="Profile of <?= env('USER_NAME') ?> - <?= env('USER_DESCRIPTION') ?>" />
  <meta property="og:image" content="<?= env('APP_URL') ?>img/<?= env('USER_NICKNAME') ?>.jpg" />

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="<?= env('APP_URL') ?>" />
  <meta property="twitter:title" content="<?= env('APP_NAME') ?>" />
  <meta property="twitter:description"
    content="Profile of <?= env('USER_NAME') ?> - <?= env('USER_DESCRIPTION') ?>" />
  <meta property="twitter:image" content="<?= env('APP_URL') ?>img/<?= env('USER_NICKNAME') ?>.jpg" />

  <!-- Favicon -->
  <link rel="icon" type="image/gif" href="img/favicon.png" />

  <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "Person",
        "name": "<?= env('USER_NAME') ?>",
        "jobTitle": "<?= env('USER_ROLE') ?>",
        "email": "mailto:<?= env('CONTACT_EMAIL') ?>",
        "telephone": "<?= env('CONTACT_PHONE') ?>",
        "url": "<?= env('APP_URL') ?>",
        "image": "img/<?= env('USER_NICKNAME') ?>.jpg"
      }
    </script>
</head>
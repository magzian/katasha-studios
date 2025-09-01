<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Katasha Studios - Photography & Printing</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Google Fonts: Montserrat for headers, Lato for body -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;900&family=Lato:wght@400;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Lato', Arial, sans-serif;
      background: #18181b;
      color: #e5e7eb;
    }
    h1, h2, h3, h4 {
      font-family: 'Montserrat', Arial, sans-serif;
      letter-spacing: 0.02em;
    }
    /* Custom scrollbar */
    ::-webkit-scrollbar { width: 8px; }
    ::-webkit-scrollbar-track { background: #232323; }
    ::-webkit-scrollbar-thumb {
      background: linear-gradient(to bottom, #444, #888);
      border-radius: 4px;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: linear-gradient(to bottom, #333, #aaa);
    }
    @media (max-width: 768px) {
      .text-5xl { font-size: 2.5rem; }
      .text-7xl { font-size: 3rem; }
    }
    /* Animations */
    .fade-in-up {
      opacity: 0;
      transform: translateY(50px);
      transition: opacity 0.8s ease, transform 0.8s ease;
    }
    .fade-in-up.visible {
      opacity: 1;
      transform: translateY(0);
    }
    .fade-in-left {
      opacity: 0;
      transform: translateX(-50px);
      transition: opacity 0.8s ease, transform 0.8s ease;
    }
    .fade-in-left.visible {
      opacity: 1;
      transform: translateX(0);
    }
    .fade-in-right {
      opacity: 0;
      transform: translateX(50px);
      transition: opacity 0.8s ease, transform 0.8s ease;
    }
    .fade-in-right.visible {
      opacity: 1;
      transform: translateX(0);
    }
    @keyframes float {
      0%, 100% { transform: translateY(0) rotate(0deg); opacity: 0.2; }
      20% { transform: translateY(-20px) rotate(5deg); }
      40% { transform: translateY(-10px) rotate(-5deg); }
      60% { transform: translateY(-15px) rotate(3deg); }
      80% { transform: translateY(0) rotate(0deg); }
    }
  </style>
</head>
<body class="bg-neutral-900 overflow-x-hidden font-sans">
<!-- Header -->

@include('header')

<!-- Hero Section -->

@include('hero')

<!-- About Section -->
@include('about-us')

<!-- Media Section -->
@include('media')

<!-- Services Section (renamed from books) -->
@include('services') 

<!-- Contact Section -->
@include('contact-us') 

<!-- Footer -->
@include('footer') 

<!-- Scroll Animation Script -->
<script>
    function onEntry(entry) {
    entry.forEach(e => {
      if (e.isIntersecting) e.target.classList.add('visible');
    });
  }

  document.addEventListener('DOMContentLoaded', () => {
    const observer = new IntersectionObserver(onEntry, { threshold: 0.2 });
    document.querySelectorAll('.fade-in-up, .fade-in-left, .fade-in-right').forEach(el => observer.observe(el));
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener("click", e => {
        e.preventDefault();
        const target = document.querySelector(anchor.getAttribute("href"));
        if (target) target.scrollIntoView({ behavior: "smooth" });
      });
    });
  });


    // Intersection Observer for fade-in animations
    function onEntry(entry) {
      entry.forEach(change => {
        if (change.isIntersecting) {
          change.target.classList.add('visible');
        }
      });
    }
    document.addEventListener('DOMContentLoaded', function() {
      let options = { threshold: 0.2 };
      let observer = new IntersectionObserver(onEntry, options);
      document.querySelectorAll('.fade-in-up, .fade-in-left, .fade-in-right').forEach(el => {
        observer.observe(el);
      });
      // Smooth scroll for anchor links
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
          e.preventDefault();
          const target = document.querySelector(this.getAttribute('href'));
          if (target) {
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
          }
        });
      });
    });
  </script>
</body>
</html>
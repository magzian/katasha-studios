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

<header class="z-10 bg-transparent backdrop-blur-md shadow-lg sticky top-0" style="background: transparent;">
  <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
    <h1 class="text-2xl font-bold bg-gradient-to-r from-gray-100 to-gray-400 bg-clip-text text-transparent flex items-center tracking-wide">
      <span class="mr-2">📸</span> Katasha Studios
    </h1>
    <div class="hidden md:flex space-x-8">
      <a href="#home" class="hover:text-white text-gray-300 font-medium">Home</a>
      <a href="#about" class="hover:text-white text-gray-300 font-medium">About</a>
      <a href="#services" class="hover:text-white text-gray-300 font-medium">Services</a>
      <a href="#contact" class="hover:text-white text-gray-300 font-medium">Contact</a>
    </div>
    <button class="md:hidden text-gray-300" onclick="alert('Mobile menu toggled')">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>
  </nav>
</header>

<!-- Hero Section -->
<section id="home"
  class="min-h-screen flex items-center relative"
  style="background: linear-gradient(rgba(24,24,27,0.7), rgba(24,24,27,0.7)), url('/images/nature.jpg') center/cover no-repeat;">
  <div class="container mx-auto px-6 py-20 flex flex-col lg:items-start items-center justify-center h-full">
    <div class="max-w-xl fade-in-up w-full">
      <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-4 text-white drop-shadow-lg text-center lg:text-left" style="font-family: 'Montserrat', Arial, sans-serif;">
        Capturing Moments, Creating Memories
      </h2>
      <p class="text-sm sm:text-base md:text-lg lg:text-xl text-gray-200 mb-8 text-center lg:text-left" style="transition-delay:0.2s;font-family:'Lato',Arial,sans-serif;">
        Professional photography for families, weddings, passports, and more. Plus, top-tier printing services for all your needs.
      </p>
      <div class="flex justify-center lg:justify-start w-full">
        <a href="#contact" class="border-2 border-gray-400 text-gray-100 px-6 py-3 md:px-6 md:py-3 sm:px-4 sm:py-2 text-sm sm:text-base md:text-lg lg:text-base rounded-full font-semibold hover:bg-gray-800 hover:text-white transition">Book a Session</a>
      </div>
    </div>
  </div>
</section>

<!-- About Section -->
<section id="about" class="bg-neutral-800/90 backdrop-blur-sm py-20">
  <div class="container mx-auto px-6 flex flex-col lg:flex-row items-center justify-between gap-12">
    <!-- Left: Heading and Paragraph -->
    <div class="flex-1 w-full max-w-xl fade-in-up">
      <h3 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-4 text-white text-center lg:text-left" style="font-family: 'Montserrat', Arial, sans-serif;">About Katasha Studios</h3>
      <p class="text-sm sm:text-base md:text-lg lg:text-xl text-gray-300 mb-8 text-center lg:text-left" style="transition-delay:0.2s;font-family:'Lato',Arial,sans-serif;">
        Katasha Studios blends artistry and technology to deliver stunning photography and high-quality printing. From family portraits to business banners, we capture and create with passion.
      </p>
    </div>
    <!-- Right: Overlapping Images -->
    <div class="flex-1 w-full flex items-center justify-center relative min-h-[220px] max-w-xl mt-8 lg:mt-0">
      <div class="relative w-64 h-48 sm:w-80 sm:h-56 md:w-96 md:h-64 lg:w-[480px] lg:h-[340px]">
        <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=400&q=80" alt="Placeholder 1" class="absolute top-0 left-0 w-40 h-32 sm:w-48 sm:h-36 md:w-56 md:h-40 lg:w-64 lg:h-48 object-cover rounded-xl shadow-lg border-4 border-neutral-900 z-30" style="transform: rotate(-8deg);">
        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=400&q=80" alt="Placeholder 2" class="absolute top-8 left-16 w-40 h-32 sm:w-48 sm:h-36 md:w-56 md:h-40 lg:w-64 lg:h-48 object-cover rounded-xl shadow-lg border-4 border-neutral-900 z-20" style="transform: rotate(6deg);">
        <img src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=400&q=80" alt="Placeholder 3" class="absolute top-16 left-32 w-40 h-32 sm:w-48 sm:h-36 md:w-56 md:h-40 lg:w-64 lg:h-48 object-cover rounded-xl shadow-lg border-4 border-neutral-900 z-10" style="transform: rotate(-4deg);">
      </div>
    </div>
  </div>
</section>

<!-- Services Section (renamed from books) -->
<section id="services" class="py-20 bg-neutral-900">
  <div class="container mx-auto px-4 sm:px-6">
    <h3 class="text-3xl sm:text-4xl md:text-5xl font-bold text-center mb-12 sm:mb-16 text-white fade-in-up" style="font-family: 'Montserrat', Arial, sans-serif;">Our Services</h3>
    <!-- Desktop Navigation (hidden on mobile) -->
    <div class="hidden sm:flex items-center justify-between mb-6">
      <button onclick="carouselPrev()" id="carouselPrevBtn" class="px-4 py-2 rounded-full bg-gray-800 text-gray-200 font-bold hover:bg-gray-700 disabled:opacity-50 transition-all duration-200">
        &#8592; Prev
      </button>
      <button onclick="carouselNext()" id="carouselNextBtn" class="px-4 py-2 rounded-full bg-gray-800 text-gray-200 font-bold hover:bg-gray-700 disabled:opacity-50 transition-all duration-200">
        Next &#8594;
      </button>
    </div>
    <!-- Carousel Container -->
    <div class="relative">
      <div id="carouselContainer" class="flex overflow-x-auto scrollbar-hide space-x-4 sm:space-x-6 pb-4 scroll-smooth snap-x snap-mandatory">
        <!-- Cards inserted dynamically -->
      </div>
      <!-- Mobile scroll indicator -->
      <div class="sm:hidden flex justify-center mt-4 space-x-2">
        <div class="w-2 h-2 bg-gray-400 rounded-full"></div>
        <div class="w-2 h-2 bg-gray-100 rounded-full"></div>
        <div class="w-2 h-2 bg-gray-400 rounded-full"></div>
      </div>
    </div>
    <p class="sm:hidden text-center text-gray-400 text-sm mt-4">
      ← Swipe to explore more services →
    </p>
  </div>
</section>

<script>
  // Update the services array to include photography and printing
  const books = [
    {
      title: "Shirt Printing",
      description: "Custom t-shirt printing for events, businesses, and personal use. High-quality, durable prints on a variety of shirt styles.",
      price: "From Ksh600",
      image: "/images/shirt2.jpeg",
    },
    {
      title: "Banner Printing",
      description: "Vivid, weather-resistant banners for promotions, events, and business branding. Available in multiple sizes.",
      price: "From Ksh1200",
      image: "/images/banner.jpeg",
    },
    {
      title: "Children Book Printing",
      description: "High-quality, colorful printing for children’s books and educational materials. Perfect for authors and schools.",
      price: "From Ksh350",
      image: "/images/color1.jpeg",
    },
    {
      title: "Family & Portrait Photography",
      description: "Professional family, kids, and individual portraits in studio or on location.",
      price: "From Ksh2000",
      image: "/images/.jpeg",
    },
    {
      title: "Wedding & Event Photography",
      description: "Capture your special day with our creative and reliable wedding/event photography.",
      price: "From Ksh15,000",
      image: "/images/service-wedding.jpg",
    },
    {
      title: "Passport & ID Photos",
      description: "Quick, compliant passport and ID photos with instant printing.",
      price: "From Ksh300",
      image: "/images/service-passport.jpg",
    },
  ];

  function getCardWidth() {
    const screenWidth = window.innerWidth;
    if (screenWidth < 640) return 280; // Mobile: smaller cards
    if (screenWidth < 1024) return 320; // Tablet
    return 350; // Desktop: larger cards
  }

  function renderCarousel() {
    const container = document.getElementById("carouselContainer");
    const cardWidth = getCardWidth();
    
    container.innerHTML = "";
    books.forEach((book, index) => {
      const div = document.createElement("div");
      div.className = `snap-start shrink-0 bg-neutral-900/80 backdrop-blur-sm rounded-2xl shadow-lg overflow-hidden transition-all duration-300`;
      div.style.width = `${cardWidth}px`;
      
      div.innerHTML = `
        <img src="${book.image}" alt="${book.title}" class="w-full h-40 sm:h-48 object-cover">
        <div class="p-4 sm:p-6">
          <h4 class="text-lg sm:text-xl font-extrabold mb-2 text-white line-clamp-2">${book.title}</h4>
          <p class="text-sm sm:text-base text-gray-200 mb-3 sm:mb-4 line-clamp-2" style="font-family:'Lato',Arial,sans-serif;">${book.description}</p>
          <span class="text-xl sm:text-2xl font-bold text-purple-400">${book.price}</span>
        </div>
      `;
      container.appendChild(div);
    });
    
    updateNavigationButtons();
  }

  function carouselNext() {
    const container = document.getElementById("carouselContainer");
    const cardWidth = getCardWidth();
    const scrollAmount = cardWidth + 24; // card width + gap
    container.scrollBy({ left: scrollAmount, behavior: "smooth" });
    
    setTimeout(updateNavigationButtons, 300);
  }

  function carouselPrev() {
    const container = document.getElementById("carouselContainer");
    const cardWidth = getCardWidth();
    const scrollAmount = cardWidth + 24; // card width + gap
    container.scrollBy({ left: -scrollAmount, behavior: "smooth" });
    
    setTimeout(updateNavigationButtons, 300);
  }

  function updateNavigationButtons() {
    const container = document.getElementById("carouselContainer");
    const prevBtn = document.getElementById("carouselPrevBtn");
    const nextBtn = document.getElementById("carouselNextBtn");
    
    if (prevBtn && nextBtn) {
      prevBtn.disabled = container.scrollLeft <= 0;
      nextBtn.disabled = container.scrollLeft >= (container.scrollWidth - container.clientWidth - 10);
    }
  }

  // Handle window resize
  let resizeTimeout;
  window.addEventListener('resize', () => {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(() => {
      renderCarousel();
    }, 250);
  });

  // Add scroll event listener for navigation button updates
  document.addEventListener("DOMContentLoaded", () => {
    renderCarousel();
    
    const container = document.getElementById("carouselContainer");
    container.addEventListener('scroll', updateNavigationButtons);
  });
</script>

<!-- Contact Section -->
<section id="contact" class="bg-neutral-800 py-16 sm:py-20 text-white overflow-hidden">
  <div class="container mx-auto px-4 sm:px-6 max-w-6xl">
    <div class="max-w-4xl mx-auto">
      <h3 class="text-3xl sm:text-4xl md:text-5xl font-bold text-center mb-12 sm:mb-16 fade-in-up" style="font-family: 'Montserrat', Arial, sans-serif;">Contact Us</h3>
      <div class="grid gap-8 md:gap-12 md:grid-cols-2">
        <!-- Contact Information -->
        <div class="fade-in-left">
          <h4 class="text-xl sm:text-2xl font-semibold mb-4 sm:mb-6" style="font-family: 'Montserrat', Arial, sans-serif;">Contact Information</h4>
          <div class="space-y-4">
            <div class="flex items-center space-x-3">
              <div class="w-8 h-8 bg-white/10 rounded-full flex items-center justify-center flex-shrink-0">📧</div>
              <span class="text-sm sm:text-base break-all" style="font-family:'Lato',Arial,sans-serif;">hello@katashastudios.com</span>
            </div>
            <div class="flex items-center space-x-3">
              <div class="w-8 h-8 bg-white/10 rounded-full flex items-center justify-center flex-shrink-0">📞</div>
              <span class="text-sm sm:text-base" style="font-family:'Lato',Arial,sans-serif;">+254 700 123456</span>
            </div>
            <div class="flex items-center space-x-3">
              <div class="w-8 h-8 bg-white/10 rounded-full flex items-center justify-center flex-shrink-0">📍</div>
              <span class="text-sm sm:text-base" style="font-family:'Lato',Arial,sans-serif;">456 Studio Lane, Nairobi</span>
            </div>
          </div>
        </div>
        <!-- Contact Form -->
        <div class="fade-in-right">
          <form method="POST" class="space-y-4" onsubmit="event.preventDefault(); contactFormSubmit(this);">
            <div class="w-full">
              <input 
                type="text" 
                name="name" 
                placeholder="Your Name" 
                required 
                class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 placeholder-white/70 text-white focus:outline-none focus:ring-2 focus:ring-white/30 focus:bg-white/20 transition-all duration-200"
            >
            </div>
            <div class="w-full">
              <input 
                type="email" 
                name="email" 
                placeholder="Your Email" 
                required 
                class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 placeholder-white/70 text-white focus:outline-none focus:ring-2 focus:ring-white/30 focus:bg-white/20 transition-all duration-200"
            >
            </div>
            <div class="w-full">
              <textarea 
                name="message" 
                placeholder="Your Message" 
                rows="4" 
                required 
                class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 placeholder-white/70 text-white focus:outline-none focus:ring-2 focus:ring-white/30 focus:bg-white/20 resize-none transition-all duration-200"
            ></textarea>
            </div>
            <button 
              type="submit" 
              class="w-full bg-white text-purple-600 py-3 rounded-lg font-semibold hover:bg-gray-100 active:bg-gray-200 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-white/50"
            >
              Send Message
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
async function contactFormSubmit(form) {
    const formData = new FormData(form);
    const submitButton = form.querySelector('button[type="submit"]');
    
    // Prevent double submissions
    submitButton.disabled = true;
    submitButton.textContent = 'Sending...';

    try {
        const response = await fetch("/contact/submit", {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                "Accept": "application/json"
            },
            body: formData
        });

        if (response.ok) {
            alert('Thank you for contacting us! We will get back to you soon.');
            form.reset();
        } else {
            const data = await response.json();
            if (data.errors) {
                alert('Please fix the following errors:\n' + Object.values(data.errors).flat().join('\n'));
            } else {
                alert('Something went wrong. Please try again later.');
            }
        }
    } catch (error) {
        console.error('Submission error:', error);
        alert('An error occurred. Please try again later.');
    } finally {
        // Re-enable button
        submitButton.disabled = false;
        submitButton.textContent = 'Send Message';
    }
}
</script>

<!-- Footer -->
<footer class="relative z-10 bg-black text-white py-12">
  <div class="container mx-auto px-6">
    <div class="text-center">
      <div class="flex items-center justify-center space-x-3 mb-4">
        <span class="text-2xl">📸</span>
        <h1 class="text-xl font-bold" style="font-family: 'Montserrat', Arial, sans-serif;">Katasha Studios</h1>
      </div>
      <p class="text-gray-400 mb-6" style="font-family:'Lato',Arial,sans-serif;">Photography & Printing | Family • Weddings • Business • More</p>
      <div class="flex justify-center space-x-6 mb-6">
        <a href="#" class="text-gray-400 hover:text-white transition-colors">Privacy Policy</a>
        <a href="#" class="text-gray-400 hover:text-white transition-colors">Terms of Service</a>
        <a href="#" class="text-gray-400 hover:text-white transition-colors">FAQ</a>
      </div>
      <p class="text-gray-500">&copy; 2025 Katasha Studios. All rights reserved.</p>
    </div>
  </div>
</footer>

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
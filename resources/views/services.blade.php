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
      image: "/images/placeholder.jpg",
    },
    {
      title: "Wedding & Event Photography",
      description: "Capture your special day with our creative and reliable wedding/event photography.",
      price: "From Ksh15,000",
      image: "/images/placeholder.jpg",
    },
    {
      title: "Passport & ID Photos",
      description: "Quick, compliant passport and ID photos with instant printing.",
      price: "From Ksh300",
      image: "/images/placeholder.jpg",
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
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PrintWorks - Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Custom scrollbar */
    ::-webkit-scrollbar { width: 8px; }
    ::-webkit-scrollbar-track { background: #f1f1f1; }
    ::-webkit-scrollbar-thumb {
      background: linear-gradient(to bottom, #8b5cf6, #ec4899);
      border-radius: 4px;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: linear-gradient(to bottom, #7c3aed, #db2777);
    }
    /* Responsive text */
    @media (max-width: 768px) {
      .text-5xl { font-size: 2.5rem; }
      .text-7xl { font-size: 3rem; }
    }
    /* Animation classes */
    .fade-in-up {
      opacity: 0;
      transform: translateY(50px);
      transition: opacity 0.8s cubic-bezier(.4,0,.2,1), transform 0.8s cubic-bezier(.4,0,.2,1);
    }
    .fade-in-up.visible {
      opacity: 1;
      transform: translateY(0);
    }
    .fade-in-left {
      opacity: 0;
      transform: translateX(-50px);
      transition: opacity 0.8s cubic-bezier(.4,0,.2,1), transform 0.8s cubic-bezier(.4,0,.2,1);
    }
    .fade-in-left.visible {
      opacity: 1;
      transform: translateX(0);
    }
    .fade-in-right {
      opacity: 0;
      transform: translateX(50px);
      transition: opacity 0.8s cubic-bezier(.4,0,.2,1), transform 0.8s cubic-bezier(.4,0,.2,1);
    }
    .fade-in-right.visible {
      opacity: 1;
      transform: translateX(0);
    }
  </style>
</head>
<body class="min-h-screen bg-gradient-to-br from-purple-50 via-pink-50 to-yellow-50 relative overflow-x-hidden font-sans">

  <!-- Floating Animated Shapes -->
  <div class="fixed inset-0 pointer-events-none z-0" aria-hidden="true">
    <div class="absolute text-4xl" style="left:10%;top:20%;animation: float 6s ease-in-out infinite;">👕</div>
    <div class="absolute text-3xl" style="left:80%;top:15%;animation: float 8s 1s ease-in-out infinite;">📚</div>
    <div class="absolute text-5xl" style="left:15%;top:60%;animation: float 7s 2s ease-in-out infinite;">🖼️</div>
    <div class="absolute text-3xl" style="left:85%;top:70%;animation: float 9s 0.5s ease-in-out infinite;">🖨️</div>
    <div class="absolute text-4xl" style="left:5%;top:80%;animation: float 6s 1.5s ease-in-out infinite;">☕</div>
    <div class="absolute text-3xl" style="left:90%;top:40%;animation: float 8s 2.5s ease-in-out infinite;">🏷️</div>
    <div class="absolute text-4xl" style="left:25%;top:10%;animation: float 7s 3s ease-in-out infinite;">📄</div>
    <div class="absolute text-3xl" style="left:70%;top:85%;animation: float 9s 1.8s ease-in-out infinite;">🎨</div>
  </div>
  <style>
    @keyframes float {
      0%, 100% { transform: translateY(0) rotate(0deg); opacity: 0.2; }
      20% { transform: translateY(-20px) rotate(5deg); }
      40% { transform: translateY(-10px) rotate(-5deg); }
      60% { transform: translateY(-15px) rotate(3deg); }
      80% { transform: translateY(0) rotate(0deg); }
    }
  </style>

  <!-- Header -->
  <header class="relative z-10 bg-white/80 backdrop-blur-md shadow-lg sticky top-0">
    <nav class="container mx-auto px-6 py-4 flex items-center justify-between">
      <div class="flex items-center space-x-3">
        <h1 class="text-2xl font-bold bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent flex items-center">
          <span class="mr-2">🖨️</span> Mambo Alphabet
        </h1>
      </div>
      <div class="hidden md:flex space-x-8">
        <a href="#home" class="text-gray-700 hover:text-purple-600 transition-colors font-medium">Home</a>
        <a href="#about" class="text-gray-700 hover:text-purple-600 transition-colors font-medium">About</a>
        <a href="#books" class="text-gray-700 hover:text-purple-600 transition-colors font-medium">Products</a>
        <a href="#contact" class="text-gray-700 hover:text-purple-600 transition-colors font-medium">Contact</a>
      </div>
      <button class="md:hidden text-gray-700" onclick="alert('Mobile menu toggled')">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>
    </nav>
  </header>

  <!-- Hero Section -->
  <section id="home" class="relative z-10 min-h-screen container mx-auto px-6 py-20 flex items-center justify-center">
    <div class="text-center max-w-4xl mx-auto">
      <h2 class="text-5xl md:text-7xl font-bold mb-6 bg-gradient-to-r from-purple-600 via-pink-600 to-yellow-500 bg-clip-text text-transparent leading-tight py-5 fade-in-up">
        Your One-Stop Printing Solution
      </h2>
      <p class="text-xl md:text-2xl text-gray-700 mb-8 leading-relaxed py-1 fade-in-up" style="transition-delay:0.2s;">
        We specialize in custom shirt printing, vibrant children's coloring books, and eye-catching business banners. Fast turnaround, quality results, and creative designs for every need!
      </p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center fade-in-up" style="transition-delay:0.4s;">
        <a href="#books" class="bg-gradient-to-r from-purple-500 to-pink-500 text-white px-8 py-4 rounded-full text-lg font-semibold hover:shadow-lg transform hover:scale-105 transition-all duration-300 text-center">View Services</a>
        <a href="#contact" class="border-2 border-purple-500 text-purple-500 px-8 py-4 rounded-full text-lg font-semibold hover:bg-purple-500 hover:text-white transition-all duration-300 text-center">Get a Quote</a>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="relative z-10 bg-white/60 backdrop-blur-sm py-20">
    <div class="container mx-auto px-6">
      <div class="max-w-4xl mx-auto text-center">
        <h3 class="text-4xl md:text-5xl font-bold mb-8 text-gray-800 fade-in-up">About Our Printing Services</h3>
        <p class="text-lg text-gray-600 mb-12 leading-relaxed fade-in-up" style="transition-delay:0.2s;">
          We bring your ideas to life with high-quality printing for shirts, children’s coloring books, and business banners. Our team combines creativity, precision, and fast service to deliver products that make an impact—whether for fun, learning, or promotion.
        </p>
        <div class="grid md:grid-cols-3 gap-8">
          <div class="bg-white/80 p-6 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300 fade-in-up" style="transition-delay:0.3s;">
            <div class="text-4xl mb-4">🎨</div>
            <h4 class="text-xl font-semibold mb-3 text-gray-800">Creative Design</h4>
            <p class="text-gray-600">Beautifully illustrated books that capture children&#39;s imagination and make learning visually engaging.</p>
          </div>
          <div class="bg-white/80 p-6 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300 fade-in-up" style="transition-delay:0.5s;">
            <div class="text-4xl mb-4">🧠</div>
            <h4 class="text-xl font-semibold mb-3 text-gray-800">Educational Content</h4>
            <p class="text-gray-600">Carefully crafted content that follows proven educational methods to enhance learning outcomes.</p>
          </div>
          <div class="bg-white/80 p-6 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300 fade-in-up" style="transition-delay:0.7s;">
            <div class="text-4xl mb-4">❤️</div>
            <h4 class="text-xl font-semibold mb-3 text-gray-800">Child-Friendly</h4>
            <p class="text-gray-600">Safe, age-appropriate content designed specifically for young learners with their development in mind.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Books/Products Section -->
  <section id="books" class="relative z-10 py-20">
    <div class="container mx-auto px-6">
      <h3 class="text-4xl md:text-5xl font-bold text-center mb-16 text-gray-800 fade-in-up">Our Printing Products &amp; Services</h3>
      <div class="relative max-w-6xl mx-auto">
        <div class="flex items-center justify-between mb-6">
          <button onclick="carouselPrev()" id="carouselPrevBtn" class="px-4 py-2 rounded-full bg-purple-100 text-purple-600 font-bold shadow hover:bg-purple-200 disabled:opacity-50">&#8592; Prev</button>
          <button onclick="carouselNext()" id="carouselNextBtn" class="px-4 py-2 rounded-full bg-purple-100 text-purple-600 font-bold shadow hover:bg-purple-200 disabled:opacity-50">Next &#8594;</button>
        </div>
        <div class="flex flex-row justify-center items-center gap-8" id="carouselContainer">
          <!-- Carousel items will be injected here -->
        </div>
      </div>
    </div>
  </section>
  <script>
    // Carousel logic
    const books = [
      {
        id: 1,
        title: 'Custom Shirt Printing',
        description: 'High-quality t-shirt printing for events, businesses, and personal use. Choose your design and color!',
        price: 'From 9.99',
        image: 'https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=400&q=80',
      },
      {
        id: 2,
        title: 'Children’s Coloring Books',
        description: 'Fun and educational coloring books for kids. Vibrant pages, creative themes, and bulk discounts.',
        price: 'From 5.99',
        image: 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=400&q=80',
      },
      {
        id: 3,
        title: 'Business Banners',
        description: 'Durable, eye-catching banners for promotions, events, and storefronts. Custom sizes available.',
        price: 'From 19.99',
        image: 'https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=400&q=80',
      },
    ];
    let carouselStart = 0;
    function renderCarousel() {
      const container = document.getElementById('carouselContainer');
      container.innerHTML = '';
      for (let i = carouselStart; i < Math.min(carouselStart + 3, books.length); i++) {
        const book = books[i];
        const div = document.createElement('div');
        div.className = 'bg-white/80 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden group hover:scale-105';
        div.style = 'min-width:320px;max-width:400px;width:100%';
        div.innerHTML = `
          <img src="${book.image}" alt="Book Image" class="h-48 w-full object-cover" />
          <div class="p-6">
            <h4 class="text-xl font-semibold mb-2 text-gray-800">${book.title}</h4>
            <p class="text-gray-600 mb-4">${book.description}</p>
            <div class="flex justify-between items-center">
              <span class="text-2xl font-bold text-purple-600">${book.price}</span>
            </div>
          </div>
        `;
        container.appendChild(div);
      }
      document.getElementById('carouselPrevBtn').disabled = carouselStart === 0;
      document.getElementById('carouselNextBtn').disabled = carouselStart + 3 >= books.length;
    }
    function carouselNext() {
      if (carouselStart + 3 < books.length) {
        carouselStart++;
        renderCarousel();
      }
    }
    function carouselPrev() {
      if (carouselStart > 0) {
        carouselStart--;
        renderCarousel();
      }
    }
    document.addEventListener('DOMContentLoaded', renderCarousel);
  </script>

  <!-- Contact Section -->
  <section id="contact" class="relative z-10 bg-gradient-to-r from-purple-600 to-pink-600 py-20 text-white">
    <div class="container mx-auto px-6">
      <div class="max-w-4xl mx-auto">
        <h3 class="text-4xl md:text-5xl font-bold text-center mb-16 fade-in-up">Request a Quote or Contact Us</h3>
        <div class="grid md:grid-cols-2 gap-12">
          <div class="fade-in-left">
            <h4 class="text-2xl font-semibold mb-6">Contact Information</h4>
            <div class="space-y-4">
              <div class="flex items-center space-x-3">
                <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center">📧</div>
                <span>hello@printworks.com</span>
              </div>
              <div class="flex items-center space-x-3">
                <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center">📞</div>
                <span>+1 (555) 987-6543</span>
              </div>
              <div class="flex items-center space-x-3">
                <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center">📍</div>
                <span>456 Print Avenue, Business City</span>
              </div>
            </div>
          </div>
          <form class="space-y-4 fade-in-right" onsubmit="event.preventDefault(); contactFormSubmit(this);">
            <input type="text" name="name" placeholder="Your Name" required class="w-full px-4 py-3 rounded-lg bg-white/20 backdrop-blur-sm border border-white/30 placeholder-white/70 text-white focus:outline-none focus:ring-2 focus:ring-white/50">
            <input type="email" name="email" placeholder="Your Email" required class="w-full px-4 py-3 rounded-lg bg-white/20 backdrop-blur-sm border border-white/30 placeholder-white/70 text-white focus:outline-none focus:ring-2 focus:ring-white/50">
            <textarea name="message" placeholder="Your Message" rows="4" required class="w-full px-4 py-3 rounded-lg bg-white/20 backdrop-blur-sm border border-white/30 placeholder-white/70 text-white focus:outline-none focus:ring-2 focus:ring-white/50 resize-none"></textarea>
            <button type="submit" class="w-full bg-white text-purple-600 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-300">Send Message</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <script>
    function contactFormSubmit(form) {
      // Simple feedback, replace with AJAX as needed
      alert('Thank you for contacting us! We will get back to you soon.');
      form.reset();
    }
  </script>

  <!-- Footer -->
  <footer class="relative z-10 bg-gray-900 text-white py-12">
    <div class="container mx-auto px-6">
      <div class="text-center">
        <div class="flex items-center justify-center space-x-3 mb-4">
          <span class="text-2xl">🖨️</span>
          <h1 class="text-xl font-bold">Mambo Alphabet</h1>
        </div>
        <p class="text-gray-400 mb-6">Quality printing for shirts, books, banners, and more</p>
        <div class="flex justify-center space-x-6 mb-6">
          <a href="#" class="text-gray-400 hover:text-white transition-colors">Privacy Policy</a>
          <a href="#" class="text-gray-400 hover:text-white transition-colors">Terms of Service</a>
          <a href="#" class="text-gray-400 hover:text-white transition-colors">FAQ</a>
        </div>
        <p class="text-gray-500">&copy; 2025 PrintWorks. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <!-- Scroll Animation Script -->
  <script>
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
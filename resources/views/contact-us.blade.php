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
        {{-- <div class="fade-in-right">
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
        </div> --}} 
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
            window.location.href = '/success-page'
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
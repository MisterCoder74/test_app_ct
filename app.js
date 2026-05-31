/* Pricing toggle logic */
(function(){
  const toggle = document.getElementById('billingToggle');
  const amounts = document.querySelectorAll('.amount');
  function refreshPrices(yearly){
    amounts.forEach(el => {
      const monthly = el.dataset.monthly;
      const yearlyPrice = el.dataset.yearly;
      el.textContent = yearly ? yearlyPrice : monthly;
    });
    // optional additional formatting could go here
  }
  // default: monthly
  refreshPrices(false);
  if (toggle) {
    toggle.addEventListener('change', function(){
      refreshPrices(this.checked);
    });
  }
})();

/* Testimonials carousel */
(function(){
  const slides = document.querySelectorAll('#testimonialCarousel .slide');
  let idx = 0;
  function show(i){
    slides.forEach((s, k) => s.classList.toggle('active', k === i));
  }
  function next(){
    idx = (idx + 1) % slides.length;
    show(idx);
  }
  function prev(){
    idx = (idx - 1 + slides.length) % slides.length;
    show(idx);
  }
  document.getElementById('nextBtn').addEventListener('click', next);
  document.getElementById('prevBtn').addEventListener('click', prev);
  // auto-rotate
  setInterval(next, 4500);
  show(idx);
})();

/* Optional: smooth anchor scrolling for single-page experience */
(function(){
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const id = a.getAttribute('href').slice(1);
      const el = document.getElementById(id);
      if (el) {
        e.preventDefault();
        el.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });
})();

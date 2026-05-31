<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>CertainThing — BYOK-based Vibe Coding Tool</title>
  <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
  <header class="site-header" aria-label="Site header">
    <div class="container header-inner">
      <div class="brand" aria-label="CertainThing logo">
        <span class="brand-mark"></span>
        <span class="brand-name">CertainThing</span>
      </div>
      <nav class="main-nav" aria-label="Main navigation">
        <a href="#features">Features</a>
        <a href="#pricing">Pricing</a>
        <a href="#testimonials">Testimonials</a>
        <a href="#cta" class="btn-ghost" aria-label="Get started">Get Started</a>
      </nav>
    </div>
  </header>

  <main>
    <!-- HERO -->
    <section class="hero" aria-label="Hero">
      <div class="container hero-content">
        <h1>Vibe-coded tooling built on BYOK security</h1>
        <p class="subtitle">CertainThing brings a delightful coding vibe to your workflows, with Bring-Your-Own-Key security baked in.</p>
        <div class="cta-row">
          <a href="#pricing" class="btn btn-primary">Start Free</a>
          <a href="#features" class="btn btn-secondary" aria-label="Learn more about features">Explore Features</a>
        </div>
      </div>
      <div class="hero-visual" aria-hidden="true">
        <!-- decorative gradient shapes -->
        <svg width="100%" height="100%" viewBox="0 0 600 400" preserveAspectRatio="xMidYMid meet">
          <defs>
            <linearGradient id="grad1" x1="0" y1="0" x2="1" y2="1">
              <stop offset="0%" stop-color="#7C3AED"/>
              <stop offset="100%" stop-color="#14B8A6"/>
            </linearGradient>
          </defs>
          <circle cx="120" cy="120" r="100" fill="url(#grad1)" fill-opacity="0.25"/>
          <rect x="260" y="40" width="200" height="180" rx="28" fill="url(#grad1)" fill-opacity="0.25"/>
          <circle cx="460" cy="300" r="90" fill="url(#grad1)" fill-opacity="0.25"/>
        </svg>
      </div>
    </section>

    <!-- FEATURES -->
    <section id="features" class="features" aria-label="Features">
      <div class="container">
        <h2>What makes CertainThing different</h2>
        <p class="section-subtitle">Vibe-coded tooling with BYOK security for teams that value control and speed.</p>

        <div class="grid features-grid">
          <article class="feature-card">
            <div class="icon" aria-hidden="true">
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M12 3l3 6 6 1-4 4 1 6-6-3-6 3 1-6-4-4 6-1z" />
              </svg>
            </div>
            <h3>BYOK Security</h3>
            <p>Bring Your Own Key to govern access and encryption in your workflows.</p>
          </article>

          <article class="feature-card">
            <div class="icon" aria-hidden="true">
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M3 7h18M3 12h18M3 17h18" />
              </svg>
            </div>
            <h3>Vibe Coding</h3>
            <p>Express complex ideas with delightful, human-friendly syntax patterns.</p>
          </article>

          <article class="feature-card">
            <div class="icon" aria-hidden="true">
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M12 3l9 4-9 4-9-4 9-4z" />
                <path d="M3 11l9 4 9-4" />
              </svg>
            </div>
            <h3>Team Collaboration</h3>
            <p>Share, review, and iterate with real-time feedback.</p>
          </article>

          <article class="feature-card">
            <div class="icon" aria-hidden="true">
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M4 7h16M4 12h16M4 17h7" />
              </svg>
            </div>
            <h3>Lightning-fast IDE</h3>
            <p>Instant code-views, hot-reload, and minimal latency.</p>
          </article>
        </div>
      </div>
    </section>

    <!-- PRICING -->
    <section id="pricing" class="pricing" aria-label="Pricing">
      <div class="container">
        <h2>Simple, transparent pricing</h2>
        <p class="section-subtitle">Choose a plan that fits your team. Cancel anytime.</p>

        <div class="pricing-toggle" aria-label="Billing toggle">
          <span>Monthly</span>
          <label class="switch">
            <input type="checkbox" id="billingToggle" />
            <span class="slider"></span>
          </label>
          <span>Yearly</span>
        </div>

        <div class="pricing-grid" role="table" aria-label="Pricing options">
          <!-- Starter -->
          <article class="card pricing-card" role="row">
            <h3>Starter</h3>
            <div class="price" aria-label="Starter price">
              <span class="currency">$</span><span class="amount" data-monthly="19" data-yearly="190">19</span><span class="per">/mo</span>
            </div>
            <ul>
              <li>Up to 3 projects</li>
              <li>Basic templates</li>
              <li>Community support</li>
            </ul>
            <a href="#cta" class="btn btn-primary" role="button">Start Free</a>
          </article>

          <!-- Pro (featured) -->
          <article class="card pricing-card featured" role="row">
            <h3>Pro</h3>
            <div class="price" aria-label="Pro price">
              <span class="currency">$</span><span class="amount" data-monthly="49" data-yearly="490">49</span><span class="per">/mo</span>
            </div>
            <ul>
              <li>Unlimited projects</li>
              <li>Advanced templates</li>
              <li>Priority support</li>
            </ul>
            <a href="#cta" class="btn btn-primary" role="button">Get Pro</a>
          </article>

          <!-- Scale -->
          <article class="card pricing-card" role="row">
            <h3>Scale</h3>
            <div class="price" aria-label="Scale price">
              <span class="currency">$</span><span class="amount" data-monthly="99" data-yearly="990">99</span><span class="per">/mo</span>
            </div>
            <ul>
              <li>Everything in Pro</li>
              <li>Security audits</li>
              <li>Dedicated success manager</li>
            </ul>
            <a href="#cta" class="btn btn-primary" role="button">Contact Sales</a>
          </article>
        </div>
      </div>
    </section>

    <!-- TESTIMONIALS -->
    <section id="testimonials" class="testimonials" aria-label="Testimonials">
      <div class="container">
        <h2>What teams say</h2>
        <p class="section-subtitle">Loved by developers and product teams worldwide.</p>

        <div class="carousel" id="testimonialCarousel" aria-roledescription="carousel" aria-label="Testimonials">
          <button class="nav-btn" id="prevBtn" aria-label="Previous testimonial">‹</button>
          <div class="track" role="group" aria-label="Testimonials">
            <div class="slide active">
              <blockquote>"CertainThing helped our team ship a new feature in days, not weeks. BYOK gives us peace of mind."</blockquote>
              <cite>- Alex R., Dev Lead</cite>
            </div>
            <div class="slide">
              <blockquote>"The vibe coding metaphor finally clicked for our designers and engineers. The workflow is delightful."</blockquote>
              <cite>- Priya S., CTO</cite>
            </div>
            <div class="slide">
              <blockquote>"Support is fantastic and the product scales with our security requirements."</blockquote>
              <cite>- Mateo D., Engineering Manager</cite>
            </div>
          </div>
          <button class="nav-btn" id="nextBtn" aria-label="Next testimonial">›</button>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section id="cta" class="cta" aria-label="Call to Action">
      <div class="container">
        <h2>Ready to vibe-code with confidence?</h2>
        <p>Join dozens of teams shipping faster with secure, delightful tooling.</p>
        <a href="#pricing" class="btn btn-cta" role="button">Start Free Trial</a>
      </div>
    </section>
  </main>

  <footer class="site-footer" aria-label="Footer">
    <div class="container footer-content">
      <span>© <?php echo date('Y'); ?> CertainThing</span>
      <nav aria-label="Footer links">
        <a href="#pricing">Pricing</a>
        <a href="#features">Features</a>
        <a href="#testimonials">Testimonials</a>
      </nav>
    </div>
  </footer>

  <script src="app.js?v=<?php echo time(); ?>"></script>
</body>
</html>

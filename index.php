<?php require __DIR__ . '/ajax.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-0LY0HY7L01');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tasty Flavor Kitchen - High-heat wok hei stir-fries, hand-pulled artisan noodle bowls, steamed dim sum towers, and chili garlic reductions.">
    <title>Tasty Flavor Kitchen | Wok Hei Street Food Atelier</title>
    
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Header Navigation -->
    <header>
        <nav class="navbar">
            <a href="index.php" class="logo">Tasty<span>FlavorKitchen</span></a>
            <ul class="nav-links">
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="collections.html">Collections</a></li>
                <li><a href="blog/index.html">Blogs</a></li>
                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                <li><a href="terms.html">Terms & Conditions</a></li>
            </ul>
            <button class="menu-btn" aria-label="Toggle Navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        
        <!-- SECTION 1: SIZZLING FLAME-WOK KITCHEN HERO -->
        <section class="hero-kitchen-section">
            <div class="hero-kitchen-container">
                
                <!-- Left Text Column -->
                <div class="hero-kitchen-text reveal-item">
                    <span class="hero-badge">FLAME-GROOMED STREET KITCHEN /// WOK HEI 5.0</span>
                    <h1><span class="gradient-text">Tasty Flavor Kitchen</span> & Wok Hei Atelier</h1>
                    <p class="hero-desc">Explore high-heat wok hei stir-fries, hand-pulled artisan ramen bowls, steamed bamboo dim sum, and artisanal chili garlic oil reductions.</p>
                    
                    <div class="hero-btns" style="justify-content: flex-start; margin-bottom: 2.5rem;">
                        <a href="collections.html" class="btn btn-primary">Explore Wok Kitchen</a>
                        <a href="#blueprint" class="btn btn-secondary">Wok Hei Flavor Blueprint</a>
                    </div>

                    <div style="display: flex; gap: 2rem; border-top: 1px solid rgba(255, 123, 0, 0.25); padding-top: 2rem; flex-wrap: wrap;">
                        <div><strong style="color: var(--color-primary); font-size: 1.6rem; display: block; font-family: var(--font-heading);">1000°F Flame</strong> <span style="font-size: 0.8rem; color: var(--color-fg-muted);">Breath of the Wok</span></div>
                        <div><strong style="color: var(--color-primary); font-size: 1.6rem; display: block; font-family: var(--font-heading);">100% Organic</strong> <span style="font-size: 0.8rem; color: var(--color-fg-muted);">Hand-Pulled Noodles</span></div>
                        <div><strong style="color: var(--color-primary); font-size: 1.6rem; display: block; font-family: var(--font-heading);">18-Hour Broth</strong> <span style="font-size: 0.8rem; color: var(--color-fg-muted);">Slow-Simmered Tonkotsu</span></div>
                    </div>
                </div>

                <!-- Right Hero Image Column with Floating Review Pill -->
                <div class="hero-kitchen-image reveal-item">
                    <div class="hero-kitchen-img-wrapper">
                        <img src="img/hero_kitchen.jpg" alt="Chef tossing flaming wok stir-fry noodles with dragon amber flames" loading="lazy">
                    </div>
                    
                    <div class="floating-badge">
                        <div class="floating-badge-icon">🥢</div>
                        <div>
                            <strong style="color: var(--color-fg); display: block; font-size: 1rem;">4.9 ★ (5,800+ Wok Hei Enthusiasts)</strong>
                            <span style="font-size: 0.8rem; color: var(--color-primary);">Tasty Flavor Kitchen</span>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- SECTION 2: CONTINUOUS DRAGON AMBER MARQUEE TICKER BAND -->
        <div class="marquee-band">
            <div class="marquee-content">
                TASTY FLAVOR KITCHEN /// HIGH-HEAT WOK HEI /// ARTISANAL FLAMED NOODLES /// UMAMI SAUCE REDUCTIONS /// STEAMED DIM SUM TOWERS /// CHILI CRISP REDUCTIONS ///
            </div>
            <div class="marquee-content">
                TASTY FLAVOR KITCHEN /// HIGH-HEAT WOK HEI /// ARTISANAL FLAMED NOODLES /// UMAMI SAUCE REDUCTIONS /// STEAMED DIM SUM TOWERS /// CHILI CRISP REDUCTIONS ///
            </div>
        </div>

        <!-- SECTION 3: 4-COLUMN WOK KITCHEN CAPSULES -->
        <section style="padding: 6rem 2rem 3rem;">
            <div class="section-title reveal-item" style="text-align: center;">
                <h2>THE WOK HEI KITCHEN CAPSULES</h2>
                <p>Cooked over 1000°F jet burners with seasoned carbon steel woks and hand-pulled noodles.</p>
            </div>

            <div class="product-grid reveal-item">
                
                <!-- Capsule 1 -->
                <div class="luxury-card" onclick="window.location.href='collections.html'">
                    <span class="blog-tag">CAPSULE 01</span>
                    <h3>High-Heat Wok Hei Stir-Fries</h3>
                    <p class="blog-excerpt">Smoky 1000°F flame-caramelized beef chow fun with scallions, bean sprouts, and dark soy reduction.</p>
                </div>

                <!-- Capsule 2 -->
                <div class="luxury-card" onclick="window.location.href='collections.html'">
                    <span class="blog-tag">CAPSULE 02</span>
                    <h3>Hand-Pulled Artisan Noodle Bowls</h3>
                    <p class="blog-excerpt">Springy wheat noodles pulled to order, served in 18-hour tonkotsu broth with tender pork belly chashu.</p>
                </div>

                <!-- Capsule 3 -->
                <div class="luxury-card" onclick="window.location.href='collections.html'">
                    <span class="blog-tag">CAPSULE 03</span>
                    <h3>Steamed Dim Sum & Dumpling Towers</h3>
                    <p class="blog-excerpt">Bamboo steamer baskets loaded with handmade pork & shrimp dumplings, siumai, and chili dipping oil.</p>
                </div>

            </div>
        </section>

        <!-- SECTION 4: THE 1000°F WOK HEI BREATH & SEASONED CAST-IRON BLUEPRINT -->
        <section id="blueprint" style="background-color: var(--color-secondary); border-top: 1px solid var(--color-border); border-bottom: 1px solid var(--color-border);">
            <div class="section-title reveal-item" style="text-align: center;">
                <h2>THE 1000°F WOK HEI FLAVOR BLUEPRINT</h2>
                <p>Deconstructing the breath of the wok, carbon steel patina seasoning, and Maillard flame searing.</p>
            </div>
            
            <div class="luxury-card manifesto-box reveal-item" style="max-width: 980px; margin: 0 auto; padding: 4rem 3.5rem;">
                <div style="display: flex; gap: 3.5rem; align-items: center; flex-wrap: wrap;">
                    <div style="flex: 1; min-width: 300px; height: 380px; border-radius: 14px; overflow: hidden; border: 1px solid var(--color-border);">
                        <img src="img/craft.jpg" alt="Close-up of master wok chef seasoning seasoned carbon steel wok over 1000°F jet burner" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div style="flex: 1.3; min-width: 300px;">
                        <span class="hero-badge">WOK HEI PROTOCOL</span>
                        <h3 style="font-size: 2rem; margin-top: 0.5rem; margin-bottom: 1.2rem;">1000°F Jet Burners & Carbon Steel Patina</h3>
                        <p style="color: var(--color-fg-muted); font-size: 1.05rem; line-height: 1.9; margin-bottom: 1.5rem;">"Commercial fast-food Asian joints use electric flat top griddles that boil noodles in their own moisture. At Tasty Flavor Kitchen, our wok masters blast 1000°F jet flames under seasoned carbon steel woks. Oil droplets vaporize instantly, infusing every noodle strand with authentic smoky Wok Hei ('Breath of the Wok')."</p>
                        <p style="color: var(--color-primary); font-weight: 700; font-family: var(--font-heading); font-size: 1.1rem; letter-spacing: 1px;">&mdash; MASTER WOK CHEF &bull; TASTY FLAVOR KITCHEN</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 5: CURATED TASTY FLAVOR KITCHEN SELECTIONS GRID -->
        <section id="kitchen-catalog">
            <div class="section-title reveal-item">
                <h2>CURATED WOK HEI STREET FOOD SELECTIONS</h2>
                <p>Order flaming wok stir-fries, hand-pulled ramen, and steamed dim sum baskets.</p>
            </div>
            
            <div class="product-grid">
                
                <!-- Item 1 -->
                <div class="luxury-card kitchen-card reveal-item" data-category="stirfries">
                    <div class="product-img-wrapper">
                        <span class="category-tag">WOK HEI STIR-FRY</span>
                        <span class="price-badge">$24</span>
                        <img src="img/kitchen1.jpg" alt="Sizzling wok hei beef chow fun noodles with caramelized scallions" loading="lazy">
                    </div>
                    <div class="rating-stars">★★★★★ &bull; (640 Foodie Reviews)</div>
                    <h3>Smoky Wok Hei Beef Chow Fun</h3>
                    <p class="blog-excerpt">Wide rice noodles flash-seared at 1000°F with sliced flank steak, bean sprouts, and dark soy reduction.</p>
                    <div class="product-footer">
                        <span style="font-size: 0.85rem; color: var(--color-primary); font-weight: 600;">Wok Temp: 1000°F Jet Flame</span>
                        <a href="collections.html" class="btn btn-primary" style="padding: 0.6rem 1.2rem; font-size: 0.75rem;">View Menu Dish</a>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="luxury-card kitchen-card reveal-item" data-category="dimsum">
                    <div class="product-img-wrapper">
                        <span class="category-tag">DIM SUM TOWER</span>
                        <span class="price-badge">$18</span>
                        <img src="img/kitchen2.jpg" alt="Steamed bamboo dim sum basket with handmade pork & shrimp dumplings" loading="lazy">
                    </div>
                    <div class="rating-stars">★★★★★ &bull; (520 Foodie Reviews)</div>
                    <h3>Steamed Bamboo Pork & Shrimp Dumpling Basket</h3>
                    <p class="blog-excerpt">Handmade dumplings stuffed with organic Berkshire pork, wild prawns, and scallion chili oil dip.</p>
                    <div class="product-footer">
                        <span style="font-size: 0.85rem; color: var(--color-primary); font-weight: 600;">Steamer: Natural Bamboo Wood</span>
                        <a href="collections.html" class="btn btn-primary" style="padding: 0.6rem 1.2rem; font-size: 0.75rem;">View Menu Dish</a>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="luxury-card kitchen-card reveal-item" data-category="noodles">
                    <div class="product-img-wrapper">
                        <span class="category-tag">RAMEN BOWL</span>
                        <span class="price-badge">$22</span>
                        <img src="img/kitchen3.jpg" alt="Rich umami ramen bowl with slow-braised pork belly chashu and soft-boiled egg" loading="lazy">
                    </div>
                    <div class="rating-stars">★★★★★ &bull; (490 Foodie Reviews)</div>
                    <h3>18-Hour Tonkotsu Pork Belly Ramen</h3>
                    <p class="blog-excerpt">Hand-pulled springy wheat noodles in collagen-rich pork bone broth with braised chashu and ajitsuke egg.</p>
                    <div class="product-footer">
                        <span style="font-size: 0.85rem; color: var(--color-primary); font-weight: 600;">Broth: 18-Hour Slow Simmer</span>
                        <a href="collections.html" class="btn btn-primary" style="padding: 0.6rem 1.2rem; font-size: 0.75rem;">View Menu Dish</a>
                    </div>
                </div>

            </div>
            
            <div style="text-align: center; margin-top: 4rem;" class="reveal-item">
                <a href="collections.html" class="btn btn-secondary">Explore Complete Tasty Flavor Catalog</a>
            </div>
        </section>

        <!-- SECTION 6: 1000°F WOK HEI & COMMERCIAL FAST-FOOD FRYER AUDIT MATRIX TABLE -->
        <section class="comparison-section">
            <div class="section-title reveal-item">
                <h2>WOK HEI QUALITY & COOKING AUDIT MATRIX</h2>
                <p>Compare Tasty Flavor Kitchen standards against cheap commercial fast-food takeaways.</p>
            </div>
            
            <div class="luxury-card reveal-item" style="padding: 2.5rem; overflow-x: auto; border-radius: 16px;">
                <table style="width: 100%; border-collapse: collapse; text-align: left; min-width: 600px;">
                    <thead>
                        <tr style="border-bottom: 2px solid var(--color-border); font-weight: 600;">
                            <th style="padding: 1rem; font-family: var(--font-heading); font-size: 1.4rem;">Culinary Spec</th>
                            <th style="padding: 1rem; color: var(--color-primary); font-family: var(--font-heading); font-size: 1.4rem;">Tasty Flavor Kitchen</th>
                            <th style="padding: 1rem; color: var(--color-fg-muted); font-family: var(--font-heading); font-size: 1.4rem;">Commercial Takeaway Chains</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="border-bottom: 1px solid var(--color-border);">
                            <td style="padding: 1rem; font-weight: 600;">Burner Temperature & Wok Hei</td>
                            <td style="padding: 1rem; color: var(--color-primary);">1000°F High-Pressure Jet Burner Flame Wok Hei</td>
                            <td style="padding: 1rem; color: var(--color-fg-muted);">Low-temp electric flat-tops that boil noodles</td>
                        </tr>
                        <tr style="border-bottom: 1px solid var(--color-border);">
                            <td style="padding: 1rem; font-weight: 600;">Noodle Crafting</td>
                            <td style="padding: 1rem; color: var(--color-accent);">100% Hand-Pulled Wheat & Fresh Rice Flat Noodles</td>
                            <td style="padding: 1rem; color: var(--color-fg-muted);">Dried instant factory noodles with preservatives</td>
                        </tr>
                        <tr style="border-bottom: 1px solid var(--color-border);">
                            <td style="padding: 1rem; font-weight: 600;">Ramen Broth Preparation</td>
                            <td style="padding: 1rem; color: var(--color-accent);">18-Hour Slow-Simmered Tonkotsu Pork Bone Broth</td>
                            <td style="padding: 1rem; color: var(--color-fg-muted);">Water mixed with MSG powder broth bases</td>
                        </tr>
                        <tr style="border-bottom: 1px solid var(--color-border);">
                            <td style="padding: 1rem; font-weight: 600;">Chili Oil & Sauces</td>
                            <td style="padding: 1rem; color: var(--color-accent);">House-Made Chili Crisp & Garlic Infused Oil</td>
                            <td style="padding: 1rem; color: var(--color-fg-muted);">Mass-produced high-fructose corn syrup packet sauces</td>
                        </tr>
                        <tr>
                            <td style="padding: 1rem; font-weight: 600;">Dumpling Preparation</td>
                            <td style="padding: 1rem; color: var(--color-accent);">Hand-Pleated Fresh Berkshire Pork & Wild Shrimp</td>
                            <td style="padding: 1rem; color: var(--color-fg-muted);">Frozen machine-stamped processed dumplings</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- SECTION 7: FOODIE REVIEWS -->
        <section id="testimonials">
            <div class="section-title reveal-item">
                <h2>WOK HEI FOODIE REVIEWS</h2>
                <p>Read reviews from street food critics, noodle lovers, and culinary travelers.</p>
            </div>
            
            <div class="testimonials-grid">
                
                <!-- Review 1 -->
                <div class="luxury-card testimonial-card reveal-item">
                    <div class="quote-icon">“</div>
                    <div class="rating-stars">★★★★★</div>
                    <p style="color: var(--color-fg-muted); font-size: 1rem; line-height: 1.8;">"The beef chow fun has that unmistakable smoky Wok Hei flavor that you usually only find in the night markets of Hong Kong!"</p>
                    <div class="guest-profile">
                        <div class="guest-avatar">KW</div>
                        <div>
                            <strong style="color: var(--color-fg); display: block;">Kenji W.</strong>
                            <span style="font-size: 0.8rem; color: var(--color-primary);">Food Critic &bull; San Francisco</span>
                        </div>
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="luxury-card testimonial-card reveal-item">
                    <div class="quote-icon">“</div>
                    <div class="rating-stars">★★★★★</div>
                    <p style="color: var(--color-fg-muted); font-size: 1rem; line-height: 1.8;">"The 18-hour tonkotsu broth is so rich and creamy, and the hand-pulled noodles have the perfect springy texture."</p>
                    <div class="guest-profile">
                        <div class="guest-avatar">SL</div>
                        <div>
                            <strong style="color: var(--color-fg); display: block;">Samantha L.</strong>
                            <span style="font-size: 0.8rem; color: var(--color-primary);">Noodle Enthusiast &bull; New York</span>
                        </div>
                    </div>
                </div>

                <!-- Review 3 -->
                <div class="luxury-card testimonial-card reveal-item">
                    <div class="quote-icon">“</div>
                    <div class="rating-stars">★★★★★</div>
                    <p style="color: var(--color-fg-muted); font-size: 1rem; line-height: 1.8;">"Best dim sum in town. The house-made chili crisp oil adds an incredible crunchy, spicy kick to every dumpling."</p>
                    <div class="guest-profile">
                        <div class="guest-avatar">MC</div>
                        <div>
                            <strong style="color: var(--color-fg); display: block;">Marcus C.</strong>
                            <span style="font-size: 0.8rem; color: var(--color-primary);">Culinary Traveler &bull; Seattle</span>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- SECTION 8: INTERACTIVE ACCORDION FAQ -->
        <section id="faq" style="background-color: var(--color-secondary); border-top: 1px solid var(--color-border); border-bottom: 1px solid var(--color-border);">
            <div class="section-title reveal-item" style="text-align: center;">
                <h2>FREQUENTLY ASKED QUESTIONS</h2>
                <p>Everything you need to know about Wok Hei cooking, noodle pulling, and dietary options.</p>
            </div>
            
            <div class="faq-container reveal-item">
                
                <!-- FAQ 1 -->
                <div class="faq-item active">
                    <div class="faq-question">
                        <h3>What is Wok Hei and why is it essential for Asian cooking?</h3>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Wok Hei translates to "Breath of the Wok". It refers to the distinct smoky, charred aroma achieved only when oil and moisture vaporize over 1000°F jet flames in a seasoned carbon steel wok.</p>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Are hand-pulled noodles fresh made daily?</h3>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Yes! Our noodle master kneads organic wheat flour dough daily and pulls every portion fresh to order for maximum elasticity and chew.</p>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you offer vegetarian or vegan wok dishes?</h3>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>We feature vegan wok stir-fries with organic tofu, wild shiitake mushrooms, and vegetable broths cooked in dedicated plant-based woks.</p>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Is your house-made chili crisp available for purchase?</h3>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Yes! Our signature roasted chili garlic crisp oil is bottled fresh in-house for take-home enjoyment.</p>
                    </div>
                </div>

            </div>
        </section>

        <!-- REGISTRY NEWSLETTER & FOOTER -->
        <section class="newsletter-section reveal-item">
            <div class="luxury-card newsletter-box">
                <h2>JOIN THE TASTY WOK CLUB</h2>
                <p>Subscribe to our wok kitchen newsletter. Receive private invitations to secret street food pop-ups, chili crisp masterclasses, and wok hei recipes.</p>
                <form class="newsletter-form" onsubmit="event.preventDefault(); alert('Thank you for joining the Tasty Wok Club!');">
                    <input type="email" class="newsletter-input" placeholder="Enter your email address" required aria-label="Email address">
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
            </div>
        </section>

        <!-- Recent Gazette Articles -->
        <section class="recent-blogs">
            <div class="section-title reveal-item">
                <h2>FROM THE TASTY WOK GAZETTE</h2>
                <p>Expert articles on wok hei science, hand-pulled noodles, and chili crisp reductions.</p>
            </div>
            
            <div class="blog-grid">
                <!-- Blog 1 -->
                <div class="luxury-card reveal-item">
                    <div class="feature-img-wrapper">
                        <img src="img/journal1.jpg" alt="The science of Wok Hei: Breath of the wok high-heat caramelization" loading="lazy">
                    </div>
                    <div class="feature-content">
                        <span class="blog-tag">Wok Science</span>
                        <h3>Mastering High-Heat Wok Hei</h3>
                        <p class="blog-excerpt">1000°F jet burner physics, oil vaporization, and Maillard searing.</p>
                        <a href="blog/mastering-the-art-of-high-heat-wok-hei-cooking.html" class="blog-link">Read Article &rarr;</a>
                    </div>
                </div>

                <!-- Blog 2 -->
                <div class="luxury-card reveal-item">
                    <div class="feature-img-wrapper">
                        <img src="img/craft.jpg" alt="Seasoning and maintaining carbon steel woks for lifetime cooking" loading="lazy">
                    </div>
                    <div class="feature-content">
                        <span class="blog-tag">Wok Care</span>
                        <h3>Seasoning Carbon Steel Woks</h3>
                        <p class="blog-excerpt">Building a natural non-stick patina with oil polymerization.</p>
                        <a href="blog/seasoning-and-maintaining-carbon-steel-woks.html" class="blog-link">Read Article &rarr;</a>
                    </div>
                </div>

                <!-- Blog 3 -->
                <div class="luxury-card reveal-item">
                    <div class="feature-img-wrapper">
                        <img src="img/journal2.jpg" alt="Hand-pulled noodle craft: From organic wheat dough to springy strands" loading="lazy">
                    </div>
                    <div class="feature-content">
                        <span class="blog-tag">Noodle Craft</span>
                        <h3>Hand-Pulled Noodle Crafting</h3>
                        <p class="blog-excerpt">From organic wheat flour dough stretching to boiling cauldron perfection.</p>
                        <a href="blog/hand-pulled-noodle-crafting-from-dough-to-bowl.html" class="blog-link">Read Article &rarr;</a>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer (Sleek Compact Logo: 1.35rem) -->
    <footer>
        <div class="footer-container">
            <div class="footer-col" style="flex: 1.5;">
                <a href="index.php" class="logo" style="margin-bottom: 2rem; display: inline-block;">Tasty<span>FlavorKitchen</span></a>
                <p>Tasty Flavor Kitchen crafts high-heat wok hei stir-fries, hand-pulled artisan noodle bowls, steamed dim sum towers, and chili garlic reductions.</p>
            </div>
            <div class="footer-col">
                <h4>Drawer Navigation</h4>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="collections.html">Collections</a></li>
                    <li><a href="blog/index.html">Blogs / Gazette</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Compliance</h4>
                <ul>
                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                    <li><a href="terms.html">Terms & Conditions</a></li>
                    <li><a href="disclaimer.html">Disclaimer</a></li>
                    <li><a href="cookies.html">Cookies Policy</a></li>
                </ul>
            </div>
            <div class="footer-col" style="flex: 1.2;">
                <h4>Atelier Headquarters</h4>
                <p><strong>Address:</strong><br>181 Mercer Street, New York, NY 10012, United States</p>
                <p><strong>Phone:</strong><br>+1-888-777-5845</p>
                <p><strong>Email:</strong><br>concierge@tastyflavorkitchen.com</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 Tasty Flavor Kitchen. All rights reserved.</p>
            <div class="footer-bottom-links">
                <a href="privacy-policy.html">Privacy Policy</a>
                <a href="terms.html">Terms</a>
                <a href="cookies.html">Cookies</a>
            </div>
        </div>
    </footer>

    <!-- Cookie Consent Popup Banner -->
    <div class="cookie-banner" id="cookieConsentBanner">
        <h4 class="cookie-title">We Value Your Privacy</h4>
        <p class="cookie-text">We use cookies to analyze web traffic metrics, verify wok order security, and deliver personalized street food recommendations. By clicking "Accept All", you agree to our policies.</p>
        <div class="cookie-btns">
            <button class="btn btn-primary" id="acceptCookiesBtn">Accept All</button>
            <button class="btn btn-secondary" id="rejectCookiesBtn">Reject</button>
        </div>
    </div>

    <!-- JS Scripts -->
    <script src="script.js"></script>
</body>
</html>

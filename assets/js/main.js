// Preloader
window.addEventListener("load", function () {
  const preloader = document.getElementById("preloader");
  gsap.to(preloader, {
    opacity: 0,
    duration: 0.5,
    onComplete: function () {
      preloader.style.display = "none";
    },
  });

  // Create code particles
  createCodeParticles();
  createFloatingParticles();
});

// Mobile menu toggle
document
  .getElementById("mobile-menu-button")
  .addEventListener("click", function () {
    const menu = document.getElementById("mobile-menu");
    menu.classList.toggle("hidden");
  });

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();

    const targetId = this.getAttribute("href");
    const targetElement = document.querySelector(targetId);

    if (targetElement) {
      window.scrollTo({
        top: targetElement.offsetTop - 80,
        behavior: "smooth",
      });

      // Close mobile menu if open
      const mobileMenu = document.getElementById("mobile-menu");
      if (!mobileMenu.classList.contains("hidden")) {
        mobileMenu.classList.add("hidden");
      }
    }
  });
});

// GSAP animations
gsap.registerPlugin(ScrollTrigger);

// Animate elements on scroll
gsap.utils
  .toArray('.service-card, .project-card, [class*="testimonial"]')
  .forEach((element) => {
    gsap.from(element, {
      scrollTrigger: {
        trigger: element,
        start: "top 80%",
        toggleActions: "play none none none",
      },
      opacity: 0,
      y: 50,
      duration: 0.8,
      ease: "power2.out",
    });
  });

// Hero section animations
gsap.from("#home .hero-content > div > *", {
  duration: 1,
  y: 30,
  opacity: 0,
  stagger: 0.2,
  ease: "power3.out",
  delay: 0.5,
});

// Floating animation for hero illustration
gsap.to(".hero-illustration", {
  y: 20,
  duration: 5,
  repeat: -1,
  yoyo: true,
  ease: "sine.inOut",
});

// Gradient text animation
const gradientTexts = document.querySelectorAll(".gradient-text");
gradientTexts.forEach((text) => {
  text.addEventListener("mouseenter", () => {
    gsap.to(text, {
      duration: 0.3,
      backgroundPosition: "100% 50%",
      ease: "power2.out",
    });
  });
  text.addEventListener("mouseleave", () => {
    gsap.to(text, {
      duration: 0.3,
      backgroundPosition: "0% 50%",
      ease: "power2.out",
    });
  });
});

// Create floating code particles
function createCodeParticles() {
  const particlesContainer = document.querySelector(".hero-bg");
  const codeSnippets = [
    "const innovate = () => { /.../ }",
    "function transform() { return future; }",
    'import { excellence } from "recto/code"',
    "let solution = problem.solve()",
    "interface DigitalFuture { success: boolean }",
    "while(!succeed) { tryAgain() }",
    "class Innovation extends Technology {}",
    "export default createBrilliance()",
    "async function buildFuture() {}",
    "// We code the impossible",
  ];

  for (let i = 0; i < 15; i++) {
    const particle = document.createElement("div");
    particle.className = "code-particle";
    particle.textContent =
      codeSnippets[Math.floor(Math.random() * codeSnippets.length)];
    particle.style.left = `${Math.random() * 100}%`;
    particle.style.animationDuration = `${10 + Math.random() * 20}s`;
    particle.style.animationDelay = `${Math.random() * 5}s`;
    particlesContainer.appendChild(particle);
  }
}

// Create floating particles
function createFloatingParticles() {
  const container = document.getElementById("particles");
  const particleCount = 20;

  for (let i = 0; i < particleCount; i++) {
    const particle = document.createElement("div");
    particle.className = "particle";

    // Random size between 2px and 6px
    const size = Math.random() * 4 + 2;
    particle.style.width = `${size}px`;
    particle.style.height = `${size}px`;

    // Random position
    particle.style.left = `${Math.random() * 100}%`;
    particle.style.top = `${Math.random() * 100}%`;

    // Random animation
    const duration = 10 + Math.random() * 20;
    const delay = Math.random() * 5;

    gsap.to(particle, {
      x: `${(Math.random() - 0.5) * 200}px`,
      y: `${(Math.random() - 0.5) * 200}px`,
      duration: duration,
      delay: delay,
      repeat: -1,
      yoyo: true,
      ease: "sine.inOut",
    });

    gsap.to(particle, {
      opacity: 0.3 + Math.random() * 0.7,
      duration: 5 + Math.random() * 10,
      repeat: -1,
      yoyo: true,
      ease: "sine.inOut",
    });

    container.appendChild(particle);
  }
}

// Testimonial Slider Functionality
function initTestimonialSlider() {
  const track = document.querySelector(".testimonials-track");
  const slides = document.querySelectorAll(".testimonial-slide");
  const nextButton = document.querySelector(".testimonial-next");
  const prevButton = document.querySelector(".testimonial-prev");
  const dots = document.querySelectorAll(".testimonial-dot");

  if (!track || !slides.length) return;

  let currentIndex = 0;
  const slideWidth = 100; // 100%

  // Set up the track with proper width
  track.style.width = `${slides.length * 100}%`;

  // Initial position
  updateSlider();

  // Next button click
  nextButton.addEventListener("click", () => {
    currentIndex = (currentIndex + 1) % slides.length;
    updateSlider();
  });

  // Previous button click
  prevButton.addEventListener("click", () => {
    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
    updateSlider();
  });

  // Dot indicators click
  dots.forEach((dot, index) => {
    dot.addEventListener("click", () => {
      currentIndex = index;
      updateSlider();
    });
  });

  // Auto advance (optional)
  let interval = setInterval(() => {
    currentIndex = (currentIndex + 1) % slides.length;
    updateSlider();
  }, 6000);

  // Pause auto-advance on hover
  track.addEventListener("mouseenter", () => {
    clearInterval(interval);
  });

  track.addEventListener("mouseleave", () => {
    interval = setInterval(() => {
      currentIndex = (currentIndex + 1) % slides.length;
      updateSlider();
    }, 6000);
  });

  // Update slider position and active dot
  function updateSlider() {
    // Move track
    track.style.transform = `translateX(-${
      (currentIndex * slideWidth) / slides.length
    }%)`;

    // Update dots
    dots.forEach((dot, index) => {
      dot.style.opacity = index === currentIndex ? "1" : "0.5";
    });
  }
}

// Initialize slider when DOM is loaded
document.addEventListener("DOMContentLoaded", initTestimonialSlider);

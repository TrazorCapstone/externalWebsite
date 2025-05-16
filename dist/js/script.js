document.addEventListener('DOMContentLoaded', function () {
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.getElementById('nav-menu');
  
    let open = false;
  
    const createPath = () => {
      const p = document.createElementNS("http://www.w3.org/2000/svg", "path");
      p.setAttribute("stroke", "black");
      p.setAttribute("stroke-width", "3");
      p.setAttribute("stroke-linecap", "round");
      p.style.transition = "all 0.8s ease";
      return p;
    };
  
    const paths = [createPath(), createPath(), createPath()];
  
    const updatePaths = () => {
      paths[0].setAttribute('d', open ? "M 3 16.5 L 17 2.5" : "M 2 2.5 L 20 2.5");
      paths[1].setAttribute('d', "M 2 9.423 L 20 9.423");
      paths[1].style.opacity = open ? "0" : "1";
      paths[2].setAttribute('d', open ? "M 3 2.5 L 17 16.346" : "M 2 16.346 L 20 16.346");
    };
  
    const svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
    svg.setAttribute("width", "23");
    svg.setAttribute("height", "23");
    svg.setAttribute("viewBox", "0 0 23 23");
    paths.forEach(p => svg.appendChild(p));
  
    hamburger.innerHTML = '';
    hamburger.appendChild(svg);
    updatePaths();
  
    hamburger.addEventListener('click', function () {
      open = !open;
      updatePaths();
      navMenu.classList.toggle('hidden');
    });
  });

function animateNumber(id, targetNumber, duration) {
    const element = document.getElementById(id);
    let start = 0;
    const increment = targetNumber / (duration / 50); 

    const interval = setInterval(() => {
        start += increment;
        if (start >= targetNumber) {
            start = targetNumber; 
            clearInterval(interval); 
        }
        element.textContent = Math.floor(start); 
    }, 50);
}

function animateNumber(id, target, duration) {
  const element = document.getElementById(id);
  let start = 0;
  const startTime = performance.now();

  function update(currentTime) {
    const elapsed = currentTime - startTime;
    const progress = Math.min(elapsed / duration, 1);
    const value = Math.floor(progress * target);
    element.textContent = value;

    if (progress < 1) {
      requestAnimationFrame(update);
    }
  }

  requestAnimationFrame(update);
}

document.addEventListener('DOMContentLoaded', function () {
  const counters = [
    { id: 'employeeCount', target: 200, duration: 4600 },
    { id: 'productCount', target: 30, duration: 3200 },
    { id: 'supportCount', target: 14, duration: 3500 }
  ];

  counters.forEach(counter => {
    const el = document.getElementById(counter.id);

    
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateNumber(counter.id, counter.target, counter.duration);
        }
      });
    }, {
      threshold: 0.5 
    });

    if (el) observer.observe(el);
  });
});


window.onscroll = function() {
    const header = document.querySelector('header');
    const fixedNav = header.offsetTop;

    if(window.pageYOffset > fixedNav) {
        header.classList.add('navbar-fixed');
    } else{
        header.classList.remove('navbar-fixed');
    }
};


emailjs.init("OjMo3ksBxFTqK9fjp");

const form = document.getElementById("contact-form");
const status = document.getElementById("status");
const btn = document.getElementById("submit-btn");
const svg = document.getElementById("svgAnim");

let isLoading = false;

form.addEventListener("submit", function (e) {
  e.preventDefault();
  if (isLoading) return;

  const from_name = form.querySelector('input[name="from_name"]').value.trim();
  const message = form.querySelector('textarea[name="message"]').value.trim();

  const nameRegex = /^[a-zA-Z0-9 @.,:]+$/;
  if (!nameRegex.test(from_name)) {
    status.textContent = "Name hanya boleh berisi huruf, angka, spasi, dan simbol @ . , :";
    status.style.color = "red";
    form.querySelector('input[name="from_name"]').focus();
    return; 
  }

  const messageRegex = /^[a-zA-Z0-9 ,."\n\r:]+$/;
  if (!messageRegex.test(message)) {
    status.textContent = 'Message hanya boleh berisi huruf, angka, spasi, dan simbol , . " :';
    status.style.color = "red";
    form.querySelector('textarea[name="message"]').focus();
    return; 
  }

  isLoading = true;
  status.textContent = "";
  btn.disabled = true;
  btn.textContent = "Sending...";

  emailjs.sendForm("service_ar5vx49", "template_pdc2qwa", form)
    .then(() => {
      isLoading = false;
      status.textContent = "Your message has been sent successfully! Please wait for the Response.";
      status.style.color = "green";
      form.reset();
      btn.disabled = false;
      btn.textContent = "Submit";
    })
    .catch(() => {
      isLoading = false;
      status.textContent = "Failed to send your message. Please try again later.";
      status.style.color = "red";
      btn.disabled = false;
      btn.textContent = "Submit";
    });
});

window.addEventListener("DOMContentLoaded", () => {
  const formEl = document.querySelector(".form");
  setTimeout(() => {
    if (svg) svg.classList.add("hide");
    if (formEl) formEl.classList.add("show");
  }, 3600);
});


   window.addEventListener("DOMContentLoaded", () => {
      const formEl = document.querySelector(".form");
       setTimeout(() => {
        svg.classList.add("hide");
        formEl.classList.add("show");
      }, 3600); 

   });

document.addEventListener("DOMContentLoaded", function () {
  const sections = document.querySelectorAll(".section-inview");

  const observerOptions = {
      root: null, 
      rootMargin: "0px",
      threshold: 0.5 
  };

  const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
          if (entry.isIntersecting) {
              entry.target.classList.add("visible");
          } else {
              entry.target.classList.remove("visible");
          }
      });
  }, observerOptions);

  sections.forEach(section => {
      observer.observe(section);
  });
});


document.addEventListener('DOMContentLoaded', function() {
    const searchForm = document.querySelector('.src-box form');
    const searchInput = searchForm.querySelector('input[name="search"]');
    const resetButton = searchForm.querySelector('button[type="reset"]');

    function handleReset(e) {
        if (e) {
            e.preventDefault();
        }
        window.location.href = 'product.php';
    }

    resetButton.addEventListener('click', handleReset);

    searchInput.addEventListener('keyup', function(e) {
        if (e.key === 'Escape') {
            handleReset(e);
        }
    });

    searchForm.addEventListener('submit', function(e) {
        if (!searchInput.value.trim()) {
            e.preventDefault();
            handleReset(e);
        }
    });
});
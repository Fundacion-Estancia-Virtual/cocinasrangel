let smallNav = document.getElementById('navSecondary');
  let nav = document.getElementById('navMain');
  let logo = document.getElementById('logo');

  window.addEventListener('scroll', function(e) {
    console.log(window.scrollY);
    if(window.scrollY > 1){
      smallNav.classList.add("d-none");
      smallNav.classList.remove("d-flex");
      nav.classList.add("bg-dark");
      logo.setAttribute("width","80px")
    }
    else {
      smallNav.classList.add("d-flex");
      smallNav.classList.remove("d-none");
      nav.style.position = "absolute";
      nav.classList.remove("bg-dark");
      logo.setAttribute("width","150px");
    }
  });
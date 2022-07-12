window.onscroll = () => {
  const nav = document.querySelector('#site-navigation');
  const logo = document.querySelector('#logo');
  if(this.scrollY <= 10){
    nav.classList.remove("nav-black");
    nav.classList.add("main-navigation");
    nav.classList.add("nav-bar");
    logo.style.display = "none";
  }  else{
    nav.classList.add("main-navigation");
    nav.classList.add("nav-bar");
    nav.classList.add("nav-black");
    logo.style.display = "";
  };
};
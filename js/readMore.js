function myFunctionAbout() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtnAbout");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
function myFunctionAboutTheme() {
  var dotsAboutTheme = document.getElementById("dotsAboutTheme");
  var moreTextAboutTheme = document.getElementById("moreAboutTheme");
  var btnTextAboutTheme = document.getElementById("myBtnAboutTheme");

  if (dotsAboutTheme.style.display === "none") {
    dotsAboutTheme.style.display = "inline";
    btnTextAboutTheme.innerHTML = "Read more"; 
    moreTextAboutTheme.style.display = "none";
  } else {
    dotsAboutTheme.style.display = "none";
    btnTextAboutTheme.innerHTML = "Read less"; 
    moreTextAboutTheme.style.display = "inline";
  }
}
function myFunctionAboutNit() {
  var dotsAboutNit = document.getElementById("dotsAboutNit");
  var moreTextAboutNit = document.getElementById("moreAboutNit");
  var btnTextAboutNit = document.getElementById("myBtnAboutNit");

  if (dotsAboutNit.style.display === "none") {
    dotsAboutNit.style.display = "inline";
    btnTextAboutNit.innerHTML = "Read more"; 
    moreTextAboutNit.style.display = "none";
  } else {
    dotsAboutNit.style.display = "none";
    btnTextAboutNit.innerHTML = "Read less"; 
    moreTextAboutNit.style.display = "inline";
  }
}

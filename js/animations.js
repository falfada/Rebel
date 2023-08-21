
  const animationContainer = document.getElementById("lottie-container");
  const animationData = "lottie/animation.json";
  
  const anim = lottie.loadAnimation({
    container: animationContainer,
    renderer: "svg",
    loop: true,
    autoplay: true,
    path: animationData,
  });


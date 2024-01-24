// gsap.fromTo(".navbar", {y: -200}, {
//     y: 0,
//     duration: 2,
//     delay: 0.2,
//     ease: "back.out(1.7)"
// })

gsap.fromTo(".container3 h1, .container3 p", {y : -300}, {
    y : 0,
    duration: 2,
    ease: "back.out(1.7)"
})

// Récupérez les éléments nécessaires du DOM
const cercle1 = document.getElementById('cercle1');
const cercle2 = document.getElementById('cercle2');
const cercle3 = document.getElementById('cercle3');
const container3 = document.querySelector('.container3');

// Ajoutez un gestionnaire d'événements pour détecter quand les cercles passent derrière la div container_presentation
document.addEventListener('scroll', () => {
  const cercles = [cercle1, cercle2, cercle3];

  cercles.forEach((cercle) => {
    const cercleRect = cercle.getBoundingClientRect();
    const containerRect = container3.getBoundingClientRect();

    // Vérifiez si le cercle se trouve derrière la div container_presentation
    if (
      cercleRect.right < containerRect.left ||
      cercleRect.left > containerRect.right ||
      cercleRect.bottom < containerRect.top ||
      cercleRect.top > containerRect.bottom
    ) {
      // Le cercle est derrière la div container_presentation, le rend invisible
      cercle.style.visibility = 'hidden';
    } else {
      // Le cercle n'est pas derrière la div container_presentation, le rend visible
      cercle.style.visibility = 'visible';
    }
  });
});

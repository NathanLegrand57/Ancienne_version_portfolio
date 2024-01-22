gsap.fromTo("h1", {y : -200}, {
    y : 0,
    duration: 4,
    delay: 2,
    ease: "back.out(1.7)",
})

gsap.fromTo("h2", {y : -400}, {
    y : 0,
    duration: 3,
    delay: 1.5,
    ease: "back.out(1)",
})

gsap.fromTo(".container_nom_prenom_email", {y : -700}, {
    y : 0,
    duration: 2,
    delay: 1,
    ease: "back.out(0.5)",
})

gsap.fromTo(".container_textarea", {y : 800}, {
    y : 0,
    duration: 2,
    ease: "back.out(0.5)",
})


gsap.fromTo("input[type='submit']", {y : 500}, {
    y : 0,
    duration: 2,
    delay: 2,
    ease: "back.out(1)",
})
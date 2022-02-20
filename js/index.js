gsap.registerPlugin(ScrollTrigger);

gsap.to("header", {
    scrollTrigger: {
        trigger: ".hero",
        start: "20% top",
        end: "70% top",
        scrub: .5,
        markers: false,
    },
    duration: 3,
    backgroundColor: "white"
})

gsap.to(".navbar-item", {
    scrollTrigger: {
        trigger: ".hero",
        start: "20% top",
        end: "bottom top",
        scrub: .5,
        markers: false,
    },
    duration: 3,
    color: "black"
})

let offset = 2000;



const t1 = gsap.timeline({
    scrollTrigger: {
        trigger: ".pres-etude",
        pin: true,
        start: "top top",
        end: () => "+=" + offset/3,
        pinSpacing: true,
        onUpdate: ({progress}) => progress === 1 ? stopAnimation(t1) : null,
    }
})

function stopAnimation(tl) {
    window.scrollBy(0, -offset/3);
    t1.scrollTrigger.kill(true)
}


const t2 = gsap.timeline({defaults: {duration: 1}, paused: true})
    .fromTo("#img2",{xPercent: -101}, {
    xPercent: 0,
    })
    .fromTo("#img3", {xPercent: -101}, {
        xPercent: 0
    })
    .fromTo("#img4", {xPercent: -101}, {
        xPercent: 0
    })
    .fromTo("#img5", {xPercent: -101}, {
        xPercent: 0
    })

const t2ST = ScrollTrigger.create({
    trigger: ".pres-etude",
    start: "0 0",
    end: () => "+=" + offset/4,
    scrub: .8,
    snap: 1/4,
    markers: false,
    onUpdate: ({progress}) => {t2.progress() < progress ? t2.progress(progress) : null}
})

/* Index.php Scroll smooth */

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Transitions Pages

const transitionTL = gsap.timeline()

function delay(t){
    return new Promise((done) => {
        setTimeout(() => {done()},t)
    })
}

barba.init({
    sync: true,

    transitions: [
        {
            async leave(){

                const done = this.async();

                transitionTL.to(".transition",  {left: "0%", ease: "power2.in", duration: .4});

                await delay(800);
                done();
            }
            ,enter(){
                transitionTL.to(".transition", {left: "100%", ease:"power2.out" , duration: .4})
                            .set(".transition", {left: "-100%"});
            },
            afterEnter() {
                window.scrollTo(0, 0)
                let path = window.location.pathname;
                let page = path.split("/").pop();
                if (page === "index.php") {
                    setTimeout(() => {
                        location.reload()
                    }, 500)
                }
            }
        }
    ]
})


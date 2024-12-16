const slide = document.querySelectorAll('.slide');
const btn = document.querySelector('.slide-btn');

let cursSlide = 0

slide.forEach((s,i) => s.style.transform = `translateY(${10 * i}rem)`);
btn.addEventListener('click', ()=>{

    cursSlide++;

    slide.forEach((s,i) => (s.style.transform = `translateY(${10 *  (i - cursSlide)}rem)`));
    setTimeout(function(){
        slide.forEach((s,i) => (s.style.transform = `translateY(${10 *  (i)}rem)`)), cursSlide = 0}, 4000);

});
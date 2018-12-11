import 'particles.js/particles.js';
import './ParticlesBackdrop.scss';
import config from './config';
export default function () {

    const parts = document.querySelectorAll('.particles-backdrop');
    parts.forEach((elm, inx) => {

        const id = `particlesbackdrop-${inx}`;
        elm.setAttribute("id", id);
        window.particlesJS(id, config);
    });


}
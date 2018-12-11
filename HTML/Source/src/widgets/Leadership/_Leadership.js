import UIkit from "uikit";

let leadership = document.querySelectorAll('.widget-leadership');



leadership.forEach(elm => {
    let grid = elm.querySelector('div:first-child');
    let profiles = elm.querySelectorAll('.card-profile');



    profiles.forEach((p, i) => {
        p.parentElement.setAttribute('index', i);

        let pData = p.querySelector('.card-content');

        
        p.onclick = function (e) {

            let currentIndex = parseInt(p.parentElement.getAttribute('index'));
            let targetIndex = 0;
            let firstCols = grid.querySelectorAll('.uk-first-column[index]');
            for(var i = 0 ; i < firstCols.length ; i++){
                
                if (parseInt(firstCols[i].getAttribute('index')) > currentIndex) {
                    targetIndex = parseInt(firstCols[i].getAttribute('index') - 1);
                    break;
                    
                }
                else {
                    targetIndex = profiles.length - 1;
                }


            };
           
            //console.log(targetIndex);
            grid.classList.remove('on');
            if (grid.querySelector('.active')) {
                grid.querySelector('.active').classList.remove('active');
            }

            if (grid.querySelector('.profile-data')) {
                grid.removeChild(grid.querySelector('.profile-data'));
            }

            if (pData) {
                p.classList.add('active');
                grid.classList.add('on');
                let row = pData.cloneNode(true);
                row.classList.remove('uk-hidden');
                row.classList.add('profile-data');

                grid.querySelector(`[index="${targetIndex}"]`).insertAdjacentElement('afterend', row);
                UIkit.grid(grid);

                
                // Bind close 
                row.querySelector('.uk-close').onclick = function () {
                    grid.removeChild(grid.querySelector('.profile-data'));
                    grid.classList.remove('on');
                    p.classList.remove('active');
                    UIkit.grid(grid);
                };
            }

         
        }
    });

    
});


function insertAfter(newNode, referenceNode) {
    referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
}
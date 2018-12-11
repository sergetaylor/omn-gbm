import axios from 'axios';
import UIkit from "uikit";


    export default function(){
        let linkedinForms = document.querySelectorAll('.linkedin-action');
    linkedinForms.forEach(elm => {
        let form = elm.querySelector('form');
        let submit = elm.querySelector('button');
        let input = elm.querySelector('input');
        let url = form.getAttribute('action');
        
        
        
        form.addEventListener("submit", function(e){
            const svg = submit.querySelector('i').innerHTML;
            submit.querySelector('i').innerHTML = "<div uk-spinner></div>";
            e.preventDefault();
            axios({
            method: 'post',
            url: url,
            data: {
                profile: input.value
            },
            config: { headers: {'Content-Type': 'multipart/form-data' }}
            })
            .then(function (response) {
                submit.querySelector('i').innerHTML = svg;
                var node = document.createElement("div");                 
                node.className = 'success-note';
                var textnode = document.createTextNode("Thank you for your interest in GBM! We will review your resume and get back to you as quickly as possible. ");         
                node.appendChild(textnode);          
                form.parentElement.parentElement.parentElement.appendChild(node);
                
                setTimeout(function(){
                    node.remove();
                },5000);
                
                // UIkit.notification({
                //     message: 'Thank you for your interest in GBM! We will review your resume and get back to you as quickly as possible. ',
                //     pos: 'bottom-right',
                //     timeout: 5000
                // });

            elm.classList.remove('linkedin-active');
            })
            .catch(function (response) {
                submit.querySelector('i').innerHTML = svg;
                var node = document.createElement("div");                 
                node.className = 'error-note';
                var textnode = document.createTextNode("Sorry, Something went wrong, Please try again");         
                node.appendChild(textnode);          
                form.parentElement.parentElement.parentElement.appendChild(node);
                setTimeout(function(){
                    node.remove();
                },5000);
                // UIkit.notification({
                //     message: 'Something went wrong ',
                //     status:'danger',
                //     pos: 'bottom-right',
                //     timeout: 5000
                // });
            elm.classList.remove('linkedin-active');
            });
            
        }, false);
        
    });
    }
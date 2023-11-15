"use strict"

let input = document.querySelectorAll(".input")
let title = document.querySelectorAll(".title")
input.forEach(item =>{
    item.onfocus = ()=>{
        title.forEach(el =>{
            if(el.getAttribute("data-id") == "name" && item.getAttribute("data-id") == "name" || el.getAttribute("data-id") == "mail" && item.getAttribute("data-id") == "mail" ){
               el.style.opacity = 1;
               el.style.transition = "2s";
               item.placeholder = "";
            }
        })
    }
    item.onblur = ()=>{
        title.forEach(el =>{
            if(el.getAttribute("data-id") == "name" && item.getAttribute("data-id") == "name" ){
               el.style.opacity = 0;
               el.style.transition = "2s";
               item.placeholder = "Name";
            }else if(el.getAttribute("data-id") == "mail" && item.getAttribute("data-id") == "mail"){
                el.style.opacity = 0;
                el.style.transition = "2s";
                item.placeholder = "Mail";
            }
        })
    }
})
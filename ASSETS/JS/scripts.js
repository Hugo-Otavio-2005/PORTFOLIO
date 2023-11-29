function openProjectsContent(c) {

    let projectsContent = document.querySelectorAll(".projects__content")[c];
    let projectsImg = projectsContent.querySelector(".projects__img");

    if(projectsContent.classList.contains("projects--open")){
        projectsContent.classList.remove("projects--open");
    }else{
        projectsContent.classList.add("projects--open");
    }

    if(projectsImg.classList.contains("projects__img--rotate")){
        projectsImg.classList.remove("projects__img--rotate");
    }else{
        projectsImg.classList.add("projects__img--rotate");
    }

}

// 

function openHeader() {

    let header = document.querySelector(".header");
    let headerImg = header.querySelector(".header__img--icon");

    let main = document.querySelector(".main");
    let footer = document.querySelector(".footer");

    if(header.classList.contains("header--open")){
        header.classList.remove("header--open");
    }else{
        header.classList.add("header--open");
    }

    if(headerImg.classList.contains("header__img--rotate")){
        headerImg.classList.remove("header__img--rotate");

        main.classList.remove("blur");
        footer.classList.remove("blur");
    }else{
        headerImg.classList.add("header__img--rotate");

        main.classList.add("blur");
        footer.classList.add("blur");
    }

}

// 

let toogle = document.querySelector(".toogle");

let headerImg = document.querySelectorAll(".header__up .header__img");
let footerImg = document.querySelectorAll(".footer__down .footer__img");

function toogled(c) {

    if(c == 1){

        if(!toogle.checked){
            localStorage.setItem("toogle", "false1");
            
            headerImg[0].src = "./ASSETS/IMAGES/caret-double-right-light_WHITE.png";
            headerImg[1].src = "./ASSETS/IMAGES/house-light_WHITE.png"
            headerImg[2].src = "./ASSETS/IMAGES/phone-light_WHITE.png";
            headerImg[3].src = "./ASSETS/IMAGES/projector-screen-chart-light_WHITE.png";
    
            footerImg[0].src = "./ASSETS/IMAGES/envelope-simple-light_WHITE.png";
            footerImg[1].src = "./ASSETS/IMAGES/github-logo-light_WHITE.png";
            footerImg[2].src = "./ASSETS/IMAGES/linkedin-logo-light_WHITE.png";
            footerImg[3].src = "./ASSETS/IMAGES/instagram-logo-light_WHITE.png";
            footerImg[4].src = "./ASSETS/IMAGES/facebook-logo-light_WHITE.png";
        }else{
            localStorage.setItem("toogle", "true1");
    
            headerImg[0].src = "./ASSETS/IMAGES/caret-double-right-light_DARK.png";
            headerImg[1].src = "./ASSETS/IMAGES/house-light_DARK.png"
            headerImg[2].src = "./ASSETS/IMAGES/phone-light_DARK.png";
            headerImg[3].src = "./ASSETS/IMAGES/projector-screen-chart-light_DARK.png";
    
            footerImg[0].src = "./ASSETS/IMAGES/envelope-simple-light_DARK.png";
            footerImg[1].src = "./ASSETS/IMAGES/github-logo-light_DARK.png";
            footerImg[2].src = "./ASSETS/IMAGES/linkedin-logo-light_DARK.png";
            footerImg[3].src = "./ASSETS/IMAGES/instagram-logo-light_DARK.png";
            footerImg[4].src = "./ASSETS/IMAGES/facebook-logo-light_DARK.png";
        }

    }else if(c == 2){

        if(!toogle.checked){
            localStorage.setItem("toogle", "false2");
            
            headerImg[0].src = "../ASSETS/IMAGES/caret-double-right-light_WHITE.png";
            headerImg[1].src = "../ASSETS/IMAGES/house-light_WHITE.png"
            headerImg[2].src = "../ASSETS/IMAGES/phone-light_WHITE.png";
            headerImg[3].src = "../ASSETS/IMAGES/projector-screen-chart-light_WHITE.png";
    
            footerImg[0].src = "../ASSETS/IMAGES/envelope-simple-light_WHITE.png";
            footerImg[1].src = "../ASSETS/IMAGES/github-logo-light_WHITE.png";
            footerImg[2].src = "../ASSETS/IMAGES/linkedin-logo-light_WHITE.png";
            footerImg[3].src = "../ASSETS/IMAGES/instagram-logo-light_WHITE.png";
            footerImg[4].src = "../ASSETS/IMAGES/facebook-logo-light_WHITE.png";
        }else{
            localStorage.setItem("toogle", "true2");
    
            headerImg[0].src = "../ASSETS/IMAGES/caret-double-right-light_DARK.png";
            headerImg[1].src = "../ASSETS/IMAGES/house-light_DARK.png"
            headerImg[2].src = "../ASSETS/IMAGES/phone-light_DARK.png";
            headerImg[3].src = "../ASSETS/IMAGES/projector-screen-chart-light_DARK.png";
    
            footerImg[0].src = "../ASSETS/IMAGES/envelope-simple-light_DARK.png";
            footerImg[1].src = "../ASSETS/IMAGES/github-logo-light_DARK.png";
            footerImg[2].src = "../ASSETS/IMAGES/linkedin-logo-light_DARK.png";
            footerImg[3].src = "../ASSETS/IMAGES/instagram-logo-light_DARK.png";
            footerImg[4].src = "../ASSETS/IMAGES/facebook-logo-light_DARK.png";
        }

    }


}

// 

function scrolls() {

    let projects = document.querySelector(".projects");

    window.scrollTo(0, projects.offsetTop - 80)

}

// 

window.addEventListener("scroll", () => {

    let header = document.querySelector(".header");
    let headerImg = header.querySelector(".header__img--icon");

    let main = document.querySelector(".main");
    let footer = document.querySelector(".footer");

    header.classList.remove("header--open");

    headerImg.classList.remove("header__img--rotate");

    main.classList.remove("blur");
    footer.classList.remove("blur");

})

// 

window.addEventListener("load", () => {

    if(localStorage.getItem("toogle") == "true1"){
        toogle.checked = true;

        headerImg[0].src = "./ASSETS/IMAGES/caret-double-right-light_DARK.png";
        headerImg[1].src = "./ASSETS/IMAGES/house-light_DARK.png"
        headerImg[2].src = "./ASSETS/IMAGES/phone-light_DARK.png";
        headerImg[3].src = "./ASSETS/IMAGES/projector-screen-chart-light_DARK.png";

        footerImg[0].src = "./ASSETS/IMAGES/envelope-simple-light_DARK.png";
        footerImg[1].src = "./ASSETS/IMAGES/github-logo-light_DARK.png";
        footerImg[2].src = "./ASSETS/IMAGES/linkedin-logo-light_DARK.png";
        footerImg[3].src = "./ASSETS/IMAGES/instagram-logo-light_DARK.png";
        footerImg[4].src = "./ASSETS/IMAGES/facebook-logo-light_DARK.png";
    }else if(localStorage.getItem("toogle") == "false1"){
        toogle.checked = false;

        headerImg[0].src = "./ASSETS/IMAGES/caret-double-right-light_WHITE.png";
        headerImg[1].src = "./ASSETS/IMAGES/house-light_WHITE.png"
        headerImg[2].src = "./ASSETS/IMAGES/phone-light_WHITE.png";
        headerImg[3].src = "./ASSETS/IMAGES/projector-screen-chart-light_WHITE.png";

        footerImg[0].src = "./ASSETS/IMAGES/envelope-simple-light_WHITE.png";
        footerImg[1].src = "./ASSETS/IMAGES/github-logo-light_WHITE.png";
        footerImg[2].src = "./ASSETS/IMAGES/linkedin-logo-light_WHITE.png";
        footerImg[3].src = "./ASSETS/IMAGES/instagram-logo-light_WHITE.png";
        footerImg[4].src = "./ASSETS/IMAGES/facebook-logo-light_WHITE.png";
    }else if(localStorage.getItem("toogle") == "true2"){
        toogle.checked = true;

        headerImg[0].src = "../ASSETS/IMAGES/caret-double-right-light_DARK.png";
        headerImg[1].src = "../ASSETS/IMAGES/house-light_DARK.png"
        headerImg[2].src = "../ASSETS/IMAGES/phone-light_DARK.png";
        headerImg[3].src = "../ASSETS/IMAGES/projector-screen-chart-light_DARK.png";

        footerImg[0].src = "../ASSETS/IMAGES/envelope-simple-light_DARK.png";
        footerImg[1].src = "../ASSETS/IMAGES/github-logo-light_DARK.png";
        footerImg[2].src = "../ASSETS/IMAGES/linkedin-logo-light_DARK.png";
        footerImg[3].src = "../ASSETS/IMAGES/instagram-logo-light_DARK.png";
        footerImg[4].src = "../ASSETS/IMAGES/facebook-logo-light_DARK.png";
    }else if(localStorage.getItem("toogle") == "false2"){
        toogle.checked = false;

        headerImg[0].src = "../ASSETS/IMAGES/caret-double-right-light_WHITE.png";
        headerImg[1].src = "../ASSETS/IMAGES/house-light_WHITE.png"
        headerImg[2].src = "../ASSETS/IMAGES/phone-light_WHITE.png";
        headerImg[3].src = "../ASSETS/IMAGES/projector-screen-chart-light_WHITE.png";

        footerImg[0].src = "../ASSETS/IMAGES/envelope-simple-light_WHITE.png";
        footerImg[1].src = "../ASSETS/IMAGES/github-logo-light_WHITE.png";
        footerImg[2].src = "../ASSETS/IMAGES/linkedin-logo-light_WHITE.png";
        footerImg[3].src = "../ASSETS/IMAGES/instagram-logo-light_WHITE.png";
        footerImg[4].src = "../ASSETS/IMAGES/facebook-logo-light_WHITE.png";
    }

})
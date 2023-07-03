const socialLinked = document.querySelectorAll("#social"),
    media = {
        twitter: "https://twitter.com/",
        facebook: "https://pinterest.com/",
        pinterest: "https://facebook.com/antonio.hsh.96",
        instagram: "https://instagram.com/eng.kangyann",
    };
socialLinked.forEach((media) => {
    media.addEventListener("click", ({ target }) => {
        console.log(target.alt);
        switch (target.alt) {
            case "Twitter":
                window.location.href = media?.twitter;
                break;
            case "Pinterest":
                window.location.href = media?.pinterest;
                break;
            case "Facebook":
                window.location.href = media?.facebook;
                break;
            case "Instagram":
                window.location.href = media?.instagram;
                break;
            default:
                window.location.href = "/";
                break;
        }
    });
});

const menuIcon = document.querySelectorAll("#menu_icon"),
    menuList = document.querySelectorAll(".menu_list");

for (let i = 0; i < menuIcon.length; i++) {
    menuIcon[i].addEventListener("click", () => {
        menuIcon.forEach((x) => {
            x.classList.remove("active");
            menuList.forEach((list) => {
                list.style.display = "none";
            });
        });
        const getPage = menuIcon[i].getAttribute("data-page"),
            page = document.getElementById(getPage);
        page.style.display = "block";
        menuIcon[i].classList.add("active");
    });
}
const navIcon = document.querySelectorAll("#navIcon");

navIcon.forEach((x) => {
    x.addEventListener("click", ()=> {
        navIcon.forEach((r) => {
            r.classList.remove("active");
        });
        x.classList.add("active");
    })
});

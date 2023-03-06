console.log(
  "%c" + "W E L C O M E   T O   C V . C A T H T M L C S S . N E T",
  "font-family:Montserrat ; font-size:14px; background: #009999; border-radius: 2px; padding: 6px 12px; margin: 5px 10px 7px 0px; color: #ffffff;"
);

const x = document.querySelector.bind(document);
const xx = document.querySelectorAll.bind(document);

const app = {
    render: function () {
        const home__nav = x('.home__nav');
        const header = x('.header');
        const home__nav__scrollspy = x('.home__nav__scrollspy');

        //Height
        const h_header = header ? header.offsetHeight : 0;
        const h_home__nav = home__nav ? home__nav.offsetHeight : 0;

        if (home__nav){
            console.log('Height Header',h_header);
            UIkit.sticky(home__nav, {
                'offset': h_header,
            });
        }

        if (home__nav__scrollspy){
            UIkit.scrollspyNav(home__nav__scrollspy, {
                'offset': h_header + h_home__nav,
            });
        }
    },
    start: function () {
        this.render();
    }
}

window.addEventListener("load", ()=>{
    console.log("page is fully loaded");
    app.start();
})


$(window).on("load", function (e) {

});
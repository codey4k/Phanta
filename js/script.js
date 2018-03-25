document.addEventListener('DOMContentLoaded',()=>{
    window.addEventListener('scroll', ()=>{
        let scroll = document.documentElement.scrollTop || document.body.scrollTop,
            menu = document.getElementById('menu-bar')
            
            
        if(scroll >= 50) {
            Object.assign(menu.style, {
                height : '60px',
                background : '#444'
            })
        }
        else {
            Object.assign(menu.style, {
                height : '80px',
                background : 'transparent'
            })
        }
    })
})
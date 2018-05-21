// untuk membuat sidebar colapse di mobile
$(window).bind("Load resize", function ()
    {
        if ($(this).width()<768) 
            {
                $('div.sidebar-collapse').addClass('collapse')    
            }
        else
            {
                $('div.sidebar-collapse').removeClass('collapse')
            }   
    });

// jquery untuk membuat dropdown
 $(document).ready(function(){
    // menyentuh li tr-tree
    $('.tr-tree').each(function(){
    // menyentuh a href
    var link = $(this).children("a").first();
    // menyentuh  sub menu
    var submenu = $(this).children('.tr-tree-menu').first();
    // mengetahui apakah li mempunyai class active
    var isActive = $(this).hasClass('active');


    // jika benar active
    if (isActive) {
        submenu.slideDown();
    }

    // jika link di klik
    link.click(function(e){
        e.preventDefault(); //mencegah a href agar tidak lari kemana mana
        if (isActive) {
            submenu.slideUp();
            isActive=false;
        }
        else{
            submenu.slideDown();
            isActive=true;
        }
        })
    })
 })
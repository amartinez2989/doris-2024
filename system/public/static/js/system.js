const sidebar_active = localStorage.getItem('sidebar_active');
document.addEventListener('DOMContentLoaded', function(){

    //Sidebar
    var sidebar = document.getElementById('sidebar');
    var sidebar_accordion = document.getElementsByClassName('sidebar_accordion');
    var accordion_ul = document.getElementsByClassName('accordion_ul');
    var accordion_arrows = document.getElementsByClassName('row-icon');

    if(sidebar_accordion){
        Array.from(sidebar_accordion).forEach(function(element){
            element.addEventListener('click', function(e){
                e.preventDefault();

                var to_show = document.getElementById(element.getAttribute('data-target'));
                var isSubMenuVisible = to_show.style.display === 'block';

                if(accordion_ul){
                    Array.from(accordion_ul).forEach(function(ul){
                        ul.style.height = '0px';
                        ul.style.display = 'none';
                    });

                }


                if(!isSubMenuVisible){
                    to_show.style.display = 'block';
                    finalHeight = to_show.scrollHeight;
                    to_show.style.height = '0px';
                    to_show.offsetHeight;
                    to_show.style.height = finalHeight+'px';
                }
                if(sidebar_active == element.getAttribute('data-target')){
                    localStorage.setItem('sidebar_active', '');
                }else{
                    localStorage.setItem('sidebar_active', element.getAttribute('data-target'));
                }
            });
        });
    }

    if(sidebar_active != ""){
        accordion_ul_active = document.getElementById(sidebar_active);
        if(accordion_ul_active){
            accordion_ul_active.style.display = "block";
        }
    }

});
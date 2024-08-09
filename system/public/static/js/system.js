
document.addEventListener('DOMContentLoaded', function() {
    const sidebar_active = localStorage.getItem('sidebar_active');

    if (sub_route){
        sub_route_active = document.getElementById('side_lk_'+sub_route);
        if(sub_route_active){
            sub_route_active.getElementsByTagName('i')[0].setAttribute('class', 'bi bi-record-fill');
            sub_route_active.getElementsByTagName('i')[0].classList.add('pulse-element');
            sub_route_active.getElementsByTagName('i')[0].setAttribute('class', 'bi bi-record-fill');
            sub_route_active.getElementsByTagName('i')[0].style.display = "inline-block";

        }

    }


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

                // Reset all arrows and accordion elements
                if(accordion_arrows){
                    Array.from(accordion_arrows).forEach(function(sp){
                        sp.style.transform = 'rotate(0deg)';
                    });
                }

                if(accordion_ul){
                    Array.from(accordion_ul).forEach(function(ul){
                        ul.style.display = 'none';
                        ul.style.height = '0px';
                    });
                }

                // Toggle the clicked accordion
                if(!isSubMenuVisible){
                    to_show.style.display = 'block';
                    to_show.style.height = to_show.scrollHeight + 'px';

                    var arrow = document.getElementById('row_icon_' + element.getAttribute('data-target'));
                    arrow.style.transform = 'rotate(90deg)';
                    localStorage.setItem('sidebar_active', element.getAttribute('data-target'));
                } else {
                    to_show.style.display = 'none';
                    localStorage.setItem('sidebar_active', '');
                }
            });
        });
    }

    // Open the active accordion on page load
    if(sidebar_active){
        var accordion_ul_active = document.getElementById(sidebar_active);
        if(accordion_ul_active){
            accordion_ul_active.style.display = "block";
            accordion_ul_active.style.height = accordion_ul_active.scrollHeight + 'px';

            var active_arrow = document.getElementById('row_icon_' + sidebar_active);
            if (active_arrow) {
                active_arrow.style.transform = 'rotate(90deg)';
            }
        }
    }

    var trigger_sidebar= document.getElementById('trigger_sidebar');
    if(trigger_sidebar){
        trigger_sidebar.addEventListener('click', function(e){
            e.preventDefault();
            sidebar.style.left = '0px';
        });
    }

    var trigger_sidebar_close = document.getElementById('trigger_sidebar_close');
    if(trigger_sidebar_close){
        trigger_sidebar_close.addEventListener('click', function(e){
            e.preventDefault();
            sidebar.style.left = '-270px';
        });
    }
});

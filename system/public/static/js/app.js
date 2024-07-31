const base = location.protocol + '//' + location.host;
const route = document.getElementsByName('routeName')[0].getAttribute('content');
const sub_route = document.getElementsByName('SubRouteName')[0].getAttribute('content');
const csrftoken = document.getElementsByName('csrf-token')[0].getAttribute('content');

document.addEventListener('DOMContentLoaded', function() {
    var loader_action = document.getElementById('loader_action');
    var show_password = document.getElementsByClassName('show_password');
    if (show_password){
        for (i=0; i < show_password.length; i++){
            show_password[i].addEventListener('click',function (e){
                e.preventDefault();
                show_password_fn(this.getAttribute('id'));
            });
        }
    }

    // Autocomplete
    fields_autocomplete = document.getElementsByClassName('autocomplete');
    if (fields_autocomplete){
        page_autocomplete = Date.now();
        for (i=0; i < fields_autocomplete.length; i++){
            fields_autocomplete[i].value = page_autocomplete;
        }
        let tagArr = document.getElementsByClassName('disableac');
        for (i=0; i < tagArr.length; i++){
            original_name = tagArr[i].getAttribute('name');
            tagArr[i].setAttribute('name', original_name+'_'+page_autocomplete);
            tagArr[i].autocomplete=original_name+'_'+page_autocomplete;

        }
    }

    form_action = document.getElementsByClassName('form_action');
    if (form_action){
        for (i=0; i < form_action.length; i++){
            form_action[i].addEventListener('submit', function(e){
                loader_action_status('show');
            });
        }
    }
    route_active= document.getElementsByClassName('lk-'+route);
    if (route_active.length > 0){
        route_active[0].classList.add('active');
    }
});
// Loader action status
function loader_action_status(status){
    if (status == "show"){
        document.getElementsByTagName('body')[0].style.overflow = 'hidden';
        loader_action.style.display = 'flex';
        loader_action.classList.remove('loader_action_animation_hide')
        loader_action.classList.add('loader_action_animation_show');
    }
    if(status == "hide"){
        document.getElementsByTagName('body')[0].style.removeProperty('overflow');
        loader_action.style.display = 'none';
        loader_action.classList.add('loader_action_animation_hide');
        loader_action.classList.remove('loader_action_animation_show');
    }
}
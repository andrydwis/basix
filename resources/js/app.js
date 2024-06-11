import './bootstrap';

function updateUrlParameter(url, param, value) {
    let searchParams = url.searchParams;
    searchParams.set(param, value);
    searchParams.delete('page');
    window.location.search = searchParams.toString();
}

function sort(name) {
    let url = new URL(window.location);
    let sortParam = url.searchParams.get('sort');
    let newValue = sortParam === name ? '-' + name : name;
    updateUrlParameter(url, 'sort', newValue);
}

function filter() {
    let url = new URL(window.location);
    //get formData from the current event
    let formData = new FormData(event.target);
    for (let [key, value] of formData.entries()) {
        updateUrlParameter(url, key, value);
    }
}

window.sort = sort;

window.filter = filter;

//if button that has data-sort clicked then trigger sort function
document.querySelectorAll('[data-sort]').forEach(button => {
    button.addEventListener('click', function() {
        sort(this.getAttribute('data-sort'));
    });
});
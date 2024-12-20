//import Swal from 'sweetalert2';

function addmorefied() {
    let btns = document.getElementById('buttons');

    let newfield = `
        <div class="mb-3">
            <label class="form-label">Additional</label>
            <input type="text" name="addtional" class="form-control" placeholder="Add Aditional plats...">
        </div>
    `;

    btns.insertAdjacentHTML('beforebegin', newfield);
}

function reservationSubmit(event) {
    event.preventDefault();

    let numbersPattern = /^\d{1}$/;
    let timePattern = /^(0?[1-9]|1[0-2]):[0-5][0-9]$/;
    let datespattern = /^(((20[012]\d|19\d\d)|(1\d|2[0123]))-((0[0-9])|(1[012]))-((0[1-9])|([12][0-9])|(3[01])))$/;

    let personnes = document.querySelector('input[name="personnes"]').value;
    let dates = document.querySelector('input[name="date"]').value;
    let times = document.querySelector('input[name="time"]').value;

    console.log(dates);

    if(!personnes || !numbersPattern.test(personnes)) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Incorrect Input for Number of Persons'
        });
        return;
    }

    if(!dates || !datespattern.test(dates)) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Incorrect Input for dates'
        });
        return;
    }

    if(!times || !timePattern.test(times)) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Incorrect Input for times'
        });
        return;
    }

    Swal.fire({
        title: "You Just Make a Reservation!",
        text: "Thanks for We will contact you soon!",
        icon: "success"
      });

    document.getElementById('btn-close').click()
}

if(document.getElementById('submitReservation')) {
    document.getElementById('submitReservation').addEventListener('click', (event) => reservationSubmit(event));
}
function PlatValidation(event) {
    event.preventDefault();

    let allowedExtension = ['png', 'jpg', 'jpeg', 'wepg'];
    let AlphabetPattern = /^[a-zA-Z\s]+$/;

    let dishname = document.querySelector('input[name="dishname"]').value;
    let dishdesc = document.querySelector('textarea[name="description"]').value;
    let dishimg = document.querySelector('input[name="dishimage"]').value;

    let path = dishimg.split('.');
    let extension = path[1];

    if(!dishname || !AlphabetPattern.test(dishname)) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Incorrect Input for name'
        });
        return;
    }

    if(!dishdesc || dishdesc.length > 500) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Incorrect Input for description'
        });
        return;
    }

    if(!dishimg || !allowedExtension.includes(extension)) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Invalid image format Type(allowed: JPG, PNG)'
        });
        return;
    }
    Swal.fire({
        title: "New Plat added!",
        icon: "success"
      });

    document.getElementById('btn-close').click();
    document.getElementById
    
}
document.getElementById('submitPlats').addEventListener('click', (event) => PlatValidation(event))

function MenuVamidation() {}

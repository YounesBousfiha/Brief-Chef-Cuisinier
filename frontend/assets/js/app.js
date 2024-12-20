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
        title: "Reservation Done!",
        icon: "success"
      }).then(() => {
        event.target.submit();
      });

    document.getElementById('btn-close').click()
}

if(document.getElementById('submitReservation')) {
    document.getElementById('submitReservation').addEventListener('click', (event) => reservationSubmit(event));
}

function MenuVamidation() {}




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
    //let AlphabetPattern = /^[a-zA-Z\s]+$/;

    let personnes = document.querySelector('input[name="personnes"]').value;
    let dates = document.querySelector('input[name="date"]').value;
    let times = document.querySelector('input[name="time"]').value;

    console.log(dates);

    if(!personnes || !numbersPattern.test(personnes)) {
        personnesError.textContent = 'Incorrect Input';
        return;
    }

    if(!dates || !datespattern.test(dates)) {
        dateError.textContent = "Incorect Date Format"
        return;
    }

    if(!times || !timePattern.test(times)) {
        timeError.textContent = "Inccorect time Format";
        return;
    }

    document.getElementById('btn-close').click()
}

document.getElementById('submitReservation').addEventListener('click', (event) => reservationSubmit(event));


function ReserveValidation() {
    let form = document.getElementById('reservationForm');
    form.forEach((element) => {
        console.log(element);
    })
}
function PlatValidation() {}
function MenuVamidation() {}

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
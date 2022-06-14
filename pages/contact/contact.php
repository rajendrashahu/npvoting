<div class="contact">
    <h2>-contact us-</h2>
    <form class="col g-3 needs-validation" novalidate>
        <div class="col-md-6">
            <label for="validationCustom01" class="form-label">Full name</label>
            <input type="text" class="form-control" id="validationCustom01" placeholder="Enter your full name" required>
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback">
                Please enter a valid Name.
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustomUsername" class="form-label">E-mail</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" id="validationCustomUsername" placeholder="Enter your e-mail" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                    Please enter a valid email.
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <label for="validationCustom04" class="form-label">Province</label>
            <select class="form-select" id="validationCustom04" required>
                <option selected disabled value="">Choose...</option>
                <option>Province 1</option>
                <option>Province 2</option>
                <option>Province 3</option>
                <option>Province 4</option>
                <option>Province 5</option>
                <option>Province 6</option>
                <option>Province 7</option>
            </select>
            <div class="invalid-feedback">
                Please select a valid Province.
            </div>
        </div>

        <div class="col-md-6">
            <label for="validationCustom01" class="form-label">Address</label>
            <input type="text" class="form-control" id="validationCustom01" placeholder="Enter your current address" required>
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback">
                Please provide a valid address.
            </div>
        </div>

        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                    Agree to terms and conditions
                </label>
                <div class="invalid-feedback">
                    You must agree before submitting.
                </div>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </form>
</div>
@extends("Tablerui::layouts.master")
@section('content')
<div class="page-body">
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Form elements
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-6">
                            <form class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Basic form</h3>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label class="form-label required">Email address</label>
                                        <div>
                                            <input type="email" class="form-control" aria-describedby="emailHelp"
                                                placeholder="Enter email">
                                            <small class="form-hint">We'll never share your email with anyone
                                                else.</small>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label required">Password</label>
                                        <div>
                                            <input type="password" class="form-control" placeholder="Password">
                                            <small class="form-hint">
                                                Your password must be 8-20 characters long, contain letters and numbers,
                                                and
                                                must not contain
                                                spaces, special characters, or emoji.
                                            </small>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Select</label>
                                        <div>
                                            <select class="form-select">
                                                <option>Option 1</option>
                                                <optgroup label="Optgroup 1">
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                </optgroup>
                                                <option>Option 2</option>
                                                <optgroup label="Optgroup 2">
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                </optgroup>
                                                <optgroup label="Optgroup 3">
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                </optgroup>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Checkboxes</label>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" checked>
                                                <span class="form-check-label">Option 1</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-label">Option 2</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" disabled>
                                                <span class="form-check-label">Option 3</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-end">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
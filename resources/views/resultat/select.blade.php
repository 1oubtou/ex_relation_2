<div class="col-xxl-12 mb-5 mb-xl-10">
    <!--begin::Chart widget 8-->
    <div class="card card-flush h-xl-100">
        <!--begin::Header-->
        <div class="card-header">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold text-dark">Performance Overview</span>
            </h3>
        </div>
        <div class="card-body pt-0">
            <form action="{{ route('dashboard_store') }}" method="POST" class="row mx-auto">
                @csrf
                <div class="col-4">
                    <div class="fv-row mb-7">
                        <label class="fs-6 fw-semibold form-label mt-3">
                            <span class="required">Conducteurs</span>
                        </label>
                        <div class="w-100">
                            <select data-control="select2" class="form-select form-select-solid" name="conducteur_id" required>
                                <option hidden>Select Conducteurs...</option>
                                @foreach ( $conducteurs as $conducteur )
                                    <option value="{{ $conducteur->id }}" >{{ $conducteur->nom }}</option>
                                @endforeach
                            </select>
                            @error('conducteur_id')
                                <span class="text-danger ">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="fv-row mb-7">
                        <label class="fs-6 fw-semibold form-label mt-3">
                            <span class="required">Camions</span>
                        </label>
                        <div class="w-100">
                            <select data-control="select2" class="form-select form-select-solid" name="camion_id" required>
                                <option hidden>Select Camions...</option>
                                @foreach ( $camion as $camions )
                                    <option value="{{ $camions->id }}" >{{ $camions->number }}</option>
                                @endforeach
                            </select>
                            @error('camion_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="fv-row mb-7">
                        <label class="fs-6 fw-semibold form-label mt-3">
                            <span class="required">Destinations</span>
                        </label>
                        <div class="w-100">
                            <select data-control="select2" class="form-select form-select-solid" name="destination_id" required>
                                <option hidden>Select Destinations...</option>
                                @foreach ( $destinations as $destination )
                                    <option value="{{ $destination->id }}" >{{ $destination->ville }}</option>
                                @endforeach
                            </select>
                            @error('destination_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-1 m-auto">
                    <button type="submit" data-kt-contacts-type="submit" class="btn btn-primary mt-5">
                        <span class="indicator-label">Save</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!--end::Chart widget 8-->
</div>
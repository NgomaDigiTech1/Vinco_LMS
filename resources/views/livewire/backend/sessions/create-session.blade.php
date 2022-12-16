<form wire:submit.prevent="storeSession" method="post" novalidate="novalidate">
    <div class="row g-gs">
        <div class="col-md-12">
            <div class="form-group">
                <label class="form-label" for="startDate">Annee debut</label>
                <div class="form-control-wrap">
                    <input
                        type="text"
                        class="form-control @error('start_date') error @enderror"
                        id="start_date"
                        name="start_date"
                        value="{{ old('start_date') }}"
                        wire:model.lazy="start_date"
                        data-date-format="yyyy-mm-dd"
                        placeholder="Enter Start Date"
                        required>
                    @error('start_date')
                        <span id="fv-topics-error" class="invalid">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label class="form-label" for="endDate">Annee de fin</label>
                <div class="form-control-wrap">
                    <input
                        type="text"
                        class="form-control @error('end_date') error @enderror"
                        id="end_date"
                        name="end_date"
                        wire:model.lazy="end_date"
                        value="{{ old('end_date') }}"
                        data-date-format="yyyy-mm-dd"
                        placeholder="Enter End Date"
                        required>
                    @error('end_date')
                    <span id="fv-topics-error" class="invalid">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <button type="submit" class="btn btn-md btn-primary" wire:loading.attr="disabled">
                    <div wire:loading wire:target="storeSession">
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    </div>
                    Save Academic
                </button>
            </div>
        </div>
    </div>
</form>

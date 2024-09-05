<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">Beneficiary Information</h6>
            </div>
            <div class="card-body pt-4 p-3">
                <form wire:submit.prevent='submit' method="POST" role="form text-left">
                    <div class="row">
                        <div class="col-md-6">
                           <div class="row">
                            <div class="form-group col-md-6">
                                <label for="first-name" class="form-control-label">First Name</label>
                                <div class="">
                                    <input class="form-control" wire:model="data.first_name" type="text"
                                        placeholder="" id="first-name" name="firstname" onfocus="focused(this)"
                                        onfocusout="defocused(this)">
                                </div>
                            </div>
                                <div class="form-group col-md-6">
                                    <label for="middle-name" class="form-control-label">Middle Name</label>
                                    <div class="">
                                        <input class="form-control" wire:model="data.middle_name" type="text"
                                            placeholder="" id="middle-name" name="middlename" onfocus="focused(this)"
                                            onfocusout="defocused(this)">
                                    </div>
                                </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="row">
                            <div class="col-md-6">
                                <label for="last-name" class="form-control-label">Last Name</label>
                                <div class="">
                                    <input class="form-control"  wire:model="data.last_name" type="text" placeholder=""
                                        id="last-name"   onfocus="focused(this)" onfocusout="defocused(this)">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ext-name" class="form-control-label">Ext. Name</label>
                                    <div class="">
                                        <input class="form-control" wire:model="data.ext_name" type="text"
                                            placeholder="" id="ext-name" name="extname" onfocus="focused(this)"
                                            onfocusout="defocused(this)">
                                    </div>
                                </div>
                            </div>
                           </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address" class="form-control-label">Representative</label>
                                <div class="">
                                    <input class="form-control" type="text" placeholder="Enter a fullname"  
                                        wire:model='data.representative' value="" onfocus="focused(this)" onfocusout="defocused(this)">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="address" class="form-control-label">Sex</label>
                                <div class="">
                                   <select name="" wire:model='data.sex' id="" class="form-control">
                                    <option value="" hidden>- select -</option>
                                    <option value="m">Male</option>
                                    <option value="f">Female</option>
                                   </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="user.birthdate" class="form-control-label">Birthdate</label>
                                <div class="">
                                    <input class="form-control" wire:model='data.birthdate' type="date" placeholder="" id="user.birthdate"
                                         value="" onfocus="focused(this)" onfocusout="defocused(this)">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="about">Address</label>
                        <div class="">
                            <textarea class="form-control" id="address" rows="3" wire:model="data.address"
                                placeholder="Ex: barangay, municipality, province" name="address"></textarea>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
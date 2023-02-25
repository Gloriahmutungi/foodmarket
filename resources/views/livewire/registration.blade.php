<div>
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="contact-block">
                <form wire:submit.prevent="adduser">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <!-- <h3>Book a table</h3> -->

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Firstname">Firstname</label>
                                    <input class="form-control @error('firstname') is-invalid @enderror" name="firstname"
                                        type="text" placeholder="Enter firstname" wire:model="firstname">
                                        @error('firstname')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Lastname">Lastname</label>
                                    <input type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname"
                                        placeholder="Enter lastname" wire:model="lastname">
                                        @error('lastname')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Enter email" wire:model="email">
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Password">Password</label>
                                    <input class="form-control @error('password') is-invalid @enderror" type="password" name="password"
                                        placeholder="Enter password" wire:model="password">
                                        @error('password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Phonenumber">Phonenumber</label>
                                    <input type="text" class="form-control @error('phonenumber') is-invalid @enderror" id="phonenumber" name="phonenumber"
                                        placeholder="Enter phone number" wire:model="phonenumber">
                                        @error('phonenumber')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Gender">Gender</label>
                                    <select class="form-control" name="gender" wire:model="gender">
                                        <option value="">Please select gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    @error('gender')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Address">Physical Address</label>
                                    <input class="form-control" name="address" type="text"
                                        placeholder="Your Physical location" wire:model="address">
                                        @error('address')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="submit-button text-center">
                                <button class="btn btn-common" id="submit" type="submit">Create Account</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

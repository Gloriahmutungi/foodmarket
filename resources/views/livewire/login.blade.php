<div>
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="contact-block">
                <form wire:submit.prevent="login">
                    <div class="row">
                        <div class="col-md-12">

                            <label for="Email">Email</label>
                            <div class="form-group">
                                <input class="form-control" name="email" type="email" value="" wire:model="email">
                                @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                            </div>

                            <label for="password">Password</label>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" wire:model="password">
                                @error('password')
                                        <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <a href="{{ route('register.create') }}">Not yet registered?Click here</a>
                            <a class="pull-right" href="{{ route('forget.password.get') }}">Forgotten password?</a>
                        </div>
                        <div class="col-md-12">
                            <div class="submit-button text-center">
                                <button class="btn btn-common" id="submit" type="submit">Login</button>
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

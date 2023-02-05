<x-layout>
    <div class="container">
        <form action="/register" method="POST" id="registration-form" class="register__form">
            @csrf
            <div class="register__inline">
              <label for="username-register" class="text-muted mb-1">Username</label>
              <input value="{{old('username')}}" name="name" id="username-register" class="form-control" type="text" placeholder="Pick a username" autocomplete="off" />
              @error('name')
              <p class="m-0 small alert alert-danger shadow-sm">
                {{$message}}
              </p>
              @enderror
            </div>

            <div >
              <label for="email-register" class="text-muted mb-1">Email</label>
              <input value="{{old('email')}}" name="email" id="email-register" class="form-control" type="text" placeholder="you@example.com" autocomplete="off" />
              @error('email')
              <p class="m-0 small alert alert-danger shadow-sm">
                {{$message}}
              </p>
              @enderror
            </div>

            <div >
              <label for="password-register" class="text-muted mb-1">Password</label>
              <input name="password" id="password-register" class="form-control" type="password" placeholder="Create a password" />
              @error('password')
              <p class="m-0 small alert alert-danger shadow-sm">
                {{$message}}
              </p>
              @enderror
            </div>

            <div >
              <label for="password-register-confirm" class="text-muted mb-1">Confirm Password</label>
              <input name="password_confirmation" id="password-register-confirm" class="form-control" type="password" placeholder="Confirm password" />
              @error('password_confirmation')
              <p class="m-0 small alert alert-danger shadow-sm">
                {{$message}}
              </p>
              @enderror
            </div>

            <button type="submit" class="header__auth_btn">Sign up</button>
          </form>
    </div>
</x-layout>
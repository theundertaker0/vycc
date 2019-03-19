<div class="container m-auto gallery-container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-8 col-md-8 col-lg-8 text-center">
            <h1>Contacto</h1>
            @if(isset($message))
            <div class="alert alert-success">
              {{ $message }}
            </div>
            @endif
          <form class="{{$errors->any() ? '' :  'needs-validation'}}" id="needs-validation" action="{{action('PrincipalController@contact')}}" method="post" novalidate>
            {{ csrf_field() }}
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="name">Nombre</label>
                  @if($errors->any())
                    <input type="text" name="nombre" class="form-control {{$errors->has('nombre') ? 'is-invalid':'is-valid'}}" id="name" placeholder="Nombres" value="{{ old('name')}}" required>
                  @else
                   <input type="text" name="nombre" class="form-control" id="name" placeholder="Nombres" value="{{ old('name')}}" required>
                  @endif
                  <div class="invalid-feedback">
                    {{$errors->has('nombre') ?  $errors->first('nombre') : 'Rellena el campo nombre'}}
                  </div>
                  <div class="valid-feedback">
                    Campo Válido
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="email">Email</label>
                  @if($errors->any())
                    <input type="email" name="email" class="form-control {{$errors->has('email') ? 'is-invalid':'is-valid'}}" id="email" placeholder="Email" value="{{old('email')}}" required>
                  @else
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{old('email')}}" required>
                  @endif
                  <div class="invalid-feedback">
                    {{$errors->has('email') ?  $errors->first('email') : 'Rellena el campo email con un email valido'}}
                  </div>
                  <div class="valid-feedback">
                    Campo Válido
                  </div>
                </div>
              </div>

              <div class="col-lg-12">
                <div class="form-group">
                <label for="message">Mensaje</label>
                @if($errors->any())
                  <textarea type="text" name="mensaje" class="form-control {{$errors->has('mensaje') ? 'is-invalid':'is-valid'}}" id="mensaje" placeholder="Mensaje" rows="5" required>{{ old('mensaje')}}</textarea>
                @else
                  <textarea type="text" name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje" rows="5" required>{{ old('mensaje')}}</textarea>
                @endif
                <div class="invalid-feedback">
                  {{$errors->has('mensaje') ?  $errors->first('mensaje') : 'Rellena el campo mensaje'}}
                </div>
                <div class="valid-feedback">
                  Campo Válido
                </div>
                </div>
              </div>
            </div>
            <div class="col-lg-2 send text-center text-lg-left">
              <button class="btn btn-lg btn-outline-primary" type="submit">{{__('Enviar')}}</button>
            </div>
          </form>
        </div>
    </div>
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
    </script>
</div>

@extends('layouts.app')

@section('content')
         <!-- Start Form Block -->
         <section class="form-block">
          <div class="container-xxl">
            <div class="row justify-content-center">
              <div class="col-md-6">
                <div class="form-outer">
                  <!-- Start Form Heading -->
                  <!-- Start Form Heading -->
                  <div class="form-heading bg-primary text-white text-center">
                    <h5 class="mb-3">Register with</h5>
                    <ul class="sign-in-using-list d-flex justify-content-center">
                      <li>
                        <a href="#" title="Facebook">
                          <img src="assets/img/ic-facebook-w.svg" alt="Facebook" />
                        </a>
                      </li>
                      <li>
                        <a href="#" title="Github">
                          <img src="assets/img/ic-github.svg" alt="Github" />
                        </a>
                      </li>
                      <li>
                        <a href="#" title="Google">
                          <img src="assets/img/ic-google.svg" alt="Google" />
                        </a>
                      </li>
                    </ul>
                  </div>
                  <!-- Emd Form Heading -->
                  <div class="mb-4">
                    <input type="text" class="form-control" placeholder="Name">
                  </div> 
                  <div class="mb-4">
                    <input type="text" class="form-control" placeholder="Email">
                  </div>  
                  <div class="mb-4">
                    <input type="password" class="form-control" placeholder="Password">
                  </div>  

                  <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                      I agree <a href="#" title="Terms and Conditions">Terms and Conditions</a>
                    </label>
                  </div>

                  <div class="mb-4">
                    <button class="btn btn-primary w-100">Sign Up</button>
                  </div>  
                  <div class="text-center mb-4">
                    Already have an account?
                    <a href="{{route('sign-in')}}" class="sign-up-btn">Sign in</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Form Block -->
@endsection
<div class="header bg-gradient-primary py-7 py-lg-8">
    <div class="container">
        <div class="header-body text-center mb-7">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6">
                    <!-- <h1 class="text-white">{{ __('Welcome to Argon Dashboard FREE Laravel Live Preview.') }}</h1> -->
                    <!-- <h1 class="text-white">{{ __('Here is the header.') }}</h1> -->
                    <h1 class="text-white"><?php echo __('lang.welcome') ?> {{ $site_name }}  :: <?php echo __('lang.title');?></h1>
                </div>
            </div>
        </div>
        <div>
          <nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Fourth navbar example">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Expand at md</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarsExample04">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                  <li class="nav-item active">
                    <a class="nav-link" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown04">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- @foreach (config('app.alt_langs') as $locale)
                        <li class="nav-item">
                            <a class="nav-link"
                               href=""
                                @if (app()->getLocale() == $locale) style="font-weight: bold; text-decoration: underline" @endif>{{ strtoupper($locale) }}</a>
                        </li>
                    @endforeach -->

                    <li class="nav-item">
                        <select id="language" class="form-control rounded-0" name="language">
                            @foreach(array_values(config('locale.languages')) as $language)
                                <option value="{{$language[0]}}" @if ($language[0]===App::getLocale()) selected @endif>{{ $language[3]}}</option>
                            @endforeach
                        </select>
                    </li>
                  </ul>


                <form>
                  <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                </form>
              </div>
            </div>
          </nav>
        </div>
    </div>
    <!-- <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
    </div> -->
</div>

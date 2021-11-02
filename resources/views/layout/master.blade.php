@include('partial.navbar')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>@yield('title')</h1>
          </div>
          @yield('content')
        </section>
      </div>
      
      @include('partial.footer')